<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

// Load Composer's autoloader
// require '../vendor/autoload.php';

// Load config
$config = include('../config/app.php');

require '../action/c-trial.php';

$page = 'trial.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" itemprop="description" content="Tidak ada lagi kelonggaran, gunakan dokodemo kerja untuk menyingkirkan karyawan malas dan mempertahankan karyawan terbaik Anda. Hadiahi mereka yang berprestasi dan rasakan peningkatan produktivitas. Gratis uji coba 30 hari dan harga khusus untuk skala perusahaan.">
	<meta name="keywords" content="menyingkirkan karyawan yang berkinerja buruk, menyingkirkan karyawan yang malas, meningkatkan produktivitas, uji coba dokodemo, dokodemo gratis, alat jam gratis, alat manajemen gratis, alat bisnis kecil, alat anggaran rendah, alat anggaran rendah, alat manajemen anggaran rendah, alat manajemen anggaran rendah, uji coba 30 hari, pelacak waktu gratis, pelacak waktu karyawan gratis, pelacak jam kerja gratis, pelacak tangkapan layar, tangkapan layar perangkat lunak monitor karyawan murah">
	<meta name="author" content="PT. Logique Digital Indonesia">
	<meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/header-footer.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="stylesheet" href="/css/style-trial.css" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Dokodemo-Kerja | Trial</title>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-WT4MCDL');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '713777762291663');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=713777762291663&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146404615-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-146404615-1');
	</script>
</head>

<body class="not-home">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT4MCDL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php include 'header.php' ?>
	<section class="intro-section text-center px-4">
		<h1 class="banner-text-white">Coba Demo Gratis Dulu</h1>
		<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" id="btn-demo">Klik Disini</a>
		<a>
			<p class="trial-header-content">Download Dokumentasi Pemakaian Lengkap</p>
		</a>
	</section>
	<!-- <section class="trial-top" id="form-trial">
		<div class="container">
			<div class="row">
				<div class="ls-title col text-center gray fs-30 bold uppercase mt-4">
					Request Trial Gratis
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-8 offset-md-2">

					<?php
					if (!is_null($success)) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							Pesan anda <strong>berhasil</strong> dikirim
						</div>
					<?php } ?>

					<?php
					if (!empty($errors)) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php
								foreach ($errors as $key => $value) {
									echo $value . "<br>";
								}
								?>
						</div>
					<?php } ?>


					<form class="dokodemo-form" action="" method="POST">
						<div class="form-group row align-items-center">
							<label for="name" class="col-sm-3 col-form-label">Nama <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name" value="<?= !empty($errors) ? $_POST['name'] : '' ?>" placeholder="Nama Lengkap" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="company" class="col-sm-3 col-form-label">Perusahaan <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="company" name="company" value="<?= !empty($errors) ? $_POST['company'] : '' ?>" placeholder="Nama Perusahaan" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="Phone" class="col-sm-3 col-form-label">Nomor Telp <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="Phone" name="phone_number" value="<?= !empty($errors) ? $_POST['phone_number'] : '' ?>" placeholder="ex 0833 4075 6762" pattern="[0-9]*" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="inputEmail3" name="email" value="<?= !empty($errors) ? $_POST['email'] : '' ?>" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="domain" class="col-sm-3 col-form-label">Domain</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="domain" name="domain" value="<?= !empty($errors) ? $_POST['domain'] : '' ?>" placeholder="Domain">
							</div>
						</div>
						<div class="form-group row mt-top">
							<div class="col-sm-12 text-center">
								<script src="https://www.google.com/recaptcha/api.js" async defer></script>
								<div class="g-recaptcha" data-sitekey="<?= $config['site_key'] ?>" data-callback="enableBtnTrial"></div>
							</div>
						</div>
						<div class="form-group row mt-top">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-submit" id="submit-btn-trial">
									Kirim
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<br />
			<!-- <div class="semibold fs-18 subtitle-contact" style="margin-bottom:0;">We will set up your trial environment within 3 working days and come back to you with the login info</div> -->
		</div>
	</section> -->
<section id="trial-content">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-6">
					<h3 class="trial-title">Cara Menggunakan Dokodemo-Kerja</h3>
					<iframe src="http://www.youtube.com/embed/W7qWa52k-nE"
   				width="520" height="280" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 download-container">
					<h3 class="download-title">Download Links</h3>
					<a href="https://demo.dokodemo-kerja.com" class="btn btn-download bold uppercase" id="btn-demo"><i class="fa fa-download icon-download"></i>Windows</a>
					<a href="https://demo.dokodemo-kerja.com" class="btn btn-download bold uppercase" id="btn-demo"><i class="fa fa-download icon-download"></i>IOS</a>
					<a href="https://demo.dokodemo-kerja.com" class="btn btn-download bold uppercase" id="btn-demo"><i class="fa fa-download icon-download"></i>Linux</a>
					<a href="pdf/install-guide.pdf" target="_blank" aria-label="Install Guide" class="dl-guide">
						<img src="../img/install.png" class="d-block img-fluid m-auto" />
					</a>
				</div>
			</div>
			<div class="row mt-5">
					<div class="col-md-12">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active trial-tab" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
									<span class="trial-tabfont">Admin</span>
								</a>
								<a class="nav-item nav-link trial-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
									<span class="trial-tabfont">Staff</span>
								</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<div class="trial-tab-container mt-5">
									<h2>1. Akses Demo Environment</h2>
									<div class="pl-4 mb-5">
										<p class="trial-tab-content">Tekan Link ini untuk mengakses halaman admin Dokodemo-Kerja.</p>
										<p class="trial-tab-content">Tekan "Home"</p>
										<img src="/img/trial/admin-1.png" />
										<p class="trial-tab-content">Login dengan email dan password yang tersedia.</p>
										<img src="/img/trial/admin-2.png" />
									</div>
									<h2>2. Menambah Staff</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Tekan tombol "Staff"</p>
										<img src="/img/trial/admin-3.png" class="mb-3"/>
										<p class="trial-tab-content">Tekan tombol "Add Staff"</p>
										<img src="/img/trial/admin-4.png" class="mb-3"/>
										<p class="trial-tab-content">Isi Informasi staff</p>
										<img src="/img/trial/admin-5.png" class="mb-3"/>
										<p class="trial-tab-content">Staff akan terdaftar di demo environment dan sebuah email akan dikirimkan kepada staff.</p>
										<img src="/img/trial/admin-6.png" class="mb-5" />
										<p class="trial-tab-content q-title">
											Jika ada pertanyaan, hubungilah kami atau unduh dokumentasi pemakaiannya
										</p>
										<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" id="btn-demo">Hubungi Kami</a>
										<p class="trial-tab-content q-title" style="color:blue; text-decoration:underline">
											Download Dokumentasi Pemakaian Demo
										</p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								<div class="trial-tab-container mt-5">
									<h2>1. Download Aplikasi Dokodemo-Kerja</h2>
									<div class="pl-4 mb-5">
										<p class="trial-tab-content">Extract folder demo dan cari program Dokodemo-Kerja</p>
										<img src="/img/trial/staff-1.png" class="mb-3"/>
										<p class="trial-tab-content">Run Aplikasi tersebut</p>
										<img src="/img/trial/staff-2.png" class="mb-3"/>
									</div>
									<h2>2. Menggunakan Dokodemo-Kerja</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Login dengan credential yang diterima di email, atau login dengan:</p>
										<p class="trial-tab-content bold">ID: sales@dokodemo-kerja.com </p>
										<p class="trial-tab-content bold">Password: Dokodemo-123</p>
										<img src="/img/trial/staff-3.png" class="mb-3"/>
										<p class="trial-tab-content">Pilih Project dan tekan tombol Play</p>
										<img src="/img/trial/staff-4.png" class="mb-3"/>
										<p class="trial-tab-content">Untuk menghentikan project, tekan tombol pause</p>
										<img src="/img/trial/staff-5.png" class="mb-3"/>
									</div>
									<h2>3. Menggunakan Homepage</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Homepage website dapat diakses melalui tombol "Website"</p>
										<img src="/img/trial/staff-6.png" class="mb-3"/>
										<p class="trial-tab-content">Anda bisa melihat hasil tangkapan layar serta berapa lama anda telah bekerja. 
										Icon yang ada di dalam kolom hijau adalah untuk mengubah waktu secara manual.</p>
										<img src="/img/trial/staff-7.png" class="mb-3"/>
										<p class="trial-tab-content q-title">
											Jika ada pertanyaan, hubungilah kami atau unduh dokumentasi pemakaiannya
										</p>
										<div class="row">
											<div class="col-md-6">
												<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" id="btn-demo">Hubungi Kami</a>
											</div>
											<div class="col-md-6">
												<a href="pdf/install-guide.pdf" target="_blank" aria-label="Install Guide" class="dl-guide">
													<img src="../img/install.png" class="d-block m-auto img-thumbnail img-trial-download" />
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- <div class="container">
		<div class="row mt-5">
			<div class="col-md-5 offset-md-1">
				<a href="/pdf/manual-guide.pdf" id="manual-guide" target="_blank" aria-label="Manual Guide" class="dl-guide">
					<img src="/img/manual.png" class="d-block img-fluid m-auto" />
				</a>
			</div>
			<div class="col-md-5">
				<a href="/pdf/install-guide.pdf" id="install-guide" target="_blank" aria-label="Install Guide" class="dl-guide">
					<img src="/img/install.png" class="d-block img-fluid m-auto" />
				</a>
			</div>
		</div>
		<div class="row mt-top">
			<div class="mt-top ls-title col text-center gray fs-30 bold uppercase">
				Pertanyaan yang sering diajukan
			</div>
		</div>
		<div class="row mt-top">
			<div class="col-md-8 offset-md-2">
				<div id="accordion" class="accordion-trial">
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
							<div class="card-header">
								Bagaimana <span class="semibold">Dokodemo-Kerja</span> merekam jam kerja karyawan?
							</div>
						</a>
						<div id="collapseOne" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Dokodemo-Kerja merekam aktivitas dan jam kerja untuk setiap proyek yang dikerjakan karyawan pada layar perangkat komputernya. Perhitungan akan dimulai dan dihentikan dengan perintah start/stop.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
							<div class="card-header">
								Apakah <span class="semibold">Dokodemo-Kerja</span> memerlukan akses internet?
							</div>
						</a>
						<div id="collapseTwo" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Akses internet diperlukan untuk mengaktifkan dan mengelola akun Dokodemo-Kerja, serta mengirim data rekaman aktivitas dan jam kerja ke database.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
							<div class="card-header">
								Bagaimana jika akses internet saya putus saat <span class="semibold">Dokodemo-Kerja</span> berjalan?
							</div>
						</a>
						<div id="collapseThree" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Tidak masalah. Akses internet tidak dibutuhkan selama proses penghitungan. Namun, Anda membutuhkan koneksi internet saat tombol stop diklik untuk mengirim data ke database.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse4">
							<div class="card-header">
								Berapa jumlah pengguna yang didukung oleh <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse4" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Jumlah pengguna bisa disesuaikan menurut kebutuhan perusahaan.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse5">
							<div class="card-header">
								Apakah <span class="semibold">Dokodemo-Kerja</span> bisa diakses lewat perangkat seluler?
							</div>
						</a>
						<div id="collapse5" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Untuk saat ini, perangkat seluler hanya bisa mengakses Dokodemo-Kerja melalui browser.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse6">
							<div class="card-header">
								Bagaimana cara menyiapkan layanan <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse6" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Kami akan menyediakan panduan menyiapkan layanan Dokodemo-Kerja langkah demi langkah. Mulai dari cara mengakses akun master, mengakses aplikasi dan menginstalnya, hingga penggunaannya bagi karyawan.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse7">
							<div class="card-header">
								Bagaimana cara mengetahui apakah PC atau Mac saya dapat menjalankan <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse7" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Dokodemo-Kerja mendukung PC yang menjalankan sistem operasi Windows, Linux, dan Macintosh.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse8">
							<div class="card-header">
								Bahasa apa saja yang tersedia untuk <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse8" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Untuk saat ini, Dokodemo-Kerja tersedia dalam Bahasa Indonesia dan Inggris.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse9">
							<div class="card-header">
								Dapatkah saya melakukan uji coba <span class="semibold">Dokodemo-Kerja</span> terlebih dahulu sebelum membelinya?
							</div>
						</a>
						<div id="collapse9" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Tentu saja. Untuk mendapatkan layanan uji coba, silakan hubungi kami.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse10">
							<div class="card-header">
								Bagaimana jika saya punya masalah dalam menggunakan <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse10" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Jangan khawatir. Jika Anda mengalami masalah dalam menggunakan Dokodemo-Kerja, Anda dapat langsung menghubungi kami. Kami akan membantu Anda dengan senang hati.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse11">
							<div class="card-header">
								Saya tertarik menggunakan <span class="semibold">Dokodemo-Kerja</span> untuk perusahaan saya. Bagaimana saya bisa mendapatkannya?
							</div>
						</a>
						<div id="collapse11" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Anda hanya perlu menghubungi kami dengan mengisi formulir yang kami sediakan. Kami siap melayani Anda.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse12">
							<div class="card-header">
								Seberapa efektifkah <span class="semibold">Dokodemo-Kerja</span> pada produktivitas karyawan?
							</div>
						</a>
						<div id="collapse12" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Sangat efektif, karena Dokodemo-Kerja mampu mengkalkulasikan total jam kerja karyawan secara real time dan transparan.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse13">
							<div class="card-header">
								Untuk siapakah <span class="semibold">Dokodemo-Kerja</span> dibuat?
							</div>
						</a>
						<div id="collapse13" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Dokodemo-Kerja dibuat untuk para perusahaan yang menggunakan karyawan dengan sistem kerja remote dan independen agar meningkatkan produktifitas perusahaan.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse14">
							<div class="card-header">
								Apa keuntungan yang didapatkan oleh perusahaan yang menerapkan <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse14" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Dengan Dokodemo-Kerja, perusahaan akan diuntungkan dengan produktifitas karyawan yang meningkat sehingga perusahaan dapat membuat target untuk para karyawan sesuai dengan kinerjanya masing-masing.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse15">
							<div class="card-header">
								Apakah <span class="semibold">Dokodemo-Kerja</span> dapat menyesuaikan waktu sesuai dengan zona waktu lokal yang ada?
							</div>
						</a>
						<div id="collapse15" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Bisa, Jika Anda mengaktifkan Dokodemo-Kerja, maka secara otomatis aplikasi akan mendeteksi zona waktu lokal yang ada.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse16">
							<div class="card-header">
								Apa yang akan terjadi jika kita langsung mematikan OS (Operating System) tanpa menghentikan <span class="semibold">Dokodemo-Kerja</span> terlebih dahulu?
							</div>
						</a>
						<div id="collapse16" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Jika hal ini terjadi, maka pencatatan waktu yang terekam akan berada pada waktu terakhir aplikasi menangkap layar monitor.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse17">
							<div class="card-header">
								Dapatkah <span class="semibold">Dokodemo-Kerja</span> beroperasi di Background System?
							</div>
						</a>
						<div id="collapse17" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Tidak bisa, Sebab ketika aplikasi ditutup, maka service secara otomatis juga akan berakhir.
							</div>
						</div>
					</div>
					<hr />
				</div>
			</div>
		</div>
	</div> -->
	<br /><br /><br />
	<?php include 'footer.php' ?>
	<script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script>
		document.getElementById("submit-btn-trial").disabled = true;

		function enableBtnTrial() {
			document.getElementById("submit-btn-trial").disabled = false;
		}
	</script>
</body>

</html>