<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Kurikulum Detail - DreamPanel</title>

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
        <h2>Detail Kurikulum : <span style="color: gray;">{{ $kurikulum->nama }}</span></h2>
        <table class="w-75">
          <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>{{ $kurikulum->deskripsi }}</td>
          </tr>
          <tr>
            <td>Tanggal Pengajuan</td>
            <td>:</td>
            <td>{{ $kurikulum->date_input }}</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td>{{ $kurikulum->isApprove }}</td>
          </tr>
          <tr>
            <td>Tanggal Approval</td>
            <td>:</td>
            <td>
              @if ($kurikulum->isApprove == '1')
                <span class="text-success font-weight-bold">Approved</span>
              @elseif ($kurikulum->isApprove == '0')
                <span class="text-danger font-weight-bold">Rejected</span>
              @else
                <span class="font-weight-bold">Pending</span>
              @endif
            </td>
          </tr>
          <tr>
            <td>File</td>
            <td>:</td>
            <td><a href="/data-dummy/course_curriculum.pdf">Link File</a></td>
          </tr>
        </table>
        <div class="my-5"></div>

        <h2>Backlog</h2>
        <p>Informasi komentar tentang kurikulum ini</p>
        <p class="text-center">Backlog kosong.</p>
      </div>
    </div>
  </div>
</body>

</html>
