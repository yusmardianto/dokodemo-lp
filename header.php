<?php 
    function active_case() {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url_temporary = end($url_array);
        if (strpos($url_temporary, '.php')) {
            $url_temporary_array = explode('.', $url_temporary);
            $url = current($url_temporary_array);
        } else {
            $url = $url_temporary;
        }
        $url_previous = prev($url_array);
        if ($url_previous == 'case-study' && $url == '' || $url == 'case-1' || $url == 'case-2' || $url == 'case-3') {
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
                    <a class="nav-link" href="/features">Work From Home</a>
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
                        href="https://www.logique.co.id/blog/en/category/dokodemo-kerja-en/">Blog</a>
                </li>
                <li class="nav-item <?php active('contact-us') ?>">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
                </li>
            </ul>

            <div class="ml-auto">
                <div class="d-flex justify-content-center switch-language">
                    <a href="/ind/<?php echo $page;?>">ID</a>
                    <a class="active" href="/">EN</a>
                    <a href="/jpn/<?php echo $page;?>">JP</a>
                </div>
            </div>

        </div>
    </div>
</nav>