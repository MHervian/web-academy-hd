<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Detail Pendaftaran Kelas - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  {{-- <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" /> --}}
  <!-- Font Awesome 7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      font-family: 'Rubik', Arial, Helvetica, sans-serif;
    }

    .navigasi {
      font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
    }
  </style>
</head>

<body>
  <main class="flex min-h-screen">
    @include('navigation.navigation')

    <div class="flex-1 flex flex-col">
      @include('layouts.header')

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">Detail Pendaftaran Kelas</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('kelas-registrasi') }}" class="text-blue-700 hover:opacity-60 transition">Pendaftaran
            Kelas</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">Detail Pendaftaran Kelas</a>
        </span>
        <p class="text-gray-700">Informasi Detail Pendaftaran Kelas.</p>
        <!--/ Title and breadcrumbs  -->

        @if (session('success'))
          <!-- alert success -->
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-green-50 border border-green-300 mt-2.5 px-5 py-2 text-green-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">✅</span>
              <span>
                <strong class="font-semibold">Berhasil!</strong> {{ session('success') }}
              </span>
            </div>
            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-green-600 hover:bg-green-200 hover:text-green-900 transition cursor-pointer">
              ✕
            </button>
          </div>
        @endif

        @if (session('error'))
          <!-- alert danger -->
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-red-50 border border-red-300 mt-2.5 px-5 py-2 text-red-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">❌</span>
              <span>
                <strong class="font-semibold">Gagal!</strong> {{ session('error') }}
              </span>
            </div>

            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-red-600 hover:bg-red-200 hover:text-red-900 transition cursor-pointer">
              ✕
            </button>
          </div>
        @endif

        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-4">
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td style="width: 200px;">Kelas</td>
                  <td style="width: 25px;">:</td>
                  <td>{{ $kelas->nama_kelas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td>Kursus/Program</td>
                  <td>:</td>
                  <td>{{ $kelas->nama_program }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
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
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">Jumlah Pendaftar</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ count($registrasi) }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Terisi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->kapasitas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Tanggal Buka Registrasi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_open }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Tanggal Tutup Registrasi</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_close }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">Kelas Mulai?</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">
                    @if ($kelas->isKelasStart == '1')
                      <span class="bg-green-600 py-1 px-3 text-white rounded-lg">Mulai</span>
                    @else
                      <span class="bg-gray-400 py-1 px-3 text-white rounded-lg">Belum</span>
                    @endif
                  </td>
                </tr>
              </tbody>
              {{-- <tr>
                <td>Kurikulum</td>
                <td>:</td>
                <td><a href="../data-dummy/course_curriculum.pdf">Link File</a></td>
              </tr> --}}
            </table>
          </div>
        </div>

        <div class="my-5"></div>
        {{-- <h2>Pendaftar Kelas
          @if (count($registrasi) == 0)
            <a href="{{ route('seed-peserta-registrasi', [
                'kelasId' => $kelas->kelasId,
                'kapasitas' => $kelas->kapasitas,
                'open' => $kelas->date_open,
                'close' => $kelas->date_close,
            ]) }}"
              class="ml-3" style="font-size: 19px;">Generate</a>
          @endif
        </h2> --}}

        <div class="grid grid-cols-1 gap-4">
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <h2 class="text-2xl font-medium">Pendaftar Kelas</h2>
            <p>Data member yang mendaftar kelas ini.</p>
            <div class="py-2"></div>

            @if (count($registrasi) > 0)
              <table class="w-full border-collapse">
                <thead>
                  <tr class="bg-gray-200">
                    <th class="py-2 font-medium">No.</th>
                    <th class="py-2 font-medium">Nama Peserta</th>
                    <th class="py-2 font-medium">Email</th>
                    <th class="py-2 font-medium">Tanggal Daftar</th>
                    <th class="py-2 font-medium">Waktu Daftar</th>
                    <th class="py-2 font-medium">Terima?</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($registrasi as $member)
                    <tr class="border-b border-b-gray-200">
                      <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">
                        {{ $loop->iteration }}</td>
                      <td class="py-2 px-2 text-[0.9rem]">{{ $member->username }}</td>
                      <td class="py-2 px-2 text-[0.9rem]">{{ $member->email }}</td>
                      <td class="py-2 px-2 text-[0.9rem] text-center">{{ $member->date_registration }}</td>
                      <td class="py-2 px-2 text-[0.9rem] text-center">{{ $member->time_registration }}</td>
                      <td class="py-2 px-2 text-[0.9rem]">
                        @if ($member->isApproved != null)
                          {{-- If approved.. --}}
                          @if ($member->isApproved == '1')
                            <span class="block text-center text-green-700 font-semibold">Approved</span>
                          @else
                            {{-- If rejected.. --}}
                            <span class="block text-center text-red-700 font-semibold">Rejected</span>
                          @endif
                        @else
                          <form action="{{ route('approve-pendaftar-kelas') }}" method="post">
                            @csrf
                            <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
                            <input type="hidden" name="memberId[]" value="{{ $member->memberId }}" />
                            {{-- <input type="hidden" name="index" value="{{ $loop->iteration - 1 }}" /> --}}
                            {{-- <button type="submit" name="btnApprove" value="1" class="btn btn-success"
                              style="cursor: pointer;">Approve</button>
                            <button type="submit" name="btnReject" value="0" class="btn btn-danger"
                              style="cursor: pointer">Reject</button> --}}

                            <div class="flex justify-center gap-2">
                              <button type="submit" name="btnApprove" value="1"
                                class="py-1.5 px-4 text-center bg-green-700 text-white rounded-lg cursor-pointer 
                        hover:opacity-90 transition">Terima</button>
                              <button type="submit" name="btnReject" value="0"
                                class="py-1.5 px-4 text-center bg-red-700 text-white rounded-lg cursor-pointer 
                        hover:opacity-90 transition">Tolak</button>
                            </div>
                          </form>
                        @endif
                      </td>
                      {{-- <td>
                        <button class="bttn-detail">Approve</button>
                        <button class="bttn-danger">Cancel</button>
                      </td> --}}
                      {{-- <td>
                        <a href="{{ route('member-detail', ['id' => $member->memberId]) }}" class="btn-detail">Detail</a>
                      </td> --}}
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="my-3">
                <form action="{{ route('start-kelas') }}" method="post">
                  @csrf
                  <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
                  <input type="hidden" name="namaKelas" value="{{ $kelas->nama_kelas }}" />
                  {{-- <button type="submit" name="btnMulaiKelas" value="1" class="btn btn-primary"
                    style="cursor: pointer;">Mulai Kelas</button> --}}

                  <button type="submit" name="btnMulaiKelas" value="1"
                    class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer 
                    hover:opacity-90 transition">
                    Mulai Kelas
                  </button>
                </form>
              </div>
            @else
              <p class="text-center font-bold">Data Pendaftar Kelas Kosong.</p>
            @endif
          </div>
        </div>
      </div>

      @include('layouts.footer')
    </div>

    <!-- Konfirmasi modal -->
    {{-- <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
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
    </div> --}}

  </main>

  {{-- <!-- jQuery (wajib) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Popper.js (wajib untuk tooltip, dropdown, dan modal) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script>
    // console.log("jQuery:", $.fn.jquery);
    // console.log("Bootstrap modal plugin:", typeof $.fn.modal);
    $(document).ready(function() {
      // let currentRow;
      // let action = "";

      // // klik approve/cancel
      // $(".bttn-detail, .bttn-danger").on("click", function() {
      //   currentRow = $(this).closest("tr"); // ambil row yang diklik
      //   if ($(this).hasClass("bttn-detail")) {
      //     action = "approve";
      //     $("#actionType").text("approve");
      //   } else {
      //     action = "cancel";
      //     $("#actionType").text("cancel");
      //   }
      //   $("#confirmModal").modal("show");
      // });

      // // tombol konfirmasi
      // $("#confirmBtn").on("click", function() {
      //   if (action === "approve") {
      //     // currentRow.find("td:nth-child(5)").text("Approved");
      //     currentRow.find("td:nth-child(6)").html("<span style='color: blue;'>Approved</span>");
      //   } else if (action === "cancel") {
      //     currentRow.find("td:nth-child(6)").html("<span style='color: red;'>Canceled</span>");
      //   }
      //   $("#confirmModal").modal("hide");
      // });
    });
  </script> --}}

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
