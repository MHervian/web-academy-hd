<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Kelas - HangulDream</title>

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  <!-- Alpine -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.15.3/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />
  <!-- Font Awesome 7 -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <style>
    * {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
  </style>
</head>

<body>
  <?= $this->include('member-page/header') ?>

  <div class="px-6 md:px-7 pt-25 pb-7 bg-[#19253f]">
    <h1 class="py-6 text-white text-4xl"><?= lang('Member.class') ?></h1>
  </div>

  <div x-data="kelas()">
    <div class="px-6 md:px-7 py-6 bg-gray-50" x-show='list.length == 0'>
      <div class="py-5"></div>
      <p class="text-2xl">Anda belum daftar kelas. Daftar <a href="<?= lang_url('daftar-kelas') ?>" class="text-blue-500">disini</a>.</p>
      <div class="py-5"></div>
      <div class="py-5"></div>
    </div>

    <template x-if='list.length > 0'>
      <div>
        <div class="text-right p-5">
          <a href="<?= lang_url('daftar-kelas') ?>" class="inline-flex justify-center items-center gap-2 whitespace-nowrap rounded-radius bg-primary border border-primary dark:border-primary-dark px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 fill-on-primary dark:fill-on-primary-dark" fill="currentColor">
              <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>
            <?= lang('Member.add_course') ?>
          </a>

        </div>
        <div class="overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark">
          <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
            <thead class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
              <tr>
                <th class="p-4 text-center"><?= lang('Member.no') ?></th>
                <th class="p-4 text-center"><?= lang('Member.course_name') ?></th>
                <th class="p-4 text-center"><?= lang('Member.enrollment_date') ?></th>
                <th class="p-4 text-center"><?= lang('Member.progress') ?></th>
                <th class="p-4 text-center"><?= lang('Member.payment_status') ?></th>
                <th class="p-4 text-center"><?= lang('Member.status') ?></th>
                <th class="p-4 text-center"><?= lang('Member.action') ?></th>
              </tr>
            </thead>

            <tbody class="divide-y divide-outline dark:divide-outline-dark">
              <template x-for="(item, index) in list" :key="item.pendaftarId">
                <tr>
                  <!-- NO -->
                  <td class="p-4 text-center font-medium" x-text="index + 1"></td>

                  <!-- NAMA KELAS -->
                  <td class="p-4" x-text="item.nama_kelas"></td>

                  <!-- TANGGAL -->
                  <td class="p-4 text-center" x-text="item.date_registration"></td>

                  <!-- PROGRESS (DUMMY) -->
                  <td class="p-4 text-center">
                    <div class="w-full max-w-[120px] mx-auto">
                      <div class="h-2 rounded-full bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <div
                          class="h-2 bg-primary rounded-full"
                          :style="`width: ${(index % 3 === 0 ? 0 : index % 3 === 1 ? 40 : 75)}%`">
                        </div>
                      </div>
                      <span
                        class="text-xs text-gray-500"
                        x-text="`${index % 3 === 0 ? 0 : index % 3 === 1 ? 40 : 75}%`">
                      </span>
                    </div>
                  </td>

                  <!-- PAYMENT -->
                  <td class="p-4 text-center">
                    <span
                      class="inline-flex rounded-radius px-1 py-0.5 text-xs font-medium"
                      :class="item.isPaid==1 
              ? 'text-success bg-success/10' 
              : 'text-danger bg-danger/10'"
                      x-text="item.isPaid==1 ? 'Paid' : 'UnPaid'">
                    </span>
                  </td>

                  <!-- STATUS -->
                  <td class="p-4 text-center">
                    <span
                      class="inline-flex rounded-radius px-1 py-0.5 text-xs font-medium"
                      :class="item.isApproved==1 
              ? 'text-success bg-success/10' 
              : 'text-danger bg-danger/10'"
                      x-text="item.isApproved==1 ? 'Approved' : 'Pending'">
                    </span>
                  </td>

                  <!-- ACTION -->
                  <td class="p-4 text-center">
                    <a
                      :href="`<?= lang_url('detail-kelas') ?>?id=${item.pendaftarId}`"
                      class="font-semibold text-primary hover:opacity-75">
                      <?= lang('Member.details') ?>
                    </a>
                  </td>
                </tr>
              </template>
            </tbody>
          </table>

        </div>

      </div>
    </template>

  </div>


  <div class="px-5 py-5">
    <p class="text-center">&copy; Dream Korean Language Learning Center</p>
  </div>

  <script>
    function kelas() {
      console.log(<?= json_encode($data) ?>)
      return {
        list: <?= json_encode($data) ?>,
      }
    }
  </script>
</body>

</html>