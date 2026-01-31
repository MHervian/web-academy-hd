<!-- Header -->
<header class="fixed top-0 left-0 right-0 w-full flex justify-between items-center px-6 py-4 bg-white shadow-lg">
  <div>
    <a href="<?= lang_url('beranda-member') ?>" class="font-bold">
      <img src="<?= base_url('images/logo_only.png') ?>" class="w-10 h-10" />
    </a>
  </div>

  <nav>
    <ul class="flex items-center">
      <li><a href="<?= lang_url('beranda-member') ?>" class="px-3"><?= lang('Member.dashboard') ?></a></li>
      <li><a href="<?= lang_url('kelas') ?>" class="px-3"><?= lang('Member.class') ?></a></li>
      <li><a href="<?= lang_url('sertifikat') ?>" class="px-3"><?= lang('Member.certificate') ?></a></li>
      <li><a href="<?= lang_url('forum') ?>" class="px-3"><?= lang('Member.forum') ?></a></li>
      <li><a href="<?= lang_url('notifikasi') ?>" class="px-3"><?= lang('Member.notification') ?></a></li>
      <li><a href="<?= lang_url('akun') ?>" class="px-3"><?= lang('Member.account') ?></a></li>
      <li><a href="<?= lang_url('auth/logout') ?>" class="px-3"><?= lang('Member.logout') ?></a></li>

      <!-- Language Switcher -->
      <li class="relative ml-3">
        <button type="button"
          class="inline-flex items-center gap-2 rounded-lg bg-gray-800 px-3 py-2 text-sm font-medium text-white hover:bg-gray-700"
          onclick="document.getElementById('langMenu').classList.toggle('hidden')">

          🌐 <?= strtoupper(current_lang()) ?>
          <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <div id="langMenu"
          class="absolute right-0 z-10 mt-2 w-40 rounded-lg bg-white shadow-lg hidden">

          <a href="<?= switch_lang('id') ?>"
            class="block px-4 py-2 text-sm hover:bg-gray-100 <?= current_lang() === 'id' ? 'font-bold text-blue-600' : '' ?>">
            🇮🇩 Indonesia
          </a>

          <a href="<?= switch_lang('en') ?>"
            class="block px-4 py-2 text-sm hover:bg-gray-100 <?= current_lang() === 'en' ? 'font-bold text-blue-600' : '' ?>">
            🇺🇸 English
          </a>

          <a href="<?= switch_lang('ko') ?>"
            class="block px-4 py-2 text-sm hover:bg-gray-100 <?= current_lang() === 'ko' ? 'font-bold text-blue-600' : '' ?>">
            🇰🇷 한국어
          </a>
        </div>
      </li>
    </ul>
  </nav>
</header>

<!--/ Header -->