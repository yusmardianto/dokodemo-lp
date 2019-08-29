<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Load Composer's autoloader
	require 'vendor/autoload.php';

	// Load config
	$config = include('config/app.php');
	
	require 'action/c-contact-us.php';
	
	$page = 'contact-us.php';
?>

<!DOCTYPE html>
<html lang="en"></html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" itemprop="description" content="Contact our marketing team to get a free dokodemo trial. We provide free trials, training support, pre-sales consultation, and we are ready to answer any questions you might have regarding our product. ">
  <meta name="keywords" content="dokodemo, dokodemo-kerja, enterprise program, monitoring program, reporting tool, request free trial, dokodemo email, dokodemo help, dokodemo contact, dokodemo sales, dokodemo marketing, request training, know your employee, startup tool, logique contact person, dokodemo contact person, what is dokodemo, what is remote working">
  <meta name="author" content="PT. Logique Digital Indonesia">
  <meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header-footer.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <title>Dokodemo-Kerja | Contact Us</title>
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
	<section class="contact-top text-center">
	  <div class="container">
		  <div class="row">
			  <div class="col-sm-12 fs-30 uppercase bold" style="margin-bottom:20px">
				Contact Us
			  </div>
			  <div class="col-md-6 offset-md-3 fs-20 semibold">
				For more information about Dokodemo-Kerja, please contact us by filling out the form below.
			  </div>
		  </div>
	  </div>
	</section>
	<br/><br/>
	<div class="container dokodemo-customoption">
	  <div class="row">
		  <div class="col-md-8 offset-md-2">
			<div class="semibold fs-18 subtitle-contact">What would you like to know about Dokodemo-Kerja?</div>
			
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
			
			<form class="dokodemo-form" action="" method="POST">

			  <select name="subject" class="contact-type" required>
				<option value="Request Free Trial" <?= !empty($errors) &&  $_POST['subject'] == 'Request Free Trial'? 'selected' : ''?>>Request Free Trial</option>
				<option value="Enterprise plan" <?= !empty($errors) &&  $_POST['subject'] == 'Enterprise plan'? 'selected' : ''?>>Enterprise plan</option>
				<option value="Partnership" <?= !empty($errors) &&  $_POST['subject'] == 'Partnership'? 'selected' : ''?>>Partnership</option>
				<option value="Investment" <?= !empty($errors) &&  $_POST['subject'] == 'Investment'? 'selected' : ''?>>Investment</option>
				<option value="How To Use" <?= !empty($errors) &&  $_POST['subject'] == 'How To Use'? 'selected' : ''?>>How To Use</option>
				<option value="Others" <?= !empty($errors) &&  $_POST['subject'] == 'Others'? 'selected' : ''?>>Others</option>
			  </select>

			  <div class="form-group row align-items-center">
				<label for="name" class="col-sm-3 col-form-label">Name <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="name" id="name" value="<?= !empty($errors) ? $_POST['name'] : ''?>" placeholder="Your Full Name" required>
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="company" class="col-sm-3 col-form-label">Company <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="text" name="company" class="form-control" id="company" value="<?= !empty($errors) ? $_POST['company'] : ''?>" placeholder="Your Company Name" required>
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="Phone" class="col-sm-3 col-form-label">Phone Number <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="number" name="phone_number" class="form-control" id="Phone" value="<?= !empty($errors) ? $_POST['phone_number'] : ''?>" placeholder="ex 0833 4075 6762" required>
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="email" name="email" class="form-control" id="inputEmail3" value="<?= !empty($errors) ? $_POST['email'] : ''?>" placeholder="Email" required>
				</div>
			  </div>
			  <div class="form-group row ">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Message</label>
				<div class="col-sm-9">
				  <textarea class="form-control" name="message" placeholder="Write down your message here, we would love to hear from you..."><?= !empty($errors) ? $_POST['message'] : ''?></textarea>
				</div>
			  </div>
			  <div class="form-group row mt-top">
				<div class="col-sm-12 text-center">
				  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
				  <div class="g-recaptcha" data-sitekey="<?= $config['site_key']?>" data-callback="enableBtn"></div>
				</div>
			  </div>
			  <div class="form-group row mt-top">
				<div class="col-sm-12 text-center">
				  <button type="submit" class="btn btn-submit" id="submit-btn">
					Submit
				  </button>
				</div>
			  </div>
			</form>
		  </div>
	  </div>
	  <br/><br/>
	  <div class="semibold fs-18 subtitle-contact" style="margin-bottom:0;">
		We will come back to you within 2 Indonesian working days
	  </div><br/>
	</div>
	<br/>
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
	<script>

		document.getElementById("submit-btn").disabled = true;
		function enableBtn(){
			document.getElementById("submit-btn").disabled = false;
		}

		$(document).ready(function() {
			$('.contact-type').select2();
		});
	</script>

</body>

</html>