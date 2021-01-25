<?php
 	ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    // Load Composer's autoloader
    // require 'vendor/autoload.php';

    // Load config
	$config = include('../config/app.php');

	require '../action/c-trial.php';
?>

<?php 
    $page = 'demo';
    $page_title = '勤怠管理ツールDokodemo-Kerjaのデモ | LOGIQUEデジタルインドネシア';

    $meta_description = '勤怠管理ツールDokodemo-Kerjaのデモはこちらから確認いただけます。Dokodemo-Kerjaを使うことでリモートワークも時短勤務制度も即時導入可能となります。従業員を管理するだけのツールではなく従業員にもメリットのあるツールです。インドネシアでの利用に最適です。';
    $meta_keyword = 'weed out underperforming employees, get rid of lazy employees, increase productivity, dokodemo trial, dokodemo free, free hr tool, free management tool, small business tool, low budget tool, low budget hr tool, low budget management tool, free time tracker, free employee time tracker, free man hour tracker, screenshot tracker, screenshot employee monitor software cheap';

    $og_title = '勤怠管理ツールDokodemo-Kerjaのデモ';
    $og_image = 'https://dokodemo-kerja.com/img/dokodemo-og.jpg';
    $og_desription = '勤怠管理ツールDokodemo-Kerjaのデモはこちらから確認いただけます。インドネシアでの利用に最適です。';

    $canonical_link = 'https://dokodemo-kerja.com/demo';

    $add_css = '<link rel="stylesheet" href="/css/style-trial.css" />';

    include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/header.php');
?>

<div class="">
	<section class="intro-section text-center px-4">
		<h1 class="banner-text-white">無料デモをお試しください</h1>
		<img src="/img/home/arrow-down.svg" class="pt-4 pb-3" width="20" alt=""/>
		<a href="https://demo.dokodemo-kerja.com" class="btn btn-trial-contact bold uppercase" target="_blank" rel="noopener noreferrer" id="btn-demo">管理者用のデモを試す</a>
		<a href="https://drive.google.com/file/d/1kJA4zw9AlRcPQgkQThKdXOs9nfVI00ab/view?usp=sharing" target="_blank" rel="noopener noreferrer">
			<p class="trial-header-content">従業員用デモは下記に従ってお試しください</p>
		</a>
	</section>

	<section id="trial-content">
		<div class="container">
			<div class="row mt-5 mb-5">
				<div class="offset-md-1 col-md-10 tutor-container mt-4 mb-3">
					<!-- <iframe src="https://www.youtube.com/embed/Qyz0FtNbVbI" title="trial-iframe" class="trial-iframe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
					<div class="embed-responsive embed-responsive-16by9 feature-video">
                        <iframe class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
                            src="https://www.youtube.com/embed/OWmF48Cq_fA" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
				</div>
				<div class="offset-md-1 col-md-10 download-container text-center">
					<h3 class="download-title hidden-xs">デモアプリのインストールはこちらから</h3>
					<div class="row">
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1DkDLY7qhuf--1PbI7f1ZI2UlFVxo4ugl/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-windows"><i class="fa fa-download icon-download"></i>Windows</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1zAvBoFP2HsTqJSoV8an0fJg4L2BGSUzi/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn_download_mac"><i class="fa fa-download icon-download"></i>Mac OS</a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://drive.google.com/file/d/1f5SxHEsLqxzGlNFmz6VSl8VHPVNj69zW/view?usp=sharing" class="btn btn-download bold hidden-xs" id="btn-download-linux"><i class="fa fa-download icon-download"></i>Linux</a>
						</div>
					</div>
					<div class="row">
						<div class="offset-md-2 col-md-4 mb-2 mb-sm-0">
							<a target="_blank" href="https://apps.apple.com/id/app/dokodemo-kerja/id1506859201" class="mobile-apps__icon mobile-apps__icon--ios" id="btn-download-ios"></a>
						</div>
						<div class="col-md-4">
							<a target="_blank" href="https://play.google.com/store/apps/details?id=com.dokodemomobile" class="mobile-apps__icon mobile-apps__icon--android" id="btn-download-android"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="background-color: #f1faff">
		<div class="container">
			<div class="row mt-5">
				<div class="offset-md-1 col-md-10">
					<h3 class="trial-title">Dokodemo-Kerjaデモ版のご利用方法</h3>
					
					<!-- <a href="https://dokodemo-kerja.com/pdf/install-guide-ENG.pdf" target="_blank" aria-label="Install Guide" class="dl-guide" rel="noopener noreferrer">
						<img src="/img/install.png" class="d-block img-fluid img-border mx-auto mb-3" id="trial-install-guide" alt="Dokodemo-Kerja Install Guide" />
					</a> -->
					<div class="installation-manual">
					インストールマニュアルはこちらからダウンロードください
						<a class="installation-manual__item" target="_blank" href="https://drive.google.com/file/d/1jZut6Ouhi_HA26QoL4mvty45qZMAgdii/view?usp=sharing">
							<img src="/img/trial/pdf.svg" alt="">
							Desktop
						</a>
						<a class="installation-manual__item" target="_blank" href="https://drive.google.com/file/d/1g7X_m57cUDF-GJsgPyKgFWtx8LLeADbH/view?usp=sharing">
							<img src="/img/trial/pdf.svg" alt="">
							Mobile
						</a>
					</div>
					<div class="installation-manual">
					操作マニュアルはこちらからダウンロードください
						<a class="installation-manual__item" target="_blank" href="/pdf/user_manual_dokodemo_ver_2-2-2-en.pdf">
							<img src="/img/trial/pdf.svg" alt="">
							Desktop
						</a>
					</div>
				</div>
				<div class="offset-md-1 col-md-10 tab-tutor-container">
					<nav>
						<div class="nav nav-tabs nav-tabs-trial" id="nav-tab" role="tablist">
							<a class="nav-item nav-link trial-tab active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
								<span class="trial-tabfont">管理者用機能</span>
							</a>
							<a class="nav-item nav-link trial-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
								<span class="trial-tabfont">一般ユーザー用</span>
							</a>
							<a class="nav-item nav-link trial-tab --divider" id="mobile-staff-tab" data-toggle="tab" href="#mobile-staff" role="tab" aria-controls="mobile-staff" aria-selected="false">
								<span class="trial-tabfont">スマホアプリ</span>
							</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="trial-tab-container">
								<div>
									<div>
										<h2 class="tab-content-title content-section-title">1. デモ環境にアクセスする</h2>
										<p class="trial-tab-content --no-list d-block mt-0"><a class="font-weight-bold" href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer">このリンク</a>にアクセスしてください</p>
									</div>
									<div class="pl-4 mb-5">
										<div class="row">
											<div class="col-md-6 col-lg-8">
												<p class="trial-tab-content">別途ご連絡するIDとパスワードでログインします</p>
												<picture>
													<source srcset="/img/trial/admin-1.webp" type="image/webp">
													<img src="/img/trial/admin-1.jpg" alt="Dokodemo-Kerja Website Login" class="img-fluid img-border mb-3">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">2. タスクを設定管理できます</h2>
									<div class="pl-4">
										<p class="trial-tab-content"><strong>Profile</strong> - <strong>Settings</strong> - <strong>Task</strong>から設定できます</p>
										<picture>
											<source srcset="/img/trial/admin-3-1.webp" type="image/webp">
											<img src="/img/trial/admin-3-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content"><strong>Add New</strong>から新規タスクを登録できます</p>
												<picture>
													<source srcset="/img/trial/admin-3-2.webp" type="image/webp">
													<img src="/img/trial/admin-3-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">入力後、Submitボタンを押してください</p>
												<picture>
													<source srcset="/img/trial/admin-3-3.webp" type="image/webp">
													<img src="/img/trial/admin-3-3.jpg" alt="Dokodemo-Kerja Install Guide" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">3. 部署・チームを設定管理します</h2>
									<div class="pl-4">
										<p class="trial-tab-content"><strong>Profile</strong> - <strong>Settings</strong> - <strong>Team</strong>から設定できます</p>
										<picture>
											<source srcset="/img/trial/admin-4-1.webp" type="image/webp">
											<img src="/img/trial/admin-4-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content"><strong>Add New</strong>から新規チームを登録できます<br class="d-none d-md-block d-lg-none d-xl-block"><br class="d-none d-md-block d-lg-none d-xl-block"></p>
												<picture>
													<source srcset="/img/trial/admin-4-2.webp" type="image/webp">
													<img src="/img/trial/admin-4-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">チーム名、チーム長情報入力して、登録します</p>
												<picture>
													<source srcset="/img/trial/admin-4-3.webp" type="image/webp">
													<img src="/img/trial/admin-4-3.jpg" alt="Dokodemo-Kerja Add Team Management" class="mb-5 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
									</div>
								</div>
								<div>
									<h2 class="tab-content-title content-section-title">4. スタッフ情報を設定管理します</h2>
									<div class="pl-4">
										<p class="trial-tab-content"><strong>Profile</strong> - <strong>Settings</strong> - <strong>Staff</strong>から設定管理します</p>
										<picture>
											<source srcset="/img/trial/admin-2-1.webp" type="image/webp">
											<img src="/img/trial/admin-2-1.jpg" alt="Dokodemo-Kerja Drop Down Account Access Option" class="mb-3 img-fluid w-100 img-border">
										</picture>
										<div class="row">
											<div class="col-md-6">
												<p class="trial-tab-content"><strong>Add New</strong>から新規スタッフ情報を登録できます</p>
												<picture>
													<source srcset="/img/trial/admin-2-2.webp" type="image/webp">
													<img src="/img/trial/admin-2-2.jpg" alt="Dokodemo-Kerja 'Add New' Button" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
											<div class="col-md-6">
												<p class="trial-tab-content">スタッフ情報を入力し登録します<br class="d-none d-md-block"><br class="d-none d-md-block"></p>
												<picture>
													<source srcset="/img/trial/admin-2-3.webp" type="image/webp">
													<img src="/img/trial/admin-2-3.jpg" alt="Dokodemo-Kerja's Add Staff option" class="mb-3 img-fluid w-100 img-border">
												</picture>
											</div>
										</div>
										<p class="trial-tab-content">入力されたEメール宛にログイン情報が送られるので、それを使ってログイン後、ご利用ください</p>
										<picture>
											<source srcset="/img/trial/admin-2-4.webp" type="image/webp">
											<img src="/img/trial/admin-2-4.jpg" alt="Dokodemo-Kerja Staff Management" class="mb-5 img-fluid w-100 img-border">
										</picture>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title">1. Dokodemo-Kerjaをインストールする</h2>
									<p class="trial-tab-content --no-list mt-0"><a href="https://demo.dokodemo-kerja.com/" target="_blank" rel="noopener noreferrer" class="font-weight-bold">ここから</a>Dokodemo-Kerjaデスクトップアプリをダウンロードしてください</p>
								</div>
								<div class="pl-4 mb-5">
									<div class="row">
										<div class="col-md-6">
											<p class="trial-tab-content ">アプリを展開して実行ファイルを見つけてください</p>
											<img src="/img/trial/staff-1.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Zip File"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">インストールします <br class="d-none d-md-block"><br class="d-none d-md-block"></p>
											<img src="/img/trial/staff-2.png" class="mb-3 img-fluid w-100 img-border" alt="Downloaded Dokodemo-Kerja App Icon"/>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">2. ログインして利用開始する</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
												Eメールに届いている（Adminから付与された）ID/Passを使いログインしてください
												</p>
											</div>
											<img src="/img/trial/staff-3.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Version 2.0.0"/>
										</div>
										<div class="col-md-6">
											<p class="trial-tab-content">タスク（プロジェクト）を選択してPlayボタンを押してスタートします</p>
											<img src="/img/trial/staff-4.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application"/>
											<p class="trial-tab-content">赤いボタンで停止します</p>
											<img src="/img/trial/staff-5.png" class="mb-5 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application Appearance"/>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">3. Another Feature</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p class="mb-0">
												その他の操作
												</p>
												<div class="trial-tab-content__list">
													<span style="color: #098AE4"><strong>青色ボタン</strong></span>
													<span>: Dokodemo-Kerja操作パネルを最小化します</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E6B403"><strong>黄色ボタン</strong></span>
													<span>: Dokodemo-Kerja管理画面（Web）を表示します</span>
												</div>
												<div class="trial-tab-content__list">
													<span style="color: #E3092A"><strong>赤色ボタン</strong></span>
													<span>: ログアウトします</span>
												</div>
												<div class="trial-tab-content__list">
													<span><strong>Today</strong></span>
													<span>: 当日のいままでの作業時間を表します</span>
												</div>
												<div class="trial-tab-content__list">
													<span><strong>Weekly</strong></span>
													<span>: 今週のいままでの合計作業時間を表します</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<img src="/img/trial/staff-6.png" class="mb-3 img-fluid w-100 img-border" alt="Dokodemo-Kerja Application"/>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">4. 画面表示</h2>
								<div class="pl-4">
									<p class="trial-tab-content">
									何時から何時までどのタスクを行ったのかが確認できます。編集マークをクリックすることで作業時間の編集を行えます。編集履歴も画面中部に表示されます。画面下部には取得されたスクリーンキャプチャが表示されます。
									</p>
									<img src="/img/trial/staff-7.png" class="mb-5 img-fluid w-100 img-border" alt="Dokodemo-Kerja Time Tracking"/>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mobile-staff" role="tabpanel" aria-labelledby="mobile-staff-tab">
							<div class="trial-tab-container">
								<div>
									<h2 class="tab-content-title content-section-title d-inline-block">1. スマホアプリをダウンロード＆インストールします</h2>
								</div>
								<div class="pl-4 mb-5">
									<div class="row">
										<div class="col-md-6">
											<p class="trial-tab-content">Play Store / App StoreでDokodemo Mobileを検索しダウンロードします</p>
											<div class="text-center">
												<img src="/img/trial/mobile-1.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja from the Google Play Store"/>
											</div>
										</div>
										<div class="col-md-6">
											<!-- <p class="trial-tab-content">Atau website Dokodemo-Kerja. <br><br></p> -->
											<p class="trial-tab-content">もしくは下記のリンクからダウンロードしてください</p>
											<img src="/img/trial/mobile-2.png" class="mb-3 img-fluid mobile-screenshot img-border" alt="Download Dokodemo-Kerja Mobile for iOS or Android"/>
										</div>
									</div>
								</div>

								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<h2 class="tab-content-title content-section-title">2. ログイン</h2>
											<div class="trial-tab-content">
												<p class="mb-0">会社ID、メールアドレス、パスワードを入力してログインします</p>
											</div>
											<div class="text-center">
												<img src="/img/trial/mobile-3.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Login Page"/>
											</div>
										</div>
										<div class="col-md-6">
											<h2 class="tab-content-title content-section-title">3. タスクを選択します</h2>
											<p class="trial-tab-content">In order to start the time tracking, you must choose a task. This can also be done later.
											<br class="d-none d-md-block"><br class="d-none d-md-block">
											<br class="d-none d-md-block"><br class="d-none d-md-block d-lg-none">
											</p>
											<div class="text-center">
												<img src="/img/trial/mobile-4.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Task Selection"/>
											</div>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">4. メイン画面</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>
												メイン画面です
												</p>
												<div class="text-center">
													<img src="/img/trial/mobile-5.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Staff Login"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>スタートとストップは画面下部です</p>
												<div class="text-center">
													<img src="/img/trial/mobile-6.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Play Button"/>
												</div>
											</div>
										</div>
									</div>
								</div>

								<h2 class="tab-content-title content-section-title">5. 機能</h2>
								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>GPSが位置情報をトレースします</p>
												<div class="text-center">
													<img src="/img/trial/mobile-7.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Location Tracking"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<p>デスクトップ版を使った間のスクリーンキャプチャも表示されます <br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
												<div class="text-center">
													<img src="/img/trial/mobile-8.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Screen Recording Record"/>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="pl-4">
									<div class="row">
										<div class="col-md-6">
											<div class="trial-tab-content">
												<h2 class="tab-content-title content-section-title">6. 履歴</h2>
												<p>日別、週別、月別の勤務時間履歴を確認できます</p>
												<div class="text-center">
													<img src="/img/trial/mobile-9.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Screen Record"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="trial-tab-content">
												<h2 class="tab-content-title content-section-title">7. アカウント情報</h2>
												<p>ユーザーProfileを表示します。ログアウト可能です。 <br class="d-none d-md-block d-lg-none"><br class="d-none d-md-block d-lg-none"></p>
												<div class="text-center">
													<img src="/img/trial/mobile-10.png" class="mb-3 img-fluid img-border mobile-screenshot" alt="Dokodemo-Kerja Mobile Login"/>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="trial-contact">
		<div class="container">
			<div class="row">
				<div class="offset-md-1 col-md-10">
					<p class="q-title text-white mt-3">
						If you have more questions, get in touch with us or download the full documentation
					</p>
					<a href="/contact-us.php" class="btn btn-trial-contact bold uppercase" id="btn-contact-us">Contact Us</a>
					<p class="q-title" style="text-decoration:underline">
						<a href="https://drive.google.com/file/d/1kJA4zw9AlRcPQgkQThKdXOs9nfVI00ab/view?usp=sharing" target="_blank" rel="noopener noreferrer" style="color:#fff">
							Download the manual guide
						</a>
					</p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/demo-banner.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/footer.php'); ?>
<script>
	document.getElementById("submit-btn-trial").disabled = true;
	function enableBtnTrial(){
		document.getElementById("submit-btn-trial").disabled = false;
	}
</script>
<script>
	// set border based on active tab
	$('.trial-tab').click(function(e) {
		setTimeout(() => {
			var tab_active, tab_position;
			tab_active = $(this).attr('aria-selected');
			tab_position = $(this).index();

			$(this).parent().find('.trial-tab').removeClass('--divider');

			if (tab_position == 2 && tab_active) { // last tab is active
				$(this).parent().find('.trial-tab:nth-child(2)').addClass('--divider');
			} else if (tab_position == 0 && tab_active) { // first tab is active
				$(this).parent().find('.trial-tab:last-child').addClass('--divider');
			}
		}, 5);
	})
</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>
