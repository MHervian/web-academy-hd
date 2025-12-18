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
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<!-- Themify Icons -->
	<link rel="stylesheet" href="/css/themify-icons.css" />

	<!-- Main css -->
	<link href="/css/style.css" rel="stylesheet" />

	<!-- Student Dashboard CSS -->
	<link rel="stylesheet" href="/css/student-dashboard.css" />
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
	<header>
		<div class="logo">
			<a href="index.html">
				<img src="images/hanguldream.png"
					style="width: 50px; 
						height: 50px; 
						background-color: white; 
						border-radius: 50%;" />
			</a>
		</div>
		<!-- <div class="collapse navbar" id="navbar"> -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?= url_to('beranda') ?>" style="color: black;">BERANDA</a>
			</li>
		</ul>
		<!-- </div> -->
	</header>
	<a href="<?= url_to('beranda') ?>" class="back">&larr; Kembali ke Beranda</a>
	<div class="container" style="height: 80vh;">
		<div class="content-404" style="height: 100%; text-align: center;">
			<h1>Coming Soon</h1>
		</div>
	</div>
</body>

</html>