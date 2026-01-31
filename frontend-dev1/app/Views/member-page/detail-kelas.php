<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Kelas - HangulDream</title>

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />
  <style>
    .text-on-surface {
      color: #1f2937;
    }

    .text-on-surface-strong {
      color: #111827;
    }

    .text-on-surface-dark {
      color: #e5e7eb;
    }

    .text-on-surface-dark-strong {
      color: #ffffff;
    }

    .bg-warning {
      background-color: #f59e0b;
    }

    .text-onWarning {
      color: #ffffff;
    }

    .pt-25 {
      padding-top: 6.25rem;
    }
  </style>

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
    <h1 class="py-6 text-white text-4xl"><?= lang('Member.courses_details') ?></h1>
  </div>

  <div class="p-5">
    <nav class="text-sm font-medium text-on-surface dark:text-on-surface-dark" aria-label="breadcrumb">
      <ol class="flex flex-wrap items-center gap-2">
        <li class="flex items-center gap-2"> <a href="<?= lang_url('kelas') ?>" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong"><?= lang('Member.class') ?></a> <span aria-hidden="true">/</span> </li>
        <li class="text-on-surface-strong font-bold dark:text-on-surface-dark-strong" aria-current="page"><?= lang('Member.courses_details') ?></li>
      </ol>
    </nav>
  </div>

  <div class="p-5">

    <div
      class="px-6 md:px-7 py-6 bg-gray-50"
      x-data="detailKelas()">

      <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-6">

        <!-- LEFT : PAKET -->
        <div class="grid gap-5 flex-1">

          <h2 class="text-xl font-bold mb-4"><?= lang('Member.program_name') ?></h2>

          <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm"></label>
            <h2 class="pl-0.5 font-bold" x-text="getProgramName(data)"></h2>
          </div>
          <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm"><?= lang('Member.course_name') ?></label>
            <h2 class="pl-0.5 font-bold" x-text="getCourseName(data)"></h2>
          </div>
          <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm"><?= lang('Member.courses_description') ?></label>
            <h2 class="pl-0.5 font-bold" x-text="getDescription(data)"></h2>
          </div>

          <div class="flex justify-between items-center mb-6">
            <span><?= lang('Member.total_price') ?></span>
            <span class="font-bold text-red-500"
              x-text="formatRupiah(data['harga'])">
            </span>
          </div>

          <button
            type="button"
            class="w-full bg-warning text-onWarning py-2 rounded-md disabled:opacity-60"
            @click="pay"
            :disabled="loading || data['isApproved'] !== '1'">
            <span x-show="!loading"><?= lang('Member.pay_now') ?></span>
            <span x-show="loading"><?= lang('Member.progress') ?>...</span>
          </button>

        </div>

        <!-- RIGHT : SUMMARY -->
        <div class="w-full md:w-[360px] bg-white rounded-md p-5 h-fit flex justify-center">

          <div id="snap-container" class="mt-4 w-max"></div>

        </div>

      </div>
    </div>

    <script>
      function detailKelas() {
        console.log(<?= json_encode($data) ?>);

        return {
          data: <?= json_encode($data) ?>,
          harga: 0,
          produk_id: null,
          loading: false,
          kelasList: [],
          selectedKelas: '',
          lang: '<?= service('request')->getLocale() ?>',

          getProgramName(data) {
            var r = data['nama_program'];
            if (this.lang == 'en') {
              r = data['nama_program_en']
            }
            if (this.lang == 'ko') {
              r = data['nama_program_kr']
            }
            if (r == null) {
              r = data['nama_program'];
            }
            return r
          },

          getCourseName(data) {
            var r = data['nama_kelas'];
            if (this.lang == 'en') {
              r = data['nama_kelas_en']
            }
            if (this.lang == 'ko') {
              r = data['nama_kelas_kr']
            }
            if (r == null) {
              r = data['nama_kelas'];
            }
            return r
          },

          getDescription(data) {
            var r = data['deskripsi'];
            if (this.lang == 'en') {
              r = data['deskripsi_en']
            }
            if (this.lang == 'ko') {
              r = data['deskripsi_kr']
            }
            if (r == null) {
              r = data['deskripsi'];
            }
            return r
          },

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

            fetch(`/kelas/get-kelas-list?${params.toString()}`, {
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

            fetch('/kelas/get-snap-token', {
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