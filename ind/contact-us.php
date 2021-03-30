<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Load Composer's autoloader
	// require '../vendor/autoload.php';

	// Load config
	$config = include('../config/app.php');

	require '../action/c-contact-us.php';
?>

<?php 
    $page = 'contact-us';
    $page_title = 'Kontak Kami | Aplikasi Absensi Online | Dokodemo Kerja';

    $meta_description = 'Informasi lengkap mengenai aplikasi absensi online terbaik, Dokodemo-Kerja bisa Anda dapatkan dengan menghubungi kontak kami berikut ini. Kami siap untuk berdiskusi dengan Anda.';
    $meta_keyword = '';

    $og_title = 'Kontak Kami | Aplikasi Absensi Online | Dokodemo Kerja';
    $og_image = 'dokodemo, dokodemo-kerja, program perusahaan, program pemantauan, alat pelaporan, uji coba gratis, email dokodemo, bantuan dokodemo, kontak dokodemo, penjualan dokodemo, pemasaran dokodemo, pelatihan permintaan, kenali karyawan Anda, alat startup, logique person contact person, kontak dokodemo orang, apa itu dokodemo, apa itu kerja jarak jauh';
    $og_desription = 'Informasi lengkap mengenai aplikasi absensi online terbaik, Dokodemo-Kerja bisa Anda dapatkan dengan menghubungi kontak kami berikut ini. Kami siap untuk berdiskusi dengan Anda.';

    $add_css = '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />';

    include($_SERVER['DOCUMENT_ROOT'].'/ind/component/header.php');
?>

<div class="">

	<section>
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb breadcrumb--main">
					<li class="breadcrumb-item"><a href="/ind/">Beranda</a></li>
					<li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
				</ol>
			</nav>
		</div>
	</section>

	<section class="contact-top text-center">
		<div class="container">
			<div class="row contact-resp-settings">
				<h2 class="d-none">Hubungi Logique Untuk Alat Kerja Remote Dokodemo Kerja</h2>
				<h1 class="col-sm-12 fs-32 uppercase bold" style="margin-bottom:20px">
					KONTAK KAMI
				</h1>
				<div class="col-md-6 offset-md-3 fs-20 semibold">
					Untuk informasi lebih lanjut tentang Dokodemo-Kerja, hubungilah kami dengan mengisi formulir dibawah ini.
				</div>
			</div>
		</div>
	</section>

	<br /><br />

	<div class="container dokodemo-customoption">
		<div class="row">
			<div class="col-md-8 offset-md-2 contact-resp-settings">
				<div class="semibold fs-18 subtitle-contact">Kalau ada pertanyaan mengenai Free Trial, Cara Subskripsi ataupun ingin tahu lebih lanjut mengenai Dokodemo-Kerja silahkan Kontak Kami dengan mengisi form dibawah.</div>

				<?php
					if (!is_null($success)) {
					?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" id="btn-close" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							Pesan anda <strong>berhasil</strong> dikirim
						</div>
					<?php }?>

					<?php
					if (!empty($errors)) {
					?>
					<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" id="btn-close-2" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php
						foreach ($errors as $key => $value) {
						echo $value."<br>";
						}
					?>
					</div>
				<?php }?>

				<form action="https://formspree.io/xnqqyjdg" method="POST">
					<select name="subject" class="contact-select form-control mb-3" required>
						<!-- <option value="Coba Gratis 30 Hari" <?= !empty($errors) &&  $_POST['subject'] == 'Coba Gratis 30 Hari'? 'selected' : ''?>>Coba Gratis 30 Hari</option> -->
						<option value="Cara Penggunaan" <?= !empty($errors) &&  $_POST['subject'] == 'Cara Penggunaan'? 'selected' : ''?>>Cara Penggunaan</option>
						<option value="Beli Plan" <?= !empty($errors) &&  $_POST['subject'] == 'Beli Plan'? 'selected' : ''?>>Pembelian Plan</option>
						<option value="Partnership" <?= !empty($errors) &&  $_POST['subject'] == 'Partnership'? 'selected' : ''?>>Partnership</option>
						<option value="Online Meeting" <?= !empty($errors) &&  $_POST['subject'] == 'Online Meeting'? 'selected' : ''?>>Online Meeting</option>
						<option value="Custom Feature" <?= !empty($errors) &&  $_POST['subject'] == 'Custom Feature'? 'selected' : ''?>>Custom Feature</option>
						<option value="Lainnya" <?= !empty($errors) &&  $_POST['subject'] == 'Lainnya'? 'selected' : ''?>>Lainnya</option>
					</select>
					<div class="form-group row align-items-center">
						<label for="name" class="col-sm-3 col-form-label">Nama <span style="color:red">*</span></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="name" id="name" value="<?= !empty($errors) ? $_POST['name'] : ''?>" placeholder="Nama Lengkap" required>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
						<div class="col-sm-9">
							<input type="email" name="email" value="<?= !empty($errors) ? $_POST['email'] : ''?>" class="form-control" id="inputEmail3" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="company" class="col-sm-3 col-form-label">Perusahaan </label>
						<div class="col-sm-9">
							<input type="text" name="company" class="form-control" id="company" placeholder="Nama Perusahaan">
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="Phone" class="col-sm-3 col-form-label">Nomor Telp</label>
						<div class="col-sm-9">
							<input type="number" name="phone_number" class="form-control" id="Phone" placeholder="ex 0833 4075 6762">
						</div>
					</div>
					<div class="form-group row ">
						<label for="message" class="col-sm-3 col-form-label">Pesan</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="message" name="message" placeholder="Tuliskan pesanmu disini..."></textarea>
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
							<button type="submit" class="btn btn-primary" id="submit-btn-id">
								Kirim
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
					</div>
		<br /><br />
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 cp-bot-container">
					<h4>Untuk respon langsung, hubungi kami pada jam kantor:</h4>
					<h5 class="mt-3 mb-3">09.00 - 17.00 (Senin - Jumat)</h5>
					<p>
						<a href="tel:+62811870321" aria-label="phone link">
                            <img src="../img/pricing/call.png" alt="" />
												</a>
												 <a href="mailto:info@logique.co.id" aria-label="mail link">
                            <img src="../img/pricing/mail.png" alt="" />
												</a>
												<a href="https://api.whatsapp.com/send?phone=62811870321" aria-label="whatsapp link" target="_blank" rel="noopener noreferrer">
                            <img src="../img/pricing/whatsapp.png" alt="" />
                        </a>
					</p>
					</div>
			</div>
		<!-- <div class="semibold fs-18 subtitle-contact" style="margin-bottom:0;">
			We will come back to you within 2 Indonesian working days
		</div><br /> -->
	</div>
	
	<br />

</div>

<?php 
	$add_js = '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>';
	include($_SERVER['DOCUMENT_ROOT'].'/ind/component/footer.php'); 
?>
<script>

	document.getElementById("submit-btn-id").disabled = true;
	function enableBtn(){
		document.getElementById("submit-btn-id").disabled = false;
	}

	$(document).ready(function() {
		$('.contact-select').select2();
		$('#submit-btn-id').attr('disabled', true);
	});

</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>
