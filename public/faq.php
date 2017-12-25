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
<body>

    <header class="desktop-header">
        <div class="container">
            <nav>
                <a href="/?lang=<?php echo $_GET['lang'] ?>">Home</a>
                <a href="./about.php?lang=<?php echo $_GET['lang'] ?>">About Ico</a>
                <a class="active" href="./faq.php?lang=<?php echo $_GET['lang'] ?>">FAQ</a>

                <div id="locale" class="lang">
                    <a <?php echo $active_btn_en; ?> href="<?php if($_GET['lang'] != 'eng') { ?>./faq.php?lang=eng<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ENG.svg"></a>
                    <a <?php echo $active_btn_ru; ?> href="<?php if($_GET['lang'] != 'ru') { ?>./faq.php?lang=ru<?php } else { ?>#<?php } ?>"><img src="images/home/svg/RUS.svg"></a>
                    <a <?php echo $active_btn_esp; ?> href="<?php if($_GET['lang'] != 'esp') { ?>./faq.php?lang=esp<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ESP.svg"></a>
                </div>

                <div class="wp-btn js-wp-open"></div>
            </nav>
        </div>
    </header>

    <header class="mobile-header">
        <div class="row">
            <img src="./images/home/1_screen/logo_block1_animation.svg" width="215" alt="" title="">
            <div class="hamb js-hamb">Menu</div>
        </div>
        <div class="menu js-menu">
            <a href="/">Home</a>
            <a href="./about.html">About Ico</a>
            <a href="./news-and-partners.html">News & Partners</a>
            <a class="active" href="./faq.html">FAQ</a>
        </div>
    </header>

    <div class="section faq colorful-text">
        <div class="container">
            <h2>FAQ <img src="images/faq/rupor.png" width="50" alt="" title=""></h2>

            <h3><?php echo $lang['faq1_header'] ?></h3>
            <p>
                <?php echo $lang['faq1_description'] ?>
            </p>

            <h3 class="red"><?php echo $lang['faq2_header'] ?></h3>
            <p>
                <?php echo $lang['faq2_description'] ?>
            </p>

            <h3 class="blue"><?php echo $lang['faq3_header'] ?></h3>
            <p>
                <?php echo $lang['faq3_description'] ?>
            </p>

            <h3><?php echo $lang['faq4_header'] ?></h3>
            <p>
                <?php echo $lang['faq4_description'] ?>
            </p>

            <h3 class="light-blue"><?php echo $lang['faq5_header'] ?></h3>
            <p>
                <?php echo $lang['faq5_description'] ?>
            </p>

            <h3 class="blue"><?php echo $lang['faq6_header'] ?></h3>
            <p>
               <?php echo $lang['faq6_description'] ?>
            </p>

            <h3><?php echo $lang['faq7_header'] ?></h3>
            <p>
                <?php echo $lang['faq7_description'] ?>
            </p>

            <h3 class="red"><?php echo $lang['faq8_header'] ?></h3>
            <p>
                <?php echo $lang['faq8_description'] ?>
            </p>

            <h3 class="pink"><?php echo $lang['faq9_header'] ?></h3>
            <p>
                <?php echo $lang['faq9_description'] ?>
            </p>

            <h3><?php echo $lang['faq10_header'] ?></h3>
            <p>
                <?php echo $lang['faq10_description'] ?>
            </p>

            <h3 class="light-blue"><?php echo $lang['faq11_header'] ?></h3>
            <p>
                <?php echo $lang['faq11_description'] ?>
            </p>

        </div>

        <div class="bg bg-left">
            <img src="./images/faq/bg_3.svg" alt="" title="">
        </div>

        <div class="bg bg-right">
            <img src="./images/faq/bg_2.svg" alt="" title="">
        </div>


        <div class="bg bg-1">
            <img src="./images/faq/bg_4.svg" alt="" title="">
        </div>
        <div class="bg bg-2">
            <img src="./images/faq/finger_bg.svg" alt="" title="">
        </div>
    </div>

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