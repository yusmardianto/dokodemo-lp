<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

// Load Composer's autoloader
require '../vendor/autoload.php';

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
	<section class="trial-top">
		<div class="container">
			<div class="row">
				<div class="ls-title col text-center gray fs-30 bold uppercase">
					Coba Trial Gratis
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
						<!-- <div class="form-group row align-items-center">
							<label for="domain" class="col-sm-3 col-form-label">Domain</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="domain" name="domain" value="<?= !empty($errors) ? $_POST['domain'] : '' ?>" placeholder="Domain">
							</div>
						</div> -->
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
	</section>

	<div class="container">
		<div class="row">
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
	</div>
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