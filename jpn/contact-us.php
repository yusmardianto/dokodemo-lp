<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Load Composer's autoloader
	// require 'vendor/autoload.php';

	// Load config
	$config = include('../config/app.php');

	require '../action/c-contact-us.php';
	
?>

<?php 
    $page = 'contact-us';
    $page_title = '従業員管理ツールDokodemo-Kerja | LOGIQUEデジタルIndonesia';

    $meta_description = '勤怠管理ツールDokodemo-Kerjaに関するお問い合わせはこちらからお送りください。Dokodemo-Kerjaはインドネシアの開発会社LOGIQUE社が開発しました。リーズナブルな価格で即効果のでる製品です。お気軽にお問い合わせください。';
    $meta_keyword = 'weed out underperforming employees, get rid of lazy employees, increase productivity, dokodemo trial, dokodemo free, free hr tool, free management tool, small business tool, low budget tool, low budget hr tool, low budget management tool, free time tracker, free employee time tracker, free man hour tracker, screenshot tracker, screenshot employee monitor software cheap';

    $og_title = '従業員管理ツールDokodemo-Kerja';
    $og_image = 'https://dokodemo-kerja.com/img/og-img/contact-us.jpg';
    $og_desription = '勤怠管理ツールDokodemo-Kerjaに関するお問い合わせはこちらからお送りください。Dokodemo-Kerjaはインドネシアの開発会社LOGIQUE社が開発しました。';

    $add_css = '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />';

    include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/header.php');
?>

<div class="">
	<section class="contact-top text-center">
	  	<div class="container">
		 	 <div class="row contact-resp-settings">
		  		<h2 class="d-none">Contact Logique about the Remote Working Tool, Dokodemo Kerja </h2>
				<h1 class="col-sm-12 fs-32 uppercase bold" style="margin-bottom:20px">
				お問い合わせ
				</h1>
				<div class="col-md-6 offset-md-3 fs-20 semibold">
				勤怠管理、作業履歴把握ツール、Dokodemo-Kerjaに関するお問い合わせは下記のフォームからお願いいたします。
				</div>
		  	</div>
	 	 </div>
	</section>

	<br/><br/>

	<div class="container dokodemo-customoption">
	  <div class="row">
		  <div class="col-md-8 offset-md-2 contact-resp-settings">
			<div class="semibold fs-18 subtitle-contact">無料トライアル、料金に関して等、どんなことでもお気軽にお問い合わせください。日本語でご入力いただいて構いません。</div>

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

			<form action="https://formspree.io/xnqqyjdg" method="POST">

			  <select name="subject" class="contact-type form-control mb-3" required>
					<option value="How To Use" <?= !empty($errors) &&  $_POST['subject'] == 'How To Use'? 'selected' : ''?>>How To Use</option>
					<option value="Buy Plan" <?= !empty($errors) &&  $_POST['subject'] == 'Buy Plan'? 'selected' : ''?>>Buy Plan</option>
					<option value="Partnership" <?= !empty($errors) &&  $_POST['subject'] == 'Partnership'? 'selected' : ''?>>Partnership</option>
					<option value="Online Meeting" <?= !empty($errors) &&  $_POST['subject'] == 'Online Meeting'? 'selected' : ''?>>Online Meeting</option>
					<option value="Custom Feature" <?= !empty($errors) &&  $_POST['subject'] == 'Custom Feature'? 'selected' : ''?>>Custom Feature</option>
					<option value="Others" <?= !empty($errors) &&  $_POST['subject'] == 'Others'? 'selected' : ''?>>Others</option>
			  </select>

			  <div class="form-group row align-items-center">
				<label for="name" class="col-sm-3 col-form-label">Name <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="name" id="name" value="<?= !empty($errors) ? $_POST['name'] : ''?>" placeholder="Your Full Name" required>
				</div>
				</div>
				<div class="form-group row align-items-center">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Email <span style="color:red">*</span></label>
				<div class="col-sm-9">
				  <input type="email" name="email" class="form-control" id="inputEmail3" value="<?= !empty($errors) ? $_POST['email'] : ''?>" placeholder="Email" required>
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="company" class="col-sm-3 col-form-label">Company</label>
				<div class="col-sm-9">
				  <input type="text" name="company" class="form-control" id="company" placeholder="Your Company Name">
				</div>
			  </div>
			  <div class="form-group row align-items-center">
				<label for="Phone" class="col-sm-3 col-form-label">Phone Number</label>
				<div class="col-sm-9">
				  <input type="number" name="phone_number" class="form-control" id="Phone" placeholder="ex 0833 4075 6762">
				</div>
			  </div>
			  <div class="form-group row ">
				<label for="message" class="col-sm-3 col-form-label">Message</label>
				<div class="col-sm-9">
				  <textarea class="form-control" id="message" name="message" placeholder="Write down your message here, we would love to hear from you..."></textarea>
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
				  <button type="submit" class="btn btn-primary" id="submit-btn-en">
					Submit
				  </button>
				</div>
			  </div>
			</form>
		  </div>
	  </div>
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 cp-bot-container">
					<h4>If you want an immediate response, get in touch with us during office hours:</h4>
					<h5 class="mt-3 mb-3">09.00 - 17.00 (Mon-Fri)</h5>
					<p>
						<a href="tel:+62811870321">
								<img src="/img/pricing/call.png"aria-label="phone link"/>
						</a>
							<a href="mailto:info@logique.co.id" aria-label="mail link">
								<img src="/img/pricing/mail.png" alt=""/>
						</a>
						<a href="https://api.whatsapp.com/send?phone=62811870321" aria-label="whatsapp link" alt="" target="_blank" rel="noopener noreferrer">
								<img src="/img/pricing/whatsapp.png" alt=""/>
						</a>
					</p>
					</div>
			</div>
		</div>
	  <!-- <div class="semibold fs-18 subtitle-contact" style="margin-bottom:0;">
		We will come back to you within 2 Indonesian working days
	  </div><br/> -->
	</div>
	<br/>
</div>

<?php 
	$add_js = '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>';
	include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/footer.php'); 
?>
<script>
	document.getElementById("submit-btn-en").disabled = true;
	function enableBtn(){
		document.getElementById("submit-btn-en").disabled = false;
	}

	$(document).ready(function() {
		$('.contact-type').select2();
		$('#submit-btn-en').attr('disabled', true);
	});
</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>