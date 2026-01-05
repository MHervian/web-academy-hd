<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Course Detail #1 - HangulDream</title>

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
</head>

<body>
  <!-- Header -->
  <?= $this->include('landing-page/header') ?>
  <!-- /Header -->

  <!-- Main content -->
  <main>
    <div class="sm:grid sm:grid-cols-2">
      <div class="sm:col-span-1 pb-10 pt-10 px-5">
        <div class="pb-6">
          <a href="<?= base_url('/') ?>">Beranda</a> / <a href="<?= base_url('course') ?>">Kursus</a> / Program Pelatihan Guru
        </div>
        <h1 class="text-[#1B2740] text-3xl font-bold">Program Pelatihan Guru Bahasa Korea (Spesialis)</h1>
        <div class="py-3.5"></div>
        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
          class="rounded-lg" />
        <div class="pt-8 pb-4">
          <h3 class="text-2xl">Tentang Kursus</h3>
          <p class="py-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto harum, dolore, velit, perspiciatis consequatur dignissimos
            corrupti odio tempore cupiditate ea mollitia dolorem! Minima cupiditate consectetur consequuntur ut mollitia architecto ipsa.
          </p>
        </div>
        <div class="">
          <h3 class="text-2xl pb-5">Instruktur Kursus</h3>
          <div class="flex items-center gap-x-4">
            <img src="image_samples/teacher_sample.jpg" class="w-20 h-20 rounded-[100%]" />
            <p class="font-bold">John Doe</p>
          </div>
        </div>
      </div>
      <div class="sm:col-span-1 pb-10 px-5">
        <div class="px-4 py-9 bg-[#faf6fb] shadow-md rounded-lg">
          <h4 class="text-[1.2rem] font-bold pb-4">Link Dokumen Kursus</h4>
          <a href="#" class="block pb-4.5 text-[#633991]">
            <i class="fa-solid fa-file-arrow-down"></i> Unduh Kurikulum Kursus
          </a>
          <a href="#" class="block pb-3 text-[#633991]">
            <i class="fa-solid fa-file-arrow-down"></i> Unduh Jadwal Kelas Kursus
          </a>
          <div class="py-3.5"></div>
          <h4 class="text-[1.2rem] font-bold pb-4">Daftar Kursus</h4>
          <a href="<?= base_url('auth/login') ?>" class="block w-full py-3 md:py-2 border-2 border-solid border-[#e54595] bg-[#e54595]
            text-white text-center rounded-lg cursor-pointer">
            Masuk
          </a>
          <div class="py-2.5 md:py-1.5"></div>
          <!-- <a href="<?= base_url() ?>" type="button" class="flex items-center justify-center gap-3 bg-white border border-gray-300 text-gray-700 font-medium py-3 md:py-2 px-4 rounded-lg 
              hover:bg-gray-50 hover:shadow-md transition-all duration-200 ease-in-out w-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 48 48">
              <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" />
              <path fill="#FF3D00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691z" />
              <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.276 44 24 44z" />
              <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z" />
            </svg>
            <span>Masuk dengan Google</span>
          </a> -->
        </div>
      </div>
    </div>

    <!-- Detail Program/Course -->
    <!-- / Detail Program/Course -->

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
  <!-- / Main Content -->

  <!-- Footer -->
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

</html>