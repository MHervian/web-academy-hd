<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Dashboard - DreamPanel</title>
  <!-- favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  {{-- <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" /> --}}
  <!-- Font Awesome 7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      font-family: 'Rubik', Arial, Helvetica, sans-serif;
    }

    .navigasi {
      font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
    }
  </style>
</head>

<body>

  <main class="flex min-h-screen">
    @include('navigation.navigation')

    <!-- Content -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="relative z-3 flex justify-between px-3 pb-1 pt-3 border-solid border-b-2 border-b-white">
        <div class="flex items-center">
          <!-- button type="button" class="text-gray-500">
            <i class="fa-solid fa-bars cursor-pointer text-2xl"></i>
          </!-->
          <h1 class="font-bold inline-block ml-2 text-gray-600 navigasi">
            <a href="#">DreamPanel</a>
          </h1>
        </div>
        <span class="flex justify-between pl-5">
          <!-- div class="relative group">
            <button type="button" class="relative text-[1.5rem] cursor-pointer">
              <i class="fa-regular fa-bell text-[#a6a6a6]"></i>
              <span
                class="absolute top-1 right-1 h-3 w-3 bg-red-600 rounded-full border-2 border-transparent transform translate-x-1 -translate-y-1"></span>
            </button>
            <div class="absolute hidden right-0 group-hover:block w-90 bg-white shadow-lg rounded-md mt-2 z-10">
              <p class="text-gray-800 pl-3 pb-2 pt-3.5 font-bold navigasi">NOTIFIKASI</p>
              <hr class="border-gray-300" />
              <a href="#" class="block px-3 py-1.5 text-gray-800 hover:bg-gray-100">
                <p class="text-[1.05rem]">Update in Kurikulum &SmallCircle; <span class="text-gray-400 text-[0.78rem]">3
                    menit lalu</span></p>
                <p class="text-gray-500 text-[0.9rem]">Lorem ipsun dolor sit amet sedsiudfs i...</p>
                <span class="text-[0.8rem]">By <span class="font-bold">Author</span></span>
                <span class="text-[0.8rem]">24 Maret 2025</span>
              </a>
              <hr class="border-gray-300" />
              <a href="#" class="block px-3 py-1.5 text-gray-800 hover:bg-gray-100">
                <p class="text-[1.05rem]">Update in Kurikulum &SmallCircle; <span class="text-gray-400 text-[0.78rem]">3
                    menit lalu</span></p>
                <p class="text-gray-500 text-[0.9rem]">Lorem ipsun dolor sit amet sedsiudfs i...</p>
                <span class="text-[0.8rem]">By <span class="font-bold">Author</span></span>
                <span class="text-[0.8rem]">24 Maret 2025</span>
              </a>
              <hr class="border-gray-300" />
              <a href="#" class="block py-3 w-full text-center text-blue-400">More...</a>
            </div>
          </!-->
          {{-- <span class="px-2"></span>
          <span class="border-l-2 border-[#e6e6e6]"></span>
          <span class="px-2"></span> --}}
          {{-- <div class="relative group">
            <button type="button" class="text-[1.5rem] cursor-pointer">
              <i class="fa-regular fa-circle-user text-[#a6a6a6]"></i>
            </button>
            <div class="absolute hidden right-0 group-hover:block w-70 bg-white shadow-lg rounded-md mt-2 z-10">
              <p class="text-gray-500 pl-3 pb-2 pt-3.5 font-bold navigasi">AKUN</p>
              <hr class="border-gray-100" />
              <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-gear"></i> Pengaturan
              </a>
              <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-circle-info"></i> Tentang
              </a>
              <a href="login.html" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
              </a>
            </div>
          </div> --}}
          {{-- Logout button temp. --}}
          <a href="{{ route('logout') }}" class="block px-4 py-1.5 text-gray-800 hover:bg-gray-100">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
          </a>
          <span class="px-3"></span>
        </span>
      </header>
      <!--/ Header -->

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <h2 class="text-4xl font-bold">Dashboard</h2>
        <span class="block py-2">
          <a href="#" class="">Dashboard</a>
        </span>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        <div class="grid grid-cols-3 gap-15">
          <div class="col-span-1 py-4 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-xl">Total Member</span>
              <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-blue-100">
                <i class="fa-solid fa-people-roof text-2xl text-blue-500" aria-hidden="true"></i>
              </span>
            </span>
            <p class="pt-0 pb-2.5 text-3xl font-bold">1,250</p>
            <a href="{{ route('member') }}" class="inline-block py-1 px-3 bg-blue-500 text-white rounded-md">Lihat
              Semua Member</a>
          </div>
          <div class="col-span-1 py-4 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-xl">Kursus Aktif</span>
              <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-green-100">
                <i class="fa-solid fa-book-open text-2xl text-green-500" aria-hidden="true"></i>
              </span>
            </span>
            <p class="pt-0 pb-2.5 text-3xl font-bold">12</p>
            <a href="{{ route('kelas') }}" class="inline-block py-1 px-3 bg-green-500 text-white rounded-md">Kelola
              Kelas</a>
          </div>
          <div class="col-span-1 py-4 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-xl">Kursus/Program</span>
              <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-purple-100">
                <i class="fa-solid fa-chalkboard text-2xl text-purple-500" aria-hidden="true"></i>
              </span>
            </span>
            <p class="pt-0 pb-2.5 text-3xl font-bold">12</p>
            <a href="{{ route('program') }}" class="inline-block py-1 px-3 bg-purple-500 text-white rounded-md">Kelola
              Kursus/Program</a>
          </div>
        </div>

        <div class="py-4"></div>

        <div class="grid grid-cols-3 gap-15">
          <div class="col-span-1 py-4 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-xl">Pendaftar Baru</span>
              <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-orange-100">
                <i class="fa-solid fa-clipboard-check text-2xl text-orange-500" aria-hidden="true"></i>
              </span>
            </span>
            <p class="pt-0 pb-2.5 text-3xl font-bold">1,250</p>
            <a href="{{ route('kelas-registrasi') }}"
              class="inline-block py-1 px-3 bg-orange-500 text-white rounded-md">Lihat Pendaftar
              Baru</a>
          </div>
          <div class="col-span-1 py-4 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-xl">Pendaftar Kelas</span>
              <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-orange-100">
                <i class="fa-solid fa-clipboard-check text-2xl text-orange-500" aria-hidden="true"></i>
              </span>
            </span>
            <p class="pt-0 pb-2.5 text-3xl font-bold">12</p>
            <a href="{{ route('kelas-registrasi') }}"
              class="inline-block py-1 px-3 bg-orange-500 text-white rounded-md">Cek Antrian</a>
          </div>
          <div class="col-span-1 py-4 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-xl">Sertifikat Diterbitkan</span>
              <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-purple-100">
                <i class="fa-solid fa-certificate text-2xl text-purple-500" aria-hidden="true"></i>
              </span>
            </span>
            <p class="pt-0 pb-2.5 text-3xl font-bold">12</p>
            <a href="{{ route('sertifikat') }}"
              class="inline-block py-1 px-3 bg-purple-500 text-white rounded-md">Buat Sertifikat</a>
          </div>
        </div>

        <div class="py-4"></div>

        <div class="grid grid-cols-2">
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">

            <h3 class="font-bold text-2xl">Aktivitas Terbaru</h3>
            <div class="pb-3"></div>
            <table class="w-full border-collapse">
              <thead>
                <tr class="bg-gray-200">
                  <th class="py-2 w-[300px] font-medium">Nama.</th>
                  <th class="py-2 font-medium">Status</th>
                  <th class="py-2 font-medium">Aksi</th>
                  <th class="py-2"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">1. Data</td>
                  <td class="py-2 px-2">2024-10-26</td>
                  <td class="py-2 px-2 text-center">
                    <a href="{{ route('coming-soon') }}"
                      class="inline-block py-1 px-3 rounded-lg bg-gray-300 text-gray-500">Detail</a>
                  </td>
                  <td class="py-2 px-2 bg-gray-100 text-center">
                    <i class="fa-solid fa-pen-to-square text-gray-500"></i>
                  </td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">1. Data</td>
                  <td class="py-2 px-2">2024-10-26</td>
                  <td class="py-2 px-2 text-center">
                    <a href="{{ route('coming-soon') }}"
                      class="inline-block py-1 px-3 rounded-lg bg-gray-300 text-gray-500">Detail</a>
                  </td>
                  <td class="py-2 px-2 bg-gray-100 text-center">
                    <i class="fa-solid fa-pen-to-square text-gray-500"></i>
                  </td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">1. Data</td>
                  <td class="py-2 px-2">2024-10-26</td>
                  <td class="py-2 px-2 text-center">
                    <a href="{{ route('coming-soon') }}"
                      class="inline-block py-1 px-3 rounded-lg bg-gray-300 text-gray-500">Detail</a>
                  </td>
                  <td class="py-2 px-2 bg-gray-100 text-center">
                    <i class="fa-solid fa-pen-to-square text-gray-500"></i>
                  </td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">1. Data</td>
                  <td class="py-2 px-2">2024-10-26</td>
                  <td class="py-2 px-2 text-center">
                    <a href="{{ route('coming-soon') }}"
                      class="inline-block py-1 px-3 rounded-lg bg-gray-300 text-gray-500">Detail</a>
                  </td>
                  <td class="py-2 px-2 bg-gray-100 text-center">
                    <i class="fa-solid fa-pen-to-square text-gray-500"></i>
                  </td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">1. Data</td>
                  <td class="py-2 px-2">2024-10-26</td>
                  <td class="py-2 px-2 text-center">
                    <a href="{{ route('coming-soon') }}"
                      class="inline-block py-1 px-3 rounded-lg bg-gray-300 text-gray-500">Detail</a>
                  </td>
                  <td class="py-2 px-2 bg-gray-100 text-center">
                    <a href="{{ route('coming-soon') }}">
                      <i class="fa-solid fa-pen-to-square text-gray-500"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="py-4"></div>
      </div>
      <div class="bg-white p-3">
        <p class="text-gray-500">&copy;DreamHangul 2025</p>
      </div>
    </div>
    <!--/ Content -->

  </main>
</body>

</html>
