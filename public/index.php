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
<body class="homepage">

	<header class="desktop-header">
		<div class="container">
			<nav>

				<a class="active" href="/?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['home'] ?></a>
				<a href="./about.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['about_ico'] ?></a>
				<a href="./faq.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['faq'] ?></a>

				<div id="locale" class="lang">
					<a <?php echo $active_btn_en; ?> href="<?php if($_GET['lang'] != 'eng') { ?>/?lang=eng<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ENG.svg"></a>
					<a <?php echo $active_btn_ru; ?> href="<?php if($_GET['lang'] != 'ru') { ?>/?lang=ru<?php } else { ?>#<?php } ?>"><img src="images/home/svg/RUS.svg"></a>
					<a <?php echo $active_btn_esp; ?> href="<?php if($_GET['lang'] != 'esp') { ?>/?lang=esp<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ESP.svg"></a>
				</div>

				<div class="wp-btn js-wp-open"></div>

				<div class="bg bg-1"><img src="./images/home/1_screen/14_block1.png" alt="" title=""></div>
			</nav>
		</div>
	</header>

	<header class="mobile-header">
		<div id="locale" class="lang">
			<a <?php echo $active_btn_en; ?> href="<?php if($_GET['lang'] != 'eng') { ?>/?lang=eng<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ENG.svg"></a>
			<a <?php echo $active_btn_ru; ?> href="<?php if($_GET['lang'] != 'ru') { ?>/?lang=ru<?php } else { ?>#<?php } ?>"><img src="images/home/svg/RUS.svg"></a>
			<a <?php echo $active_btn_esp; ?> href="<?php if($_GET['lang'] != 'esp') { ?>/?lang=esp<?php } else { ?>#<?php } ?>"><img src="images/home/svg/ESP.svg"></a>
		</div>

		<div class="row">
			<span></span>
			<div class="hamb js-hamb"><?php echo $lang['menu'] ?></div>
		</div>
		<div class="menu js-menu">
			<a class="active" href="/?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['home'] ?></a>
			<a href="./about.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['about_ico'] ?></a>
			<a href="./news-and-partners.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['news_partners'] ?></a>
			<a href="./faq.php?lang=<?php echo $_GET['lang'] ?>"><?php echo $lang['faq'] ?></a>
		</div>
	</header>

	<section class="section section-1">
		<div class="container text-center">
			<div class=" m-b-40">
				<img class="ping-pong-img" src="./images/home/1_screen/logo_block1_animation.svg" alt="Ping Pong" title="Ping Pong">
			</div>
			<h1><?php echo $lang['platform_header'] ?></h1>
			<form>
				<input type="email" class="form-input" placeholder="email">
				<button class="submit"><?php echo $lang['s1_submit_btn'] ?></button>
			</form>
			<div>
				<img src="./images/home/1_screen/4_block1.svg" alt="Ping Pong" title="Ping Pong" height="60">
			</div>
		</div>
		<div class="bg bg-1"><img src="./images/home/1_screen/1_block1.svg" alt="" title=""></div>
		<div class="bg bg-2"><img src="./images/home/1_screen/2_block1.png" alt="" title=""></div>
		<div class="bg bg-3"><img src="./images/home/1_screen/3_block1.png" alt="" title=""></div>
		<div class="bg bg-4"><img src="./images/home/1_screen/5_block1.png" alt="" title=""></div>
		<div class="bg bg-5"><img src="./images/home/1_screen/6_block1.png" alt="" title=""></div>
		<div class="bg bg-7"><img src="./images/home/1_screen/8_block1.png" alt="" title=""></div>
		<div class="bg bg-8"><img src="./images/home/1_screen/9_block1.svg" alt="" title=""></div>
		<div class="bg bg-9"><img src="./images/home/1_screen/10_block1.png" alt="" title=""></div>
		<div class="bg bg-10">
			<img class="dot" src="./images/home/1_screen/dote.svg" alt="" title="">
			<img src="./images/home/1_screen/circle_logo_not_dote.svg" alt="" title="">
		</div>
		<div class="bg bg-11"><img src="./images/home/1_screen/animation-left.svg" alt="" title=""></div>
		<div class="bg bg-12"><img src="./images/home/1_screen/animation-left1.svg" alt="" title=""></div>
		<div class="bg bg-13"><img src="./images/home/1_screen/animation-right.svg" alt="" title=""></div>

	</section>
	<section class="section section-2">
		<div class="container">
			<h2><?php echo $lang['what_is'] ?> <img src="./images/home/what_ping_pong/smile_block2.svg" alt="" title=""></h2>
			<div class="row">
				<div class="m-r-30">
					<img class="notebook" src="./images/home/what_ping_pong/computer1.svg" alt="What is PingPong?" title="What is PingPong?">
				</div>
				<div>
					<p class="colorful-text">
						<?php echo $lang['pingpong_platform_description_1'] ?>
					</p>
					<p class="colorful-text">
						<?php echo $lang['pingpong_platform_description_2'] ?>
					</p>
					<ul class="colorful-list m-t-15">
						<li><?php echo $lang['pingpong_platform_advantage_1'] ?></li>
						<li><?php echo $lang['pingpong_platform_advantage_2'] ?></li>
						<li><?php echo $lang['pingpong_platform_advantage_3'] ?></li>
						<li><?php echo $lang['pingpong_platform_advantage_4'] ?></li>
					</ul>

				</div>
			</div>
		</div>

		<div class="bg bg-left">
			<img src="./images/home/what_ping_pong/1_block2.png" alt="" title="">
		</div>
		<div class="bg bg-right">
			<img src="./images/home/what_ping_pong/bg1_block2.svg" alt="" title="">
		</div>
	</section>
	<section class="section section-3">
		<div class="container">
			<h2><?php echo $lang['features_header'] ?> <img src="./images/home/features/battary_block3.png" width="50" alt="" title=""></h2>
			<div class="row colorful-text js-features">
				<div class="width-360">
					<div class="height-150">
						<img class="qr-code" src="./images/home/features/img1_block3.png" width="165">
					</div>
					<h3>
						<mark class="bg-black white"><?php echo $lang['token_creation_platform_header'] ?></mark>
					</h3>
					<p>
						<?php echo $lang['token_creation_platform_description'] ?>
					</p>
				</div>
				<div class="width-380 white-bg-text">
					<div class="height-150">
						<img src="./images/home/features/766.svg" width="360">
					</div>
					<h3>
						<mark class="bg-blue white"><?php echo $lang['group_conversation_header'] ?></mark>
					</h3>
					<p>
						<?php echo $lang['group_conversation_description'] ?>
					</p>
				</div>
				<div class="width-300">
					<div class="height-150">
						<img src="./images/home/features/img3_block3.png" width="300">
					</div>
					<h3 class="m-t-25">
						<mark class="bg-black yellow"><?php echo $lang['card_header'] ?></mark>
					</h3>
					<p>
						<?php echo $lang['card_description'] ?>
					</p>
				</div>
				<div class="white-bg-text width-300">
					<div class="height-150">
						<img src="./images/home/features/img4_block3.png" width="290">
					</div>
					<h3>
						<mark class="bg-red green"><?php echo $lang['library_header'] ?></mark>
					</h3>
					<p>
						<?php echo $lang['library_description'] ?>
					</p>
				</div>
				<div class="width-250">
					<div class="height-150 p-t-30">
						<img class="anim" src="./images/home/features/img5_block3.svg">
					</div>
					<h3>
						<mark><?php echo $lang['payment_header'] ?></mark>
					</h3>
					<p>
						<?php echo $lang['payment_description'] ?>
					</p>
				</div>
				<div class="width-250">
					<div class="height-150 p-t-30">
						<img src="./images/home/features/img6_block3.png" width="190">
					</div>
					<h3>
						<mark class="bg-red yellow"><?php echo $lang['security_header'] ?></mark>
					</h3>
					<p>
						<?php echo $lang['security_description'] ?>
					</p>
				</div>
				<div class="width-300">
					<div class="height-150 p-t-30">
						<img src="./images/home/features/img7_block3.png" width="90">
					</div>
					<h3>
						<mark class="bg-red light-blue"><?php echo $lang['openapi_header'] ?></mark>
					</h3>
					<p>
						<?php echo $lang['openapi_description'] ?>
					</p>
				</div>
			</div>
		</div>

		<div class="bg bg-right">
			<img src="./images/home/features/bg-features.svg" alt="" title="">
		</div>
	</section>
	<section class="section section-6">
		<div class="container">
			<h2><?php echo $lang['partners_header'] ?> <img src="./images/home/partners/skull_block6.svg" alt="" title=""></h2>
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
	<section class="section section-video">
		<div class="container">
			<h2><?php echo $lang['pingpong_video_header'] ?> <img src="./images/home/video/photo_block5.svg" alt="" title=""></h2>
			<div class="row display-block">
				<div class="video">
					<iframe id="player" width="624px" height="394px" src="https://www.youtube.com/embed/6ta6b5oGhZA?rel=0&wmode=Opaque&enablejsapi=1" frameborder="0"></iframe>
					<img src="images/video.png" alt="" title="" class="video-placeholder">
					<div class="video__btn">
						<img src="./images/home/video/play_block5.svg" alt="" title="">
					</div>
				</div>
				<div class="video-bg">
					<img src="./images/home/video/bg_1.png" alt="" title="">
				</div>
			</div>
		</div>
	</section>
	<section class="section section-7">
		<div class="container">
			<h2><?php echo $lang['team_header'] ?> <img src="./images/home/team/team_1_block7.svg" alt="" title=""></h2>
			<div class="slider team js-team">
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/rus-inozemtsev.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Ruslan <span>Inozemtsev</span></p><br>
					<p class="member__profession">Founder & CEO</p>
				</div>
				<div class="member female">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/tanya-inozemtseva.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Tatyana <span>Inozemtseva</span></p><br>
					<p class="member__profession">Operations Manager</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/Ilia-esterov.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Ilia <span>Esterov</span></p><br>
					<p class="member__profession">PR Director</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/mikhail-naletov.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Mikhail <span>Naletov</span></p><br>
					<p class="member__profession">Marketing Director</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/oleg-safanov.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Oleg <span>Safonov</span></p><br>
					<p class="member__profession">Lead Front-end Developer</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/vladimir-shushkov.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Vladimir <span>Shushkov</span></p><br>
					<p class="member__profession">Lead Back-end Developer</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/alexander-ashihmin.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Alexander <span>Ashihmin</span></p><br>
					<p class="member__profession">Front-end Developer</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/dmitriy-gogolev.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Dmitry <span>Gogolev</span></p><br>
					<p class="member__profession">Smart Contract Guru</p>
				</div>
				<div class="member female">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/anna-grigorieva.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Anna <span>Grigoryeva</span></p><br>
					<p class="member__profession">Project Manager</p>
				</div>
				<div class="member female">
					<div class="member__photo m-b-20">
						<img src="./images/home/team/yulia-drobnitsa.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Yulia <span>Drobnitsa</span></p><br>
					<p class="member__profession">UX/UI Designer</p>
				</div>
			</div>
		</div>

		<div class="bg bg-left">
			<img src="./images/home/team/bg-team-left.png" alt="" title="">
		</div>
		<div class="bg bg-right">
			<img src="./images/home/team/bg_2.svg" alt="" title="">
		</div>

	</section>
	<section class="section section-7">
		<div class="container">
			<h2>Advisers <img src="./images/home/advisers/advisers.svg" alt="" title=""></h2>
			<div class="slider advisers js-advisers">
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/advisers/Gary-Vinokur.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Gary <span>Vinokur</span></p><br>
					<p class="member__profession">Director, EM Financing at ICBC Standard Bank Plc</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/advisers/Bertrand-Gachot.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Bertrand <span>Gachot</span></p><br>
					<p class="member__profession">(CEO) Hype Energy Drinks, Former racing driver
					</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/advisers/Sven-Hartmann.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Sven <span>Hartmann</span></p><br>
					<p class="member__profession">Troubleshooter at hARTmann Service</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/advisers/eric_benz.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Eric <span>Benz</span></p><br>
					<p class="member__profession">Managing Director at Cryptopay</p>
				</div>
				<div class="member">
					<div class="member__photo m-b-20">
						<img src="./images/home/advisers/yuriy-polukeev.png" alt="" title="">
					</div>
					<p class="member__name m-b-10">Yuriy <span>Polukeev</span></p><br>
					<p class="member__profession"></p>
				</div>
			</div>
		</div>

	</section>
	<section class="section section-8">
		<div class="container">
			<div class="row">
				<div id="yes">
					<img class="show" src="./images/home/game_over/yes_block8.svg" alt="" title="">
					<img class="hide" src="./images/home/game_over/yes_block8_red.svg" alt="" title="">
				</div>
				<div id="no">
					<img class="show" src="./images/home/game_over/no_block8.svg" alt="" title="">
					<img class="hide" src="./images/home/game_over/no_block8_blue.svg" alt="" title="">
				</div>
				<img class="go" src="./images/home/game_over/game-over_block8.png" width="500" alt="" title="">
				<img class="slot" src="./images/home/game_over/yellow_block8.png" alt="" title="">
			</div>
		</div>

		<div class="bg bg-left">
			<img src="./images/home/game_over/bg_1_block8.png" alt="" title="">
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

	<div id="man" class="man">
		<div class="man__body js-click">
			<img src="./images/home/man/man.svg" alt="" title="">
		</div>
		<div class="man__click js-click">
			<img src="./images/home/man/clickonme_1@3x.png" width="226" alt="" title="">
		</div>
		<div class="man__phrases js-phrases">
			<div class="m-b-20 js-buy">
				<img src="./images/home/man/buytokens@3x.png" width="157" alt="" title="">
			</div>
			<a href="./about.html#presale">
				<img src="./images/home/man/presale@3x.png" width="157" alt="" title="">
			</a>
		</div>
		<form class="man__form js-form text-center">
			<div class="close js-buy"><img src="./images/home/man/close.svg" alt="" title=""></div>
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

	<div class="modal w__400" id="newsletter">
		<div class="close js-close-modal"><img src="images/close-red.png" alt="" title=""></div>
		<div class="modal-content">
			<form>
				<input type="email" class="form-input" placeholder="email"><br>
				<button class="submit">Stay with me</button>
			</form>
		</div>
	</div>

	<div class="modal w__400" id="download">
		<div class="close js-close-modal"><img src="images/close-red.png" alt="" title=""></div>
		<div class="modal-content">
			<img src="images/home/svg/wp_download_1.svg" class="m-b-30" alt="" title="">

			<a class="download-link rus" href="./downloads/wp_rus.txt" download tabindex="0">скачать русский whitepaper</a>
			<br>
			<a class="download-link eng" href="./downloads/wp_eng.txt" download tabindex="0">download english whitepaper</a>
			<br>
			<a class="download-link esp" href="./downloads/wp_esp.txt" download tabindex="0">descargar español whitepaper</a>

		</div>
	</div>

	<div class="modal-overlay"></div>

	<script src="./js/jquery.min.js"></script>
	<script src="./js/slick/slick.min.js"></script>
	<script src="./js/app.js"></script>
</body>
</html>