<!-- Header -->
<header class="sticky top-0 z-[1000]">
    <div class="flex justify-between items-center py-4 px-5 bg-[#1B2740]">
        <a href="#" class="inline-block">
            <!-- Mobile logo display -->
            <img
                src="image_samples/logo_only.png"
                class="w-12 sm:hidden"
                alt="HangulDream Akademi" />

            <!-- Non-Mobile logo display -->
            <img
                src="image_samples/logo%20design%20new%202.png"
                class="hidden sm:block! w-60"
                alt="HangulDream Akademi" />
        </a>

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
                <a href="<?= base_url('/') ?>" class="px-3 py-2 text-white">Beranda</a>
                <a href="<?= base_url('/course') ?>" class="px-3 py-2 text-white">Kursus</a>
                <a href="<?= base_url('/community') ?>" class="px-3 py-2 text-white">Komunitas</a>
                <a href="<?= base_url('/about-us') ?>" class="px-3 py-2 text-white">Tentang Akademi</a>
                <a
                    href="<?= base_url('/auth/register') ?>"
                    class="px-3 py-2 text-white border border-white rounded-lg">Daftar</a>
            </div>
        </nav>
    </div>
</header>
<!-- /Header -->

<!-- Mobile Navigation Menu -->
<div id="mobileMenu" class="hidden md:hidden bg-[#1B2740]">
    <nav class="flex flex-col px-5 py-4 space-y-3">
        <a href="<?= base_url('/') ?>" class="text-white py-2"> Beranda </a>
        <!-- <div class="py-1"></div> -->
        <a href="<?= base_url('/course') ?>" class="text-white py-2"> Kursus </a>
        <!-- <div class="py-1"></div> -->
        <a href="<?= base_url('/community') ?>" class="text-white py-2"> Komunitas </a>
        <!-- <div class="py-1"></div> -->
        <a href="<?= base_url('/about-us') ?>" class="text-white py-2">
            Tentang Akademi
        </a>
        <!-- <div class="py-2"></div> -->
        <a
            href="<?= base_url('/auth/register') ?>"
            class="text-white text-center py-3 border border-white rounded-lg mt-2">
            Daftar
        </a>
    </nav>
</div>
<!-- / Mobile Navigation Menu -->