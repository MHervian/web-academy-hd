<!doctype html>
<html>

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
</head>

<body>
  <!-- Header -->
  <?= $this->include('landing-page/header') ?>
  <!-- /Header -->
 

  <!-- Main content -->
  <main>
    <div
      class="pb-17 pt-10 px-5 bg-[radial-gradient(circle_at_30%_200%,#6D2A3A_0%,#30283F_40%,#1B2740_96%)]">
      <h1 class="text-white md:text-center text-3xl">Akademi Dream Korean</h1>
      <div class="py-2"></div>
      <p class="text-white sm:w-130 md:w-150 md:text-center md:m-auto">
        Menghadirkan program belajar bahasa Korea — mulai dari persiapan TOPIK
        hingga program spesialis calon guru bahasa Korea.
      </p>

      <div class="py-4"></div>

      <div class="sm:flex md:justify-center sm:gap-x-2 md:gap-x-3 pb-5">
        <a
          href="<?= base_url('course') ?>"
          class="block px-4 sm:w-67 py-3 text-center border rounded-lg border-[#BF2441] bg-[#BF2441] text-white font-bold">
          Jelajah Program
        </a>
        <div class="md:hidden py-2.5"></div>
        <a
          href="<?= base_url('about-us') ?>"
          class="block px-4 sm:w-67 py-3 text-center border rounded-lg border-white text-white">Tentang Akademi</a>
      </div>
    </div>

    <div class="bg-[#faf6fb]">
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
    </div>

    <!-- Program/Course -->
    <div class="bg-[#faf6fb]">
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
    </div>
    <!-- / Program/Course -->

    <div class="pt-14 pb-17 px-5 md:w-[90%] lg:w-245 md:m-auto">
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
    </div>

    <div class="bg-[#faf6fb]">
      <div
        class="lg:grid lg:grid-cols-2 px-5 pt-14 pb-9 md:w-[90%] lg:w-245 md:m-auto">
        <div class="lg:col-span-1">
          <p class="pb-3 text-[#633991]">
            <i class="fa-solid fa-location-dot text-[#1B2740]"></i> Jalan K.H.
            Mas Mansyur, Citywalk, Jakarta Selatan, Jakarta, Indonesia
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
  <footer
    class="pt-12.5 pb-7 px-5 bg-[radial-gradient(circle_at_100%_180%,#6D2A3A_0%,#30283F_20%,#1B2740_95%)]">
    <div class="grid grid-cols-3">
      <div class="col-span-3">
        <div class="pb-7">
          <img
            src="image_samples/logo design new 2.png"
            class="w-80 md:w-74 m-auto" />
        </div>
        <ul class="md:flex md:justify-between md:w-150 md:m-auto">
          <li class="pb-3">
            <a href="#" class="block text-center text-white">Home</a>
          </li>
          <li class="pb-3">
            <a href="#" class="block text-center text-white">Tentang Akademi</a>
          </li>
          <li class="pb-3">
            <a href="#" class="block text-center text-white">Program</a>
          </li>
          <li class="pb-3">
            <a href="#" class="block text-center text-white">Komunitas</a>
          </li>
          <li>
            <a href="#" class="block text-center text-white">Ketentuan Privasi dan Pengguna</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="py-6.5"></div>
    <p class="text-[#e54595] font-semibold text-center text-sm">
      &copy;2026 DreamHangul Akademi
    </p>
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