<?php
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $current_url_temporary = end($url_array);  
    if (strpos($current_url_temporary, '.php')) {
        $current_url_array = explode('.', $current_url_temporary);  
        $current_url = current($current_url_array);  
    } else {
        $current_url = $current_url_temporary;
    }
?>
<section class="case-study__container">
    <div class="container my-5">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <a href="/case-study/" class="case-study__card-wrapper">
                            <div class="case-study__card">
                                <img class="card__img" src="/img/case-study/detail-case-1-1.png" alt="" >
                                <h4 class="card__title">Case Study: How You Utilize Dokodemo-Kerja</h4>
                                <p class="card__news">
                                    Dokodemo-Kerja Story
                                </p>
                            </div>
                        </a>
                    </div> -->
                    <?php if ($current_url != "case-1"): ?>
                    <div class="col-md-4">
                        <a href="/case-study/case-1" class="case-study__card-wrapper">
                            <div class="case-study__card">
                                <img class="card__img" src="/img/case-study/case-1.png" alt="Working at the Computer" >
                                <h4 class="card__title">PT. LOGIQUE Digital Indonesia</h4>
                                <p class="card__news">
                                    President Director <br>
                                    Takashi Yoshitsugu
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php if ($current_url != "case-2"): ?>
                    <div class="col-md-4">
                        <a href="/case-study/case-2" class="case-study__card-wrapper">
                            <div class="case-study__card">
                                <img class="card__img" src="/img/case-study/case-2.png" alt="Computer placed on a table in a dimly lit room" >
                                <h4 class="card__title">System Development, Company B</h4>
                                <p class="card__news">
                                    President Director
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php if ($current_url != "case-3"): ?>
                    <div class="col-md-4">
                        <a href="/case-study/case-3" class="case-study__card-wrapper">
                            <div class="case-study__card">
                                <img class="card__img" src="/img/case-study/case-3.png" alt="Computer chip with a flashing LED light" >
                                <h4 class="card__title">Accounting Firm, Company A</h4>
                                <p class="card__news">
                                    Operation Director
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php if ($current_url != "case-4"): ?>
                    <div class="col-md-4">
                        <a href="/case-study/case-4" class="case-study__card-wrapper">
                            <div class="case-study__card">
                                <img class="card__img" src="/img/case-study/dokodemo-story-4-ghitta.jpg" alt="A Logique Employee" style="object-position: top;">
                                <h4 class="card__title">PT. LOGIQUE Digital Indonesia</h4>
                                <p class="card__news">
                                HR Department LOGIQUE
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="offset-md-4 col-md-4 text-center">
                <a href="/case-study/" class="btn-see-more">See More</a>
            </div>
        </div>
    </div>
</section>