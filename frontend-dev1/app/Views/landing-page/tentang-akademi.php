<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Tentang Akademi - HangulDream</title>

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />

  <!-- Font Awesome 7 -->
  <link rel="stylesheet"
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
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <?= $this->include('landing-page/header') ?>
  <!-- /Header -->

  <!-- Main content -->
  <main>
    <div class="pb-17 pt-10 px-5 bg-[radial-gradient(circle_at_30%_200%,#6D2A3A_0%,#30283F_40%,#1B2740_96%)]">
      <h1 class="text-white text-center text-3xl">Selamat Datang!</h1>
      <div class="py-2"></div>
      <p class="text-white sm:w-130 md:w-150 text-center sm:m-auto">
        Kami Dream Korean Language Learning Center menghadirkan program belajar bahasa Korea bagi generasi muda Indonesia dengan biaya
        terjangkau dan pengajaran berkualitas — mulai dari persiapan TOPIK hingga program spesialis calon guru bahasa Korea.
      </p>
    </div>
    </div>

    <div class="bg-white">
      <div class="px-5 md:w-[90%] lg:w-245 md:m-auto pt-15 pb-10">
        <h2 class="text-[#633991] text-2xl font-bold">Salam Hangat dari Kami,</h2>
        <div class="py-1.5"></div>
        <p class="text-[#959094]">
          Selamat datang di Yayasan Dream Korean Language Learning Center. Kami membuka peluang bagi generasi muda Indonesia melalui program
          kursus bahasa Korea, persiapan TOPIK, dan program spesialis guru. Kami melihat tingginya minat generasi muda Indonesia untuk belajar
          bahasa Korea, namun masih terbatasnya tenaga ahli dan kesempatan meraih sertifikasi TOPIK. Kehadiran yayasan ini diharapkan menjadi
          jembatan, sekaligus fondasi kerja sama pendidikan yang saling menguntungkan antara Indonesia dan Korea.
        </p>
        <p class="text-[#959094] py-1.5">
          Mari bersama kita wujudkan visi dan harapan melalui bahasa.
        </p>
        <p class="text-[#959094] py-1.5">
          Terima kasih.
        </p>
        <div class="py-2"></div>
        <p class="font-bold">Lee Seon-ah</p>
        <p>Director of YAYASAN Dream Korean Language Learning Center</p>
      </div>
    </div>

    <div class="bg-[#faf6fb]">
      <div class="px-5 md:w-[90%] lg:w-245 md:m-auto pt-15 pb-14">
        <h2 class="text-center text-[#633991] text-2xl font-bold">Siap Membentuk Masa Depanmu di Akademi?</h2>

        <div class="py-2.5"></div>

        <div class="">
          <!-- <a href="<?= base_url('auth/register') ?>" class="block px-4 sm:w-67 sm:mx-auto py-3 text-center border rounded-lg  -->
          <a href="<?= base_url('/coming-soon-landing-page') ?>" class="block px-4 sm:w-67 sm:m-auto py-3 text-center border rounded-lg 
            border-[#BF2441] bg-[#BF2441] text-white font-bold text-xl">
            Daftar Sekarang
          </a>
        </div>
      </div>
    </div>

    <div class="bg-[#faf6fb]">
      <div class="lg:grid lg:grid-cols-2 px-5 pt-14 pb-9 md:w-[90%] lg:w-245 md:m-auto">
        <div class="lg:col-span-1">
          <p class="pb-3 text-[#633991]"><i class="fa-solid fa-location-dot text-[#1B2740]"></i> Jalan K.H. Mas Mansyur, Citywalk, Jakarta Selatan, Jakarta, Indonesia</p>
          <div class="flex gap-x-6.5">
            <span class="text-[#633991]"><i class="fa-solid fa-envelope text-[#1B2740]"></i> hangulcs@hangul.co.id</span>
            <span class="text-[#633991]"><i class="fa-solid fa-phone text-[#1B2740]"></i> +62939392892</span>
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
  <footer class="pt-12.5 pb-7 px-5 bg-[radial-gradient(circle_at_100%_180%,#6D2A3A_0%,#30283F_20%,#1B2740_95%)]">
    <div class="grid grid-cols-3">
      <div class="col-span-3">
        <div class="pb-7">
          <img src="image_samples/logo design new 2.png" class="w-80 md:w-74 m-auto" />
        </div>
        <ul class="md:flex md:justify-between md:w-150 md:m-auto">
          <li class="pb-3"><a href="#" class="block text-center text-white">Home</a></li>
          <li class="pb-3"><a href="#" class="block text-center text-white">Tentang Akademi</a></li>
          <li class="pb-3"><a href="#" class="block text-center text-white">Program</a></li>
          <li class="pb-3"><a href="#" class="block text-center text-white">Komunitas</a></li>
          <li><a href="#" class="block text-center text-white">Ketentuan Privasi dan Pengguna</a></li>
        </ul>
      </div>
    </div>
    <div class="py-6.5"></div>
    <p class="text-[#e54595] font-semibold text-center text-sm">&copy;2026 DreamHangul Akademi</p>
  </footer>
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

</html>