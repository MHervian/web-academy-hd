<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="robots" content="noindex, nofollow">
	<title>Notifikasi - HangulDream</title>

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
	<!-- Tailwind CSS -->
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<!-- <link rel="stylesheet" href="<?= base_url('css/output.css') ?>" /> -->
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

	<div class="px-6 md:px-7 pt-25 pb-7 bg-[#19253f]">
		<h1 class="py-6 text-white text-4xl">Notifikasi Detail</h1>
	</div>

	<a href="<?= base_url('notifikasi') ?>"
		class="flex m-3 p-2 items-center gap-2 text-gray-700 hover:text-blue-600">
		<i class="fa fa-arrow-left" aria-hidden="true"></i>
		<span class="font-medium">Back</span>
	</a>


	<div class="m-5 p-5 bg-gray-100 rounded-md">
		<h1 class="font-bold"><?= $detail['judul'] ?></h1>
	</div>

	<div class="m-5 p-5 bg-gray-100 rounded-md">
		<h1 class="font-bold"><?= $detail['deskripsi'] ?></h1>
	</div>


	<div class="px-5 py-5 bottom absolute inset-x-0 bottom-0">
		<p class="text-center">&copy;DreamTemplate 2026</p>
	</div>
</body>

</html>