<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ __('kelas.edit_title') }} - DreamPanel</title>
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
          <h2 class="text-4xl font-bold text-center">{{ __('kelas.edit_title') }}</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">{{ __('kelas.dashboard') }}</a> /
          <a href="{{ route('kelas') }}" class="text-blue-700">{{ __('kelas.title') }}</a> /
          <a href="#" class="">{{ __('kelas.edit_title') }}</a>
        </span>
        <p class="text-gray-700">{{ __('kelas.edit_desc') }}</p>

        <div class="py-3"></div>

        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('update-kelas') }}" method="post">
              @csrf
              <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />

              <label for="nama_kelas" class="block pb-1 text-gray-600 font-medium">{{ __('kelas.th_name') }}</label>
              <input id="nama_kelas" type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="nama_program"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_select_program') }}</label>
              <select id="nama_program" name="nama_program"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required>
                <option value="">{{ __('kelas.opt_select_program') }}</option>
                @foreach ($programs as $program)
                  <option value="{{ $program->nama }}" {{ $kelas->nama_program == $program->nama ? 'selected' : '' }}>
                    {{ $program->nama }}
                  </option>
                @endforeach
              </select>

              <div class="py-1.5"></div>

              <label for="nama_pengajar"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_teacher') }}</label>
              <input id="nama_pengajar" type="text" name="pengajar" value="{{ $kelas->pengajar }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="deskripsi" class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_desc') }}</label>
              <textarea id="deskripsi" name="deskripsi"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500">{{ $kelas->deskripsi }}</textarea>

              <div class="py-1.5"></div>

              <label for="kapasitas"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_capacity_member') }}</label>
              <input id="kapasitas" type="text" name="kapasitas" value="{{ $kelas->kapasitas }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="date_open"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_open_reg') }}</label>
              <input id="date_open" type="date" name="date_open" value="{{ $kelas->date_open }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="date_close"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_close_reg') }}</label>
              <input id="date_close" type="date" name="date_close" value="{{ $kelas->date_close }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="time_close"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_close_time_reg') }}</label>
              <input id="time_close" type="time" name="time_close" value="{{ $kelas->time_close }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-3"></div>
              <hr />
              <div class="py-3"></div>

              <h4 class="text-xl font-bold">{{ __('kelas.edit_info_kr') }}</h4>
              <div class="py-1.5"></div>

              <label for="nama_kelas_kr" class="block pb-1 text-gray-600 font-medium">{{ __('kelas.th_name') }}
                (KR)</label>
              <input id="nama_kelas_kr" type="text" name="nama_kelas_kr" value="{{ $kelas->nama_kelas_kr }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="nama_program_kr"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_select_program') }} (KR)</label>
              <select id="nama_program_kr" name="nama_program_kr"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required>
                <option value="">{{ __('kelas.opt_select_program') }}</option>
                @foreach ($programs as $program)
                  <option value="{{ $program->nama_kr }}"
                    {{ $kelas->nama_program_kr == $program->nama_kr ? 'selected' : '' }}>
                    {{ $program->nama_kr }}
                  </option>
                @endforeach
              </select>

              <div class="py-1.5"></div>

              <label for="nama_pengajar_kr"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_teacher') }} (KR)</label>
              <input id="nama_pengajar_kr" type="text" name="pengajar_kr" value="{{ $kelas->pengajar_kr }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="deskripsi_kr" class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_desc') }}
                (KR)</label>
              <textarea id="deskripsi_kr" name="deskripsi_kr"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500">{{ $kelas->deskripsi_kr }}</textarea>

              <div class="py-3"></div>
              <hr />
              <div class="py-3"></div>

              <h4 class="text-xl font-bold">{{ __('kelas.edit_info_en') }}</h4>
              <div class="py-1.5"></div>

              <label for="nama_kelas_en" class="block pb-1 text-gray-600 font-medium">{{ __('kelas.th_name') }}
                (EN)</label>
              <input id="nama_kelas_en" type="text" name="nama_kelas_en" value="{{ $kelas->nama_kelas_en }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="nama_program_en"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_select_program') }} (EN)</label>
              <select id="nama_program_en" name="nama_program_en"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required>
                <option value="">{{ __('kelas.opt_select_program') }}</option>
                @foreach ($programs as $program)
                  <option value="{{ $program->nama_en }}"
                    {{ $kelas->nama_program_en == $program->nama_en ? 'selected' : '' }}>
                    {{ $program->nama_en }}
                  </option>
                @endforeach
              </select>

              <div class="py-1.5"></div>

              <label for="nama_pengajar_en"
                class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_teacher') }} (EN)</label>
              <input id="nama_pengajar_en" type="text" name="pengajar_en" value="{{ $kelas->pengajar_en }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required />

              <div class="py-1.5"></div>

              <label for="deskripsi_en" class="block pb-1 text-gray-600 font-medium">{{ __('kelas.label_desc') }}
                (EN)</label>
              <textarea id="deskripsi_en" name="deskripsi_en"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500">{{ $kelas->deskripsi_en }}</textarea>

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('kelas.btn_reset') }}
                </button>
                <button type="submit"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('kelas.btn_update') }}
                </button>
              </div>
            </form>
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
