<!doctype html>
<html lang="<?= service('request')->getLocale() ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Course Detail #1 - HangulDream</title>

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
</head>

<body>
  <!-- Header -->
  <?= $this->include('landing-page/header') ?>
  <!-- /Header -->

  <nav class="text-sm font-medium text-on-surface dark:text-on-surface-dark p-5" aria-label="breadcrumb">
    <ol class="flex flex-wrap items-center gap-2">
      <li class="flex items-center gap-2">
        <a href="<?= lang_url('course') ?>" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong"><?= lang('App.courses') ?></a>
        <span aria-hidden="true">/</span>
      </li>
      <li class="text-on-surface-strong font-bold dark:text-on-surface-dark-strong" aria-current="page"><?= lang('App.korean_teacher_training_program') ?></li>
    </ol>
  </nav>

  <!-- Main content -->
  <main>
    <div class="max-w-5xl mx-auto space-y-8 p-5">

      <!-- Header Program -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-2">
          한국어 교원(전문가) 과정
        </h1>
        <h2 class="text-xl text-gray-700 font-semibold">
          <?= lang('App.korean_teacher_training_program') ?>
        </h2>
        <p class="text-gray-600 mt-3">
          <?= lang('App.korean_teacher_training_program_description') ?>
        </p>
      </div>

      <!-- Gambaran Umum -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          📘 <?= lang('App.program_overview') ?>
        </h3>
        <p class="text-gray-700 leading-relaxed">
          <?= lang('App.program_overview_description') ?>
        </p>
      </div>

      <!-- Kurikulum -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          📚 <?= lang('App.curriculum') ?>
        </h3>
        <ul class="list-disc ml-5 space-y-2 text-gray-700">
          <li><?= lang('App.teaching_methodology') ?></li>
          <li><?= lang('App.korean_linguistics') ?></li>
          <li><?= lang('App.learning_material_development') ?></li>
          <li><?= lang('App.learning_evaluation') ?></li>
          <li><?= lang('App.teaching_practice') ?></li>
        </ul>
      </div>

      <!-- Profil Pengajar -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          👩‍🏫 <?= lang('App.instructor_profile') ?>
        </h3>
        <p class="text-gray-700 leading-relaxed">
          <?= lang('App.instructor_profile_description') ?>
        </p>
      </div>

      <!-- Jadwal -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          🗓️ <?= lang('App.class_schedule') ?>
        </h3>
        <p class="text-gray-700">
          <?= lang('App.class_schedule_description') ?>
        </p>
      </div>

      <!-- Biaya -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-3">
          💳 <?= lang('App.tuition_and_refund_policy') ?>
        </h3>
        <p class="text-gray-700 leading-relaxed">
          <?= lang('App.tuition_and_refund_policy_description') ?>
        </p>
      </div>

    </div>
  </main>
  <!-- / Main Content -->

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