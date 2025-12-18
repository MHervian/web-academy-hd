<!-- Header -->
<header class="fixed top-0 left-0 right-0 w-full flex justify-between items-center px-6 py-4 bg-white shadow-lg">
  <div class="">
    <a href="<?= url_to('beranda-member') ?>" class="font-bold">
      <img src="<?= base_url('images/logo_only.png') ?>" class="w-10 h-10" />
    </a>
  </div>
  <nav>
    <ul class="flex">
      <li><a href="<?= url_to('beranda-member') ?>" class="px-3">Dashboard</a></li>
      <li><a href="<?= url_to('kelas') ?> ?>" class="px-3">Kelas</a></li>
      <li><a href="<?= url_to('sertifikat') ?>" class="px-3">Sertifikat</a></li>
      <li><a href="#" class="px-3">Forum</a></li>
      <li><a href="<?= url_to('notifikasi') ?>" class="px-3">Notifikasi</a></li>
      <li><a href="#" class="px-3">Akun</a></li>
      <li><a href="<?= url_to('login') ?>" class="px-3">Logout</a></li>
    </ul>
  </nav>
</header>
<!--/ Header -->