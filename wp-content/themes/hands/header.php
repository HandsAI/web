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

<?php //wp_head(); 
$site=get_site_url();
global $class_black;

$translations = pll_the_languages(array('raw'=>1));
$en=$translations['en'];
$es=$translations['es']; 
$current=pll_current_language();

if($current=="en")
{	
	$lng='<a '.$class_black.' href="#" data-href="#section-nextgen"><div><img src="'.get_bloginfo('template_directory').'/files/images/us.png"></div></a>';
}else{
	$lng='<a '.$class_black.' href="#" data-href="#section-nextgen"><div><img src="'.get_bloginfo('template_directory').'/files/images/spain.png"></div></a>';
}

$lng.='<ul>
			<li>
				<a href="'.$en['url'].'" data-href="'.$en['url'].'"><div>English <img src="'.get_bloginfo('template_directory').'/files/images/us.png"></div></a>
			</li>
			<li><a href="'.$es['url'].'" data-href="'.$es['url'].'"><div>Español <img src="'.get_bloginfo('template_directory').'/files/images/spain.png"></div></a></li>
		</ul>';

?>

	


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 


	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/dark.css" type="text/css" />
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/files/images/favicon.png">

		<!-- Specific Stylesheet -->
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/app-landing.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/ongs.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/swiper.css" type="text/css">

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/components/bs-switches.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/responsive.css" type="text/css" />



	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/magnific-popup.css" type="text/css" />




	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/fonts.css" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/components/bs-switches.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/css/colors.css" type="text/css" />
	<!-- Document Title
	============================================= -->
	<title>Hands | We are all one, united.</title>

</head>






<body class="stretched">

	<div class="modal-newsletter">

		<div class="close-modal"> × </div>
 
		<div class="bg-modal-newsletter"></div>

		<div class="info-modal-newsletter" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/community/bg_contactUs_modal.jpg') no-repeat center center;">
			<div class="inner-modal">
				<div class="heading-block nobottomborder bottommargin-sm" style="max-width:500px;">
					<h3>Contact Us</h3>
					<!-- <span>Get Latest Fashion Updates &amp; Offers</span> -->
				</div>
				<div class="widget-subscribe-form-result"></div>

				<?php echo do_shortcode('[contact-form-7 id="271" title="ONGS & Donation"]');?>
				<p class="nobottommargin"><small><em>*We will be contacting you as soon as possible.</em></small></p>
			</div>

			<p class="time-remaining"></p>

		</div>
	</div>

	<!-- Document Wrapper
	============================================= -->
	<div class="body-overlay"></div>
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="split-menu transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<?php if($class_black==""){?>
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo-dark.png"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo-dark@2x.png"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->
					<?php }else{?>
					<div id="logo">
						<a href="../index.html" class="standard-logo" data-dark-logo="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo.png"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo.png" alt="Canvas Logo"></a>
						<a href="../index.html" class="retina-logo" data-dark-logo="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo.png"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->
					<?php } ?>

					<!-- Primary Navigation
					============================================= -->
					<?php if($current=="en"){?>
					<nav id="primary-menu" class="with-arrows clearfix not-dark">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">
							<li><a <?php echo $class_black?> href="<?php echo $site ?>/" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="" <?php echo $class_black?> data-href="#section-nextgen"><div>About</div></a>
								<ul>
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/about" data-href="#section-nextgen"><div>About Us</div></a></li>
									
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/careers-jobs" data-href="#section-nextgen"><div>Jobs</div></a></li>
									
									<!--<li><a <?php echo $class_black?> href="<?php echo $site ?>/our-company" 
									data-href="#section-nextgen"><div>Our Company</div></a></li>-->
								</ul>
							</li>
							<li><a href="" <?php echo $class_black?> data-href="#section-nextgen"><div>Explore</div></a>
								<ul>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/ongs" data-href="#"><div>For NGOs</div></a></li>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/donations" data-href="#"><div>For Donations</div></a></li>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/community" data-href="#"><div>For Your Community</div></a></li>
									

								</ul>
							</li>
						</ul>

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">

							 <li><a href="" <?php echo $class_black?> data-href="#section-nextgen"><div>Tokenization</div></a>
								<ul>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/whitepaper" data-href="#"><div>White Paper</div></a></li>
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/one_pager.pdf" data-href="#section-nextgen"><div>One Pager</div></a></li>
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/bounty" data-href="#"><div>Bounty</div></a></li>

								</ul>
							</li>

							 
							 <li><a <?php echo $class_black?> href="<?php echo $site ?>/blog" data-href="#"><div>Blog</div></a></li> 
							 <li><a <?php echo $class_black?> href="<?php echo $site ?>/contact" data-href="#"><div>Contact</div></a></li> 
							
							
							
							<li>

							<?php echo $lng;?>


							</li>
							

						</ul>

					</nav>
					<?php }else{?>
					<nav id="primary-menu" class="with-arrows clearfix not-dark">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">
							<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/inicio" data-href="#wrapper"><div>Inicio</div></a></li>
							<li><a href="" <?php echo $class_black?> data-href="#section-nextgen"><div>Nosotros</div></a>
								<ul>
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/quienes_somos" data-href="#section-nextgen"><div>Quienes Somos</div></a></li>
									
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/trabajos" data-href="#section-nextgen"><div>Trabajos</div></a></li>
									<!--<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/nuestra_compania" data-href="#section-nextgen"><div>Nuestra Compania</div></a></li>-->
								</ul>
							</li>
							<li><a href="" <?php echo $class_black?> data-href="#section-nextgen"><div>Explorar</div></a>
								<ul>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/ong" data-href="#"><div>Para NGOs</div></a></li>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/donaciones" data-href="#"><div>Para Donaciones</div></a></li>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/comunidad" data-href="#"><div>Para la Comunidad</div></a></li>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/generosidad" data-href="#"><div>Generosidad</div></a></li>

								</ul>
							</li>
						</ul>

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">

							 

							 <li><a href="" <?php echo $class_black?> data-href="#section-nextgen"><div>Tokenization</div></a>
								<ul>

									<li><a <?php echo $class_black?> href="<?php echo $site ?>/whitepaper" data-href="#"><div>White Paper</div></a></li>
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/one_pager.pdf" data-href="#section-nextgen"><div>One Pager</div></a></li>
									<li><a <?php echo $class_black?> href="<?php echo $site ?>/es/generosidad" data-href="#"><div>Generosidad</div></a></li>

								</ul>
							</li>


							 <li><a <?php echo $class_black?> href="<?php echo $site ?>/es/articulos" data-href="#"><div>Articulos</div></a></li> 
							 <li><a <?php echo $class_black?> href="<?php echo $site ?>/es/contacto" data-href="#"><div>Contacto</div></a></li> 
							
							
							
							<li>

							<?php echo $lng;?>


							</li>
							

						</ul>

					</nav>

					<?php }?>

				</div>

			</div>

		</header><!-- #header end -->


		
		

		