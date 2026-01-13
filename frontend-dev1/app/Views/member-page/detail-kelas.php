<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Kelas - HangulDream</title>

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />

  <!-- Alpine -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.15.3/dist/cdn.min.js"></script>

  <!-- Midtrans Snap -->
  <script
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-OTeEoodOt3RZgFfj"></script>
</head>

<body>

  <?= $this->include('member-page/header') ?>

  <div class="px-6 md:px-7 pt-25 pb-7 bg-[#19253f]">
    <h1 class="py-6 text-white text-4xl">Detail Kelas</h1>
  </div>

  <div class="p-5">
    <nav class="text-sm font-medium text-on-surface dark:text-on-surface-dark" aria-label="breadcrumb">
      <ol class="flex flex-wrap items-center gap-2">
        <li class="flex items-center gap-2"> <a href="<?= base_url('kelas') ?>" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong">Kelas</a> <span aria-hidden="true">/</span> </li>
        <li class="text-on-surface-strong font-bold dark:text-on-surface-dark-strong" aria-current="page">Detail Kelas</li>
      </ol>
    </nav>
  </div>

  <div class="p-5">

    <div
      class="px-6 md:px-7 py-6 bg-gray-50"
      x-data="detailKelas()">

      <div class="flex max-w-6xl mx-auto gap-6">

        <!-- LEFT : PAKET -->
        <div class="grid gap-5 w-full">

          <h2 class="text-xl font-bold mb-4">Detail</h2>

          <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Nama Program</label>
            <h2 class="pl-0.5 font-bold" x-text="data['nama_program']"></h2>
          </div>
          <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Nama Kelas</label>
            <h2 class="pl-0.5 font-bold" x-text="data['nama_kelas']"></h2>
          </div>
          <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Deskripsi</label>
            <h2 class="pl-0.5 font-bold" x-text="data['deskripsi']"></h2>
          </div>

          <div class="flex justify-between items-center mb-6">
            <span>Total Harga</span>
            <span class="font-bold text-red-500"
              x-text="formatRupiah(data['harga'])">
            </span>
          </div>

          <button
            type="button"
            class="w-full bg-warning text-onWarning py-2 rounded-md disabled:opacity-60"
            @click="pay"
            :disabled="loading || data['isApproved'] !== '1'">
            <span x-show="!loading">Bayar</span>
            <span x-show="loading">Memproses...</span>
          </button>

        </div>

        <!-- RIGHT : SUMMARY -->
        <div class="w-full max-w-sm bg-white rounded-md p-5 h-fit">

          <div id="snap-container" class="mt-4"></div>

        </div>

      </div>
    </div>

    <script>
      function detailKelas() {
        return {
          data: <?= json_encode($data) ?>,
          harga: 0,
          produk_id: null,
          loading: false,
          kelasList: [],
          selectedKelas: '',

          setHarga(harga, produkId) {
            this.harga = Number(harga)
            this.produk_id = produkId
            this.selectedKelas = ''

            this.getKelasList()
          },

          formatRupiah(val) {
            return new Intl.NumberFormat('id-ID', {
              style: 'currency',
              currency: 'IDR'
            }).format(val)
          },

          getKelasList() {
            const params = new URLSearchParams({
              produk_id: this.produk_id,
              harga: this.harga
            })

            fetch(`/get-kelas-list?${params.toString()}`, {
                method: 'GET',
                headers: {
                  'X-Requested-With': 'XMLHttpRequest'
                }
              })
              .then(res => res.json())
              .then(data => {
                console.log(data)
                this.kelasList = data['data']
              })
          },

          pay() {
            if (this.loading) return
            this.loading = true

            fetch('/get-snap-token', {
                method: 'POST',
                credentials: 'same-origin',
                headers: {
                  'Content-Type': 'application/json',
                  'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                  pendaftar_id: this.data.pendaftarId,
                  kelas_id: this.data.kelasId,
                  harga: this.data.harga // ⚠️ tetap validasi di backend
                })
              })
              .then(res => res.json())
              .then(data => {
                console.log(data)
                window.snap.embed(data.token, {
                  embedId: 'snap-container',

                  onSuccess: res => console.log('success', res),
                  onPending: res => console.log('pending', res),
                  onError: res => console.log('error', res),
                  onClose: () => console.log('popup closed')
                })
              })
              .finally(() => {
                this.loading = false
              })
          }
        }
      }
    </script>

</body>

</html>