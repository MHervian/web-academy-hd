<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Tambah Kelas - DreamPanel</title>

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
      <!-- Header -->
      <header class="relative z-3 flex justify-between px-3 pb-1 pt-3 border-solid border-b-2 border-b-white">
        <div class="flex items-center">
          <!-- button type="button" class="text-gray-500">
            <i class="fa-solid fa-bars cursor-pointer text-2xl"></i>
          </!-->
          <h1 class="font-bold inline-block ml-2 text-gray-600 navigasi">
            <a href="#">DreamPanel</a>
          </h1>
        </div>
        <span class="flex justify-between pl-5">
          <!-- div class="relative group">
            <button type="button" class="relative text-[1.5rem] cursor-pointer">
              <i class="fa-regular fa-bell text-[#a6a6a6]"></i>
              <span
                class="absolute top-1 right-1 h-3 w-3 bg-red-600 rounded-full border-2 border-transparent transform translate-x-1 -translate-y-1"></span>
            </button>
            <div class="absolute hidden right-0 group-hover:block w-90 bg-white shadow-lg rounded-md mt-2 z-10">
              <p class="text-gray-800 pl-3 pb-2 pt-3.5 font-bold navigasi">NOTIFIKASI</p>
              <hr class="border-gray-300" />
              <a href="#" class="block px-3 py-1.5 text-gray-800 hover:bg-gray-100">
                <p class="text-[1.05rem]">Update in Kurikulum &SmallCircle; <span class="text-gray-400 text-[0.78rem]">3
                    menit lalu</span></p>
                <p class="text-gray-500 text-[0.9rem]">Lorem ipsun dolor sit amet sedsiudfs i...</p>
                <span class="text-[0.8rem]">By <span class="font-bold">Author</span></span>
                <span class="text-[0.8rem]">24 Maret 2025</span>
              </a>
              <hr class="border-gray-300" />
              <a href="#" class="block px-3 py-1.5 text-gray-800 hover:bg-gray-100">
                <p class="text-[1.05rem]">Update in Kurikulum &SmallCircle; <span class="text-gray-400 text-[0.78rem]">3
                    menit lalu</span></p>
                <p class="text-gray-500 text-[0.9rem]">Lorem ipsun dolor sit amet sedsiudfs i...</p>
                <span class="text-[0.8rem]">By <span class="font-bold">Author</span></span>
                <span class="text-[0.8rem]">24 Maret 2025</span>
              </a>
              <hr class="border-gray-300" />
              <a href="#" class="block py-3 w-full text-center text-blue-400">More...</a>
            </div>
          </!-->
          {{-- <span class="px-2"></span>
          <span class="border-l-2 border-[#e6e6e6]"></span>
          <span class="px-2"></span> --}}
          {{-- <div class="relative group">
            <button type="button" class="text-[1.5rem] cursor-pointer">
              <i class="fa-regular fa-circle-user text-[#a6a6a6]"></i>
            </button>
            <div class="absolute hidden right-0 group-hover:block w-70 bg-white shadow-lg rounded-md mt-2 z-10">
              <p class="text-gray-500 pl-3 pb-2 pt-3.5 font-bold navigasi">AKUN</p>
              <hr class="border-gray-100" />
              <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-gear"></i> Pengaturan
              </a>
              <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-circle-info"></i> Tentang
              </a>
              <a href="login.html" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
              </a>
            </div>
          </div> --}}
          {{-- Logout button temp. --}}
          <a href="{{ route('logout') }}" class="block px-4 py-1.5 text-gray-800 hover:bg-gray-100">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
          </a>
          <span class="px-3"></span>
        </span>
      </header>
      <!--/ Header -->

      {{-- @if (session('success'))
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
      @endif --}}

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-4xl font-bold text-center">Tambah Kelas</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="{{ route('kelas') }}" class="text-blue-700">Kelas</a> /
          <a href="#" class="">Tambah Kelas</a>
        </span>
        <p class="text-gray-700">Form Tambah Data Kelas Akademi Dream Hangul.</p>

        <div class="py-3"></div>
        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('store-kelas') }}" method="post" enctype="multipart/form-data">
              @csrf
              <!-- Nama Kelas -->
              {{-- <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
              </div> --}}

              <label for="nama_kelas" class="block pb-1 text-gray-600">Nama Kelas</label>
              <input id="nama_kelas" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="nama_kelas" required />

              <div class="py-1.5"></div>

              <!-- Nama Program -->
              {{-- <div class="form-group">
                <label for="nama_program">Pilih Program</label>
                <select class="form-control" id="nama_program" name="nama_program" required>
                  <option value="">-- Pilih Program --</option>
                  @if (count($programs) > 0)
                    @foreach ($programs as $program)
                      <option value="{{ $program->nama }}">{{ $program->nama }}</option>
                    @endforeach
                  @else
                    <!-- Empty -->
                  @endif
                </select>
              </div> --}}

              <label for="nama_program" class="block pb-1 text-gray-600">Pilih Kursus/Program</label>
              <select id="nama_program" name="nama_program"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                required>
                <option value="">-- Pilih kurus/Program --</option>
                @if (count($programs) > 0)
                  @foreach ($programs as $program)
                    <option value="{{ $program->nama }}">{{ $program->nama }}</option>
                  @endforeach
                @else
                  <!-- Empty -->
                @endif
              </select>

              <div class="py-1.5"></div>

              <!-- Nama Pengajar -->
              {{-- <div class="form-group">
                <label for="nama_pengajar">Nama Pengajar</label>
                <input type="text" class="form-control" id="nama_pengajar" name="pengajar" required>
              </div> --}}

              <label for="nama_pengajar" class="block pb-1 text-gray-600">Nama Pengajar</label>
              <input id="nama_pengajar" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="nama_pengajar" required />

              <div class="py-1.5"></div>

              <!-- Deskripsi -->
              {{-- <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" class="form-control" name="deskripsi"></textarea>
              </div> --}}

              <label for="deskripsi" class="block pb-1 text-gray-600">Deskripsi</label>
              <textarea id="deskripsi"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                name="deskripsi" required></textarea>

              <div class="py-1.5"></div>

              <!-- Kapasitas -->
              {{-- <div class="form-group">
                <label for="kapasitas">Kapasitas Peserta</label>
                <input type="number" class="form-control" id="kapasitas" name="kapasitas" min="1" required>
              </div> --}}

              <label for="kapasitas" class="block pb-1 text-gray-600">Kapasitas Peserta</label>
              <input id="kapasitas" type="number"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="kapasitas" required />

              <div class="py-1.5"></div>

              <!-- Date Open -->
              {{-- <div class="form-group">
                <label for="date_open">Tanggal Buka Pendaftaran</label>
                <input type="date" class="form-control" id="date_open" name="date_open" required>
              </div> --}}

              <label for="date_open" class="block pb-1 text-gray-600">Tanggal Buka Pendaftaran</label>
              <input id="date_open" type="date"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" name="date_open" required />

              <div class="py-1.5"></div>

              <!-- Date Close -->
              {{-- <div class="form-group">
                <label for="date_close">Tanggal Tutup Pendaftaran</label>
                <input type="date" class="form-control" id="date_close" name="date_close" required>
              </div> --}}

              <label for="date_close" class="block pb-1 text-gray-600">Tanggal Tutup Pendaftaran</label>
              <input id="date_close" type="date"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="date_close" required />

              <div class="py-1.5"></div>

              <!-- Time Close -->
              {{-- <div class="form-group">
                <label for="time_close">Waktu Tutup Pendaftaran</label>
                <input type="time" class="form-control" id="time_close" name="time_close" step="1"
                  required>
              </div> --}}

              <label for="time_close" class="block pb-1 text-gray-600">Waktu Tutup Pendaftaran</label>
              <input id="time_close" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 
                focus:border-blue-500"
                placeholder="" name="time_close" required />

              <div class="py-3"></div>

              {{-- <button type="reset">Reset</button>
              <button type="submit" class="btn btn-primary">Save</button> --}}

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
        <div class="py-3"></div>
      </div>

      <div class="bg-white p-3">
        <p class="text-gray-500">&copy;DreamHangul 2025</p>
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
