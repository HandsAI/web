<?php 

/*Template Name: OUR COMPANY */

$post = get_post( ); 
get_header();

$header_title = get_field('our_header_title', $post->ID);
$header_sub_title = get_field('our_header_subtitle', $post->ID);
$our_overview = get_field('our_overview', $post->ID);
$our_overview_content = get_field('overview_content', $post->ID);
$our_leadership = get_field('our_leadership', $post->ID);
$our_leadership_content = get_field('our_leadership_content', $post->ID);
$our_investors = get_field('our_investors', $post->ID);
$our_investors_content = get_field('our_investors_content', $post->ID);
$our_board_of_directors = get_field('our_board_of_directors', $post->ID);
$our_board_of_directors_content = get_field('our_board_of_directors_content', $post->ID);



$listado_articulos = get_field('investors_list', $post->ID);


?> 

   <!-- Page Title
        ============================================= -->
        <section id="slider" class="slider-parallax full-screen force-full-screen ohidden">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen section nopadding nomargin noborder ohidden">

					<div class="slider-caption slider-caption-center" style= "color: #EEE;">
						<h2 class= "headercaption" style= "color: #EEE; font-family: 'Folks', sans-serif;" data-caption-animate="fadeInUp"><?php echo $our_overview ?></h2>
						<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo $our_overview_content ?></p>


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

				
			
			<div class="container  clearfix">
				<div class="row">

				<div class="heading-block center">
									<h2><?php echo $our_leadership ?></h2>
									<span><?php echo $our_leadership_content ?></span>
							</div>
					
							<?php echo do_shortcode( '[our-team group="leadership"]' );?>
					</div>

					</div>


				


					<div class="heading-block center">
							<h2><?php echo $our_investors ?></h2>
							<span><?php echo $our_investors_content ?></span>
					</div>


					<div class="content-wrap">

						<div class="container clearfix">

							<?php 
							if(is_array($listado_articulos)){ 
		    
						    $t=0;	
						    foreach ($listado_articulos as $key => $a) {

						    $img=$a['investors_image'];
						    $last="";
						    if($t==5){
				    		$t=0;
				    		$last="col_last";
				    		}
					    	?>


							<div class="col_one_sixth <?php echo $last?>">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									
									<img src="<?php echo $img['url']?>" alt="<?php echo $a['investor_title']?>" width="100">
									
									<h3><?php echo $a['investors_title']?></h3>
								</div>
							</div>
							
							<?php 
						    //}else{
						    $t++;
							}
							}
						    ?>

							
						</div>
					</div>

					<div class="clear"></div>
				

					<div class="heading-block center">
							<h2><?php echo $our_board_of_directors ?></h2>
							<span><?php echo $our_board_of_directors_content ?></span>
					</div>


					<div class="content-wrap">

						<div class="container clearfix">

							<?php echo do_shortcode( '[our-team group="directors"]' );?>
						</div>
					</div>

					<div class="clear"></div>
				</div>



				

		</section><!-- #content end -->




<?php get_footer(); ?>