<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Sertifikat Detail - DreamPanel</title>

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

    <div class="flex-1 flex flex-col">
      @include('layouts.header')

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">Detail Sertifikat</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('sertifikat') }}" class="text-blue-700 hover:opacity-60 transition">Sertifikat</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">Detail Sertifikat</a>
        </span>
        <p class="text-gray-700">Informasi Detail Sertifikat Kelulusan.</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-4">
          {{-- <div class="col-span-1 p-3 rounded-md border border-gray-400"> --}}
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">Tanggal Terbit</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $sertifikat[0]->date_issued }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Kepada Peserta</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member[0]->username }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Email</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member[0]->email }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">File Sertifikat</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">
                    <a href="{{ route('view-sertifikat', ['filename' => $sertifikat[0]->filename]) }}"
                      class="text-blue-700"><i class="fa-solid fa-link"></i> File Link</a>
                  </td>
                </tr>

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
              </tbody>
            </table>
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
