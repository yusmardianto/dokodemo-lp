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
			<div class="row">
				<div class="offset-md-2 col-md-8">
					<a href="https://docs.google.com/forms/d/e/1FAIpQLScn73Hhf36KQvOGc81WAlmfTOz12E1XKJqfh7uQ2zC6x8wsUQ/viewform" target="_blank">
						<img src="/img/dokodemo-event-banner.jpg" class="img-fluid" alt="">
					</a>
				</div>
			</div>
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
		<img src="/img/home/arrow-down.svg" class="pt-4 pb-3" width="20" alt="" loading="lazy" />
			
		<a href="https://drive.google.com/file/d/1itRszKytvu-x6RxoN0Ba1i_dNvtFlEHF/view?usp=sharing" target="_blank" rel="noopener noreferrer">
			<p class="trial-header-content">Untuk mencoba versi staff, silahkan ikut instruksi dibawah</p>
		</a>
	</section>

	<section id="trial-content">
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="offset-md-1 col-md-10 tutor-container mt-4 mb-3">
					<div class="embed-responsive embed-responsive-16by9 feature-video">
                        <!-- <iframe 
							loading="lazy"
							class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
                            src="https://www.youtube.com/embed/ZRU2cc7lWbw" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
						</iframe> -->

						<iframe
							loading="lazy"
							class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
							src="https://www.youtube.com/embed/ZRU2cc7lWbw"
							srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/ZRU2cc7lWbw?autoplay=1><img src=https://img.youtube.com/vi/ZRU2cc7lWbw/hqdefault.jpg alt='Dokodemo Youtube Video'><span>▶</span></a>"
							frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen							
							>
						</iframe>

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
						<a class="installation-manual__item" target="_blank" href="/pdf/panduan_instalasi-DOKODEMO_Versi_3.0.0.pdf">
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
						<a class="installation-manual__item" target="_blank" href="/pdf/USER_GUIDE_LINE_DOKODEMO_VERSI_3.0.0.pdf">
							<img src="/img/trial/pdf.svg" alt="" loading="lazy" />
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
									<h2 class="tab-content-title content-section-title">1. Akses Demo Environment</h2>																	
									<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Silakan klik <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">di sini</a> untuk mengakses halaman website Dokodemo-Kerja.</p>									
									<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Login dengan email dan password yang tersedia.</p>																		
								</div>
								<div class="pl-4 mb-5">
									<div class="row">									
										<div class="col-sm-12 col-md-12 col-lg-12">
											<picture>
												<!-- <source srcset="/img/trial/pengguna-umum/1.webp" type="image/webp">												 -->
												<img src="/img/trial/pengguna-umum/1.png" class="mb-3 img-fluid w-100 img-border" alt="Akses Demo Environment" loading="lazy" />
											</picture>
										</div>
									</div>
								</div>
						
								<div>
									<h2 class="tab-content-title content-section-title">2. Pengaturan Task</h2>
									<div class="pl-4">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">	
												<p class="trial-font-size">
													Sebagai admin, Anda mendapatkan izin untuk melakukan Task Management.
												</p>										
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Buka Setting, kemudian klik <b>“Task”</b>.
												</p>																													
												<img src="/img/trial/fungsi-admin-tab/1.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-task" loading="lazy" />																							
											</div>										
										</div>
										
										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Tekan tombol <b>"Add New"</b> untuk menambahkan Task baru.
												</p>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">	
												<img src="/img/trial/fungsi-admin-tab/2.png" class="mb-3 img-fluid w-100 img-border" alt="task-management-add-new" loading="lazy" />	
											</div>
										</div>

										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 													
													Isi task name, team, dan color tag yang Anda inginkan, kemudian klik <b>“Submit”</b>.
												</p>												
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">
												<img src="/img/trial/fungsi-admin-tab/3.png" class="mb-3 img-fluid w-100 img-border" alt="task-management-add-new-button-cancel-submit" loading="lazy" />
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title mt-5">3. Pengaturan Team</h2>
									<div class="pl-4">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">	
												<p class="trial-font-size">
													Sebagai admin, Anda mendapatkan izin untuk melakukan Team Management.
												</p>										
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Buka Setting, kemudian klik <b>“Team”</b>.
												</p>																													
												<img src="/img/trial/fungsi-admin-tab/pengaturan-team-1.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-team-1" loading="lazy" />																							
												
											
												
											</div>										
										</div>

										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Tekan tombol <b>"Add New"</b> untuk menambahkan  <b>“Team”</b> baru.
												</p>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">
												<img src="/img/trial/fungsi-admin-tab/pengaturan-team-2.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-team-2" loading="lazy" />																							
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Isi nama team kemudian tekan <b>“Submit”</b> dan Team Baru telah Anda tambahkan.
												</p>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">
												<img src="/img/trial/fungsi-admin-tab/pengaturan-team-3.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-team-3" loading="lazy" />																							
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title mt-4">4. Pengaturan Staff</h2>
									<div class="pl-4">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">	
												<p class="trial-font-size">
													Sebagai admin, Anda mendapatkan izin untuk melakukan Staff Management.
												</p>										
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Buka Setting, kemudian klik <b>“Staff”</b>.
												</p>																													
												<img src="/img/trial/fungsi-admin-tab/pengaturan-staff-1.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-staff-1" loading="lazy" />																							
											</div>										
										</div>
										
										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Tekan tombol <b>"Add New"</b> untuk menambahkan Staff baru.
												</p>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">	
												<img src="/img/trial/fungsi-admin-tab/pengaturan-staff-2.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-staff-2" loading="lazy" />	
											</div>
										</div>

										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 													
													Masukkan informasi Staff baru dan klik <b>"Submit"</b>.
												</p>
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 																										
													Setelah Anda klik tombol <b>"Submit"</b>, sistem akan mengirimkan password <i>(generate by system)</i> ke alamat email yang terdaftar. Dengan informasi tersebut maka staff yang Anda kelola dapat menggunakan aplikasi Dokodemo-Kerja.
												</p>	
												
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">
												<img src="/img/trial/fungsi-admin-tab/pengaturan-staff-3.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-staff-3" loading="lazy" />
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title mt-3">5. Pengawasan Staf</h2>
									<div class="pl-4">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">	
												<p class="trial-font-size">
													Sebagai admin, Anda dapat melakukan pengawasan dan pemeriksaan terhadap aktivitas pekerjaan yang sedang dilakukan oleh setiap karyawan. 
												</p>										
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Cek total jam kerja karyawan.
												</p>	
												<p class="mt-0 trial-font-size">
													Buka menu Work Session, kemudian klik "All" dan sistem akan menampilkan total jam kerja yang telah dicapai oleh seluruh karyawan. Admin dapat melihat total jam kerja karyawan pada periode waktu tertentu yang dapat disesuaikan menggunakan tombol daily (harian), weekly (mingguan) atau monthly (bulanan).
												</p>																												
												<img src="/img/trial/fungsi-admin-tab/a1.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-task" loading="lazy" />																							
											</div>										
										</div>
										<div class="row mt-4">
											<div class="col-sm-12 col-md-12 col-lg-12">										
												<p class="trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Cek Tangkapan Layar Karyawan
												</p>	
												<p class="mt-0 trial-font-size">
												Selain mengawasi waktu kerja, Admin juga dapat melakukan pengawasan aktivitas kerja karyawan melalui fitur tangkapan layar (desktop screenshot). <br>
												Buka menu Work Session, kemudian klik "All". Selanjutnya pilih tanggal atau sesi kerja yang ingin Anda awasi kemudian klik nama karyawan. Saat halaman detail karyawan ditampilkan, silakan scroll ke bagian bawah halaman dan Anda akan menemukan hasil tangkapan layar pada tab "Screen Record". 
												</p>																												
												<img src="/img/trial/fungsi-admin-tab/a2.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-task" loading="lazy" />																							
											</div>										
										</div>
										<div class="row mt-4">
											<div class="col-sm-12 col-md-12 col-lg-12">										
												<p class="trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													3 Tangkapan Layar yang Sama
												</p>	
												<p class="mt-0 trial-font-size">
													Sistem dapat mendeteksi tangkapan layar secara akurat. Jika terdapat 3 tangkapan layar yang sama atau lebih secara berurutan, maka sistem akan menandai hasil tangkapan layar tersebut dengan warna merah dan secara otomatis mengirim pemberitahuan kepada pihak Admin.
												</p>																												
												<img src="/img/trial/fungsi-admin-tab/a3.jpg" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-task" loading="lazy" />																							
												<p class="mt-0 trial-font-size">
													Melalui fitur ini, Admin dapat mengetahui bahwa pada sesi waktu tersebut karyawan sedang tidak melakukan aktivitas apapun pada perangkat kerjanya. Jika diketahui bahwa pada sesi tersebut karyawan sedang beristirahat dan lupa mematikan Dokodemo-Kerja, maka Admin dapat merubah Work Session karyawan agar perhitungan total jam kerja tetap akurat.
												</p>
											</div>										
										</div>
									</div>
								</div>

								<p class="mt-4 " style="font-size: small;">
									<i>*Saat Anda memutuskan untuk berlangganan Dokodemo-Kerja, user juga akan membutuhkan Company Code untuk login ke aplikasi. Pihak kami akan mengirimkannya kepada pihak PIC perusahaan setelah perusahaan Anda resmi terdaftar.</i>
								</p>
								
							</div>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title">1. Akses Demo Environment</h2>									
									<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Silakan klik <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">di sini</a> untuk mengakses halaman website Dokodemo-Kerja.</p>									
									<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Login dengan email dan password yang tersedia.</p>																		
								</div>
								<div class="pl-4 mb-5">
									<div class="row">									
										<div class="col-sm-12 col-md-12 col-lg-12">
											<img src="/img/trial/pengguna-umum/1.png" class="mb-3 img-fluid w-100 img-border" alt="Akses Demo Environment" loading="lazy" />
										</div>
									</div>
								</div>
						
								<h2 class="tab-content-title content-section-title">2. Install Dokodemo-Kerja</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12">											
											<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Klik menu <i>“download desktop app”</i> untuk mengunduh aplikasi demo di perangkat Anda.</p>																													
											<img src="/img/trial/pengguna-umum/2.png" class="mb-3 img-fluid w-100 img-border" alt="Install Dokodemo-Kerja" loading="lazy" />
											<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Extract folder demo dan cari program Dokodemo-Kerja.</p>	
											<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Jalankan aplikasi Dokodemo-Kerja versi demo di perangkat Anda.</p>																													
										</div>										
									</div>
								</div>

								<h2 class="tab-content-title content-section-title mt-4">3. Masuk dan gunakan aplikasi</h2>
								<div class="pl-4">
									<div class="row mt-3">
										<div class="col-sm-12 col-md-6 col-lg-6">											
											<p class="mb-0 trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Untuk versi demo, silakan masuk menggunakan <b>Company Code, Email,</b> dan <b>Password default</b> yang sudah kami sediakan kemudian klik <i>“Login”</i>.
											</p>											
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6">
											<img src="/img/trial/pengguna-umum/3.jpg" class="mb-3 img-fluid w-100 img-border" alt="Masuk dan gunakan aplikasi" loading="lazy" />
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-sm-12 col-md-6 col-lg-6">											
											<p class="mb-0 trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Pilih jenis <b>“Task”</b> yang akan dikerjakan, kemudian tekan tombol <i>“Play”</i>.
											</p>
											<p class="mb-0 mt-2 trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Tekan tombol <b>"Stop"</b> (warna merah) untuk berhenti.
											</p>											
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6">
											<img src="/img/trial/pengguna-umum/4.jpg" class="mb-3 img-fluid w-100 img-border" alt="Masuk dan gunakan aplikasi" loading="lazy" />
										</div>										
									</div>
								</div>
								<h2 class="tab-content-title content-section-title mt-4">4. Fitur Lain</h2>
								<div class="pl-4">
									<div class="row mt-3">
										<div class="col-sm-12 col-md-6 col-lg-6">	
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Notification: pemberitahuan mengenai approval atau rejection day off/cuti
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>												
												Announcement: pemberitahuan untuk info day off atau hari libur nasional
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>												
												Today: jumlah jam kerja per-hari
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>												
												Weekly: jumlah jam kerja per-minggu
											</p>	
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>	
												<span>
													<img src="/img/trial/pengguna-umum/icon-minimize.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>												
												: minimize Dokodemo-kerja desktop
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>	
												<span>
													<img src="/img/trial/pengguna-umum/icon-browse-page-dokodemo.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>												
												: untuk mengakses halaman website Dokodemo-kerja
											</p>	
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>	
												<span>
													<img src="/img/trial/pengguna-umum/icon-logout.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>												
												: Log Out dari aplikasi
											</p>											
											
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6">	
											<img src="/img/trial/pengguna-umum/6.jpg" class="mb-5 img-fluid w-100 img-border" alt="fitur-lain-1" loading="lazy"  />
										</div>
									</div>								
								</div>
								<h2 class="tab-content-title content-section-title mt-4">5. Work Session</h2>
								<div class="pl-4">
									<div class="row mt-3">
										<div class="col-sm-12 col-md-12 col-lg-12">
											<img src="/img/trial/pengguna-umum/7.png" class="mb-5 img-fluid w-100 img-border" alt="work-session-1" loading="lazy"  />
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Klik menu <b>“Work Session”</b> dan pilih <b>“My Work Session”</b>
											</p>
											<hr />
											<p class="mt-4 trial-font-size">
												Pada halaman ini, Anda dapat melihat total jam kerja harian, mingguan, atau bulanan untuk suatu task. Selain itu, Anda dapat melihat hasil screenshot aplikasi selama Anda bekerja.
											</p>
											<img src="/img/trial/pengguna-umum/8.png" class="mb-5 img-fluid w-100 img-border" alt="work-session-2" loading="lazy"  />
											<p class="trial-font-size">
												Saat Anda lupa mematikan Dokodemo-Kerja dan penghitungan jam menjadi tidak sesuai, Anda dapat menggunakan <b>ikon  </b>
												<span>
													<img src="/img/trial/pengguna-umum/icon-edit.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>	
												untuk mengubahnya. Riwayat perubahan data akan tercatat oleh sistem dan ditampilkan pada menu <b>“History Edited Time”</b>.
											</p>


										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title mt-4">6. Attendance</h2>
								<div class="pl-4">
									<div class="row mt-3">
										<div class="col-sm-12 col-md-12 col-lg-12">
											<p class="trial-font-size">
												Pengguna dapat mengajukan day off atau cuti dari aplikasi.
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Klik menu <b>“Attendance”</b> dan pilih <b>“Day Off / Leave”</b>												
											</p>
											<img src="/img/trial/pengguna-umum/attendance-1.png" class="mb-5 img-fluid w-100 img-border" alt="attendance-1" loading="lazy"  />
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Tekan tombol <b>“Request Day Off”</b> untuk mengajukan cuti																							
											</p>
											<img src="/img/trial/pengguna-umum/attendance-2.png" class="mb-5 img-fluid w-100 img-border" alt="attendance-2" loading="lazy"  />																												
										</div>
									</div>

									<div class="row mt-3">
										<div class="col-sm-12 col-md-6 col-lg-6">
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>												
												Masukkan informasi yang dibutuhkan untuk pengajuan cuti, kemudian klik <b>“Submit”</b>.																						
											</p>
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6">
											<img src="/img/trial/pengguna-umum/attendance-3.png" class="mb-5 img-fluid w-100 img-border" alt="attendance-3" loading="lazy"  />																												
										</div>
									</div>

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
												<img src="/img/trial/mobile-1.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja from the Google Play Store" />
											</div>
										</div>
										<div class="col-md-6">
											<!-- <p class="trial-tab-content">Atau website Dokodemo-Kerja. <br><br></p> -->
											<p class="trial-tab-content">Atau download aplikasi mobile dari website Dokodemo perusahaan.</p>
											<img src="/img/trial/mobile-2.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja Mobile for iOS or Android" />
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
												<img src="/img/trial/mobile-3.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Login Page" loading="lazy" />
											</div>
										</div>
										<div class="col-md-6">
											<h2 class="tab-content-title content-section-title">3. Pilih Task</h2>
											<p class="trial-tab-content">User diminta untuk memilih Task 
											<br class="d-none d-md-block"><br class="d-none d-md-block">
											<br class="d-none d-md-block"><br class="d-none d-md-block">
											<br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
											<div class="text-center">
												<img src="/img/trial/mobile-4.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Task Selection" loading="lazy" />
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
													<img src="/img/trial/mobile-5.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Staff Login" loading="lazy" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>Tombol “Start” dan “Stop” <br class="d-none d-md-block"><br class="d-none d-md-block"><br class="d-none d-md-block d-lg-none"></p>
												<div class="text-center">
													<img src="/img/trial/mobile-6.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Play Button" loading="lazy" />
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
													<img src="/img/trial/mobile-7.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Location Tracking" loading="lazy" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>Screenshot layar desktop saat sedang bekerja. (Desktop App)<br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
												<div class="text-center">
													<img src="/img/trial/mobile-8.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Screen Recording Record" loading="lazy" />
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
													<img src="/img/trial/mobile-9.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Screen Record" loading="lazy" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<h2 class="tab-content-title content-section-title">6. Account</h2>
												<p>Menu ini menampilkan user profile, dan dapat digunakan untuk logout.</p>
												<div class="text-center">
													<img src="/img/trial/mobile-10.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Login" loading="lazy" />
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
<?php include($_SERVER['DOCUMENT_ROOT'].'/ind/component/modal-event-banner.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/ind/component/footer.php'); ?>
<script>
	document.getElementById("submit-btn-trial").disabled = true;

	function enableBtnTrial() {
		document.getElementById("submit-btn-trial").disabled = false;
	}
</script>
<script>
	$(function() {		
		$("#modal-event").modal('show');

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
