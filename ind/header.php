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

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/ind/" aria-label="homepage ind link">
            <img src="/img/dokodemo.svg" width="85" alt="">
        </a>
        <button id="btn-nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1 justify-content-center">
                <li class="nav-item <?php active('') ?>">
                    <a class="nav-link" href="/ind/">Home</a>
                </li>
                <!-- <li class="nav-item <?php active('about') ?>">
                    <a class="nav-link" href="/ind/about">About</a>
                </li> -->
                <li class="nav-item <?php active('features') ?>">
                    <a class="nav-link" href="/ind/features">Features</a>
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

                <li class="nav-item flex-column">

                </li>

            </ul>
            <div class="ml-auto">
                <p class="text-center txt-lang">Language</p>
                <div class="switch-language">
                    <a href="/<?php echo $page;?>"><label for="radio-one">ENG</label></a>
                    <a href="/ind/"><label class="active" for="radio-two">IND</label></a>
                    <a href="/jpn/<?php echo $page;?>"><label for="radio-three">JPN</label></a>
                </div>
            </div>
        </div>
    </div>
</nav>