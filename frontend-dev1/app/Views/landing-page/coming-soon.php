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

		<a href="<?= url_to('beranda') ?>" class="back">&larr; Kembali ke Beranda</a>
		<div class="container" style="height: 80vh;">
			<div class="content-404" style="height: 100%; text-align: center;">
				<h1>Coming Soon</h1>
			</div>
		</div>
	</main>
</body>

</html>