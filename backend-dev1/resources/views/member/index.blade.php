<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Member - DreamPanel</title>
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
        <div class="flex items-center gap-4">
          <h2 class="text-4xl font-bold text-center">Member</h2>
          <a href="{{ route('coming-soon') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-700 px-4 py-1 text-[0.85rem] text-white
            hover:opacity-90 transition">
            <i class="fa-solid fa-plus"></i>
            Tambah Member Baru
          </a>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="#" class="">Member</a>
        </span>
        <p class="text-gray-700">Data member akademi Dream Hangul.</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        {{-- Search form and table --}}
        @if (count($members) > 0)
          {{-- @if (false) --}}
          {{-- <div class="grid grid-cols-2"> --}}
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            <!-- Search Form Here -->
            <form class="flex flex-wrap items-center gap-3">
              <!-- Search -->
              <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                  <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </span>
                <input type="text" placeholder="Search"
                  class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
              </div>

              {{-- <select
                class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
                <option>Filter Kategori</option>
                <option>Kategori A</option>
                <option>Kategori B</option>
              </select> --}}

              <select
                class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
                <option>Filter Metode Daftar All</option>
                <option>Filter Metode Daftar Email</option>
                <option>Filter Metode Daftar Google</option>
              </select>

              <select
                class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
                <option>Status Aktif</option>
                <option>Status NonAktif</option>
              </select>

              <!-- Filter Status -->
              {{-- <div class="flex gap-2">
                <button type="button" class="h-9 rounded-md bg-gray-200 px-4 text-sm text-gray-700 hover:bg-gray-300">
                  Filter Status
                </button>
                <button type="button" class="h-9 rounded-md bg-gray-200 px-4 text-sm text-gray-700 hover:bg-gray-300">
                  Sent
                </button>
                <button type="button" class="h-9 rounded-md bg-gray-200 px-4 text-sm text-gray-700 hover:bg-gray-300">
                  Draft
                </button>
              </div> --}}
            </form>

            <div class="pb-3"></div>
            <table class="w-full border-collapse">
              <thead>
                <tr class="bg-gray-200">
                  <th class="py-2 font-medium">No</th>
                  <th class="py-2 font-medium" colspan="2">Username</th>
                  <th class="py-2 font-medium">Email</th>
                  <th class="py-2 font-medium">Metode Daftar</th>
                  <th class="py-2 font-medium">Tanggal Daftar</th>
                  <th class="py-2 font-medium">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($members as $member)
                  <tr class="border-b border-b-gray-200">
                    <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">{{ $loop->iteration }}
                    </td>
                    <td class="pl-2"><span class="inline-block rounded-[100%] h-8 w-8 bg-gray-200"></span></td>
                    <td class="py-2 px-2 text-[0.9rem]">{{ $member->username }}</td>
                    <td class="py-2 px-2 text-[0.9rem]">{{ $member->email }}</td>
                    <td class="py-2 px-2 text-[0.9rem] text-center">{{ $member->metode }}</td>
                    <td class="py-2 px-2 text-[0.9rem] text-center">{{ $member->date_registration }}</td>
                    <td class="py-2 px-2">
                      <div class="flex items-center gap-2 justify-center">
                        <a href="{{ route('member-detail', ['id' => $member->memberId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-950 px-2 text-[0.8rem] 
                          text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-circle-info"></i> Detail
                        </a>
                        <form action="{{ route('delete-member') }}" method="post">
                          @csrf
                          <input type="hidden" name="memberId" value="{{ $member->memberId }}" />

                          <button type="submit"
                            class="inline-flex h-7 items-center justify-center rounded-sm bg-red-700 px-2 text-[0.8rem] text-white
                            hover:opacity-90 transition cursor-pointer">
                            <i class="fa-solid fa-trash-can"></i> Hapus
                          </button>
                        </form>
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
          <p class="text-center font-bold">Data Member Kosong.</p>
        @endif

      </div>
      <div class="bg-white p-3">
        <p class="text-gray-500">&copy;DreamHangul 2025</p>
      </div>
    </div>
    <!--/ Content -->

  </main>
</body>

</html>
