<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */ 

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php //wp_head(); ?>

	
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
 
	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/files/include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/files/include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/files/include/rs-plugin/css/navigation.css">

	<!-- Document Title
	============================================= -->
	<title>Hands</title>

	<style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>


</head>




<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
<!--		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">-->
		<header id="header" class="full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="../../hands" class="standard-logo" data-dark-logo="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo-dark2.png"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo_1.png" alt="Canvas Logo"></a>
						<a href="../../hands" class="retina-logo" data-dark-logo="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo-dark@2x.png"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					
					
					<nav id="primary-menu">

						<?php wp_nav_menu( array(
								'container' => '', 
								'menu_class' => false

							) ); ?>

						<!--
						<ul>
							<li class="current"><a href="index.html"><div>Home</div></a>
								<ul>
									<li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>
									<li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>
									<li><a href="index-events.html"><div>Home - Events</div></a></li>
									<li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>
									<li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>
									<li><a href="index-boxed.html"><div>Home - Boxed Layout</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Features</div></a>
								<ul>
									<li><a href="#"><div><i class="icon-stack"></i>Sliders</div></a>
								</ul>
							</li>
						</ul>
						-->
						<!-- Top Cart
						============================================= -->
						<!--
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div>
						-->
						<!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<!--
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->
						

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
