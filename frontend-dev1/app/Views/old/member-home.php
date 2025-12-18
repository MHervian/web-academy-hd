<!DOCTYPE html>
<html lang="id">

<head>
	<title>Member Beranda - DreamTemplate</title>
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

	<!-- Student Dashboard CSS -->
	<link rel="stylesheet" href="/css/student-dashboard.css" />
</head>

<body>
	<header>
		<div class="logo"><a href="<?= url_to('beranda-member') ?>">DreamTemplate</a></div>
		<nav>
			<ul>
				<li><a href="<?= url_to('coming-soon') ?>">Belajar</a></li>
				<li><a href="<?= url_to('sertifikat') ?>">Sertifikat</a></li>
				<li><a href="<?= url_to('coming-soon') ?>">Bulletin</a></li>
				<li><a href="<?= url_to('notifikasi') ?>">Notifikasi</a></li>
				<li><a href="<?= url_to('coming-soon') ?>">Akun</a></li>
			</ul>
		</nav>
	</header>

	<section class="hero">
		<div class="container px-5">
			<h2>Welcome Back &#x1F44B;</h2>
			<div class="hero-card">
				<p>Progress Terakhir:</p>
				<h4>Business English</h4>
				<p>Kategori: Intermediate</p>
				<div class="course-progress">
					<div class="progress"></div>
				</div>
				<div class="buttons">
					<a href="<?= url_to('coming-soon') ?>" class="btn-continue">Lanjutkan</a>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<section class="section">
			<div class="section-left">
				<h2>Kelas Saya</h2>
				<div class="course-card">
					<h3>Grammar Essentials</h3>
					<p>Kategori: Beginner</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel orci non libero.</p>
					<div class="course-progress">
						<div class="completed"></div>
					</div>
					<div class="buttons">
						<a href="<?= url_to('coming-soon') ?>" class="btn-continue">Detail</a>
						<a href="data-dummy/course_certificate.pdf" class="btn-certificate">Cetak Sertifikat</a>
					</div>
				</div>
				<div class="course-card">
					<h3>Business English</h3>
					<p>Kategori: Intermediate</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel orci non libero.</p>
					<div class="course-progress">
						<div class="progress"></div>
					</div>
					<div class="buttons">
						<a href="<?= url_to('coming-soon') ?>" class="btn-continue">Lanjutkan</a>
					</div>
				</div>
			</div>
			<!-- <div class="section-right">
        <div class="progress-list">
          <div class="item">
            <h4>Grammar Essentials</h4>
            <div class="progress-bar"><div class="progress" style="width:40%"></div></div>
          </div>
          <div class="item">
            <h4>Business English</h4>
            <div class="progress-bar"><div class="progress" style="width:75%"></div></div>
          </div>
          <div class="item">
            <h4>English Conversation Practice</h4>
            <div class="progress-bar"><div class="progress" style="width:60%"></div></div>
          </div>
        </div>
      </div> -->
		</section>
	</div>

	<div class="container">

		<section class="all-courses">
			<h2>Semua Kelas</h2>
			<div class="course-grid">
				<div class="course-card">
					<h3>Grammar Essentials</h3>
					<p>Kategori: Beginner</p>
					<div class="buttons" style="margin-top: 20px;">
						<a href="<?= url_to('coming-soon') ?>" class="btn-continue mb-2">Detail</a>
						<a href="/data-dummy/course_curriculum.pdf" class="btn-certificate mb-2">Unduh Kurikulum</a>
					</div>
				</div>
				<div class="course-card">
					<h3>Business English</h3>
					<p>Kategori: Intermediate</p>
					<div class="buttons" style="margin-top: 20px;">
						<a href="<?= url_to('coming-soon') ?>" class="btn-continue mb-2">Detail</a>
						<a href="/data-dummy/course_curriculum.pdf" class="btn-certificate mb-2">Unduh Kurikulum</a>
					</div>
				</div>
				<div class="course-card">
					<h3>English Conversation Practice</h3>
					<p>Kategori: Intermediate</p>
					<div class="buttons" style="margin-top: 20px;">
						<a href="<?= url_to('coming-soon') ?>" class="btn-continue mb-2">Detail</a>
						<a href="/data-dummy/course_curriculum.pdf" class="btn-certificate mb-2">Unduh Kurikulum</a>
					</div>
				</div>
				<div class="course-card">
					<h3>Writing for Academic</h3>
					<p>Kategori: Advanced</p>
					<div class="buttons" style="margin-top: 20px;">
						<a href="<?= url_to('coming-soon') ?>" class="btn-continue mb-2">Detail</a>
						<a href="/data-dummy/course_curriculum.pdf" class="btn-certificate mb-2">Unduh Kurikulum</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<footer>
		<div class="mb-4">
			<a href="<?= url_to('coming-soon') ?>">HOME</a> |
			<a href="<?= url_to('coming-soon') ?>">PRIVACY</a> |
			<a href="<?= url_to('coming-soon') ?>">MY LEARNING</a> |
			<a href="<?= url_to('coming-soon') ?>">ACCOUNT</a> |
			<a href="<?= url_to('coming-soon') ?>">CONTACT</a>
		</div>
		<p>&copy; 2025 DreamTemplate. All Rights Reserved.</p>
	</footer>
</body>

</html>