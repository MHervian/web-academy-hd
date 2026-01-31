<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Detail Kursus/Program - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
        <div class="flex items-center gap-4">
          <h2 class="text-4xl font-bold text-center">Detail Informasi Kursus/Program</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="{{ route('program') }}" class="text-blue-700">Kursus-Program</a> /
          <a href="#" class="">Detail Kursus-Program</a>
        </span>
        <p class="text-gray-700">Informasi Detail Kursus/Program.</p>
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

        <div class="grid grid-cols-2 gap-4">
          {{-- <div class="col-span-1 p-3 rounded-md border border-gray-400"> --}}
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                {{-- <tr class="border-b border-b-gray-200">
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
                </tr> --}}

                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">ID Kursus/Program</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $program->programId }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Nama Kursus/Program</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $program->nama }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Deskripsi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $program->deskripsi }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Jadwal</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $program->file_jadwal }}</td>
                </tr>
                @php
                  $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
                  $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, 0);
                  // echo $formatter->format($number);
                @endphp
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Harga Kursus/Program</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $formatter->format($program->harga) }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Kursus/Program Berjalan?</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">
                    @if ($program->isOpen == '1')
                      <span class="bg-green-600 py-1 px-3 text-white rounded-lg">Aktif</span>
                    @else
                      <span class="bg-red-600 py-1 px-3 text-white rounded-lg">NonAktif</span>
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--/ Card container wide full -->

        <div class="py-3"></div>

      </div>
      @include('layouts.footer')
    </div>
  </main>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
