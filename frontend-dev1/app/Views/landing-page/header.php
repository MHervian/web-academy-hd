<!-- Header -->
<header class="sticky top-0 z-1000">
    <div class="flex justify-between items-center py-4 px-5 bg-[#1B2740]">
        <a href="#" class="inline-block">
            <!-- Mobile logo display -->
            <img
                src="<?= base_url('image_samples/logo_only.png') ?>"
                class="w-12 sm:hidden"
                alt="HangulDream Akademi" />

            <!-- Non-Mobile logo display -->
            <img
                src="<?= base_url('image_samples/logo%20design%20new%202.png') ?>"
                class="hidden sm:block! w-96"
                alt="HangulDream Akademi" />
        </a>

        <div class="flex gap-4">

            <nav>
                <!-- Mobile page button navigation -->
                <button
                    id="mobileMenuBtn"
                    type="button"
                    class="md:hidden cursor-pointer bg-[#0D0D0D] py-1.5 px-1.5 rounded-md">
                    <i class="fa-solid fa-bars text-white text-3xl"></i>
                </button>

                <!-- Non-mobile page navigation -->
                <div class="hidden md:flex justify-between">
                    <a href="<?= lang_url('/') ?>" class="px-3 py-2 text-white"><?= lang('App.home') ?></a>
                    <a href="<?= lang_url('/course') ?>" class="px-3 py-2 text-white"><?= lang('App.courses') ?></a>
                    <a href="<?= lang_url('/community') ?>" class="px-3 py-2 text-white"><?= lang('App.community') ?></a>
                    <a href="<?= lang_url('about-us') ?>" class="px-3 py-2 text-white"><?= lang('App.about_academy') ?></a>
                    <a
                        href="<?= lang_url('/auth/login') ?>"
                        class="px-3 py-2 mr-2 text-white border border-white rounded-lg"><?= lang('App.login') ?></a>
                    <a
                        href="<?= lang_url('/auth/register') ?>"
                        class="px-3 py-2 text-white border border-white rounded-lg"><?= lang('App.register') ?></a>
                    <!-- <a
                    href="<?= base_url('/coming-soon-landing-page') ?>"
                    class="px-3 py-2 text-white border border-white rounded-lg">Daftar</a> -->
                </div>
            </nav>

            <div class="relative inline-block text-left">
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
            </div>

        </div>



    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-[#1B2740]">
        <nav class="flex flex-col px-5 py-4 space-y-3">
            <a href="<?= lang_url('/') ?>" class="text-white py-2"> <?= lang('App.home') ?> </a>
            <!-- <div class="py-1"></div> -->
            <a href="<?= lang_url('/course') ?>" class="text-white py-2"> <?= lang('App.courses') ?> </a>
            <!-- <div class="py-1"></div> -->
            <a href="<?= lang_url('/community') ?>" class="text-white py-2"> <?= lang('App.community') ?> </a>
            <!-- <div class="py-1"></div> -->
            <a href="<?= lang_url('/about-us') ?>" class="text-white py-2">
                <?= lang('App.about_academy') ?>
            </a>
            <!-- <div class="py-2"></div> -->
            <a
                href="<?= lang_url('/auth/register') ?>"
                class="text-white text-center py-3 border border-white rounded-lg mt-2">
                Masuk
            </a>
            <a
                href="<?= lang_url('/auth/register') ?>"
                class="text-white text-center py-3 border border-white rounded-lg mt-2">
                Daftar
            </a>
        </nav>
    </div>
    <!-- / Mobile Navigation Menu -->
</header>
<!-- /Header -->