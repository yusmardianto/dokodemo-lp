<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/header-footer.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Trial</title>
</head>
<?php 
    require '../action/c-trial.php';
	$page = 'trial.php'; 
	?>
<body class="not-home">
	<?php include 'header.php' ?>
	<section class="trial-top">
		<div class="container">
			<div class="row">
				<div class="ls-title col text-center gray fs-30 bold uppercase">
					Coba Trial Gratis
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


					<form class="dokodemo-form">
						<div class="form-group row align-items-center">
							<label for="name" class="col-sm-3 col-form-label">Nama <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="company" class="col-sm-3 col-form-label">Perusahaan <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="company" placeholder="Nama Perusahaan" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="Phone" class="col-sm-3 col-form-label">Nomor Telp <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="Phone" placeholder="ex 0833 4075 6762" pattern="[0-9]*" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group row align-items-center">
							<label for="domain" class="col-sm-3 col-form-label">Domain</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="domain" placeholder="Domain">
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
									Kirim
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<br />
			<!-- <div class="semibold fs-18 subtitle-contact" style="margin-bottom:0;">We will set up your trial environment within 3 working days and come back to you with the login info</div> -->
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-md-1">
				<a href="pdf/manual-guide.pdf" target="_blank" aria-label="Manual Guide" class="dl-guide">
					<img src="/img/manual.png" class="d-block img-fluid m-auto" />
				</a>
			</div>
			<div class="col-md-5">
				<a href="pdf/install-guide.pdf" target="_blank" aria-label="Install Guide" class="dl-guide">
					<img src="/img/install.png" class="d-block img-fluid m-auto" />
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
	</div>
	<br /><br /><br />
	<?php include 'footer.php' ?>
	<script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>

</html>