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
    .pt-25 {
      padding-top: 6.25rem;
    }

    .bg-warning {
      background-color: #f59e0b;
    }

    .text-onWarning {
      color: #ffffff;
    }

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

    .border-outline {
      border-color: #d1d5db;
    }

    .border-outline-dark {
      border-color: #374151;
    }

    .bg-surface-alt {
      background-color: #f9fafb;
    }

    .bg-surface-dark-alt {
      background-color: #111827;
    }

    .outline-primary-dark {
      outline-color: #60a5fa;
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
    <h1 class="py-6 text-white text-4xl"><?= lang('Member.course_list') ?></h1>
  </div>

  <div class="p-5">
    <nav class="text-sm font-medium text-on-surface dark:text-on-surface-dark" aria-label="breadcrumb">
      <ol class="flex flex-wrap items-center gap-2">
        <li class="flex items-center gap-2"> <a href="<?= lang_url('kelas') ?>" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong"><?= lang('Member.class') ?></a> <span aria-hidden="true">/</span> </li>
        <li class="text-on-surface-strong font-bold dark:text-on-surface-dark-strong" aria-current="page"><?= lang('Member.course_list') ?></li>
      </ol>
    </nav>
  </div>

  <div class="p-5">

    <div
      class="px-6 md:px-7 py-6 bg-gray-50"
      x-data="paymentData(0)">

      <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-6">

        <!-- LEFT : PAKET -->
        <div class="grid gap-5 flex-1">

          <?php foreach ($data as $index => $row): ?>
            <article
              class="cursor-pointer rounded-md border-2 p-6 transition
               border-gray-200 hover:border-primary"
              @click="setHarga(<?= $row['harga'] ?>, <?= $row['programId'] ?>)"
              :class="produk_id === <?= $row['programId'] ?>
              ? 'border-primary bg-primary/5 ring-2 ring-primary'
              : ''">
              <h3 class="text-xl font-bold"><?= esc($row['nama']) ?></h3>

              <div class="mt-4 text-2xl font-semibold">
                Rp <?= number_format($row['harga'], 0, ',', '.') ?>
              </div>

              <p class="mt-2 text-sm text-gray-600">
                <?= esc($row['deskripsi']) ?>
              </p>
            </article>
          <?php endforeach; ?>

        </div>

        <div class="sm:h-5"></div>

        <!-- RIGHT : SUMMARY -->
        <div class="w-full md:w-[360px] bg-white rounded-md p-5 h-fit">

          <h2 class="text-xl font-bold mb-4"><?= lang('Member.summary') ?></h2>

          <template x-if="kelasList.length > 0">
            <div class="mb-4">
              <div class="relative flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <label for="os" class="w-fit pl-0.5 text-sm"><?= lang('Member.select_course') ?></label>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute pointer-events-none right-4 top-8 size-5">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <select id="os" name="os" class="w-full appearance-none rounded-radius border border-outline bg-surface-alt px-4 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
                  x-model='selectedKelas'>
                  <option selected><?= lang('Member.please_select') ?></option>
                  <template x-for="kelas in kelasList">
                    <option :value="kelas['kelasId']" x-text="kelas['nama_kelas']"></option>
                  </template>
                </select>
              </div>
            </div>
          </template>

          <template x-if="kelasList.length == 0">
            <div class="mb-4">
              <h4 class="text-red-400"><?= lang('Member.course_unavailable') ?></h4>
            </div>
          </template>

          <div class="flex justify-between items-center mb-6">
            <span><?= lang('Member.total_price') ?></span>
            <span class="font-bold text-red-500"
              x-text="formatRupiah(harga)">
            </span>
          </div>

          <button
            type="button"
            class="w-full bg-warning text-onWarning py-2 rounded-md disabled:opacity-60"
            @click="pay"
            :disabled="loading || selectedKelas === ''">
            <span x-show="!loading"><?= lang('Member.register_enroll') ?></span>
            <span x-show="loading"><?= lang('Member.processing') ?>...</span>
          </button>


          <div id="snap-container" class="mt-4"></div>

        </div>

      </div>
    </div>

    <script>
      function paymentData(defaultHarga) {
        return {
          harga: defaultHarga,
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

            fetch('/kelas/daftar-kelas', {
                method: 'POST',
                credentials: 'same-origin',
                headers: {
                  'Content-Type': 'application/json',
                  'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                  produk_id: this.produk_id,
                  kelas_id: this.selectedKelas,
                  harga: this.harga // ⚠️ tetap validasi di backend
                })
              })
              // .then(res => res.json())
              // .then(data => {
              //   console.log(data)
              //   window.snap.embed(data.token, {
              //     embedId: 'snap-container',

              //     onSuccess: res => console.log('success', res),
              //     onPending: res => console.log('pending', res),
              //     onError: res => console.log('error', res),
              //     onClose: () => console.log('popup closed')
              //   })
              // })
              .then(res => res.json())
              .then(res => {
                if (res.status) {
                  window.location.href = res.redirect
                } else {
                  alert(res.message)
                }
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