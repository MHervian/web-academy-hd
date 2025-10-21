<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Detail Pengajar - DreamPanel</title>

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
        <h2>Detail Pengajar</h2>
        <table class="w-75">
          <tr>
            <td>Nama Pengajar</td>
            <td>:</td>
            <td>{{ $pengajar[0]->nama_pengajar }}</td>
          </tr>
          <tr>
            <td>Tanggal Registrasi</td>
            <td>:</td>
            <td>{{ $pengajar[0]->date_registration }}</td>
          </tr>
          <tr>
            <td>Tanggal Penerimaan</td>
            <td>:</td>
            <td>{{ $pengajar[0]->date_approval }}</td>
          </tr>
          <tr>
            <td>Status Penerimaan</td>
            <td>:</td>
            <td>
              @if ($pengajar[0]->isApprove == '1')
                <span class="text-primary font-weight-bold">Diterima</span>
              @else
                <span class="text-danger font-weight-bold">Ditolak</span>
              @endif
            </td>
          </tr>
          <tr>
            <td>Status Pengajar</td>
            <td>:</td>
            <td>
              @if ($pengajar[0]->isActive == '1')
                <span class="text-primary font-weight-bold">Aktif</span>
              @else
                <span class="text-alert font-weight-bold">Tidak Aktif</span>
              @endif
            </td>
          </tr>
        </table>
        <div class="my-4"></div>
        <div>
          <button type="button" class="btn btn-danger">Nonaktifkan Pengajar</button>
        </div>

        <div class="my-5"></div>

        <!-- Kelas section -->
        <h2>Kelas <a href="{{ route('coming-soon') }}" class="ml-3" style="font-size: 19px;">Generate</a></h2>
        <p>Data kelas yang diisi pengajar ini.</p>
        @if (count($kelas) > 0)
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Nama Program</th>
                <th>Status Kelas</th>
                <th>Kapasitas Kelas</th>
                <th>Kelulusan (%)</th>
              </tr>
            </thead>
            {{-- <tbody>
              @foreach ($sertifikats as $sertifikat)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $sertifikat->noSertifikat }}</td>
                  <td>{{ $sertifikat->date_issued }}</td>
                  <td>{{ $sertifikat->filename }}</td>
                  <td>
                    <a href="#" class="bttn-detail">Link File</a>
                    <a href="#" class="btn btn-danger" style="font-size: 13px; cursor: pointer;">Hapus</a>
                    <form action="#" method="post" class="d-inline">
                      @csrf
                      <input type="hidden" name="memberId" value="{{ $member->memberId }}" />
                      <button type="submit" class="btn btn-danger"
                        style="font-size: 13px; cursor: pointer;">Hapus</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody> --}}
          </table>
        @else
          <p class="text-center">Pengajar belum punya kelas.</p>
        @endif
      </div>
    </div>
  </div>
</body>

</html>
