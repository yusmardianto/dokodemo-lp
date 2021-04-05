<?php 
    $page = '';
    $page_title = 'Attendance Management Software & Remote Working System';

    $meta_description = 'Dokodemo-Kerja is an Indonesian based attendance management software & remote work hr tool, which improves employee productivity both in the office & at home.';
    $meta_keyword = 'dokodemo, dokodemo-kerja, dokodemo kerja, work everywhere, work whenever, work wherever, project management tool, project management software, human resource tool, human resource software, monitoring software, monitoring tool, monitor desktop, monitor with privacy, low res monitoring, low resolution monitoring, time tracker, logique product, pt logique';

    $og_title = 'Attendance Management & Productivity Tool | Dokodemo-Kerja';
    $og_image = 'https://dokodemo-kerja.com/img/og-img/index.jpg';
    $og_desription = 'Dokodemo-Kerja is an Indonesian based attendance management software & remote work hr tool, which improves employee productivity both in the office & at home.';

    $add_css = '
    <link rel="stylesheet" href="/js/magnific-popup.css" />
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/slick-theme.css" />
    <link rel="stylesheet" href="/css/style-home.css" />    ';

    include($_SERVER['DOCUMENT_ROOT'].'/component/header.php');
?>

    <div class="home">

        <section class="pt-5 pb--70px color--blue home__banner">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <h4 class="fs-18">Remote Working with <span class="font-weight-bold">Dokodemo-Kerja</span>,</h4>
                        <h1 class="color--yellow fs-34 font-weight-bold">Reduce Costs & Increase Productivity</h1>
                        <div class="row my-4 banner__benefit">
                            <div class="col-4">
                                <div class="text-center">
                                    <picture>
                                        <source srcset="/img/home/home-cost.svg">
                                        <img src="/img/home/home-cost.png" alt="cost effective" class="img-fluid" loading="lazy">
                                    </picture>
                                    <h5 class="mb-0 fs-18 font-weight-bold">Cost Effective</h5>
                                    <p class="fs-14">Rp 1Mio / Month</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center">
                                    <picture>
                                        <source srcset="/img/home/home-minimum.svg">
                                        <img src="/img/home/home-minimum.png" alt="no minimum" class="img-fluid" loading="lazy">
                                    </picture>
                                    <h5 class="mb-0 fs-18 font-weight-bold">No Minimum</h5>
                                    <p class="fs-14">Contract Period</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center">
                                    <picture>
                                        <source srcset="/img/home/home-setup.svg">
                                        <img src="/img/home/home-setup.png" alt="easy setup" class="img-fluid" loading="lazy">
                                    </picture>
                                    <h5 class="mb-0 fs-18 font-weight-bold">Easy Setup</h5>
                                    <p class="fs-14">You can start today</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-8 col-lg-6">
                        <!-- <picture>
                            <source srcset="/img/home/home-banner.webp" type="image/webp">
                            <img src="/img/home/home-banner.png" alt="Dokodemo Remote Working" class="img-fluid mb-4 mb-lg-0">
                        </picture> -->
                        <div class="d-none d-md-flex justify-content-center align-items-center">
                            <div class="w-100 mb-4 mb-lg-0 banner__animation" id="homepage_animation"></div>
                            <div class="loader">Loading...</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mt--30px mb-5 py--20px px--30px bg--l-blue border--blue rounded-lg shadow--blue">
                            <div class="row align-items-center">
                                <div class="col-md-8 col-lg-6">
                                    <p class="mb-md-0 text-justify text-md-left">
                                    Since the release of Version 2.0, a GPS tracking function has also been incorporated into the mobile application, so it is therefore possible to manage the actual working conditions of staff who are often tasked with leaving the office.
                                    </p>
                                </div>
                                <div class="col-md-4 col-lg-6 text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-auto col-lg-6">
                                            <a href="/demo" class="form-control btn btn--rounded bg--blue fs-14 text-white px-4">Try The Demo Now</a>
                                        </div>
                                    </div>
                                    <p class="mt-1 mb-0 fs-12">*No credit card required</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-lg-0">
                        <ul class="list-unstyled banner__list list--circle list--circle-border">
                            <li>Track tasks and calculate overall working hours.</li>
                            <li>Randomly captures desktop screen activity and sends the screenshots to the server (with resolutions that are privacy-friendly).</li>
                            <li>Through using the smartphone application, work hours and location management is now easier to manage (Through GPS tracking) for employees travelling outside of the office.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="bg--l-blue shadow--blue p-3 rounded-lg">                                    
                            <div class="embed-responsive embed-responsive-16by9 feature-video">
                                <iframe class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
                                    src="https://www.youtube.com/embed/ZRU2cc7lWbw" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="color--blue pb--60px home__schedule">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="bg--l-blue rounded-lg text-center schedule">
                            <h5 class="font-weight-bold mb-4 fs-20">Schedule Online Meeting</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="/img/home/schedule-online.svg">
                                        <img src="/img/home/schedule-online.png" alt="online meeting" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-md-8">
                                    <p class="my-4">Set up an online consultation with our team for a software demo</p>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" id="btn_online_meet_form_en" class="form-control btn btn--rounded bg--yellow" data-title="online" data-toggle="modal" data-target="#meetingSchedule">
                                        Online
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg--l-blue rounded-lg text-center schedule">
                            <h5 class="font-weight-bold mb-4 fs-20">Schedule Offline Meeting</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="/img/home/schedule-offline.svg">
                                        <img src="/img/home/schedule-offline.png" alt="offline meeting" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-md-8">
                                    <p class="my-4">Set up an offline consultation with our team for a software demo</p>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" id="btn_offline_meet_form_en" class="form-control btn btn--rounded bg--yellow" data-title="offline" data-toggle="modal" data-target="#meetingSchedule">
                                        Offline
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <p class="pt--60px text-center">Dokodemo-Kerja is both an attendance & remote work management tool that allows for flexible work styles beneficial to both the company and employee alike through recording working hours no matter where the location. Since it is able manage work hours accurately, it makes calculating overtime hours and the number of paid leaves a much more efficient endeavor. Also, by taking and managing screenshots during the work session, one can discourage slacking during working hours.</p>
            </div>
        </section>

        <section class="bg--l-blue home__feature">
            <div class="py--60px position-relative container">
                <div class="feature__bg-accent">
                    <picture>
                        <source srcset="/img/icon/icon-meeting-accent.svg">
                        <img src="/img/icon/icon-meeting-accent-full.png" alt="" class="img-fluid position-absolute bg-accent__img" loading="lazy">
                    </picture>
                    <picture>
                        <source srcset="/img/icon/icon-meeting-accent.svg">
                        <img src="/img/icon/icon-meeting-accent-full.png" alt="" class="img-fluid position-absolute bg-accent__img" loading="lazy">
                    </picture>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-5 mb-lg-0">
                        <div class="feature__slide zoom-gallery">
                            <div class="mb--30px px-2 border border--blue rounded-lg">
                                <div class="slide__image slick--blue-arrow">
                                    <div>
                                        <a href="/img/features/home_01.png" data-source="/img/features/home_01.png" title="Daily Working Screen Capture" aria-label="Daily Working Screen Capture">
                                        <div class="image--wrapper">
                                            <img src="/img/features/home_01-com.jpg" class="border border--blue" alt="Attendance Management Software" loading="lazy" />
                                        </div>    
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/img/features/home_02.png" data-source="/img/features/home_02.png" title="Daily Working Screen Capture" aria-label="Daily Working Screen Capture">
                                        <div class="image--wrapper">
                                            <img src="/img/features/home_02-com.jpg" class="border border--blue" alt="Attendance Management Software" loading="lazy" />
                                        </div>    
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/img/features/home_03.png" data-source="/img/features/home_03.png" title="Daily Working Screen Capture" aria-label="Daily Working Screen Capture">
                                        <div class="image--wrapper">
                                            <img src="/img/features/home_03-com.jpg" class="border border--blue" alt="Attendance Management Software" loading="lazy" />
                                        </div>    
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/img/features/home_04.png" data-source="/img/features/home_04.png" title="Daily Working Screen Capture" aria-label="Daily Working Screen Capture">
                                        <div class="image--wrapper">
                                            <img src="/img/features/home_04-com.jpg" class="border border--blue" alt="Attendance Management Software" loading="lazy" />
                                        </div>    
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/img/features/home_tracking.jpg" data-source="/img/features/home_tracking.jpg" title="Dokodemo GPS features" aria-label="Dokodemo GPS features">
                                        <div class="image--wrapper">
                                            <picture>
                                                <source srcset="/img/features/home_tracking-com.webp" type="image/webp">
                                                <img src="/img/features/home_tracking-com.jpg" class="border border--blue" alt="Dokodemo GPS features" loading="lazy" />
                                            </picture>
                                        </div>    
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="slide__nav">
                                <div class="nav__img">
                                    <img src="/img/features/home_01-com.jpg" class="img-fluid rounded-lg" alt="Attendance Management Software" loading="lazy" />
                                </div>
                                <div class="nav__img">
                                    <img src="/img/features/home_02-com.jpg" class="img-fluid rounded-lg" alt="Attendance Management Software" loading="lazy" />
                                </div>
                                <div class="nav__img">
                                    <img src="/img/features/home_03-com.jpg" class="img-fluid rounded-lg" alt="Attendance Management Software" loading="lazy" />
                                </div>
                                <div class="nav__img">
                                    <img src="/img/features/home_04-com.jpg" class="img-fluid rounded-lg" alt="Attendance Management Software" loading="lazy" />
                                </div>
                                <div class="nav__img">
                                    <img src="/img/features/home_tracking-com.jpg" class="img-fluid rounded-lg" alt="Dokodemo GPS features" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 color--blue">
                        <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Features">                            
                            <h2 class="mt-3 mb-0 font-weight-bold fs-34">Features</h2>
                        </div>
                        <p class="mb-4 fs-14">As with other attendance management tools, employees will have to indicate when starting or stopping their work hours. The difference is that the validity of these recorded work hours can be verified. Through randomly capturing the desktop activities of its users and saving them onto a cloud server, one can see whether workers are doing actual work, playing games, watching YouTube, etc., which in turn can be used as solid evidence to prevent such activities from happening again. We support efficiency within HR operations regarding the calculation of overtime hours, the management of paid leave, task-based & department-based, daily, weekly, and monthly work time analyses.</p>
                        <div class="row justify-content-center justify-content-lg-start">
                            <div class="col-auto col-md-6">
                                <a href="/features" class="form-control btn btn--rounded bg--yellow px-4">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py--70px home__benefit">
            <div class="container">

                <div class="row align-items-end benefit__description">
                    <div class="col-md-6 mb-3 mb-md-5">   
                        <div class="color--blue">
                            <div class="title--bg title--bg-border title--bg-border-right" data-title-bg="Benefit">                            
                                <h2 class="mb-0 font-weight-bold fs-34">Benefit</h2>
                            </div>
                            <p class="mb-0 fs-14">Your company will be able to implement innovative and flexible HR strategies, strengthening the overall output of your work force, while enhancing your staff’s wellbeing. Allowing employees to work remotely grants them flexible working hours, giving them the chance to work in a comfortable environment suited to them, while at the same time increasing productivity and improving upon practical management strategies which allow for the fair evaluation of staff. Overall, the advantages are many, for both the Company and Employees alike. These include:</p>
                        </div>                     
                    </div>
                    <div class="col-md-6 mb-5 description__image">
                        <div class="bg--l-blue shadow--blue p-3 rounded-lg">
                            <picture>
                                <source srcset="/img/home/benefit-image.webp" type="image/webp">
                                <img src="/img/home/benefit-image.jpg" alt="benefit dokodemo" class="img-fluid rounded-lg" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center color--blue">

                    <div class="mb-3 col-12">
                        <div class="p-3 rounded-lg bg--blue-gradation-right">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8 col-lg-6 order-last order-md-first">
                                    <h4 class="fs-20 font-weight-bold">Cost Saving</h4>
                                    <p class="mb-0 fs-14">Employees can greatly reduce their commuting expenses, while employers can also save on costs in regards to transportation and meal allowances. Such strategies also reduce the need for office space, thereby allowing the company to save money renting a smaller office.</p>
                                </div>
                                <div class="col-4 col-lg-6 mb-3 mb-lg-0 order-first order-md-last text-center">
                                    <picture>
                                        <source srcset="/img/home/benefit-saving.webp" type="image/webp">
                                        <img src="/img/home/benefit-saving.png" alt="Cost Saving" class="img-fluid" width="150px" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </div>               
                    </div>
                    <div class="mb-3 col-12">
                        <div class="p-3 rounded-lg bg--blue-gradation-left">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-4 col-lg-6 mb-3 mb-lg-0 text-center">
                                    <picture>
                                        <source srcset="/img/home/benefit-productivity.webp" type="image/webp">
                                        <img src="/img/home/benefit-productivity.png" alt="Increased Productivity" class="img-fluid" width="150px" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-md-8 col-lg-6">
                                    <h4 class="fs-20 font-weight-bold">Increased Productivity</h4>
                                    <p class="mb-0 fs-14">Employees can singularly focus their efforts on producing results, while not having to waste time and energy on logistical difficulties and commuting.</p>
                                </div>
                            </div>                            
                        </div>    
                    </div>
                    <div class="mb-3 col-12">
                        <div class="p-3 rounded-lg bg--blue-gradation-right">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8 col-lg-6 order-last order-md-first">
                                    <h4 class="fs-20 font-weight-bold">Universal Hiring</h4>
                                    <p class="mb-0 fs-14">Employers will be able to hire and work with excellent human resources from all over the world, regardless of where the office is located.</p>
                                </div>
                                <div class="col-4 col-lg-6 mb-3 mb-lg-0 order-first order-md-last text-center">
                                    <picture>
                                        <source srcset="/img/home/benefit-hiring.webp" type="image/webp">
                                        <img src="/img/home/benefit-hiring.png" alt="Universal Hiring" class="img-fluid" width="150px" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="mb-3 col-12">
                        <div class="p-3 rounded-lg bg--blue-gradation-left">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-4 col-lg-6 mb-3 mb-lg-0 text-center">
                                    <picture>
                                        <source srcset="/img/home/benefit-retain.webp" type="image/webp">
                                        <img src="/img/home/benefit-retain.png" alt="Retain Employees" class="img-fluid" width="150px" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-md-8 col-lg-6">
                                    <h4 class="fs-20 font-weight-bold">Retain Employees</h4>
                                    <p class="mb-0 fs-14">Employers will be able to hire from a much wider & even international HR source, regardless of where the office is located.</p>
                                </div>
                            </div>                            
                        </div> 
                    </div>
                    <div class="mb-4 col-12">
                        <div class="p-3 rounded-lg bg--blue-gradation-right">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8 col-lg-6 order-last order-md-first">
                                    <h4 class="fs-20 font-weight-bold">Accurate Evaluation</h4>
                                    <p class="mb-0 fs-14">Dokodemo-Kerja keeps track on what employees are doing and how they work, thus assisting HR in the process of evaluating staff output in a fair and objective manner, with concrete evidence to back it up.</p>
                                </div>
                                <div class="col-4 col-lg-6 mb-3 mb-lg-0 order-first order-md-last text-center">
                                    <picture>
                                        <source srcset="/img/home/benefit-evaluation.webp" type="image/webp">
                                        <img src="/img/home/benefit-evaluation.png" alt="Accurate Evaluation" class="img-fluid" width="150px" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-auto col-md-6">
                        <a href="/features" class="form-control btn btn--rounded bg--yellow px-4">Find out more about features in Dokodemo-Kerja</a>
                    </div>

                </div>

            </div>
        </section>

        <section class="mb--30px color--blue bg--l-blue home__case-study">
            <div class="py--60px container">
                <div class="text-center title--bg title--bg-border title--bg-border-left" data-title-bg="Case Study">                            
                    <h2 class="mb-0 font-weight-bold fs-34">Case Study</h2>
                </div>
                <div class="pt--20px row">
                    <div class="col-md-4 mb-4 mb-lg-0">
                        <a href="/case-study/case-3" class="color--blue">
                            <div class="case-study">
                                <picture>
                                    <source srcset="/img/case-study/case-3.webp" type="image/webp">
                                    <img src="/img/case-study/case-3.jpg" alt="" class="img-fluid mb-3 rounded-lg" loading="lazy">
                                </picture>
                                <h5 class="fs-20 font-weight-bold">Dokodemo-Kerja Story 3</h5>
                                <p class="mb-0">Accounting Firm, Company A</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/case-study/case-4" class="color--blue">
                            <div class="case-study">
                                <picture>
                                    <source srcset="/img/case-study/dokodemo-story-4-ghitta.webp" type="image/webp">
                                    <img src="/img/case-study/dokodemo-story-4-ghitta.jpg" alt="" class="img-fluid mb-3 rounded-lg" style="object-position: top;" loading="lazy">
                                </picture>
                                <h5 class="fs-20 font-weight-bold">Dokodemo-Kerja Story 4</h5>
                                <p class="mb-0">PT. LOGIQUE Digital Indonesia</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4 mb-lg-0">
                        <a href="/case-study/case-5" class="color--blue">
                            <div class="case-study">
                                <picture>
                                    <source srcset="/img/case-study/dokodemo-story-5.webp" type="image/webp">
                                    <img src="/img/case-study/dokodemo-story-5.jpg" alt="" class="img-fluid mb-3 rounded-lg" loading="lazy">
                                </picture>
                                <h5 class="fs-20 font-weight-bold">Dokodemo-Kerja Story 5</h5>
                                <p class="mb-0">PT. LOGIQUE Digital Indonesia</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="color--blue pt--60px home__testimonial" id="testimony">
            <div class="container">
                <div class="mb-4 row">
                    <div class="col-md-6">
                        <div class="title--bg title--bg-border title--bg-border-right" data-title-bg="Testimoni">                            
                            <h2 class="mb-0 font-weight-bold fs-34">Testimoni</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial__slide-testi slick--blue-arrow">
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Rafid</span> - <em class="fs-16">Front End</em></h4>
                            <p class="fs-14">The traffic jam that I experience every morning I leave for work can be stressful, to say the least. My house is quite far from the office and I have to take a crowded bus to get there. Everyday totals to about 4 hours on the road. That’s why I was so grateful when my company finally decided to use Dokodemo-Kerja and implemented systems of remote working in my office. With this new application, I can work anywhere I choose, and can further assign  those 4 hours that would be otherwise wasted on being stuck in traffic,on productive activities.</p>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Angga</span> - <em class="fs-16">Designer</em></h4>
                            <p class="fs-14">I’ve always wanted to go back to university to finish my degree. Through
                            Dokodemo-Kerja, I can prove to my manager that I am still able to work for 8 hours every day.
                            Somedays, I work in the morning, and other times, I work at night. I can now continue my studies
                            while still being gainfully employed. Dokodemo-Kerja has increased the quality of my life. Thank
                            you.</p>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Mizuho Yamada</span> - <em class="fs-16">Manager of Back Office</em></h4>
                            <p class="fs-14">On occasion, I’ve noticed that some of my employees were having
                            unusually long breaks during their allotted prayer time. I just want everyone to have fair
                            working hours, no matter their religion, but it’s difficult for me to talk about this specific
                            issue. Since we have implemented Dokodemo-Kerja, all of my employees now have fair working
                            hours. When it comes time for their prayer break, they will always
                            stop their Dokodemo-Kerja and start it once again when returning to work. Indeed, the
                            application helps our company stay productive.</p>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Kevin</span> - <em class="fs-16">Staff HR</em></h4>
                            <p class="fs-14">It used to be so difficult to get my employees to stop spending their
                            working hours browsing social media, watching YouTube videos or even playing games. In this
                            respect, Dokodemo-Kerja has become an indispensable tool. Its ability to capture the desktop
                            activities of each employee makes them manage their working hours in a more efficient manner.
                            Now, when engaging in activities other than work, employees will pause their Dokodemo-Kerja.</p>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Arie</span> - <em class="fs-16">HR</em></h4>
                            <p class="fs-14">I used to think that working remotely full time was absurd. I mean, if
                            everybody is working remotely, how do we know if they are honestly putting in any working hours?
                            But ever since we’ve implemented Dokodemo-Kerja, we haven’t had to worry about such problems
                            anymore. Such a system makes it possible for us to monitor how each of our employees spend their
                            working hours. Dokodemo-Kerja has indeed helped our company for the better.</p>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Sisca</span> - <em class="fs-16">Programmer</em></h4>
                            <p class="fs-14">Dokodemo-Kerja has productively changed the way I work for the better.
                            I’m a new mom and have reservations about trusting my newborn son with a babysitter while
                            working at the office. I’m really happy with Dokodemo-Kerja in this regard as now, my company
                            allows me to work from Home. Now, I can work while taking care of my baby throughout the day.</p>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Tiara</span> - <em class="fs-16">Staff HR</em></h4>
                            <p class="fs-14">I often have to reprimand employees who take lengthy smoking breaks. On
                            such occasions, they are not working according to their agreed upon hours. I simply want my
                            employees to work in a reasonable manner. After using Dokodemo-Kerja, employees now carefully
                            regard the time that they use at work smoking. I can also easily calculate their overall working
                            hours, as well.</p>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="p-3 rounded-lg slide-testi">
                            <h4 class="fs-20"><span class="font-weight-bold">Bobby Susanto</span> - <em class="fs-16">Programmer</em></h4>
                            <p class="fs-14">Because of my mother’s illness, I thought I was faced with the choice of
                            staying home and taking care of her, or my job. Because of Dokodemo-Kerja, it is now possible
                            for me to work remotely from home. I can still tend to my mother, while working as a full time
                            employee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb--30px news-list-container">
            <div class="container">
                <div class="newscontainer">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-8">
                            <h2>Latest <strong>News</strong></h2>
                        </div>
                    </div>
                    <?php
                    $rss = new DOMDocument();
                    $rss->load('https://www.logique.co.id/blog/en/category/dokodemo-kerja-en/feed/');
                    $feed = array();
                    foreach ($rss->getElementsByTagName('item') as $node) {
                    $item = array ( 
                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                    );
                    array_push($feed, $item);
                    }
                    $limit = 4; 

                    function tgl_indo($tanggal){
                        $bulan = array (
                            1 =>   'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'Mei',
                            'Jun',
                            'Jul',
                            'Ags',
                            'Sep',
                            'Okt',
                            'Nov',
                            'Des'
                        );
                        $pecahkan = explode('-', $tanggal);
                        
                    
                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                    }

                    ?>

                    <div class="news-list">
                        <?php 
                            for($x=0;$x<$limit;$x++) {
                            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                            $link = $feed[$x]['link'];
                            $description = $feed[$x]['desc'];
                            $date = date('F d, Y', strtotime($feed[$x]['date']));
                            // echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
                            // echo '<small><em>Posted on '.$date.'</em></small></p>';
                            // echo '<p>'.$description.'</p>';
                        ?>
                        
                            <div class="row justify-content-md-center">
                                
                                <div class="col-sm-8">
                                    <div class="news-item">
                                        <span class="feeddate"> <?php echo tgl_indo(date('Y-m-d', strtotime($feed[$x]['date'])));;?></span><a href="<?php echo $link ?>" target="_blank" rel="noreferrer"><?php echo $title ?></a>
                                    </div>
                                </div>
                                    
                            </div>
                        
                        <?php  } ?>

                    </div>

                </div>
            </div>
        </section>

    </div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/component/demo-banner.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/modal-meeting.php'); ?>
<?php 
    $add_js = '<script async src="/js/jquery.magnific-popup.min.js"></script>';
    include($_SERVER['DOCUMENT_ROOT'].'/component/footer.php'); 
?>
<script>
    $(function() {

        // feature slide
        $('.slide__image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slide__nav'
        });
        $('.slide__nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slide__image',
            arrows: false,
            dots: false,
            // centerMode: true,
            focusOnSelect: true
        });

        // testimonial slide
        $(".testimonial__slide-testi").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

        })

        $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {
                    return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank" rel="noopener noreferrer">Full Image</a>';
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

    })   
    
    // modal popup
    // setTimeout(function() {
    //     $('#myModal').modal();
    // }, 4000);
    // end modal popup

</script>

<!-- schedule meeting form -->
<script type="text/javascript">
    // Handle Success and Error 
    <?php if (!is_null($success)) { ?>
        $('#meetingScheduleSent').modal('show');
    <?php } else if ($errors) {?>
          // code handle here
          window.location.href= "/";
    <?php }?>
    // when close modals redirect to home page and kill session
    $('#meetingScheduleSent').on('hidden.bs.modal', function () {
        window.location.href= "/";
    })
</script>

<script type="text/javascript">
    $("#meetingSchedule").on('show.bs.modal', function () {
        grecaptcha.reset();
    });
    
    function enableBtn(){
		$('#meeting-form-submit').attr('disabled', false);
	}

	$(document).ready(function() {
		$('#meeting-form-submit').attr('disabled', true);
	});
</script>

<script>
    // load js only when needed
    function lazyLoadJs(src) {
        const document = window.document;
        const body = document.body;
        const el = document.createElement("script");

        el.async = true;
        el.src = src;
        body.appendChild(el);
    }

    window.addEventListener('load', function(event) {
        if (!mobileCheck()) {
            lazyLoadJs('/js/homepage-animation.js');
        }
    });
</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>