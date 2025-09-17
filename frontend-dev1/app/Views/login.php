<!DOCTYPE html>
<html lang="id">

<head>
	<title>Login - DreamTemplate</title>
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

	<!-- Login CSS -->
	<link rel="stylesheet" href="/css/login.css" />

</head>

<body>
	<div class="container p-0">
		<div class="image-side"></div>
		<div class="form-side">
			<div class="form-box">
				<h2>Login Member</h2>
				<form>
					<input type="email" placeholder="Email" required>
					<input type="password" placeholder="Password" required>
					<a href="<?= url_to('beranda-member') ?>" type="button" class="btn-login text-white">Login</a>
				</form>
				<button class="btn-fb"><span class="ti-facebook"></span> Login with Facebook</button>
				<button class="btn-google"><span class="ti-google"></span> Login with Google</button>
				<button class="btn-ig"><span class="ti-instagram"></span> Login with Instagram</button>
				<p>Belum punya akun? <a href="<?= url_to('registrasi') ?>" class="inline-a">Registrasi</a></p>
			</div>
		</div>
	</div>
</body>

</html>