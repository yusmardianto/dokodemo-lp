<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" itemprop="description" content="Dokodemo-Kerja dibangun oleh PT LOGIQUE Digital Indonesia untuk menghasilkan laporan produktivitas secara akurat. Tujuan dari program ini adalah untuk mempromosikan budaya kerja yang sehat dan produktif yang ditujukan untuk kota berpenduduk padat.">
    <meta name="keywords" content="Perangkat lunak yang berfungsi jarak jauh, alat kerja jarak jauh, sistem kerja jarak jauh, penerapan kerja jarak jauh, enabler kerja jarak jauh, memungkinkan budaya kerja jarak jauh, budaya kerja jarak jauh, bekerja sambil bepergian, logique, pt logique, logique digital indonesia, pelacakan waktu, pelacak waktu, pelacak jam kerja, pelacakan jam kerja, perangkat lunak enterprise, perangkat lunak screenshot enterprise">
    <meta name="author" content="PT. LOGIQUE Digital Indonesia">
	<meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/slick-theme.css" />
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/style-about.css" />
    <link rel="stylesheet" href="/css/style-404.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Dokodemo-Kerja | Tentang Kami</title>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WT4MCDL');</script>
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '713777762291663');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=713777762291663&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146404615-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-146404615-1');
	</script>
</head>
<?php $page = '404.php'; ?>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT4MCDL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <section class="top-section">
        <?php include 'header.php' ?>
    </section>
    <section class="hide-button-on-mobile">
        <span id="popup-text">
            <div class="speech-bubble">
                Chat us on Whatsapp
            </div>
        </span>
        <a href="https://api.whatsapp.com/send?phone=62811870321&text=Halo, saya ingin bertanya tentang software Dokodemo-Kerja" target="_blank">
            <img src="../img/whatsapp.svg" id="fixedbutton"/>
        </a>
    </section>
    <section>
      <div class="container-404">
        <div class="element">
          Halaman yang anda cari tidak ditemukan.
        </div>
      </div>
    </section>
    <section class="footer-content">
      <?php include 'footer.php' ?>
    </section>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        var element = document.getElementById("popup-text");

        var t=setTimeout(openPopUp,5000);
        function openPopUp() {
        element = document.getElementById("popup-text");
        element.style.visibility = "visible";
        element.style.opacity = "1";
        }
    </script>
</body>
</html>
