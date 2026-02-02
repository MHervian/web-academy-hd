<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ __('sertifikat.detail_title') }} - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  {{-- <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" /> --}}
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
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">{{ __('sertifikat.detail_title') }}</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}"
            class="text-blue-700 hover:opacity-60 transition">{{ __('sertifikat.dashboard') }}</a> &#47;
          <a href="{{ route('sertifikat') }}"
            class="text-blue-700 hover:opacity-60 transition">{{ __('sertifikat.title') }}</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">{{ __('sertifikat.detail_title') }}</a>
        </span>
        <p class="text-gray-700">{{ __('sertifikat.detail_desc') }}</p>
        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-4">
          {{-- <div class="col-span-1 p-3 rounded-md border border-gray-400"> --}}
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">{{ __('sertifikat.label.date_issued') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $sertifikat[0]->date_issued }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">{{ __('sertifikat.label.to_participant') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member[0]->username }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">{{ __('sertifikat.label.email') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member[0]->email }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">{{ __('sertifikat.label.cert_file') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">
                    <a href="{{ route('view-sertifikat', ['filename' => $sertifikat[0]->filename]) }}"
                      class="text-blue-700"><i class="fa-solid fa-link"></i> {{ __('sertifikat.table.file_link') }}</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>

  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
