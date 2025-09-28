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
        @if (session('success'))
          <!-- alert success -->
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>&#10004; Berhasil!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('error'))
          <!-- alert danger -->
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>&#9746; Gagal!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

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
            <td>
              @if ($kurikulum->isApprove == '3')
                <span class="text-success font-weight-bold">Approved</span>
              @elseif ($kurikulum->isApprove == '2')
                <span class="text-danger font-weight-bold">Rejected</span>
              @elseif ($kurikulum->isApprove == '1')
                <span class="text-primary font-weight-bold">On Review</span>
              @else
                <span class="font-weight-bold">Pending</span>
              @endif
            </td>
          </tr>
          <tr>
            <td>Tanggal Approval</td>
            <td>:</td>
            <td>{{ $kurikulum->date_approve }}</td>
          </tr>
          <tr>
            <td>File</td>
            <td>:</td>
            <td><a href="/data-dummy/course_curriculum.pdf">Link File</a></td>
          </tr>
        </table>
        <div class="my-5"></div>

        <h2>Backlog <a
            href="{{ route('seed-backlog-kurikulum', ['kurikulumId' => $kurikulum->kurikulumId, 'status' => $kurikulum->isApprove]) }}"
            class="ml-3" style="font-size: 19px;">Generate</a></h2>
        <p>Informasi komentar tentang kurikulum ini</p>
        @if (count($backlogs) > 0)
          <table class="w-75">
            <tr>
              <th>No</th>
              <th>Deskripsi</th>
              <th>Tanggal Backlog</th>
            </tr>
            @foreach ($backlogs as $backlog)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $backlog->deskripsi }}</td>
                <td>{{ $backlog->date_backlog }}</td>
              </tr>
            @endforeach
          </table>
        @else
          <p class="text-center">Backlog kosong.</p>
        @endif
      </div>
    </div>
  </div>
  <!-- jQuery (wajib) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Popper.js (wajib untuk tooltip, dropdown, dan modal) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>
