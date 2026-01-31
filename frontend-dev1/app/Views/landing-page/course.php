<!doctype html>
<html lang="<?= service('request')->getLocale() ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <title>Course - HangulDream</title>

  <link
    href="https://fonts.googleapis.com/css?family=Rubik:300,400,500"
    rel="stylesheet" />
  <!-- Tailwind CSS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.15.4/dist/cdn.min.js"></script>

  <!-- Font Awesome 7 -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Header -->
  <?= $this->include('landing-page/header') ?>
  <!-- /Header -->

  <!-- Main content -->
  <main x-data='userSearch()'>
    <div
      class="pb-17 pt-10 px-5 bg-[radial-gradient(circle_at_30%_200%,#6D2A3A_0%,#30283F_40%,#1B2740_96%)]">
      <h1 class="text-white md:text-center text-3xl"><?= lang('App.programs_courses') ?></h1>
      <div class="py-2"></div>
      <p class="text-white sm:w-130 md:w-150 md:text-center md:m-auto">
        <?= lang('App.programs_courses_description') ?>
      </p>

      <div class="py-4"></div>

      <!-- Search form -->
      <form class="block md:m-auto w-full md:w-130!">
        <div class="relative">
          <i
            class="fa-solid fa-magnifying-glass absolute top-3 left-2.5 text-xl text-gray-500"></i>
          <input
            type="text"
            class="pl-10 py-2.5 w-full bg-gray-100 rounded-lg"
            placeholder="<?= lang('App.search_program_course') ?>"
            x-model="query"
            @input.debounce="search" />
        </div>
      </form>
    </div>

    <!-- List data program/course -->
    <div class="bg-[#faf6fb]">
      <template x-if="data.length == 0">
        <div class="py-13">
          <h1 class="text-center">
            Kelas tidak ditemukan
          </h1>
        </div>
      </template>

      <div
        class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 md:gap-x-5 gap-y-6 md:w-[90%] lg:w-245 md:m-auto px-5 py-13 justify-items-center">
        <template x-for="item in data">

          <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
            <div class="h-44 md:h-64 overflow-hidden">
              <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-2.webp" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="view of a coastal Mediterranean village on a hillside, with small boats in the water." />
            </div>
            <div class="flex flex-col gap-4 p-6">
              <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="tripDescription" x-text="getProgramName(item)"></h3>
              <p id="tripDescription" class="text-pretty text-sm mb-2" x-text="getDescription(item)">

              </p>
              <a href="<?= lang_url('course-detail') ?>" type="button" class="whitespace-nowrap bg-[#633991] px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark rounded-radius"><?= lang('App.detail') ?></a>
              <!-- <a href="<?= base_url('auth/register') ?>" type="button" class="whitespace-nowrap bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark rounded-radius">Book Now</a> -->
              <a href="<?= base_url('auth/login') ?>" type="button" class="whitespace-nowrap bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark rounded-radius"><?= lang('App.book_now') ?></a>
            </div>
          </article>

        </template>

      </div>
    </div>

    <div class="bg-[#faf6fb]">
      <div
        class="lg:grid lg:grid-cols-2 px-5 pt-14 pb-9 md:w-[90%] lg:w-245 md:m-auto">
        <div class="lg:col-span-1">
          <p class="pb-3 text-[#633991]">
            <i class="fa-solid fa-location-dot text-[#1B2740]"></i> <?= lang('App.address') ?>
          </p>
          <div class="flex gap-x-6.5">
            <span class="text-[#633991]"><i class="fa-solid fa-envelope text-[#1B2740]"></i>
              hangulcs@hangul.co.id</span>
            <span class="text-[#633991]"><i class="fa-solid fa-phone text-[#1B2740]"></i>
              +62939392892</span>
          </div>
        </div>
        <div class="lg:col-span-1 pt-3">
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-square-instagram"></i></a>
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-square-x-twitter"></i></a>
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-square-linkedin"></i></a>
        </div>
      </div>
    </div>
  </main>
  <!-- / Main Content -->

  <!-- Footer -->
  <?= $this->include('landing-page/footer') ?>
  <!-- / Footer -->
</body>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function() {
    $("#mobileMenuBtn").on("click", function() {
      $("#mobileMenu").slideToggle(200);
    });

    $("#mobileMenu a").on("click", function() {
      $("#mobileMenu").slideUp(200);
    });
  });
</script>
<script>
  function userSearch() {
    console.log(<?= json_encode($data) ?>);

    return {
      query: '',
      list: <?= json_encode($data) ?>,
      data: <?= json_encode($data) ?>,
      loading: false,
      lang: '<?= service('request')->getLocale() ?>',

      getProgramName(data) {
        var r = data['nama'];
        if (this.lang == 'en') {
          r = data['nama_en']
        }
        if (this.lang == 'ko') {
          r = data['nama_kr']
        }
        if (r == null) {
          r = data['nama'];
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

      search() {
        console.log(this.query)
        if (this.query.length < 2) {
          this.data = this.list
          return
        }


        this.loading = true

        fetch(`/kelas/search?q=${encodeURIComponent(this.query)}`, {
            headers: {
              'X-Requested-With': 'XMLHttpRequest'
            }
          })
          .then(res => res.json())
          .then(data => {
            this.data = data
          })
          .finally(() => {
            this.loading = false
          })
      }
    }
  }
</script>

</html>