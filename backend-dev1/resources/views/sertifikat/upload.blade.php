<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ __('sertifikat.upload_btn') }} - DreamPanel</title>

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
          <h2 class="text-3xl font-bold text-center">{{ __('sertifikat.upload_title') }}</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}"
            class="text-blue-700 hover:opacity-60 transition">{{ __('sertifikat.dashboard') }}</a> &#47;
          <a href="{{ route('sertifikat') }}"
            class="text-blue-700 hover:opacity-60 transition">{{ __('sertifikat.title') }}</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">{{ __('sertifikat.upload_btn') }}</a>
        </span>
        <p class="text-gray-700">{{ __('sertifikat.upload_desc') }}</p>
        <div class="py-3"></div>
        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('store-sertifikat') }}" method="post" enctype="multipart/form-data">
              @csrf

              <label for="member" class="block pb-1 text-gray-600">{{ __('sertifikat.label.member_name') }}</label>

              <select id="member"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="memberId" required>
                <option value="">{{ __('sertifikat.label.select_member') }}</option>
                @if (count($members) > 0)
                  @foreach ($members as $member)
                    <option value="{{ $member->memberId }}">{{ $member->username }}</option>
                  @endforeach
                @endif
              </select>

              <div class="py-1.5"></div>

              <label for="noSertifikat" class="block pb-1 text-gray-600">{{ __('sertifikat.label.cert_no') }}</label>
              <input id="noSertifikat" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="noSertifikat" required />

              <div class="py-1.5"></div>

              <label for="tanggal" class="block pb-1 text-gray-600">{{ __('sertifikat.label.issue_date') }}</label>
              <input id="tanggal" type="date"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="tanggal" required />

              <div class="py-1.5"></div>

              <label for="filepdf" class="block pb-1 text-gray-600">{{ __('sertifikat.label.upload_pdf') }}</label>
              <input id="filepdf" type="file"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="filepdf" accept="application/pdf" required />

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('sertifikat.btn.reset') }}
                </button>
                <button type="submit"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('sertifikat.btn.save') }}
                </button>
              </div>
            </form>
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
