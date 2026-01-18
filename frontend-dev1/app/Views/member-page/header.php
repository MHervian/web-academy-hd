<!-- Header -->
<header class="fixed top-0 left-0 right-0 w-full flex justify-between items-center px-6 py-4 bg-white shadow-lg">
  <div class="">
    <a href="<?= lang_url('beranda-member') ?>" class="font-bold">
      <img src="<?= base_url('images/logo_only.png') ?>" class="w-10 h-10" />
    </a>
  </div>
  <nav>
    <ul class="flex">
      <li><a href="<?= lang_url('beranda-member') ?>" class="px-3"><?= lang('Member.dashboard') ?></a></li>
      <li><a href="<?= lang_url('kelas') ?> ?>" class="px-3"><?= lang('Member.class') ?></a></li>
      <li><a href="<?= lang_url('sertifikat') ?>" class="px-3"><?= lang('Member.certificate') ?></a></li>
      <li><a href="<?= lang_url('coming-soon-dashboard') ?>" class="px-3"><?= lang('Member.forum') ?></a></li>
      <li><a href="<?= lang_url('coming-soon-dashboard') ?>" class="px-3"><?= lang('Member.notification') ?></a></li>
      <li><a href="<?= lang_url('coming-soon-dashboard') ?>" class="px-3"><?= lang('Member.account') ?></a></li>
      <!-- <li><a href="<?= base_url('auth/login') ?>" class="px-3">Logout</a></li> -->
      <li><a href="<?= lang_url('auth/logout') ?>" class="px-3"><?= lang('Member.logout') ?></a></li>
    </ul>
  </nav>
</header>
<!--/ Header -->