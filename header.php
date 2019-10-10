<?php 
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($current_page == $url){
            echo 'active'; 
        } else {
            echo 'Not Found';
        }
    } 
?>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/logo.png" width="85" height="85" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php active('index.php') ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item <?php active('about.php') ?>">
                    <a class="nav-link" href="about.php">About Dokodemo-Kerja</a>
                </li>
                <li class="nav-item <?php active('features.php') ?>">
                    <a class="nav-link" href="features.php">Feature Tour</a>
                </li>
                <li class="nav-item <?php active('pricing.php') ?>">
                    <a class="nav-link" href="pricing.php">Pricing</a>
                </li>
                <li class="nav-item <?php active('trial.php') ?>">
                    <a class="nav-link" href="trial.php">Trial</a>
                </li>
                <li class="nav-item <?php active('contact-us.php') ?>">
                    <a class="nav-link" target="_blank"
                        href="https://www.logique.co.id/blog/category/dokodemo-kerja/">Blog</a>
                </li>
                <li class="nav-item <?php active('contact-us.php') ?>">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>

                <li class="nav-item flex-column">

                </li>

            </ul>
            <div class="mx-auto">
                <p class="text-center txt-lang">Language</p>
                <div class="switch-language">
                    <a href="#"><label class="active" for="radio-one">ENG</label></a>
                    <a href="/ind/<?php echo $page;?>"><label for="radio-two">IND</label></a>
                </div>
            </div>
        </div>
    </div>
</nav>