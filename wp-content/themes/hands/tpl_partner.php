<?php 

/*Template Name: Partner */ 

$post = get_post( ); 
get_header();

$header_title = get_field('part_title', $post->ID);
$header_sub_title = get_field('part_sub_title', $post->ID);
$about_overview = get_field('about_overview', $post->ID);
$about_overview_content = get_field('about_overview_content', $post->ID);

$about_team_title = get_field('about_team_title', $post->ID);
$about_team_sub_title = get_field('about_team_sub_title', $post->ID);

$about_client_title = get_field('about_client_title', $post->ID);


$listado_articulos2 = get_field('part_list', $post->ID);




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
						if(is_array($listado_articulos2)){ 

					?>	
					<div class="row topmargin-lg clearfix ">
					<?php 
	
							if(is_array($listado_articulos2)){ 
		    				$k=$kk=0;
						    foreach ($listado_articulos2 as $key => $a) {

						    $img=$a['part_list_image'];
							$s_img=$img['url'];

						    $title=$a['part_list_title'];
						    $sub_title=$a['part_list_sub_title'];
						    $button_name=$a['part_list_button_name'];
						    $button_url=$a['part_list_button_url'];
						    
						    if($k==3){
						    		echo '</div>';    	
				    				echo '<div class="row topmargin-lg clearfix">'; 
				    				$k=-1;   						
						    }
						    if($k==2)
						    	$mid="business-card-middlex";
						    else
						    	$mid="";
						    $k++;
						    
					    	?>


						

							<div class="col-md-4 " >
								
								<!--<div class=" bottommargin business-card <?php echo $mid?>" style='background-image: url("<?php echo $s_img;?>")''>-->
								<div class="  business-card <?php echo $mid?>" >
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<span class="business-card-content-title"><?php echo $title; ?></span>
								</div>
								<div class="text-justify business-card-content-subtitle">
									<?php echo $sub_title; ?>
								</div>
								<div class="text-justify bottom_button">
									<a href="<?php echo $button_url;?>">
									<button class="btn btn-success button button-3d nomargin" type="submit"><?php echo $button_name;  ?></button>
									</a>

								</div>
								</div>
							</div>
						<?php } ?>	
						<?php } ?>
						<?php } ?>


					

				</div>
			</div>
		</section><!-- #content end -->

	?>
	

<?php get_footer(); ?>