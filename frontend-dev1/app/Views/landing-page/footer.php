<footer
    class="pt-12.5 pb-7 px-5 bg-[radial-gradient(circle_at_100%_180%,#6D2A3A_0%,#30283F_20%,#1B2740_95%)]">
    <div class="grid grid-cols-3">
        <div class="col-span-3">
            <div class="pb-7">
                <img
                    src="<?= base_url('image_samples/logo design new 2.png') ?> "
                    class="w-80 md:w-74 m-auto" />
            </div>
            <ul class="md:flex md:justify-center md:w-150 md:m-auto">
                <a href="<?= lang_url('/') ?>" class="px-3 py-2 text-white"><?= lang('App.home') ?></a>
                <a href="<?= lang_url('/course') ?>" class="px-3 py-2 text-white"><?= lang('App.courses') ?></a>
                <a href="<?= lang_url('/community') ?>" class="px-3 py-2 text-white"><?= lang('App.community') ?></a>
                <a href="<?= lang_url('/about-us') ?>" class="px-3 py-2 text-white"><?= lang('App.about_academy') ?></a>
                <!-- <li>
                    <a href="#" class="block text-center text-white">Ketentuan Privasi dan Pengguna</a>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="py-6.5"></div>
    <p class="text-[#e54595] font-semibold text-center text-sm">
        &copy; Dream Korean Language Learning Center    </p>
</footer>