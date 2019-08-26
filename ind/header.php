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
        <a class="navbar-brand" href="index.php">
            <img src="/img/logo.png" width="85" height="85" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php active('index.php') ?>">
                    <a class="nav-link" href="/ind/index.php">Home</a>
                </li>
                <li class="nav-item <?php active('about.php') ?>">
                    <a class="nav-link" href="/ind/about.php">About Dokodemo-Kerja</a>
                </li>
                <li class="nav-item <?php active('features.php') ?>">
                    <a class="nav-link" href="/ind/features.php">Feature Tour</a>
                </li>
                <li class="nav-item <?php active('pricing.php') ?>">
                    <a class="nav-link" href="/ind/pricing.php">Harga</a>
                </li>
                <li class="nav-item <?php active('trial.php') ?>">
                    <a class="nav-link" href="/ind/trial.php">Trial</a>
                </li>
                <li class="nav-item <?php active('contact-us.php') ?>">
                    <a class="nav-link" href="/ind/contact-us.php">Hubungi Kami</a>
                </li>

                <li class="nav-item flex-column">

                </li>

            </ul>
            <div class="mx-auto">
                <p class="text-center txt-lang">Language</p>
                <a href="#" class="switch-language">
                    <input type="radio" id="radio-one" name="switch-one" value="yes" disabled />
                    <label for="radio-one">ENG</label>
                    <input type="radio" id="radio-two" name="switch-one" value="no" disabled checked/>
                    <label for="radio-two">IND</label>
                </a>
            </div>
        </div>
    </div>
</nav>