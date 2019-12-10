<?php
 	ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    // Load Composer's autoloader
    // require 'vendor/autoload.php';

    // Load config
	$config = include('config/app.php');

	require 'action/c-trial.php';

	$page = 'trial.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" itemprop="description" content="No more slacking off, use dokodemo kerja to weed out the lazy ones and keep your best employees. Reward the achievers and experience the improvement in productivity. Free and receive special price for enterprise scale.">
    <meta name="keywords" content="weed out underperforming employees, get rid of lazy employees, increase productivity, dokodemo trial, dokodemo free, free hr tool, free management tool, small business tool, low budget tool, low budget hr tool, low budget management tool, free time tracker, free employee time tracker, free man hour tracker, screenshot tracker, screenshot employee monitor software cheap">
    <meta name="author" content="PT. Logique Digital Indonesia">
	<meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
	<meta property="og:title" content="Demo of Dokodemo-Kerja | Available in 3 Platforms">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dokodemo-Kerja">
    <meta property="og:url" content="https://dokodemo-kerja.com">
    <meta property="og:image" content="/img/dokodemo-og.jpg">
    <meta property="og:description" content="No more slacking off, use dokodemo kerja to weed out the lazy ones and keep your best employees. Reward the achievers and experience the improvement in productivity. Free 30 days trial and special price for enterprise scale.">

	<link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/header-footer.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-trial.css" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Demo of Dokodemo-Kerja | Available in 3 Platforms</title>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WT4MCDL');</script>
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '713777762291663');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=713777762291663&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146404615-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-146404615-1');
	</script>
</head>

<body class="not-home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT4MCDL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php include 'header.php' ?>
	<section class="intro-section text-center px-4">
		<h1 class="banner-text-white">Try the Free Demo First</h1>
		<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" target="_blank" rel="noopener noreferrer" id="btn-demo">Admin Demo</a>
		<a href="https://www.logique.co.id/pdf/manual-guide-ENG.pdf" target="_blank" rel="noopener noreferrer">
			<p class="trial-header-content">To try the staff demo, follow the instructions below</p>
		</a>
	</section>
	<section id="trial-content">
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="col-md-6 download-container">
					<h3 class="download-title hidden-xs">Install demo application from the links below:</h3>
					<a href="https://demo.dokodemo-kerja.com/files/Dokodemo-Kerja%20(Windows)%20demo%20v1.0.4.zip" class="btn btn-download bold uppercase hidden-xs" id="btn-download-windows"><i class="fa fa-download icon-download"></i>Windows</a>
					<a href="https://demo.dokodemo-kerja.com/files/Dokodemo-Kerja%20(Mac)%20demo%20v1.0.4.zip" class="btn btn-download bold uppercase hidden-xs" id="btn-download-ios"><i class="fa fa-download icon-download"></i>IOS</a>
					<a href="https://demo.dokodemo-kerja.com/files/Dokodemo-Kerja%20(Linux)%20demo%20v1.0.4.zip" class="btn btn-download bold uppercase hidden-xs" id="btn-download-linux"><i class="fa fa-download icon-download"></i>Linux</a>
					<a href="https://www.logique.co.id/pdf/install-guide.pdf" target="_blank" aria-label="Install Guide" class="dl-guide" rel="noopener noreferrer">
						<img src="img/install.png" class="d-block img-fluid img-border m-auto" id="trial-install-guide" alt="" />
					</a>
				</div>
				<div class="col-md-6 tutor-container mt-4 mb-3">
					<iframe src="https://www.youtube.com/embed/Qyz0FtNbVbI" title="trial-iframe" class="trial-iframe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row mt-5">
					<div class="col-md-12">
							<h3 class="trial-title">How To Use Dokodemo-Kerja</h3>
					</div>
					<div class="col-md-12 tab-tutor-container">
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
									<h2 class="tab-content-title content-section-title">1. Access Demo Environment</h2>
									<div class="pl-4 mb-5">
										<p class="trial-tab-content">Click <a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">this link</a> to access the Demo page</p>
										<p class="trial-tab-content">Click "Home"</p>
										<img src="/img/trial/admin-1.png" class="img-fluid img-border mb-3" alt="" />
										<p class="trial-tab-content">Login with the provided email and password</p>
										<img src="/img/trial/admin-2.png" class="img-fluid img-border mb-3" alt="" />
									</div>
									<h2 class="tab-content-title content-section-title">2. Add New Staff</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Click the "Staff" button</p>
										<img src="/img/trial/admin-3.png" class="mb-3 img-fluid img-border" alt="" />
										<p class="trial-tab-content">Click "Add Staff"</p>
										<img src="/img/trial/admin-4.png" class="mb-3 img-fluid img-border" alt="" />
										<p class="trial-tab-content">Fill in the Staff information</p>
										<img src="/img/trial/admin-5.png" class="mb-3 img-fluid img-border" alt="" />
										<p class="trial-tab-content">The staff will be drafted in the demo environment and an email will be sent to the staff's email.</p>
										<img src="/img/trial/admin-6.png" class="mb-5 img-fluid img-border" alt="" />
										<p class="trial-tab-content q-title mt-5">
											If you have more questions, get in touch with us or download the full documentation
										</p>
										<a href="/contact-us.php" class="btn btn-trial-contact bold uppercase" id="btn-contact-us">Contact Us</a>
										<p class="trial-tab-content q-title" style="color:blue; text-decoration:underline">
											<a href="/pdf/manual-guide-ENG.pdf" target="_blank" rel="noopener noreferrer">
												Download the manual guide
											</a>
										</p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								<div class="trial-tab-container">
									<h2 class="tab-content-title content-section-title">1. Access Demo Environment</h2>
									<div class="pl-4 mb-5">
										<p class="trial-tab-content ">Extract demo's folder and find Dokodemo-Kerja programs</p>
										<img src="/img/trial/staff-1.png" class="mb-3 img-fluid img-border"/>
										<p class="trial-tab-content">Run that application</p>
										<img src="/img/trial/staff-2.png" class="mb-3 img-fluid img-border"/>
									</div>
									<h2 class="tab-content-title content-section-title">2. Using Dokodemo-Kerja</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Login with credential that has been sent to email, or login with:</p>
										<p class="trial-tab-content bold">ID: sales@dokodemo-kerja.com </p>
										<p class="trial-tab-content bold">Password: Dokodemo-123</p>
										<img src="/img/trial/staff-3.png" class="mb-3 img-fluid img-border"/>
										<p class="trial-tab-content">Choose project and press Play button</p>
										<img src="/img/trial/staff-4.png" class="mb-3 img-fluid img-border"/>
										<p class="trial-tab-content">To stop project, press Pause button</p>
										<img src="/img/trial/staff-5.png" class="mb-5 img-fluid img-border"/>
									</div>
									<h2 class="tab-content-title content-section-title">3. Using Homepage</h2>
									<div class="pl-4">
										<p class="trial-tab-content">The website homepage can be accessed by clicking the "Website" button</p>
										<img src="/img/trial/staff-6.png" class="mb-3 img-fluid img-border"/>
										<p class="trial-tab-content">You can view the Screen record and how long you've worked. The icon inside the green bar is to manually edit your work hour.</p>
										<img src="/img/trial/staff-7.png" class="mb-5 img-fluid img-border"/>
										<p class="trial-tab-content q-title mt-5">
											If you have more questions, get in touch with us or download the full documentation
										</p>
										<a href="/contact-us.php" class="btn btn-trial-contact bold uppercase" id="btn-contact-us-staff">Contact Us</a>
										<p class="trial-tab-content q-title" style="color:blue; text-decoration:underline">
											<a href="https://www.logique.co.id/pdf/install-guide.pdf" target="_blank" rel="noopener noreferrer">
												Download the install guide
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
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
                    <p class="card-text">If you're interested in a live demo, or if you have any question at all, please fill the form below</p>
											<form action="https://formspree.io/xnqqyjdg" method="POST">
													<div class="form-group" style="text-align:left;">
															<label for="clientName">Name</label>
															<input type="text" class="form-control" name="clientName" id="clientName" placeholder="Enter your name">
													</div>
													<div class="form-group" style="text-align:left;">
															<label for="clientEmail">Email</label>
															<input type="email" class="form-control" name="clientEmail" id="clientEmail" placeholder="Enter your email">
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
	<section class="hide-button-on-mobile">
        <span id="popup-text" class="hide-popup-mobile">
            <div class="speech-bubble">
                Chat us on Whatsapp
            </div>
        </span>
        <a href="https://api.whatsapp.com/send?phone=62811870321&text=Halo, saya ingin bertanya tentang software Dokodemo-Kerja" aria-label="whatsapp link" rel="noopener noreferrer" target="_blank">
            <img src="../img/whatsapp.svg" id="fixedbutton" alt="" />
        </a>
    </section>
	<br /><br />
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		document.getElementById("submit-btn-trial").disabled = true;
		function enableBtnTrial(){
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
