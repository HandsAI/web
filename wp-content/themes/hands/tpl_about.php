<?php 

/*Template Name: About */ 

$post = get_post( ); 
get_header();

$header_title = get_field('about_header_title', $post->ID);
$header_sub_title = get_field('about_header_sub_title', $post->ID);
$about_overview = get_field('about_overview', $post->ID);
$about_overview_content = get_field('about_overview_content', $post->ID);

$about_team_title = get_field('about_team_title', $post->ID);
$about_team_sub_title = get_field('about_team_sub_title', $post->ID);

$about_client_title = get_field('about_client_title', $post->ID);


$listado_articulos = get_field('about_slider_images', $post->ID);
$listado_articulos2 = get_field('about_client_list', $post->ID);

$about_team_advisor = get_field('about_team2_title', $post->ID);
$about_team_advisor_sub = get_field('about_team2_sub_title', $post->ID);



?>

		
        <!-- Page Title
        ============================================= -->
        <section id="slider" class="slider-parallax full-screen force-full-screen ohidden">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen section nopadding nomargin noborder ohidden">

					<div class="slider-caption slider-caption-center" style= "color: #EEE;">
						<h2 class= "headercaption" style= "color: #EEE; font-family: 'Folks', sans-serif;" data-caption-animate="fadeInUp"><?php echo $header_title ?></h2>
						<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo $header_sub_title ?></p>


						<p data-caption-animate="fadeInUp" data-caption-delay="200">
								 
							</p>
					</div>
					<div class="container clearfix">&nbsp;</div>

					<div class="video-wrap">
						<video poster="<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.jpg" preload="auto" loop autoplay muted>
							<source src='<?php echo get_bloginfo('template_directory'); ?>/files/to_do/Community Background Video.mp5' type='video/mp4' />
							<!--source src='<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.webm' type='video/webm' /-->
						</video>
					</div>

				</div>

				<a href="#" data-scrollto="#section-couple" class="one-page-arrow" style="color:#FFF;"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>

		</section>



		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<?php 
					//quitar esto para mostrarlo
					if($s==1){?>
					<div class="col_full">

						<div class="heading-block center nobottomborder">
							<h2><?php echo $about_overview?></h2>
							<span><?php echo $about_overview_content ?></span>
						</div>



						

						


						<?php 
						if(is_array($listado_articulos)){ 
						?>

						<div class="fslider" data-pagi="false" data-animation="fade">
							<div class="flexslider">
								<div class="slider-wrap">
									<?php 
									if(is_array($listado_articulos)){ 
				    
								    foreach ($listado_articulos as $key => $a) {

								    $img=$a['about_slider_image'];
							    	?>

									<div class="slide"><a href="#"><img src="<?php echo $img['url']?>" alt="<?php echo $a['about_slider_alt']?>"></a></div>
									

									<?php } }?>
								</div>
							</div>
						</div>
						<?php } ?>


					</div>
					<?php } ?>

					
 
					<div class="heading-block center">
						<h2><?php echo $about_team_title ?></h2>
						<span><?php echo $about_team_sub_title ?></span>
					</div>

					
					<?php echo do_shortcode( '[our-team group="DIRECTORS,LEADERSHIP"]' );?>

					<div class="heading-block center">
						<h2><?php echo $about_team_advisor ?></h2>
						<span><?php echo $about_team_advisor_sub ?></span>
					</div>

					<?php echo do_shortcode( '[our-team group="Advisors"]' );?>

				</div>





			</div>

		</section><!-- #content end -->

	?>
	<?php 
					//quitar esto para mostrarlo
					if($s==1){?>

				<!-- Sentence
				===============================================-->
				<div class="section parallax dark nobottommargin" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/to_do/Fotograma- What our team thinks copia.jpg'); background-size: 100%; padding: 100px 0;" data-stellar-background-ratio="0.2">

					<div class="heading-block center">
						<h3><?php echo $about_client_title?></h3>
					</div>
 
					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
									
								<?php 
								if(is_array($listado_articulos2)){ 

							    foreach ($listado_articulos2 as $key => $a) {
							    $img=$a['about_client_image'];
						    	?>


								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo $img['url']?>" alt="<?php echo $a['product_feature_title']?>" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="color: #fff; font-size: 24px;"><?php echo $a['about_client_description']?></p>
										<div class="testi-meta">
											<?php echo $a['about_client_name']?>
											<span><?php echo $a['about_client_company']?></span>
										</div>
									</div>
								</div>

								<?php } }?>

							</div>
						</div>
					</div>

				</div>
				<!--===========================================-->

		<?php } ?>

<?php get_footer(); ?>