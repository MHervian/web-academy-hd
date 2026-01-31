<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Tentang Akademi - HangulDream</title>

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />

  <!-- Font Awesome 7 -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <style>
    @layer utilities {
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }

      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    }

    * {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <?= $this->include('landing-page/header') ?>
  <!-- /Header -->

  <!-- Main content -->
  <main>
    <div class="pb-17 pt-10 px-5 bg-[radial-gradient(circle_at_30%_200%,#6D2A3A_0%,#30283F_40%,#1B2740_96%)]">
      <h1 class="text-white text-center text-3xl"><?= lang('App.welcome') ?></h1>
      <div class="py-2"></div>
      <p class="text-white sm:w-130 md:w-150 text-center sm:m-auto">
        <?= lang('App.welcome_description') ?>
      </p>
    </div>
    </div>

    <div class="bg-white">
      <div class="px-5 md:w-[90%] lg:w-245 md:m-auto pt-15 pb-10">
        <h2 class="text-[#633991] text-2xl font-bold"><?= lang('App.warm_greetings') ?></h2>
        <div class="py-1.5"></div>
        <p class="text-[#959094]">
          <?= lang('App.foundation_welcome_message') ?>
        </p>
        <p class="text-[#959094] py-1.5">
          <?= lang('App.thank_you') ?>
        </p>
        <div class="py-2"></div>
        <p class="font-bold"><?= lang('App.director_name') ?></p>
        <p><?= lang('App.director_title') ?></p>
      </div>
    </div>

    <div class="bg-[#faf6fb]">
      <div class="px-5 md:w-[90%] lg:w-245 md:m-auto pt-15 pb-14">
        <h2 class="text-center text-[#633991] text-2xl font-bold"><?= lang('App.ready_to_shape_your_future') ?></h2>

        <div class="py-2.5"></div>

        <div class="">
          <a href="<?= lang_url('auth/register') ?>" class="block px-4 sm:w-67 sm:mx-auto py-3 text-center border rounded-lg 
            border-[#BF2441] bg-[#BF2441] text-white font-bold text-xl">
            <?= lang('App.register_now') ?>
          </a>
        </div>
      </div>
    </div>

    <div class="bg-[#faf6fb]">
      <div class="lg:grid lg:grid-cols-2 px-5 pt-14 pb-9 md:w-[90%] lg:w-245 md:m-auto">
        <div class="lg:col-span-1">
          <p class="pb-3 text-[#633991]"><i class="fa-solid fa-location-dot text-[#1B2740]"></i> <?= lang('App.address') ?></p>
          <div class="flex gap-x-6.5">
            <span class="text-[#633991]"><i class="fa-solid fa-envelope text-[#1B2740]"></i> hangulcs@hangul.co.id</span>
            <span class="text-[#633991]"><i class="fa-solid fa-phone text-[#1B2740]"></i> +62939392892</span>
          </div>
        </div>
        <div class="lg:col-span-1 pt-3">
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-square-instagram"></i></a>
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-square-x-twitter"></i></a>
          <a href="#" class="text-4xl text-[#633991]"><i class="fa-brands fa-square-linkedin"></i></a>
        </div>
      </div>
    </div>
  </main>
  <!-- /Main Content -->

  <!-- Footer -->
  <?= $this->include('landing-page/footer') ?>
  <!-- / Footer -->
</body>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function() {
    $("#mobileMenuBtn").on("click", function() {
      $("#mobileMenu").slideToggle(200);
    });

    $("#mobileMenu a").on("click", function() {
      $("#mobileMenu").slideUp(200);
    });
  });
</script>

</html>