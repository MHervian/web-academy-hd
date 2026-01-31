<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Ubah Kursus/Program - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

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
          <h2 class="text-4xl font-bold text-center">Ubah Kursus/Program</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="{{ route('program') }}" class="text-blue-700">Kursus-Program</a> /
          <a href="#" class="">Ubah Kursus-Program</a>
        </span>
        <p class="text-gray-700">Ubah Data Kursus/Program Akademi Dream Hangul.</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('update-program') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="programId" value="{{ $program->programId }}" />
              <!-- Nama Kursus/Program -->
              <label for="nama_program" class="block pb-1 text-gray-600">Nama Kursus/Program</label>
              <input id="nama_program" type="text" name="nama" value="{{ $program->nama }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>
              {{-- <div class="form-group">
                <label for="nama_program">Nama Kursus/Program</label>
                <input type="text" class="form-control" id="nama_program" name="nama" value="{{ $program->nama }}"
                  required />
              </div> --}}


              <!-- Deskripsi -->
              <label for="deskripsi" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi" name="deskripsi"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] 
                focus:outline-0 focus:border-blue-500"
                required>{{ $program->deskripsi }}</textarea>

              <div class="py-1.5"></div>

              {{-- <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" class="form-control" name="deskripsi">
                {{ $program->deskripsi }}
              </textarea>
              </div> --}}

              <!-- Harga Kursus/Program -->
              <label for="harga" class="block pb-1 text-gray-600">Harga</label>
              <input id="harga" type="text" name="harga" value="{{ $program->harga }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>
              {{-- <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $program->harga }}"
                  required />
              </div> --}}

              <!-- Publikasi Kursus/Program -->
              <label for="" class="block pb-1 text-gray-600">Publikasi Kursus/Program</label>
              <div class="flex gap-15">
                <label>
                  <input type="radio" name="publikasi" value="1" {{ $program->isOpen == '1' ? 'checked' : '' }}>
                  Iya, publikasikan
                </label>

                <label>
                  <input type="radio" name="publikasi" value="0" {{ $program->isOpen == '0' ? 'checked' : '' }}>
                  Belum
                </label>
              </div>

              <div class="py-1.5"></div>

              <!-- Kurikulum -->
              {{-- <div class="form-group">
              <label for="kurikulumId">Pilih Kurikulum</label>
              <select class="form-control" id="kurikulumId" name="kurikulumId" required>
                <option value="">-- Pilih Program --</option>
                @if (count($kurikulums) > 0)
                  @foreach ($kurikulums as $kurikulum)
                    <option value="{{ $kurikulum->kurikulumId }}">
                      {{ $kurikulum->nama }}
                    </option>
                  @endforeach
                @endif
              </select>
            </div> --}}

              {{-- <label for="file">Upload File Jadwal (PDF)</label>
            <input type="file" id="file" name="fileJadwal" accept="application/pdf"> --}}

              <!-- File jadwal -->
              <label for="jadwal" class="block pb-1 text-gray-600">Jadwal</label>
              <textarea id="jadwal" name="jadwal"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" required>{{ $program->file_jadwal }}</textarea>

              <div class="py-3"></div>
              {{-- <div class="form-group">
                <label for="jadwal">Jadwal</label>
                <textarea id="jadwal" class="form-control" name="jadwal">
                {{ $program->file_jadwal }}
              </textarea>
              </div> --}}
              <hr />

              <div class="py-3"></div>

              <h4 class="text-xl font-bold">Edit Informasi Versi Bahasa Korea</h4>
              <div class="py-1.5"></div>

              <label for="nama_program_kr" class="block pb-1 text-gray-600">Nama Kursus/Program</label>
              <input id="nama_program_kr" type="text" name="nama_kr" value="{{ $program->nama_kr }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <label for="deskripsi_kr" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi_kr" name="deskripsi_kr"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] 
                focus:outline-0 focus:border-blue-500"
                required>{{ $program->deskripsi_kr }}</textarea>

              <div class="py-1.5"></div>

              <!-- File jadwal -->
              <label for="jadwal_kr" class="block pb-1 text-gray-600">Jadwal</label>
              <textarea id="jadwal_kr" name="jadwal_kr"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" name="jadwal"
                required>{{ $program->file_jadwal_kr }}</textarea>

              <div class="py-3"></div>

              <hr />

              <div class="py-3"></div>

              <h4 class="text-xl font-bold">Edit Informasi Versi Bahasa Inggris</h4>
              <div class="py-1.5"></div>

              <label for="nama_program_en" class="block pb-1 text-gray-600">Nama Kursus/Program</label>
              <input id="nama_program_en" type="text" name="nama_en" value="{{ $program->nama_en }}"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" required />

              <div class="py-1.5"></div>

              <label for="deskripsi_en" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi_en" name="deskripsi_en"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] 
                focus:outline-0 focus:border-blue-500"
                required>{{ $program->deskripsi_en }}</textarea>

              <div class="py-1.5"></div>

              <!-- File jadwal -->
              <label for="jadwal_en" class="block pb-1 text-gray-600">Jadwal</label>
              <textarea id="jadwal_en" name="jadwal_en"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" required>{{ $program->file_jadwal_en }}</textarea>

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  Reset
                </button>
                <button type="submit"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  Ubah
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
      @include('layouts.footer')
      <!-- /Content -->
  </main>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
