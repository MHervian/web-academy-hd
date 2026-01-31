<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Unggah Sertifikat - DreamPanel</title>

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

    <!-- Content -->
    <div class="flex-1 flex flex-col">
      @include('layouts.header')

      <!-- Content -->
      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">Unggah Sertifikat Kelulusan</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('sertifikat') }}" class="text-blue-700 hover:opacity-60 transition">Sertifikat</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">Unggah Sertifikat</a>
        </span>
        <p class="text-gray-700">Form Unggah Sertifikat Kelulusan.</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>
        <!-- Form Reset-Password -->
        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <form action="{{ route('store-sertifikat') }}" method="post" enctype="multipart/form-data">
              @csrf

              <label for="member" class="block pb-1 text-gray-600">Nama Member</label>
              {{-- <input id="member" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="username" required /> --}}
              <select id="member"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="memberId" required>
                <option value="">-- Member --</option>
                @if (count($members) > 0)
                  @foreach ($members as $member)
                    <option value="{{ $member->memberId }}">{{ $member->username }}</option>
                  @endforeach
                @endif
              </select>

              <div class="py-1.5"></div>

              <label for="noSertifikat" class="block pb-1 text-gray-600">Nomor Sertifikat</label>
              <input id="noSertifikat" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="noSertifikat" required />

              {{-- <label for="noSertifikat">Nomor Sertifikat</label>
              <input type="text" id="noSertifikat" name="noSertifikat" placeholder="Input no sertifikat.." /> --}}

              <div class="py-1.5"></div>

              <label for="tanggal" class="block pb-1 text-gray-600">Tanggal Terbit</label>
              <input id="tanggal" type="date"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="tanggal" required />

              {{-- <label for="tanggal">Tanggal Terbit</label>
              <input type="date" id="tanggal" name="tanggal" /> --}}
              <div class="py-1.5"></div>

              <label for="filepdf" class="block pb-1 text-gray-600">Upload File Sertifikat (PDF)</label>
              <input id="filepdf" type="file"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="filepdf" accept="application/pdf" required />

              {{-- <label for="filepdf">Upload File Sertifikat (PDF)</label>
              <input type="file" id="filepdf" name="filepdf" accept="application/pdf" required /> --}}

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  Reset
                </button>
                <button type="submit"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  Simpan
                </button>
              </div>

              {{-- <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit">Simpan</button> --}}

              {{-- <button type="button" data-toggle="modal" data-target="#successUploadModal">Upload</button> --}}
            </form>
          </div>
        </div>
      </div>

      @include('layouts.footer')
    </div>
  </main>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
