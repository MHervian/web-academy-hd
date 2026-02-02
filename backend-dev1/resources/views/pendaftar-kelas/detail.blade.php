<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ __('pendaftar.detail_title') }} - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  {{-- <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" /> --}}
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
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">{{ __('pendaftar.detail_title') }}</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('kelas-registrasi') }}"
            class="text-blue-700 hover:opacity-60 transition">{{ __('pendaftar.breadcrumb') }}</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">{{ __('pendaftar.detail_title') }}</a>
        </span>
        <p class="text-gray-700">{{ __('pendaftar.detail_desc') }}</p>
        @if (session('success'))
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-green-50 border border-green-300 mt-2.5 px-5 py-2 text-green-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">✅</span>
              <span>
                <strong class="font-semibold">{{ __('pendaftar.success') }}</strong> {{ session('success') }}
              </span>
            </div>
            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-green-600 hover:bg-green-200 hover:text-green-900 transition cursor-pointer">
              ✕
            </button>
          </div>
        @endif

        @if (session('error'))
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-red-50 border border-red-300 mt-2.5 px-5 py-2 text-red-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">❌</span>
              <span>
                <strong class="font-semibold">{{ __('pendaftar.failed') }}</strong> {{ session('error') }}
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
                  <td style="width: 200px;">{{ __('pendaftar.label_class') }}</td>
                  <td style="width: 25px;">:</td>
                  <td>{{ $kelas->nama_kelas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td>{{ __('pendaftar.label_program') }}</td>
                  <td>:</td>
                  <td>{{ $kelas->nama_program }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td>{{ __('pendaftar.label_teacher') }}</td>
                  <td>:</td>
                  <td>{{ $kelas->pengajar }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px]">{{ __('pendaftar.label_registrant_count') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ count($registrasi) }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">{{ __('pendaftar.label_filled') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->kapasitas }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">{{ __('pendaftar.label_open_date_reg') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_open }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">{{ __('pendaftar.label_close_date_reg') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $kelas->date_close }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2">{{ __('pendaftar.label_is_start') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">
                    @if ($kelas->isKelasStart == '1')
                      <span
                        class="bg-green-600 py-1 px-3 text-white rounded-lg">{{ __('pendaftar.status_started') }}</span>
                    @else
                      <span
                        class="bg-gray-400 py-1 px-3 text-white rounded-lg">{{ __('pendaftar.status_not_started') }}</span>
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="my-5"></div>

        <div class="grid grid-cols-1 gap-4">
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <h2 class="text-2xl font-medium">{{ __('pendaftar.table_member_title') }}</h2>
            <p>{{ __('pendaftar.table_member_desc') }}</p>
            <div class="py-2"></div>

            @if (count($registrasi) > 0)
              <table class="w-full border-collapse">
                <thead>
                  <tr class="bg-gray-200">
                    <th class="py-2 font-medium">{{ __('pendaftar.th_no') }}</th>
                    <th class="py-2 font-medium">{{ __('pendaftar.th_name') }}</th>
                    <th class="py-2 font-medium">{{ __('pendaftar.th_email') }}</th>
                    <th class="py-2 font-medium">{{ __('pendaftar.th_reg_date') }}</th>
                    <th class="py-2 font-medium">{{ __('pendaftar.th_reg_time') }}</th>
                    <th class="py-2 font-medium">{{ __('pendaftar.th_accept') }}</th>
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
                          @if ($member->isApproved == '1')
                            <span class="block text-center text-green-700 font-semibold">Approved</span>
                          @else
                            <span class="block text-center text-red-700 font-semibold">Rejected</span>
                          @endif
                        @else
                          <form action="{{ route('approve-pendaftar-kelas') }}" method="post">
                            @csrf
                            <input type="hidden" name="kelasId" value="{{ $kelas->kelasId }}" />
                            <input type="hidden" name="memberId[]" value="{{ $member->memberId }}" />

                            <div class="flex justify-center gap-2">
                              <button type="submit" name="btnApprove" value="1"
                                class="py-1.5 px-4 text-center bg-green-700 text-white rounded-lg cursor-pointer 
                        hover:opacity-90 transition">{{ __('pendaftar.btn_accept') }}</button>
                              <button type="submit" name="btnReject" value="0"
                                class="py-1.5 px-4 text-center bg-red-700 text-white rounded-lg cursor-pointer 
                        hover:opacity-90 transition">{{ __('pendaftar.btn_reject') }}</button>
                            </div>
                          </form>
                        @endif
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

                  <button type="submit" name="btnMulaiKelas" value="1"
                    class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer 
                    hover:opacity-90 transition">
                    {{ __('pendaftar.btn_start_class') }}
                  </button>
                </form>
              </div>
            @else
              <p class="text-center font-bold">{{ __('pendaftar.empty_member') }}</p>
            @endif
          </div>
        </div>
      </div>

      @include('layouts.footer')
    </div>

  </main>

  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
