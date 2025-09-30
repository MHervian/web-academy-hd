<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Detail Kelas - DreamPanel</title>

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
        <h2>Detail Kelas : <span style="color: gray;">Kelas 1</span></h2>
        <table class="mb-5">
          <tr>
            <td>Pengajar</td>
            <td>:</td>
            <td>Jane Doe</td>
          </tr>
          <tr>
            <td>Level</td>
            <td>:</td>
            <td>Intermediate</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td>Ongoing</td>
          </tr>
          <tr>
            <td>Jumlah Peserta</td>
            <td>:</td>
            <td>12</td>
          </tr>
          <tr>
            <td>Tanggal Mulai</td>
            <td>:</td>
            <td>02-07-2025</td>
          </tr>
          <tr>
            <td>Tanggal Akhir</td>
            <td>:</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Kurikulum</td>
            <td>:</td>
            <td><a href="../data-dummy/course_curriculum.pdf">Link File</a></td>
          </tr>
        </table>
        <h2>Data Peserta</h2>
        <table>
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Peserta</th>
              <th>Email</th>
              <th>Kontak</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>081234567890</td>
              <td>Aktif</td>
              <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
