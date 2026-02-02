<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ __('kursus.add_title') }} - DreamPanel</title>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
          <h2 class="text-4xl font-bold text-center">{{ __('kursus.add_title') }}</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">{{ __('kursus.dashboard') }}</a> /
          <a href="{{ route('program') }}" class="text-blue-700">{{ __('kursus.title') }}</a> /
          <a href="#" class="">{{ __('kursus.add_breadcrumb') }}</a>
        </span>
        <p class="text-gray-700">{{ __('kursus.add_desc') }}</p>

        <div class="py-3"></div>

        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('store-program') }}" method="post" enctype="multipart/form-data">
              @csrf
              <label for="nama_program" class="block pb-1 text-gray-600">{{ __('kursus.name') }}</label>
              <input id="nama_program" type="text" name="nama" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" />

              <div class="py-1.5"></div>

              <label for="deskripsi" class="block pb-1 text-gray-600">{{ __('kursus.description_label') }}</label>
              <textarea id="deskripsi" name="deskripsi" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"></textarea>

              <div class="py-1.5"></div>

              <label for="harga" class="block pb-1 text-gray-600">{{ __('kursus.price') }}</label>
              <input id="harga" type="text" name="harga" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" />

              <div class="py-1.5"></div>

              <label class="block pb-1 text-gray-600">{{ __('kursus.label_publish') }}</label>
              <div class="flex gap-15">
                <label><input type="radio" name="publikasi" value="1"> {{ __('kursus.option_yes') }}</label>
                <label><input type="radio" name="publikasi" value="0"> {{ __('kursus.option_no') }}</label>
              </div>

              <div class="py-1.5"></div>

              <label for="jadwal" class="block pb-1 text-gray-600">{{ __('kursus.schedule_label') }}</label>
              <textarea id="jadwal" name="jadwal" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"></textarea>

              <div class="py-3"></div>
              <hr />
              <div class="py-3"></div>

              <h4 class="text-xl font-bold">{{ __('kursus.info_kr') }}</h4>
              <div class="py-1.5"></div>

              <label for="nama_program_kr" class="block pb-1 text-gray-600">{{ __('kursus.name') }}</label>
              <input id="nama_program_kr" type="text" name="nama_kr" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" />

              <div class="py-1.5"></div>

              <label for="deskripsi_kr" class="block pb-1 text-gray-600">{{ __('kursus.description_label') }}</label>
              <textarea id="deskripsi_kr" name="deskripsi_kr" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"></textarea>

              <div class="py-1.5"></div>

              <label for="jadwal_kr" class="block pb-1 text-gray-600">{{ __('kursus.schedule_label') }}</label>
              <textarea id="jadwal_kr" name="jadwal_kr" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"></textarea>

              <div class="py-3"></div>
              <hr />
              <div class="py-3"></div>

              <h4 class="text-xl font-bold">{{ __('kursus.info_en') }}</h4>
              <div class="py-1.5"></div>

              <label for="nama_program_en" class="block pb-1 text-gray-600">{{ __('kursus.name') }}</label>
              <input id="nama_program_en" type="text" name="nama_en" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" />

              <div class="py-1.5"></div>

              <label for="deskripsi_en" class="block pb-1 text-gray-600">{{ __('kursus.description_label') }}</label>
              <textarea id="deskripsi_en" name="deskripsi_en" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"></textarea>

              <div class="py-1.5"></div>

              <label for="jadwal_en" class="block pb-1 text-gray-600">{{ __('kursus.schedule_label') }}</label>
              <textarea id="jadwal_en" name="jadwal_en" required
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"></textarea>

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('kursus.btn_reset') }}
                </button>
                <button type="submit"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('kursus.btn_save') }}
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
