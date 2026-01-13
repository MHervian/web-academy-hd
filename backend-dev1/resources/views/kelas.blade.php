<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Kelas - DreamPanel</title>

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
          {{-- <h2>Kelas <a href="{{ route('seed-kelas') }}" class="ml-3" style="font-size: 19px;">Generate</a></h2> --}}
          <h2>Kelas</h2>
          <a href="{{ route('create-kelas') }}" class="btn btn-info">Buat Kelas</a>
        </div>
        <p>Data kelas kursus/program Akademi Hangul Dream</p>
        @if (count($kelas) > 0)
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kursus/Program</th>
                <th>Kapasitas Kelas</th>
                <th>Terisi</th>
                <th>Kelas Mulai?</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kelas as $k)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $k->nama_kelas }} </td>
                  <td>{{ $k->nama_program }} </td>
                  <td>{{ $k->kapasitas }}</td>
                  <td>{{ $k->terisi }}</td>
                  <td>
                    @if ($k->isKelasStart == '1')
                      <span
                        style="display: inline-block; padding: 0.2rem 1.2rem; text-align: center; color: white; background-color: green;">Mulai</span>
                    @else
                      <span
                        style="display: inline-block; padding: 0.2rem 1.2rem; text-align: center; color: black; background-color: lightgray;">Belum</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('kelas-detail', ['kelasId' => $k->kelasId]) }}" class="bttn-detail">Detail</a>
                    <a href="{{ route('edit-kelas', ['kelasId' => $k->kelasId]) }}" class="btn btn-info"
                      style="padding: 0.25rem 0.5rem; font-size: 0.9rem;">Ubah</a>
                    <form action="{{ route('delete-kelas') }}" method="post" class="d-inline">
                      @csrf
                      <input type="hidden" name="kelasId" value="{{ $k->kelasId }}" />
                      <button type="submit" class="btn btn-danger"
                        style="font-size: 13px; cursor: pointer;">Hapus</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Data Kelas Kosong</p>
        @endif
      </div>
    </div>
  </div>
</body>

</html>
