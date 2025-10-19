<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Sertifikat Detail - DreamPanel</title>

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
        <h2>Detail Sertifikat : <span style="color: gray;">{{ $sertifikat[0]->noSertifikat }}</span></h2>
        <table class="w-75">
          <tr>
            <td>Tanggal Terbit</td>
            <td>:</td>
            <td>{{ $sertifikat[0]->date_issued }}</td>
          </tr>
          <tr>
            <td>Kepada Peserta</td>
            <td>:</td>
            <td>{{ $member[0]->username }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $member[0]->email }}</td>
          </tr>
          <tr>
            <td>File Sertifikat</td>
            <td>:</td>
            <td>
              <a href="{{ route('view-sertifikat', ['filename' => $sertifikat[0]->filename]) }}">File Link</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
