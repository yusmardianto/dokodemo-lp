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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" itemprop="description" content="Gunakan dokodemo kerja untuk menyingkirkan karyawan malas dan mempertahankan karyawan terbaik Anda. Hadiahi mereka yang berprestasi dan rasakan peningkatan produktivitas. Gratis uji coba dan dapatkan harga khusus untuk skala perusahaan.">
	<meta name="keywords" content="menyingkirkan karyawan yang berkinerja buruk, menyingkirkan karyawan yang malas, meningkatkan produktivitas, uji coba dokodemo, dokodemo gratis, alat jam gratis, alat manajemen gratis, alat bisnis kecil, alat anggaran rendah, alat anggaran rendah, alat manajemen anggaran rendah, alat manajemen anggaran rendah, pelacak waktu gratis, pelacak waktu karyawan gratis, pelacak jam kerja gratis, pelacak tangkapan layar, tangkapan layar perangkat lunak monitor karyawan murah">
	<meta name="author" content="PT. Logique Digital Indonesia">
	<meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
	<meta property="og:title" content="Demo Dokodemo-Kerja | Alat Pelacak Waktu Kerja">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dokodemo-Kerja">
    <meta property="og:url" content="https://dokodemo-kerja.com">
    <meta property="og:image" content="/img/dokodemo-og.jpg">
    <meta property="og:description" content="Dokodemo-Kerja merupakan software atau desktop app dari LOGIQUE bagi karyawan yang kerja remote atau di luar kantor. Aplikasi ini mampu merekam dan kalkulasi jam kerja karyawan secara akurat, dilengkapi fitur screencapture otomatis. Dengan begitu, karyawan Anda menjadi lebih produktif.">

	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/header-footer.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="stylesheet" href="/css/style-trial.css" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Demo Dokodemo-Kerja | Alat Pelacak Waktu Kerja</title>
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
		<img src="/img/home/arrow-down.svg" class="pt-4 pb-3" width="20" alt=""/>
		<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" target="_blank" rel="noopener noreferrer" id="btn-demo-trial-id">Admin Demo</a>
		<a href="https://dokodemo-kerja.com/manual-guide.pdf" target="_blank" rel="noopener noreferrer">
			<p class="trial-header-content">Untuk mencoba versi staff, silahkan ikut instruksi dibawah</p>
		</a>
	</section>
	<section id="trial-content">
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="offset-md-1 col-md-10 tutor-container mt-4 mb-3">
					<!-- <iframe title="trial youtube video" src="https://www.youtube.com/embed/Qyz0FtNbVbI" class="trial-iframe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
					<div class="embed-responsive embed-responsive-16by9 feature-video">
                        <iframe class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
                            src="https://www.youtube.com/embed/OWmF48Cq_fA" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>	
				</div>
				<div class="offset-md-1 col-md-10 download-container text-center">
					<h3 class="download-title hidden-xs">Install demo aplikasi dari link dibawah ini:</h3>
					<div class="row">
						<div class="col-md-4">
							<a href="https://demo.dokodemo-kerja.com/files/Dokodemo-Kerja%20(Windows)%20demo%20v1.0.4.zip" class="btn btn-download bold uppercase hidden-xs" id="btn-download-windows-id"><i class="fa fa-download icon-download"></i>Windows</a>
						</div>
						<div class="col-md-4">
							<a href="https://demo.dokodemo-kerja.com/files/Dokodemo-Kerja%20(Mac)%20demo%20v1.0.4.zip" class="btn btn-download bold uppercase hidden-xs" id="btn-download-ios-id"><i class="fa fa-download icon-download"></i>IOS</a>
						</div>
						<div class="col-md-4">
							<a href="https://demo.dokodemo-kerja.com/files/Dokodemo-Kerja%20(Linux)%20demo%20v1.0.4.zip" class="btn btn-download bold uppercase hidden-xs" id="btn-download-linux-id"><i class="fa fa-download icon-download"></i>Linux</a>
						</div>
					</div>
					<a href="https://dokodemo-kerja.com/pdf/install-guide.pdf" target="_blank" rel="noopener noreferrer" aria-label="Install Guide" class="dl-guide">
						<img src="../img/install.png" class="d-block img-fluid img-border m-auto" id="trial-install-guide" alt="" />
					</a>
				</div>
			</div>
		</div>
	</section>

	<section style="background-color: #f1faff">
		<div class="container">
			<div class="row mt-5">
				<div class="offset-md-1 col-md-10">
					<h3 class="trial-title">Cara Menggunakan Dokodemo-Kerja</h3>
				</div>
				<div class="offset-md-1 col-md-10 tab-tutor-container">
					<nav>
						<div class="nav nav-tabs nav-tabs-trial" id="nav-tab" role="tablist">
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
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title d-inline-block">1. Akses Demo Environment</h2>
									<p class="trial-tab-content --no-list d-block d-md-inline">Tekan <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">Link ini</a> untuk mengakses halaman admin Dokodemo-Kerja.</p>
								</div>
								<div class="pl-4 mb-5">
									<div class="row">
										<div class="col-md-6 col-lg-8">
											<p class="trial-tab-content">Tekan <strong>"LOGIN"</strong> <br class="d-none d-md-block"><br class="d-none d-md-block"><br class="d-none d-md-block d-xl-none"></p>
											<img src="/img/trial/admin-1.png" class ="mb-3 img-fluid w-100 img-border" alt="" style="height: 295px; object-fit: contain;"/>
										</div>
										<div class="col-md-6 col-lg-4">
											<p class="trial-tab-content">Login dengan email dan password yang tersedia.</p>
											<img src="/img/trial/admin-2.png" class ="mb-3 img-fluid w-100 img-border" alt="" style="height: 295px; object-fit: cover;"/>
										</div>
									</div>
								</div>
								<h2 class="content-section-title">2. Menambah Staff</h2>
								<div class="pl-4">
									<p class="trial-tab-content">Tekan tombol <strong>"Staff"</strong></p>
									<img src="/img/trial/admin-3.png" class="mb-3 img-fluid w-100 img-border" alt="" />
									<div class="row">
										<div class="col-md-6">
											<p class="trial-tab-content">Tekan tombol <strong>"Add Staff"</strong></p>
											<img src="/img/trial/admin-4.png" class="mb-3 img-fluid w-100 img-border" alt="" />
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">Isi Informasi staff</p>
											<img src="/img/trial/admin-5.png" class="mb-3 img-fluid w-100 img-border" alt="" />
										</div>
									</div>
									<p class="trial-tab-content">Staff akan terdaftar di demo environment dan sebuah email akan dikirimkan kepada staff.</p>
									<img src="/img/trial/admin-6.png" class="mb-5 img-fluid w-100 img-border" alt="" />
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title d-inline-block">1. Akses Demo Environment</h2>
									<p class="trial-tab-content --no-list d-block d-md-inline">Tekan <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">Link ini</a> untuk mengakses halaman admin Dokodemo-Kerja.</p>
								</div>
								<div class="pl-4 mb-5">
									<div class="row">
										<div class="col-md-6">
											<p class="trial-tab-content">Extract folder demo dan cari program Dokodemo-Kerja</p>
											<img src="/img/trial/staff-1.png" class="mb-3 img-fluid w-100 img-border"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">Run Aplikasi tersebut <br class="d-none d-md-block"><br class="d-none d-md-block"></p>
											<img src="/img/trial/staff-2.png" class="mb-3 img-fluid w-100 img-border"/>
										</div>
									</div>
								</div>

								<h2 class="content-section-title">2. Menggunakan Homepage</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
													Login dengan credential yang diterima di email, atau login dengan:
												</p>
												<div class="trial-tab-content__list">
													<span>ID</span>
													<span class="font-weight-bold">: sales@dokodemo-kerja.com</span>
												</div>
												<div class="trial-tab-content__list">
													<span>Pass</span>
													<span class="font-weight-bold">: Dokodemo-123</span>
												</div>
											</div>
											<img src="/img/trial/staff-3.png" class="mb-3 img-fluid w-100 img-border"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">Pilih Project dan tekan tombol "Play"</p>
											<img src="/img/trial/staff-4.png" class="mb-3 img-fluid w-100 img-border"/>
											<p class="trial-tab-content">Tekan tombol merah untuk menghentikan penghitungan</p>
											<img src="/img/trial/staff-5.png" class="mb-5 img-fluid w-100 img-border"/>
										</div>
									</div>
								</div>

								<h2 class="content-section-title">3. Fitur Lainnya</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
													Terdapat jumlah jam bekerja di tiap hari dan minggu pada homepage dan, 
												</p>
												<div class="trial-tab-content__list">
													<span style="color: #098AE4"><strong>Biru</strong></span>
													<span>: untuk Mengecilkan</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E6B403"><strong>Kuning</strong></span>
													<span>: menuju ke Website</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E3092A"><strong>Merah</strong></span>
													<span>: untuk Keluar</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<img src="/img/trial/staff-6.png" class="mb-3 img-fluid w-100 img-border"/>
										</div>
									</div>
								</div>

								<h2 class="content-section-title">4. Tangkapan Layar</h2>
								<div class="pl-4">
									<p class="trial-tab-content">Anda bisa melihat hasil tangkapan layar serta berapa lama anda telah bekerja. Icon yang ada di dalam kolom berwarna adalah untuk mengubah waktu secara manual. Selain itu, terdapat waktu riwayat pengubahan waktu dan komentar dari karyawan lain</p>
									<img src="/img/trial/staff-7.png" class="mb-5 img-fluid w-100 img-border"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="trial-contact py-3">
		<div class="container">
			<div class="row">
				<div class="offset-md-1 col-md-10">
					<p class="q-title text-white mt-3">
						Jika ada pertanyaan, hubungilah kami atau unduh dokumentasi pemakaiannya
					</p>
					<a href="/ind/contact-us.php" class="btn btn-trial-contact bold uppercase" id="btn-contact-us-id">Hubungi Kami</a>
					<p class="q-title" style="text-decoration:underline">
					<a href="https://dokodemo-kerja.com/pdf/install-guide.pdf" target="_blank" rel="noopener noreferrer" style="color:#fff">
						Download Panduan Manual Dokodemo
					</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="hide-button-on-mobile">
        <span id="popup-text">
            <div class="speech-bubble">
                Hubungi kami melalui Whatsapp
            </div>
        </span>
        <a href="https://api.whatsapp.com/send?phone=62811870321&text=Halo, saya ingin bertanya tentang software Dokodemo-Kerja" aria-label="whatsapp link" target="_blank" rel="noopener noreferrer">
            <img src="../img/whatsapp.svg" id="fixedbutton" alt="" />
        </a>
    </section>
	<!-- req online meeting popup -->
    <section>
         <button class="btn botFixedBtn" id="btnReqOnlineMeeting" aria-label="btnReqOnlineMeeting" type="button" data-toggle="collapse" href="#collapseExample" style="background: #ffcc13;">
            <i class="fa fa-chevron-up" style="font-size: medium; color: #fff;"></i>
        </button>
        <span class="collapse popUpBottom" id="collapseExample">
            <div class="card card-body" style="border: 3px solid lightgrey;">
                <div class=" text-center" style="padding: 1em;">
                    <!-- <div class="btn pull-right">X</div> -->
                    <button type="button" class="close survey-close" data-toggle="collapse" href="#collapseExample" aria-label="Close" style="padding: 6px 12px;">
                        <span aria-hidden="true"><i class="fa fa-chevron-down" style="font-size: medium;"></i></span>
                    </button>
                    <h5 class="card-title"><b>SET UP AN <br> ONLINE MEETING</b></h5>
                    <hr>
											<p class="card-text">Jika Anda tertarik untuk melihat demo secara langsung, atau memiliki pertanyaan apapun,
											klik tombol dibawah ini</p>
											<form action="https://formspree.io/xnqqyjdg" method="POST">
													<div class="form-group" style="text-align:left;">
															<label for="clientName">Nama</label>
															<input type="text" class="form-control" name="clientName" id="clientName" placeholder="Masukan nama anda">
													</div>
													<div class="form-group" style="text-align:left;">
															<label for="clientEmail">Email</label>
															<input type="email" class="form-control" name="clientEmail" required id="clientEmail" placeholder="Masukan email anda">
													</div>
													<div class="form-group" style="text-align:left;">
															<label for="clientDate">Date</label>
															<input type="date" class="form-control" name="clientDate" id="clientDate" placeholder="Enter your Date">
													</div>
													<div class="form-group" style="text-align:left;">
															<label for="clientTime">Time</label>
															<select class="form-control" name="clientTime" id="clientTime" placeholder="Select your time">
																	<option value="09.00">09.00</option>
																	<option value="10.00">10.00</option>
																	<option value="11.00">11.00</option>
																	<option value="12.00">12.00</option>
																	<option value="13.00">13.00</option>
																	<option value="14.00">14.00</option>
																	<option value="15.00">15.00</option>
																	<option value="16.00">16.00</option>
																	<option value="17.00">17.00</option>
															</select>
													</div>
													<button type="submit" class="btn btn-primary" id="meet-online-btn">Send</button>
											</form>
                    </div>
                </div>
            </div>
        </span>    
    </section>
    <!-- end of req online meeting popup -->
	<?php include 'footer.php' ?>
	<script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script>
		document.getElementById("submit-btn-trial").disabled = true;

		function enableBtnTrial() {
			document.getElementById("submit-btn-trial").disabled = false;
		}
	</script>
	<script>
        var element = document.getElementById("popup-text");

        var t=setTimeout(openPopUp,5000);
        function openPopUp() {
        element = document.getElementById("popup-text");
        element.style.visibility = "visible";
        element.style.opacity = "1";
        }
    </script>
		<script>
        setTimeout(function() {
            $('#myModal').modal();
        }, 4000);
    </script>
</body>

</html>
