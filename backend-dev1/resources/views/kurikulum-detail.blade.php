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

        {{-- <h2>Detail Kurikulum : <span style="color: gray;">{{ $kurikulum->nama }}</span></h2> --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2>Detail Kurikulum</h2>
          <div>
            @if ($kurikulum->isApprove == '0' || $kurikulum->isApprove == '1')
              <a href="{{ route('edit-kurikulum', ['kurikulumId' => $kurikulum->kurikulumId]) }}"
                class="btn btn-secondary">Ubah</a>
              <a href="{{ route('upload-file-kurikulum', ['kurikulumId' => $kurikulum->kurikulumId]) }}"
                class="btn btn-info">Upload File</a>
            @else
              <button type="button" class="btn btn-secondary" style="opacity: 0.35; cursor: not-allowed;">Ubah</button>
              <button type="button" class="btn btn-info" style="opacity: 0.35; cursor: not-allowed;">Upload
                File</button>
            @endif
            <form action="{{ route('delete-kurikulum') }}" method="post" class="d-inline">
              @csrf
              @method('DELETE')
              <input type="hidden" name="kurikulumId" value="{{ $kurikulum->kurikulumId }}" />
              <input type="hidden" name="nama" value="{{ $kurikulum->nama }}" />
              <button type="submit" class="btn btn-danger" style="cursor: pointer;"
                onclick="confirm('Hapus kurikulum ini?')">Hapus</button>
            </form>
          </div>
        </div>
        <table class="w-75">
          <tr>
            <td style="width: 100px;">Judul Kurikulum</td>
            <td style="width: 50px;">:</td>
            <td>{{ $kurikulum->nama }}</td>
          </tr>
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
            <td>Tanggal Approval/Reject</td>
            <td>:</td>
            <td>{{ $kurikulum->date_approve }}</td>
          </tr>
          <tr>
            <td>Penanggungjawab</td>
            <td>:</td>
            <td>{{ $user[0]->username }}</td>
          </tr>
          <tr>
            <td>File</td>
            <td>:</td>
            <td>
              @if (count($kurikulumFiles) > 0)
                <ol class="m-0 pl-3">
                  @foreach ($kurikulumFiles as $kurikulumFile)
                    <li>
                      <a href="{{ route('view-kurikulum', ['filename' => $kurikulumFile->filename]) }}">
                        {{ $kurikulumFile->filename }} ({{ $kurikulumFile->date_upload }})
                      </a>
                    </li>
                  @endforeach
                </ol>
              @else
                <p class="my-0">Data file kurikulum kosong.</p>
              @endif
            </td>
          </tr>
        </table>
        @if ($kurikulum->isApprove == '1')
          <div class="my-4"></div>
          <form action="{{ route('approve-kurikulum') }}" method="post">
            @csrf
            <input type="hidden" name="kurikulumId" value="{{ $kurikulum->kurikulumId }}" />
            <button type="submit" name="btnReject" value="0" class="btn btn-danger"
              style="cursor: pointer;">Reject</button>
            <button type="submit" name="btnApprove" value="1" class="btn btn-success"
              style="cursor: pointer;">Approve</button>
          </form>
        @endif
        <div class="my-5"></div>

        <div class="d-flex justify-content-between align-items-center">
          <h2>Komentar
            @if ($kurikulum->isApprove == '0' || $kurikulum->isApprove == '1')
              <a href="{{ route('seed-backlog-kurikulum', ['kurikulumId' => $kurikulum->kurikulumId, 'status' => $kurikulum->isApprove]) }}"
                class="ml-3" style="font-size: 19px;">Generate</a>
            @endif
          </h2>

          @if ($kurikulum->isApprove == '0' || $kurikulum->isApprove == '1')
            <a href="{{ route('input-feedback-kurikulum', ['idKurikulum' => $kurikulum->kurikulumId]) }}"
              class="btn btn-info">Tambah Komentar</a>
          @else
            <button type="button" class="btn btn-info" style="opacity: 0.35; cursor: not-allowed;">Tambah
              Komentar</button>
          @endif

        </div>
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
          <p class="text-center">Komentar kosong.</p>
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
