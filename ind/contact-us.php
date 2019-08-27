<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Load Composer's autoloader
	require '../vendor/autoload.php';

	// Load config
	$config = include('../config/app.php');
	
	require '../action/c-contact-us.php';
	
	$page = 'contact-us.php';
?>

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
	<title>Contact Us</title>
</head>

<body class="not-home">
	<?php include 'header.php' ?>
	<section class="contact-top text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 fs-30 uppercase bold" style="margin-bottom:20px">
					HUBUNGI KAMI
				</div>
				<div class="col-md-6 offset-md-3 fs-20 semibold">
					Untuk informasi lebih lanjut tentang Dokodemo-Kerja, hubungilah kami dengan mengisi formulir dibawah ini.
				</div>
			</div>
		</div>
	</section>
	<br /><br />
	<div class="container dokodemo-customoption">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="semibold fs-18 subtitle-contact">Apa yang ingin anda tanyakan tentang Dokodemo-Kerja?</div>

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
					<select class="contact-type" required>
						<option value="Coba Gratis 30 Hari" <?= !empty($errors) &&  $_POST['subject'] == 'Coba Gratis 30 Hari'? 'selected' : ''?>>Coba Gratis 30 Hari</option>
						<option value="Enterprise plan" <?= !empty($errors) &&  $_POST['subject'] == 'Enterprise plan'? 'selected' : ''?>>Enterprise plan</option>
						<option value="Partnership" <?= !empty($errors) &&  $_POST['subject'] == 'Partnership'? 'selected' : ''?>>Partnership</option>
						<option value="Investment" <?= !empty($errors) &&  $_POST['subject'] == 'Investment'? 'selected' : ''?>>Investment</option>
						<option value="Cara Penggunaan" <?= !empty($errors) &&  $_POST['subject'] == 'Cara Penggunaan'? 'selected' : ''?>>Cara Penggunaan</option>
					</select>
					<div class="form-group row align-items-center">
						<label for="name" class="col-sm-3 col-form-label">Nama <span style="color:red">*</span></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="name" id="name" value="<?= !empty($errors) ? $_POST['name'] : ''?>" placeholder="Nama Lengkap" required>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="company" class="col-sm-3 col-form-label">Perusahaan <span style="color:red">*</span></label>
						<div class="col-sm-9">
							<input type="text" name="company" class="form-control" id="company" value="<?= !empty($errors) ? $_POST['company'] : ''?>" placeholder="Nama Perusahaan" required>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="Phone" class="col-sm-3 col-form-label">Nomor Telp <span style="color:red">*</span></label>
						<div class="col-sm-9">
							<input type="number" name="phone_number" value="<?= !empty($errors) ? $_POST['phone_number'] : ''?>" class="form-control" id="Phone" placeholder="ex 0833 4075 6762" required>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
						<div class="col-sm-9">
							<input type="email" name="email" value="<?= !empty($errors) ? $_POST['email'] : ''?>" class="form-control" id="inputEmail3" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group row ">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Pesan</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="message" placeholder="Tuliskan pesanmu disini..."><?= !empty($errors) ? $_POST['message'] : ''?></textarea>
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
								Kirim
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<br /><br />
		<!-- <div class="semibold fs-18 subtitle-contact" style="margin-bottom:0;">
			We will come back to you within 2 Indonesian working days
		</div><br /> -->
	</div>
	<br />
	<?php include 'footer.php' ?>
	<script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
	<script>

		document.getElementById("submit-btn").disabled = true;
		function enableBtn(){
			document.getElementById("submit-btn").disabled = false;
		}

		$(document).ready(function() {
			$('.contact-type').select2();
			$('#submit-btn').attr('disabled', true);
		});
	</script>

</body>

</html>