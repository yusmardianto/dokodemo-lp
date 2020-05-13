<?php 
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($current_page == $url){
            echo 'active'; 
        }
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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php active('') ?>">
                    <a class="nav-link" href="/jpn">ホーム</a>
                </li>
                <li class="nav-item <?php active('about') ?>">
                    <a class="nav-link" href="/about">Dokodemo-Kerjaについて</a>
                </li>
                <li class="nav-item <?php active('features') ?>">
                    <a class="nav-link" href="/features">機能</a>
                </li>
                <li class="nav-item <?php active('pricing') ?>">
                    <a class="nav-link" href="/pricing">価格</a>
                </li>
                <li class="nav-item <?php active('trial') ?>">
                    <a class="nav-link" href="/trial">デモ</a>
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
            <div class="mx-auto">
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