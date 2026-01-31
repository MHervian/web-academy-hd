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
		<h1 class="py-6 text-white text-4xl"><?= lang('Member.notification') ?></h1>
	</div>

	<?php if (empty($notifikasi)) : ?>
		<div class="px-6 md:px-7 py-6 bg-gray-50">
			<div class="py-5"></div>
			<p class="text-2xl">Notifikasi Kosong.</p>
			<div class="py-5"></div>
			<div class="py-5"></div>
		</div>
	<?php endif; ?>

	<div class="p-5">
		<?php foreach ($notifikasi as $item) { ?>
			<div class="flex p-3 bg-gray-100 m-3 max-w-5xl mx-auto  rounded-md justify-between" onclick="window.location.href='<?= base_url('notifikasi-detail/' . $item['noteId']) ?>'">
				<div class="flex">
					<!-- <div class="p-3">
						<h2>image</h2>
					</div> -->
					<div>
						<h1 class="font-bold"><?= $item['judul'] ?></h1>
						<p><?= $item['deskripsi'] ?></p>
					</div>
				</div>
				<div class="text-right">
					<h5><?= date('H:i', strtotime($item['date_created'])) ?></h5>
					<h5><?= $item['date_post'] ?></h5>
				</div>
			</div>
		<?php } ?>
	</div>




	<div class="px-5 py-5 bottom absolute inset-x-0 bottom-0">
		<p class="text-center">&copy; Dream Korean Language Learning Center</p>
	</div>
</body>

</html>