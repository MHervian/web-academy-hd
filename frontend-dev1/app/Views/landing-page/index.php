<!doctype html>
<html lang="<?= service('request')->getLocale() ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <title>Homepage - HangulDream</title>

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
  <style>
    @layer utilities {
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }

      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    }

    * {
      font-family:
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        Roboto,
        Oxygen,
        Ubuntu,
        Cantarell,
        "Open Sans",
        "Helvetica Neue",
        sans-serif;
    }
  </style>
  <link
    rel="preload"
    as="image"
    href="/images/Dream Banner 1.webp"
    fetchpriority="high" />
</head>

<body>
  <!-- Header -->
  <?= $this->include('landing-page/header') ?>
  <!-- /Header -->


  <!-- Main content -->
  <main>
    <section id="home">
      <div
        id="parallax"
        class="relative min-h-[calc(100vh-80px)] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('/images/Dream Banner 1.webp');">
        <!-- overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- content -->
        <div class="relative z-10 px-5 pt-20 pb-24 text-white">
          <h1 class="text-3xl md:text-center [text-shadow:0_2px_8px_rgba(0,0,0,0.7)]"><?= lang('App.academy_name') ?></h1>

          <p class="mt-4 md:mx-auto md:max-w-xl md:text-center [text-shadow:0_1px_6px_rgba(0,0,0,0.6)]">
            <?= lang('App.hero_description') ?>
          </p>

          <div class="mt-6 flex flex-col gap-3 md:flex-row md:justify-center">
            <a
              href="<?= lang_url('course') ?>"
              class="rounded-lg px-6 py-3 font-bold text-white
                bg-[rgba(191,36,65,0.4)]
                hover:bg-[rgba(191,36,65,0.75)]
                transition">
              <?= lang('App.explore_programs') ?>
            </a>
            <a
              href="<?= lang_url('about-us') ?>"
              class="rounded-lg border border-white px-6 py-3 shadow-lg hover:shadow-xl">
              <?= lang('App.about_the_academy') ?>
            </a>
          </div>
        </div>
      </div>
    </section>


    <section id="profile">
      <div class="h-full mx-auto max-w-7xl py-5">
        <h1 class="text-2xl text-center p-5 font-bold"><?= lang('App.profile') ?></h1>
        <div class="flex justify-center">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
              <div class="aspect-video overflow-hidden">
                <img src="/images/image1.webp" class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
              </div>
              <div class="flex flex-col gap-4 p-6">
                <!-- <span class="text-sm font-medium">Dream Korean Language Learning Center</span> -->
                <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription"><?= lang('App.learning_center_name') ?></h3>
                <p id="featureDescription" class="text-pretty text-sm">
                  <?= lang('App.learning_center_description') ?>
                </p>
              </div>
            </article>
            <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
              <div class="aspect-video overflow-hidden">
                <img src="/images/image2.webp" class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
              </div>
              <div class="flex flex-col gap-4 p-6">
                <!-- <span class="text-sm font-medium">Features</span> -->
                <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription"><?= lang('App.korean_language_specialist_program') ?></h3>
                <p id="featureDescription" class="text-pretty text-sm">
                  <?= lang('App.korean_language_specialist_program_description') ?>
                </p>
              </div>
            </article>
            <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
              <div class="aspect-video overflow-hidden">
                <img src="/images/image3.webp" class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
              </div>
              <div class="flex flex-col gap-4 p-6">
                <!-- <span class="text-sm font-medium">Features</span> -->
                <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription"><?= lang('App.topik_preparation_program') ?></h3>
                <p id="featureDescription" class="text-pretty text-sm">
                  <?= lang('App.topik_preparation_program_description') ?>
                </p>
              </div>
            </article>
            <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
              <div class="aspect-video overflow-hidden">
                <img src="/images/image4.webp" class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
              </div>
              <div class="flex flex-col gap-4 p-6">
                <!-- <span class="text-sm font-medium">Features</span> -->
                <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription"><?= lang('App.professional_faculty') ?></h3>
                <p id="featureDescription" class="text-pretty text-sm">
                  <?= lang('App.professional_faculty_description') ?>
                </p>
              </div>
            </article>
          </div>
        </div>



      </div>
    </section>

    <!-- <section id="sambutan">
      <div class="p-5 sm:p-20 bg-[#faf6fb] h-full text-[#959094]">
        <div class="max-w-7xl mx-auto">
        <div class="text-center my-5 font-bold">
          <h1 class="text-2xl text-[#633991]">Sambutan</h1>
        </div>
        <p class="my-5 font-bold text-[#633991]">
          Salam sejahtera,
        </p>
        <p class="my-5">
          Terima kasih telah mengunjungi situs resmi YAYASAN Dream Korean Language Learning Center.

        </p>
        <p class="my-5 text-justify">
          Pusat ini merupakan lembaga nirlaba yang dijalankan dengan dukungan dana dari para pengusaha Korea.Didirikan pada bulan 00 tahun
          2025, pusat ini menyelenggarakan <span class="font-bold text-[#633991]">Program Spesialis Bahasa Korea</span> serta <span class="font-bold text-[#633991]">Program Persiapan Ujian Kemahiran Bahasa Korea (TOPIK)</span>.
        </p>
        <p class="my-5 text-justify">
          Dengan berkembangnya gelombang Hallyu, minat dan semangat masyarakat Indonesia untuk mempelajari bahasa Korea semakin
          meningkat. Namun, jumlah tenaga ahli Indonesia yang mampu mengajar bahasa Korea masih terbatas. Selain itu, kesempatan belajar
          untuk memperoleh sertifikat <span class="font-bold text-[#633991]">TOPIK level 3 atau 4</span>, yang menjadi syarat penting untuk melanjutkan studi di Korea maupun bekerja di
          perusahaan Korea, juga masih sangat kurang. Melihat ribuan orang Indonesia mengikuti ujian TOPIK setiap tahunnya, kami yakin bahwa
          pembukaan program ini sangatlah tepat pada waktunya.
        </p>
        <p class="my-5 text-justify">
          Pusat ini berkomitmen memberikan kesempatan bagi generasi muda Indonesia untuk mengikuti kursus dengan biaya yang terjangkau.
          Melalui kerja sama pendidikan antara perusahaan Korea yang berinvestasi di Indonesia dan masyarakat Indonesia, kami berharap dapat
          menciptakan landasan bagi hubungan yang saling menguntungkan.
        </p>
        <p class="my-5">
          Mari bersama kami membangun visi dan harapan Anda melalui pusat ini.
        </p>
        <p class="my-5 font-bold text-[#633991]">
          Terima kasih.

        </p>
        <p class="my-5 text-right font-bold text-[#633991]">
          Ketua Yayasan Dream Korean Language Learning Center, Lee Sun Ah

        </p>
        </div>
        
      </div>
    </section> -->

    <section>
      <div class="h-full p-5">
        <div class="max-w-5xl mx-auto space-y-10">

          <!-- JUDUL (ASLI) -->
          <div class="bg-white p-5 text-center">
            <h2 class="text-2xl font-bold"><?= lang('App.foundation_structure') ?></h2>
          </div>

          <div class="relative max-w-6xl mx-auto">

            <!-- PIMPINAN (ASLI) -->
            <div class="flex justify-center relative z-10">
              <div class="bg-gradient-to-b from-blue-400 to-blue-600 text-white px-10 py-5 rounded-2xl shadow-xl text-center">
                <div class="font-bold text-lg opacity-90 flex justify-center items-center gap-1">
                  👑 <span><?= lang('App.chairman') ?></span>
                </div>
              </div>
            </div>

            <!-- SVG CONNECTOR (ASLI – DESKTOP) -->
            <svg
              class="absolute left-1/2 top-[95px] -translate-x-1/2 hidden md:block"
              width="900" height="160" viewBox="0 0 900 160" fill="none">
              <path d="M450 0 V60" stroke="#BFDBFE" stroke-width="2" />
              <path d="M450 60 C450 90 150 90 150 120" stroke="#BFDBFE" stroke-width="2" />
              <path d="M450 60 C450 90 450 90 450 120" stroke="#BFDBFE" stroke-width="2" />
              <path d="M450 60 C450 90 750 90 750 120" stroke="#BFDBFE" stroke-width="2" />
            </svg>

            <!-- ADD: GARIS MOBILE DARI PIMPINAN -->
            <div class="md:hidden flex flex-col items-center my-2">
              <div class="w-0.5 h-8 bg-blue-200"></div>
            </div>
            <!-- END ADD -->

            <!-- CARD GRID (ASLI) -->
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-8 md:mt-40">

              <!-- CARD 1 -->
              <div class="bg-blue-50 rounded-2xl p-6 shadow-sm">
                <h3 class="font-semibold text-blue-700 mb-3 flex items-center gap-2">
                  📘 <?= lang('App.korea_indonesia_consulting') ?>
                </h3>
                <p class="text-gray-700 text-sm">
                  <?= lang('App.korea_indonesia_consulting') ?>
                </p>
              </div>

              <!-- ADD: GARIS ANTAR CARD (MOBILE) -->
              <div class="md:hidden flex flex-col items-center my-2">
                <div class="w-0.5 h-8 bg-blue-200"></div>
              </div>
              <!-- END ADD -->

              <!-- CARD 2 -->
              <div class="bg-green-50 rounded-2xl p-6 shadow-sm">
                <h3 class="font-semibold text-green-700 mb-3 flex items-center gap-2">
                  🤝 <?= lang('App.partnership') ?>
                </h3>
                <ul class="text-sm text-gray-700 space-y-2">
                  <li><?= lang('App.jiks') ?></li>
                  <li><?= lang('App.university_of_indonesia') ?></li>
                  <li><?= lang('App.gyeongnam_chungnam_office') ?></li>
                </ul>
              </div>

              <!-- ADD: GARIS ANTAR CARD (MOBILE) -->
              <div class="md:hidden flex flex-col items-center my-2">
                <div class="w-0.5 h-8 bg-blue-200"></div>
              </div>
              <!-- END ADD -->

              <!-- CARD 3 -->
              <div class="bg-purple-50 rounded-2xl p-6 shadow-sm">
                <h3 class="font-semibold text-purple-700 mb-3 flex items-center gap-2">
                  📚 <?= lang('App.program_details') ?>
                </h3>
                <ul class="text-sm text-gray-700 space-y-3">
                  <li class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                    <?= lang('App.topik_level_5_plus') ?>
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 bg-blue-500 rounded-full"></span>
                    <?= lang('App.topik_level_3_4') ?>
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 bg-gray-400 rounded-full"></span>
                    <?= lang('App.special_purpose_korean_course') ?>
                  </li>
                </ul>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>



    <section>
      <div class="h-full p-5 bg-[#faf6fb]">
        <div class="text-center p-5">
          <h1 class="text-2xl font-bold text-[#633991]">
            <?= lang('App.facility_information') ?>
          </h1>
        </div>

        <div class="max-w-6xl mx-auto space-y-8">
          <!-- Judul -->
          <!-- <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-bold mb-2">
              Fasilitas Digital Sekolah (Tingkat SD)
            </h2>
            <p class="text-gray-600">
              Ringkasan kepemilikan ruang kelas digital dan perangkat pembelajaran
            </p>
          </div> -->

          <!-- Ringkasan Utama -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-blue-50 p-5 rounded-lg shadow text-center">
              <p class="text-sm text-gray-600"><?= lang('App.total_digital_rooms') ?></p>
              <p class="text-3xl font-bold text-blue-700">30</p>
            </div>

            <div class="bg-green-50 p-5 rounded-lg shadow text-center">
              <p class="text-sm text-gray-600"><?= lang('App.total_devices') ?></p>
              <p class="text-3xl font-bold text-green-700">107</p>
            </div>

            <div class="bg-purple-50 p-5 rounded-lg shadow text-center">
              <p class="text-sm text-gray-600"><?= lang('App.special_rooms') ?></p>
              <p class="text-3xl font-bold text-purple-700">18</p>
            </div>
          </div>

          <!-- Detail Ruang Kelas -->
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">
              🏫 <?= lang('App.digital_classrooms') ?>
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <p class="font-semibold mb-2"><?= lang('App.general_rooms') ?> (12)</p>
                <p class="text-gray-700">
                  <?= lang('App.class_summary') ?>
                </p>
              </div>

              <div>
                <p class="font-semibold mb-2"><?= lang('App.special_rooms') ?> (18)</p>
                <ul class="list-none ml-5 text-gray-700 space-y-1">
                  <li class="flex gap-2 justify-items-center">
                    <svg class="w-5 h-5" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H13V19H15C15.5523 19 16 19.4477 16 20C16 20.5523 15.5523 21 15 21H9C8.44772 21 8 20.5523 8 20C8 19.4477 8.44772 19 9 19H11V18H5C3.34315 18 2 16.6569 2 15V6ZM5 5C4.44772 5 4 5.44772 4 6V15C4 15.5523 4.44772 16 5 16H19C19.5523 16 20 15.5523 20 15V6C20 5.44772 19.5523 5 19 5H5Z" fill="#000000"></path>
                      </g>
                    </svg>
                    <h6> <?= lang('App.computer') ?> (1)</h6>
                  </li>
                  <li class="flex gap-2 justify-items-center">
                    <svg class="w-5 h-5" fill="#000000" width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <title>lab</title>
                        <path d="M19.332 19.041c0 0-1.664 2.125-3.79 0-2.062-2-3.562 0-3.562 0l-4.967 9.79c-0.144 0.533 0.173 1.081 0.706 1.224h16.497c0.533-0.143 0.85-0.69 0.707-1.224l-5.591-9.79zM26.939 28.33l-7.979-13.428v-0.025l-0.014-7.869h0.551c0.826 0 1.498-0.671 1.498-1.499 0-0.827-0.672-1.498-1.498-1.498h-7.995c-0.827 0-1.498 0.671-1.498 1.498 0 0.828 0.671 1.499 1.498 1.499h0.482l-0.016 7.871-6.908 13.451c-0.428 1.599 0.521 3.242 2.119 3.67h17.641c1.6-0.428 2.549-2.071 2.119-3.67zM24.553 30.998l-17.108-0.019c-1.065-0.286-1.697-1.382-1.412-2.446l6.947-13.616 0.021-8.908h-1.498c-0.275 0-0.499-0.224-0.499-0.5s0.224-0.499 0.499-0.499h7.995c0.275 0 0.498 0.224 0.498 0.499 0 0.276-0.223 0.5-0.498 0.5h-1.498l0.025 8.875 7.939 13.666c0.286 1.067-0.347 2.163-1.411 2.448zM16.48 2.512c0 0.552 0.448 1 1 1s1-0.448 1-1-0.447-1-1-1-1 0.447-1 1zM17.48 0.012c0.828 0 1.5-0.671 1.5-1.5s-0.672-1.5-1.5-1.5-1.5 0.671-1.5 1.5 0.672 1.5 1.5 1.5zM13.48 2.512c0.553 0 1-0.448 1-1s-0.447-1-1-1-1 0.448-1 1 0.447 1 1 1z"></path>
                      </g>
                    </svg>
                    <h6> <?= lang('App.science_laboratory') ?> (1)</h6>
                  </li>
                  <li class="flex gap-2 justify-items-center">
                    <svg class="w-5 h-5" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M14 10h2v.757a4.5 4.5 0 0 1 7 3.743V20h-2v-5.5c0-1.43-1.175-2.5-2.5-2.5S16 13.07 16 14.5V20h-2V10zm-2-6v2H4v5h8v2H4v5h8v2H2V4h10z"></path>
                      </g>
                    </svg>
                    <h6> <?= lang('App.english') ?> (10)</h6>
                  </li>
                  <li class="flex gap-2 justify-items-center">
                    <svg class="w-5 h-5" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M14 10h2v.757a4.5 4.5 0 0 1 7 3.743V20h-2v-5.5c0-1.43-1.175-2.5-2.5-2.5S16 13.07 16 14.5V20h-2V10zm-2-6v2H4v5h8v2H4v5h8v2H2V4h10z"></path>
                      </g>
                    </svg>
                    <h6> <?= lang('App.indonesian')  ?> (3)</h6>
                  </li>
                  <li class="flex gap-2 justify-items-center">
                    <svg class="w-5 h-5" width="64px" height="64px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <rect x="0" fill="none" width="20" height="20"></rect>
                        <g>
                          <path d="M8.55 3.06c1.01.34-1.95 2.01-.1 3.13 1.04.63 3.31-2.22 4.45-2.86.97-.54 2.67-.65 3.53 1.23 1.09 2.38.14 8.57-3.79 11.06-3.97 2.5-8.97 1.23-10.7-2.66-2.01-4.53 3.12-11.09 6.61-9.9zm1.21 6.45c.73 1.64 4.7-.5 3.79-2.8-.59-1.49-4.48 1.25-3.79 2.8z"></path>
                        </g>
                      </g>
                    </svg>
                    <h6> <?= lang('App.art') ?> (1)</h6>
                  </li>
                  <li class="flex gap-2 justify-items-center">
                    <svg class="w-5 h-5" width="64px" height="64px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M15 1H4V9H3C1.34315 9 0 10.3431 0 12C0 13.6569 1.34315 15 3 15C4.65685 15 6 13.6569 6 12V5H13V9H12C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12V1Z" fill="#000000"></path>
                      </g>
                    </svg>
                    <h6> <?= lang('App.music') ?> (1)</h6>
                  </li>
                  <li class="flex gap-2 justify-items-center">
                    <svg class="w-5 h-5" width="64px" height="64px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <title>library</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Combined-Shape" fill="#000000" transform="translate(42.666667, 85.333333)">
                            <path d="M3.55271368e-14,298.666667 L426.666667,298.666667 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,298.666667 Z M42.6666667,1.42108547e-14 L106.666667,1.42108547e-14 L106.666667,277.333333 L42.6666667,277.333333 L42.6666667,1.42108547e-14 Z M128,21.3333333 L192,21.3333333 L192,277.333333 L128,277.333333 L128,21.3333333 Z M288.933802,36.9522088 L351.961498,25.8387255 L399.909944,277.333333 L330.641827,277.70319 L288.933802,36.9522088 Z M213.333333,21.3333333 L277.333333,21.3333333 L277.333333,277.333333 L213.333333,277.333333 L213.333333,21.3333333 Z"> </path>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <h6> <?= lang('App.library') ?> (1)</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Perangkat Digital -->
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">
              💻 <?= lang('App.digital_learning_devices') ?>
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600"><?= lang('App.pc') ?></p>
                <p class="text-2xl font-bold">35</p>
                <p class="text-xs text-gray-500"><?= lang('App.student_computer_lab') ?></p>
              </div>

              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600"><?= lang('App.chromebook') ?></p>
                <p class="text-2xl font-bold">33</p>
                <p class="text-xs text-gray-500"><?= lang('App.elementary_aisw_room') ?></p>
              </div>

              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600"><?= lang('App.tablet') ?></p>
                <p class="text-2xl font-bold">47</p>
                <p class="text-xs text-gray-500"><?= lang('App.teachers') ?></p>
              </div>

              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600"><?= lang('App.other_devices') ?></p>
                <p class="text-2xl font-bold">25</p>
                <p class="text-xs text-gray-500">
                  <?= lang('App.visualizer') ?> (23) <br> <?= lang('App.gopro') ?> (2)
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section>
      <div class="max-w-5xl mx-auto space-y-8 p-5">

        <!-- TITLE -->
        <div class="text-center mb-12">
          <h1 class="text-2xl font-semibold text-gray-900 tracking-tight">
            <?= lang('App.partnership_consortium') ?>
          </h1>
          <p class="text-gray-500 mt-2 text-sm">
            <?= lang('App.korea_indonesia_education_cooperation') ?>
          </p>
        </div>

        <!-- INFO BOX -->
        <div class="bg-blue-50/70 border border-blue-100 rounded-2xl px-6 py-5 flex gap-4 items-start mb-12">
          <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
            <!-- handshake icon -->
            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8"
              viewBox="0 0 24 24">
              <path d="M8 10l4 4 4-4" />
              <path d="M12 14l4 4 4-4M12 14l-4 4-4-4" />
            </svg>
          </div>
          <p class="text-gray-700 text-sm leading-relaxed">
            <?= lang('App.partnership_consortium_description') ?>
          </p>
        </div>

        <!-- SECTION TITLE -->
        <div class="flex items-center gap-2 mb-6">
          <svg class="w-8" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 495.622 495.622" xml:space="preserve" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <path style="fill:#030104;" d="M495.622,113.089v150.03c0,0-32.11,6.326-38.725,7.158c-6.594,0.83-27.316,7.521-42.334-6.914 c-23.16-22.197-105.447-104.03-105.447-104.03s-14.188-13.922-36.969-1.89c-20.912,11.022-51.911,27.175-64.859,33.465 c-24.477,13.028-44.764-7.642-44.764-23.387c0-12.213,7.621-20.502,18.515-26.598c29.524-17.898,91.752-52.827,117.67-66.598 c15.754-8.379,27.105-9.097,48.734,9.124c26.638,22.403,50.344,42.824,50.344,42.824s7.732,6.453,20.063,3.854 C448.13,123.725,495.622,113.089,495.622,113.089z M168.098,367.3c3.985-10.238,2.653-21.689-4.987-29.545 c-6.865-7.027-16.888-8.879-26.445-6.689c2.673-9.479,1.197-19.568-5.705-26.688c-6.886-7.009-16.89-8.898-26.446-6.688 c2.653-9.465,1.181-19.553-5.725-26.652c-10.814-11.092-29.519-10.616-41.807,1.097c-12.223,11.729-20.053,32.979-9.144,45.487 c10.891,12.445,23.405,4.873,32.945,2.699c-2.654,9.465-10.606,18.269-0.813,30.658c9.784,12.395,23.404,4.875,32.954,2.721 c-2.663,9.429-10.268,19.117-0.851,30.604c9.502,11.522,25.065,5.383,35.344,2.19c-3.967,10.199-12.458,21.193-1.549,33.513 c10.892,12.409,36.063,6.668,48.358-5.063c12.262-11.729,13.439-30.318,2.654-41.445 C189.435,365.865,178.335,364.089,168.098,367.3z M392.442,289.246c-88.88-88.881-47.075-47.058-94.906-94.992 c0,0-14.375-14.311-33.321-5.998c-13.3,5.828-30.423,13.771-43.307,19.835c-14.158,7.424-24.347,9.722-29.131,9.69 c-27.37-0.179-49.576-22.178-49.576-49.521c0-17.738,9.417-33.181,23.462-41.947c19.75-13.667,65.21-37.847,65.21-37.847 s-13.849-17.549-44.187-17.549c-30.329,0-93.695,41.512-93.695,41.512s-17.976,11.514-43.601,1.143L0,96.373V268.05 c0,0,14.103,4.082,26.775,9.258c2.862-8.162,7.48-15.699,13.886-21.924c21.023-20.024,55.869-20.232,74.996-0.537 c5.762,5.987,9.783,13.129,11.835,21.024c7.707,2.379,14.688,6.593,20.298,12.373c5.779,5.947,9.785,13.129,11.854,20.984 c7.698,2.381,14.669,6.611,20.298,12.395c6.339,6.537,10.562,14.433,12.534,22.988c8.047,2.344,15.319,6.705,21.176,12.693 c11.495,11.807,15.575,27.826,13.103,43.278c0.02,0,0.058,0,0.076,0.035c0.188,0.246,7.122,7.976,11.446,12.336 c8.474,8.482,22.311,8.482,30.811,0c8.444-8.479,8.481-22.289,0-30.811c-0.304-0.303-30.572-31.963-28.136-34.418 c2.418-2.438,40.981,37.688,41.699,38.422c8.463,8.465,22.291,8.465,30.792,0c8.481-8.479,8.463-22.289,0-30.791 c-0.416-0.396-2.152-2.059-2.796-2.721c0,0-38.234-34.06-35.324-36.97c2.946-2.928,50.438,41.392,50.515,41.392 c8.537,7.688,21.687,7.631,29.9-0.586c7.991-7.99,8.162-20.629,1.078-29.146c-0.15-0.453-36.194-38.121-33.381-40.955 c2.854-2.871,38.519,33.853,38.594,33.929c8.444,8.463,22.291,8.463,30.792,0c8.463-8.464,8.463-22.291,0-30.83 C392.706,289.396,392.555,289.32,392.442,289.246z"></path>
              </g>
            </g>
          </svg>
          <h2 class="text-lg font-semibold text-gray-900">
            <?= lang('App.consortium_members') ?>
          </h2>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <!-- CARD -->
          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex justify-between items-center">
            <div>
              <h3 class="font-medium text-gray-900">
                Sekolah Korea Indonesia Jakarta
              </h3>
              <p class="text-sm text-gray-500 mt-1">
                Institusi pendidikan dasar &amp; menengah
              </p>
            </div>
            <svg fill="#000000" width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <title>school</title>
                <path d="M30 21.25h-6.25v-8.957l5.877 3.358c0.107 0.062 0.236 0.098 0.373 0.099h0c0.414-0.001 0.749-0.336 0.749-0.751 0-0.277-0.15-0.519-0.373-0.649l-0.004-0.002-13.623-7.784v-0.552c0.172 0.016 0.35 0.068 0.519 0.068 0.004 0 0.010 0 0.015 0 0.475 0 0.934-0.067 1.368-0.193l-0.035 0.009c0.323-0.063 0.693-0.099 1.073-0.099 0.392 0 0.775 0.039 1.146 0.112l-0.037-0.006c0.039 0.007 0.083 0.012 0.129 0.012 0.184 0 0.352-0.068 0.479-0.181l-0.001 0.001c0.161-0.139 0.263-0.343 0.264-0.571v-2.812c0 0 0-0 0-0 0-0.355-0.247-0.653-0.579-0.73l-0.005-0.001c-0.419-0.111-0.9-0.176-1.396-0.176-0.5 0-0.985 0.065-1.446 0.187l0.039-0.009c-0.288 0.067-0.618 0.105-0.958 0.105-0.231 0-0.457-0.018-0.678-0.052l0.025 0.003c-0.122-0.256-0.378-0.43-0.676-0.43-0.412 0-0.746 0.334-0.746 0.746 0 0.001 0 0.003 0 0.004v-0 4.565l-13.622 7.784c-0.227 0.132-0.378 0.374-0.378 0.651 0 0.414 0.336 0.75 0.75 0.75 0.137 0 0.265-0.037 0.376-0.101l-0.004 0.002 5.878-3.359v8.957h-6.25c-0.414 0-0.75 0.336-0.75 0.75v0 8c0 0.414 0.336 0.75 0.75 0.75h28c0.414-0 0.75-0.336 0.75-0.75v0-8c-0-0.414-0.336-0.75-0.75-0.75v0zM18.658 3.075c0.298-0.082 0.64-0.13 0.993-0.13 0.183 0 0.363 0.013 0.539 0.037l-0.020-0.002v1.339c-0.16-0.013-0.345-0.021-0.533-0.021-0.489 0-0.966 0.052-1.425 0.151l0.044-0.008c-0.304 0.088-0.653 0.139-1.014 0.139-0.174 0-0.344-0.012-0.512-0.034l0.020 0.002v-1.323c0.15 0.014 0.325 0.021 0.502 0.021 0.499 0 0.984-0.062 1.447-0.18l-0.041 0.009zM2.75 22.75h5.5v6.5h-5.5zM9.75 22v-10.564l6.25-3.571 6.25 3.572v17.814h-2.5v-5.25c-0-0.414-0.336-0.75-0.75-0.75h-6c-0.414 0-0.75 0.336-0.75 0.75v0 5.25h-2.5zM13.75 29.25v-4.5h4.5v4.5zM29.25 29.25h-5.5v-6.5h5.5zM16 19.75c2.071 0 3.75-1.679 3.75-3.75s-1.679-3.75-3.75-3.75c-2.071 0-3.75 1.679-3.75 3.75v0c0.002 2.070 1.68 3.748 3.75 3.75h0zM16 13.75c1.243 0 2.25 1.007 2.25 2.25s-1.007 2.25-2.25 2.25c-1.243 0-2.25-1.007-2.25-2.25v0c0.002-1.242 1.008-2.248 2.25-2.25h0z"></path>
              </g>
            </svg>
          </div>

          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex justify-between items-center">
            <div>
              <h3 class="font-medium text-gray-900">
                Pusat Pendidikan Korea di Indonesia
              </h3>
              <p class="text-sm text-gray-500 mt-1">
                Lembaga resmi pendidikan Korea
              </p>
            </div>
            <svg width="64px" height="64px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet" fill="#000000">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill="#E8E8E8" d="M494.661 425.149c-159.52-37.139-319.04 45.468-478.559 8.329C7.209 431.416 0 422.098 0 413.212V98.788C0 89.89 7.209 84.79 16.101 86.851c159.52 37.139 319.04-45.468 478.559-8.329c8.892 2.061 16.101 11.379 16.101 20.266v314.424c.001 8.898-7.208 13.998-16.1 11.937z"></path>
                <circle fill="#FF473E" cx="255.381" cy="256" r="92.048"></circle>
                <path fill="#0B67B2" d="M346.636 245.675c-2.258-10.955-10.722-35.009-41.54-35.009c-39.905 0-53.429 81.667-100.095 81.667c-37 0-41.667-36.334-41.667-36.334c0 50.837 41.211 92.048 92.048 92.048s92.048-41.211 92.048-92.048c0-2.295-.087-4.57-.252-6.824c-.128-.875-.307-2.052-.542-3.5z"></path>
                <path fill="#2B3B47" d="M42.333 199.333a7.155 7.155 0 0 1 0-10.118l38.882-38.882a7.155 7.155 0 0 1 10.118 10.118l-38.882 38.882a7.153 7.153 0 0 1-10.118 0zm27.113 16.994l38.882-38.882a7.155 7.155 0 0 0-10.118-10.118l-38.882 38.882a7.155 7.155 0 0 0 0 10.118a7.153 7.153 0 0 0 10.118 0zm16.994 16.994l38.882-38.882a7.155 7.155 0 0 0-10.118-10.118l-38.882 38.882a7.155 7.155 0 0 0 10.118 10.118zm318.495-88.471l38.882 38.882a7.155 7.155 0 0 0 10.118-10.118l-38.882-38.882a7.155 7.155 0 0 0-10.118 10.118zm10.244 44.232l11.644 11.644a7.155 7.155 0 0 0 10.118-10.118l-11.644-11.644a7.155 7.155 0 0 0-10.118 10.118zm-25.587-25.586l11.644 11.644a7.155 7.155 0 0 0 10.118-10.118l-11.644-11.644a7.155 7.155 0 0 0-10.118 10.118zm59.575-8.402l11.644 11.644a7.155 7.155 0 0 0 10.118-10.118l-11.644-11.644a7.155 7.155 0 0 0-10.118 10.118zm-25.587-25.586l11.644 11.644a7.155 7.155 0 0 0 10.118-10.118l-11.644-11.644a7.155 7.155 0 0 0-10.118 10.118zM123.67 365.387l-37.23-37.23a7.155 7.155 0 0 0-10.118 10.118l37.23 37.23a7.155 7.155 0 0 0 10.118-10.118zm-33.988 33.988l-37.23-37.23a7.155 7.155 0 0 0-10.118 10.118l37.23 37.23a7.155 7.155 0 0 0 10.118-10.118zm-8.593-42.581L69.445 345.15a7.155 7.155 0 0 0-10.118 10.118l11.644 11.644a7.155 7.155 0 0 0 10.118-10.118zm25.587 25.587l-11.644-11.644a7.155 7.155 0 0 0-10.118 10.118l11.644 11.644a7.155 7.155 0 0 0 10.118-10.118zm351.784-30.244l11.644-11.644a7.155 7.155 0 0 0-10.118-10.118l-11.644 11.644a7.155 7.155 0 0 0 10.118 10.118zm-25.587 25.587l11.644-11.644a7.155 7.155 0 0 0-10.118-10.118l-11.644 11.644a7.155 7.155 0 0 0 10.118 10.118zm-8.401-59.575l11.644-11.644a7.155 7.155 0 0 0-10.118-10.118l-11.644 11.644a7.155 7.155 0 0 0 10.118 10.118zm-25.587 25.587l11.644-11.644a7.155 7.155 0 0 0-10.118-10.118l-11.644 11.644a7.155 7.155 0 0 0 10.118 10.118zm42.581-8.593l11.644-11.644a7.155 7.155 0 0 0-10.118-10.118l-11.644 11.644a7.155 7.155 0 0 0 10.118 10.118zm-25.587 25.587l11.644-11.644a7.155 7.155 0 0 0-10.118-10.118l-11.644 11.644a7.155 7.155 0 0 0 10.118 10.118z"></path>
              </g>
            </svg>
          </div>

          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex justify-between items-center">
            <div>
              <h3 class="font-medium text-gray-900">
                Universitas Indonesia (UI)
              </h3>
              <p class="text-sm text-gray-500 mt-1">
                Universitas dengan jurusan Bahasa Korea
              </p>
            </div>
            <img src="/icons/UI (Universitas Indonesia) Logo (SVG) - Vector69Com.svg" alt="" class="w-12" srcset="">
          </div>

          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex justify-between items-center">
            <div>
              <h3 class="font-medium text-gray-900">
                Kantor Perwakilan Gyeongnam &amp; Chungnam
              </h3>
              <p class="text-sm text-gray-500 mt-1">
                Perwakilan pemerintah daerah Korea di Indonesia
              </p>
            </div>
            <svg width="64px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill="#000000" d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z"></path>
                <path fill="#000000" d="M512 448a64 64 0 1 0 0-128 64 64 0 0 0 0 128zm0 64a128 128 0 1 1 0-256 128 128 0 0 1 0 256zm345.6 192L960 960H672v-64H352v64H64l102.4-256h691.2zm-68.928 0H235.328l-76.8 192h706.944l-76.8-192z"></path>
              </g>
            </svg>
          </div>

          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex justify-between items-center">
            <div>
              <h3 class="font-medium text-gray-900">
                Universitas Siber Asia (Uncia)
              </h3>
              <p class="text-sm text-gray-500 mt-1">
                Asia Cyber University
              </p>
            </div>
            <img class="w-12" src="/icons/120061378_110520754141084_6594683579243627143_n.jpg" alt="" srcset="">
          </div>

          <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex justify-between items-center">
            <div>
              <h3 class="font-medium text-gray-900">
                Pusat Pendidikan Hanuri di Indonesia
              </h3>
              <p class="text-sm text-gray-500 mt-1">
                Lembaga pelatihan &amp; bahasa Korea
              </p>
            </div>
            <img class="w-16" src="/icons/download.jpeg" alt="" srcset="">
          </div>


        </div>
    </section>

    <!-- <section>
      <div class="bg-[#faf6fb] w-full">

      </div>
    </section> -->

    <!-- <div class="bg-[#faf6fb]">
      <div class="px-5 md:w-[90%] lg:w-245 md:m-auto pt-15 pb-14">
        <h2 class="text-center text-[#633991] text-2xl font-bold">
          Belajar Efektif, Raih Masa Depan
        </h2>
        <p class="py-1.5 text-center text-[#959094]">
          Dengan kurikulum terstruktur, persiapan TOPIK intensif, dan pengajar
          profesional, setiap langkah belajarmu diarahkan untuk mencapai
          sertifikasi dan peluang baru di Korea.
        </p>

        <div class="py-2.5"></div>

        <div class="md:grid md:grid-cols-3 md:gap-x-3">
          <div
            class="md:col-span-1 relative pl-6 pr-3 py-4 bg-white rounded-lg before:absolute before:top-0 before:bottom-0 before:left-0 before:w-[3px] before:bg-linear-to-b before:from-[#9477b4] before:to-[#fc73b4] before:content-[''] shadow-sm">
            <h3 class="text-[#633991] font-semibold text-lg">
              Kursus Spesialis Bahasa Korea
            </h3>
            <div class="py-1"></div>
            <p class="text-gray-400 text-sm">
              Kurikulum bahasa Korea disusun secara sistematis dengan bahan
              ajar yang dikembangkan akademi berlandaskan pengalaman,
              penelitian, dan kerjasama dengan Departemen Bahasa Korea
              Universitas Indonesia (UI).
            </p>
          </div>

          <div class="py-2.5 md:hidden"></div>

          <div
            class="md:col-span-1 relative pl-6 pr-3 py-4 bg-white rounded-lg before:absolute before:top-0 before:bottom-0 before:left-0 before:w-[3px] before:bg-linear-to-b before:from-[#9477b4] before:to-[#fc73b4] before:content-[''] shadow-sm">
            <h3 class="text-[#633991] font-semibold text-lg">
              Kursus Persiapan Ujian TOPIK
            </h3>
            <div class="py-1"></div>
            <p class="text-gray-400 text-sm">
              Kami melakukan pelatihan intensif TOPIK Level 3 atau 4 — syarat
              utama untuk melanjutkan studi ke Korea hingga bekerja di
              perusahaan Korea. Dengan metode yang fokus dan terarah, peserta
              dapat mempersiapkan diri dalam waktu relatif singkat. Pada akhir
              program, setiap peserta akan menjalani evaluasi kemajuan, dan
              yang berhasil memenuhi kriteria kelulusan akan menerima
              sertifikat resmi.
            </p>
          </div>

          <div class="py-2.5 md:hidden"></div>

          <div
            class="md:col-span-1 relative pl-6 pr-3 py-4 bg-white rounded-lg before:absolute before:top-0 before:bottom-0 before:left-0 before:w-[3px] before:bg-linear-to-b before:from-[#9477b4] before:to-[#fc73b4] before:content-[''] shadow-sm">
            <h3 class="text-[#633991] font-semibold text-lg">
              Tenaga Pengajar Profesional
            </h3>
            <div class="py-1"></div>
            <p class="text-gray-400 text-sm">
              Pengajaran didukung oleh instruktur ahli dengan berpengalaman
              luas di bidang bahasa Korea. Kami terus mengembangkan metode dan
              materi agar pembelajaran lebih efektif, sekaligus membimbing
              peserta hingga berhasil menyelesaikan kursus.
            </p>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Program/Course -->
    <!-- <div class="bg-[#faf6fb]">
      <div
        class="md:grid md:grid-cols-3 md:gap-x-5.5 pt-10 pb-9 md:w-[90%] lg:w-245 md:m-auto">
        <div class="px-5 md:col-span-1">
          <h2
            class="text-center md:text-left! text-[#633991] text-2xl font-bold">
            Program Kami
          </h2>
          <p class="text-center md:text-left! py-1.5 text-[#959094]">
            Setiap program kami rancang sesuai dengan fase perjalanan
            belajarmu. Mulai dari level dasar, persiapan ujian TOPIK, kursus
            spesialis, hingga program untuk calon pengajar bahasa Korea
            profesional.
          </p>
          <div class="py-2.5"></div>
          <a
            href="<?= base_url('course') ?>"
            class="block px-4 py-3 sm:w-60 sm:m-auto text-center border rounded-lg border-[#e54595] bg-[#e54595] text-white">
            Lihat Program
          </a>
        </div>

        <div class="w-full md:col-span-2 py-10 md:py-0">
          <div
            class="flex overflow-x-auto md:grid! md:grid-cols-2 snap-x md:snap-none snap-mandatory scrollbar-hide gap-6 px-6 pb-4">
            <div
              class="flex-none md:col-span-1 content-stretch w-72 snap-center">
              <div
                class="relative p-6 rounded-tr-lg rounded-br-lg bg-white border border-white/5 shadow-md before:absolute before:top-0 before:bottom-0 before:left-0 before:w-[3px] before:bg-linear-to-b before:from-[#9477b4] before:to-[#fc73b4] before:content-['']">
                <h3 class="text-[#633991] font-bold text-xl mb-2">
                  Program Pelatihan Guru Bahasa Korea (Spesialis)
                </h3>
                <ul class="pl-4 list-disc">
                  <li>Kurikulum Kelas</li>
                  <li>Penganalan Instruktur</li>
                  <li>Jadwal Kelas</li>
                  <li>Aturan dan Kebijakan Pengembalian Dana</li>
                </ul>
                <div class="py-2"></div>
                <a href="<?= base_url('course-detail') ?>" class="text-[#e54595] font-bold">Detail Program</a>
              </div>
            </div>

            <div class="flex-none w-72 md:col-span-1 snap-center">
              <div
                class="relative p-6 rounded-tr-lg rounded-br-lg bg-white border border-white/5 shadow-md before:absolute before:top-0 before:bottom-0 before:left-0 before:w-[3px] before:bg-linear-to-b before:from-[#9477b4] before:to-[#fc73b4] before:content-['']">
                <h3 class="text-[#633991] font-bold text-xl mb-2">
                  Pelatihan Persiapan TOPIK
                </h3>
                <ul class="pl-4 list-disc">
                  <li>Kurikulum Kelas</li>
                  <li>Penganalan Instruktur</li>
                  <li>Jadwal Kelas</li>
                  <li>Aturan dan Kebijakan Pengembalian Dana</li>
                </ul>
                <div class="py-2"></div>
                <a href="<?= base_url('course-detail') ?>" class="text-[#e54595] font-bold">Detail Program</a>
              </div>
            </div>

            <div class="flex-none w-72 md:col-span-1 snap-center">
              <div
                class="relative p-6 rounded-tr-lg rounded-br-lg bg-white border border-white/5 shadow-md before:absolute before:top-0 before:bottom-0 before:left-0 before:w-[3px] before:bg-linear-to-b before:from-[#9477b4] before:to-[#fc73b4] before:content-['']">
                <h3 class="text-[#633991] font-bold text-xl mb-2">
                  Program Kursus
                </h3>
                <p class="pb-2.5">Kursus Bahasa Korea untuk Tujuan Khusus.</p>
                <p>Isi Pelatihan</p>
                <ul class="pl-4 list-disc">
                  <li>
                    Bahasa Korea dasar serta Bahasa Korea untuk bidang khusus
                  </li>
                </ul>
                <div class="py-2"></div>
                <a href="<?= base_url('course-detail') ?>" class="text-[#e54595] font-bold">Detail Program</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- / Program/Course -->

    <!-- <div class="pt-14 pb-17 px-5 md:w-[90%] lg:w-245 md:m-auto">
      <h2 class="text-[#633991] text-2xl font-bold">
        Komunitas Dream Hangul
      </h2>
      <div class="py-2"></div>
      <p class="text-gray-400 w-75 lg:w-135">
        Bergabung dengan Komunitas Akademi untuk info terbaru, materi,
        acara/event, hingga keseruan lainnya. Tempat ini hadir untuk saling
        terhubung, berbagi, dan membuka peluang baru bersama.
      </p>
      <div class="py-2.5"></div>
      <div class="w-70">
        <a
          href="#"
          class="block px-4 py-3 text-center border rounded-lg border-[#e54595] bg-[#e54595] text-white">
          Kunjungi Komunitas Akademi
        </a>
      </div>
    </div> -->

    <div class="bg-[#faf6fb]">
      <div
        class="lg:grid lg:grid-cols-2 px-5 pt-14 pb-9 md:w-[90%] lg:w-245 md:m-auto">
        <div class="lg:col-span-1">
          <p class="pb-3 text-[#633991]">
            <i class="fa-solid fa-location-dot text-[#1B2740]"></i>
            <?= lang('App.address') ?>
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
  <!-- /Main Content -->

  <!-- footer -->
  <?= $this->include('landing-page/footer') ?>
  <!-- /footer -->


</body>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer">
</script>
<script>
  $(document).ready(function() {
    $("#mobileMenuBtn").on("click", function() {
      $("#mobileMenu").slideToggle(200);
    });

    $("#mobileMenu a").on("click", function() {
      $("#mobileMenu").slideUp(200);
    });
  });

  window.addEventListener("scroll", () => {
    const scrolled = window.scrollY;
    document.getElementById("parallax").style.backgroundPositionY =
      scrolled * 0.4 + "px";
  });
</script>

</html>