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
          <h2 class="text-4xl font-bold text-center">Kursus/Program</h2>
          <a href="{{ route('create-program') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-700 px-4 py-1 text-[0.85rem] text-white
            hover:opacity-90 transition">
            <i class="fa-solid fa-plus"></i>
            Tambah Kursus/Program
          </a>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="#" class="">Kursus-Program</a>
        </span>
        <p class="text-gray-700">Data Kursus/Program Akademi Dream Hangul yang dibuka.</p>
        <!--/ Title and breadcrumbs  -->

        @if (session('success'))
          <!-- alert success -->
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>&#10004; Berhasil!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('error'))
          <!-- alert danger -->
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>&#9746; Gagal!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <div class="content">
          <div class="card-form">
            <h2>Ubah Kursus/Program</h2>
            <form action="{{ route('update-program') }}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="programId" value="{{ $program->programId }}" />
              @csrf
              <!-- Nama Kursus/Program -->
              <div class="form-group">
                <label for="nama_program">Nama Kursus/Program</label>
                <input type="text" class="form-control" id="nama_program" name="nama" value="{{ $program->nama }}"
                  required />
              </div>


              <!-- Deskripsi -->
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" class="form-control" name="deskripsi">
                {{ $program->deskripsi }}
              </textarea>
              </div>

              <!-- Harga Kursus/Program -->
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $program->harga }}"
                  required />
              </div>

              <!-- Publikasi Kursus/Program -->
              <div class="form-group">
                <label for="">Publikasi Kursus/Program</label>
                <div>
                  <label><input type="radio" name="publikasi" value="1"> Iya, publikasikan</label>
                  <label><input type="radio" name="publikasi" value="0"> Belum</label>
                </div>
              </div>

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
              <div class="form-group">
                <label for="jadwal">Jadwal</label>
                <textarea id="jadwal" class="form-control" name="jadwal">
                {{ $program->file_jadwal }}
              </textarea>
              </div>

              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- jQuery (wajib) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Popper.js (wajib untuk tooltip, dropdown, dan modal) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>
