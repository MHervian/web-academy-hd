<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Informasi Detail Kelas - DreamPanel</title>

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

      {{-- <div class="content">
        <h2>Detail Kelas</h2>
        <div style="margin-bottom: 1rem;">
          <a href="{{ route('edit-kelas', ['kelasId' => $kelas->kelasId]) }}" class="btn btn-info">Ubah</a>
          <form action="{{ route('delete-kelas') }}" method="post" class="d-inline">
            @csrf
            <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
            <button type="submit" class="btn btn-danger" style="font-size: 13px; cursor: pointer;">Hapus</button>
          </form>
        </div> --}}

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-4xl font-bold text-center">Informasi Detail Kelas</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="{{ route('kelas') }}" class="text-blue-700">Kelas</a> /
          <a href="#" class="">Detail Kelas</a>
        </span>
        <p class="text-gray-700">Detail Informasi Kelas Dream Hangul Akademi.</p>
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
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">ID Kelas</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->kelasId }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Nama Kelas</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_kelas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Kursus/Program</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_program }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Pengajar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->pengajar }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Deskripsi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->deskripsi }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Kapasitas Kelas</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->kapasitas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Jumlah Terisi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->terisi }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Tanggal Buka Daftar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_open }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Tanggal Tutup Daftar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_close }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Jam Tutup Daftar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->time_close }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Kelas Dimulai?</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">
                    @if ($kelas->isKelasStart == '1')
                      <span class="bg-green-600 py-1 px-3 text-white rounded-lg">Mulai</span>
                    @else
                      <span class="bg-gray-400 py-1 px-3 text-white rounded-lg">Belum</span>
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="py-2"></div>
            <hr />
            <div class="py-2"></div>
            <h4 class="text-xl font-bold">Informasi Versi Korea</h4>
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">Nama Kelas</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_kelas_kr }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Nama Program</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_program_kr }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Pengajar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->pengajar_kr }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Deskripsi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->deskripsi_kr }}</td>
                </tr>
              </tbody>
            </table>
            <div class="py-2"></div>
            <hr />
            <div class="py-2"></div>
            <h4 class="text-xl font-bold">Informasi Versi Inggris</h4>
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">Nama Kelas</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_kelas_en }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Nama Program</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_program_en }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Pengajar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->pengajar_en }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Deskripsi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->deskripsi_en }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

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
