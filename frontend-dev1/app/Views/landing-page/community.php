<!DOCTYPE html>
<html lang="id">

<head>
    <title>Coming Soon - DreamTemplate</title>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css" /> -->
    <!-- Themify Icons -->
    <!-- <link rel="stylesheet" href="/css/themify-icons.css" /> -->

    <!-- Main css -->
    <!-- <link href="/css/style.css" rel="stylesheet" /> -->

    <!-- Student Dashboard CSS -->
    <!-- <link rel="stylesheet" href="/css/student-dashboard.css" /> -->

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />

    <style>
        .content-404 {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .back {
            display: inline-block;
            padding: 0 1.5rem;
            margin-top: 1rem;
            color: black;
            font-size: 1.2rem;
        }

        .back:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?= $this->include('landing-page/header') ?>
    <!-- /Header -->
    <main>

        <div
            class="pb-17 pt-10 px-5 bg-[radial-gradient(circle_at_30%_200%,#6D2A3A_0%,#30283F_40%,#1B2740_96%)]">
            <h1 class="text-white md:text-center text-3xl">
                Komunitas
            </h1>
            <div class="py-2"></div>
            <p class="text-white sm:w-130 md:w-150 md:text-center md:m-auto">
                Halaman komunitas merupakan ruang berbagi informasi, pengalaman,
                dan interaksi seputar studi, karier, serta aktivitas pendidikan
                Korea–Indonesia bagi peserta program dan masyarakat umum.
            </p>

            <div class="py-4"></div>

        </div>

        <div class="max-w-5xl mx-auto px-6 py-10 space-y-10">

            <!-- Informasi Studi -->
            <section class="h-full pt-6">
                <div class="flex justify-center items-center">
                    <div class="flex-2">
                        <h1 class="text-gray-600 mb-2 text-3xl font-bold">
                            Studi di Korea
                        </h1>
                        <p class="text-gray-700">
                            Menyediakan panduan universitas, beasiswa, persyaratan pendaftaran,
                            serta kehidupan mahasiswa di Korea Selatan.
                        </p>
                    </div>
                    <div class="flex-1 rounded">
                        <img src="/images/happy-team-working-office.jpg" class="object-cover transition duration-700 ease-out group-hover:scale-105 rounded" alt="">
                    </div>
                </div>

            </section>

            <!-- Informasi Karier -->
            <section class="h-full pt-6">
                <div class="flex items-center gap-6">
                    <div class="flex-1 rounded">
                        <img src="/images/happy-team-working-office.jpg" class="object-cover transition duration-700 ease-out group-hover:scale-105 rounded" alt="">
                    </div>
                    <div class="flex-2">

                        <h1 class="text-gray-600 mb-2 text-3xl font-bold">
                            Karier di Korea
                        </h1>
                        <p class="text-gray-700">
                            Informasi peluang kerja, magang, dan persiapan karier
                            bagi lulusan dan profesional di Korea.
                        </p>
                    </div>

                </div>

            </section>

            <!-- Ulasan -->
            <section class="h-full pt-6">
                <h1 class="text-gray-600 mb-2 text-3xl font-bold">
                    Ulasan Peserta
                </h1>
                <p class="text-gray-700">
                    Testimoni dan pengalaman peserta setelah mengikuti
                    program pendidikan Bahasa Korea.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-3 justify-items-center p-5">
                    <article class="group rounded-radius flex max-w-md flex-col border border-outline bg-surface-alt p-6 text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-12 text-on-surface-strong dark:text-on-surface-dark-strong group-hover:scale-105 transition duration-500 ease-out" aria-hidden="true">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="mt-2 text-pretty text-sm">
                            Simply put, this software transformed my workflow! Its intuitive
                            interface and powerful features make tasks a breeze. A game-changer
                            for productivity!
                        </p>
                        <!-- avatar & rating -->
                        <div class="flex flex-col-reverse md:flex-row md:items-center mt-8 justify-between gap-6">
                            <!-- avatar & title -->
                            <div class="flex items-center gap-2">
                                <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-1.webp" class="size-10 rounded-full object-cover" alt="avatar" />
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Bob Johnson</h3>
                                    <span class="text-xs">CEO - TechNova</span>
                                </div>
                            </div>
                            <!-- Rating -->
                            <div class="flex items-center gap-1">
                                <span class="sr-only">Rated 4 stars</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-on-surface/50 dark:text-on-surface-dark/50" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </article>
                    <article class="group rounded-radius flex max-w-md flex-col border border-outline bg-surface-alt p-6 text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-12 text-on-surface-strong dark:text-on-surface-dark-strong group-hover:scale-105 transition duration-500 ease-out" aria-hidden="true">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="mt-2 text-pretty text-sm">
                            Simply put, this software transformed my workflow! Its intuitive
                            interface and powerful features make tasks a breeze. A game-changer
                            for productivity!
                        </p>
                        <!-- avatar & rating -->
                        <div class="flex flex-col-reverse md:flex-row md:items-center mt-8 justify-between gap-6">
                            <!-- avatar & title -->
                            <div class="flex items-center gap-2">
                                <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-1.webp" class="size-10 rounded-full object-cover" alt="avatar" />
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Bob Johnson</h3>
                                    <span class="text-xs">CEO - TechNova</span>
                                </div>
                            </div>
                            <!-- Rating -->
                            <div class="flex items-center gap-1">
                                <span class="sr-only">Rated 4 stars</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-on-surface/50 dark:text-on-surface-dark/50" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </article>
                    <article class="group rounded-radius flex max-w-md flex-col border border-outline bg-surface-alt p-6 text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-12 text-on-surface-strong dark:text-on-surface-dark-strong group-hover:scale-105 transition duration-500 ease-out" aria-hidden="true">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="mt-2 text-pretty text-sm">
                            Simply put, this software transformed my workflow! Its intuitive
                            interface and powerful features make tasks a breeze. A game-changer
                            for productivity!
                        </p>
                        <!-- avatar & rating -->
                        <div class="flex flex-col-reverse md:flex-row md:items-center mt-8 justify-between gap-6">
                            <!-- avatar & title -->
                            <div class="flex items-center gap-2">
                                <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-1.webp" class="size-10 rounded-full object-cover" alt="avatar" />
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Bob Johnson</h3>
                                    <span class="text-xs">CEO - TechNova</span>
                                </div>
                            </div>
                            <!-- Rating -->
                            <div class="flex items-center gap-1">
                                <span class="sr-only">Rated 4 stars</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-on-surface/50 dark:text-on-surface-dark/50" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </article>
                    <article class="group rounded-radius flex max-w-md flex-col border border-outline bg-surface-alt p-6 text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-12 text-on-surface-strong dark:text-on-surface-dark-strong group-hover:scale-105 transition duration-500 ease-out" aria-hidden="true">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="mt-2 text-pretty text-sm">
                            Simply put, this software transformed my workflow! Its intuitive
                            interface and powerful features make tasks a breeze. A game-changer
                            for productivity!
                        </p>
                        <!-- avatar & rating -->
                        <div class="flex flex-col-reverse md:flex-row md:items-center mt-8 justify-between gap-6">
                            <!-- avatar & title -->
                            <div class="flex items-center gap-2">
                                <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-1.webp" class="size-10 rounded-full object-cover" alt="avatar" />
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Bob Johnson</h3>
                                    <span class="text-xs">CEO - TechNova</span>
                                </div>
                            </div>
                            <!-- Rating -->
                            <div class="flex items-center gap-1">
                                <span class="sr-only">Rated 4 stars</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-amber-500" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-on-surface/50 dark:text-on-surface-dark/50" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Galeri -->
            <section class="h-full pt-6">

                <h1 class="text-gray-600 mb-2 text-3xl font-bold">
                    Galeri
                </h1>
                <p class="text-gray-700">
                    Dokumentasi kegiatan, kelas, dan acara komunitas
                    dalam bentuk foto dan video.
                </p>
                <!-- Grid Container -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 p-5">

                    <!-- Baris 1 -->
                    <div class="lg:col-span-5 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1516541196182-6bdb0516ed27?auto=format&fit=crop&w=800" alt="Chains" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="text-sm border border-white p-2">VIEW PHOTO</span>
                        </div>
                    </div>

                    <div class="lg:col-span-3 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1470770903676-69b98201ea1c?auto=format&fit=crop&w=800" alt="Abstract B&W" class="w-full h-64 object-cover">
                    </div>

                    <div class="lg:col-span-4 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1496307653780-42ee777d4833?auto=format&fit=crop&w=800" alt="Hallway" class="w-full h-64 object-cover">
                    </div>

                    <!-- Baris 2 -->
                    <div class="lg:col-span-3 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1500673922987-e212871fec22?auto=format&fit=crop&w=800" alt="Aquarium" class="w-full h-60 object-cover">
                    </div>

                    <div class="lg:col-span-3 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1534802046520-4f27db7f3ae5?auto=format&fit=crop&w=800" alt="Cable Cars" class="w-full h-60 object-cover">
                    </div>

                    <div class="lg:col-span-3 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800" alt="Road" class="w-full h-60 object-cover">
                    </div>

                    <div class="lg:col-span-3 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1520156555841-7cba49af6642?auto=format&fit=crop&w=800" alt="Spiral Stairs" class="w-full h-60 object-cover">
                    </div>

                    <!-- Baris 3 -->
                    <div class="lg:col-span-4 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1449034446853-66c86144b0ad?auto=format&fit=crop&w=800" alt="San Francisco" class="w-full h-72 object-cover">
                    </div>

                    <div class="lg:col-span-5 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?auto=format&fit=crop&w=800" alt="City Perspective" class="w-full h-72 object-cover">
                    </div>

                    <div class="lg:col-span-3 gallery-item overflow-hidden rounded-sm relative group">
                        <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&w=800" alt="Bottles" class="w-full h-72 object-cover">
                    </div>

                </div>
            </section>

            <!-- Media -->
            <section class="h-full pt-6">

                <h1 class="text-gray-600 mb-2 text-3xl font-bold">
                    Siaran Pers Media
                </h1>
                <p class="text-gray-700">
                    Publikasi dan liputan media terkait kegiatan
                    dan kerja sama lembaga.
                </p>
                <div class="max-w-3xl space-y-8 p-5">

                    <!-- Berita 1 -->
                    <div class="flex gap-4 items-start cursor-pointer group">
                        <div class="w-1/3 shrink-0">
                            <img src="/images/happy-team-working-office.jpg"
                                alt="Tol Jakarta"
                                class="rounded-xl aspect-video object-cover w-full">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg md:text-xl font-bold leading-tight group-hover:underline">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.
                            </h2>
                            <p class="text-gray-400 text-sm mt-2 flex items-center gap-2">
                                News <span class="text-[10px]">•</span> 1 jam lalu
                            </p>
                        </div>
                    </div>

                    <!-- Berita 2 -->
                    <div class="flex gap-4 items-start cursor-pointer group">
                        <div class="w-1/3 shrink-0">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=500&auto=format&fit=crop"
                                alt="Prabowo"
                                class="rounded-xl aspect-video object-cover w-full">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg md:text-xl font-bold leading-tight group-hover:underline">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.
                            </h2>
                            <p class="text-gray-400 text-sm mt-2 flex items-center gap-2">
                                News <span class="text-[10px]">•</span> 57 menit lalu
                            </p>
                        </div>
                    </div>

                    <!-- Berita 3 -->
                    <div class="flex gap-4 items-start cursor-pointer group">
                        <div class="w-1/3 shrink-0 relative">
                            <img src="/images/happy-team-working-office.jpg"
                                alt="Listrik"
                                class="rounded-xl aspect-video object-cover w-full">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg md:text-xl font-bold leading-tight group-hover:underline">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.
                            </h2>
                            <p class="text-gray-400 text-sm mt-2 flex items-center gap-2">
                                Prov <span class="text-[10px]">•</span> 56 menit lalu
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Q&A -->
            <section class="h-full pt-6">
                <h1 class="text-gray-600 mb-2 text-3xl font-bold">
                    Tanya Jawab (Q&amp;A)
                </h1>
                <p class="text-gray-700">
                    Ruang diskusi dan tanya jawab terkait program,
                    pendaftaran, dan komunitas.
                </p>
                <div class="flex w-full flex-col gap-4 text-on-surface dark:text-on-surface-dark p-5">
                    <div x-data="{ isExpanded: false }" class="overflow-hidden rounded-radius border border-outline bg-surface-alt/40 dark:border-outline-dark dark:bg-surface-dark-alt/50">
                        <button id="controlsAccordionItemOne" type="button" class="flex w-full items-center justify-between gap-2 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75" aria-controls="accordionItemOne" x-on:click="isExpanded = ! isExpanded" x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold'  : 'text-on-surface dark:text-on-surface-dark font-medium'" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                            What browsers are supported?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" x-bind:class="isExpanded  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
                            <div class="p-4 text-sm sm:text-base text-pretty">
                                Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check our <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">documentation</a> for additional information.
                            </div>
                        </div>
                    </div>
                    <div x-data="{ isExpanded: false }" class="overflow-hidden rounded-radius border border-outline bg-surface-alt/40 dark:border-outline-dark dark:bg-surface-dark-alt/50">
                        <button id="controlsAccordionItemTwo" type="button" class="flex w-full items-center justify-between gap-2 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75" aria-controls="accordionItemTwo" x-on:click="isExpanded = ! isExpanded" x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold'  : 'text-on-surface dark:text-on-surface-dark font-medium'" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                            How can I contact customer support?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" x-bind:class="isExpanded  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region" aria-labelledby="controlsAccordionItemTwo" x-collapse>
                            <div class="p-4 text-sm sm:text-base text-pretty">
                                Reach out to our dedicated support team via email at <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">support@example.com</a> or call our toll-free number at 1-800-123-4567 during business hours.
                            </div>
                        </div>
                    </div>
                    <div x-data="{ isExpanded: false }" class="overflow-hidden rounded-radius border border-outline bg-surface-alt/40 dark:border-outline-dark dark:bg-surface-dark-alt/50">
                        <button id="controlsAccordionItemThree" type="button" class="flex w-full items-center justify-between gap-2 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75" aria-controls="accordionItemThree" x-on:click="isExpanded = ! isExpanded" x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold'  : 'text-on-surface dark:text-on-surface-dark font-medium'" x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                            What is the refund policy?
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" x-bind:class="isExpanded  ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region" aria-labelledby="controlsAccordionItemThree" x-collapse>
                            <div class="p-4 text-sm sm:text-base text-pretty">
                                Please refer to our <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">refund policy page</a> on the website for detailed information regarding eligibility, timeframes, and the process for requesting a refund.
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>

    </main>
    <footer
        class="pt-12.5 pb-7 px-5 bg-[radial-gradient(circle_at_100%_180%,#6D2A3A_0%,#30283F_20%,#1B2740_95%)]">
        <div class="grid grid-cols-3">
            <div class="col-span-3">
                <div class="pb-7">
                    <img
                        src="image_samples/logo design new 2.png"
                        class="w-80 md:w-74 m-auto" />
                </div>
                <ul class="md:flex md:justify-between md:w-150 md:m-auto">
                    <li class="pb-3">
                        <a href="#" class="block text-center text-white">Home</a>
                    </li>
                    <li class="pb-3">
                        <a href="#" class="block text-center text-white">Tentang Akademi</a>
                    </li>
                    <li class="pb-3">
                        <a href="#" class="block text-center text-white">Program</a>
                    </li>
                    <li class="pb-3">
                        <a href="#" class="block text-center text-white">Komunitas</a>
                    </li>
                    <li>
                        <a href="#" class="block text-center text-white">Ketentuan Privasi dan Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="py-6.5"></div>
        <p class="text-[#e54595] font-semibold text-center text-sm">
            &copy;2026 DreamHangul Akademi
        </p>
    </footer>
</body>

</html>