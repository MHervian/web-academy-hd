<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Kurikulum - DreamPanel</title>

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

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kurikulum <a href="{{ route('seed-kurikulum') }}" class="ml-3" style="font-size: 19px;">Generate</a>
          </h2>
          <a href="{{ route('upload-kurikulum') }}" class="btn btn-info">Unggah Kurikulum</a>
        </div>
        <p>Informasi List Kurikulum dan Statusnya [<span class="font-weight-bold">Pending</span>,
          <span class="text-primary font-weight-bold">On Review</span>, <span
            class="text-success font-weight-bold">Approved</span>,
          <span class="text-danger font-weight-bold">Rejected</span>]
        </p>
        @if (count($kurikulums) > 0)
          <table>
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Kurikulum</th>
                <th>Status Approval</th>
                <th>Tanggal Approval</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kurikulums as $kurikulum)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $kurikulum->nama }}</td>
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
                  <td>{{ $kurikulum->date_approve }}</td>
                  <td><a href="{{ route('kurikulum-detail', ['idKurikulum' => $kurikulum->kurikulumId]) }}"
                      class="bttn-detail">Detail</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p class="text-center">Data Kurikulum Kosong.</p>
        @endif
      </div>
    </div>
  </div>

  <!-- jQuery and Bootstrap -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
