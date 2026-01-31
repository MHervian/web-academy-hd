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
		<h1 class="py-6 text-white text-4xl"><?= lang('Member.account') ?></h1>
	</div>


	<div class="max-w-5xl mx-auto p-5">
		<div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
			<label for="textInputDefault" class="w-fit pl-0.5 text-sm"><?= lang('Member.full_name') ?></label>
			<input id="textInputDefault" disabled value="<?= $data['username'] ?>" type="text" class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="name" placeholder="Enter your name" autocomplete="name" />
		</div>

		<div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
			<label for="textInputDefault" class="w-fit pl-0.5 text-sm"><?= lang('Member.email_address') ?></label>
			<input id="textInputDefault" disabled value="<?= $data['email'] ?>" type="text" class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="name" placeholder="Enter your name" autocomplete="name" />
		</div>
		<div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
			<label for="textInputDefault" class="w-fit pl-0.5 text-sm"><?= lang('Member.account_type') ?></label>
			<input id="textInputDefault" disabled value="<?= $data['metode'] ?>" type="text" class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="name" placeholder="Enter your name" autocomplete="name" />
		</div>


	</div>




	<div class="px-5 py-5 bottom absolute inset-x-0 bottom-0">
		<p class="text-center">&copy; Dream Korean Language Learning Center</p>
	</div>
</body>

</html>