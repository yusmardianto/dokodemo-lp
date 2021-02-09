<?php
 	ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    // Load Composer's autoloader
    // require 'vendor/autoload.php';

    // Load config
	$config = include('config/app.php');

	require 'action/c-trial.php';
?>

<?php 
    $page = 'demo';
    $page_title = 'Attendance Management & Remote Work Tool Demo | Dokodemo-Kerja';

    $meta_description = 'The demo for the remote work management tool Dokodemo-Kerja can be found on the LOGIQUE website. An efficient tool for employee management & Ideal for use in Indonesia.';
    $meta_keyword = 'weed out underperforming employees, get rid of lazy employees, increase productivity, dokodemo trial, dokodemo free, free hr tool, free management tool, small business tool, low budget tool, low budget hr tool, low budget management tool, free time tracker, free employee time tracker, free man hour tracker, screenshot tracker, screenshot employee monitor software cheap';

    $og_title = 'Attendance management tool Dokodemo-Kerja demo';
    $og_image = 'https://dokodemo-kerja.com/img/dokodemo-og.jpg';
    $og_desription = 'For inquiries about the Remote Work System Dokodemo-Kerja, please send your inquiries from this page. Dokodemo-Kerja is developed by an Indonesian development company, LOGIQUE.';

    $canonical_link = 'https://dokodemo-kerja.com/demo';

    $add_css = '<link rel="stylesheet" href="/css/style-trial.css" />';

    include($_SERVER['DOCUMENT_ROOT'].'/component/header.php');
?>

<div class="">

	<section>
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb breadcrumb--main">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Demo</li>
				</ol>
			</nav>
		</div>
	</section>

	<section class="intro-section text-center px-4">
		<h1 class="banner-text-white">Try Our Free Demo</h1>
		<img src="/img/home/arrow-down.svg" class="pt-4 pb-3" width="20" alt=""/>
		<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" target="_blank" rel="noopener noreferrer" id="btn-demo">Admin Demo</a>
		<a href="https://drive.google.com/file/d/1kJA4zw9AlRcPQgkQThKdXOs9nfVI00ab/view?usp=sharing" target="_blank" rel="noopener noreferrer">
			<p class="trial-header-content">For staff demo, please follow the instruction below.</p>
		</a>
	</section>

	<section id="trial-content">
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="offset-md-1 col-md-10 tutor-container mt-4 mb-3">
					<!-- <iframe src="https://www.youtube.com/embed/Qyz0FtNbVbI" title="trial-iframe" class="trial-iframe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
					<div class="embed-responsive embed-responsive-16by9 feature-video">
                        <iframe class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
                            src="https://www.youtube.com/embed/OWmF48Cq_fA" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
				</div>
				<div class="offset-md-1 col-md-10 download-container text-center">
					<h3 class="download-title hidden-xs">Install demo application from the links below:</h3>
					<div class="row">
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1DkDLY7qhuf--1PbI7f1ZI2UlFVxo4ugl/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-windows"><i class="fa fa-download icon-download"></i>Windows</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1zAvBoFP2HsTqJSoV8an0fJg4L2BGSUzi/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn_download_mac"><i class="fa fa-download icon-download"></i>Mac OS</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1f5SxHEsLqxzGlNFmz6VSl8VHPVNj69zW/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-linux"><i class="fa fa-download icon-download"></i>Linux</a>
						</div>
					</div>
					<div class="row">
						<div class="offset-md-2 col-md-4 mb-2 mb-sm-0">
							<a target="_blank" href="https://apps.apple.com/id/app/dokodemo-kerja/id1506859201" class="mobile-apps__icon mobile-apps__icon--ios" id="btn-download-ios"></a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://play.google.com/store/apps/details?id=com.dokodemomobile" class="mobile-apps__icon mobile-apps__icon--android" id="btn-download-android"></a>
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
					<h3 class="trial-title">How To Use Dokodemo-Kerja</h3>
					
					<!-- <a href="https://dokodemo-kerja.com/pdf/install-guide-ENG.pdf" target="_blank" aria-label="Install Guide" class="dl-guide" rel="noopener noreferrer">
						<img src="/img/install.png" class="d-block img-fluid img-border mx-auto mb-3" id="trial-install-guide" alt="Dokodemo-Kerja Install Guide" />
					</a> -->
					<div class="installation-manual">
						Download installation manual here:
						<a class="installation-manual__item" target="_blank" href="https://drive.google.com/file/d/1jZut6Ouhi_HA26QoL4mvty45qZMAgdii/view?usp=sharing">
							<img src="/img/trial/pdf.svg" alt="">
							Desktop
						</a>
						<a class="installation-manual__item" target="_blank" href="https://drive.google.com/file/d/1g7X_m57cUDF-GJsgPyKgFWtx8LLeADbH/view?usp=sharing">
							<img src="/img/trial/pdf.svg" alt="">
							Mobile
						</a>
					</div>
					<div class="installation-manual">
						Download user manual here:
						<a class="installation-manual__item" target="_blank" href="/pdf/user_manual_dokodemo_ver_2-2-2-en.pdf">
							<img src="/img/trial/pdf.svg" alt="">
							Desktop
						</a>
					</div>
				</div>
				<div class="offset-md-1 col-md-10 tab-tutor-container">
					<nav>
						<div class="nav nav-tabs nav-tabs-trial text-center" id="nav-tab" role="tablist">
							<a class="nav-item nav-link trial-tab active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
								<span class="trial-tabfont">Admin Function</span>
							</a>
							<a class="nav-item nav-link trial-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
								<span class="trial-tabfont">General User</span>
							</a>
							<a class="nav-item nav-link trial-tab --divider" id="mobile-staff-tab" data-toggle="tab" href="#mobile-staff" role="tab" aria-controls="mobile-staff" aria-selected="false">
								<span class="trial-tabfont">Mobile Application</span>
							</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="trial-tab-container">
								<div>
									<div>
										<h2 class="tab-content-title content-section-title">1. Access Demo Environment</h2>
										<p class="trial-tab-content --no-list d-block mt-0">Click <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">this link</a> to access the Demo page</p>
									</div>
									<div class="pl-4 mb-5">
										<div class="row">
											<div class="col-md-6 col-lg-8">
												<p class="trial-tab-content">Login with the provided email and password.</p>
												<picture>
													<source srcset="/img/trial/admin-1.webp" type="image/webp">
													<img src="/img/trial/admin-1.jpg" alt="Dokodemo-Kerja Website Login" class="img-fluid img-border mb-3">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">2. Task Setting</h2>
									<div class="pl-4">
										<p class="trial-tab-content">It can be accessed through clicking <strong>Profile</strong> > <strong>Settings</strong> > <strong>Task</strong>.</p>
										<picture>
											<source srcset="/img/trial/admin-3-1.webp" type="image/webp">
											<img src="/img/trial/admin-3-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content">Click "<strong>Add New</strong>" to add new Task.<br class="d-none d-md-block d-lg-none d-xl-block"><br class="d-none d-md-block d-lg-none d-xl-block"><br class="d-none d-md-block d-lg-none"></p>
												<picture>
													<source srcset="/img/trial/admin-3-2.webp" type="image/webp">
													<img src="/img/trial/admin-3-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">Fill the task new information, click Submit, and New Task Added. </p>
												<picture>
													<source srcset="/img/trial/admin-3-3.webp" type="image/webp">
													<img src="/img/trial/admin-3-3.jpg" alt="Dokodemo-Kerja Install Guide" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">3. Team Setting</h2>
									<div class="pl-4">
										<p class="trial-tab-content">It can be accessed through clicking <strong>Profile</strong> > <strong>Settings</strong> > <strong>Team</strong>.</p>
										<picture>
											<source srcset="/img/trial/admin-4-1.webp" type="image/webp">
											<img src="/img/trial/admin-4-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content">Click "<strong>Add New</strong>" to add new Team.<br class="d-none d-md-block d-lg-none d-xl-block"><br class="d-none d-md-block d-lg-none d-xl-block"></p>
												<picture>
													<source srcset="/img/trial/admin-4-2.webp" type="image/webp">
													<img src="/img/trial/admin-4-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">Input the new Team Name and click "<strong>Submit</strong>". </p>
												<picture>
													<source srcset="/img/trial/admin-4-3.webp" type="image/webp">
													<img src="/img/trial/admin-4-3.jpg" alt="Dokodemo-Kerja Add Team Management" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">4. Staff Settings</h2>
									<div class="pl-4">
										<p class="trial-tab-content">It can be accessed through clicking <strong>Profile</strong> > <strong>Settings</strong> > <strong>Staff</strong>.</p>
										<picture>
											<source srcset="/img/trial/admin-2-1.webp" type="image/webp">
											<img src="/img/trial/admin-2-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content">Click "<strong>Add New</strong>" to add new Staff.<br class="d-none d-md-block"><br class="d-none d-md-block"></p>
												<picture>
													<source srcset="/img/trial/admin-2-2.webp" type="image/webp">
													<img src="/img/trial/admin-2-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">Input the new Staff information and click "<strong>Submit</strong>".</p>
												<picture>
													<source srcset="/img/trial/admin-2-3.webp" type="image/webp">
													<img src="/img/trial/admin-2-3.jpg" alt="Dokodemo-Kerja's Add Staff option" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
										<p class="trial-tab-content">Login Credentials will be sent to the registered E-mail address. With the credentials you can then use Dokodemo-Kerja.</p>
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
									<p class="trial-tab-content --no-list mt-0">Please use <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">this link</a> to download the Dokodemo-Kerja application.</p>
								</div>
								<div class="pl-4 mb-5">
									<div class="row">
										<div class="col-md-6">
											<p class="trial-tab-content ">Extract demo's folder and find Dokodemo-Kerja programs</p>
											<img src="/img/trial/staff-1.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Zip File"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">Run the Application <br class="d-none d-md-block"><br class="d-none d-md-block"></p>
											<img src="/img/trial/staff-2.png" class="mb-3 img-fluid w-100 img-border" alt="Downloaded Dokodemo-Kerja App Icon"/>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">2. Login and start using</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
													Login with the credentials sent to your Email.
												</p>
											</div>
											<img src="/img/trial/staff-3.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Version 2.0.0"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">Start your work by selecting your "<strong>Task</strong>" and press the "<strong>Play</strong>" button</p>
											<img src="/img/trial/staff-4.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application"/>
											<p class="trial-tab-content">You can stop by pressing the "<strong>Stop</strong>" (red) button</p>
											<img src="/img/trial/staff-5.png" class="mb-5 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application Appearance"/>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">3. Other Features</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
													There’s also today’s and week’s total hours written on homepage and,
												</p>
												<div class="trial-tab-content__list">
													<span style="color: #098AE4"><strong>Blue</strong></span>
													<span>: Minimize or Maximize the application</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E6B403"><strong>Yellow</strong></span>
													<span>: Go to Dokodemo-Kerja Admin website</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E3092A"><strong>Red</strong></span>
													<span>: Logout</span>
												</div>
												<div class="trial-tab-content__list">
													<span><strong>Today</strong></span>
													<span>: Today's accumulative work hours</span>
												</div>
												<div class="trial-tab-content__list">
													<span><strong>Weekly</strong></span>
													<span>: This week's accumulative work hours</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<img src="/img/trial/staff-6.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application"/>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">4. Screen Display</h2>
								<div class="pl-4">
									<p class="trial-tab-content">
										You can check which task was performed along with the duration of the task. You can edit the work time by clicking the edit icon. The edit history is also displayed in the center of the screen. The screenshots are displayed at the bottom of the screen.
									</p>
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
											<p class="trial-tab-content">Look for "Dokodemo Mobile" in the Play Store / App Store, and tap "Install"</p>
											<div class="text-center">
												<img src="/img/trial/mobile-1.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja from the Google Play Store"/>
											</div>
										</div>
										<div class="col-md-6">
											<!-- <p class="trial-tab-content">Atau website Dokodemo-Kerja. <br><br></p> -->
											<p class="trial-tab-content">Or download the Mobile App through your company's Dokodemo-Kerja website.</p>
											<img src="/img/trial/mobile-2.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja Mobile for iOS or Android"/>
										</div>
									</div>
								</div>

								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<h2 class="tab-content-title content-section-title">2. Login Page</h2>
											<div class="trial-tab-content">
												<p class="mb-0">Login dengan Company Code (DKDM), E-mail dan Password yang sudah didaftarkan di website demo Admin, kemudian tekan tombol Login.</p>
											</div>
											<div class="text-center">
												<img src="/img/trial/mobile-3.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Login Page"/>
											</div>
										</div>
										<div class="col-md-6">
											<h2 class="tab-content-title content-section-title">3. Choose a Task</h2>
											<p class="trial-tab-content">In order to start the time tracking, you must choose a task. This can also be done later.
											<br class="d-none d-md-block"><br class="d-none d-md-block">
											<br class="d-none d-md-block"><br class="d-none d-md-block d-lg-none">
											</p>
											<div class="text-center">
												<img src="/img/trial/mobile-4.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Task Selection"/>
											</div>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">4. Main Page</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>
													Here is the main display of the Dokodemo-Kerja Mobile App.
												</p>
												<div class="text-center">
													<img src="/img/trial/mobile-5.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Staff Login"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>The "Start" and "Stop" buttons are located at the bottom of the page.</p>
												<div class="text-center">
													<img src="/img/trial/mobile-6.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Play Button"/>
												</div>
											</div>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">5. Features</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>GPS Tracker which can be used to track employees outside of the office.</p>
												<div class="text-center">
													<img src="/img/trial/mobile-7.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Location Tracking"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>Screenshot records taken through the desktop app. <br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
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
												<p>Users can see their Daily, Weekly, and Monthly work hours record.</p>
												<div class="text-center">
													<img src="/img/trial/mobile-9.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Screen Record"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<h2 class="tab-content-title content-section-title">6. Account</h2>
												<p>This menu displays the user's profile, and is used to log out of the app. <br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
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

	<section class="trial-contact">
		<div class="container">
			<div class="row">
				<div class="offset-md-1 col-md-10">
					<p class="q-title text-white mt-3">
						If you have more questions, get in touch with us or download the full documentation
					</p>
					<a href="/contact-us.php" class="btn btn-trial-contact bold uppercase" id="btn-contact-us">Contact Us</a>
					<p class="q-title" style="text-decoration:underline">
						<a href="https://drive.google.com/file/d/1kJA4zw9AlRcPQgkQThKdXOs9nfVI00ab/view?usp=sharing" target="_blank" rel="noopener noreferrer" style="color:#fff">
							Download the manual guide
						</a>
					</p>
				</div>
			</div>
		</div>
	</section>

</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer.php'); ?>
<script>
	document.getElementById("submit-btn-trial").disabled = true;
	function enableBtnTrial(){
		document.getElementById("submit-btn-trial").disabled = false;
	}
</script>
<script>
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
</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>
