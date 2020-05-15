<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" itemprop="description" content="Study case No.1 of Dokodemo-Kerja implementation, an introduction on Dokodemo-Kerja development process. Introducing Dokodemo-Kerja, a remote work management tool that records the actual work hours of employees, tracks where they work with GPS, and enables flexible and highly productive working styles. ">
    <meta name="keywords" content="dokodemo, dokodemo-kerja, dokodemo kerja, screen monitoring, sceen monitor, monitor employee, employee monitoring, time tracker, clock in, clock in software, attendance software, attendance tool, work hour calculator,  manage employees, tool for managers, tool for hr, notification manager, productivity tool, productivity enhancer">
    <meta name="author" content="PT. LOGIQUE Digital Indonesia">
	<meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
    <meta property="og:title" content="Remote Working Management Tool Dokodemo-Kerja, Study Case No.1 | LOGIQUE Digital Indonesia">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dokodemo-Kerja">
    <meta property="og:url" content="https://dokodemo-kerja.com">
    <meta property="og:image" content="/img/dokodemo-og.jpg">
    <meta property="og:description" content="Study case No.1 of Dokodemo-Kerja implementation, an introduction on Dokodemo-Kerja development process. Introducing Dokodemo-Kerja, a remote work management tool that records the actual work hours of employees, tracks where they work with GPS, and enables flexible and highly productive working styles. ">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/slick-theme.css" />
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/style-case-study.css" />
    <link rel="stylesheet" href="/js/magnific-popup.css" />

	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Remote Working Management Tool Dokodemo-Kerja, Study Case No.1 | LOGIQUE Digital Indonesia</title>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WT4MCDL');</script>
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '713777762291663');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=713777762291663&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146404615-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-146404615-1');
	</script>
</head>
<?php $page = 'case-study/case-1'; ?>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT4MCDL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include "../header.php" ?>
    <section>
        <div class="container pl-lg-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Dokodemo-Kerja Home</a></li>
                    <li class="breadcrumb-item"><a href="/case-study/">Case Study</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Case 1</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <h1 class="text-center mb-5">Dokodemo-Kerja Story 1: <br>LOGIQUE</h1>
            <div class="case-study__story">
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="text-center" style="line-height: 1; height: calc(100% - 50px);">
                                    <img src="/img/case-study/dokodemo-story-1-1.jpg" alt="" class="story__img pb-1" style="object-position: right;">
                                    <small>The image was taken when I wrote this article while working in the Japanese countryside. I have also used and implemented Dokodemo-Kerja myself.</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>I would like to present some case studies about our clients currently using Dokodemo-Kerja.</p>
                                <p>In this first example though, we will be looking at our own company, LOGIQUE, and how we had successfully implemented a remote working system. First of all, Dokodemo-Kerja was developed as a time management tool to be used within LOGIQUE itself. </p>
                                <p  class="mb-0">As I have never been the type of person to get overly caught up in the inflexible old-fashioned ways of working so apparent in Japanese companies, I also did not want to force it upon my employees. Therefore in 2017, we decided to introduce a system of remote working within our own company. </p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>However, when we implemented the application, there was a negative reaction at first, especially from the development team leaders. Some thought, because of this, working in teams would be harder. Others thought it was unfair because they believed employees working remotely had an easier time with their job. Therefore, I eventually allowed remote working schedules for staff members who had understandable reasons for doing so, such as female employees who had recently gave birth. </p>
                            <p>Also, it’s hard to actually visualize how our staff worked remotely. For example, remote working strategies can result in the belief that employees were receiving special treatment; the company would feel like it was not receiving results which were fair. In addition to the company feeling skeptical about its employees’ work ethic, staff members would complain about their coworkers being uncontactable. </p>
                            <p>Indeed, when unresponsive employees were questioned, the reply is almost always that they were focusing on their tasks. Other staffs have said that working remotely makes it more difficult to get help from their team members, which makes it harder to accomplish the same task, compared to working within an office. </p>
                            <p>It is difficult to decide who is right. But, the main problem is that if we cannot visualize how our staff works when working remotely, such systems won’t be able to provide any positive value for either the employees or the company. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p><a href="https://www.logique.co.id/en/product/nippo.php" target="_blank">Therefore, in response to such issues, we had developed Nippo</a>.</p>
                                <p>The word ‘Nippo’ is a Japanese word, meaning ‘daily report’. In this sense, Nippo is an online daily report system which allows all employees to summarize their tasks conducted that day. They can give details about how much time was spent for each task. The report is then uploaded online so that it can be seen by other staffs and can be rated by their supervisors.</p>
                                <p  class="mb-0">Nippo slightly improved the function of our remote working strategy. However, there were still some problems, specifically, when a task has been attempted but is not done correctly, or takes longer than expected; for example, when a task that takes 3 hours to complete is recorded as taking 8 hours on Nippo. This problem could be due to many reasons: lack of concentration, or due to situations which could not be avoided. I realized that there are many uniquely difficult cases.   </p>
                            </div>
                            <div class="col-lg-6 pr-0 d-none d-lg-block">
                                <img src="/img/case-study/dokodemo-story-1-2.jpg" alt="" class="story__img" style="object-position: right;">
                            </div>
                        </div>
                        <div class="mt-3"> 
                            <p>Therefore, in November 2017 we developed Dokodemo-Kerja. With this tool, clear visualization of how an employee is working is possible through the use of screenshots. Dokodemo-Kerja allows staffs the opportunity to present proof that an employee really is or isn’t focused on their job. Indeed, when they aren’t, clear evidence can be shown from the management side when it becomes necessary to give a warning to an employee. </p>
                            <p>Eventually, by mid-2018, we were ready to expand our remote working strategy. We applied remote working systems for all our staffs. Depending on an employee's position and role, we gave them permission to work on a remote basis for either one day of the week, to up to 5 days, depending on their individual situation.</p>
                            <p>As remote working eventually became the norm, we began to make changes within the office itself. By using Dokodemo-Kerja on a day to day basis, employees did not have to be within the office from morning to evening. An exception to this is when teams are required to meet face to face, as meeting at the office would apparently be essential. However, after a period of trial and error, it turns out that this is only rarely necessary. In addition, employees can adjust their work schedules to their daily lives by determining the hours they start working and when they go home. (Note 1) With the condition that the total time amounts to 40 hours per week and there are results to show for it, employees can work anywhere. However, for employees whose work results cannot be measured, such as those who are junior level employees, an evaluation is conducted through the use of Dokodemo-Kerja, and their general level of effort put into their work. For employees who are unable to provide satisfactory work results, or who have Dokodemo-Kerja records which are below average, disciplinary action will be taken and backed up by sufficient evidence.</p>
                            <p>(Note 1) Although flexible working times are allowed, rules are required. If employee starting times frequently change, it can reduce the effectiveness of working as a team. Therefore, each employee sets their own starting hours; if they arrive late, they are then required to make this information known to other staffs through Slack.	</p>
                            <p>With Dokodemo-Kerja, our staff can adopt unique working styles suitable for their own individual situations. For example, there are employees who start working at 9 o'clock, have lunch with their coworkers, and then go home at 2 o'clock in the afternoon. After doing some work at home afterwards, in the evening, they return to the office to finish up any incomplete tasks.</p>
                            <p>There are also those who start working at home from 6 to 8 in the morning, then come to the office at 10 and, without taking a break for lunch, continue working until it’s time to go home at 4 pm.</p>
                            <p>Even those who live far away from the office are allowed to work remotely for 3 days a week, and on the days they are required to come to the office, they start their work in the morning at home and alter the time they leave to avoid traffic jams. This way they can focus their efforts on being productive, with a healthy state of mind. </p>
                            <p>Since this change, the office has experienced an improvement in productivity, not only when employees come to and leave from work, but also when they are at the office as well. </p>
                            <p>If the fixed hours an employee spends at the office becomes the basis of an employee’s performance, this lacks accuracy. For example, sometimes, there are no tasks, and there are days where employees are unable to concentrate to their fullest due to health reasons. If someone is in this position and they are stuck in the office until 5pm, the effect on the employee can worsen the pain or negatively affect their performance, making them only focus on their remaining hours.</p>
                            <p>In addition, some common difficulties that often occur in Indonesia include employees taking long break periods to worship, and frequent departures from the office to smoke. However, by implementing Dokodemo-Kerja, employees become more aware of their level of productivity, as continuing to rest for unacceptable periods of time will result in them being unable to fulfill the standard 40 hours a week that is required of them. </p>
                            <p>Upon experiencing health problems where the employee is unable to perform to their potential, they will be given the advantage of deciding for themselves what hours would be best to work, without having to report to HR. This, in my opinion, educates them by improving the confidence needed to work as a professional. Also, since the number of HR staff has increased, LOGIQUE already has a consultation system in place regarding individual employee work routines. </p>
                            <p>Through this method, employees are granted the freedom to work as professionals, with balance in their personal and working lives. LOGIQUE itself is also experiencing an increase in productivity. In terms of HR and recruitment, we have received positive results, so that the entire process becomes a ‘Win-Win’ situation. </p>
                            <p>Based on LOGIQUE’s own success with implementing this system, we would like to share our success with many other Indonesian companies, and help revitalize their organizations. Therefore, we had decided to sell Dokodemo-Kerja as a product by the end of 2018.</p>
                            <p>As of 2020, we are still receiving feedback about Dokodemo-Kerja from a variety of users, while continuing to improve upon the software. We are also continuing to update proper working guidelines in order to create a more efficient style of work that will benefit both the employee and employer alike.</p>
                            <p>In the next edition, we will introduce other companies that are also using Dokodemo-Kerja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "other-case.php" ?>
    <section class="hide-button-on-mobile">
        <span id="popup-text">
            <div class="speech-bubble">
                Chat us on Whatsapp
            </div>
        </span>
        <a href="https://api.whatsapp.com/send?phone=62811870321&text=Halo, saya ingin bertanya tentang software Dokodemo-Kerja" target="_blank" aria-label="Whatsapp Link" rel="noopener noreferrer">
            <img src="../img/whatsapp.svg" id="fixedbutton" alt="" />
        </a>
    </section>
    <!-- req online meeting popup -->
    <section>
         <button class="btn botFixedBtn" id="btnReqOnlineMeeting" aria-label="btnReqOnlineMeeting" type="button" data-toggle="collapse" href="#collapseExample" style="background: #ffcc13;">
            <i class="fa fa-chevron-up" style="font-size: medium; color: #fff;"></i>
        </button>
        <span class="collapse popUpBottom" id="collapseExample">
            <div class="card card-body" style="border: 3px solid lightgrey;">
                <div class=" text-center" style="padding: 1em;">
                    <!-- <div class="btn pull-right">X</div> -->
                    <button type="button" class="close survey-close" data-toggle="collapse" href="#collapseExample" aria-label="Close" style="padding: 6px 12px;">
                        <span aria-hidden="true"><i class="fa fa-chevron-down" style="font-size: medium;"></i></span>
                    </button>
                    <h5 class="card-title"><b>SET UP AN <br> ONLINE MEETING</b></h5>
                    <hr>
                            <p class="card-text">If you're interested in a live demo, or if you have any question at all, please fill the form below</p>
                            <form action="https://formspree.io/xnqqyjdg" method="POST">
                            <div class="form-group" style="text-align:left;">
                                <label for="clientName">Name</label>
                                <input type="text" class="form-control" name="clientName" id="clientName" placeholder="Enter your name">
                            </div>
                            <div class="form-group" style="text-align:left;">
                                <label for="clientEmail">Email</label>
                                <input type="email" class="form-control" name="clientEmail" required id="clientEmail" placeholder="Enter your email">
                            </div>
                            <div class="form-group" style="text-align:left;">
                                <label for="clientDate">Date</label>
                                <input type="date" class="form-control" name="clientDate" id="clientDate" placeholder="Enter your Date">
                            </div>
                            <div class="form-group" style="text-align:left;">
                                <label for="clientTime">Time</label>
                                <select class="form-control" name="clientTime" id="clientTime" placeholder="Select your time">
                                    <option value="09.00">09.00</option>
                                    <option value="10.00">10.00</option>
                                    <option value="11.00">11.00</option>
                                    <option value="12.00">12.00</option>
                                    <option value="13.00">13.00</option>
                                    <option value="14.00">14.00</option>
                                    <option value="15.00">15.00</option>
                                    <option value="16.00">16.00</option>
                                    <option value="17.00">17.00</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" id="meet-online-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </span>    
    </section>
    <!-- end of req online meeting popup -->
    <?php include "../footer.php" ?>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>

    <script>
        $(".screenshot-slide").slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, ]
        })
        $('.testimony-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            dots: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, ]
        });
    </script>
    <script>
    $(document).ready(function() {
        $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {
                    return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                }
            },
            gallery: {
                enabled: false
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });
    });
    </script>
    <script>
        var element = document.getElementById("popup-text");

        var t=setTimeout(openPopUp,5000);
        function openPopUp() {
        element = document.getElementById("popup-text");
        element.style.visibility = "visible";
        element.style.opacity = "1";
        }
    </script>
</body>

</html>
