<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/header-footer.css" />
    <link rel="stylesheet" href="css/style-pricing.css" />
    <title>Pricing - Dokodemo Kerja</title>
</head>

<body>
    <?php include "header.php" ?>
    <section class="banner">
        <img src="img/pricing/bg.jpg" class="img-fluid" />
    </section>
    <section class="price-plans">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-2 plans-item">
                    <span class="plan-watermark">LIGHT PLAN</span>
                    <span class="plan-title">LIGHT PLAN</span>
                    <div class="price">
                        <span class="rp">Rp. </span>
                        <span class="price-number">1M</span>
                        <span class="per-month">/ Month</span>
                    </div>
                    <ul class="plan-benefits">
                        <li>Time Tracking</li>
                        <li>Screenshot Monitoring</li>
                        <li>1 Screenshot per 10 minutes</li>
                        <li>Screenshots saved for 2 months <strong>For 10 users</strong></li>
                    </ul>

                    <p class="pt-2"><strong>If the number of user is above 10 then every user will charged:</strong></p>
                    <div class="additional-fee">
                        <span class="plus-rp">+Rp.</span>
                        <span class="price-number">50.000</span>
                        <span class="per-month">/ Month</span>
                    </div>
                </div>
                <div class="col-md-4 plans-item">
                    <span class="plan-watermark">STANDARD PLAN</span>
                    <span class="plan-title">STANDARD PLAN</span>
                    <div class="price">
                        <span class="rp">Rp. </span>
                        <span class="price-number">3M</span>
                        <span class="per-month">/ Month</span>
                    </div>
                    <ul class="plan-benefits">
                        <li>Time Tracking</li>
                        <li>Screenshot Monitoring</li>
                        <li>1 Screenshot per minute</li>
                        <li>Screenshots saved for 6 months <strong>For 10 users</strong></li>
                    </ul>
                    <p class="pt-2"><strong>If the number of user is above 10 then every user will charged:</strong></p>
                    <div class="additional-fee">
                        <span class="plus-rp">+Rp.</span>
                        <span class="price-number">75.000</span>
                        <span class="per-month">/ Month</span>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 plans-enterprise">
                    <!-- <span class="plan-watermark">STANDARD PLAN</span> -->
                    <span class="plan-watermark">ENTERPRISE PLAN</span>
                    <span class="plan-title mx-auto">ENTERPRISE PLAN</span>
                    <p class="pt-3 position-relative">Contact us for pricing detail</p>
                    <div class="plan-contact-us">
                        <a href="tel:02122708935"><img src="img/pricing/call.png" /></a>
                        <a href="mailto:info@logique.co.id"><img src="img/pricing/mail.png" /></a>
                        <a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank"><img src="img/pricing/whatsapp.png" /></a>
                    </div>
                    <a href="trial.php" class="btn-request-trial">
                        Request Free Trial
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="read-testimony">
        <h3>Wonder what other user are saying?</h3>
        <a href="index.php#testimony" class="btn-read-testimony">
            Read user testimony
        </a>
    </section>
    <?php include "footer.php" ?>
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>