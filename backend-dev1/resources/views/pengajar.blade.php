<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Pengajar - DreamPanel</title>

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

  <!-- Admin CSS -->
  <link rel="stylesheet" href="/css/admin.css" />
</head>

<body>
  <div class="layout">
    <div class="sidebar">
      @include('navigation.navigation')
    </div>

    <div class="main">
      <div class="header">
        <div class="logo"><a href="{{ route('admin-dashboard') }}">DreamPanel</a></div>
        <ul class="menu">
          <li><a href="{{ route('coming-soon') }}">Inbox</a></li>
          <li><a href="{{ route('coming-soon') }}">Settings</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </div>
      <div class="content">

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

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pengajar <a href="{{ route('seed-pengajar') }}" class="ml-3" style="font-size: 19px;">Generate</a></h2>
          <a href="{{ route('user') }}" class="btn btn-info">Add</a>
        </div>
        <p>Data pengajar kelas program/kursus</p>
        @if (count($pengajar) > 0)
          <table class="w-75">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pengajar</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pengajar as $p)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $p->nama_pengajar }}</td>
                  <td>
                    @if ($p->isActive == '1')
                      <span class="text-primary font-weight-bold">Aktif</span>
                    @else
                      <span class="text-alert font-weight-bold">Tidak Aktif</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('pengajar-detail', ['userId' => $p->userId]) }}" class="bttn-detail">Detail</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Data Pengajar Kosong</p>
        @endif
      </div>
    </div>
  </div>

  <!-- jQuery-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>
