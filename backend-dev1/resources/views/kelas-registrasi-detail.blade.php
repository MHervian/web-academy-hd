<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Detail Pendaftaran Kelas - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Font -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css"> -->
  <!-- Broken Link -->
  <!-- Themify Icons -->
  <link rel="stylesheet" href="/css/themify-icons.css" />

  <!-- Admin CSS -->
  <link rel="stylesheet" href="/css/admin.css" />
  <style>
    a.btn-detail {
      background: #1e3a5f;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
    }

    a.btn-detail:hover {
      text-decoration: none;
      background: #16324a;
    }
  </style>
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
            <td>Pengajar</td>
            <td>:</td>
            <td>{{ $kelas->pengajar }}</td>
          </tr>
          {{-- <tr>
            <td>Level</td>
            <td>:</td>
            <td>Intermediate</td>
          </tr> --}}
          {{-- <tr>
            <td>Status</td>
            <td>:</td>
            <td>Open Registration</td>
          </tr> --}}
          <tr>
            <td>Jumlah Pendaftar</td>
            <td>:</td>
            <td>{{ count($registrasi) }}</td>
          </tr>
          <tr>
            <td>Sisa</td>
            <td>:</td>
            <td>{{ $kelas->kapasitas }}</td>
          </tr>
          <tr>
            <td>Tanggal Buka Registrasi</td>
            <td>:</td>
            <td>{{ $kelas->date_open }}</td>
          </tr>
          <tr>
            <td>Tanggal Tutup Registrasi</td>
            <td>:</td>
            <td>{{ $kelas->date_close }}</td>
          </tr>
          {{-- <tr>
            <td>Kurikulum</td>
            <td>:</td>
            <td><a href="../data-dummy/course_curriculum.pdf">Link File</a></td>
          </tr> --}}
        </table>
        <div class="my-5"></div>
        <h2>Pendaftar Kelas <a
            href="{{ route('seed-peserta-registrasi', [
                'kelasId' => $kelas->kelasId,
                'kapasitas' => $kelas->kapasitas,
                'open' => $kelas->date_open,
                'close' => $kelas->date_close,
            ]) }}"
            class="ml-3" style="font-size: 19px;">Generate</a>
        </h2>
        <p>Data member yang mendaftar kelas ini.</p>
        @if (count($registrasi) > 0)
          <table>
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Peserta</th>
                <th>Email</th>
                <th>Tanggal Daftar</th>
                <th>Waktu Daftar</th>
                <th>Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($registrasi as $member)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $member->username }}</td>
                  <td>{{ $member->email }}</td>
                  <td>{{ $member->date_registration }}</td>
                  <td>{{ $member->time_registration }}</td>
                  <td>
                    @if ($member->isApprove != null)
                      {{-- If approved.. --}}
                      @if ($member->isApprove == '1')
                        <span style='color: green;'>Approved</span>
                      @else
                        {{-- If rejected.. --}}
                        <span style='color: red;'>Rejected</span>
                      @endif
                    @else
                      <form action="{{ route('approve-pendaftar-kelas') }}" method="post">
                        @csrf
                        <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
                        <input type="hidden" name="memberId[]" value="{{ $member->memberId }}" />
                        {{-- <input type="hidden" name="index" value="{{ $loop->iteration - 1 }}" /> --}}
                        <button type="submit" name="btnApprove" value="1" class="btn btn-success"
                          style="cursor: pointer;">Approve</button>
                        <button type="submit" name="btnReject" value="0" class="btn btn-danger"
                          style="cursor: pointer">Reject</button>
                      </form>
                    @endif
                  </td>
                  {{-- <td>
                    <button class="bttn-detail">Approve</button>
                    <button class="bttn-danger">Cancel</button>
                  </td> --}}
                  <td>
                    <a href="{{ route('member-detail', ['id' => $member->memberId]) }}" class="btn-detail">Detail</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="my-3">
            <form action="{{ route('start-kelas') }}" method="post">
              @csrf
              <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
              <input type="hidden" name="namaKelas" value="{{ $kelas->nama_kelas }}" />
              <button type="submit" name="btnMulaiKelas" value="1" class="btn btn-primary"
                style="cursor: pointer;">Mulai Kelas</button>
            </form>
          </div>
        @else
          <p class="text-center">Data Pendaftar Kelas Kosong.</p>
        @endif
      </div>
    </div>
  </div>

  <!-- Konfirmasi modal -->
  <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Konfirmasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda ingin <span id="actionType"></span> peserta ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn bttn-color-default" id="confirmBtn">Ya</button>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (wajib) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Popper.js (wajib untuk tooltip, dropdown, dan modal) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script>
    // console.log("jQuery:", $.fn.jquery);
    // console.log("Bootstrap modal plugin:", typeof $.fn.modal);
    $(document).ready(function() {
      let currentRow;
      let action = "";

      // klik approve/cancel
      $(".bttn-detail, .bttn-danger").on("click", function() {
        currentRow = $(this).closest("tr"); // ambil row yang diklik
        if ($(this).hasClass("bttn-detail")) {
          action = "approve";
          $("#actionType").text("approve");
        } else {
          action = "cancel";
          $("#actionType").text("cancel");
        }
        $("#confirmModal").modal("show");
      });

      // tombol konfirmasi
      $("#confirmBtn").on("click", function() {
        if (action === "approve") {
          // currentRow.find("td:nth-child(5)").text("Approved");
          currentRow.find("td:nth-child(6)").html("<span style='color: blue;'>Approved</span>");
        } else if (action === "cancel") {
          currentRow.find("td:nth-child(6)").html("<span style='color: red;'>Canceled</span>");
        }
        $("#confirmModal").modal("hide");
      });
    });
  </script>
</body>

</html>
