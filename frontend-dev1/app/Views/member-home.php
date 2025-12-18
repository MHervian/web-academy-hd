<!doctype html>
<html>

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

	<?= $this->include('header') ?>

	<div class="px-6 md:px-7 pt-25 pb-7 bg-[#19253f]">
		<h1 class="py-6 text-white text-4xl">Dashboard Pelajar</h1>
	</div>

	<div class="px-6 md:px-7 py-6 bg-gray-50">
		<p class="text-3xl">Selamat Datang! 👋</p>
		<div class="py-5"></div>
		<div class="md:grid md:grid-cols-2 md:gap-y-8 md:gap-x-5">
			<div class="col-span-1 px-4.5 py-6 bg-white shadow-md rounded-md">
				<h3 class="text-2xl font-bold">Progress Kelas</h3>
				<p class="py-5">Belum Daftar Kelas</p>
			</div>
			<div class="py-4 md:hidden"></div>
			<div class="col-span-1 px-4.5 py-6 bg-white shadow-md rounded-md">
				<h3 class="text-2xl font-bold">Jadwal Ujian</h3>
				<p class="py-5">Jadwal Kosong</p>
			</div>
			<div class="py-4 md:hidden"></div>
			<div class="col-span-1 px-4.5 py-6 bg-white shadow-md rounded-md">
				<h3 class="text-2xl font-bold">Forum</h3>
				<p class="py-5">Belum Posting di Forum</p>
			</div>
			<div class="py-4 md:hidden"></div>
			<div class="col-span-1 px-4.5 py-6 bg-white shadow-md rounded-md">
				<h3 class="text-2xl font-bold">Pengumuman</h3>
				<p class="py-5">Belum Ada Pengumuman</p>
			</div>
		</div>
		<div class="py-5"></div>
	</div>

	<div class="px-5 py-5">
		<p class="text-center">&copy;DreamTemplate 2026</p>
	</div>
</body>

</html>