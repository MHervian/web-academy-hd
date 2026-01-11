<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Program Detail - DreamPanel</title>

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
        <h2>Detail Kursus/Program : <span style="color: gray;">{{ $program->nama }}</span></h2>
        <div style="margin-bottom: 1rem;">
          <a href="{{ route('edit-program', ['programId' => $program->programId]) }}" class="btn btn-info">Ubah</a>
          <form action="{{ route('delete-program') }}" method="post" class="d-inline">
            @csrf
            <input type="hidden" name="programId" value="{{ $program->programId }}" />
            <button type="submit" class="btn btn-danger" style="font-size: 13px; cursor: pointer;">Hapus</button>
          </form>
          {{-- <a href="{{ route('coming-soon') }}" class="btn btn-danger">Hapus</a> --}}
        </div>
        <table class="w-75">
          <tr>
            <td>ID Kursus/Program</td>
            <td>:</td>
            <td>{{ $program->programId }}</td>
          </tr>
          <tr>
            <td>Nama Kursus/Program</td>
            <td>:</td>
            <td>{{ $program->nama }}</td>
          </tr>
          <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>{{ $program->deskripsi }}</td>
          </tr>
          <tr>
            <td>Jadwal</td>
            <td>:</td>
            <td>{{ $program->file_jadwal }}</td>
          </tr>
          <tr>
            <td>Harga Kursus/Program</td>
            <td>:</td>
            <td>Rp {{ $program->harga }}</td>
          </tr>
          <tr>
            <td>Kursus/Program Berjalan?</td>
            <td>:</td>
            <td>
              @if ($program->isOpen == '1')
                <span
                  style="display: inline-block; padding: 0.2rem 1.2rem; text-align: center; color: white; background-color: green;">Open</span>
              @else
                <span
                  style="display: inline-block; padding: 0.2rem 1.2rem; text-align: center; color: black; background-color: lightgray;">Close</span>
              @endif
            </td>
          </tr>
          {{-- <tr>
            <td>Kode Kurikulum</td>
            <td>:</td>
            <td>{{ $kurikulum[0]->kurikulumId }}</td>
          </tr>
          <tr>
            <td>Nama Kurikulum</td>
            <td>:</td>
            <td>{{ $kurikulum[0]->nama }}</td>
          </tr>
          <tr>
            <td>Deskripsi Kurikulum</td>
            <td>:</td>
            <td>{{ $kurikulum[0]->deskripsi }}</td>
          </tr> --}}
          {{-- <tr>
            <td>File Jadwal Program/Course</td>
            <td>:</td>
            <td>
              <a href="{{ route('view-program', ['filename' => $program->file_jadwal]) }}">File Link</a>
            </td>
          </tr> --}}
        </table>
      </div>
    </div>
  </div>
</body>

</html>
