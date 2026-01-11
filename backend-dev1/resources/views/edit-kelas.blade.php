<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Ubah Kelas - DreamPanel</title>

  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Font -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <!-- Themify Icons -->
  <link rel="stylesheet" href="/css/themify-icons.css" />

  <style>
    .card-form {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: auto;
    }

    .card-form h2 {
      margin-bottom: 20px;
      font-size: 20px;
      color: #1e3a5f;
    }

    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      font-size: 14px;
    }

    form select,
    form input[type="file"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    form button {
      background: #1e3a5f;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
    }

    form button:hover {
      background: #16324a;
    }
  </style>

  <!-- Admin CSS -->
  <link rel="stylesheet" href="/css/admin.css" />
</head>

<body>
  <div class="layout">
    <!-- Sidebar -->
    <div class="sidebar">
      @include('navigation.navigation')
    </div>

    <!-- Main -->
    <div class="main">
      <!-- Header -->
      <div class="header">
        <div class="logo"><a href="{{ route('admin-dashboard') }}">DreamPanel</a></div>
        <ul class="menu">
          <li><a href="{{ route('coming-soon') }}">Inbox</a></li>
          <li><a href="{{ route('coming-soon') }}">Settings</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </div>

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
          <h2>Ubah Kelas</h2>
          <form action="{{ route('update-kelas') }}" method="post">
            @csrf
            <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
            <!-- Nama Kelas -->
            <div class="form-group">
              <label for="nama_kelas">Nama Kelas</label>
              <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                value="{{ $kelas->nama_kelas }}" required>
            </div>

            <!-- Nama Program -->
            <div class="form-group">
              <label for="nama_program">Pilih Program</label>
              <select class="form-control" id="nama_program" name="nama_program" required>
                <option value="">-- Pilih Program --</option>
                @if (count($programs) > 0)
                  @foreach ($programs as $program)
                    @if ($kelas->nama_program == $program->nama)
                      <option value="{{ $program->nama }}" selected>{{ $program->nama }}</option>
                    @else
                      <option value="{{ $program->nama }}">{{ $program->nama }}</option>
                    @endif
                  @endforeach
                @else
                  <!-- Empty -->
                @endif
              </select>
            </div>

            <!-- Nama Pengajar -->
            <div class="form-group">
              <label for="nama_pengajar">Nama Pengajar</label>
              <input type="text" class="form-control" id="nama_pengajar" name="pengajar"
                value="{{ $kelas->pengajar }}" required>
            </div>

            <!-- Deskripsi -->
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea id="deskripsi" class="form-control" name="deskripsi">
                {{ $kelas->deskripsi }}
              </textarea>
            </div>

            <!-- Kapasitas -->
            <div class="form-group">
              <label for="kapasitas">Kapasitas Peserta</label>
              <input type="number" class="form-control" id="kapasitas" name="kapasitas" min="1"
                value="{{ $kelas->kapasitas }}" required>
            </div>

            <!-- Date Open -->
            <div class="form-group">
              <label for="date_open">Tanggal Buka Pendaftaran</label>
              <input type="date" class="form-control" id="date_open" name="date_open"
                value="{{ $kelas->date_open }}" required>
            </div>

            <!-- Date Close -->
            <div class="form-group">
              <label for="date_close">Tanggal Tutup Pendaftaran</label>
              <input type="date" class="form-control" id="date_close" name="date_close"
                value="{{ $kelas->date_close }}" required>
            </div>

            <!-- Time Close -->
            <div class="form-group">
              <label for="time_close">Waktu Tutup Pendaftaran</label>
              <input type="time" class="form-control" id="time_close" name="time_close" step="1"
                value="{{ $kelas->time_close }}" required>
              <!-- step="1" supaya bisa input detik juga -->
            </div>
            <button type="reset">Reset</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>

    <!-- jQuery (wajib) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper.js (wajib untuk tooltip, dropdown, dan modal) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>
