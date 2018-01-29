<?php  
if(isset($_GET['lang'])) {
    if($_GET['lang'] == "eng") {
        include('languages/english.php'); 
        $active_btn_en = 'class="active"';
        $active_btn_ru = '';
        $active_btn_esp = '';
    } else if($_GET['lang'] == "esp") {
        include('languages/spanish.php'); 
        $active_btn_esp = 'class="active"';
        $active_btn_en = '';
        $active_btn_ru = '';
    } else if($_GET['lang'] == "ru") {
        include('languages/russian.php'); 
        $active_btn_ru = 'class="active"';
        $active_btn_en = '';
        $active_btn_esp = '';
    }
} else {
    $_GET['lang'] = "eng";
    include('languages/english.php'); 
    $active_btn_en = 'class="active"';
    $active_btn_ru = '';
    $active_btn_esp = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113098542-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113098542-1');
  </script>

  <meta charset="UTF-8">
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-precomposed.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">

  <link rel="stylesheet" href="./js/slick/slick.css">
  <link rel="stylesheet" href="./js/slick/slick-theme.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body>

    <header class="desktop-header">
        <div class="container">
            <nav>
                <a href="/?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['home'] ?></a>
                <a class="active" href="./about.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['about_ico'] ?></a>
                <a href="./faq.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['faq'] ?></a>

                <div id="locale" class="lang">
                    <a <?php echo $active_btn_en; ?> href="<?php if($_GET['lang'] != 'eng') { ?>./about.php?lang=eng<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ENG.svg"></a>
                    <a <?php echo $active_btn_ru; ?> href="<?php if($_GET['lang'] != 'ru') { ?>./about.php?lang=ru<?php } else { ?>#<?php } ?>"><img src="images/home/svg/RUS.svg"></a>
                    <a <?php echo $active_btn_esp; ?> href="<?php if($_GET['lang'] != 'esp') { ?>./about.php?lang=esp<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ESP.svg"></a>
                </div>

                <div class="wp-btn js-wp-open"></div>
            </nav>
        </div>
    </header>

    <header class="mobile-header">
        <div id="locale" class="lang">
            <a <?php echo $active_btn_en; ?> href="<?php if($_GET['lang'] != 'eng') { ?>./about.php?lang=eng<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ENG.svg"></a>
            <a <?php echo $active_btn_ru; ?> href="<?php if($_GET['lang'] != 'ru') { ?>./about.php?lang=ru<?php } else { ?>#<?php } ?>"><img src="images/home/svg/RUS.svg"></a>
            <a <?php echo $active_btn_esp; ?> href="<?php if($_GET['lang'] != 'esp') { ?>./about.php?lang=esp<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ESP.svg"></a>
        </div>

        <div class="row">
            <img src="./images/home/1_screen/logo_block1_animation.svg" width="215" alt="" title="">
            <div class="hamb js-hamb"><?php echo $lang['menu'] ?></div>
        </div>
        <div class="menu js-menu">
            <a href="/?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['home'] ?></a>
            <a class="active" href="./about.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['about_ico'] ?></a>
            <a href="./news-and-partners.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['news_partners'] ?></a>
            <a href="./faq.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['faq'] ?></a>
        </div>
    </header>

    <div class="section about-1">
        <div class="container colorful-text">
            <div class="arrows-anim m-b-40">
                <img class="m-r-30" src="./images/about_ico/why_we_do_ico/arrows.svg" alt="" title="">
                <img class="m-r-30" src="./images/about_ico/why_we_do_ico/arrows.svg" alt="" title="">
                <img class="m-r-30" src="./images/about_ico/why_we_do_ico/arrows.svg" alt="" title="">
                <img class="m-r-30" src="./images/about_ico/why_we_do_ico/arrows.svg" alt="" title="">
                <img src="./images/about_ico/why_we_do_ico/arrows.svg" alt="" title="">
            </div>
            <div class="table">
                <div class="tr">
                    <div class="td title">
                        <span class="extrabold blue"><?php echo $lang['what_is_pingpong_token'] ?></span>
                    </div>
                    <div class="td">
                        <?php echo $lang['what_is_pingpong_token_description'] ?>
                    </div>
                </div>
                <div class="tr">
                    <div class="td title">
                        <span class="extrabold"><?php $lang['payout_structure'] ?></span>
                    </div>
                    <div class="td">
                        <?php echo $lang['payout_structure_description'] ?>
                    </div>
                </div>
                <div class="tr">
                    <div class="td title">
                        <span class="extrabold blue"><?php echo $lang['symbol'] ?></span>
                    </div>
                    <div class="td">
                        <?php echo $lang['symbol_description'] ?>
                    </div>
                </div>
                <div class="tr">
                    <div class="td title">
                        <span class="extrabold"><?php echo $lang['total_supply'] ?></span>
                    </div>
                    <div class="td">
                        <?php echo $lang['total_supply_description'] ?>
                    </div>
                </div>
                <div class="tr">
                    <div class="td title">
                        <span class="extrabold blue"><?php echo $lang['adjustable'] ?></span>
                    </div>
                    <div class="td">
                        <?php echo $lang['adjustable_description'] ?>
                    </div>
                </div>
                <div class="tr">
                    <div class="td title">
                        <span class="extrabold"><?php echo $lang['rate'] ?></span>
                    </div>
                    <div class="td">
                        <?php echo $lang['rate_description'] ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg bg-right">
            <img src="./images/about_ico/why_we_do_ico/bg1_block1.png" alt="" title="">
        </div>
        <div class="bg bg-left">
            <img src="./images/about_ico/why_we_do_ico/about_ico.png" alt="" title="">
        </div>
    </div>

    <div id="presale" class="section about-2">
        <div class="container colorful-text">
            <h2><?php echo $lang['pros_of_presale'] ?> <img src="./images/about_ico/pros_of_pres/presale_1.svg" alt="" title=""></h2>
            <p class="f-s-22 m-b-25"><?php echo $lang['pros_of_presale_header'] ?></p>
            <ul class="pros-list">
                <li>
                    <?php echo $lang['pros_of_presale_description_1'] ?>
                </li>
                <li>
                   <?php echo $lang['pros_of_presale_description_2'] ?>
                   <img src="./images/about_ico/pros_of_pres/feauteres_block2.svg" alt="" title="">
               </li>
               <li>
                <?php echo $lang['pros_of_presale_description_3'] ?> <span class="bold">84 BTC</span>
                <img src="./images/about_ico/pros_of_pres/punkt4_arrow_block2.svg" alt="" title="">
                <span class="bold">1 080 ETH (60 000 PPRT)</span>
            </li>
            <li>
                <?php echo $lang['pros_of_presale_description_4'] ?>
                <br>
                <span class="bold">0,0028 BTC</span>
                <img src="./images/about_ico/pros_of_pres/punkt4_arrow_block2.svg" alt="" title="">
                <span class="bold">0,036 ETH (ordinary price)</span>
                <img src="./images/about_ico/pros_of_pres/money_block2.svg" alt="" title="">
                <?php echo $lang['pros_of_presale_description_5_end'] ?>
            </li>
        </ul>

        <div class="btn-buy js-buy-modal"><img src="./images/about_ico/pros_of_pres/pp_about ico_mobile.svg" alt="" title=""></div>
    </div>

    <div class="bg bg-right">
        <img src="./images/about_ico/pros_of_pres/bg1_block2.png" alt="" title="">
    </div>
</div>

<section class="section section-5">
    <div class="container">
        <h2>currency converter <img src="./images/about_ico/currency/money_block5.svg" alt="" title=""></h2>
        <div class="row converter colorful-text">
            <div class="m-b-25">
                <p class="converter-title m-b-25">
                    <span class="curr-title extrabold m-r-60">Your transfer:</span>

                    <span class="currency active" data-currency="bit">Bitcoin (BTC)</span>
                    <span class="currency" data-currency="eth">Ethereum (ETH)</span>
                </p>
                <input id="currency" class="form-input">
            </div>
            <div class="m-b-25">
                <p class="m-b-25">
                    <span class="extrabold">You get tokens</span>
                </p>
                <input id="tokens" class="form-input">
            </div>
            <div class="transfer colorful-text m-t-35">
                <p class="m-b-30">Transfer <span class="extrabold italic blue">BTC</span> to the address to receive tokens:</p>
                <p class="m-b-30"><span class="red">32RBceZCWtSevMabVeVwqE4WteJyFNM3AD</span></p>
                <p class="copy-link"><ins class="cond-normal">Copy link</ins></p>
            </div>
        </div>
    </div>

    <div class="bg bg-right">
        <img src="./images/about_ico/currency/bg1_block5.svg" alt="" title="">
    </div>
</section>

<div class="section about-3">
    <div class="container">
        <h2>Token allocation <img src="./images/about_ico/token_allocation/cup_block3.svg" alt="" title=""></h2>
        <div class="row chart">
            <img src="./images/about_ico/token_allocation/graphic_1_block3.svg" alt="" title="">
            <div class="legends colorful-text">
                <div class="row">
                    <div class="m-r-45">
                        <img src="./images/about_ico/token_allocation/arrow1_block3.svg"> R&D (including team expanding, advisers)
                    </div>
                    <span class="bold blue">39%</span>
                </div>
                <div class="row">
                    <div class="m-r-45">
                        <img src="./images/about_ico/token_allocation/arrow2_block3.svg"> Indirect (legal, office)
                    </div>
                    <span class="bold pink">33%</span>
                </div>
                <div class="row">
                    <div class="m-r-45">
                        <img src="./images/about_ico/token_allocation/arrow3_block3.svg"> Marketing (promotion, community & expansion
                    </div>
                    <span class="bold green">26%</span>
                </div>
                <div class="row">
                    <div class="m-r-45">
                        <img src="./images/about_ico/token_allocation/arrow4_block3.svg"> ICO-Hypethon conditions
                    </div>
                    <span class="bold red">2%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg bg-1">
        <img src="./images/about_ico/token_allocation/bg_2.png" alt="" title="">
    </div>
    <div class="bg bg-2">
        <img src="./images/about_ico/token_allocation/bg_1.png" alt="" title="">
    </div>
</div>

<div class="section about-4">
    <div class="container">
        <h2>ROADMAP <img src="./images/about_ico/road_map/car.png" alt="" title=""></h2>
        <div class="roadmap">
            <div class="roadmap__step">
                <div class="roadmap__step__month">December 2016</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70"  alt="" title="">
                <div class="line"></div>
                <div>Attraction<br>of first investments</div>
            </div>
            <div class="roadmap__step">
                <div class="roadmap__step__month">June 2017</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70"  alt="" title="">
                <div class="line"></div>
                <div>MVP release,<br>ICO preparations</div>
            </div>
            <div class="roadmap__step">
                <div class="roadmap__step__month">November 2017</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70"  alt="" title="">
                <div class="line"></div>
                <div>PRE-ICO</div>
            </div>
            <div class="roadmap__step">
                <div class="roadmap__step__month">December 2017</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70"  alt="" title="">
                <div class="line"></div>
                <div>Marketing & Release<br>of alpha version</div>
            </div>
            <div class="roadmap__step">
                <div class="roadmap__step__month">January 2018</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70"  alt="" title="">
                <div class="line"></div>
                <div>ICO</div>
            </div>
            <div class="roadmap__step">
                <div class="roadmap__step__month">February 2018</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70"  alt="" title="">
                <div class="line"></div>
                <div>Product development<br>& Marketing</div>
            </div>
            <div class="roadmap__step">
                <div class="roadmap__step__month">February 2018</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70"  alt="" title="">
                <div class="line"></div>
                <div>Release<br>of beta version</div>
            </div>
            <div class="roadmap__step">
                <div class="roadmap__step__month">March 2018</div>
                <img class="anim" src="./images/about_ico/road_map/btc_block4.svg" alt="" title="">
                <img src="./images/about_ico/road_map/ostrov_block4.png" width="70" alt="" title="">
                <div class="line"></div>
                <div>RTM<br>& General Availability</div>
            </div>
        </div>
    </div>
</div>

<section class="section section-4">
    <div class="container">
        <h2>NEWS <img src="./images/about_ico/news/tv_block4.svg" alt="" title=""></h2>
        <div class="row">
            <div class="news blue">
                <div class="news__title">
                    RUSSIANS & SPANIARDS,WELCOME!
                    <div class="news__date">27/09/2017</div>
                </div>
                <div class="news__content">
                    <p>
                        White-paper is being translated into other languages. For now you can enjoy this document in Russian and Spanish.
                    </p>
                    <div class="news__content--full js-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit interdum metus nec rhoncus.
                            In sed tincidunt neque. Proin pulvinar lacus quis erat fermentum, fringilla pharetra erat efficitur.
                            In hac habitasse platea dictumst. Sed vitae dolor eu orci sollicitudin interdum vel viverra lorem.
                            Curabitur eleifend vestibulum laoreet. Cras ut libero diam.
                        </p>
                    </div>
                    <p class="js-accordion"><img src="./images/about_ico/news/arrowdouble_block4.svg" alt="" title=""></p>
                </div>

                <div class="line line-one"></div>
                <div class="line line-two"></div>
                <div class="line line-three"></div>
            </div>
            <div class="news pink">
                <div class="news__title">
                    SHAKE-UP
                    <div class="news__date">27/09/2017</div>
                </div>
                <div class="news__content">
                    <p>
                        Some weeks after Hypothone. The team is still coming to life. Inspired to brilliant ideas of project development and weekend activities.
                    </p>
                    <div class="news__content--full js-accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit interdum metus nec rhoncus.
                            In sed tincidunt neque. Proin pulvinar lacus quis erat fermentum, fringilla pharetra erat efficitur.
                            In hac habitasse platea dictumst. Sed vitae dolor eu orci sollicitudin interdum vel viverra lorem.
                            Curabitur eleifend vestibulum laoreet. Cras ut libero diam.
                        </p>
                    </div>
                    <p class="js-accordion"><img src="./images/about_ico/news/arrowdouble_block4.svg" alt="" title=""></p>
                </div>

                <div class="line line-one"></div>
                <div class="line line-two"></div>
                <div class="line line-three"></div>
            </div>
        </div>
    </div>

    <div class="bg bg-1">
        <img src="./images/about_ico/news/eyes_block4.png" alt="" title="">
    </div>
</section>

<footer>
    <div class="container">
        <div class="text-center">
            <div class="m-b-25">
                <a class="m-r-25" href="https://www.facebook.com/PingPong-1726369140769468/?ref=bookmarks" target="_blank">
                    <img src="./images/home/footer/fb_footer.svg" alt="Facebook" title="">
                </a>
                <a class="m-r-25" href="https://medium.com/@pingpong.rocks" target="_blank">
                    <img src="./images/home/footer/m_green_footer.svg" alt="Medium" title="">
                </a>
                <a href="https://twitter.com/pingpongtwitt" target="_blank">
                    <img src="./images/home/footer/tw.svg" alt="Twitter" title="">
                </a>
            </div>
            <p class="p-b-10">Hi@pingpong.rocks</p>
            <p class="p-b-30">Copyright © 2017 PINGPONG SOFTWARE INC</p>
        </div>
    </div>
</footer>

<div class="modal" id="buy-tokens">
    <div class="close js-close-modal"><img src="images/close-red.png" alt="" title=""></div>
    <div class="modal-content">
        <form class="man__form text-center">
            <p class="colorful-text">
                There are our ETH and BTC wallets, where we accept your payments,
                as soon as they are received, our community manager sends direct
                ratio of tokens <span class="blue italic bold">to your ETH wallet</span>, please pay attention,
                it is important to leave your <span class="pink">ETH wallet, e-mail and transaction code.</span>
            </p>
            <div class="row colorful-text m-t-30 m-b-30">
                <div class="col-2">
                    <span class="bold italic">ETH</span>
                    <input class="man__form__code" value="0x008d0ba06402bab6bd209b1fade106e99a1982eb">
                </div>
                <div class="col-2">
                    <span class="bold italic red">BTC</span>
                    <input class="man__form__code" value="32RBceZCWtSevMabVeVwqE4WteJyFNM3AD">
                </div>
            </div>
            <input class="man__form__input" placeholder="transaction code">
            <input class="man__form__input" placeholder="email" type="email">
            <button>Send</button>
        </form>
    </div>
</div>

<div class="modal w__400" id="download">
    <div class="close js-close-modal"><img src="images/close-red.png" alt="" title=""></div>
    <div class="modal-content">
        <img src="images/home/svg/wp_download_1.svg" class="m-b-30" alt="" title="">

        <a class="download-link rus" href="./downloads/Whitepaper_PP_rus.pdf" download tabindex="0">скачать русский whitepaper</a>
        <br>
        <a class="download-link eng" href="./downloads/Whitepaper_PP_eng.pdf" download tabindex="0">download english whitepaper</a>
        <br>
        <a class="download-link esp" href="./downloads/Whitepaper_PP_esp.pdf" download tabindex="0">descargar español whitepaper</a>

    </div>
</div>

<div class="modal-overlay"></div>

<script src="./js/jquery.min.js"></script>
<script src="./js/slick/slick.min.js"></script>
<script src="./js/app.js"></script>
</body>
</html>