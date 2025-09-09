<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php wp_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/bootstrap/bootstrap-grid.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/fontawesome-free-5.12.0-web/css/all.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/fancybox-master/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/slick-1.5.9/slick/slick.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/slick-1.5.9/slick/slick-theme.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css?ver=1.10" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media.css?ver=1.10" />
	<?php wp_head(); ?>
</head>

<body>

	<div class="wrapper"> 

		<header class="header default"> 
			<div class="container">
				<div class="header__wrapper">
					<a href="/" class="logo">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="alt">
					</a>
					<div class="header__content">
						<ul class="menu menu-navigation">
							<li><a href="#sect-1">О компании</a></li>
							<li><a href="#sect-2">Услуги</a></li>
							<li><a href="#sect-3">Проекты</a></li>
							<li><a href="#sect-4">Технологии</a></li>
							<li><a href="#sect-5">Документы</a></li>
							<li><span>Карьера</span></li>
						</ul>
						<div class="open-search"></div>
						<div class="header-search">
							<form>
								<div class="header-search__wrap">
									<input type="text" placeholder="Введите текст" required="required">
									<div class="close-search"><i class="fal fa-times"></i></div>
									<button class="btn-main"><img src="<?php bloginfo('template_directory'); ?>/img/search.svg" alt="alt">ПОИСК</button>
								</div>
							</form>
						</div>
						<a href="#sect-6" class="btn-main link-scroll">контакты</a>
					</div>
					<span class='sandwich'>
						<span class='sw-topper'></span>
						<span class='sw-bottom'></span>
						<span class='sw-footer'></span>
					</span>
				</div>
			</div>
			<div class="menu-mobile">
				<ul class="menu menu-navigation">
					<li><a href="#sect-1">О компании</a></li>
					<li><a href="#sect-2">Услуги</a></li>
					<li><a href="#sect-3">Проекты</a></li>
					<li><a href="#sect-4">Технологии</a></li>
					<li><a href="#sect-5">Документы</a></li>
					<li><span>Карьера</span></li>
					<li><a href="#sect-6">контакты</a></li>
					<!-- <li><a href="#" class="open-search-mob">поиск</a></li> -->
				</ul>
				<div class="menu-mobile__copyright">SIRIUS-SYSTEMS.RU ©<?php echo date('Y'); ?></div>
			</div>
			<div class="menu-overlay"></div>
		</header>
