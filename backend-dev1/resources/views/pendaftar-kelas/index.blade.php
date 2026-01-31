<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Pendaftar Kelas - DreamPanel</title>
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
      @include('layouts.header')

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-4xl font-bold text-center">Pendaftar Kelas Kursus/Program</h2>
          {{-- <a href="{{ route('create-kelas') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-700 px-4 py-1 text-[0.85rem] text-white
            hover:opacity-90 transition">
            <i class="fa-solid fa-plus"></i>
            Tambah Kelas
          </a> --}}
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="#" class="">Pendaftar Kelas</a>
        </span>
        <p class="text-gray-700">Data peserta pendaftar per kelas kursus/program di Akademi Dream Hangul</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        <div class="grid grid-cols-4 gap-4">
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-[1rem]">Total Pendaftar Baru Hari Ini</span>
              <span class="relative flex h-5 w-5 ms-2">
                <span
                  class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-5 w-5 bg-green-500"></span>
              </span>
              {{-- <i class="fa-solid fa-circle text-xl text-green-500" aria-hidden="true"></i> --}}
              {{-- <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-green-100">
              </span> --}}
            </span>
            <p class="pt-0 text-xl font-bold">41</p>
          </div>
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-[1rem]">Kelas Hampir Penuh</span>
              {{-- <i class="fa-solid fa-circle text-xl text-red-500" aria-hidden="true"></i> --}}
              <span class="relative flex h-5 w-5 ms-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-5 w-5 bg-red-500"></span>
              </span>
              {{-- <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-blue-100">
                <i class="fa-solid fa-people-roof text-2xl text-blue-500" aria-hidden="true"></i>
              </span> --}}
            </span>
            <p class="pt-0 text-xl font-bold">3</p>
          </div>
          {{-- <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-[1rem]">Kelas Populer</span>
              <span class="flex h-12 aspect-square items-center justify-center rounded-full bg-blue-100">
                <i class="fa-solid fa-people-roof text-2xl text-blue-500" aria-hidden="true"></i>
              </span>
            </span>
            <p class="pt-0 text-lg text-[0.95rem] font-bold">Kelas TOPIK Lvl 3 - 4 (1)</p>
          </div> --}}
        </div>

        <div class="py-3"></div>

        {{-- Search form and table --}}
        @if (count($kelas) > 0)
          {{-- @if (false) --}}
          {{-- <div class="grid grid-cols-2"> --}}
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            <!-- Search Form Here -->
            {{-- <form class="flex flex-wrap items-end gap-4"> --}}
            <form class="">
              <!-- Search -->
              <div class="flex items-start gap-4">
                <div class="relative">
                  <i
                    class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400 pointer-events-none">
                  </i>
                  <input type="text" placeholder="Search"
                    class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm
               focus:border-blue-500 focus:outline-none" />
                </div>

                <!-- Filter Kelas -->
                <select
                  class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600
             focus:border-blue-500 focus:outline-none">
                  <option>Semua Status</option>
                  <option>Baru Dibuka (2 Hari Pertama)</option>
                  <option>Akan Segera Tutup (Sisa 1-2 Hari)</option>
                  <option>Hampir Penuh (Kapasitas > 80%)</option>
                </select>

                <div class="flex items-center gap-3 py-1.5 px-4 bg-white rounded-md border border-gray-300 w-fit">
                  <label class="relative inline-flex items-center cursor-pointer group">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                      class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 
                      rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full 
                      peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-0.5
                      after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                    </div>
                    <span class="ms-3 text-sm font-medium text-slate-700 group-hover:text-blue-600 transition-colors">
                      Ada Pendaftar Hari Ini
                    </span>
                    {{-- <span class="relative flex h-2 w-2 ms-2">
                      <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span> --}}
                  </label>
                </div>
              </div>

              <div class="py-1.5"></div>

              <!-- Filter Tanggal -->
              <div class="flex gap-3">

                <div class="flex items-center gap-3">
                  <span class="text-sm">Tanggal Buka</span>

                  <div class="relative">
                    <i
                      class="fa-regular fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400 pointer-events-none">
                    </i>
                    <input type="date"
                      class="h-9 rounded-md border border-gray-300 pl-9 pr-3 text-sm text-gray-600
                 focus:border-blue-500 focus:outline-none" />
                  </div>

                  <span class="text-sm">Tanggal Tutup</span>

                  <div class="relative">
                    <i
                      class="fa-regular fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400 pointer-events-none">
                    </i>
                    <input type="date"
                      class="h-9 rounded-md border border-gray-300 pl-9 pr-3 text-sm text-gray-600
                 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>

                <button
                  class="px-4 rounded-md bg-blue-600 text-sm text-white cursor-pointer
                hover:opacity-80 transition">
                  <i class="fa-solid fa-magnifying-glass"></i> Cari
                </button>
              </div>

            </form>

            <div class="pb-3"></div>
            <table class="w-full border-collapse">
              <thead>
                <tr class="bg-gray-200">
                  <th class="py-2 font-medium">No.</th>
                  <th class="py-2 font-medium">Nama Kelas</th>
                  <th class="py-2 font-medium">Sisa Hari Pendaftaran</th>
                  <th class="py-2 font-medium">Kuota (Terisi/Total)</th> <!-- => ini ada bar progress -->
                  <th class="py-2 font-medium">Update Hari Ini</th>
                  {{-- <th class="py-2 font-medium">Tren/Aktivitas</th> --}}
                  <th class="py-2 font-medium">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kelas as $k)
                  <tr class="border-b border-b-gray-200">
                    <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">{{ $loop->iteration }}
                    </td>
                    <td class="py-2 px-2 text-[0.9rem]">{{ $k->nama_kelas }}</td>
                    <td class="py-2 px-2 text-[0.9rem] text-center">
                      <span class="px-3 py-0.5 rounded-lg bg-green-600 text-white">Sisa 14 Hari</span>
                    </td>
                    <td class="py-2 px-2 text-[0.9rem] text-center">
                      <span>
                        ({{ $k->kapasitas }}/{{ $k->terisi }})
                      </span>
                      <div class="w-full bg-slate-200 rounded-full h-2 dark:bg-slate-700">
                        <div class="bg-yellow-600 h-2 rounded-full" style="width: 70%"></div>
                      </div>
                    </td>
                    {{-- <td class="py-2 px-2 text-[0.9rem] text-center">{{ $k->terisi }}</td> --}}
                    <td class="py-2 px-2 text-center font-bold">
                      <span class="text-green-600">+2</span>
                    </td>
                    {{-- <td class="py-2 px-2 text-[0.9rem] text-center">{{ $k->terisi }}</td> --}}
                    <td class="py-2 px-2">
                      <div class="flex items-center gap-2 justify-center">
                        <a href="{{ route('kelas-registrasi-detail', ['kelasId' => $k->kelasId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-950 px-2 text-[0.8rem] 
                          text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-circle-info"></i> Detail
                        </a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            <nav class="flex items-center justify-center gap-1 mt-6" aria-label="Pagination">
              <!-- Prev -->
              <button
                class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100 
                disabled:opacity-50 cursor-pointer"
                disabled aria-label="Previous page">
                <i class="fa-solid fa-chevron-left text-sm"></i>
              </button>

              <!-- Page Numbers -->
              <button class="h-9 w-9 rounded-md bg-blue-600 text-sm text-white cursor-pointer">
                1
              </button>

              <button
                class="h-9 w-9 rounded-md border border-gray-300 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                2
              </button>

              <button
                class="h-9 w-9 rounded-md border border-gray-300 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                3
              </button>

              <span class="flex h-9 w-9 items-center justify-center text-sm text-gray-500">
                ...
              </span>

              <button
                class="h-9 w-9 rounded-md border border-gray-300 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                10
              </button>

              <!-- Next -->
              <button
                class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 
                hover:bg-gray-100 cursor-pointer"
                aria-label="Next page">
                <i class="fa-solid fa-chevron-right text-sm"></i>
              </button>
            </nav>
          </div>
          {{-- </div> --}}
        @else
          <p class="text-center font-bold">Data Kelas Kosong.</p>
        @endif

      </div>
      @include('layouts.footer')
    </div>
    <!--/ Content -->

  </main>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
