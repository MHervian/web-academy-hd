<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Ubah Kelas - DreamPanel</title>

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
          <h2 class="text-4xl font-bold text-center">Ubah Kelas</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="{{ route('kelas') }}" class="text-blue-700">Kelas</a> /
          <a href="#" class="">Ubah Kelas</a>
        </span>
        <p class="text-gray-700">Ubah Data Kelas Akademi Dream Hangul.</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('update-kelas') }}" method="post">
              @csrf
              <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
              <!-- Nama Kelas -->
              <label for="nama_kelas" class="block pb-1 text-gray-600">Nama Kelas</label>
              <input id="nama_kelas" type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <!-- Nama Program -->
              <label for="nama_program" class="block pb-1 text-gray-600">Pilih Program</label>
              <select id="nama_program" name="nama_program"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required>
                <option value="">-- Pilih Program --</option>
                @if (count($programs) > 0)
                  @foreach ($programs as $program)
                    <option value="{{ $program->nama }}" {{ $kelas->nama_program == $program->nama ? 'selected' : '' }}>
                      {{ $program->nama }}
                    </option>
                  @endforeach
                @else
                  <!-- Empty -->
                @endif
              </select>

              <div class="py-1.5"></div>

              <!-- Nama Pengajar -->
              <label for="nama_pengajar" class="block pb-1 text-gray-600">Nama Pengajar</label>
              <input id="nama_pengajar" type="text" name="pengajar" value="{{ $kelas->pengajar }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <!-- Deskripsi -->
              <label for="deskripsi" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi" name="deskripsi"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500">{{ $kelas->deskripsi }}</textarea>

              <div class="py-1.5"></div>

              <!-- Kapasitas -->
              <label for="kapasitas" class="block pb-1 text-gray-600">Kapasitas Kelas</label>
              <input id="kapasitas" type="text" name="kapasitas" value="{{ $kelas->kapasitas }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <!-- Date Open -->
              <label for="date_open" class="block pb-1 text-gray-600">Tanggal Buka Pendaftaran</label>
              <input id="date_open" type="date" name="date_open" value="{{ $kelas->date_open }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <!-- Date Close -->
              <label for="date_close" class="block pb-1 text-gray-600">Tanggal Tutup Pendaftaran</label>
              <input id="date_close" type="date" name="date_close" value="{{ $kelas->date_close }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <!-- Time Close -->
              <label for="time_close" class="block pb-1 text-gray-600">Jam Tutup Pendaftaran</label>
              <input id="time_close" type="time" name="time_close" value="{{ $kelas->time_close }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" required />

              <div class="py-3"></div>
              <hr />
              <div class="py-3"></div>

              <h4 class="text-xl font-bold">Edit Informasi Versi Bahasa Korea</h4>
              <div class="py-1.5"></div>

              <label for="nama_kelas_kr" class="block pb-1 text-gray-600">Nama Kelas</label>
              <input id="nama_kelas_kr" type="text" name="nama_kelas_kr" value="{{ $kelas->nama_kelas_kr }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <label for="nama_program_kr" class="block pb-1 text-gray-600">Pilih Program</label>
              <select id="nama_program_kr" name="nama_program_kr"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required>
                <option value="">-- Pilih Program --</option>
                @if (count($programs) > 0)
                  @foreach ($programs as $program)
                    <option value="{{ $program->nama_kr }}"
                      {{ $kelas->nama_program_kr == $program->nama_kr ? 'selected' : '' }}>
                      {{ $program->nama_kr }}
                    </option>
                  @endforeach
                @else
                  <!-- Empty -->
                @endif
              </select>

              <div class="py-1.5"></div>

              <label for="nama_pengajar_kr" class="block pb-1 text-gray-600">Nama Pengajar</label>
              <input id="nama_pengajar_kr" type="text" name="pengajar_kr" value="{{ $kelas->pengajar_kr }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <label for="deskripsi_kr" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi_kr" name="deskripsi_kr"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500">{{ $kelas->deskripsi_kr }}</textarea>

              <div class="py-3"></div>
              <hr />
              <div class="py-3"></div>

              <h4 class="text-xl font-bold">Edit Informasi Versi Bahasa Inggris</h4>
              <div class="py-1.5"></div>

              <label for="nama_kelas_en" class="block pb-1 text-gray-600">Nama Kelas</label>
              <input id="nama_kelas_en" type="text" name="nama_kelas_en" value="{{ $kelas->nama_kelas_en }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <label for="nama_program_en" class="block pb-1 text-gray-600">Pilih Program</label>
              <select id="nama_program_en" name="nama_program_en"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required>
                <option value="">-- Pilih Program --</option>
                @if (count($programs) > 0)
                  @foreach ($programs as $program)
                    <option value="{{ $program->nama_en }}"
                      {{ $kelas->nama_program_en == $program->nama_en ? 'selected' : '' }}>
                      {{ $program->nama_en }}
                    </option>
                  @endforeach
                @else
                  <!-- Empty -->
                @endif
              </select>

              <div class="py-1.5"></div>

              <label for="nama_pengajar_en" class="block pb-1 text-gray-600">Nama Pengajar</label>
              <input id="nama_pengajar_en" type="text" name="pengajar_en" value="{{ $kelas->pengajar_en }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <label for="deskripsi_en" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi_en" name="deskripsi_en"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500">{{ $kelas->deskripsi_en }}</textarea>

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer 
                  hover:opacity-90 transition">
                  Reset
                </button>
                <button type="submit"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer 
                  hover:opacity-90 transition">
                  Ubah
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="py-3"></div>
      </div>

      @include('layouts.footer')
    </div>

    <!-- jQuery (wajib) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper.js (wajib untuk tooltip, dropdown, dan modal) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  </main>
</body>

</html>
