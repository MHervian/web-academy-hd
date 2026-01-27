<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Daftar Member Baru - DreamPanel</title>
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
      <!-- Header -->
      <header class="relative z-3 flex justify-between px-3 pb-1 pt-3 border-solid border-b-2 border-b-white">
        <div class="flex items-center">
          <!-- button type="button" class="text-gray-500">
            <i class="fa-solid fa-bars cursor-pointer text-2xl"></i>
          </!-->
          <h1 class="font-bold inline-block ml-2 text-gray-600 navigasi">
            <a href="#">DreamPanel</a>
          </h1>
        </div>
        <span class="flex justify-between pl-5">
          <!-- div class="relative group">
            <button type="button" class="relative text-[1.5rem] cursor-pointer">
              <i class="fa-regular fa-bell text-[#a6a6a6]"></i>
              <span
                class="absolute top-1 right-1 h-3 w-3 bg-red-600 rounded-full border-2 border-transparent transform translate-x-1 -translate-y-1"></span>
            </button>
            <div class="absolute hidden right-0 group-hover:block w-90 bg-white shadow-lg rounded-md mt-2 z-10">
              <p class="text-gray-800 pl-3 pb-2 pt-3.5 font-bold navigasi">NOTIFIKASI</p>
              <hr class="border-gray-300" />
              <a href="#" class="block px-3 py-1.5 text-gray-800 hover:bg-gray-100">
                <p class="text-[1.05rem]">Update in Kurikulum &SmallCircle; <span class="text-gray-400 text-[0.78rem]">3
                    menit lalu</span></p>
                <p class="text-gray-500 text-[0.9rem]">Lorem ipsun dolor sit amet sedsiudfs i...</p>
                <span class="text-[0.8rem]">By <span class="font-bold">Author</span></span>
                <span class="text-[0.8rem]">24 Maret 2025</span>
              </a>
              <hr class="border-gray-300" />
              <a href="#" class="block px-3 py-1.5 text-gray-800 hover:bg-gray-100">
                <p class="text-[1.05rem]">Update in Kurikulum &SmallCircle; <span class="text-gray-400 text-[0.78rem]">3
                    menit lalu</span></p>
                <p class="text-gray-500 text-[0.9rem]">Lorem ipsun dolor sit amet sedsiudfs i...</p>
                <span class="text-[0.8rem]">By <span class="font-bold">Author</span></span>
                <span class="text-[0.8rem]">24 Maret 2025</span>
              </a>
              <hr class="border-gray-300" />
              <a href="#" class="block py-3 w-full text-center text-blue-400">More...</a>
            </div>
          </!-->
          {{-- <span class="px-2"></span>
          <span class="border-l-2 border-[#e6e6e6]"></span>
          <span class="px-2"></span> --}}
          {{-- <div class="relative group">
            <button type="button" class="text-[1.5rem] cursor-pointer">
              <i class="fa-regular fa-circle-user text-[#a6a6a6]"></i>
            </button>
            <div class="absolute hidden right-0 group-hover:block w-70 bg-white shadow-lg rounded-md mt-2 z-10">
              <p class="text-gray-500 pl-3 pb-2 pt-3.5 font-bold navigasi">AKUN</p>
              <hr class="border-gray-100" />
              <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-gear"></i> Pengaturan
              </a>
              <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-circle-info"></i> Tentang
              </a>
              <a href="login.html" class="block px-4 py-3 text-gray-800 hover:bg-gray-100">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
              </a>
            </div>
          </div> --}}
          {{-- Logout button temp. --}}
          <a href="{{ route('logout') }}" class="block px-4 py-1.5 text-gray-800 hover:bg-gray-100">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
          </a>
          <span class="px-3"></span>
        </span>
      </header>
      <!--/ Header -->

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <!-- Title and breadcrumbs -->
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">Daftar Member Baru</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('member') }}" class="text-blue-700 hover:opacity-60 transition">Member</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">Daftar Member</a>
        </span>
        <p class="text-gray-700">Form Daftar Member Baru Akademi Dream Hangul.</p>
        <!--/ Title and breadcrumbs  -->

        <div class="py-3"></div>

        <!-- Form Reset-Password -->
        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-3">
            <p class="italic text-[0.9rem] pb-2">*Data member baru pakai metode daftar email</p>
            <form action="{{ route('store-member') }}" method="post">
              @csrf

              <label for="username" class="block pb-1 text-gray-600">Username Member</label>
              <input id="username" type="text"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="username" required />

              <div class="py-1.5"></div>

              <label for="email" class="block pb-1 text-gray-600">Email Member</label>
              <input id="email" type="email"
                class="w-full py-1.5 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500"
                placeholder="" name="email" required />

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
                placeholder="" name="metode" value="Email" readonly />

              <div class="py-3"></div>

              <div class="flex justify-end gap-3">
                <button type="reset"
                  class="py-1.5 px-4 text-center bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  Reset
                </button>
                <button type="button"
                  class="py-1.5 px-4 text-center bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  Daftar Member
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- /Form Reset-Password -->

        <div class="py-3"></div>

      </div>
      <div class="bg-white p-3">
        <p class="text-gray-500">&copy;DreamHangul 2025</p>
      </div>
    </div>
    <!--/ Content -->

  </main>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {

      $('#btnGeneratePassword').on('click', function() {

        function generatePassword(length = 10) {
          let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*";
          let password = "";
          for (let i = 0; i < length; i++) {
            password += chars.charAt(Math.floor(Math.random() * chars.length));
          }
          return password;
        }

        let randomPassword = generatePassword(12);

        $('#newPassword').val(randomPassword);
        $('#confirmPassword').val(randomPassword);
      });

    });
  </script>

</body>

</html>
