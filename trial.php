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
  <title>Trial</title>
</head>

<body class="not-home">
	<?php include 'header.php' ?>
	<section class="trial-top">
	  <div class="container">
		  <div class="row">
			  <div class="ls-title col text-center gray fs-30 bold uppercase">
				Request Free Trial
			  </div>
		  </div>
		  <br/>
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
	</section>
	
	<div class="container">
	  <div class="row">
		<div class="col-md-5 offset-md-1">
			<a href="pdf/manual-guide.pdf" target="_blank" aria-label="Manual Guide" class="dl-guide">
				<img src="img/manual.png" class="d-block img-fluid m-auto"/>
			</a>
		</div>
		<div class="col-md-5">
			<a href="pdf/install-guide.pdf" target="_blank" aria-label="Install Guide" class="dl-guide">
				<img src="img/install.png" class="d-block img-fluid m-auto"/>
			</a>
		</div>
	  </div>
	  <div class="row mt-top">
		<div class="mt-top ls-title col text-center gray fs-30 bold uppercase">
			Frequently Ask Question
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
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
				<div class="card">
				  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
					  <div class="card-header">
						  Can <span class="semibold">Dokodemo-Kerja</span> be operate on mobile devices?
					  </div>
				  </a>
				  <div id="collapseTwo" class="collapse" data-parent="#accordion">
					<div class="card-body">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
				<div class="card">
				  <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
				    <div class="card-header">
					  How does <span class="semibold">Dokodemo-Kerja</span> manage staffs who work outside the office?
				    </div>
			      </a>
				  <div id="collapseThree" class="collapse" data-parent="#accordion">
					<div class="card-body">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
				<div class="card">
				  <a class="collapsed card-link" data-toggle="collapse" href="#collapse4">
				    <div class="card-header">
					  Can <span class="semibold">Dokodemo-Kerja</span> be used outside Indonesia?
				    </div>
			      </a>
				  <div id="collapse4" class="collapse" data-parent="#accordion">
					<div class="card-body">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
				<div class="card">
				  <a class="collapsed card-link" data-toggle="collapse" href="#collapse5">
				    <div class="card-header">
					   Can I change the frequency of capturing and sending screenshots in <span class="semibold">Dokodemo-Kerja</span>?
				    </div>
			      </a>
				  <div id="collapse5" class="collapse" data-parent="#accordion">
					<div class="card-body">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
				<div class="card">
				  <a class="collapsed card-link" data-toggle="collapse" href="#collapse6">
				    <div class="card-header">
					   What about the resolution of screenshot image used by <span class="semibold">Dokodemo-Kerja</span>?
				    </div>
			      </a>
				  <div id="collapse6" class="collapse" data-parent="#accordion">
					<div class="card-body">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
				<div class="card">
				  <a class="collapsed card-link" data-toggle="collapse" href="#collapse7">
				    <div class="card-header">
					   Is there a minimum contract period needed to use <span class="semibold">Dokodemo-Kerja</span>?
				    </div>
			      </a>
				  <div id="collapse7" class="collapse" data-parent="#accordion">
					<div class="card-body">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
				<div class="card">
				  <a class="collapsed card-link" data-toggle="collapse" href="#collapse8">
				    <div class="card-header">
					  How do I purchase <span class="semibold">Dokodemo-Kerja</span>?
				    </div>
			      </a>
				  <div id="collapse8" class="collapse" data-parent="#accordion">
					<div class="card-body">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				  </div>
				</div>
				<hr/>
			  </div>
		</div>
	  </div>
	</div>
	<br/><br/><br/>
	<?php include 'footer.php' ?>
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>