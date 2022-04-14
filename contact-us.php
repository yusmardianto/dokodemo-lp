<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Load Composer's autoloader
	// require 'vendor/autoload.php';

	// Load config
	$config = include('config/app.php');

	require 'action/c-contact-us.php';
?>

<?php 
    $page = 'contact-us';
    $page_title = 'Contact Us | LOGIQUE Digital Indonesia';

    $meta_description = 'For inquiries about the attendance management tool, Dokodemo-Kerja, please use this page. Dokodemo-Kerja was developed by an Indonesian development company LOGIQUE. It is a product that will show an immediate effect at a reasonable price. Please feel free to contact us.';
    $meta_keyword = 'dokodemo, dokodemo-kerja, enterprise program, monitoring program, reporting tool, Buy Light Plan, dokodemo email, dokodemo help, dokodemo contact, dokodemo sales, dokodemo marketing, request training, know your employee, startup tool, logique contact person, dokodemo contact person, what is dokodemo, what is remote working';

    $og_title = 'Contact Us | LOGIQUE | Remote Work Systems';
    $og_image = 'https://dokodemo-kerja.com/img/og-img/contact-us.jpg';
    $og_desription = 'For inquiries about the attendance management tool Dokodemo-Kerja, please send from here. Dokodemo-Kerja was developed by Indonesian development company LOGIQUE.';
	$canonical = '/contact-us';

    $add_css = '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />';

    include($_SERVER['DOCUMENT_ROOT'].'/component/header.php');
?>

<div class="">

	<section>
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb breadcrumb--main">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				</ol>
			</nav>
		</div>
	</section>

	<section class="contact-top text-center">
	  	<div class="container">
		 	 <div class="row contact-resp-settings">
		  		<h2 class="d-none">Contact Logique about the Remote Working Tool, Dokodemo Kerja </h2>
				<h1 class="col-sm-12 fs-32 uppercase bold" style="margin-bottom:20px">
					Contact Us
				</h1>
				<div class="col-md-10 offset-md-1 fs-20 semibold">
					We are happy to answer any questions you may have concerning Dokodemo-Kerja. Please do not hesitate to contact us; our team of experts will promptly assist you.
				</div>
		  	</div>
	 	 </div>
	</section>

	<br/><br/>

	<div class="container dokodemo-customoption">
	  <div class="row">
		  <div class="col-md-8 offset-md-2 contact-resp-settings">
			<div class="semibold fs-18 subtitle-contact">If you have any questions about the available free trial, how to subscribe, or simply require further information regarding a certain topic, please contact us by filling in the following form. Our team will assist you with a response as quickly as possible.</div>

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
					<h4>For a faster response, you may also contact us directly via telephone, email, or Whatsapp during our operational hours.</h4>
					<h5 class="mt-3 mb-3">09.00 - 17.00 (Monday-Friday)</h5>
					<p>
						<a href="tel:+62811870321">
								<img src="/img/pricing/call.png"aria-label="phone link"/>
						</a>
						<a href="https://api.whatsapp.com/send?phone=62811870321" aria-label="whatsapp link" alt="" target="_blank" rel="noopener noreferrer">
								<img src="/img/pricing/whatsapp.png" alt=""/>
						</a>
					</p>
				</div>
			</div>

			<div class="row mt-5 mb-4">
				<div class="col-md-8 offset-md-2" style="line-height: 1.5;">
					<h3 style=" font-size: 24px; ">Dokodemo-Kerja</h3>
					<p class="text-justify">Dokodemo-Kerja is a cloud-based <a href="https://dokodemo-kerja.com/" target="_BLANK">online attendance application</a> that makes it easier for companies to remotely monitor the attendance and productivity of all employees. There are a number of benefits regarding this application, as it was deliberately built utilizing a variety of useful functions, such as screen capture, GPS tracking and leave management features, among others.</p>
					<p class="text-justify">Until now, Dokodemo-Kerja has been used by various companies throughout Indonesia and has proven to be able to help manage employees in an effective and efficient manner. Through the features that have been provided, both the company and its employees can experience first hand the various benefits that can be gained from using this application, some of which include an increased level of discipline for employees, as well as a good work life balance.</p>
					<p class="text-justify">If your company needs a high quality online attendance application that is reliable, safe, and easy to use, then Dokodemo-Kerja is the answer that you’ve been waiting for. We will always seek to provide your company with our ongoing support, and will ensure that you receive the maximum number of benefits from the use of our application.</p>
					<p class="text-justify">Meet your company's needs through implementing <a href="https://dokodemo-kerja.com/hris-info" target="_BLANK">HRIS technology</a> for better employee management.</p>
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
	include($_SERVER['DOCUMENT_ROOT'].'/component/footer.php'); 
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