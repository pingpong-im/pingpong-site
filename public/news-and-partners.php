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
<body class="news-and-partners">

<header class="mobile-header">
    <div class="row">
        <img src="./images/home/1_screen/logo_block1_animation.svg" width="215" alt="" title="">
        <div class="hamb js-hamb"><?php echo $lang['menu'] ?></div>
    </div>
    <div class="menu js-menu">
        <a href="/?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['home'] ?></a>
        <a href="./about.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['about_ico'] ?></a>
        <a class="active" href="./news-and-partners.html?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['news_partners'] ?></a>
        <a href="./faq.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['faq'] ?></a>
    </div>
</header>

<header class="mobile-header">
    <div class="container">
        <div class="hamb"></div>
    </div>
</header>

<section class="section section-4">
    <div class="container">
        <h3 class="pretext">
            Want to know more about PingPong platform? You can find lots of posts on the websites of our great info partners.
        </h3>

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

<section class="section section-6">
    <div class="container">
        <h2>Partners <img src="./images/home/partners/skull_block6.svg" alt="" title=""></h2>
        <div class="slider js-partners">
            <a href="https://hypethon.cryptofriends.io/" target="_blank"><img src="images/home/logo_1.png" alt="" title=""></a>
            <a href="https://bntouch.com/" target="_blank"><img src="images/home/logo_2.png" alt="" title=""></a>
            <a href="https://blockv.io/" target="_blank"><img src="images/home/logo_3.png" alt="" title=""></a>
            <a href="https://bits.media/" target="_blank"><img src="images/home/logo_4.png" alt="" title=""></a>
            <a href="https://forklog.com/" target="_blank"><img src="images/home/logo_5.png" alt="" title=""></a>


            <a href="https://hypethon.cryptofriends.io/" target="_blank"><img src="images/home/logo_1.png" alt="" title=""></a>
            <a href="https://bntouch.com/" target="_blank"><img src="images/home/logo_2.png" alt="" title=""></a>
            <a href="https://blockv.io/" target="_blank"><img src="images/home/logo_3.png" alt="" title=""></a>
            <a href="https://bits.media/" target="_blank"><img src="images/home/logo_4.png" alt="" title=""></a>
            <a href="https://forklog.com/" target="_blank"><img src="images/home/logo_5.png" alt="" title=""></a>
        </div>
    </div>
    <div class="bg bg-left">
        <img src="./images/home/1_screen/1_block1.svg" alt="" title="">
    </div>
    <div class="bg bg-right">
        <img src="./images/home/partners/bg1_block3.png" alt="" title="">
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


<script src="./js/jquery.min.js"></script>
<script src="./js/slick/slick.min.js"></script>
<script src="./js/app.js"></script>
</body>
</html>