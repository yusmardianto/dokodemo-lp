<?php 
    $page = '';
    $page_title = '勤怠管理＆生産性向上ツール | Dokodemo-Kerja | LOGIQUEインドネシア';

    $meta_description = 'Dokodemo-Kerjaは従業員の勤怠と作業内容をプライバシーに配慮した形で適切に把握できるだけでなく、従業員にいつ・どこで働くかの自由度を与えることを可能にするので生産性向上に寄与する、Win-Winな人事管理クラウドツールです。インドネシアで展開している製品です。';
    $meta_keyword = 'dokodemo, dokodemo-kerja, dokodemo kerja, work everywhere, work whenever, work wherever, project management tool, project management software, human resource tool, human resource software, monitoring software, monitoring tool, monitor desktop, monitor with privacy, low res monitoring, low resolution monitoring, time tracker, logique product, pt logique';

    $og_title = '勤怠管理＆生産性向上ツール | Dokodemo-Kerja';
    $og_image = 'https://dokodemo-kerja.com/img/og-img/index.jpg';
    $og_desription = 'Dokodemo-Kerjaは従業員の勤怠と作業内容をプライバシーに配慮した形で適切に把握することが可能なインドネシアで開発されたクラウドツールです。';

    $canonical_link = 'https://dokodemo-kerja.com/jpn';

    $add_css = '
    <link rel="stylesheet" href="/js/magnific-popup.css" />
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/slick-theme.css" />
    <link rel="stylesheet" href="/css/style-home.css" />    ';

    include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/header.php');
?>

<div class="home">

    <section class="pt-5 pb--70px color--blue home__banner">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 order-1 order-md-first">
                    <h4 class="fs-18"><span class="font-weight-bold">Dokodemo-Kerja</span> でリモートワークを実現</h4>
                    <h1 class="color--yellow fs-34 font-weight-bold">フレキシブルで生産性の高い働き方を可能とします</h1>
                    <div class="row my-4 banner__benefit">
                        <div class="col-4">
                            <div class="text-center">
                                <picture>
                                    <source srcset="/img/home/home-cost.svg">
                                    <img src="/img/home/home-cost.png" alt="cost effective" class="img-fluid">
                                </picture>
                                <h5 class="mb-0 fs-18 font-weight-bold">低価格</h5>
                                <p class="fs-14">月額 Rp.1,000,000〜</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <picture>
                                    <source srcset="/img/home/home-minimum.svg">
                                    <img src="/img/home/home-minimum.png" alt="no minimum" class="img-fluid">
                                </picture>
                                <h5 class="mb-0 fs-18 font-weight-bold">契約期間縛りなし</h5>
                                <!-- <p class="fs-14">Contract Period</p> -->
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <picture>
                                    <source srcset="/img/home/home-setup.svg">
                                    <img src="/img/home/home-setup.png" alt="easy setup" class="img-fluid">
                                </picture>
                                <h5 class="mb-0 fs-18 font-weight-bold">即利用開始可能</h5>
                                <!-- <p class="fs-14">You can start today</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 order-first order-lg-2">
                    <picture>
                        <source srcset="/img/home/home-banner.webp" type="image/webp">
                        <img src="/img/home/home-banner.png" alt="Dokodemo Remote Working" class="img-fluid mb-4 mb-lg-0">
                    </picture>
                </div>
                <div class="col-12 order-last">
                    <div class="mt--30px mb-5 py--20px px--30px bg--l-blue border--blue rounded-lg shadow--blue">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-lg-6">
                                <p class="mb-md-0 text-justify text-md-left">
                                Version 2.0からはGPSトラック機能も実装しましたので、外出が多いスタッフの勤務実態も管理可能となりました。
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-6 text-center">
                                <div class="row justify-content-center">
                                    <div class="col-auto col-lg-6">
                                        <a href="/jpn/demo" class="form-control btn btn--rounded bg--blue fs-14 text-white px-4">デモをみる</a>
                                    </div>
                                </div>
                                <p class="mt-1 mb-0 fs-12">会員登録等、必要ありません</p>    
                            </div>
                        </div>
                    </div>
                    <p class="mb--70px text-center">どこでも、何時でも、働いた時間と作業内容を記録することで、会社と従業員の双方にメリットのある働き方を実現可能とする勤怠管理＆リモートワーク管理ツールです。正確に勤務時間を管理可能になり、残業時間や有給消化数の計算などが効率化されます。スクリーンキャプチャを取得して管理することで勤務時間中のさぼりを抑止します。</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-lg-0">
                    <ul class="list-unstyled banner__list">
                        <li>勤務時間・タスク内容を記録します。日別・週別・月別の労働時間が集計されるので容易に管理できます。</li>
                        <li>ランダムに作業スクリーンをキャプチャしてサーバーに送信します。（プライバシーに配慮した解像度になっています）</li>
                        <li>外回りの社員に対しては、スマホアプリを使用することで勤務時間と勤務場所（GPSトラッキング)を管理可能です。</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="bg--l-blue shadow--blue p-3 rounded-lg">                                    
                        <div class="embed-responsive embed-responsive-16by9 feature-video">
                            <iframe class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
                                src="https://www.youtube.com/embed/OWmF48Cq_fA" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg--l-blue home__feature">
        <div class="py--60px position-relative container">
            <div class="feature__bg-accent">
                <picture>
                    <source srcset="/img/icon/icon-meeting-accent.svg">
                    <img src="/img/icon/icon-meeting-accent-full.png" alt="" class="img-fluid position-absolute bg-accent__img">
                </picture>
                <picture>
                    <source srcset="/img/icon/icon-meeting-accent.svg">
                    <img src="/img/icon/icon-meeting-accent-full.png" alt="" class="img-fluid position-absolute bg-accent__img">
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
                                        <img src="/img/features/home_01-com.jpg" class="border border--blue" alt="Screenshot of the Dokodemo-Kerja Application" />
                                    </div>    
                                    </a>
                                </div>
                                <div>
                                    <a href="/img/features/home_02.png" data-source="/img/features/home_02.png" title="Daily Working Screen Capture" aria-label="Daily Working Screen Capture">
                                    <div class="image--wrapper">
                                        <img src="/img/features/home_02-com.jpg" class="border border--blue" alt="Screenshot of the Dokodemo-Kerja Application" />
                                    </div>    
                                    </a>
                                </div>
                                <div>
                                    <a href="/img/features/home_03.png" data-source="/img/features/home_03.png" title="Daily Working Screen Capture" aria-label="Daily Working Screen Capture">
                                    <div class="image--wrapper">
                                        <img src="/img/features/home_03-com.jpg" class="border border--blue" alt="Screenshot of the Dokodemo-Kerja Application" />
                                    </div>    
                                    </a>
                                </div>
                                <div>
                                    <a href="/img/features/home_04.png" data-source="/img/features/home_04.png" title="Daily Working Screen Capture" aria-label="Daily Working Screen Capture">
                                    <div class="image--wrapper">
                                        <img src="/img/features/home_04-com.jpg" class="border border--blue" alt="Screenshot of the Dokodemo-Kerja Application" />
                                    </div>    
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="slide__nav">
                            <div class="nav__img">
                                <img src="/img/features/home_01-com.jpg" class="img-fluid rounded-lg" alt="Screenshot of the Dokodemo-Kerja Application" />
                            </div>
                            <div class="nav__img">
                                <img src="/img/features/home_02-com.jpg" class="img-fluid rounded-lg" alt="Screenshot of the Dokodemo-Kerja Application" />
                            </div>
                            <div class="nav__img">
                                <img src="/img/features/home_03-com.jpg" class="img-fluid rounded-lg" alt="Screenshot of the Dokodemo-Kerja Application" />
                            </div>
                            <div class="nav__img">
                                <img src="/img/features/home_04-com.jpg" class="img-fluid rounded-lg" alt="Screenshot of the Dokodemo-Kerja Application" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 color--blue">
                    <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="機能">                            
                        <h2 class="mt-3 mb-0 font-weight-bold fs-34">機能</h2>
                    </div>
                    <p class="mb-4 fs-14">他の多くの勤怠管理ツールと同様に従業員に勤務スタートとストップを合図してもらいます。異なるのは、それが妥当かどうかを検証できる点です。勤務中のユーザーのスクリーンをランダムにキャプチャしてクラウドサーバーに保存することで、実は働いていない、ゲームをしている、Youtubeをみているなどを把握、また抑止できます。残業時間の計算、有給消化数の管理、タスク別、部署別、日次、週次、月次での作業時間分析など効率的な人事業務をサポートします。</p>
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-auto col-md-6">
                            <a href="/jpn/features" class="form-control btn btn--rounded bg--yellow px-4">機能をもっと詳しくみる</a>
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
                        <div class="title--bg title--bg-border title--bg-border-right" data-title-bg="使用するメリット">                            
                            <h2 class="mb-0 font-weight-bold fs-34">使用するメリット</h2>
                        </div>
                        <p class="mb-0 fs-14">Dokodemo-Kerjaをご利用いただくことにより、柔軟なHRルールを適用することが可能になります。いつでも、どこでも働けるルールを適用可能です。リモートワーカーだけに限らず、オフィスで働く従業員にも適用することで、労働時間不足、働き過ぎを把握でき、労働中に業務に関係ないことをしていないか知ることができます。従業員の働き方を可視化することで更に生産性を上げるためのHRルールの最適化が行えます。</p>
                    </div>                     
                </div>
                <div class="col-md-6 mb-5 description__image">
                    <div class="bg--l-blue shadow--blue p-3 rounded-lg">
                        <picture>
                            <source srcset="/img/home/benefit-image.webp" type="image/webp">
                            <img src="/img/home/benefit-image.jpg" alt="benefit dokodemo" class="img-fluid rounded-lg">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center color--blue">

                <div class="mb-3 col-12">
                    <div class="p-3 rounded-lg bg--blue-gradation-right">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-8 col-lg-6 order-last order-md-first">
                                <h4 class="fs-20 font-weight-bold">無駄の削減</h4>
                                <p class="mb-0 fs-14">従業員は通勤の労力、非柔軟な労働時間設定のために非稼働となってしまう等をなくせます。会社は無駄な残業（会社にいるだけ残業）をなくせます。オフィススペースも狭くし家賃を削減できるでしょう。</p>
                            </div>
                            <div class="col-4 col-lg-6 mb-3 mb-lg-0 order-first order-md-last text-center">
                                <picture>
                                    <source srcset="/img/home/benefit-saving.webp" type="image/webp">
                                    <img src="/img/home/benefit-saving.png" alt="Cost Saving" class="img-fluid" width="150px">
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
                                    <img src="/img/home/benefit-productivity.png" alt="Increased Productivity" class="img-fluid" width="150px">
                                </picture>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <h4 class="fs-20 font-weight-bold">生産性向上</h4>
                                <p class="mb-0 fs-14">集中できる時間に、集中できる環境（場所）で仕事できるので生産性が向上します。無駄な会議も減ります。</p>
                            </div>
                        </div>                            
                    </div>    
                </div>
                <div class="mb-3 col-12">
                    <div class="p-3 rounded-lg bg--blue-gradation-right">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-8 col-lg-6 order-last order-md-first">
                                <h4 class="fs-20 font-weight-bold">場所フリーな採用</h4>
                                <p class="mb-0 fs-14">オフィスがある場所に囚われず、世界中の優秀な人材を採用＆働いてもらうことが可能になります。</p>
                            </div>
                            <div class="col-4 col-lg-6 mb-3 mb-lg-0 order-first order-md-last text-center">
                                <picture>
                                    <source srcset="/img/home/benefit-hiring.webp" type="image/webp">
                                    <img src="/img/home/benefit-hiring.png" alt="Universal Hiring" class="img-fluid" width="150px">
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
                                    <img src="/img/home/benefit-retain.png" alt="Retain Employees" class="img-fluid" width="150px">
                                </picture>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <h4 class="fs-20 font-weight-bold">従業員満足度向上</h4>
                                <p class="mb-0 fs-14">従業員にフレキシブルな勤務を可能にすることで、また妊娠中や育児中、家族の介護中などでもキャリアを諦めることなく継続勤務できることで従業員満足度を向上させます。</p>
                            </div>
                        </div>                            
                    </div> 
                </div>
                <div class="mb-4 col-12">
                    <div class="p-3 rounded-lg bg--blue-gradation-right">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-8 col-lg-6 order-last order-md-first">
                                <h4 class="fs-20 font-weight-bold">正確で公平な人事評価</h4>
                                <p class="mb-0 fs-14">正確なレコードとスクリーンキャプチャで、勤務実態が明らかになりますので、人事評価もデータに基づいた公平なものになります。</p>
                            </div>
                            <div class="col-4 col-lg-6 mb-3 mb-lg-0 order-first order-md-last text-center">
                                <picture>
                                    <source srcset="/img/home/benefit-evaluation.webp" type="image/webp">
                                    <img src="/img/home/benefit-evaluation.png" alt="Accurate Evaluation" class="img-fluid" width="150px">
                                </picture>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-auto col-md-4">
                    <a href="/jpn/features" class="form-control btn btn--rounded bg--yellow px-4">Dokodemo-Kerjaの機能をもっと詳しくみる</a>
                </div>

            </div>

        </div>
    </section>

    <section class="mb--30px color--blue bg--l-blue home__case-study">
        <div class="py--60px container">
            <div class="text-center title--bg title--bg-border" data-title-bg="事例">                            
                <h2 class="mb-0 font-weight-bold fs-34">事例</h2>
            </div>
            <div class="pt--20px row">
                <div class="col-md-4 mb-4 mb-lg-0">
                    <a href="/jpn/case-study/case-2" class="color--blue">
                        <div class="case-study">
                            <picture>
                                <source srcset="/img/case-study/case-2.webp" type="image/webp">
                                <img src="/img/case-study/case-2.jpg" alt="" class="img-fluid mb-3 rounded-lg">
                            </picture>
                            <h5 class="fs-20 font-weight-bold">「Dokodemo-Kerja」活用ストーリー2</h5>
                            <p class="mb-0">システム開発会社B社</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <a href="/case-study/case-3" class="color--blue">
                        <div class="case-study">
                            <picture>
                                <source srcset="/img/case-study/case-3.webp" type="image/webp">
                                <img src="/img/case-study/case-3.jpg" alt="" class="img-fluid mb-3 rounded-lg">
                            </picture>
                            <h5 class="fs-20 font-weight-bold">「Dokodemo-Kerja」活用ストーリー3</h5>
                            <p class="mb-0">Accounting Firm A社</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/jpn/case-study/case-4" class="color--blue">
                        <div class="case-study">
                            <picture>
                                <source srcset="/img/case-study/dokodemo-story-4-ghitta.webp" type="image/webp">
                                <img src="/img/case-study/dokodemo-story-4-ghitta.jpg" alt="" class="img-fluid mb-3 rounded-lg" style="object-position: top;">
                            </picture>
                            <h5 class="fs-20 font-weight-bold">「Dokodemo-Kerja」活用ストーリー4</h5>
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
                    <div class="title--bg title--bg-border title--bg-border-right" data-title-bg="実際のお客様の声">                            
                        <h2 class="mb-0 font-weight-bold fs-34">実際のお客様の声</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial__slide-testi slick--blue-arrow">
                <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Rafid</span> - <em class="fs-16">Front End</em></h4>
                        <p class="fs-14">私の家は遠いのでオフィスまで毎日往復で4時間の通勤を強いられていました。混んだバスに長時間乗らなければならないのでオフィスにつく頃にはパワーが失われていました。会社がDokodemo-Kerjaを導入し、週に3日、私にリモートワークを許可してくれたことで、100%自分のパワーを仕事に注げるようになりました。往復の4時間を仕事や自分の趣味の時間に使えるようになったので幸福度が上がりました。</p>
                    </div>
                </div>
                <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Angga</span> - <em class="fs-16">Designer</em></h4>
                        <p class="fs-14">私は働きながら夜間学校に通っています。Dokodemo-Kerjaでどこからでも、正確に私が働いたことをマネージャーに証明することができるので、学校に通っていることが仕事に悪影響を与えてないことを証明できています。時には朝早く仕事し、時には学校が終わったあとの深夜に働いて規定の労働時間を満たしています。生産性も上がったと感じています。</p>
                    </div>
                </div>
                <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Mizuho Yamada</span> - <em class="fs-16">Manager of Back Office</em></h4>
                        <p class="fs-14">いままで、いくつかのスタッフグループのお祈り（お祈りの後の休憩）が長すぎることがとても気になっていました。お祈りをしないスタッフにとってフェアでないからです。ただ、私から指摘するにはセンシティブ過ぎる問題で解決することができないまま長い時間が過ぎていました。Dokodemo-Kerjaを導入し、皆にお祈り時、休憩時の計測ストップを徹底した後は、とても公平になり、また休憩が長かったスタッフ達の休憩時間が短くなりました。（休憩していると規定の労働時間に達しないことが自ら分かるので）</p>
                    </div>
                </div>
                <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Kevin</span> - <em class="fs-16">Staff HR</em></h4>
                        <p class="fs-14">人事部のスタッフとして従業員が勤務時間中にYoutubeを見たり、オンラインゲームをしたり、業務外のことをするのを防ぐ、注意することに難しさを感じていました。彼らも見つからないように行いますし、発見しても言い方が難しく、言い争いになってしまうこともありました。<br>
                        Dokodemo-Kerjaではランダムにスクリーンキャプチャをとることが抑止力になります。それだけでだいぶ業務外のことをする従業員は減りましたし、それでも治らないスタッフにはDokodemo-Kerjaで証拠をもって話ができるので大きな効果がでています。</p>
                    </div>
                </div>
                <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Arie</span> - <em class="fs-16">HR</em></h4>
                        <p class="fs-14">オンラインで出勤退勤を自己申告でつけさせるなんて馬鹿げていると思っていました。誰も正直に深刻するわけがないと。ランダムに撮られるスクリーンキャプチャが効果的で虚偽深刻ができないようになっていることが分かり、Dokodemo-Kerjaをとても気に入っています。会社にとっても従業員にどちらにとってもメリットのあるツールだと思います。</p>
                    </div>
                </div>
                <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Sisca</span> - <em class="fs-16">Programmer</em></h4>
                        <p class="fs-14">私には生まれたばかりの子供がいます。ベビーシッターに私の出社中の赤ちゃんの世話をお願いしていたのですが、主人と相談して、自分達で子供の成長を見守りたいと決めました。退職しなくてならないかと思いましたが、会社がDokodemo-Kerjaを使うことを条件にフルリモート勤務を許可してくれました。とても幸せです。</p>
                    </div>
                </div>
                <!-- <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Tiara</span> - <em class="fs-16">Staff HR</em></h4>
                        <p class="fs-14">I often have to reprimand employees who take lengthy smoking breaks. On
                        such occasions, they are not working according to their agreed upon hours. I simply want my
                        employees to work in a reasonable manner. After using Dokodemo-Kerja, employees now carefully
                        regard the time that they use at work smoking. I can also easily calculate their overall working
                        hours, as well.</p>
                    </div>
                </div> -->
                <div class="px-2">
                    <div class="p-3 rounded-lg slide-testi">
                        <h4 class="fs-20"><span class="font-weight-bold">Bobby Susanto</span> - <em class="fs-16">Programmer</em></h4>
                        <p class="fs-14">母親の看病のためにキャリアを諦めなければいけない状況でした。会社がDokodemo-Kerjaを導入してくれたお陰で、会社をやめることなく、正社員としての契約を継続することができました。いまは週に4日在宅勤務、週に1日だけ出社しています。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="color--blue py--60px home__schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="bg--l-blue rounded-lg text-center schedule">
                        <h5 class="font-weight-bold mb-4 fs-20">Schedule Online Meeting</h5>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <picture>
                                    <source srcset="/img/home/schedule-online.svg">
                                    <img src="/img/home/schedule-online.png" alt="online meeting" class="img-fluid">
                                </picture>
                            </div>
                            <div class="col-md-8">
                                <p class="my-4">Set up an online consultation with our team for a software demo</p>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="form-control btn btn--rounded bg--yellow" data-title="online" data-toggle="modal" data-target="#meetingSchedule">
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
                                    <source srcset="/img/home/schedule-offline.svg" type="image/">
                                    <img src="/img/home/schedule-offline.png" alt="offline meeting" class="img-fluid">
                                </picture>
                            </div>
                            <div class="col-md-8">
                                <p class="my-4">Set up an offline consultation with our team for a software demo</p>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="form-control btn btn--rounded bg--yellow" data-title="offline" data-toggle="modal" data-target="#meetingSchedule">
                                    Offline
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/demo-banner.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/modal-meeting.php'); ?>
<?php 
    $add_js = '<script src="/js/jquery.magnific-popup.min.js"></script>';
    include($_SERVER['DOCUMENT_ROOT'].'/jpn/component/footer.php'); 
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

        // $('.smooth').click(function() {
        //     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
        //         .hostname == this.hostname) {
        //         var target = $(this.hash);
        //         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        //         if (target.length) {
        //             $('html, body').animate({
        //                 scrollTop: target.offset().top
        //             }, 1000);
        //             return false;
        //         }
        //     }
        // });

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

    var element = document.getElementById("popup-text");

    var t = setTimeout(openPopUp, 5000);

    function openPopUp() {
        element = document.getElementById("popup-text");
        element.style.visibility = "visible";
        element.style.opacity = "1";
    }        
    
    // modal popup
    setTimeout(function() {
        $('#myModal').modal();
    }, 4000);
    // end modal popup

</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>