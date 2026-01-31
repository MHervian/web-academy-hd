<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="robots" content="noindex, nofollow">
	<title>Sertifikat - HangulDream</title>

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
	<!-- Tailwind CSS -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
	<link rel="stylesheet" href="<?= base_url('css/output.css') ?>" />
	<!-- Alpine -->
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.15.3/dist/cdn.min.js"></script>

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
		<h1 class="py-6 text-white text-4xl"><?= lang('Member.certificate') ?></h1>
	</div>

	<div class="py-5"></div>

	<div x-data='{ 
	data: <?= json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>
 	}'>
		<template x-if="data.length == 0">
			<div class="px-6 md:px-7 py-6 bg-gray-50">
				<div class="py-5"></div>
				<p class="text-2xl">Sertifikat Kosong.</p>
				<div class="py-5"></div>
				<div class="py-5"></div>
			</div>
		</template>
		<template x-if="data.length > 0">
			<div class="overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark">
				<table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">

					<thead class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
						<tr>
							<th class="p-4"><?= lang('Member.no') ?></th>
							<th class="p-4"><?= lang('Member.participant_name') ?></th>
							<!-- <th class="p-4"><?= lang('Member.program') ?></th> -->
							<th class="p-4"><?= lang('Member.certificate_number') ?></th>
							<!-- <th class="p-4"><?= lang('Member.duration_hours') ?></th> -->
							<th class="p-4"><?= lang('Member.action') ?></th>
						</tr>
					</thead>

					<tbody class="divide-y divide-outline dark:divide-outline-dark">
						<template x-for="(item, index) in data" :key="item.noSertifikat">
							<tr>
								<td class="p-4" x-text="index + 1"></td>
								<td class="p-4" x-text="item.nama_peserta"></td>
								<!-- <td class="p-4" x-text="item.program"></td> -->
								<td class="p-4 font-mono" x-text="item.noSertifikat"></td>
								<!-- <td class="p-4" x-text="item.durasi_jam"></td> -->
								<td class="p-4">
									<a
										:href="item.file_pdf"
										target="_blank"
										class="whitespace-nowrap rounded-radius bg-transparent p-0.5 font-semibold text-primary hover:opacity-75">
										Download PDF
									</a>
								</td>
							</tr>
						</template>
					</tbody>

				</table>
			</div>
		</template>


	</div>


	<div class="px-5 py-5">
		<p class="text-center">&copy; Dream Korean Language Learning Center</p>
	</div>
</body>

</html>