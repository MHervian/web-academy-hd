<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Program - DreamPanel</title>

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
          <h2>Program <a href="{{ route('seed-program') }}" class="ml-3" style="font-size: 19px;">Generate</a>
          </h2>
          <a href="{{ route('create-program') }}" class="btn btn-info">Buat Program</a>
        </div>
        <p>Data Program/Course akademi HangulDream.</p>
        @if (count($programs) > 0)
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Program/Course</th>
                <th>Status Program</th>
                <th>Total Kelas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($programs as $program)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $program->nama }}</td>
                  <td>
                    @if ($program->isOpen == '1')
                      <span
                        style="display: inline-block; padding: 0.2rem 1.2rem; text-align: center; color: white; background-color: green;">Open</span>
                    @else
                      <span
                        style="display: inline-block; padding: 0.2rem 1.2rem; text-align: center; color: black; background-color: lightgray;">Close</span>
                    @endif
                  </td>
                  <td>{{ $program->total_kelas }}</td>
                  <td>
                    <a href="{{ route('program-detail', ['programId' => $program->programId]) }}"
                      class="bttn-detail">Detail</a>
                    <form action="{{ route('delete-program') }}" method="post" class="d-inline">
                      @csrf
                      <input type="hidden" name="programId" value="{{ $program->programId }}" />
                      <button type="submit" class="btn btn-danger"
                        style="font-size: 13px; cursor: pointer;">Hapus</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Data Program Kosong.</p>
        @endif
      </div>
    </div>
  </div>

  <!-- jQuery and Bootstrap -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
