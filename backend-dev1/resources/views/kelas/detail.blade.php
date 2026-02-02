<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ __('kelas.detail_title') }} - DreamPanel</title>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
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
        <div class="flex items-center gap-4">
          <h2 class="text-4xl font-bold text-center">{{ __('kelas.detail_title') }}</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">{{ __('kelas.dashboard') }}</a> /
          <a href="{{ route('kelas') }}" class="text-blue-700">{{ __('kelas.title') }}</a> /
          <a href="#" class="">{{ __('kelas.detail_breadcrumb') }}</a>
        </span>
        <p class="text-gray-700">{{ __('kelas.detail_desc') }}</p>

        @if (session('success'))
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-green-50 border border-green-300 mt-2.5 px-5 py-2 text-green-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">✅</span>
              <span><strong class="font-semibold">{{ __('kelas.success') }}</strong> {{ session('success') }}</span>
            </div>
            <button onclick="this.closest('div').remove()"
              class="text-green-600 hover:text-green-900 cursor-pointer">✕</button>
          </div>
        @endif

        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-4">
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[160px] font-medium">{{ __('kelas.label_id') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->kelasId }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.th_name') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_kelas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.th_program') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_program }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_teacher') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->pengajar }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_desc') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->deskripsi }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_capacity') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->kapasitas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_filled') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->terisi }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_open_date') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_open }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_close_date') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_close }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_close_time') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->time_close }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.th_started') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">
                    <span
                      class="{{ $kelas->isKelasStart == '1' ? 'bg-green-600' : 'bg-gray-400' }} py-1 px-3 text-white rounded-lg">
                      {{ $kelas->isKelasStart == '1' ? __('kelas.status_start') : __('kelas.status_not_start') }}
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="py-4"></div>
            <hr />
            <div class="py-4"></div>

            <h4 class="text-xl font-bold">{{ __('kelas.info_kr') }}</h4>
            <table class="w-full border-collapse mt-2">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[160px] font-medium">{{ __('kelas.th_name') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_kelas_kr }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.th_program') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_program_kr }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_teacher') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->pengajar_kr }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_desc') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->deskripsi_kr }}</td>
                </tr>
              </tbody>
            </table>

            <div class="py-4"></div>
            <hr />
            <div class="py-4"></div>

            <h4 class="text-xl font-bold">{{ __('kelas.info_en') }}</h4>
            <table class="w-full border-collapse mt-2">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[160px] font-medium">{{ __('kelas.th_name') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_kelas_en }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.th_program') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->nama_program_en }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_teacher') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->pengajar_en }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('kelas.label_desc') }}</td>
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

  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
