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
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css"> -->
  <!-- Broken Link -->
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
        <h2>Detail Kelas : <span style="color: gray;">English Novice</span></h2>
        <table class="mb-5">
          <tr>
            <td>Pengajar</td>
            <td>:</td>
            <td>Jane Doe</td>
          </tr>
          <tr>
            <td>Level</td>
            <td>:</td>
            <td>Intermediate</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td>Open Registration</td>
          </tr>
          <tr>
            <td>Jumlah Pendaftar</td>
            <td>:</td>
            <td>12</td>
          </tr>
          <tr>
            <td>Sisa Kursi</td>
            <td>:</td>
            <td>18</td>
          </tr>
          <tr>
            <td>Tanggal Pembukaan</td>
            <td>:</td>
            <td>02-07-2025</td>
          </tr>
          <tr>
            <td>Tanggal Penutupan</td>
            <td>:</td>
            <td>12-07-2025</td>
          </tr>
          <tr>
            <td>Kurikulum</td>
            <td>:</td>
            <td><a href="../data-dummy/course_curriculum.pdf">Link File</a></td>
          </tr>
        </table>
        <h2>Data Pendaftar Kelas</h2>
        <table>
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Peserta</th>
              <th>Email</th>
              <th>Kontak</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>081234567890</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>081234567891</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Michael Lee</td>
              <td>michael@example.com</td>
              <td>081234567892</td>
              <td>Nonaktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Amanda White</td>
              <td>amanda@example.com</td>
              <td>081234567893</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>David Brown</td>
              <td>david@example.com</td>
              <td>081234567894</td>
              <td>Nonaktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Emily Green</td>
              <td>emily@example.com</td>
              <td>081234567895</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Chris Johnson</td>
              <td>chris@example.com</td>
              <td>081234567896</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Susan Miller</td>
              <td>susan@example.com</td>
              <td>081234567897</td>
              <td>Nonaktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Robert Wilson</td>
              <td>robert@example.com</td>
              <td>081234567898</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Linda Martinez</td>
              <td>linda@example.com</td>
              <td>081234567899</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>Paul Anderson</td>
              <td>paul@example.com</td>
              <td>081234567900</td>
              <td>Nonaktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Sarah Taylor</td>
              <td>sarah@example.com</td>
              <td>081234567901</td>
              <td>Aktif</td>
              <td><button class="bttn-detail">Approve</button> <button class="bttn-danger">Cancel</button>
              </td>
            </tr>
          </tbody>
        </table>
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
    console.log("jQuery:", $.fn.jquery);
    console.log("Bootstrap modal plugin:", typeof $.fn.modal);
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
