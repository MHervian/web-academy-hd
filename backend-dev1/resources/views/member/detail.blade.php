<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Member Detail - DreamPanel</title>

  <!-- favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Font -->
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
          <h2 class="text-4xl font-bold text-center">Detail Member</h2>
          <a href="{{ route('coming-soon') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-4 py-1 text-[0.85rem] text-white
            hover:opacity-90 transition">
            <i class="fa-solid fa-file-pen"></i> Ubah
          </a>
          {{-- <a href="{{ route('coming-soon') }}"
            class="inline-flex items-center gap-2 rounded-md bg-red-700 px-4 py-1 text-[0.85rem] text-white
            hover:opacity-90 transition">
            <i class="fa-solid fa-trash-can"></i> Hapus
          </a> --}}
          <form action="{{ route('delete-member') }}" method="post">
            @csrf
            <input type="hidden" name="memberId" value="{{ $member->memberId }}" />

            <button type="submit"
              class="inline-flex h-7 items-center justify-center rounded-sm bg-red-700 px-4 py-1 text-[0.85rem] text-white
                            hover:opacity-90 transition cursor-pointer">
              <i class="fa-solid fa-trash-can"></i> Hapus
            </button>
          </form>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> &#47;
          <a href="{{ route('member') }}" class="text-blue-700">Member</a> &#47;
          <a href="#" class="">Member Detail</a>
        </span>
        <p class="text-gray-700">Detail Member Akademi Dream Hangul.</p>
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

        {{-- Detail member akademi --}}
        <!-- Card container wide full -->
        <div class="grid grid-cols-2 gap-4">
          {{-- <div class="col-span-1 p-3 rounded-md border border-gray-400"> --}}
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">Member ID</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->memberId }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Username</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->username }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Email</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->email }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Metode Daftar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->metode }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Password</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">******** <a
                      href="{{ route('member-reset-password', ['memberId' => $member->memberId]) }}"
                      class="ml-1.5 text-blue-700">Reset
                      Password</a>
                  </td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Tanggal Daftar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->date_registration }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Created At</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->created_at }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Updated At</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->updated_at }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--/ Card container wide full -->

        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-4">
          <!-- Kelas -->
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            @if (count($kelas) > 0)
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

                  <select
                    class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 
                    focus:border-blue-500 focus:outline-none">
                    <option>Status Lulus</option>
                    <option>Status Tidak Lulus</option>
                  </select>
                </form>

                <div class="pb-3"></div>
                <table class="w-full border-collapse">
                  <thead>
                    <tr class="bg-gray-200">
                      <th class="py-2 font-medium">No</th>
                      <th class="py-2 font-medium">Kelas</th>
                      <th class="py-2 font-medium">Kursus/Program</th>
                      <th class="py-2 font-medium">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kelas as $k)
                      <tr class="border-b border-b-gray-200">
                        <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">
                          {{ $loop->iteration }}
                        </td>
                        <td class="py-2 px-2 text-[0.9rem]">{{ $k->nama_kelas }}</td>
                        <td class="py-2 px-2 text-[0.9rem]">{{ $k->nama_program }}</td>
                        <td class="py-2 px-2">
                          <div class="flex items-center gap-2 justify-center">
                            <a href="{{ route('kelas-detail', ['id' => $k->kelasId]) }}"
                              class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-950 px-2 text-[0.8rem] 
                          text-white hover:opacity-90 transition">
                              <i class="fa-solid fa-circle-info"></i> Detail
                            </a>
                            {{-- <form action="{{ route('delete-member') }}" method="post">
                              @csrf
                              <input type="hidden" name="memberId" value="{{ $member->memberId }}" />

                              <button type="submit"
                                class="inline-flex h-7 items-center justify-center rounded-sm bg-red-700 px-2 text-[0.8rem] text-white
                            hover:opacity-90 transition cursor-pointer">
                                <i class="fa-solid fa-trash-can"></i> Hapus
                              </button>
                            </form> --}}
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
              <p class="text-center font-medium">Member Belum Mengikuti Kelas.</p>
            @endif
          </div>
          <!-- /Kelas -->

          <!-- Sertifikat -->
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            @if (count($sertifikats) > 0)
              {{-- @if (false) --}}
              {{-- <div class="grid grid-cols-2"> --}}
              <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
                <!-- Search Form Here -->
                <form class="flex flex-col flex-wrap gap-3">
                  <!-- Search -->
                  <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                      <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    </span>
                    <input type="text" placeholder="Search"
                      class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
                  </div>

                  <div class="relative">
                    <span class="inline-block pb-1">Filter Tanggal Terbit</span>
                    <div class="flex gap-3 items-center">
                      <span>Mulai</span>
                      <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                          <i class="fa-regular fa-calendar text-sm"></i>
                        </span>
                        <input type="date"
                          class="h-9 rounded-md border border-gray-300 pl-9 pr-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none" />
                      </div>
                      <span>Akhir</span>
                      <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                          <i class="fa-regular fa-calendar text-sm"></i>
                        </span>
                        <input type="date"
                          class="h-9 rounded-md border border-gray-300 pl-9 pr-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none" />
                      </div>
                    </div>
                  </div>
                </form>

                <div class="pb-3"></div>

                <table class="w-full border-collapse">
                  <thead>
                    <tr class="bg-gray-200">
                      <th class="py-2 font-medium">No.</th>
                      <th class="py-2 font-medium">No. Sertifikat</th>
                      <th class="py-2 font-medium">File Link</th>
                      <th class="py-2 font-medium">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sertifikats as $sertifikat)
                      <tr class="border-b border-b-gray-200">
                        <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">
                          {{ $loop->iteration }}
                        </td>
                        <td class="py-2 px-2 text-[0.9rem]">{{ $sertifikat->noSertifikat }}</td>
                        <td class="py-2 px-2 text-[0.9rem] text-center">
                          <a href="{{ route('view-sertifikat', ['filename' => $sertifikat->filename]) }}"
                            target="_blank" class="text-blue-500">
                            <i class="fa-solid fa-link"></i> File Link
                          </a>
                        </td>
                        <td class="py-2 px-2">
                          <div class="flex items-center gap-2 justify-center">
                            <a href="{{ route('sertifikat-detail', ['noSertifikat' => $sertifikat->noSertifikat]) }}"
                              class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-950 px-2 text-[0.8rem] 
                          text-white hover:opacity-90 transition">
                              <i class="fa-solid fa-circle-info"></i> Detail
                            </a>
                            {{-- <form action="{{ route('delete-sertifikat') }}" method="post">
                              @csrf
                              <input type="hidden" name="sertifikatId" value="{{ $sertifikat->sertifikatId }}" />

                              <button type="submit"
                                class="inline-flex h-7 items-center justify-center rounded-sm bg-red-700 px-2 text-[0.8rem] text-white
                            hover:opacity-90 transition cursor-pointer">
                                <i class="fa-solid fa-trash-can"></i> Hapus
                              </button>
                            </form> --}}
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
              <p class="text-center font-medium">Data Sertifikat Kosong.</p>
            @endif
          </div>
          <!-- /Sertifikat -->

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
