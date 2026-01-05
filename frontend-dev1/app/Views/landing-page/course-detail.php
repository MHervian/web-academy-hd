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

  <nav class="text-sm font-medium text-on-surface dark:text-on-surface-dark p-5" aria-label="breadcrumb">
    <ol class="flex flex-wrap items-center gap-2">
      <li class="flex items-center gap-2">
        <a href="<?= base_url('course') ?>" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong">Kursus</a>
        <span aria-hidden="true">/</span>
      </li>
      <li class="text-on-surface-strong font-bold dark:text-on-surface-dark-strong" aria-current="page">Program Pendidikan Guru (Spesialis) Bahasa Korea</li>
    </ol>
  </nav>

  <!-- Main content -->
  <main>
    <div class="max-w-5xl mx-auto space-y-8 p-5">

      <!-- Header Program -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-2">
          한국어 교원(전문가) 과정
        </h1>
        <h2 class="text-xl text-gray-700 font-semibold">
          Program Pendidikan Guru (Spesialis) Bahasa Korea
        </h2>
        <p class="text-gray-600 mt-3">
          Program ini dirancang untuk mencetak tenaga pengajar Bahasa Korea
          yang profesional dan kompeten melalui kurikulum terstruktur
          serta pengajar berpengalaman.
        </p>
      </div>

      <!-- Gambaran Umum -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          📘 Gambaran Umum Program
        </h3>
        <p class="text-gray-700 leading-relaxed">
          Program Pendidikan Guru Bahasa Korea merupakan program pelatihan
          khusus bagi calon dan guru Bahasa Korea untuk meningkatkan
          kompetensi pedagogik, linguistik, dan metodologi pengajaran
          sesuai standar pendidikan Korea dan Indonesia.
        </p>
      </div>

      <!-- Kurikulum -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          📚 Kurikulum
        </h3>
        <ul class="list-disc ml-5 space-y-2 text-gray-700">
          <li>Metodologi Pengajaran Bahasa Korea</li>
          <li>Linguistik Bahasa Korea</li>
          <li>Penyusunan Materi dan Media Pembelajaran</li>
          <li>Evaluasi dan Asesmen Pembelajaran</li>
          <li>Praktik Mengajar (Teaching Practice)</li>
        </ul>
      </div>

      <!-- Profil Pengajar -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          👩‍🏫 Profil Pengajar
        </h3>
        <p class="text-gray-700 leading-relaxed">
          Pengajar berasal dari akademisi dan praktisi berpengalaman
          di bidang pengajaran Bahasa Korea, baik dari Indonesia
          maupun Korea Selatan, dengan kualifikasi dan sertifikasi
          yang relevan.
        </p>
      </div>

      <!-- Jadwal -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          🗓️ Jadwal Perkuliahan
        </h3>
        <p class="text-gray-700">
          Jadwal perkuliahan disusun secara fleksibel dan akan
          diinformasikan kepada peserta sebelum program dimulai.
          Program dapat dilaksanakan secara tatap muka maupun daring
          sesuai ketentuan.
        </p>
      </div>

      <!-- Biaya -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          💳 Biaya Kuliah & Ketentuan Pengembalian
        </h3>
        <p class="text-gray-700 leading-relaxed">
          Biaya kuliah ditetapkan sesuai dengan durasi dan
          fasilitas program. Ketentuan pembayaran serta
          pengembalian dana (refund) mengikuti peraturan
          yang berlaku dan akan dijelaskan secara rinci
          pada saat pendaftaran.
        </p>
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