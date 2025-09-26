<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Member Detail - DreamPanel</title>

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
        <h2>Detail Member : <span style="color: gray;">{{ $member->username }}</span></h2>
        <table class="w-75">
          <tr>
            <td>Member ID</td>
            <td>:</td>
            <td>{{ $member->memberId }}</td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td>{{ $member->username }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $member->email }}</td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td>********</td>
          </tr>
          <tr>
            <td>Tanggal Daftar</td>
            <td>:</td>
            <td>{{ $member->date_registration }}</td>
          </tr>
          <tr>
            <td>Tanggal Kreasi Data</td>
            <td>:</td>
            <td>{{ $member->date_created }}</td>
          </tr>
        </table>

        <div class="my-5"></div>

        <!-- Kelas section -->
        <h2>Kelas</h2>
        <p>Data kelas yang diikuti member.</p>
        <p class="text-center">Member Belum Ikut Kelas.</p>

        <!-- /end Kelas section -->
        <div class="my-5"></div>

        <!-- Sertifikat section -->
        <h2>Data Sertifikat</h2>
        <p>Data Sertifikat yang dimiliki member.</p>
        @if (count($sertifikats) > 0)
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nomor Sertifikat</th>
                <th>Tanggal Diisukan</th>
                <th>Filename</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($sertifikats as $sertifikat)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $sertifikat->noSertifikat }}</td>
                  <td>{{ $sertifikat->date_issued }}</td>
                  <td>{{ $sertifikat->filename }}</td>
                  <td>
                    <a href="#" class="bttn-detail">Link File</a>
                    <a href="#" class="btn btn-danger" style="font-size: 13px; cursor: pointer;">Hapus</a>
                    {{-- <form action="#" method="post" class="d-inline">
                      @csrf
                      <input type="hidden" name="memberId" value="{{ $member->memberId }}" />
                      <button type="submit" class="btn btn-danger"
                        style="font-size: 13px; cursor: pointer;">Hapus</button>
                    </form> --}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Member Tidak Punya Sertifikat.</p>
        @endif
        <!-- /end Sertifikat section -->
      </div>
    </div>
  </div>
</body>

</html>
