<!DOCTYPE html>
<html lang="id">

<head>
	<title>Registrasi - DreamTemplate</title>

	<meta charset="UTF-8" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Font -->
	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<!-- Themify Icons -->
	<link rel="stylesheet" href="/css/themify-icons.css" />

	<!-- Registration css-->
	<link rel="stylesheet" href="/css/registration.css" />

</head>

<body>
	<div class="container p-0">
		<div class="image-side"></div>
		<div class="form-side">
			<div class="form-box">
				<h2>Daftar Member</h2>
				<form>
					<input type="text" placeholder="Nama Lengkap" required>
					<input type="email" placeholder="Email" required>
					<input type="password" placeholder="Password" required>
					<input type="password" placeholder="Konfirmasi Password" required>
					<a href="<?= url_to('coming-soon') ?>" type="button" class="btn-register text-white" type="submit">Daftar</a>
				</form>
				<a class="btn-fb text-white"><span class="ti-facebook"></span> Daftar dengan Facebook</a>
				<a class="btn-google text-white"><span class="ti-google"></span> Daftar dengan Google</a>
				<a class="btn-ig text-white"><span class="ti-instagram"></span> Daftar dengan Instagram</a>
				<p>Sudah punya akun? <a href="<?= url_to('login') ?>" class="inline-a">Login</a></p>
			</div>
		</div>
	</div>
</body>

</html>