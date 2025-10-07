<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Kelas Registrasi - DreamPanel</title>

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
        <h2>Kelas Registrasi</h2>
        <p>Data registrasi peserta per kelas</p>
        @if (count($kelas) > 0)
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Start Registrasi</th>
                <th>End Registrasi</th>
                <th>Total Daftar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kelas as $k)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $k->nama_kelas }}</td>
                  <td>{{ $k->date_open }}</td>
                  <td>{{ $k->date_close }}</td>
                  <td>{{ $k->total_registered }}/{{ $k->kapasitas }}</td>
                  <td><a href="{{ route('kelas-registrasi-detail', ['kelasId' => $k->kelasId]) }}"
                      class="bttn-detail">Detail</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Data Kelas Registrasi Kosong</p>
        @endif
      </div>
    </div>
  </div>
</body>

</html>
