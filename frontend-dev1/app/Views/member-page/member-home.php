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

	<div class="px-6 md:px-7 pt-25 pb-7 bg-[#19253f]">
		<h1 class="py-6 text-white text-4xl"><?= lang('Member.student_dashboard') ?></h1>
	</div>

	<div class="px-6 md:px-7 py-6 bg-gray-50">
		<!-- GREETING -->
		<h2 class="text-xl font-semibold mb-6">
			<?= lang('Member.welcome') ?> 👋
		</h2>

		<!-- GRID -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

			<!-- PROGRES KELAS -->
			<div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-6">
				<div class="flex items-center gap-4">
					<div class="bg-indigo-100 text-indigo-600 p-3 rounded-lg text-xl">📘</div>
					<div>
						<h3 class="font-semibold text-lg"><?= lang('Member.class_progress') ?></h3>
						<p class="text-gray-500 text-sm"><?= lang('Member.not_enrolled') ?></p>
					</div>
				</div>

				<div class="mt-6 text-center text-gray-400">
					<p class="text-3xl">📭</p>
					<p class="text-sm mt-2"><?= lang('Member.no_progress_yet') ?></p>
				</div>

				<a href="<?= lang_url('kelas') ?>" class="inline-block mt-6 text-indigo-600 text-sm font-medium">
					<?= lang('Member.view_class') ?> →
				</a>
			</div>

			<!-- JADWAL UJIAN -->
			<div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-6">
				<div class="flex items-center gap-4">
					<div class="bg-emerald-100 text-emerald-600 p-3 rounded-lg text-xl">📝</div>
					<div>
						<h3 class="font-semibold text-lg"><?= lang('Member.exam_schedule') ?></h3>
						<p class="text-gray-500 text-sm"><?= lang('Member.no_exam_schedule') ?></p>
					</div>
				</div>

				<div class="mt-6 text-center text-gray-400">
					<p class="text-3xl">🗓️</p>
					<p class="text-sm mt-2"><?= lang('Member.schedule_still_empty') ?></p>
				</div>
			</div>

			<!-- FORUM -->
			<div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-6">
				<div class="flex items-center gap-4">
					<div class="bg-blue-100 text-blue-600 p-3 rounded-lg text-xl">💬</div>
					<div>
						<h3 class="font-semibold text-lg"><?= lang('Member.forum') ?></h3>
						<p class="text-gray-500 text-sm"><?= lang('Member.no_forum_posts') ?></p>
					</div>
				</div>

				<div class="mt-6 text-center text-gray-400">
					<p class="text-3xl">📢</p>
					<p class="text-sm mt-2"><?= lang('Member.no_forum_posts_yet') ?></p>
				</div>

				<a href="<?= lang_url('coming-soon-dashboard') ?>" class="inline-block mt-6 text-blue-600 text-sm font-medium">
					<?= lang('Member.enter_forum') ?> →
				</a>
			</div>

			<!-- PENGUMUMAN -->
			<div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-6">
				<div class="flex items-center gap-4">
					<div class="bg-orange-100 text-orange-600 p-3 rounded-lg text-xl">📣</div>
					<div>
						<h3 class="font-semibold text-lg"><?= lang('Member.announcement') ?></h3>
						<p class="text-gray-500 text-sm"><?= lang('Member.no_announcement') ?></p>
					</div>
				</div>

				<div class="mt-6 text-center text-gray-400">
					<p class="text-3xl">🔔</p>
					<p class="text-sm mt-2"><?= lang('Member.no_new_information') ?></p>
				</div>
			</div>

		</div>
	</div>

	<div class="px-5 py-5">
		<p class="text-center">&copy;DreamTemplate 2026</p>
	</div>
</body>

</html>