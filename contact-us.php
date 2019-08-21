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
  <title>Trial</title>
</head>

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
	
	<div class="container">
	  <div class="row">
		  <div class="col-md-8 offset-md-2">
			<form class="dokodemo-form">
			  <div class="form-group row align-items-center">
				<label for="name" class="col-sm-3 col-form-label">Name</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="name" placeholder="Your Full Name">
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="company" class="col-sm-3 col-form-label">Company</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="company" placeholder="Your Company Name">
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="Phone" class="col-sm-3 col-form-label">Phone Number</label>
				<div class="col-sm-9">
				  <input type="number" class="form-control" id="Phone" placeholder="ex 0833 4075 6762">
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm-9">
				  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
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
	</div>
	<br/><br/><br/>
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>