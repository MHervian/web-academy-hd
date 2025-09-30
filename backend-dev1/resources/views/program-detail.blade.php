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
        <h2>Detail Program/Course : <span style="color: gray;">{{ $program->nama }}</span></h2>
        <table class="w-75">
          <tr>
            <td>Deskripsi Program/Course</td>
            <td>:</td>
            <td>{{ $program->deskripsi }}</td>
          </tr>
          <tr>
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
          </tr>
          <tr>
            <td>File Jadwal Program/Course</td>
            <td>:</td>
            <td>
              <a href="{{ route('view-program', ['filename' => $program->file_jadwal]) }}">File Link</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
