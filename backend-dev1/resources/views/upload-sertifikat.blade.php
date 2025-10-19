<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Upload Sertifikat - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
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
    form input[type="file"],
    form input[type="text"],
    form input[type="date"] {
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

      <!-- Content -->
      <div class="content">
        <div class="card-form">
          <h2>Upload Sertifikat Kelulusan</h2>
          <form action="{{ route('store-sertifikat') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="member">Nama Siswa</label>
            <select id="member" name="memberId">
              <option value="">-- Pilih Siswa --</option>
              @if (count($members) > 0)
                @foreach ($members as $member)
                  <option value="{{ $member->memberId }}">{{ $member->username }}</option>
                @endforeach
              @endif
            </select>

            <label for="noSertifikat">Nomor Sertifikat</label>
            <input type="text" id="noSertifikat" name="noSertifikat" placeholder="Input no sertifikat.." />

            <label for="tanggal">Tanggal Terbit</label>
            <input type="date" id="tanggal" name="tanggal" />

            <label for="filepdf">Upload File Sertifikat (PDF)</label>
            <input type="file" id="filepdf" name="filepdf" accept="application/pdf" required>

            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit">Simpan</button>

            {{-- <button type="button" data-toggle="modal" data-target="#successUploadModal">Upload</button> --}}
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- upload success modal -->
  <div class="modal fade" id="successUploadModal" tabindex="-1" role="dialog"
    aria-labelledby="successUploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successUploadModalLabel">&#x2705; Succes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Upload Sertifikat Berhasil
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bttn-color-default" data-dismiss="modal">Done</button>
        </div>
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
