<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lubus
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo("name"); ?></title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/bootstrap-grid-3.3.1.min.css" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic|Roboto+Slab:400,700|PT+Sans:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/icomoon.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/owl.carousel.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/media.css" />
	<!-- Facebook Open Graph (begin) -->
	<meta property="og:url" content="<?php bloginfo('url'); ?>/" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php bloginfo("name"); ?>" />
	<meta property="og:description" content="<?php the_field('social-share-descr'); ?>" />
	<meta property="og:image" content="<?php bloginfo("template_directory"); ?>/img/share.jpg" />
	<meta property="fb:app_id" content="<?php the_field('social-share-fbappid'); ?>" />
	<!-- Facebook Open Graph (end) -->
</head>
<body class="fixed_menu_fix">
	<header class="header fixed_menu">
		<div class="container clearfix">
			<div class="logo"><?php the_field('logo'); ?></div>
			<div class="btn-nav-toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			<ul class="nav">
				<li class="nav-item"><a class="nav-item-lnk" href="#forwho"><?php the_field('nav1'); ?></a></li>
				<li class="nav-item"><a class="nav-item-lnk" href="#lectors"><?php the_field('nav2'); ?></a></li>
				<li class="nav-item"><a class="nav-item-lnk" href="#programm"><?php the_field('nav3'); ?></a></li>
				<li class="nav-item"><a class="nav-item-lnk btn-on-fixed" href="#bottom"><?php the_field('nav4'); ?></a></li>
			</ul>
		</div>
	</header>
	<section id="firstscreen" class="first-screen">
		<div class="container first-screen__container">
			<div class="first-screen__h1"><?php the_field('firstscreenh1'); ?></div>
			<div class="first-screen__h2"><?php the_field('firstscreenh2'); ?></div>
			<a class="btn btn-first-screen" href="<?php the_field('url-coursera'); ?>" target="_blank"><?php the_field('btn-first-screen'); ?></a>
			<div class="row">
				<div class="col-lg-3 col-lg-offset-9">
					<div class="first-screen__social">
						<div class="first-screen__social__title">Поделиться:</div>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php bloginfo('url'); ?>/" target="_blank"><i class="icon-facebook"></i></a>
						<a href="https://twitter.com/intent/tweet?text=<?php bloginfo("name"); ?>. <?php the_field('social-share-descr'); ?>&amp;url=<?php bloginfo('url'); ?>" target="_blank"><i class="icon-twitter"></i></a>
						<a href="http://vk.com/share.php?url=<?php bloginfo('url'); ?>&amp;title=<?php bloginfo("name"); ?>&amp;description=<?php the_field('social-share-descr'); ?>&amp;image=<?php bloginfo("template_directory"); ?>/img/share.jpg&amp;noparse=true" target="_blank"><i class="icon-vk"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="forwho" class="forwho">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="forwho__title"><?php the_field('forwho-title'); ?></div>
					<div class="row">
						<div class="col-md-4">
							<div class="forwho__item">
								<div class="forwho__item__img">
									<img src="<?php bloginfo("template_directory"); ?>/img/forwho_item_img-1.png" alt="">
								</div>
								<div class="forwho__item__title"><?php the_field('forwho-item1-title'); ?></div>
								<div class="forwho__item__text"><?php the_field('forwho-item1-text'); ?></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="forwho__item">
								<div class="forwho__item__img">
									<img src="<?php bloginfo("template_directory"); ?>/img/forwho_item_img-2.png" alt="">
								</div>
								<div class="forwho__item__title"><?php the_field('forwho-item2-title'); ?></div>
								<div class="forwho__item__text"><?php the_field('forwho-item2-text'); ?></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="forwho__item">
								<div class="forwho__item__img">
									<img src="<?php bloginfo("template_directory"); ?>/img/forwho_item_img-3.png" alt="">
								</div>
								<div class="forwho__item__title"><?php the_field('forwho-item3-title'); ?></div>
								<div class="forwho__item__text"><?php the_field('forwho-item3-text'); ?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="forwho__sidebar">
						<div class="forwho__sidebar__title">5 курсов<br>+<div class="forwho__sidebar__title__sub">Финальный проект</div></div>
						<div class="forwho__sidebar__item">
							<div class="forwho__sidebar__item__icon calendar"></div>
							<div class="forwho__sidebar__item__iconsubtext">Длительность</div>
							<div class="forwho__sidebar__item__value">6 месяцев</div>
						</div>
						<div class="forwho__sidebar__item">
							<div class="forwho__sidebar__item__icon clock"></div>
							<div class="forwho__sidebar__item__iconsubtext">Трудоемкость</div>
							<div class="forwho__sidebar__item__value">3-6 часов<div class="forwho__sidebar__item__value__sub">в неделю</div></div>
						</div>
						<div class="forwho__sidebar__item">
							<div class="forwho__sidebar__item__icon laptop"></div>
							<div class="forwho__sidebar__item__iconsubtext">Место проведения</div>
							<div class="forwho__sidebar__item__value">
								<div class="forwho__sidebar__item__value__imglogo"></div>
								<div class="forwho__sidebar__item__value__imgicon"></div>
								<div class="forwho__sidebar__item__value__helper">Coursera.org - платформа онлайн-обучения от ведущих мировых университетов</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features">
		<div class="container">
			<div class="features__title"><?php the_field('features-title'); ?></div>
			<div class="row">
				<div class="col-md-6">
					<div class="features__item">
						<div class="features__item__icon i1"></div>
						<div class="features__item__title"><?php the_field('features-item1-title'); ?></div>
						<div class="features__item__text"><?php the_field('features-item1-text'); ?><br><div class="features__item__text__red" title="По версии Harvard business review"><?php the_field('features-item1-text2'); ?></div></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="features__item">
						<div class="features__item__icon i2"></div>
						<div class="features__item__title"><?php the_field('features-item2-title'); ?></div>
						<div class="features__item__text"><?php the_field('features-item2-text'); ?></div>
					</div>
				</div>
			</div><!--.row-->
			<div class="row">
				<div class="col-md-6">
					<div class="features__item">
						<div class="features__item__icon i3"></div>
						<div class="features__item__title"><?php the_field('features-item3-title'); ?></div>
						<div class="features__item__text"><?php the_field('features-item3-text'); ?></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="features__item">
						<div class="features__item__icon i4"></div>
						<div class="features__item__title"><?php the_field('features-item4-title'); ?></div>
						<div class="features__item__text"><?php the_field('features-item4-text'); ?></div>
					</div>
				</div>
			</div><!--.row-->
			<div class="row">
				<div class="col-md-6">
					<div class="features__item">
						<div class="features__item__icon i5"></div>
						<div class="features__item__title"><?php the_field('features-item5-title'); ?></div>
						<div class="features__item__text"><?php the_field('features-item5-text'); ?></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="features__item">
						<div class="features__item__icon i6"></div>
						<div class="features__item__title"><?php the_field('features-item6-title'); ?></div>
						<div class="features__item__text"><?php the_field('features-item6-text'); ?></div>
					</div>
				</div>
			</div><!--.row-->
			<div class="row">
				<div class="col-md-12">
					<div class="features__item wide">
						<div class="features__item__icon i7"></div>
						<div class="features__item__title"><?php the_field('features-item7-title'); ?></div>
						<div class="features__item__text"><?php the_field('features-item7-text'); ?></div>
					</div>
				</div>
			</div><!--.row-->
		</div>
	</section>
	<section id="lectors" class="lectors">
		<div class="container">
			<div class="lectors__title"><?php the_field('lectors-title'); ?></div>
			<div class="row">
				<div class="col-md-4">
					<div class="lectors__item">
						<div class="lectors__item__photo">
							<img src="<?php bloginfo("template_directory"); ?>/img/lector1.jpg" alt="name">
						</div>
						<div class="lectors__item__name"><?php the_field('lector1-name'); ?></div>
						<div class="lectors__item__about"><?php the_field('lector1-info'); ?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="lectors__item">
						<div class="lectors__item__photo">
							<img src="<?php bloginfo("template_directory"); ?>/img/lector2.jpg" alt="name">
						</div>
						<div class="lectors__item__name"><?php the_field('lector2-name'); ?></div>
						<div class="lectors__item__about"><?php the_field('lector2-info'); ?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="lectors__item">
						<div class="lectors__item__photo">
							<img src="<?php bloginfo("template_directory"); ?>/img/lector3.png" alt="name">
						</div>
						<div class="lectors__item__name"><?php the_field('lector3-name'); ?></div>
						<div class="lectors__item__about"><?php the_field('lector3-info'); ?></div>
					</div>
				</div>
			</div><!--.row-->
			<div class="row">
				<div class="col-md-4">
					<div class="lectors__item">
						<div class="lectors__item__photo">
							<img src="<?php bloginfo("template_directory"); ?>/img/lector4.png" alt="name">
						</div>
						<div class="lectors__item__name"><?php the_field('lector4-name'); ?></div>
						<div class="lectors__item__about"><?php the_field('lector4-info'); ?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="lectors__item">
						<div class="lectors__item__photo">
							<img src="<?php bloginfo("template_directory"); ?>/img/lector5.png" alt="name">
						</div>
						<div class="lectors__item__name"><?php the_field('lector5-name'); ?></div>
						<div class="lectors__item__about"><?php the_field('lector5-info'); ?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="lectors__item">
						<div class="lectors__item__photo">
							<img src="<?php bloginfo("template_directory"); ?>/img/lector6.png" alt="name">
						</div>
						<div class="lectors__item__name"><?php the_field('lector6-name'); ?></div>
						<div class="lectors__item__about"><?php the_field('lector6-info'); ?></div>
					</div>
				</div>
			</div><!--.row-->
		</div>
	</section>
	<section id="programm" class="programm">
		<div class="container">
			<div class="programm__title"><?php the_field('programm-title'); ?></div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="programm__course expand">
						<div class="programm__course__title clearfix">
							<div class="programm__course__title__count">
								<div class="programm__course__title__count__inner">
									<div class="programm__course__title__count__value">1</div>
									<div class="programm__course__title__count__title">курс</div>
								</div>
							</div>
							<div class="programm__course__title__text"><?php the_field('programm-1-title'); ?></div>
						</div>
						<div class="programm__course__about">
							<div class="programm__course__about__title">О курсе</div>
							<p><?php the_field('programm-1-title-about'); ?></p>
						</div>
						<div class="programm__course__more">
							<div class="programm__course__more__inner">
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-1-week1'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-1-week2'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-1-week3'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-1-week4'); ?></span></div>
							</div>
						</div>
						<div class="programm__course__bth-more">
							<div class="programm__course__bth-more__show">
								<div class="programm__course__bth-more__label">Подробнее</div>
								<div class="programm__course__bth-more__icon icon-arrow-down"></div>
							</div>
							<div class="programm__course__bth-more__hide">
								<div class="programm__course__bth-more__icon icon-arrow-up"></div>
								<div class="programm__course__bth-more__label">Свернуть</div>
							</div>
						</div>
					</div><!-- .programm__course -->
					<div class="programm__course">
						<div class="programm__course__title clearfix">
							<div class="programm__course__title__count">
								<div class="programm__course__title__count__inner">
									<div class="programm__course__title__count__value">2</div>
									<div class="programm__course__title__count__title">курс</div>
								</div>
							</div>
							<div class="programm__course__title__text"><?php the_field('programm-2-title'); ?></div>
						</div>
						<div class="programm__course__about">
							<div class="programm__course__about__title">О курсе</div>
							<p><?php the_field('programm-2-title-about'); ?></p>
						</div>
						<div class="programm__course__more">
							<div class="programm__course__more__inner">
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-2-week1'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-2-week2'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-2-week3'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-2-week4'); ?></span></div>
							</div>
						</div>
						<div class="programm__course__bth-more">
							<div class="programm__course__bth-more__show">
								<div class="programm__course__bth-more__label">Подробнее</div>
								<div class="programm__course__bth-more__icon icon-arrow-down"></div>
							</div>
							<div class="programm__course__bth-more__hide">
								<div class="programm__course__bth-more__icon icon-arrow-up"></div>
								<div class="programm__course__bth-more__label">Свернуть</div>
							</div>
						</div>
					</div><!-- .programm__course -->
					<div class="programm__course">
						<div class="programm__course__title clearfix">
							<div class="programm__course__title__count">
								<div class="programm__course__title__count__inner">
									<div class="programm__course__title__count__value">3</div>
									<div class="programm__course__title__count__title">курс</div>
								</div>
							</div>
							<div class="programm__course__title__text"><?php the_field('programm-3-title'); ?></div>
						</div>
						<div class="programm__course__about">
							<div class="programm__course__about__title">О курсе</div>
							<p><?php the_field('programm-3-title-about'); ?></p>
						</div>
						<div class="programm__course__more">
							<div class="programm__course__more__inner">
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-3-week1'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-3-week2'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-3-week3'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-3-week4'); ?></span></div>
							</div>
						</div>
						<div class="programm__course__bth-more">
							<div class="programm__course__bth-more__show">
								<div class="programm__course__bth-more__label">Подробнее</div>
								<div class="programm__course__bth-more__icon icon-arrow-down"></div>
							</div>
							<div class="programm__course__bth-more__hide">
								<div class="programm__course__bth-more__icon icon-arrow-up"></div>
								<div class="programm__course__bth-more__label">Свернуть</div>
							</div>
						</div>
					</div><!-- .programm__course -->
					<div class="programm__course">
						<div class="programm__course__title clearfix">
							<div class="programm__course__title__count">
								<div class="programm__course__title__count__inner">
									<div class="programm__course__title__count__value">4</div>
									<div class="programm__course__title__count__title">курс</div>
								</div>
							</div>
							<div class="programm__course__title__text"><?php the_field('programm-4-title'); ?></div>
						</div>
						<div class="programm__course__about">
							<div class="programm__course__about__title">О курсе</div>
							<p><?php the_field('programm-4-title-about'); ?></p>
						</div>
						<div class="programm__course__more">
							<div class="programm__course__more__inner">
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-4-week1'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-4-week2'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-4-week3'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-4-week4'); ?></span></div>
							</div>
						</div>
						<div class="programm__course__bth-more">
							<div class="programm__course__bth-more__show">
								<div class="programm__course__bth-more__label">Подробнее</div>
								<div class="programm__course__bth-more__icon icon-arrow-down"></div>
							</div>
							<div class="programm__course__bth-more__hide">
								<div class="programm__course__bth-more__icon icon-arrow-up"></div>
								<div class="programm__course__bth-more__label">Свернуть</div>
							</div>
						</div>
					</div><!-- .programm__course -->
					<div class="programm__course">
						<div class="programm__course__title clearfix">
							<div class="programm__course__title__count">
								<div class="programm__course__title__count__inner">
									<div class="programm__course__title__count__value">5</div>
									<div class="programm__course__title__count__title">курс</div>
								</div>
							</div>
							<div class="programm__course__title__text"><?php the_field('programm-5-title'); ?></div>
						</div>
						<div class="programm__course__about">
							<div class="programm__course__about__title">О курсе</div>
							<p><?php the_field('programm-5-title-about'); ?></p>
						</div>
						<div class="programm__course__more">
							<div class="programm__course__more__inner">
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-5-week1'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-5-week2'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-5-week3'); ?></span></div>
								<div class="programm__course__more__inner__title">Неделя <span class="programm__course__more__inner__title__value"><?php the_field('programm-5-week4'); ?></span></div>
							</div>
						</div>
						<div class="programm__course__bth-more">
							<div class="programm__course__bth-more__show">
								<div class="programm__course__bth-more__label">Подробнее</div>
								<div class="programm__course__bth-more__icon icon-arrow-down"></div>
							</div>
							<div class="programm__course__bth-more__hide">
								<div class="programm__course__bth-more__icon icon-arrow-up"></div>
								<div class="programm__course__bth-more__label">Свернуть</div>
							</div>
						</div>
					</div><!-- .programm__course -->
					<div class="programm__course">
						<div class="programm__course__title clearfix">
							<div class="programm__course__title__count">
								<div class="programm__course__title__count__inner">
									<div class="programm__course__title__count__value">6</div>
									<div class="programm__course__title__count__title">курс</div>
								</div>
							</div>
							<div class="programm__course__title__text"><?php the_field('programm-6-title'); ?></div>
						</div>
						<div class="programm__course__about">
							<div class="programm__course__about__title">О курсе</div>
							<p><?php the_field('programm-6-title-about'); ?></p>
						</div>
						<div class="programm__course__more">
							<div class="programm__course__more__inner">
								<?php the_field('programm-6-noweek'); ?>
							</div>
						</div>
						<div class="programm__course__bth-more">
							<div class="programm__course__bth-more__show">
								<div class="programm__course__bth-more__label">Подробнее</div>
								<div class="programm__course__bth-more__icon icon-arrow-down"></div>
							</div>
							<div class="programm__course__bth-more__hide">
								<div class="programm__course__bth-more__icon icon-arrow-up"></div>
								<div class="programm__course__bth-more__label">Свернуть</div>
							</div>
						</div>
					</div><!-- .programm__course -->
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section>
	<section class="parners">
		<div class="container">
			<div class="parners__title">Партнёры</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<a class="parners__lnk mipt" href="https://mipt.ru/" target="_blank"></a>
				</div>
				<div class="col-md-6 col-sm-6">
					<a class="parners__lnk yandex" href="https://www.yandex.ru/" target="_blank"></a>
				</div>
			</div>
		</div>
	</section>
	<section class="infoparners" style="display:none;">
		<div class="container">
			<div class="infoparners__title">Инфопартнёры</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l1" href="http://www.mts.ru/" target="_blank"></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l2" href="https://www.promodo.com/" target="_blank"></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l3" href="http://olshansky.ua/" target="_blank"></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l4" href="https://blogun.ru/" target="_blank"></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l5" href="http://www.citrus.ua/" target="_blank"></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l6" href="http://www.vsemayki.ru/" target="_blank"></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l7" href="http://netpeak.net/" target="_blank"></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-custom">
					<div class="infoparners__lnk_container">
						<a class="infoparners__lnk l8" href="http://www.skidka.ua/" target="_blank"></a>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section>
	<section class="reviews">
		<div class="container">
			<div class="row">
				<div class="reviews__title">Отзывы о курсе</div>
				<div class="reviews__slider clearfix">
					<div class="reviews__slider__item">
						<div class="reviews__slider__item__title"><?php the_field('reviews-1-title'); ?></div>
						<div class="reviews__slider__item__text"><?php the_field('reviews-1-text'); ?></div>
						<div class="reviews__slider__item__name"><?php the_field('reviews-1-name'); ?></div>
					</div>
					<div class="reviews__slider__item">
						<div class="reviews__slider__item__title"><?php the_field('reviews-2-title'); ?></div>
						<div class="reviews__slider__item__text"><?php the_field('reviews-2-text'); ?></div>
						<div class="reviews__slider__item__name"><?php the_field('reviews-2-name'); ?></div>
					</div>
					<div class="reviews__slider__item">
						<div class="reviews__slider__item__title"><?php the_field('reviews-3-title'); ?></div>
						<div class="reviews__slider__item__text"><?php the_field('reviews-3-text'); ?></div>
						<div class="reviews__slider__item__name"><?php the_field('reviews-3-name'); ?></div>
					</div>
					<div class="reviews__slider__item">
						<div class="reviews__slider__item__title"><?php the_field('reviews-4-title'); ?></div>
						<div class="reviews__slider__item__text"><?php the_field('reviews-4-text'); ?></div>
						<div class="reviews__slider__item__name"><?php the_field('reviews-4-name'); ?></div>
					</div>
				</div> <!-- .reviews__slider -->
			</div>
		</div> <!-- .container -->
	</section>
	<section id="bottom" class="bottom price">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="bottom__item">
						<div class="bottom__item__title">Стоимость и информация<br>о получении дотации</div>
						<div class="bottom__item__subtitle">Специализацию можно начать проходить в любое время. Сессия перезапускается каждый месяц. Длительность обучения</div>
						<ul class="bottom__item__pricelist">
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">1 <?php the_field('programm-1-title'); ?></div>
								<div class="bottom__item__pricelist__price"><?php the_field('price-1course'); ?> <span class="rub">&#8381;</span></div>
							</li>
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">2 <?php the_field('programm-2-title'); ?></div>
								<div class="bottom__item__pricelist__price"><?php the_field('price-1course'); ?> <span class="rub">&#8381;</span></div>
							</li>
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">3 <?php the_field('programm-3-title'); ?></div>
								<div class="bottom__item__pricelist__price"><?php the_field('price-1course'); ?> <span class="rub">&#8381;</span></div>
							</li>
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">4 <?php the_field('programm-4-title'); ?></div>
								<div class="bottom__item__pricelist__price"><?php the_field('price-1course'); ?> <span class="rub">&#8381;</span></div>
							</li>
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">5 <?php the_field('programm-5-title'); ?></div>
								<div class="bottom__item__pricelist__price"><?php the_field('price-1course'); ?> <span class="rub">&#8381;</span></div>
							</li>
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">6 <?php the_field('programm-6-title'); ?></div>
								<div class="bottom__item__pricelist__price"><?php the_field('price-1course'); ?> <span class="rub">&#8381;</span></div>
							</li>
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">Сумма</div>
								<div class="bottom__item__pricelist__price small"><?php the_field('price-all'); ?> <span class="rub">&#8381;</span></div>
							</li>
							<li class="bottom__item__pricelist__row clearfix">
								<div class="bottom__item__pricelist__item">Сумма со скидкой</div>
								<div class="bottom__item__pricelist__price"><?php the_field('price-all-sale'); ?> <span class="rub">&#8381;</span></div>
							</li>
						</ul>
						<div class="bottom__item__bottomtext"><span class="redbold">Скидка 10%</span> процентов при оплате всех курсов, дипломного проекта и сертификаты об окончании специализации сразу.</div>
						<div class="bottom__item__btn-bottom__container">
							<a class="btn bottom__item__btn-bottom" href="<?php the_field('url-coursera'); ?>" target="_blank">Записаться на курс</a>
						</div>
					</div> <!-- .bottom__item -->
					<div class="bottom__item">
						<div class="bottom__item__title">Финансовая помощь</div>
						<div class="bottom__item__text">Если слушатель хочет получить доступ ко всем заданиям и сертификату, но не имеете возможности оплатить их, можно воспользоваться программой финансовой поддержки (CourseraFinancialAid). Для получения помощи от Coursera, он должен заполнить краткую заявку с описанием своего финансового положения и причиной для зачисления на курс. Чтобы подать заявку, нужно <a href="<?php the_field('url-coursera'); ?>" target="_blank">пройти по ссылке</a> под кнопкой “Зарегистрироваться” на странице специализации.</div>
					</div> <!-- .bottom__item -->
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section>

	<footer>
		<div class="container"></div>
	</footer>
	<!--[if lt IE 9]>
	<script src="js/html5shiv/es5-shim.min.js"></script>
	<script src="js/html5shiv/html5shiv.min.js"></script>
	<script src="js/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="js/html5shiv/respond.min.js"></script>
	<![endif]-->
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery.mousewheel.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery.smoothscroll.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery.scrollTo.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/navigation.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/common.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>
