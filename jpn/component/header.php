<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" itemprop="description" content="<?php if (isset($meta_description)) echo $meta_description ?>">
    <meta name="keywords" content="<?php if (isset($meta_keyword)) echo $meta_keyword ?>">
    <meta name="author" content="PT. LOGIQUE Digital Indonesia">
    <meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
    <meta property="og:title" content="<?php if (isset($og_title)) echo $og_title ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dokodemo-Kerja">
    <meta property="og:url" content="https://dokodemo-kerja.com">
    <meta property="og:image" content="<?php if (isset($og_image)) echo $og_image ?>">
    <meta property="og:description" content="<?php if (isset($og_desription)) echo $og_desription ?>">
    <link rel="canonical" href="<?php if (isset($canonical_link)) echo $canonical_link ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <?php if (isset($add_css)) echo $add_css ?>
    
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title><?php if (isset($page_title)) echo $page_title ?></title>
    
    <?php if ($_SERVER['HTTP_HOST'] == 'dokodemo-kerja.com') { ?>
        <script src="https://www.googleoptimize.com/optimize.js?id=OPT-P232K37"></script>
        <!-- Google Tag Manager -->
        <script> (function(w, d, s, l, i){ w[l]=w[l] || []; w[l].push({ 'gtm.start':new Date().getTime(), event:'gtm.js'}); var f=d.getElementsByTagName(s)[0], j=d.createElement(s), dl=l !='dataLayer' ? '&l=' + l :''; j.async=true; j.src='https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);})(window, document, 'script', 'dataLayer', 'GTM-WT4MCDL'); </script>
    <?php } ?>

</head>

<body class="jp-page">
    <?php if ($_SERVER['HTTP_HOST'] == 'dokodemo-kerja.com') { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT4MCDL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php } ?>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/jpn/header.php') ?>