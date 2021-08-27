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
    $page_title = 'How Dokodemo-Kerja Works | The Top HRIS Software in Indonesia';
    $meta_description = 'Dokodemo-Kerja is currently the best HRIS software available in Jakarta & is quite easily functional on a laptop or mobile device. Try Demo Now. Free!';
    $meta_keyword = 'weed out underperforming employees, get rid of lazy employees, increase productivity, dokodemo trial, dokodemo free, free hr tool, free management tool, small business tool, low budget tool, low budget hr tool, low budget management tool, free time tracker, free employee time tracker, free man hour tracker, screenshot tracker, screenshot employee monitor software cheap';
    $og_title = 'How Dokodemo-Kerja Works | The Top HRIS Software in Indonesia';
    $og_image = 'https://dokodemo-kerja.com/img/dokodemo-og.jpg';
    $og_desription = 'Dokodemo-Kerja is currently the best HRIS software available in Jakarta & is quite easily functional on a laptop or mobile device. Try Demo Now. Free!';

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
					<h1 class="fs-30 text-center pt-2 mb-3">How to Use the Dokodemo-Kerja Application</h1>
					<p class="text-center">
						As one of the best Human Resource Information System (HRIS) software currently available in Indonesia, Dokodemo-Kerja was made to provide solutions for HR departments of companies that seek to use digital technology for a more effective and efficient Human Resources (HR) management processes.
					</p>
					<p class="text-center">
						Since the release of Version 2.0, apart from its main function as an efficient Online Attendance & Leave Management application, Dokodemo-Kerja has also been equipped with a GPS tracking feature, enabling the company to manage and monitor the work activities of staff who often work outside the office. How does Dokodemo-Kerja work and how would this application benefit your company?
					</p>

				</div>
			</div>
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
                            src="https://www.youtube.com/embed/ZRU2cc7lWbw" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
				</div>
				<div class="offset-md-1 col-md-10 download-container text-center">
					<h3 class="download-title hidden-xs">Install demo application from the links below:</h3>
					<div class="row">
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1q59CzDevBq5udGadJuaVLUbCJTBWULZQ/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-windows"><i class="fa fa-download icon-download"></i>Windows</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1f5JeqYJBCVDr8NKodaxrA9pF5lX0zyIn/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn_download_mac"><i class="fa fa-download icon-download"></i>Mac OS</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1Qm5Vg4h6skbQNergrsFPW0IMtUYx0XkD/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-linux"><i class="fa fa-download icon-download"></i>Linux</a>
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
									<h2 class="tab-content-title content-section-title">1. Access Demo Environment</h2>
									<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Please click <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">here </a> in order to access the Dokodemo-Kerja web page.</p>																			  
									<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> Login with the provided email and password.</p>																											
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
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">2. Task Setting</h2>
									<div class="pl-4">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">	
												<p class="trial-font-size">
													As an admin, you get permission to conduct Task Management.
												</p>										
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Open Settings, then click <b>“Task”</b>.
												</p>																													
												<img src="/img/trial/fungsi-admin-tab/1.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-task" loading="lazy" />																							
											</div>										
										</div>
										
										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Press the <b>"Add New"</b> button in order to add a New Task.
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
													Fill in the task name, team, and color tag of your choice, then click <b>“Submit”</b>.													
												</p>												
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">
												<img src="/img/trial/fungsi-admin-tab/3.png" class="mb-3 img-fluid w-100 img-border" alt="task-management-add-new-button-cancel-submit" loading="lazy" />
											</div>
										</div>
									</div>									
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">3. Team Setting</h2>
									<div class="pl-4">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">	
												<p class="trial-font-size">
													As an admin, you have permission to access Team Management options.
												</p>										
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Open Settings, then click <b>“Team”</b>.													
												</p>																													
												<img src="/img/trial/fungsi-admin-tab/pengaturan-team-1.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-team-1" loading="lazy" />																							
																																			
											</div>										
										</div>

										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Press the <b>"Add New"</b> untuk menambahkan button in order to add  <b>“New Team”</b>.													

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
													Fill in the team name then press <b>“Submit”</b> which then adds a new team.													
												</p>
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">
												<img src="/img/trial/fungsi-admin-tab/pengaturan-team-3.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-team-3" loading="lazy" />																							
											</div>
										</div>
									</div>								
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">4. Staff Settings</h2>
									<div class="pl-4">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12">	
												<p class="trial-font-size">
													As an admin, you get permission to conduct Staff Management.
												</p>										
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Open Settings, then click <b>“Staff”</b>.													
												</p>																													
												<img src="/img/trial/fungsi-admin-tab/pengaturan-staff-1.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-staff-1" loading="lazy" />																							
											</div>										
										</div>
										
										<div class="row mt-4">
											<div class="col-sm-12 col-md-6 col-lg-6">
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 
													Press the <b>"Add New"</b> button in order to add new staff members.													
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
													Enter the new staff information and then click the <b>"Submit"</b> option.													
												</p>
												<p class="mt-0 trial-font-size"> 
													<span style="color: var(--primary-main)">●</span> 																										
													After you click the <b>"Submit"</b> button, the system will then send the password <i>(generate by system)</i> in order to register the email address. With this information, any staff members managed by you can then officially use the Dokodemo-Kerja application.
												</p>	
												
											</div>
											<div class="col-sm-12 col-md-6 col-lg-6">
												<img src="/img/trial/fungsi-admin-tab/pengaturan-staff-3.png" class="mb-3 img-fluid w-100 img-border" alt="pengaturan-staff-3" loading="lazy" />
											</div>
										</div>
									</div>									
								</div>
								<p class="mt-4 " style="font-size: small;">
									<i>*When you decide to subscribe to Dokodemo-Kerja, the user will also need a Company Code in order to login to the application. Our party will then send it to the company PIC after your company is officially registered.</i>
								</p>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title">1. Accessing the Demo Environment</h2>
									<p class="mt-0 trial-font-size"> 
										<span style="color: var(--primary-main)">●</span> 
										Please click <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">here</a> to access the Dokodemo-Kerja web page.										
									</p>									
									<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> You can login with the provided email and password.</p>																		
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
											<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> 
												Click the <i>“download desktop app”</i> menu in order to download the demo app on your device.
											</p>																													
											<img src="/img/trial/pengguna-umum/2.png" class="mb-3 img-fluid w-100 img-border" alt="Install Dokodemo-Kerja" loading="lazy" />
											<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> 												
												Extract the demo folder and look for the Dokodemo-Kerja program
											</p>	
											<p class="mt-0 trial-font-size"> <span style="color: var(--primary-main)">●</span> 
												Run the demo version of the Dokodemo-Kerja application on your device.
											</p>																													
										</div>										
									</div>
								</div>
								
								<h2 class="tab-content-title content-section-title mt-4">3. Login and use the application</h2>
								<div class="pl-4">
									<div class="row mt-3">
										<div class="col-sm-12 col-md-6 col-lg-6">											
											<p class="mb-0 trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												For the demo version, please login using the <b>Company Code, Email,</b> dan <b>the default Password</b> that we have provided. Then click the <i>“Login”</i> option.												 
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
												Select the type of <b>“Task”</b>  you want to work on, then press the <i>“Play”</i> button.												 
											</p>
											<p class="mb-0 mt-2 trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Press the <b>"Stop"</b> button (red) in order to stop the application.												
											</p>											
										</div>
										<div class="col-sm-12 col-md-6 col-lg-6">
											<img src="/img/trial/pengguna-umum/4.jpg" class="mb-3 img-fluid w-100 img-border" alt="Masuk dan gunakan aplikasi" loading="lazy" />
										</div>										
									</div>
								</div>	

								<h2 class="tab-content-title content-section-title mt-4">4. Other Features</h2>
								<div class="pl-4">
									<div class="row mt-3">
										<div class="col-sm-12 col-md-6 col-lg-6">	
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Notification: notifications regarding the approval or rejection of a day off/leave.
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>												
												Announcement: notifications regarding a day off or information pertaining to national holidays.
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>												
												Today: number of hours worked per day.
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>												
												Weekly: number of hours worked per week.
											</p>	
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>	
												<span>
													<img src="/img/trial/pengguna-umum/icon-minimize.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>												
												: To minimize your Dokodemo-Kerja application
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>	
												<span>
													<img src="/img/trial/pengguna-umum/icon-browse-page-dokodemo.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>												
												: To access the Dokodemo-Kerja web page
											</p>	
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>	
												<span>
													<img src="/img/trial/pengguna-umum/icon-logout.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>												
												: To Log Out of the application. 
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
												Click the <b>“Work Session”</b> menu and select the <b>“My Work Session”</b> option.												
											</p>
											<hr />
											<p class="mt-4 trial-font-size">
												On this page, you can view the daily, weekly, or monthly total hours worked for a specific task. In addition, you can view the screenshots taken of your desktop while you were working.
											</p>
											<img src="/img/trial/pengguna-umum/8.png" class="mb-5 img-fluid w-100 img-border" alt="work-session-2" loading="lazy"  />
											<p class="trial-font-size">
												When you forget to turn off Dokodemo-Kerja and the overall hours recorded become inaccurate, you can use the 
												<span>
													<img src="/img/trial/pengguna-umum/icon-edit.PNG" height="40px" width="40px" class="img-border" alt="icon-minimize" loading="lazy"  />
												</span>	
												<b>icon  </b> to change this. Any changes will be recorded by the system and displayed on the <b>“History Edited Time”</b> menu.
											</p>


										</div>
									</div>
								</div>	

								<h2 class="tab-content-title content-section-title mt-4">6. Attendance</h2>
								<div class="pl-4">
									<div class="row mt-3">
										<div class="col-sm-12 col-md-12 col-lg-12">
											<p class="trial-font-size">
												Users can apply for a day off / leave through the application
											</p>
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Click the <b>“Attendance”</b> menu and select <b>“Day Off / Leave”</b>																								
											</p>
											<img src="/img/trial/pengguna-umum/attendance-1.png" class="mb-5 img-fluid w-100 img-border" alt="attendance-1" loading="lazy"  />
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Press the <b>“Request Day Off”</b> button in order to apply for a leave.																																		
											</p>
											<img src="/img/trial/pengguna-umum/attendance-2.png" class="mb-5 img-fluid w-100 img-border" alt="attendance-2" loading="lazy"  />																												
										</div>
									</div>

									<div class="row mt-3">
										<div class="col-sm-12 col-md-6 col-lg-6">
											<p class="trial-font-size">
												<span style="color: var(--primary-main)">●</span>
												Enter the required information to apply for a leave, then click <b>“Submit”</b> button.																																																							
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
