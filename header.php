<?php 
    function active_case() {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url_temporary = end($url_array);
        $url_temporary_split = explode('-', $url_temporary);  
        if (strpos($url_temporary, '.php')) {
            $url_temporary_array = explode('.', $url_temporary);
            $url = current($url_temporary_array);
        } else {
            $url = $url_temporary;
        }
        $url_previous = prev($url_array);
        if ($url_previous == 'case-study') {
            echo 'active';
        }
    } 
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url_temporary = end($url_array);
        if (strpos($url_temporary, '.php')) {
            $url_temporary_array = explode('.', $url_temporary);
            $url = current($url_temporary_array);
        } else {
            $url = $url_temporary;
        }  
        $url_previous = prev($url_array);  
        if($url_previous !== 'case-study' && $current_page == $url){
            echo 'active'; 
        } else {
            echo 'Not Found';
        }
    } 
?>

<?php
    ini_set('date.timezone', 'Asia/Jakarta');
    $date_now = strtotime(date("m/d/Y H:i:s", time()));
    $date_deadline = strtotime(date("m/d/Y H:i:s", strtotime("11/02/2020 13:00:00")));

    if ($date_now <= $date_deadline) {
        include ($_SERVER['DOCUMENT_ROOT'].'/component/free-seminar-banner.php');
    }
?>

<?php                 
    function switch_url($url_lang) {
        if (is_array($GLOBALS["page"]) == "1" ) {
            echo (empty($GLOBALS["page"][$url_lang])) ? "#" : $GLOBALS["page"][$url_lang];
        } else {
            echo $GLOBALS["page"];
        }
    }
?>

<nav class="doko-header navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/" aria-label="Back To Home">
            <img src="/img/dokodemo.svg" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="mb-3 mb-lg-0 navbar-nav text-center">
                <li class="nav-item <?php active('') ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <!-- <li class="nav-item <//?php active('about') ?>">
                    <a class="nav-link" href="/about">About Us</a>
                </li> -->
                <li class="nav-item <?php active('features') ?>">
                    <a class="nav-link" href="/features">Features</a>
                </li>
                <li class="nav-item <?php active_case() ?>">
                    <a class="nav-link" href="/case-study/">Case Study</a>
                </li>
                <li class="nav-item <?php active('price') ?>">
                    <a class="nav-link" href="/price">Price</a>
                </li>
                <li class="nav-item <?php active('demo') ?>">
                    <a class="nav-link" href="/demo">Demo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener noreferrer"
                        href="/blog">Blog</a>
                </li>
                <li class="nav-item <?php active('contact-us') ?>">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
                </li>
            </ul>

            <div class="ml-auto">
                <div class="d-flex justify-content-center switch-language">
                    <a href="/ind/<?php switch_url("id");?>">ID</a>
                    <a href="#" class="active">EN</a>
                    <a href="/jpn/<?php switch_url("jp");?>">JP</a>
                </div>
            </div>

        </div>
    </div>
</nav>