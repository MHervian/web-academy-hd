<!-- Navigation -->
<nav class="relative w-56 flex flex-col">
  {{-- <span
    class="px-3 pb-2.5 pt-4.5 relative z-5 block text-[#8f9cba] bg-[#1c2b4a] navigasi tracking-widest font-extrabold
        border-solid border-b-[#354970] border-b-2">NAVIGASI</span> --}}
  <span
    class="px-3 pb-2.5 pt-1 relative z-5 block text-[#8f9cba] bg-[#1c2b4a] navigasi tracking-widest font-extrabold
        border-solid border-b-[#354970] border-b-2">
    <img src="{{ asset('images/logo.png') }}" class="h-10" />
  </span>
  <ul class="py-3 z-3 text-white bg-[#1c2b4a] flex-1">
    <li>
      {{-- <a href="{{ route('admin-dashboard') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-house"></i> Dashboard
      </a> --}}
      <a href="{{ route('admin-dashboard') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-house"></i> {{ __('app.dashboard') }}
      </a>
    </li>
    <li>
      {{-- <a href="{{ route('member') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-people-roof"></i> Member
      </a> --}}
      <a href="{{ route('member') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-people-roof"></i> {{ __('app.member') }}
      </a>
    </li>
    <li>
      <a href="{{ route('sertifikat') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-certificate"></i> {{ __('app.sertifikat') }}
      </a>
      {{-- <a href="{{ route('sertifikat') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-certificate"></i> Sertifikat
      </a> --}}
    </li>
    <li>
      <a href="{{ route('program') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-chalkboard"></i> {{ __('app.kursus_program') }}
      </a>
      {{-- <a href="{{ route('program') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-chalkboard"></i> Kursus/Program
      </a> --}}
    </li>
    <li>
      <a href="{{ route('kelas') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-book-open"></i> {{ __('app.kelas') }}
      </a>
      {{-- <a href="{{ route('kelas') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-book-open"></i> Kelas
      </a> --}}
    </li>
    <li>
      <a href="{{ route('kelas-registrasi') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-clipboard-check"></i> {{ __('app.pendaftar_kelas') }}
      </a>
      {{-- <a href="{{ route('kelas-registrasi') }}" class="block py-2 px-3 hover:bg-[#344565] text-[0.9rem]">
        <i class="fa-solid fa-clipboard-check"></i> Pendaftar Kelas
      </a> --}}
    </li>
    <!-- li>
          <a href="#" class="block py-3.5 px-3 hover:bg-[#344565]">
            <i class="fa-solid fa-folder-open"></i> Menu 2
          </a>
          <div class="bg-[#142036] border-l-4 border-l-blue-500">
            <ul class="text-white">
              <li>
                <a href="#" class="block py-3.5 pl-6 pr-3 text-sm hover:bg-[#344565]">Submenu 1</a>
              </li>
              <li>
                <a href="#" class="block py-3.5 pl-6 pr-3 text-sm hover:bg-[#344565]">Submenu 2</a>
              </li>
              <li>
                <a href="#" class="block py-3.5 pl-6 pr-3 text-sm hover:bg-[#344565]">Submenu 3</a>
              </li>
            </ul>
          </div>
        </!-->
    <!-- li>
          <a href="#" class="block py-3.5 px-3 hover:bg-[#344565]">
            <i class="fa-solid fa-list"></i> Menu 3
          </a>
        </!-->
  </ul>
</nav>
<!--/Navigation  -->
