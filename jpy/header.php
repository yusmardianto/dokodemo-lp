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
        <a class="navbar-brand" href="/jpy/" aria-label="homepage jpy link">
            <img src="/img/dokodemo.svg" width="85" alt="">
        </a>
        <button id="btn-nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php active('') ?>">
                    <a class="nav-link" href="/jpy">ホーム</a>
                </li>
                <li class="nav-item <?php active('about.php') ?>">
                    <a class="nav-link" href="/jpy/about.php">Dokodemo-Kerjaについて</a>
                </li>
                <li class="nav-item <?php active('features.php') ?>">
                    <a class="nav-link" href="/jpy/features.php">機能</a>
                </li>
                <li class="nav-item <?php active('pricing.php') ?>">
                    <a class="nav-link" href="/jpy/pricing.php">価格</a>
                </li>
                <li class="nav-item <?php active('trial.php') ?>">
                    <a class="nav-link" href="/jpy/trial.php">デモ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" rel="noopener noreferrer"
                        href="https://www.logique.co.id/blog/category/dokodemo-kerja/">ブログ</a>
                </li>
                <li class="nav-item <?php active('contact-us.php') ?>">
                    <a class="nav-link" href="/jpy/contact-us.php">問い合わせ</a>
                </li>

                <li class="nav-item flex-column">

                </li>

            </ul>
            <div class="mx-auto">
                <p class="text-center txt-lang">Language</p>
                <div class="switch-language">
                    <a href="/<?php echo $page;?>"><label for="radio-one">ENG</label></a>
                    <a href="/ind/<?php echo $page;?>"><label for="radio-two">IND</label></a>
                    <a href="/jpy/<?php echo $page;?>"><label class="active" for="radio-three">JPY</label></a>
                </div>
            </div>
        </div>
    </div>
</nav>