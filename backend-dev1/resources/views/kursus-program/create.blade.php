<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Tambah Kursus/Program - DreamPanel</title>

  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
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
          <h2 class="text-4xl font-bold text-center">Tambah Kursus/Program</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="{{ route('program') }}" class="text-blue-700">Kursus-Program</a> /
          <a href="#" class="">Tambah Kursus-Program</a>
        </span>
        <p class="text-gray-700">Form Tambah Data Kursus/Program Akademi Dream Hangul.</p>

        <div class="py-3"></div>

        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('store-program') }}" method="post" enctype="multipart/form-data">
              @csrf
              <!-- Nama Kursus/Program -->
              {{-- <div class="form-group">
                <label for="nama_program">Nama Kursus/Program</label>
                <input type="text" class="form-control" id="nama_program" name="nama" required />
              </div> --}}

              <label for="nama_program" class="block pb-1 text-gray-600">Nama Kursus/Program</label>
              <input id="nama_program" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="nama" required />

              <div class="py-1.5"></div>

              <!-- Deskripsi -->
              {{-- <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" class="form-control" name="deskripsi"></textarea>
              </div> --}}

              <label for="deskripsi" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" name="deskripsi"
                required></textarea>
              {{-- <input id="deskripsi" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="" required /> --}}

              <div class="py-1.5"></div>

              <!-- Harga Kursus/Program -->
              {{-- <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required />
              </div> --}}

              <label for="harga" class="block pb-1 text-gray-600">Harga</label>
              <input id="harga" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="harga" required />

              <div class="py-1.5"></div>

              <!-- Publikasi Kursus/Program -->
              {{-- <div class="form-group">
                <label for="">Publikasi Kursus/Program</label>
                <div>
                  <label><input type="radio" name="publikasi" value="1"> Iya, publikasikan</label>
                  <label><input type="radio" name="publikasi" value="0"> Belum</label>
                </div>
              </div> --}}

              <label for="" class="block pb-1 text-gray-600">Publikasi Kursus/Program</label>
              <div class="flex gap-15">
                <label><input type="radio" name="publikasi" value="1"> Iya, publikasikan</label>
                <label><input type="radio" name="publikasi" value="0"> Belum</label>
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
              {{-- <div class="form-group">
                <label for="jadwal">Jadwal</label>
                <textarea id="jadwal" class="form-control" name="jadwal"></textarea>
              </div> --}}

              <label for="jadwal" class="block pb-1 text-gray-600">Jadwal</label>
              <textarea id="jadwal"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500" name="jadwal"
                required></textarea>

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  Reset
                </button>
                <button type="submit"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  Simpan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      @include('layouts.footer')
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bttn-translate.js') }}"></script>
  </main>
</body>

</html>
