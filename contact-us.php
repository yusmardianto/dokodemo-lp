<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header-footer.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <title>Contact Us</title>
</head>
<?php $page = 'contact-us.php'; ?>
<body class="not-home">
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
			<form class="dokodemo-form">
			  <select class="contact-type" required>
				<option value="Request Free Trial" selected>Request Free Trial</option>
				<option value="Enterprise plan">Enterprise plan</option>
				<option value="Partnership">Partnership</option>
				<option value="Investment">Investment</option>
				<option value="How To Use">How To Use</option>
			  </select>
			  <div class="form-group row align-items-center">
				<label for="name" class="col-sm-3 col-form-label">Name <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="name" placeholder="Your Full Name" required>
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="company" class="col-sm-3 col-form-label">Company <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="company" placeholder="Your Company Name" required>
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="Phone" class="col-sm-3 col-form-label">Phone Number <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="number" class="form-control" id="Phone" placeholder="ex 0833 4075 6762" required>
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
				</div>
			  </div>
			  <div class="form-group row ">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Message</label>
				<div class="col-sm-9">
				  <textarea class="form-control" placeholder="Write down your message here, we would love to hear from you..."></textarea>
				</div>
			  </div>
			  <div class="form-group row mt-top">
				<div class="col-sm-12 text-center">
				  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
				  <div class="g-recaptcha" data-sitekey="your_site_key"></div>
				</div>
			  </div>
			  <div class="form-group row mt-top">
				<div class="col-sm-12 text-center">
				  <button type="submit" class="btn btn-submit">
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
		$(document).ready(function() {
			$('.contact-type').select2();
		});
	</script>

</body>

</html>