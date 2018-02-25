<?php 

/*Template Name: COMMUNITY */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


get_header();

$header_title = get_field('de_title', $post->ID);
$header_sub_title = get_field('de_subtitle', $post->ID);
$header_sub_title2 = get_field('de_subtitle2', $post->ID);
$header_sub_title3 = get_field('de_subtitle_3', $post->ID);

$co_contact_button = get_field('co_contact_button', $post->ID);
$co_fo_description = get_field('co_fo_description', $post->ID);

$co_list = get_field('co_list', $post->ID);
$co_po_title = get_field('co_po_title', $post->ID);
$co_po_list = get_field('co_po_list', $post->ID);

$co_footer_list = get_field('co_footer_list', $post->ID);

$current=pll_current_language();
$site=get_site_url();

if($current=="en")
$contact_url=$site."/contact";
else
$contact_url=$site."/contacto";



?>

		<section id="slider" class="slider-parallax full-screen force-full-screen ohidden">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen section nopadding nomargin noborder ohidden">

					<div class="slider-caption slider-caption-center" style= "color: #EEE;">
						<h2 class= "headercaption" style= "color: #EEE; font-family: 'Folks', sans-serif;" data-caption-animate="fadeInUp"><?php echo $header_title?></h2>
						<!--p data-caption-animate="fadeInUp" data-caption-delay="200">Creating a better place to work everyday.</p-->


						<p data-caption-animate="fadeInUp" data-caption-delay="200">
								<?php echo $header_sub_title ?>
							</p>
					</div>
					<div class="container clearfix">&nbsp;</div>

					<div class="video-wrap">
						<video poster="<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.jpg" preload="auto" loop autoplay muted>
							<source src='<?php echo get_bloginfo('template_directory'); ?>/files/to_do/Community Background Video.mp4' type='video/mp4' />
							<!--source src='<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.webm' type='video/webm' /-->
						</video>
					</div>

				</div>

				<a href="#" data-scrollto="#section-couple" class="one-page-arrow" style="color:#FFF;"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>

		</section>

<!-- Content
		============================================= -->

 			<div id="promoCommunity" class="promo promo-full landing-promo header-stick">
					<div class="container clearfix text-center">
						<h3 class="open-community-modal" ><?php echo $header_sub_title2 ?>
						<i class="icon-circle-arrow-right" style="position:relative;top:2px;"></i>
						</h3>
						<span><?php echo $header_sub_title3 ?></span>
					</div>
				</div>
<section id="content">
					<section class="container-fluid clearfix section_features_community">

						<div class="container">

							<?php 
								if(is_array($co_list)){ 
			
				    				$k=$kk=0;
								    foreach ($co_list as $key => $a) {
								    $title=$a['co_list_title'];
								    $image=$a['co_list_image'];
								    $img=$image['url'];
								    $description=$a['co_list_description'];
								    $last="";
								    if($k==0)
								    {
								    	$k=1;
								   	?>


								   	<div class="row feature-row wow bounceIn">
										<div class="col-md-3">
											<div class="robot-icon-feature" style="background-image: url('<?php echo $img?>');">

											</div>
										</div>
										<div class="col-md-9">
											<h3><?php echo $title ?></h3>
											<p><?php echo $description ?>
											</p>
										</div>
									</div>

								    <?php }else{	
								    	$k=0;
							    	?>

							    	<div class="row feature-row clearfix wow bounceIn">
										<div class="col-md-3 col-sm-12 col-xs-12 pull-right">
											<div class="robot-icon-feature" style="background-image: url('<?php echo $img;?>');">

											</div>
										</div>
										<div class="col-md-9 text-right pull-left">
											<h3><?php echo $title ?></h3>
											<p><?php echo $description ?>
											</p>
										</div>
									</div>

							    	

							    	

									<?php } 
									}}
									?>


							


						</div>


					</section>



					<section class="container section_prod_specs wow fadeInLeft">

						<div class="title_section">
							<h2><?php echo $co_po_title?></h2>
						</div>

					  <div class="row">

					      <!-- SIDE NAV MAIN -->
					      <div class="side_nav_main col-md-4 col-sm-12">
					         <ul class="ul_side_nav">

					          <?php 
								if(is_array($co_po_list)){ 
			
				    				$k=$kk=0;
								    foreach ($co_po_list as $key => $a) {
								    $title=$a['co_po_list_title'];
								    $description=$a['co_po_list_description'];
								    $k++;
								   	?>
								   	<li class="side_nav_item">
						              <a href="" class="side_nav_inner" data-option-id="option-<?php echo $k;?>">
						                 <p><?php echo $title?></p>
						                <i class="glyphicon glyphicon-menu-right"></i>
						               </a>
						           </li>


									<?php  
									}}
									?>

					          

					          </ul>

					      </div>

					    <!-- CONTENT SIDE NAV MAIN -->
					      <div class="snav_content_main col-md-8 col-sm-12">

					        
					      	 <?php 
								if(is_array($co_po_list)){ 
			
				    				$k=$kk=0;
								    foreach ($co_po_list as $key => $a) {
								    $title=$a['co_po_list_title'];
								    $description=$a['co_po_list_description'];
								    $k++;
								   	?>
						           <div class="snav_content_item" id="option-<?php echo $k;?>">
							          <h3><?php echo $title?></h3>
										<?php echo $description ?>
							        </div>
									<?php  
									}}
									?>


					       
					      </div>

					  </div>
					</section>
<div class="section footer-stick wow fadeInUp">

			<div class="container clearfix">

				<div class="title_section">
					<p>
						<?php echo $co_fo_description?>
						
					</p>
				</div>

				<div class="center">
					<a href="<?php echo $contact_url?>" class=" button button-3d button-teal button-xlarge nobottommargin wow tada animated" id="eycty" data-animate="tada" >
					<i class="icon-star3"></i>
						<?php echo $co_contact_button; ?>
					</a>
				</div>

			</div>

</div>

		<!-- Content
		============================================= -->
</section>


					<div class="section notopmargin footer-stick" style="padding: 10px 0; background-color: #FDECEB; border-top: 1px solid #E5E5E5;">
						<div class="container clearfix">

							<div class="row clearfix">
								
								<?php 
								if(is_array($co_footer_list)){ 
			
				    				$k=$kk=0;
								    foreach ($co_footer_list as $key => $a) {
								    $title=$a['co_footer_list_title'];
								    $ico=$a['co_footer_list_ico'];
								    $k++;
								   	?>
						           	
						           	<div class="col-md-4">
										<div class="app-footer-features"><i class="<?php echo $ico?>"></i>
											<?php echo $title?>
										</div>
									</div>

						           
									<?php  
									}}
									?>

								
							</div>

						</div>
					</div>





<?php get_footer(); ?>