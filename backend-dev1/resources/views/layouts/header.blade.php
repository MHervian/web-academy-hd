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
    <!-- Dropdown Bahasa -->
    <div class="relative">
      <button id="langBtn"
        class="flex items-center gap-1 px-3 py-1.5 text-gray-800 border rounded hover:bg-gray-100
              cursor-pointer">
        🌐 {{ strtoupper(session('locale')) }}
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </button>

      <!-- Dropdown Menu -->
      <div id="langMenu" class="hidden absolute right-0 mt-1 w-24 bg-white border border-gray-300 rounded shadow-md">
        <a href="{{ route('lang.switch', ['locale' => 'id']) }}" class="block px-3 py-2 hover:bg-gray-100">ID</a>
        <a href="{{ route('lang.switch', ['locale' => 'kr']) }}" class="block px-3 py-2 hover:bg-gray-100">KR</a>
        <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="block px-3 py-2 hover:bg-gray-100">EN</a>
      </div>
    </div>

    <a href="{{ route('logout') }}" class="block px-4 py-1.5 text-gray-800 hover:bg-gray-100">
      <i class="fa-solid fa-right-from-bracket"></i> Logout
    </a>
    <span class="px-3"></span>
  </span>
</header>
<!--/ Header -->
