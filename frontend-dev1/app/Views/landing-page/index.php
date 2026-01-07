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
    <section id="home">
      <div
        class="h-full pb-17 pt-10 px-5 bg-[radial-gradient(circle_at_30%_200%,#6D2A3A_0%,#30283F_40%,#1B2740_96%)]">
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

    </section>

    <section id="profile">
      <div class="h-full mx-auto p-5">
        <div class="flex justify-center my-5 font-bold">
          <h1 class="text-2xl">Profile</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-3 justify-items-center">
          <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
            <div class="h-44 md:h-64 overflow-hidden">
              <img src="/images/close-up-people-studying-language-work.jpg" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
            </div>
            <div class="flex flex-col gap-4 p-6">
              <!-- <span class="text-sm font-medium">Dream Korean Language Learning Center</span> -->
              <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription">Dream Korean Language Learning Center</h3>
              <p id="featureDescription" class="text-pretty text-sm">
                Dream Korean Language Learning Center menyediakan program profesional bahasa Korea dan
                persiapan Ujian Kemahiran Bahasa Korea (TOPIK) bagi para pemuda Indonesia dengan biaya serendah
                mungkin dan kualitas pendidikan terbaik. Pada akhirnya, pusat ini bertujuan menjadi hub pendidikan
                bahasa Korea di Indonesia yang memungkinkan terwujudnya kerja sama saling menguntungkan
                antara Korea dan Indonesia.
              </p>
            </div>
          </article>
          <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
            <div class="h-44 md:h-64 overflow-hidden">
              <img src="/images/bonding-together-university-device-book-reading.jpg" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
            </div>
            <div class="flex flex-col gap-4 p-6">
              <!-- <span class="text-sm font-medium">Features</span> -->
              <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription">Program Spesialis Bahasa Korea</h3>
              <p id="featureDescription" class="text-pretty text-sm">
                Program pendidikan bahasa Korea dilaksanakan secara
                sistematis dengan menggunakan bahan ajar yang dikembangkan sendiri, berdasarkan
                pengalaman panjang dan keahlian akademis para dosen Jurusan Bahasa Korea di Universitas
                Indonesia (UI). Berbagai media dan materi pembelajaran diteliti serta dikembangkan sesuai
                dengan tingkat dan kebutuhan peserta didik untuk meningkatkan efektivitas pembelajaran.
                Melalui evaluasi, pusat ini memantau kemajuan belajar bahasa Korea para siswa, menilai
                pencapaian standar kelulusan, dan memberikan sertifikat kepada peserta yang memenuhi
                kriteria.
              </p>
            </div>
          </article>
          <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
            <div class="h-44 md:h-64 overflow-hidden">
              <img src="/images/everyone-is-smiling-listens-group-people-business-conference-modern-classroom-daytime.jpg" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
            </div>
            <div class="flex flex-col gap-4 p-6">
              <!-- <span class="text-sm font-medium">Features</span> -->
              <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription">Program Persiapan Ujian Kemahiran Bahasa Korea (TOPIK)</h3>
              <p id="featureDescription" class="text-pretty text-sm">
                Program intensif ini dirancang agar peserta dapat memperoleh level TOPIK 3–4 dalam waktu
                singkat, sebagai standar minimum yang dibutuhkan untuk studi di Korea maupun bekerja di
                perusahaan Korea
              </p>
            </div>
          </article>
          <article class="group flex rounded-radius max-w-sm flex-col overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
            <div class="h-44 md:h-64 overflow-hidden">
              <img src="/images/young-students-learning-library-bookshelves.jpg" class="object-cover transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
            </div>
            <div class="flex flex-col gap-4 p-6">
              <!-- <span class="text-sm font-medium">Features</span> -->
              <h3 class="text-balance text-xl lg:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-describedby="featureDescription">Tenaga Pengajar Profesional</h3>
              <p id="featureDescription" class="text-pretty text-sm">
                Para pengajar yang memiliki gelar magister dan doktor di bidang bahasa
                Korea, serta pengalaman luas dan keahlian dalam pengajaran bahasa Korea, senantiasa berupaya
                mengembangkan metode dan materi pembelajaran yang efektif. Mereka membimbing peserta didik
                agar dapat menyelesaikan program dengan cepat dan efisien.
              </p>
            </div>
          </article>
        </div>

      </div>
    </section>

    <section id="sambutan">
      <div class="py-5 p-10 sm:p-20 bg-[#faf6fb] h-full text-[#959094]">
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
    </section>

    <section>
      <div class="h-full p-5">
        <div class="max-w-5xl mx-auto space-y-10">

          <!-- Judul -->
          <div class="bg-white p-5 text-center">
            <h2 class="text-2xl font-bold">Struktur Organisasi Yayasan</h2>
            <!-- <p class="text-gray-600 mt-1">
              Sistem kerja dan kemitraan lembaga
            </p> -->
          </div>

          <!-- Pimpinan -->
          <div class="flex justify-center">
            <div class="bg-blue-600 text-white px-8 py-4 rounded-xl shadow text-center">
              <p class="text-sm opacity-90">Pimpinan</p>
              <p class="text-xl font-bold">YAYASAN 이사장</p>
            </div>
          </div>

          <!-- Garis -->
          <div class="flex justify-center">
            <div class="w-px h-8 bg-gray-400"></div>
          </div>

          <!-- 3 Kolom -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Konsultasi -->
            <div class="bg-white p-6 rounded-lg shadow">
              <h3 class="text-lg font-semibold text-blue-700 mb-3">
                🧭 자문기관 (Lembaga Konsultasi)
              </h3>
              <ul class="space-y-2 text-gray-700">
                <li class="p-3 bg-gray-50 rounded">
                  주인도네시아 한국교육원
                </li>
              </ul>
            </div>

            <!-- Kerja Sama -->
            <div class="bg-white p-6 rounded-lg shadow">
              <h3 class="text-lg font-semibold text-green-700 mb-3">
                🤝 협력기관 (Mitra Kerja)
              </h3>
              <ul class="space-y-2 text-gray-700">
                <li class="p-3 bg-gray-50 rounded">자카르타한국국제학교</li>
                <li class="p-3 bg-gray-50 rounded">UI 대학</li>
                <li class="p-3 bg-gray-50 rounded">경남 인도네시아지부</li>
                <li class="p-3 bg-gray-50 rounded">충남 인도네시아지부</li>
              </ul>
            </div>

            <!-- Program -->
            <div class="bg-white p-6 rounded-lg shadow">
              <h3 class="text-lg font-semibold text-purple-700 mb-3">
                📚 운영과정 (Program)
              </h3>
              <ul class="space-y-2 text-gray-700">
                <li class="p-3 bg-gray-50 rounded">
                  TOPIK (5급 이상)
                </li>
                <li class="p-3 bg-gray-50 rounded">
                  TOPIK 준비과정 (3급~4급)
                </li>
                <li class="p-3 bg-gray-50 rounded">
                  특수목적 한국어과정
                </li>
              </ul>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section>
      <div class="h-full p-5 bg-[#faf6fb]">
        <div class="text-center p-5">
          <h1 class="text-2xl font-bold text-[#633991]">
            Informasi Fasilitas
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
              <p class="text-sm text-gray-600">Total Ruang Digital</p>
              <p class="text-3xl font-bold text-blue-700">30</p>
            </div>

            <div class="bg-green-50 p-5 rounded-lg shadow text-center">
              <p class="text-sm text-gray-600">Total Perangkat</p>
              <p class="text-3xl font-bold text-green-700">107</p>
            </div>

            <div class="bg-purple-50 p-5 rounded-lg shadow text-center">
              <p class="text-sm text-gray-600">Ruang Khusus</p>
              <p class="text-3xl font-bold text-purple-700">18</p>
            </div>
          </div>

          <!-- Detail Ruang Kelas -->
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">
              🏫 Ruang Kelas Digital
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <p class="font-semibold mb-2">Ruang Umum (12)</p>
                <p class="text-gray-700">
                  9 kelas reguler + 1 kelas khusus (만들레)
                </p>
              </div>

              <div>
                <p class="font-semibold mb-2">Ruang Khusus (18)</p>
                <ul class="list-disc ml-5 text-gray-700 space-y-1">
                  <li>Komputer (1)</li>
                  <li>Laboratorium Sains (1)</li>
                  <li>Bahasa Inggris (10)</li>
                  <li>Bahasa Indonesia (3)</li>
                  <li>Seni (1)</li>
                  <li>Musik (1)</li>
                  <li>Perpustakaan (1)</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Perangkat Digital -->
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">
              💻 Perangkat Pembelajaran Digital
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600">PC</p>
                <p class="text-2xl font-bold">35</p>
                <p class="text-xs text-gray-500">Lab komputer siswa</p>
              </div>

              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600">Chromebook</p>
                <p class="text-2xl font-bold">33</p>
                <p class="text-xs text-gray-500">Ruang AISW SD</p>
              </div>

              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600">Tablet</p>
                <p class="text-2xl font-bold">47</p>
                <p class="text-xs text-gray-500">Guru & AISW</p>
              </div>

              <div class="bg-gray-50 p-4 rounded">
                <p class="text-sm text-gray-600">Perangkat Lain</p>
                <p class="text-2xl font-bold">25</p>
                <p class="text-xs text-gray-500">
                  Visualizer (23) <br> GoPro (2)
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section>
      <div class="max-w-5xl mx-auto space-y-8 p-5">

        <!-- Judul -->
        <div class="bg-white p-6 text-center">
          <h2 class="text-2xl font-bold">
            Pembentukan Konsorsium Mitra Kerja
          </h2>
          <p class="text-gray-600 mt-1">
            Jaringan kerja sama pendidikan Korea–Indonesia
          </p>
        </div>

        <!-- Penjelasan Singkat -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-5 rounded shadow-sm">
          <p class="text-gray-700 leading-relaxed">
            Konsorsium Mitra Kerja dibentuk untuk memperkuat kerja sama
            di bidang pendidikan, bahasa Korea, dan pengembangan sumber daya manusia
            melalui kolaborasi lembaga pendidikan dan perwakilan resmi Korea–Indonesia.
          </p>
        </div>

        <!-- Daftar Mitra -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-xl font-semibold mb-4">
            🤝 Anggota Konsorsium
          </h3>

          <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">

            <li class="p-4 bg-gray-50 rounded-lg border">
              <p class="font-semibold">
                Sekolah Korea Indonesia Jakarta
              </p>
              <p class="text-sm text-gray-500">
                Institusi pendidikan dasar & menengah
              </p>
            </li>

            <li class="p-4 bg-gray-50 rounded-lg border">
              <p class="font-semibold">
                Pusat Pendidikan Korea di Indonesia
              </p>
              <p class="text-sm text-gray-500">
                Lembaga resmi pendidikan Korea
              </p>
            </li>

            <li class="p-4 bg-gray-50 rounded-lg border">
              <p class="font-semibold">
                Universitas Negeri Indonesia (UI)
              </p>
              <p class="text-sm text-gray-500">
                Universitas dengan jurusan Bahasa Korea
              </p>
            </li>

            <li class="p-4 bg-gray-50 rounded-lg border">
              <p class="font-semibold">
                Kantor Perwakilan Gyeongnam & Chungnam
              </p>
              <p class="text-sm text-gray-500">
                Perwakilan pemerintah daerah Korea di Indonesia
              </p>
            </li>

            <li class="p-4 bg-gray-50 rounded-lg border">
              <p class="font-semibold">
                Universitas Siber Uncia
              </p>
              <p class="text-sm text-gray-500">
                Uncia Cyber University
              </p>
            </li>

            <li class="p-4 bg-gray-50 rounded-lg border">
              <p class="font-semibold">
                Pusat Pendidikan Hanuri di Indonesia
              </p>
              <p class="text-sm text-gray-500">
                Lembaga pelatihan & bahasa Korea
              </p>
            </li>

          </ul>
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