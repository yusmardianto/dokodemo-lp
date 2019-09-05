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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" itemprop="description" content="No more slacking off, use dokodemo kerja to weed out the lazy ones and keep your best employees. Reward the achievers and experience the improvement in productivity. Free 30 days trial and special price for enterprise scalei.">
    <meta name="keywords" content="weed out underperforming employees, get rid of lazy employees, increase productivity, dokodemo trial, dokodemo free, free hr tool, free management tool, small business tool, low budget tool, low budget hr tool, low budget management tool, 30 days trial, free time tracker, free employee time tracker, free man hour tracker, screenshot tracker, screenshot employee monitor software cheap">
    <meta name="author" content="PT. Logique Digital Indonesia">
	<meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/header-footer.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-trial.css" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Dokodemo-Kerja | Trial</title>
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
		<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" target="_blank" id="btn-demo">Click Here</a>
		<a href="https://www.logique.co.id/pdf/manual-guide.pdf" target="_blank">
			<p class="trial-header-content">Download the Full Documentation</p>
		</a>
	</section>
	<section id="trial-content">
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="col-md-6 download-container">
					<h3 class="download-title">Download Links</h3>
					<a href="https://demo.dokodemo-kerja.com" class="btn btn-download bold uppercase" id="btn-demo"><i class="fa fa-download icon-download"></i>Windows</a>
					<a href="https://demo.dokodemo-kerja.com" class="btn btn-download bold uppercase" id="btn-demo"><i class="fa fa-download icon-download"></i>IOS</a>
					<a href="https://demo.dokodemo-kerja.com" class="btn btn-download bold uppercase" id="btn-demo"><i class="fa fa-download icon-download"></i>Linux</a>
					<a href="https://www.logique.co.id/pdf/install-guide.pdf" target="_blank" aria-label="Install Guide" class="dl-guide">
						<img src="img/install.png" class="d-block img-fluid img-border m-auto" />
					</a>
				</div>
				<div class="col-md-6 tutor-container mt-4 mb-3">
					<iframe src="https://www.youtube.com/embed/Qyz0FtNbVbI" class="trial-iframe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row mt-5">
					<div class="col-md-12">
							<h3 class="trial-title">Cara Menggunakan Dokodemo-Kerja</h3>
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
										<p class="trial-tab-content">Click this link to access the Demo page</p>
										<p class="trial-tab-content">Click "Home"</p>
										<img src="/img/trial/admin-1.png" class="img-fluid img-border mb-3" />
										<p class="trial-tab-content">Login with provided email and password</p>
										<img src="/img/trial/admin-2.png" class="img-fluid img-border mb-3" />
									</div>
									<h2 class="tab-content-title content-section-title">2. Add New Staff</h2>
									<div class="pl-4">
										<p class="trial-tab-content">Click the "Staff" button</p>
										<img src="/img/trial/admin-3.png" class="mb-3 img-fluid img-border" />
										<p class="trial-tab-content">Click "Add Staff"</p>
										<img src="/img/trial/admin-4.png" class="mb-3 img-fluid img-border" />
										<p class="trial-tab-content">Fill in the Staff information</p>
										<img src="/img/trial/admin-5.png" class="mb-3 img-fluid img-border" />
										<p class="trial-tab-content">The staff will be drafted in the demo environment and an email will be sent to the staff's email.</p>
										<img src="/img/trial/admin-6.png" class="mb-5 img-fluid img-border" />
										<p class="trial-tab-content q-title mt-5">
											If you have more questions, get in touch with us or download the full documentation
										</p>
										<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" id="btn-demo">Contact Us</a>
										<p class="trial-tab-content q-title" style="color:blue; text-decoration:underline">
											<a href=" https://www.logique.co.id/pdf/install-guide.pdf" target="_blank">
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
										<p class="trial-tab-content">Login with credential that has been sent to email, atau login with:</p>
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
										<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" id="btn-demo">Contact Us</a>
										<p class="trial-tab-content q-title" style="color:blue; text-decoration:underline">
											<a href="https://www.logique.co.id/pdf/manual-guide.pdf" target="_blank">
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
	<!-- <section class="trial-top" id="form-trial">
		<div class="container">
			<div class="row">
				<div class="ls-title col text-center gray fs-30 bold uppercase">
					Request Free Trial
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
						<?php }?>

						<?php
						if (!empty($errors)) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php
							foreach ($errors as $key => $value) {
							echo $value."<br>";
							}
						?>
						</div>
					<?php }?>

					<form class="dokodemo-form"  action="" method="POST">
						<div class="form-group row align-items-center">
							<label for="name" class="col-sm-3 col-form-label">Name <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name"  name="name" value="<?= !empty($errors) ? $_POST['name'] : ''?>" placeholder="Your Full Name" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="company" class="col-sm-3 col-form-label">Company <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="company" name="company" value="<?= !empty($errors) ? $_POST['company'] : ''?>" placeholder="Your Company Name" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="Phone" class="col-sm-3 col-form-label">Phone Number <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="Phone" name="phone_number" value="<?= !empty($errors) ? $_POST['phone_number'] : ''?>" placeholder="ex 0833 4075 6762" pattern="[0-9]*" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="inputEmail3" name="email" value="<?= !empty($errors) ? $_POST['email'] : ''?>" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="domain" class="col-sm-3 col-form-label">Domain</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="domain" name="domain" value="<?= !empty($errors) ? $_POST['domain'] : ''?>" placeholder="Your Domain">
							</div>
						</div>
						<div class="form-group row mt-top">
							<div class="col-sm-12 text-center">
								<script src="https://www.google.com/recaptcha/api.js" async defer></script>
								<div class="g-recaptcha" data-sitekey="<?= $config['site_key']?>" data-callback="enableBtnTrial"></div>
							</div>
						</div>
						<div class="form-group row mt-top">
							<div class="col-sm-12 text-center">
								<button type="submit" id="submit-btn-trial" class="btn btn-submit">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<br />
			<div class="semibold fs-18 subtitle-contact" style="margin-bottom:0;">We will set up your trial environment within 3 working days and come back to you with the login info</div>
		</div>
	</section> -->

	<!-- <div class="container">
		<div class="row mt-5">
			<div class="col-md-5 offset-md-1">
				<a href="pdf/manual-guide.pdf" target="_blank" aria-label="Manual Guide" class="dl-guide">
					<img src="img/manual.png" class="d-block img-fluid img-border m-auto" />
				</a>
			</div>
			<div class="col-md-5">
				<a href="pdf/install-guide.pdf" target="_blank" aria-label="Install Guide" class="dl-guide">
					<img src="img/install.png" class="d-block img-fluid img-border m-auto" />
				</a>
			</div>
		</div>
		<div class="row mt-top">
			<div class="mt-top ls-title col text-center gray fs-30 bold uppercase">
			Frequently Asked Questions
			</div>
		</div>
		<div class="row mt-top">
			<div class="col-md-8 offset-md-2">
				<div id="accordion" class="accordion-trial">
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
							<div class="card-header">
								On which OS can <span class="semibold">Dokodemo-Kerja</span> be used? What should be prepared to run it?
							</div>
						</a>
						<div id="collapseOne" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Dokodemo-Kerja can operate on any popular OS, such as Windows, Macintosh, and Linux. You don’t have to prepare a server. All you have to do is simply install Dokodemo-Kerja, and you can start using it right away. The administrator can access the management screen through browser.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
							<div class="card-header">
								Can <span class="semibold">Dokodemo-Kerja</span> be operate on mobile devices?
							</div>
						</a>
						<div id="collapseTwo" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Dokodemo-Kerja doesn’t yet cover staffs who work on mobile device. It is still out of our service.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
							<div class="card-header">
								How does <span class="semibold">Dokodemo-Kerja</span> manage staffs who work outside the office?
							</div>
						</a>
						<div id="collapseThree" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Work hours can be edited later when staffs use computers again. Dokodemo-Kerja is fundamentally targeted for employees who mainly do desk work.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse4">
							<div class="card-header">
								Can <span class="semibold">Dokodemo-Kerja</span> be used outside Indonesia?
							</div>
						</a>
						<div id="collapse4" class="collapse" data-parent="#accordion">
							<div class="card-body">
								You can use it with no problem. If you use Dokodemo-Kerja while moving to a place with different time zone during the same day, there will be no problem but the monitoring process will be a little bit complicated.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse5">
							<div class="card-header">
								Can I change the frequency of capturing and sending screenshots in <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse5" class="collapse" data-parent="#accordion">
							<div class="card-body">
								In Light version, the screenshot will be captured randomly every 10 minutes. In Standard version, one screenshot per 1 minute. Those screenshots will be captured at random time, therefore users can’t know when it will be captured and sent.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse6">
							<div class="card-header">
								What about the resolution of screenshot image used by <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse6" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Dokodemo-Kerja uses image resolution that considers privacy. You can see what the image is, but you can’t see the small detail within it. For instance, you can see a user has opened a client’s email, but you can’t see the content clearly. Also, if a user opens a chat tool, you can’t see what kind of message they have
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse7">
							<div class="card-header">
								Is there a minimum contract period needed to use <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse7" class="collapse" data-parent="#accordion">
							<div class="card-body">
								There is no minimum contract period. Dokodemo-Kerja is available from the first month of contract.
							</div>
						</div>
					</div>
					<hr />
					<div class="card">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapse8">
							<div class="card-header">
								How do I purchase <span class="semibold">Dokodemo-Kerja</span>?
							</div>
						</a>
						<div id="collapse8" class="collapse" data-parent="#accordion">
							<div class="card-body">
								At the end of the month, we will count the number of users and issue an invoice. You can pay it via bank transfer until the end of next month.
							</div>
						</div>
					</div>
					<hr />
				</div>
			</div>
		</div>
	</div> -->
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
</body>

</html>