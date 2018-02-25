<?php 

/*Template Name: Donation */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


get_header();

$d_title = get_field('d_title', $post->ID);
$d_sub_title = get_field('d_sub_title', $post->ID);

$donate_text = remove_p(get_field('donate_text', $post->ID));



$d_who_we_are = remove_p(get_field('d_who_we_are', $post->ID));
$d_who_we_are_description = remove_p(get_field('d_who_we_are_description', $post->ID));
$d_what_we_believe_in = remove_p(get_field('d_what_we_believe_in', $post->ID));

$d_what_we_believe_in_description = remove_p(get_field('d_what_we_believe_in_description', $post->ID));
$d_our_mission = remove_p(get_field('d_our_mission', $post->ID));
$d_our_mission_description = remove_p(get_field('d_our_mission_description', $post->ID));
$d_how_can_you_help_us_title = remove_p(get_field('d_how_can_you_help_us_title', $post->ID));

$d_meet_our_team = remove_p(get_field('d_meet_our_team', $post->ID));



$d_help_list = get_field('d_help_list', $post->ID);
$d_team_title = get_field('d_team_title', $post->ID);

$d_team_title_list = get_field('d_team_title_list', $post->ID);

$current=pll_current_language();
$site=get_site_url();

if($current=="en")
$contact_url=$site."/contact";
else
$contact_url=$site."/contacto";


?>

	<!-- Page Title
		============================================= -->

		<section id="slider" class="slider-parallax full-screen force-full-screen ohidden">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen section nopadding nomargin noborder ohidden">

					<div class="slider-caption slider-caption-center" style= "color: #EEE;">
						<h2 class= "headercaption" style= "color: #EEE; font-family: 'Folks', sans-serif;" data-caption-animate="fadeInUp"><?php echo $d_title ?></h2>
						<!--p data-caption-animate="fadeInUp" data-caption-delay="200">Creating a better place to work everyday.</p-->

						<div class="divider divider-short divider-center"><i class="icon-heart3"></i></div>

						<p class="lead"><?php echo $d_sub_title ?></p>

						<div id="countdown-hands" class="countdown countdown-large coming-soon divcenter" style="max-width:700px;"></div>
					</div>
					<div class="container clearfix">&nbsp;</div>

					<div class="video-wrap">
						<video poster="<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.jpg" preload="auto" loop autoplay muted>
							<source src='<?php echo get_bloginfo('template_directory'); ?>/files/to_do/Hands For Donatios- Background video.mp4' type='video/mp4' />
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
			<div class="content-wrap" style="padding-bottom: 0px;">

				<div class="container clearfix">
					<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
					<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>
					<div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn"
							 data-address="1Hj2XYk3Y4kt5vowTxCq2bT26oFJTnTXah"
							 data-shared="false">
							<div class="blockchain stage-begin">
									<img src="https://blockchain.info/Resources/buttons/donate_64.png"/>
							</div>
							<div class="blockchain stage-loading" style="text-align:center">
									<img src="https://blockchain.info/Resources/loading-large.gif"/>
							</div>
							<div class="blockchain stage-ready">
									 <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
									 <p align="center" class="qr-code"></p>
							</div>
							<div class="blockchain stage-paid">
									 Donation of <b>[[value]] BTC</b> Received. Thank You.
							</div>
							<div class="blockchain stage-error">
									<font color="red">[[error]]</font>
							</div>
					</div>
					<div class="center nobottomborder bottommargin-lg topmargin-md" style="visibility: visible; animation-name: flipInX;">
						<h4><?php echo $donate_text;?>
						</h4>
					</div>


					<div class="col_one_third nobottommargin">
						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4 style="font-size: 16px; color: #8c8b8b;"><?php echo $d_who_we_are?></h4>
						</div>
						<p class="text-justify">
						<?php echo $d_who_we_are_description ?>
						</p>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4 style="font-size: 16px; color: #8c8b8b;"><?php echo $d_what_we_believe_in?></h4>
						</div>
						<p class="text-justify"> <? echo $d_what_we_believe_in_description?> </p>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4 style="font-size: 16px; color: #8c8b8b;"><?php echo $d_our_mission ?></h4>
						</div>
						<p class="text-justify"><?php echo $d_our_mission_description ?> </p>
					</div>
					<div class="clear"></div>
				</div>

				<div class="heading-block center topmargin-lg">
					<h3><?php echo $d_how_can_you_help_us_title ?></h3>
				</div>

				<div class="section">
					<div class="container clearfix">
						
						<?php 
						if(is_array($d_help_list)){ 
	
		    				$k=$kk=0;
						    foreach ($d_help_list as $key => $a) {
						    $title=$a['d_help_list_title'];
						    $sub_title=$a['d_help_list_sub_title'];
						    $image=$a['d_help_list_image'];
						    $img=$image['url'];
						    $last="";
						    if($kk==3)
						    {
						    	$last="col_last";
						    	$kk=-1;
						    }	
						    $kk++;

					    	?>

					    	<div class="col_one_fourth nobottommargin <?php echo $last?>">
								<div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
									<div class="bottommargin-sm">
										<img src="<?php echo $img?>" style="max-height: 240px;">
									</div>
									<h3  style="min-height: 150px;"> <?php echo $title?> <span class="subtitle"><?php echo $sub_title?></span></h3>
								</div>

							</div>


							<?php } 
							}
							?>


						
					</div>
				</div>

			
				<!-- Our Team
				==========================================-->
				<div class="section">
					<div class="container clearfix">
						<div class="row topmargin-sm">

							<div class="heading-block center">
								<h3><? echo $d_meet_our_team  ?></h3>
							</div>

							


							<!--slider  -->
						<div class="fslider" data-easing="easeInQuad">
							<div class="flexslider">
								<div class="slider-wrap">

									<?php 
									//echo do_shortcode( '[our-team group="leadership"]' );
									echo do_shortcode( '[our-team]' );
									?>
								</div>
								</div>
							</div>














						</div>



</div>


</div>
				</div>
				<!-- ==========================================-->

				<!-- Sentence
				===============================================-->
				<div class="section parallax dark nobottommargin" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/to_do/Fotograma- What our team thinks copia.jpg'); background-size: 100%; padding: 100px 0;" data-stellar-background-ratio="0.2">

					<div class="heading-block center">
						<h3><?php echo $d_team_title?></h3>
					</div>
 
					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								


								<?php 
								if(is_array($d_team_title_list)){ 
			
				    				$k=$kk=0;
								    foreach ($d_team_title_list as $key => $a) {
								    $title=$a['d_team_title_list_title'];
								    $sub_title=$a['d_team_title_list_sub_title'];
								    $image=$a['d_team_title_list_image'];
								    $img=$image['url'];
								    $description=$a['d_team_title_list_description'];
								    $last="";
								    if($kk==3)
								    {
								    	$last="col_last";
								    	$kk=-1;
								    }	
								    $kk++;

							    	?>
							    	<div class="slide">
										<div class="testi-image">
											<a href="#"><img src="<?php echo $img; ?>" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p style="color: #fff; font-size: 24px;"><?php echo $description?></p>
											<div class="testi-meta">
												<?php echo $title ?>
												<span><?php echo $sub_title ?></span>
											</div>
										</div>
									</div>

							    	

									<?php } 
									}
									?>



							</div>
						</div>
					</div>

				</div>
				<!--===========================================-->
			</div>

		</section><!-- #content end -->

			<!-- Contact Us -->
			<section id="content"  class="donation_contact_section" >
				<div class="">
					<div class=" clearfix">
							<div class="section footer-stick wow fadeInUp">
									<div class=" clearfix">
										<!-- Contact Us -->
										<div class=" footer-stick wow fadeInUp">
													<div class="container clearfix">
														<div class="center">
															<a  href="<?php echo $contact_url?>"  class="button button-3d button-teal button-xlarge nobottommargin wow tada animated button-rounded button-reveal tright" id="eycty" data-animate="tada" >
															<i class="icon-angle-right"></i><span>Contact us</span>
															</a>
														</div>
													</div>
										</div>
									</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</section>
			<!-- Contact Us -->





<div class="container clearfix"></div>



<?php get_footer(); ?>