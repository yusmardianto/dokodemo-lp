<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

// Load Composer's autoloader
// require '../vendor/autoload.php';

// Load config
$config = include('../config/app.php');

require '../action/c-trial.php';

?>

<?php 
    $page = 'demo';
    $page_title = 'Cara Kerja Dokodemo-Kerja | Software HRIS Terbaik';

    $meta_description = 'Cara kerja Dokodemo-Kerja sebagai software HRIS terbaik cukup mudah & "applicable" pada laptop ataupun perangkat seluler (mobile). Coba Demo Sekarang. Gratis!';
    $meta_keyword = 'menyingkirkan karyawan yang berkinerja buruk, menyingkirkan karyawan yang malas, meningkatkan produktifitas, uji coba dokodemo, dokodemo gratis, alat jam gratis, alat manajemen gratis, alat bisnis kecil, alat anggaran rendah, alat anggaran rendah, alat manajemen anggaran rendah, alat manajemen anggaran rendah, pelacak waktu gratis, pelacak waktu karyawan gratis, pelacak jam kerja gratis, pelacak tangkapan layar, tangkapan layar perangkat lunak monitor karyawan murah';

    $og_title = 'Cara Kerja Dokodemo-Kerja | Software HRIS Terbaik';
    $og_image = 'https://dokodemo-kerja.com/img/dokodemo-og.jpg';
    $og_desription = 'Cara kerja Dokodemo-Kerja sebagai software HRIS terbaik cukup mudah & "applicable" pada laptop ataupun perangkat seluler (mobile). Coba Demo Sekarang. Gratis!';

    $add_css = '<link rel="stylesheet" href="/css/style-trial.css" />';

    include($_SERVER['DOCUMENT_ROOT'].'/ind/component/header.php');
?>

<div class="">

	<section>
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb breadcrumb--main">
					<li class="breadcrumb-item"><a href="/ind/">Beranda</a></li>
					<li class="breadcrumb-item active" aria-current="page">Demo</li>
				</ol>
			</nav>
		</div>
	</section>
	
	<section class="pb-5">
		<div class="container">
			<div class="row mt-5">
				<div class="offset-md-1 col-md-10">
					<h1 class="fs-30 text-center pt-5 mb-3">Cara Penggunaan Aplikasi Dokodemo-Kerja</h1>
					<p class="text-center">
						Sebagai salah satu software Human Resource Information System (HRIS) terbaik yang ada di Indonesia, Dokodemo-Kerja dapat memberikan solusi bagi HR departement di sebuah perusahaan dalam penggunaan teknologi digital untuk proses pengelolaan Sumber Daya Manusia (SDM) yang lebih efektif dan efisien.
					</p>
					<p class="text-center">
						Sejak Versi 2.0, selain memiliki fungsi utama sebagai aplikasi Pengelolaan Absensi Online & Cuti karyawan yang efisien, Dokodemo-Kerja telah dilengkapi pula dengan fitur pelacakan GPS, sehingga memungkinkan perusahaan untuk mengelola dan memonitor aktivitas kerja para staff yang sering bekerja di luar kantor. Bagaimana cara kerja Dokodemo-Kerja dan seberapa besar aplikasi ini dapat memberikan manfaat untuk Perusahaan Anda?
					</p>

				</div>
			</div>
		</div>
	</section>

	<section class="intro-section text-center px-4">
		<h2 class="banner-text-white">Coba Demo Sekarang. Gratis !</h2>
		<img src="/img/home/arrow-down.svg" class="pt-4 pb-3" width="20" alt=""/>
		<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" target="_blank" rel="noopener noreferrer" id="btn-demo-trial-id">Admin Demo</a>
		<a href="https://drive.google.com/file/d/1itRszKytvu-x6RxoN0Ba1i_dNvtFlEHF/view?usp=sharing" target="_blank" rel="noopener noreferrer">
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
                            src="https://www.youtube.com/embed/ZRU2cc7lWbw" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>	
				</div>
				<div class="offset-md-1 col-md-10 download-container text-center">
					<h3 class="download-title hidden-xs">Install demo aplikasi dari link dibawah ini:</h3>
					<div class="row">
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1q59CzDevBq5udGadJuaVLUbCJTBWULZQ/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-windows-id"><i class="fa fa-download icon-download"></i>Windows</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1f5JeqYJBCVDr8NKodaxrA9pF5lX0zyIn/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn_download_mac_id"><i class="fa fa-download icon-download"></i>Mac OS</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1Qm5Vg4h6skbQNergrsFPW0IMtUYx0XkD/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-linux-id"><i class="fa fa-download icon-download"></i>Linux</a>
						</div>
					</div>
					<div class="row">
						<div class="offset-md-2 col-md-4 mb-2 mb-sm-0">
							<a target="_blank" href="https://apps.apple.com/id/app/dokodemo-kerja/id1506859201" class="mobile-apps__icon mobile-apps__icon--ios" id="btn-download-ios-id">
							</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://play.google.com/store/apps/details?id=com.dokodemomobile" class="mobile-apps__icon mobile-apps__icon--android" id="btn-download-android-id"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="background-color: #f1faff">
		<div class="container">
			<div class="row mt-5">
				<div class="offset-md-1 col-md-10">
					<h3 class="trial-title">Cara Menggunakan Dokodemo-Kerja</h3>
					
					<!-- <a href="https://dokodemo-kerja.com/pdf/install-guide.pdf" target="_blank" rel="noopener noreferrer" aria-label="Install Guide" class="dl-guide">
						<img src="/img/install.png" class="d-block img-fluid img-border mx-auto mb-3" id="trial-install-guide" alt="Dokodemo-Kerja Install Guide" />
					</a> -->
					<div class="installation-manual">
						Download manual instalasi di sini:
						<a class="installation-manual__item" target="_blank" href="https://drive.google.com/file/d/1JSkS98_d3fUzaNcVLv0QWtX0eGEVq4HR/view?usp=sharing">
							<img src="/img/trial/pdf.svg" alt="">
							Desktop
						</a>
						<a class="installation-manual__item" target="_blank" href="https://drive.google.com/file/d/1mhugySDha-QKR0lSwtDjNKZip-lf8CK4/view?usp=sharing">
							<img src="/img/trial/pdf.svg" alt="">
							Mobile
						</a>
					</div>

					<div class="installation-manual">
						Download user manual di sini:
						<a class="installation-manual__item" target="_blank" href="/pdf/user_manual_dokodemo_ver_2-2-2-id.pdf">
							<img src="/img/trial/pdf.svg" alt="">
							Desktop
						</a>
					</div>
				</div>
				<div class="offset-md-1 col-md-10 tab-tutor-container">
					<nav>
						<div class="nav nav-tabs nav-tabs-trial text-center" id="nav-tab" role="tablist">
							<a class="nav-item nav-link trial-tab active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
								<span class="trial-tabfont">Fungsi Admin</span>
							</a>
							<a class="nav-item nav-link trial-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
								<span class="trial-tabfont">Pengguna Umum</span>
							</a>
							<a class="nav-item nav-link trial-tab --divider" id="mobile-staff-tab" data-toggle="tab" href="#mobile-staff" role="tab" aria-controls="mobile-staff" aria-selected="false">
								<span class="trial-tabfont">Aplikasi Mobile</span>
							</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="trial-tab-container">
								<div>
									<div>
										<h2 class="tab-content-title content-section-title">1. Akses Demo Environment</h2>
										<p class="trial-tab-content --no-list d-block mt-0">Tekan <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">Link ini</a> untuk mengakses halaman admin Dokodemo-Kerja.</p>
									</div>
									<div class="pl-4 mb-5">
										<div class="row">
											<div class="col-md-6 col-lg-8">
												<p class="trial-tab-content">Login dengan email dan password yang tersedia.</p>
												<picture>
													<source srcset="/img/trial/admin-1.webp" type="image/webp">
													<img src="/img/trial/admin-1.jpg" alt="Dokodemo-Kerja Website Login" class="img-fluid img-border mb-3">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">2. Pengaturan Task</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Dapat diakses melalui <strong>Profile</strong> > <strong>Settings</strong> > <strong>Task</strong>.</p>
										<picture>
											<source srcset="/img/trial/admin-3-1.webp" type="image/webp">
											<img src="/img/trial/admin-3-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content">Tekan tombol "<strong>Add New</strong>" untuk menambahkan Task baru. </p>
												<picture>
													<source srcset="/img/trial/admin-3-2.webp" type="image/webp">
													<img src="/img/trial/admin-3-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">Isi informasi task baru, tekan Submit, dan Task Baru telah ditambahkan. </p>
												<picture>
													<source srcset="/img/trial/admin-3-3.webp" type="image/webp">
													<img src="/img/trial/admin-3-3.jpg" alt="Dokodemo-Kerja Install Guide" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">3. Pengaturan Team</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Dapat diakses melalui <strong>Profile</strong> > <strong>Settings</strong> > <strong>Team</strong>.</p>
										<picture>
											<source srcset="/img/trial/admin-4-1.webp" type="image/webp">
											<img src="/img/trial/admin-4-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content">Tekan tombol "<strong>Add New</strong>" untuk menambahkan Team baru.</p>
												<picture>
													<source srcset="/img/trial/admin-4-2.webp" type="image/webp">
													<img src="/img/trial/admin-4-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">Isi nama team dan leader, tekan Submit, dan Team Baru telah ditambahkan.</p>
												<picture>
													<source srcset="/img/trial/admin-4-3.webp" type="image/webp">
													<img src="/img/trial/admin-4-3.jpg" alt="Dokodemo-Kerja Add Team Management" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">4. Pengaturan Staff</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Dapat diakses melalui <strong>Profile</strong> > <strong>Settings</strong> > <strong>Staff</strong>.</p>
										<picture>
											<source srcset="/img/trial/admin-2-1.webp" type="image/webp">
											<img src="/img/trial/admin-2-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content">Tekan tombol "<strong>Add New</strong>" untuk menambahkan Staff baru.</p>
												<picture>
													<source srcset="/img/trial/admin-2-2.webp" type="image/webp">
													<img src="/img/trial/admin-2-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">Masukkan informasi Staff baru dan klik "<strong>Submit</strong>".</p>
												<picture>
													<source srcset="/img/trial/admin-2-3.webp" type="image/webp">
													<img src="/img/trial/admin-2-3.jpg" alt="Dokodemo-Kerja's Add Staff option" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
										<p class="trial-tab-content">Informasi password untuk masuk ke Dokodemo-Kerja akan dikirimkan ke alamat E-mail terdaftar. Dengan informasi tersebut maka Anda akan dapat menggunakan Dokodemo-Kerja.</p>
										<picture>
											<source srcset="/img/trial/admin-2-4.webp" type="image/webp">
											<img src="/img/trial/admin-2-4.jpg" alt="Dokodemo-Kerja Staff Management" class="mb-5 img-fluid w-100 img-border">
										</picture>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title">1. Install Dokodemo-Kerja</h2>
									<p class="trial-tab-content --no-list mt-0">Silahkan akses <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">link ini</a> untuk mengunduh aplikasi Dokodemo-Kerja.</p>
								</div>
								<div class="pl-4 mb-5">
									<div class="row">
										<div class="col-md-6">
											<p class="trial-tab-content">Extract folder demo dan cari program Dokodemo-Kerja.</p>
											<img src="/img/trial/staff-1.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Zip File"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">Jalankan aplikasinya. <br class="d-none d-md-block"><br class="d-none d-md-block"></p>
											<img src="/img/trial/staff-2.png" class="mb-3 img-fluid w-100 img-border" alt="Downloaded Dokodemo-Kerja App Icon"/>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">2. Masuk dan gunakan aplikasi</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
													Masuk dengan menggunakan informasi yang dikirimkan melalui Email.
												</p>
											</div>
											<img src="/img/trial/staff-3.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Version 2.0.0"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">Silahkan mulai bekerja dengan memilih "<strong>Task</strong>" dan tekan tombol "<strong>Play</strong>"</p>
											<img src="/img/trial/staff-4.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application"/>
											<p class="trial-tab-content">Tekan tombol "<strong>Stop</strong>" (warna merah) untuk berhenti</p>
											<img src="/img/trial/staff-5.png" class="mb-5 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application Appearance"/>
										</div>
									</div>
								</div>

								<h2 class="content-section-title">3. Fitur lainnya</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
													Terdapat jumlah jam bekerja di tiap hari dan minggu pada homepage dan, 
												</p>
												<div class="trial-tab-content__list">
													<span style="color: #098AE4"><strong>Biru</strong></span>
													<span>: Untuk meminimalkan atau maksimalkan tampilan aplkasi</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E6B403"><strong>Kuning</strong></span>
													<span>: Ke situ Dokodemo-Kerja Admin</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E3092A"><strong>Merah</strong></span>
													<span>: Keluar</span>
												</div>
												<div class="trial-tab-content__list">
													<span><strong>Today</strong></span>
													<span>: Jumlah akumulasi jam kerja hari ini</span>
												</div>
												<div class="trial-tab-content__list">
													<span><strong>Weekly</strong></span>
													<span>: Jumlah akumulasi jam kerja minggu ini</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<img src="/img/trial/staff-6.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application"/>
										</div>
									</div>
								</div>

								<h2 class="content-section-title">4. Tampilan Layar</h2>
								<div class="pl-4">
									<p class="trial-tab-content">Anda bisa melihat berapa lama anda telah bekerja pada suatu task. Ikon yang ada di dalam kolom berwarna adalah untuk mengubah waktu secara manual. Selain itu, terdapat waktu riwayat pengubahan waktu serta hasil tangkapan layar dibagian bawah.</p>
									<img src="/img/trial/staff-7.png" class="mb-5 img-fluid w-100 img-border" alt="Dokodemo-Kerja Time Tracking"/>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mobile-staff" role="tabpanel" aria-labelledby="mobile-staff-tab">
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title d-inline-block">1. Download Dokodemo-Kerja Mobile App</h2>
								</div>
								<div class="pl-4 mb-5">
									<div class="row">
										<div class="col-md-6">
											<p class="trial-tab-content">Cari aplikasi "Dokodemo Mobile" di Play Store / App Store, dan tekan "Install"</p>
											<div class="text-center">
												<img src="/img/trial/mobile-1.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja from the Google Play Store"/>
											</div>
										</div>
										<div class="col-md-6">
											<!-- <p class="trial-tab-content">Atau website Dokodemo-Kerja. <br><br></p> -->
											<p class="trial-tab-content">Atau download aplikasi mobile dari website Dokodemo perusahaan.</p>
											<img src="/img/trial/mobile-2.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja Mobile for iOS or Android"/>
										</div>
									</div>
								</div>

								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<h2 class="tab-content-title content-section-title">2. Layar Login</h2>
											<div class="trial-tab-content">
												<p class="mb-0">Login dengan Company Code (DKDM), E-mail dan Password yang sudah didaftarkan di website demo Admin, kemudian tekan tombol Login.</p>
											</div>
											<div class="text-center">
												<img src="/img/trial/mobile-3.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Login Page"/>
											</div>
										</div>
										<div class="col-md-6">
											<h2 class="tab-content-title content-section-title">3. Pilih Task</h2>
											<p class="trial-tab-content">User diminta untuk memilih Task 
											<br class="d-none d-md-block"><br class="d-none d-md-block">
											<br class="d-none d-md-block"><br class="d-none d-md-block">
											<br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
											<div class="text-center">
												<img src="/img/trial/mobile-4.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Task Selection"/>
											</div>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">4. Layar Utama</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>
													Beberapa fungsi yang tersedia pada Dokodemo-Kerja Mobile App 
												</p>
												<div class="text-center">
													<img src="/img/trial/mobile-5.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Staff Login"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>Tombol “Start” dan “Stop” <br class="d-none d-md-block"><br class="d-none d-md-block"><br class="d-none d-md-block d-lg-none"></p>
												<div class="text-center">
													<img src="/img/trial/mobile-6.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Play Button"/>
												</div>
											</div>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">5. Fitur</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>GPS Tracker untuk melacak user saat melakukan kegiatan di luar kantor.</p>
												<div class="text-center">
													<img src="/img/trial/mobile-7.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Location Tracking"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>Screenshot layar desktop saat sedang bekerja. (Desktop App)<br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
												<div class="text-center">
													<img src="/img/trial/mobile-8.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Screen Recording Record"/>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<h2 class="tab-content-title content-section-title">6. History Record</h2>
												<p>User dapat melihat jam kerjanya secara Daily, Weekly dan Monthly.</p>
												<div class="text-center">
													<img src="/img/trial/mobile-9.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Screen Record"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<h2 class="tab-content-title content-section-title">6. Account</h2>
												<p>Menu ini menampilkan user profile, dan dapat digunakan untuk logout.</p>
												<div class="text-center">
													<img src="/img/trial/mobile-10.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Login"/>
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
					<a href="https://drive.google.com/file/d/1itRszKytvu-x6RxoN0Ba1i_dNvtFlEHF/view?usp=sharing" target="_blank" rel="noopener noreferrer" style="color:#fff">
						Download Panduan Manual Dokodemo
					</a>
					</p>
				</div>
			</div>
		</div>
	</section>

</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/ind/component/footer.php'); ?>
<script>
	document.getElementById("submit-btn-trial").disabled = true;

	function enableBtnTrial() {
		document.getElementById("submit-btn-trial").disabled = false;
	}
</script>
<script>
	$(function() {		
		// set border based on active tab
		$('.trial-tab').click(function(e) {
			setTimeout(() => {
				var tab_active, tab_position;
				tab_active = $(this).attr('aria-selected');
				tab_position = $(this).index();

				$(this).parent().find('.trial-tab').removeClass('--divider');

				if (tab_position == 2 && tab_active) { // last tab is active
					$(this).parent().find('.trial-tab:nth-child(2)').addClass('--divider');
				} else if (tab_position == 0 && tab_active) { // first tab is active
					$(this).parent().find('.trial-tab:last-child').addClass('--divider');
				}
			}, 5);
		})
	})
</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>
