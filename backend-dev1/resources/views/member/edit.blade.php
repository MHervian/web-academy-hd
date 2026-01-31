<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Ubah Data Member - DreamPanel</title>
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

    <!-- Content -->
    <div class="flex-1 flex flex-col">
      @include('layouts.header')

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">Ubah Data Member</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('member') }}" class="text-blue-700 hover:opacity-60 transition">Member</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">Ubah Data Member</a>
        </span>
        <p class="text-gray-700">Form Ubah Data Member.</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        <!-- Form Reset-Password -->
        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <p class="italic text-[0.9rem] pb-2">*Metode daftar member tidak bisa diubah</p>
            <form action="{{ route('update-member') }}" method="post">
              @csrf
              <input type="hidden" name="memberId" value="{{ $member->memberId }}" />

              <label for="username" class="block pb-1 text-gray-600">Username Member</label>
              <input id="username" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="username" value="{{ $member->username }}" required />

              <div class="py-1.5"></div>

              <label for="email" class="block pb-1 text-gray-600">Email Member</label>
              <input id="email" type="email"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="email" value="{{ $member->email }}" required />

              <div class="py-1.5"></div>

              <label for="newPassword" class="block pb-1 text-gray-600">Password Baru</label>
              <div class="flex gap-3">
                <input id="newPassword" type="text"
                  class="grow py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                  placeholder="" name="newPassword" required />
                <button id="btnGeneratePassword" type="button"
                  class="w-62 py-1.5 px-4.5 text-center bg-gray-300 rounded-lg cursor-pointer hover:opacity-90 transition">
                  <i class="fa-solid fa-key"></i> Buat Password Acak
                </button>
              </div>

              <div class="py-1.5"></div>

              <label for="confirmPassword" class="block pb-1 text-gray-600">Konfirmasi Ulang</label>
              <div class="flex gap-3">
                <input id="confirmPassword" type="password"
                  class="grow py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                  placeholder="" name="confirmPassword" required />
                <div class="w-62"></div>
              </div>

              <div class="py-1.5"></div>

              <label for="metode" class="block pb-1 text-gray-600">Metode Daftar</label>
              <input id="metode" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] bg-slate-200 focus:outline-0 focus:border-blue-500"
                placeholder="" name="metode" value="{{ $member->metode }}" readonly />

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  Reset
                </button>
                <button type="button"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  Ubah Data Member
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- /Form Reset-Password -->

        <div class="py-3"></div>

      </div>
      @include('layouts.footer')
    </div>
    <!--/ Content -->

  </main>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>

</body>

</html>
