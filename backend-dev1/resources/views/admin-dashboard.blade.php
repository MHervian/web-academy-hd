<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Admin Dashboard - DreamPanel</title>

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
      <h2>Admin Menu</h2>
      <div class="nav">
        <ul>
          <li><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
          <li><a href="{{ route('member') }}">Member</a></li>
          <li><a href="{{ route('kurikulum') }}">Kurikulum</a></li>
          <li><a href="{{ route('coming-soon') }}">Program</a></li>
          <li><a href="{{ route('kelas') }}">Kelas</a></li>
          <li><a href="{{ route('kelas-create') }}">Create Kelas</a></li>
          <li><a href="{{ route('kelas-registrasi') }}">Pendaftar Kelas</a></li>
          <li><a href="{{ route('upload-sertifikat') }}">Upload Sertifikat</a></li>
          <li><a href="{{ route('upload-kurikulum') }}">Upload Kurikulum</a></li>
          <li><a href="{{ route('coming-soon') }}">Notifikasi</a></li>
          <li><a href="{{ route('user') }}">Create User</a></li>
          <!-- <li class="dropdown">
                      <a href="404.html>Students</a>
                      <ul>
                        <li><a href="404.html>Menu 1</a></li>
                        <li><a href="404.html>Menu 2</a></li>
                      </ul>
                    </li>
                  </ul> -->
                </ul>
            </div>
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
          <h2>Dashboard</h2>
          <p>This is main home of admin panel.</p>
        </div>
      </div>
    </div>
</body>

</html>
