<!DOCTYPE html>
<html lang="en">
<!--

Page    : index / MobApp
Version : 1.0
Author  : Colorlib
URI     : https://colorlib.com

 -->

<head>
	<title>Course Pelatihan TOPIK - DreamTemplate</title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Font -->
	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<!-- Themify Icons -->
	<link rel="stylesheet" href="/css/themify-icons.css" />
	<!-- Owl carousel -->
	<link rel="stylesheet" href="/css/owl.carousel.min.css" />
	<!-- Main css -->
	<link href="/css/style.css" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
	<!-- Nav Menu -->

	<div class="nav-menu fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-dark navbar-expand-lg">
						<a class="navbar-brand" href="<?= url_to('beranda') ?>">
							<img src="images/hanguldream.png"
								style="width: 50px; height: 50px; background-color: white; border-radius: 50%;" />
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
							aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbar">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link active" href="<?= url_to('beranda') ?>">BERANDA</a>
								</li>
								<li class="nav-item">
									<a href="<?= url_to('registrasi') ?>" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Pendaftaran</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<header class="bg-gradient" id="beranda">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12">
					<div class="text-left">
						<h1>Pelatihan Persiapan TOPIK</h1>
						<p class="tagline mx-0">
							Program belajar dan persiapan tes TOPIK 3 dan 4.
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row my-5">
			<div class="col-9">
				<div class="text-left">
					<h3>Deskripsi Program</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatem ipsa perspiciatis rem sunt tenetur culpa.
						Eum velit dicta reprehenderit nobis quod dolorem excepturi eaque impedit? Aliquam at ipsa reprehenderit.
					</p>
					<div class="row">
						<div class="col-3">
							<div class="d-flex align-items-center">
								<span class="ti-timer mr-2" style="font-size: 40px; font-weight: bolder;"></span>
								<span> Sesi 3 Jam</span>
							</div>
						</div>
						<div class="col-4">
							<div class="d-flex align-items-center">
								<span class="ti-agenda mr-2" style="font-size: 40px; font-weight: bolder;"></span>
								<span> 12 Pertemuan</span>
							</div>
						</div>
						<div class="col-3">
							<div class="d-flex align-items-center">
								<span class="ti-book mr-2" style="font-size: 40px; font-weight: bolder;"></span>
								<span>Offline</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="text-left">
					<h5>Unduh Kurikulum</h5>
					<ul>
						<li><a href="#">Kurikulum 2025</a></li>
						<li><a href="#">Kurikulum 2020</a></li>
						<li><a href="#">Kurikulum 2015</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row my-5">
			<div class="col-9">
				<div class="border rounded">
					<div class="d-flex align-items-center p-4">
						<div class="text-left mr-3">
							<h4>Instruktur</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatem ipsa perspiciatis rem sunt tenetur culpa.
								Eum velit dicta reprehenderit nobis quod dolorem excepturi eaque impedit? Aliquam at ipsa reprehenderit.
							</p>
						</div>
						<div>
							<img src="images/person-test.png" class="img-fluid" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="text-left">
					<h5>Unduh Jadwal Program</h5>
					<ul>
						<li><a href="#">10 Agustus - 30 September</a></li>
						<li><a href="#">09 Mei - 30 Juni</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="section light-bg" id="fasilitas">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<h3>Daftar Kelas</h3>
					<p>Silahkan isi formulir di bawah untuk ikut program. Jadwal bisa dilihat dari file pdf disamping.</p>
					<div class="card-body">
						<form>
							<!-- Nama Member -->
							<div class="form-group">
								<label for="namaMember">Nama Member</label>
								<input type="text" class="form-control" id="namaMember" placeholder="Masukkan nama lengkap">
							</div>

							<!-- Email Member -->
							<div class="form-group">
								<label for="emailMember">Email Member</label>
								<input type="email" class="form-control" id="emailMember" placeholder="Masukkan email">
							</div>

							<!-- Dropdown Jadwal -->
							<div class="form-group">
								<label for="jadwalKelas">Pilih Jadwal Kelas</label>
								<select class="form-control" id="jadwalKelas">
									<option selected disabled>-- Pilih Jadwal --</option>
									<option value="senin">Senin, 08:00 - 10:00</option>
									<option value="rabu">Rabu, 13:00 - 15:00</option>
									<option value="jumat">Jumat, 19:00 - 21:00</option>
								</select>
							</div>

							<!-- Checkbox Terms -->
							<div class="form-check mb-3">
								<input type="checkbox" class="form-check-input" id="terms">
								<label class="form-check-label" for="terms">
									Saya bersiap mengikuti semua kegiatan dan aturan yang berlaku dari program ini.
								</label>
							</div>

							<!-- Submit -->
							<button type="submit" class="btn btn-primary">Daftar</button>
						</form>
					</div>
				</div>
				<div class="col-6">
					<div class="container">
						<h2 class="mb-4 text-center">Testimoni Program</h2>

						<!-- Card Testimoni 1 -->
						<div class="card mb-3 px-2">
							<div class="d-flex no-gutters align-items-center">
								<div class="col-auto">
									<img src="images/person-test.png" class="img-fluid" style="width: 100px; height: 100px;" alt="Foto Member" />
								</div>
								<div class="col">
									<div class="card-body">
										<p class="card-text">
											"Program ini sangat membantu saya memahami materi dengan lebih baik.
											Pembelajarannya interaktif dan menyenangkan!"
										</p>
										<small class="text-muted">– Andi, Mahasiswa</small>
									</div>
								</div>
							</div>
						</div>

						<!-- Card Testimoni 2 -->
						<div class="card mb-3 px-2">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<img src="images/person-test.png" class="img-fluid" style="width: 100px; height: 100px;" alt="Foto Member" />
								</div>
								<div class="col">
									<div class="card-body">
										<p class="card-text">
											"Saya merasa lebih percaya diri setelah ikut program ini.
											Materinya jelas dan mudah dipahami."
										</p>
										<small class="text-muted">– Budi, Siswa</small>
									</div>
								</div>
							</div>
						</div>

						<!-- Card Testimoni 3 -->
						<div class="card mb-3 px-2">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<img src="images/person-test.png" class="img-fluid" style="width: 100px; height: 100px;" alt="Foto Member" />
								</div>
								<div class="col">
									<div class="card-body">
										<p class="card-text">
											"Kegiatan ini bukan hanya menambah pengetahuan, tetapi juga membuka peluang baru untuk berjejaring."
										</p>
										<small class="text-muted">– Sinta, Pelajar</small>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // end .section -->

	<div class="light-bg py-5" id="contact">
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left">
					<p class="mb-2">
						<span class="ti-location-pin mr-2"></span> Citywalk,
						Jakarta Selatan, Indonesia
					</p>
					<div class="d-block d-sm-inline-block">
						<p class="mb-2">
							<span class="ti-email mr-2"></span>
							<a class="mr-4" href="mailto:support@mobileapp.com">support@dreamtemplate.xyz</a>
						</p>
					</div>
					<div class="d-block d-sm-inline-block">
						<p class="mb-0">
							<span class="ti-headphone-alt mr-2"></span>
							<!-- <a href="tel:51836362800">518-3636-2800</a> -->
							<a href="tel:09238293">09238293</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="social-icons">
						<a href="<?= url_to('coming-soon') ?>"><span class="ti-facebook"></span></a>
						<a href="<?= url_to('coming-soon') ?>"><span class="ti-twitter-alt"></span></a>
						<a href="<?= url_to('coming-soon') ?>"><span class="ti-instagram"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // end .section -->
	<footer class="my-5 text-center py-5">
		<!-- Copyright removal is not prohibited! -->
		<p class="mb-2">
			<small>COPYRIGHT © 2017. ALL RIGHTS RESERVED. MOBAPP TEMPLATE BY
				<a href="https://colorlib.com">COLORLIB</a></small>
		</p>

		<small>
			<a href="<?= url_to('coming-soon') ?>" class="m-2">PRESS</a>
			<a href="<?= url_to('coming-soon') ?>" class="m-2">TERMS</a>
			<a href="<?= url_to('coming-soon') ?>" class="m-2">PRIVACY</a>
			<a href="<?= url_to('coming-soon') ?>" class="m-2">REGISTRASI</a>
			<a href="<?= url_to('coming-soon') ?>" class="m-2">KONTAK</a>
			<a href="<?= url_to('coming-soon') ?>" class="m-2">TENTANG KAMI</a>
		</small>
	</footer>

	<!-- jQuery and Bootstrap -->
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<!-- Plugins JS -->
	<script src="/js/owl.carousel.min.js"></script>
	<!-- Custom JS -->
	<script src="/js/script.js"></script>
</body>

</html>