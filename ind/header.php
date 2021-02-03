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
        if ($url_previous == 'case-study' && $url == '' || end($url_temporary_split) > 0) {
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
        <a class="navbar-brand" href="/ind/" aria-label="homepage ind link">
            <img src="/img/dokodemo.svg" width="60" alt="">
        </a>
        <button id="btn-nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="mb-3 mb-lg-0 navbar-nav text-center">
                <li class="nav-item <?php active('') ?>">
                    <a class="nav-link" href="/ind/">Home</a>
                </li>
                <!-- <li class="nav-item <//?php active('about') ?>">
                    <a class="nav-link" href="/ind/about">About</a>
                </li> -->
                <li class="nav-item <?php active('features') ?>">
                    <a class="nav-link" href="/ind/features">Work From Home</a>
                </li>
                <li class="nav-item <?php active_case() ?>">
                    <a class="nav-link" href="/ind/case-study">Studi Kasus</a>
                </li>
                <li class="nav-item <?php active('price') ?>">
                    <a class="nav-link" href="/ind/price">Harga</a>
                </li>
                <li class="nav-item <?php active('demo') ?>">
                    <a class="nav-link" href="/ind/demo">Demo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener noreferrer"
                        href="https://www.logique.co.id/blog/category/dokodemo-kerja/">Blog</a>
                </li>
                <li class="nav-item <?php active('contact-us') ?>">
                    <a class="nav-link" href="/ind/contact-us">Hubungi Kami</a>
                </li>
            </ul>
            <div class="ml-auto">
                <div class="d-flex justify-content-center switch-language">
                    <a href="#" class="active">ID</a>
                    <a href="/<?php echo $page;?>">EN</a>
                    <a href="/jpn/<?php echo $page;?>">JP</a>
                </div>
            </div>
        </div>
    </div>
</nav>