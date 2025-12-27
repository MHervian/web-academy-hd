<!DOCTYPE html>
<html lang="en">

<head>
	<title>DreamTemplate</title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Font -->
	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<!-- Themify Icons -->
	<link rel="stylesheet" href="<?= base_url('css/themify-icons.css') ?>" />
	<!-- Owl carousel -->
	<link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>" />
	<!-- Main css -->
	<link href="<?= base_url('css/style.css') ?>" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
	<!-- Nav Menu -->

	<div class="nav-menu fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-dark navbar-expand-lg">
						<a class="navbar-brand-small" href="<?= url_to('beranda') ?>">
							<img src="images/logo_only.png" style="height: 45px; width: 45px;" />
						</a>
						<a class="navbar-brand-big" href="<?= url_to('beranda') ?>">
							<img src="images/logo-long.png" style="height: 85px; width: 259px;" />
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
							aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbar">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link active" href="#beranda">BERANDA <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#fasilitas">FASILITAS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#program">PROGRAM</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#komunitas">KOMUNITAS</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('auth/login') ?>"
										class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Daftar</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<header class="bg-gradient" id="beranda">
		<div class="container mt-5 pt-5">
			<div class="row">
				<div class="col-12">
					<div class="text-center">
						<h1>Selamat Datang!</h1>
						<p class="tagline">
							Kami Dream Korean Language Learning Center menghadirkan program belajar bahasa Korea
							bagi generasi muda Indonesia dengan biaya terjangkau dan pengajaran berkualitas —
							mulai dari persiapan TOPIK hingga program spesialis calon guru bahasa Korea.
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="section light-bg" id="fasilitas">
		<div class="container">
			<div class="section-title pt-5">
				<h3>Belajar Efektif, Raih Masa Depan</h3>
				<p>
					Dengan kurikulum terstruktur, persiapan TOPIK intensif, dan bimbingan pengajar profesional,
					setiap langkah belajarmu diarahkan untuk mencapai sertifikasi dan peluang baru di Korea.
				</p>
			</div>

			<div class="row">
				<div class="col-12 col-lg-4">
					<div class="card features">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<h4 class="card-title">Kursus Spesialis Bahasa Korea</h4>
									<p class="card-text">
										Kurikulum bahasa Korea disusun secara sistematis dengan bahan ajar
										yang dikembangkan oleh kami, berlandaskan pengalaman, penelitian, dan kerjasama dengan
										Departemen Bahasa Korea Universitas Indonesia (UI). Kami menghadirkan media belajar yang sesuai
										dengan tingkat dan kebutuhan peserta, sehingga proses belajar menjadi lebih efektif.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="card features">
						<div class="card-body">
							<div class="media">
								<!-- <span class="ti-settings gradient-fill ti-3x mr-3"></span> -->
								<div class="media-body">
									<h4 class="card-title">Kursus Persiapan Ujian TOPIK</h4>
									<p class="card-text">
										Kami menyediakan pelatihan intensif untuk membantumu meraih TOPIK Level 3 atau 4
										— syarat utama untuk melanjutkan studi ke Korea maupun bekerja di perusahaan Korea.
										Dengan metode yang fokus dan terarah, peserta dapat mempersiapkan diri dalam waktu relatif singkat.
										Pada akhir program, setiap peserta akan menjalani evaluasi kemajuan, dan yang berhasil memenuhi
										kriteria kelulusan akan menerima sertifikat resmi
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="card features">
						<div class="card-body">
							<div class="media">
								<!-- <span class="ti-lock gradient-fill ti-3x mr-3"></span> -->
								<div class="media-body">
									<h4 class="card-title">Tenaga Pengajar Profesional</h4>
									<p class="card-text">
										Pengajaran didukung oleh instruktur bergelar magister dan doktor di bidang bahasa Korea,
										yang berpengalaman luas dalam pendidikan bahasa. Mereka terus mengembangkan metode dan materi
										agar pembelajaran lebih efektif, sekaligus membimbing peserta hingga berhasil menyelesaikan kursus.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // end .section -->

	<div class="section pt-5" id="program">
		<div class="container">
			<div class="section-title pt-5">
				<h3>Program Kami</h3>
			</div>

			<div class="row pt-4">
				<div class="col-md-4 pb-5">
					<p>
						Setiap program kami rancang sesuai dengan fase perjalanan belajarmu.
						Mulai dari level dasar, persiapan ujian TOPIK, kursus spesialis, hingga program
						untuk calon pengajar bahasa Korea profesional.
					</p>
					<a href="404.html" class="btn btn-primary">Lihat Semua Kelas</a>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-lg-6">
							<div class="card features">
								<div class="card-body">
									<div class="media">
										<div class="media-body">
											<h4 class="card-title">Program Pelatihan Guru Bahasa Korea (Spesialis)</h4>
											<ul style="padding-left: 1rem;">
												<li>Overview Kelas</li>
												<li>Kurikulum Kelas</li>
												<li>Pengenalan Instruktur</li>
												<li>Jadwal Kelas</li>
												<li>Aturan dan Kebijakan Pengembalian Dana</li>
											</ul>
											<a href="course.html" style="font-size: 1rem;">Detail Program &Rarr;</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card features">
								<div class="card-body">
									<div class="media">
										<div class="media-body">
											<h4 class="card-title">Pelatihan Persiapan TOPIK</h4>
											<ul style="padding-left: 1rem;">
												<li>Overview Kelas</li>
												<li>Kurikulum Kelas</li>
												<li>Pengenalan Instruktur</li>
												<li>Jadwal Kelas</li>
												<li>Aturan dan Kebijakan Pengembalian Dana</li>
											</ul>
											<a href="course.html" style="font-size: 1rem;">Detail Program &Rarr;</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 my-4"></div>
						<div class="col-lg-6">
							<div class="card features">
								<div class="card-body">
									<div class="media">
										<div class="media-body">
											<h4 class="card-title">Program Kursus</h4>
											<p>Kursus Bahasa Korea untuk Tujuan Khusus.</p>
											<span>Isi Pelatihan</span>
											<ul style="padding-left: 1rem;">
												<li>Bahasa Korea dasar serta Bahasa Korea untuk bidang khusus</li>
											</ul>
											<span>Waktu Pelatihan</span>
											<ul style="padding-left: 1rem;">
												<li>Ditentukan dengan mempertimbangkan tingkat kemampuan peserta</li>
											</ul>
											<span>Kriteria Kelulusan</span>
											<ul style="padding-left: 1rem;">
												<li>Kehadiran minimal 80%</li>
												<li>Nilai ujian minimal 60 poin</li>
											</ul>
											<a href="course.html" style="font-size: 1rem;">Detail Program &Rarr;</a>
										</div>
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

	<div class="section py-2" id="komunitas">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-6 pb-5 text-center">
					<img src="<?= base_url('images/community.png') ?>" class="mt-4" style="width: 75%;" />
				</div>
				<div class="col-md-6">
					<h3>Komunitas Dream Hangul</h3>
					<p>
						Bergabunglah dengan forum kami di Komunitas Dream Korean. Di sini Anda
						bisa mengikuti info terbaru, mengakses materi belajar, mengetahui info
						acara, hingga seru-seruan menikmati galeri kegiatan. Tempat ini hadir
						untuk saling terhubung, berbagi, dan membuka peluang baru bersama.
					</p>
					<a href="bulletin.html" class="btn btn-primary">Jelajahi Forum Kami</a>
				</div>
			</div>
		</div>
	</div>

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
						<a href="#"><span class="ti-facebook"></span></a>
						<a href="#"><span class="ti-twitter-alt"></span></a>
						<a href="#"><span class="ti-instagram"></span></a>
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
			<a href="#" class="m-2">PRESS</a>
			<a href="#" class="m-2">TERMS</a>
			<a href="#" class="m-2">PRIVACY</a>
			<a href="#" class="m-2">REGISTRASI</a>
			<a href="#" class="m-2">KONTAK</a>
			<a href="#" class="m-2">TENTANG KAMI</a>
		</small>
	</footer>

	<!-- jQuery and Bootstrap -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- Plugins JS -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Custom JS -->
	<script src="js/script.js"></script>
</body>

</html>