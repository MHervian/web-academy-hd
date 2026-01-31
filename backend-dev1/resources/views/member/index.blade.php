<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
      @include('layouts.header')

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-4xl font-bold text-center">Member</h2>
          <a href="{{ route('create-member') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-700 px-4 py-1 text-[0.85rem] text-white
            hover:opacity-90 transition">
            <i class="fa-solid fa-plus"></i> Tambah Member Baru
          </a>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> &#47;
          <a href="#" class="">Member</a>
        </span>
        <p class="text-gray-700">Data member akademi Dream Hangul.</p>
        <!--/ Title and breadcrumbs  -->

        @if (session('success'))
          <!-- alert success -->
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-green-50 border border-green-300 mt-2.5 px-5 py-2 text-green-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">✅</span>
              <span>
                <strong class="font-semibold">Berhasil!</strong> {{ session('success') }}
              </span>
            </div>
            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-green-600 hover:bg-green-200 hover:text-green-900 transition cursor-pointer">
              ✕
            </button>
          </div>
        @endif

        @if (session('error'))
          <!-- alert danger -->
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-red-50 border border-red-300 mt-2.5 px-5 py-2 text-red-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">❌</span>
              <span>
                <strong class="font-semibold">Gagal!</strong> {{ session('error') }}
              </span>
            </div>

            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-red-600 hover:bg-red-200 hover:text-red-900 transition cursor-pointer">
              ✕
            </button>
          </div>
        @endif

        <div class="py-3"></div>

        {{-- Search form and table --}}
        {{-- @if (false) --}}
        {{-- <div class="grid grid-cols-2"> --}}
        <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
          <!-- Search Form Here -->
          <form action="{{ route('search-member') }}" method="get" class="flex flex-wrap items-center gap-3">
            @csrf
            <!-- Search -->
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
              </span>
              <input type="text" placeholder="Cari" name="keyword" value="{{ request('keyword') }}"
                class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
            </div>

            {{-- <select
              class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
              <option>Filter Kategori</option>
              <option>Kategori A</option>
              <option>Kategori B</option>
            </select> --}}

            <select name="metode"
              class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
              <option value="all">Filter Metode Daftar All</option>
              <option value="email" {{ request('metode') == 'email' ? 'selected' : '' }}>
                Filter Metode Daftar Email
              </option>
              <option value="google" {{ request('metode') == 'google' ? 'selected' : '' }}>
                Filter Metode Daftar Google
              </option>
            </select>

            {{-- <select
              class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
              <option>Status Aktif</option>
              <option>Status NonAktif</option>
            </select> --}}

            <button type="submit"
              class="py-2 px-4 rounded-md bg-blue-600 text-sm text-white cursor-pointer
              hover:opacity-80 transition">
              <i class="fa-solid fa-magnifying-glass"></i> Cari
            </button>

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
          @if (count($members) > 0)

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
                    <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">
                      {{ $loop->iteration }}
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
                        <a href="{{ route('edit-member', ['memberId' => $member->memberId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-600 px-2 text-[0.8rem] 
                          text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-file-pen"></i> Ubah
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

            {{-- <nav class="flex items-center justify-center gap-1 mt-6" aria-label="Pagination">
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
            </nav> --}}

            @if ($members->lastPage() > 1)
              <nav class="flex items-center justify-center gap-1 mt-6" aria-label="Pagination">

                <!-- Prev -->
                <a href="{{ $members->previousPageUrl() ?? '#' }}"
                  class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100
                  {{ $members->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                  <i class="fa-solid fa-chevron-left text-sm"></i>
                </a>

                <!-- Page Numbers -->
                @foreach ($members->getUrlRange(1, $members->lastPage()) as $page => $url)
                  @if ($page == $members->currentPage())
                    <span class="h-9 w-9 rounded-md bg-blue-600 text-sm text-white flex items-center justify-center">
                      {{ $page }}
                    </span>
                  @else
                    <a href="{{ $url }}"
                      class="h-9 w-9 rounded-md border border-gray-300 text-sm text-gray-700 hover:bg-gray-100
                         flex items-center justify-center">
                      {{ $page }}
                    </a>
                  @endif
                @endforeach

                <!-- Next -->
                <a href="{{ $members->nextPageUrl() ?? '#' }}"
                  class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100
                    {{ !$members->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
                  <i class="fa-solid fa-chevron-right text-sm"></i>
                </a>

              </nav>
            @endif
            {{-- </div> --}}
          @else
            <div class="pb-3"></div>
            <p class="text-center font-bold">Data Member Kosong.</p>
          @endif
        </div>

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
