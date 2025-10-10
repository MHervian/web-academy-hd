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
        {{-- <h2>Detail Kelas : <span style="color: gray;">Kelas 1</span></h2> --}}
        <h2>Detail Kelas</h2>
        <table class="w-50">
          <tr>
            <td style="width: 200px;">Kelas</td>
            <td style="width: 25px;">:</td>
            <td>{{ $kelas->nama_kelas }}</td>
          </tr>
          <tr>
            <td>Program/Course</td>
            <td>:</td>
            <td>{{ $kelas->nama_program }}</td>
          </tr>
          <tr>
            <td>Kapasitas Kelas</td>
            <td>:</td>
            <td>{{ $kelas->kapasitas }}</td>
          </tr>
          <tr>
            <td>Pengajar</td>
            <td>:</td>
            <td>{{ $kelas->pengajar }}</td>
          </tr>
        </table>
        <div class="my-5"></div>
        <h2>Peserta Kelas</h2>
        <p>Data peserta yang mengikuti kelas.</p>
        @if (count($peserta) > 0)
          <table>
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Peserta</th>
                <th>Email</th>
                <th>Status Lulus</th>
                <th>Tanggal Lulus</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($peserta as $p)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $p->username }}</td>
                  <td>{{ $p->email }}</td>
                  <td>{{ $p->isPass }}</td>
                  <td>{{ $p->date_pass }}</td>
                  <td><a href="{{ route('coming-soon') }}" class="bttn-detail">Detail</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Kelas belum dimulai.</p>
        @endif
      </div>
    </div>
  </div>
</body>

</html>
