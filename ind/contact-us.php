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
				<select class="contact-type" required>
					<option value="Request Free Trial" selected>Coba Gratis 30 Hari</option>
					<option value="Others">Others</option>
				</select>
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
						<label for="inputEmail3" class="col-sm-3 col-form-label">Pesan</label>
						<div class="col-sm-9">
							<textarea class="form-control" placeholder="Tuliskan pesanmu disini..."></textarea>
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
		$(document).ready(function() {
			$('.contact-type').select2();
		});
	</script>

</body>

</html>