<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" itemprop="description"
        content="Dokodemo-Kerjaの活用事例その１として開発経緯をご紹介します。従業員の実勤務時間を記録、GPSで働いた場所をトラッキング、フレキシブルで生産性の高い働き方を可能とするリモートワーク管理ツールDokodemo-Kerja（ドコデモクルジャ）の紹介。">
    <meta name="keywords"
        content="dokodemo, dokodemo-kerja, dokodemo kerja, work everywhere, work whenever, work wherever, project management tool, project management software, human resource tool, human resource software, monitoring software, monitoring tool, monitor desktop, monitor with privacy, low res monitoring, low resolution monitoring, time tracker, logique product, pt logique">
    <meta name="author" content="PT. LOGIQUE Digital Indonesia">
    <meta name="google-site-verification" content="Xc9SFJQZdKYLsrWvrxEjLLTA-nyrnNPQTXQoMxs4gKI" />
    <meta property="og:title" content="リモートワーク管理ツールDokodemo-Kerjaの活用ストーリー１ | LOGIQUE Digital インドネシア">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dokodemo-Kerja">
    <meta property="og:url" content="https://dokodemo-kerja.com">
    <meta property="og:image" content="/img/dokodemo-og.jpg">
    <meta property="og:description"
        content="Dokodemo-Kerjaの活用事例その１として開発経緯をご紹介します。従業員の実勤務時間を記録、GPSで働いた場所をトラッキング、フレキシブルで生産性の高い働き方を可能とするリモートワーク管理ツールDokodemo-Kerja（ドコデモクルジャ）の紹介。">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/slick-theme.css" />
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/style-case-study.css" />
    <link rel="stylesheet" href="/js/magnific-popup.css" />

	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>リモートワーク管理ツールDokodemo-Kerjaの活用ストーリー１ | LOGIQUE Digital インドネシア</title>
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
<?php $page = 'case-study/case-1.php'; ?>
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
                    <li class="breadcrumb-item"><a href="/jpn/">Dokodemo-Kerja Home</a></li>
                    <li class="breadcrumb-item"><a href="/jpn/case-study/">Case Study</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Case 1</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <h1 class="text-center mb-5">「Dokodemo-Kerja」活用ストーリー1: <br>LOGIQUE</h1>
            <div class="case-study__story">
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="text-center" style="line-height: 1; height: calc(100% - 40px);">
                                    <img src="/img/case-study/dokodemo-story-1-1.jpg" alt="" class="story__img pb-1" style="object-position: right;">
                                    <small>私もDokodemo-Kerjaを利用しています。この記事を書いたときは日本の田舎町で仕事していました。</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>当社のリモートワーク管理＆勤務時間管理ツール『Dokodemo-Kerja（ドコデモ・クルジャ）』を導入・ご活用いただいているお客様の導入背景や活用方法、導入の効果などについて、ケーススタディー的にご紹介するこのコーナー。</p>
                                <p>第１回目の今回は、このツールを開発するにいたった、弊社LOGIQUEの開発ストーリーをご紹介します。</p>
                                <p class="mb-0">先にお話ししておくと、 もともと、『Dokodemo-Kerja（ドコデモ・クルジャ）』は、LOGIQUE社内の勤務時間管理ツールでした。ちなみに、「クルジャ」とはインドネシア語で「仕事」という意味です。このツールは、社員がいつでもどこでも、効率的に働けるようサポートしたい、組織の働き方を柔軟に変えていきたい、という目的で、“どこででも、自分スタイルで効率的に仕事しよう“＝「Dokodemo-Kerja（ドコデモ・クルジャ）」として開発しました。</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>多くの企業様が課題とされている、社員の働き方をいかに効率化し質を向上させていくかー。『Dokodemo-Kerja』が、その課題解決のための施策の一つとなることを願い、私たちの開発ストーリーをかいつまんでお話します。</p>
                            <p><b><u>私はずっと</u></b>、特に日系企業で顕著だった、今までの固定概念化された旧態依然の働き方に囚われたくないと思っていました。そういった働き方を社員にも押し付けたくない、と考え、2017年にはリモートワーク制度の導入を部分的に始動しました。</p>
                            <p>誰もが効率的な働き方を実現できた方が良い、と考えていると思っていたのですが、この段階では、開発チーム（特にリーダー達）には根強い反発もありました。現場で一緒に作業する、というチームワークとしての効率が低下する、と考える者もいましたし、リモートできやすい職種とそうでない業務がある、という点で不公平だ、といった声が主なものでした。</p>
                            <p>そこで、初期段階としては、誰もが納得しやすい理由があるスタッフからリモートワークを許可することにしました。たとえば、出産後復職したばかりの女性スタッフなどです。</p>
                            <p> 実際の運用を始めたものの、問題はやはり、「実際の働き方が可視化できない」ことでした。</p>
                            <p>組織としては、リモートワークという柔軟な働き方を適用している段階で、「彼女たちを優遇している」という思いがあるので、そのスタッフたちの結果が見えないと、特別な待遇を与えているのにその分のがんばりが見えないのは、どこか不公平だと感じてしまいがちでした。結果として、オフィスにいる社員たちから、「彼女たちは仕事に集中して働いてない」「もしかしてサボっているのでは？」と疑いが生じ、Slackなどのチャットツールで連絡したときに反応が遅い、オフラインになっている時間が長い、という事象があるだけで、文句が聞こえてくるようになりました。</p>
                            <p>ただ、リモートワークをしているスタッフから話を聞くと、解決に時間がかかる問題に取り組んでいただけで決して真面目に取り組んでいなかったわけではないと思える話があったり、本人としては、むしろチームのサポートが得にくくなっている状況の中で、今までと同様のスピード感を持って結果を出すために、より努力をしていると主張する者もいました。</p>
                            <p>このようなコミュニケーションの行き違いが発生してしまうと、どちらが正しいのか判断が難しくなります……（こういうことは、「どちらかが正しい」ということではないのかもしれません）。</p>
                            <p>いずれにしても、この段階で、リモートワーカーのリモートワーク中の働き方を可視化しないと、リモートワーカーにも会社やオフィスで働く他のスタッフにもメリットのあるものにならないことははっきりとしたのです。</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p><a href="https://www.logique.co.id/jp/product/nippo.php" target="_blank">そこで、まず『Nippo』という管理ツールを開発しました。</a>.</p>
                                <p>日報として、何の業務（どんなタスク）をどの程度行ったのか、時間を記録してもらい、チームメンバーに共有。協業したスタッフからも評価を受けるようにしました。</p>
                                <p>このツールの導入で状況は少しは改善しましたが、まだ問題がありました。</p>
                                <p>リモートワーカーの仕事が捗ったときは問題ないのですが、頑張って業務にあたったけれどうまく進捗を出せなかったときなどに、そのプロセスを正しく評価できないのです。本来3時間でできる想定の業務を8時間かかったという日報をみて、なぜうまくいかなかったのか、本人の集中力の問題なのか、やむをえない理由があるのかを、客観的に判断するのは、実は困難なケースが多いことに気づきました。</p>
                                <p class="mb-0">そこで、さらなる適正かつ納得性の高い業務の可視化を目的に、『Dokodemo-Kerja』を開発しました。これが、2017年11月のことでした。</p>
                            </div>
                            <div class="col-lg-6 pr-0 d-none d-lg-block">
                                <img src="/img/case-study/dokodemo-story-1-2.jpg" alt="" class="story__img" style="object-position: right;">
                            </div>
                        </div>
                        <div class="mt-3"> 
                            <p>これで、いつ、どのように働いたかが明確に可視化できるようになり、時間がかかっていた作業も、実は業務に集中していなかったわけではないことが分かるようになりました。リモートワーカーからすると、自分の業務を適正に評価されると同時に、「さばっていたのでは？」などという、証明が困難な疑いをかけられることもなくなり、より業務に集中できるようになりました。</p>
                            <p> この段階で、リモートワークをさらに拡充できる下地ができました。</p>
                            <p>ここから、2018年後半には、リモートワークを全スタッフに適用。職種や役職、業務レベルなどに応じて、週に1日から平日フルリモートまで、リモートワークできる組織になったのです。</p>
                            <p><b><u>このように、リモートワークが当たり前になっていく組織に移行するに従い、オフィスでの働き方も変えていきました。</u></b></p>
                            <p>リモートワーク時だけでなくオフィスで働くときも『Dokodemo-Kerja』を日常的に使用することで、朝から夕方まで決まった時間にオフィスにいる必要はなくなりました。チームで同じ場所で作業することが必須の業務は例外ですが、そうでない場合は、社員のライフスタイルに合わせ、個人が自分の勤務開始時間と帰宅時間を決めてもらうことにしました。（注１）</p>
                            <p>「週40時間勤務して結果を出す」ということだけが全スタッフ共通の要件で、後は、いつ、どこで働くか、時間や場所は重要視しないこととしたのです。</p>
                            <p>同時に、結果が出せなかった人や成果だけで評価することが難しいジュニアレベルの社員などに対しては、『Dokodemo-Kerja』で、彼らの取り組み方や頑張りを評価できます。反対に、結果も出ず取り組み方もネガティブな姿勢が見られる社員には、確かな根拠をもって厳しい処置をとれるようになったのです。</p>
                            <p>（注１）勤務時間の自由度があるとはいえ、ある程度の規定は必要です。個々人が業務時間を毎日自由に変える、といったような働き方では、チームワークの効率性を格段に低下させてしまいます。まずは、個人毎に勤務開始設定時刻を設定し、遅れてしまう場合は、Slackでそれを共有するようにしています。</p>
                            <p>このように『Dokodemo-Kerja』を運用する中で、9時に出社して勤務。ランチをメンバーと一緒にし、14時に一旦帰宅。家の用事を済ませた後に夜、家でまた仕事を再開する、のような働き方をする社員がでてきました。また、あるスタッフは、朝6時から8時まで家で集中して働き、10時に出社。16時まで昼食無しで勤務し帰宅する、というスタイルで働いています。</p>
                            <p>自宅がオフィスから遠く、通勤によって疲弊していたスタッフは、週3日を自宅でのリモートワークにし、出社日も、通勤前の早朝に集中すべき仕事を自宅で済ませてから出社することで、集中の仕方や時間のコントロールが格段に上手になり、生産性が見違えて向上しました。スタッフみんなの幸福度も向上。誰もがイキイキと働いているように見えます。</p>
                            <p>余談ですが、こうした変革の中で、「必要性が高いと思い込んでいたけれど、実はそれほどマストの業務ではなかった」、「Face to Faceのミーティングは必要なかった」といった多くのことが徐々に明らかになったことも、効果の一つとして挙げておきたいと思います。</p>
                            <p>出社と帰宅の時間以外にもオフィスでの行動にも大きな変化がありました。</p>
                            <p>勤務の終了時間が決まっていると、誰しもどうしてもその時間を基準にしてしまいがちです。時にはタスクがない日もあります。体調が悪いなどの理由から集中できない日もあるでしょう。それでも「17時まではオフィスにいなくてはならない」と考えると、休憩が長くなったり、時間ばかりみて過ごしてしまい、結果として「無駄な時間を過ごした」という結果だけが残ります。</p>
                            <p>お祈りや休憩時間が長い、喫煙などで頻繁にオフィスビルを出て戻ってこないなどの問題もインドネシアではよくある問題かと思いますが、『Dokodemo-Kerja』を使うと、スタッフ自身が自発的に改善していきます。休憩ばかりしていると、いつまで経っても週40時間働いたことにならず、結果として、今までいかに休憩ばかりしていたかに気付くのです。</p>
                            <p> 体調やプライベートで気にかかることがあって集中できない時も、HR(人事部)やマネジャーに相談することなく、自分で自分のワークスタイルを判断し実行できるようになったことは、スタッフ一人ひとりの大きなベネフィットになり、プロフェッショナルとしてプライドをもって働けるようになりました。</p>
                            <p>※HRのスタッフは増員しているので、働き方などで相談がある場合は今まで通り相談できる体制は整えています。</p>
                            <p>このように、スタッフにとっては個人の自由度が向上し、Work-Lifeバランスがとれた勤務体系でプロフェッショナルとして働けるようになり、組織にとっては、生産性が向上し、人事評価や採用にも好結果をもたらしたと、非常に大きな“Win-Win”を生む結果になりました。</p>
                            <p>この『Dokodemo-Kerja』による当社LOGIQUEでの成功体験を、インドネシアの多くの企業様にも共有し、組織の活性化を図っていただく一助となりたい、という思いで、2018年末には、製品として販売することにしました。</p>
                            <p>2020年現在も、多くの企業様のお声を参考に、『Dokodemo-Kerja』のさらなる改良を推進。企業と従業員双方にメリットを生み出す、より良いワークスタイルの実現をお手伝いできるよう、機能のさらなるブラッシュアップを図ってまいります。</p>
                            <p>次号以降では、『Dokodemo-Kerja』を導入いただいている企業様のストーリーをご紹介してまいります。</p>
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