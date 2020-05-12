<?php
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $current_url = end($url_array);  
?>
<section class="case-study__container">
    <div class="container my-5">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <?php if ($current_url != "case-1"): ?>
                    <div class="col-md-4">
                        <a href="/case-study/case-1" class="case-study__card-wrapper">
                            <div class="case-study__card">
                                <img class="card__img" src="/img/case-study/case-1.png" alt="" >
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
                                <img class="card__img" src="/img/case-study/case-2.png" alt="" >
                                <h4 class="card__title">PT. BO System Development</h4>
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
                                <img class="card__img" src="/img/case-study/case-3.png" alt="" >
                                <h4 class="card__title">Accounting Consulting Firm</h4>
                                <p class="card__news">
                                    Operation Director
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
                <a href="/case-study.php" class="btn-see-more">See More</a>
            </div>
        </div>
    </div>
</section>