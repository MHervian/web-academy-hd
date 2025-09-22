<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Membership - DreamPanel</title>

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
        <h2>Membership Students</h2>
        @if (count($members) > 0)
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Tanggal Daftar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($members as $member)
                <tr>
                  <td>1</td>
                  <td>{{ $member->username }}</td>
                  <td>{{ $member->email }}</td>
                  <td>{{ $member->date_registration }}</td>
                  <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Data Member Kosong.</p>
        @endif
      </div>
    </div>
  </div>
</body>

</html>
