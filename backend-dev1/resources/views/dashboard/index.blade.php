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
      font-family:
        Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
    }
  </style>
</head>

<body>

  <main class="flex min-h-screen">
    @include('navigation.navigation')

    <!-- Content -->
    <div class="flex-1 flex flex-col">
      @include('layouts.header')

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
            <a href="{{ route('sertifikat') }}" class="inline-block py-1 px-3 bg-purple-500 text-white rounded-md">Buat
              Sertifikat</a>
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
      {{-- @include('layouts.footer') --}}
      @include('layouts.footer')
    </div>
    <!--/ Content -->

  </main>

  {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
