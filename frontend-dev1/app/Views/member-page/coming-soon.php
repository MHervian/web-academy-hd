<!doctype html>
<html lang="<?= service('request')->getLocale() ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow">
    <title>Student Dashboard - HangulDream</title>

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
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>

    <?= $this->include('member-page/header') ?>

    <div class="min-h-screen flex items-center justify-center px-6">
        <div class="text-center max-w-xl">

            <div class="text-6xl mb-6">🚧</div>

            <h1 class="text-4xl font-bold mb-4">
                Coming Soon
            </h1>

            <p class="text-slate-300 mb-8">
                Fitur pembelajaran sedang kami persiapkan.<br>
                Nantikan pengalaman belajar yang lebih baik.
            </p>

            <span class="inline-block bg-white/10 backdrop-blur px-6 py-2 rounded-full text-sm">
                Dream Academy • 2026
            </span>

        </div>
    </div>
</body>

</html>