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
    $date_now = date("m/d/Y H:i:s", time());
    $date_deadline = date("m/d/Y H:i:s", strtotime("11/02/2020 13:00:00"));
    if ($date_now <= $date_deadline) {
        include ($_SERVER['DOCUMENT_ROOT'].'/component/free-seminar-banner.php');
    }
?>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/jpn/" aria-label="homepage jp link">
            <img src="/img/dokodemo.svg" width="85" alt="">
        </a>
        <button id="btn-nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1 justify-content-center --jp">
                <li class="nav-item <?php active('') ?>">
                    <a class="nav-link" href="/jpn">ホーム</a>
                </li>
                <!-- <li class="nav-item <?//php active('about') ?>">
                    <a class="nav-link" href="/about">Dokodemo-Kerjaについて</a>
                </li> -->
                <li class="nav-item <?php active('features') ?>">
                    <a class="nav-link" href="/features">在宅勤務</a>
                </li>
                <li class="nav-item <?php active_case() ?>">
                    <a class="nav-link" href="/jpn/case-study/">Case Study</a>
                </li>
                <li class="nav-item <?php active('price') ?>">
                    <a class="nav-link" href="/jpn/price">価格</a>
                </li>
                <li class="nav-item <?php active('demo') ?>">
                    <a class="nav-link" href="/demo">デモ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener noreferrer"
                        href="https://www.logique.co.id/blog/category/dokodemo-kerja/">ブログ</a>
                </li>
                <li class="nav-item <?php active('contact-us') ?>">
                    <a class="nav-link" href="/contact-us">問い合わせ</a>
                </li>

                <li class="nav-item flex-column">

                </li>

            </ul>
            <div class="ml-auto">
                <p class="text-center txt-lang">Language</p>
                <div class="switch-language">
                    <a href="/<?php echo $page;?>"><label for="radio-one">ENG</label></a>
                    <a href="/ind/<?php echo $page;?>"><label for="radio-two">IND</label></a>
                    <a href="/jpn/<?php echo $page;?>"><label class="active" for="radio-three">JPN</label></a>
                </div>
            </div>
        </div>
    </div>
</nav>