<?php 

/*Template Name: ONG */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


get_header();

$header_title = get_field('ong_title', $post->ID);
$p1_title = get_field('ong_part1_title', $post->ID);
$p1_description = get_field('ong_part1_description', $post->ID);
$p1_image = get_field('ong_part1_image', $post->ID);
$p1_img=$p1_image['url'];
$p2_title = get_field('ong_part2_title', $post->ID);
$p2_description = get_field('ong_part2_description', $post->ID);
$p2_image = get_field('ong_part2_image', $post->ID);
$p3_title = get_field('ong_part3_title', $post->ID);
$p3_description = get_field('ong_part3_description', $post->ID);
$p3_image = get_field('ong_part3_image', $post->ID);
$p3_img=$p3_image['url'];
$p4_title = get_field('ong_part4_title', $post->ID);
$p4_description = get_field('ong_part4_description', $post->ID);
$p4_image = get_field('ong_part4_image', $post->ID);
$p4_img=$p4_image['url'];
$befefits_title = get_field('befefits_title', $post->ID);
$useres_title = get_field('useres_title', $post->ID);


$listado_articulos = get_field('ong_header_slider_list', $post->ID);
$listado_articulos2 = get_field('benefits_list', $post->ID);
$listado_articulos3 = get_field('ong_for_user_list', $post->ID);
$listado_articulos4 = get_field('ong_slider_list', $post->ID);


$current=pll_current_language();
$site=get_site_url();

if($current=="en")
$contact_url=$site."/contact";
else
$contact_url=$site."/contacto";


?> 

		<!-- Page Title
		============================================= -->
		<section id="slider" class="slider-parallax swiper_wrapper clearfix" onload="function_play()">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						
						<?php 
						if(is_array($listado_articulos)){ 
	
		    				$k=$kk=0;
						    foreach ($listado_articulos as $key => $a) {
						    $title=$a['ong_header_slider_title'];
						    $image=$a['ong_header_slider_image'];
						    $img=$image['url'];
					    	?>

							<div class="swiper-slide dark" style="background-image: url('<?php echo $img?>'); height: 662px;">
									<div class="container clearfix" style="height: 662px !important;">
										<img data-caption-animate="fadeInUp" class="fadeInUp animated" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/ongs/slider_iphone_3d.gif" alt="Image" class="hidden-sm hidden-xs" style="position: absolute; left: 130px; bottom: 0px; height: 450px;" data-height-md="450">

										<div class="vertical-middle no-fade clearfix" style="position: absolute; top: 50%; width: 100%; padding-top: 0px; padding-bottom: 0px; margin-top: -192px;">
											<div class="col-md-6 dark fright nobottommargin fadeIn animated" data-animate="fadeIn">

												<div class="emphasis-title">
													<h1 data-caption-animate="fadeInUp" class="fadeInUp animated">
														<?php echo $title?>
													</h1>
												</div>

											</div>
										</div>
									</div>
								</div>
								<?php } 
								}
								?>

					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
				</div>

				<!-- Modal -->
				<div class="modal1 mfp-hide" id="modal-login">
					<div class="block divcenter" style="background-color: #FFF; max-width: 400px;">
						<div style="padding: 50px;">
							<h3 class="font-title letter-space">Login to your Account</h3>
							<form action="#" method="post" class="nobottommargin">
								<div class="col_full">
									<label class="font-body capitalize" for="login-form-modal-username">Username:</label>
									<input type="text" id="login-form-modal-username" name="login-form-modal-username" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label class="font-body capitalize" for="login-form-modal-password">Password:</label>
									<input type="password" id="login-form-modal-password" name="login-form-modal-password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-rounded nomargin" id="login-form-modal-submit" name="login-form-modal-submit" value="login">Login</button>
									<a href="#" class="fright">Forgot Password?</a>
								</div>
							</form>
							<div class="line line-sm"></div>
							<a href="#" class="button button-rounded btn-block t400 center capitalize si-facebook si-colored noleftmargin norightmargin">Login with Facebook</a>
							<a href="#" class="button button-rounded btn-block t400 center capitalize si-gplus si-colored nomargin">Login with Google</a>
						</div>
					</div>
				</div>

			</section>
		<section id="content" style="margin-bottom: 0px;">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-lg-5">
							<div class="heading-block topmargin" style="margin-top: 20px !important; margin-bottom: 20px;">
								<h1 style="font-size: 28px;"><?php echo $p1_title ?></h1>
							</div>
              <p class="lead"><?php echo $p1_description ?>
            </div>

						<div class="col-lg-7">

							<div style="position: relative; margin-bottom: -60px; height: 426px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
								<img src="<?php echo $p1_img ?>" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome" class="fadeInUp animated">
								<!--<img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad" class="fadeInUp animated">-->
							</div>

						</div>

					</div>
				</div>



		<div class="container clearfix">
			<div class="row topmargin-lg bottommargin-sm">
			<div class="heading-block center">
				<h2><?php echo $p2_title ?></h2>
				<span class="divcenter"><?php echo $p2_description ?><br><br>
				</div>
 
						<!--slider  -->
						<div class="fslider" data-easing="easeInQuad">
							<div class="flexslider">
								<div class="slider-wrap">
		
									<!-- ================= slide  -->
									<div class="slide" data-thumb="images/slider/boxed/thumbs/2.jpg">
									<div class="container clearfix">
									<div class="row">
	
								<?php 
									
			
									if(is_array($listado_articulos4)){ 
				    				$k=$kk=$l=0;
								    foreach ($listado_articulos4 as $key => $a) {

								    $image=$a['ong_slider_list_image'];
		    						$img=$image['url'];
								    $title=$a['ong_slider_list_title'];
								    $description=$a['ong_slider_list_description'];
								    if($k==3){
								    		echo '</div></div></div>';    	
						    				echo '<div class="slide" data-thumb="images/slider/boxed/thumbs/2.jpg">
													<div class="container clearfix">
													<div class="row">'; 
						    				$k=-1;   						
								    }
								    $k++;
								    $l++;
							    	?>

							    	<div class="col-sm-12 col-md-4">
										    <div class="thumbnail">
										      <a href="#" data-toggle="modal" data-target="#myModal<?php echo $l?>">
										      <img src="<?php echo $img ?>" alt="...">								
										      <div class="caption">
										        <h3><?php echo $title ?></h3>
										      </div>
										      </a>
										    </div>
									</div>

									
								<?php } ?>	
								<?php } ?>
								



									
								</div>
								</div>
							</div>
						</div>
							</div>
						</div>
						</div>

					

				<?php 
									
			
				if(is_array($listado_articulos4)){ 
				$k=$kk=$l=0;
			    foreach ($listado_articulos4 as $key => $a) {

			    $image=$a['ong_slider_list_image'];
				$img=$image['url'];
			    $title=$a['ong_slider_list_title'];
			    $description=$a['ong_slider_list_description'];
			    $description=str_replace('<p>', '', $description);
		    	$description=str_replace('</p>', '', $description);
			    $k++;
			    $l++;
		    	?>

		    	
				
				<!-- Modal <?php echo $l?> -->
				<div class="modal fade" id="myModal<?php echo $l?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel"> <?php echo $title?></h4>
				      </div>
				      <div class="modal-body">
				        <img src="<?php echo $img?>" alt="">
				      </div>
				      <div class="modal-footer">
								<p class="modal-text"><?php echo $description?></p>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Modal<?php echo $l?> ends -->


				
			<?php } ?>	
			<?php } ?>
										
			
			<hr class="divider-hr">





<!-- ================================================================== -->
<div class="container clearfix">

      <div class="col-md-4 col-sm-6 bottommargin">

        <h3 style="text-align: center;"><?php echo $befefits_title?></h3>
        

        <?php 
		if(is_array($listado_articulos2)){ 

			$k=$kk=0;
		    foreach ($listado_articulos2 as $key => $a) {
		    $title=$a['ong_benefits_title'];
		    $image=$a['ong_benefits_icon'];
		    $img=$image['url'];
		    $description=$a['ong_benefits_description'];
		    $description=str_replace('<p>', '', $description);
		    $description=str_replace('</p>', '', $description);
		    $k++;
	    	?>

        <div class="feature-box fbox-right topmargin lefttoright" onmouseover="overongsicon(this, <?php echo $k?>)" onmouseout="outongsicon(this, <?php echo $k?>)" data-delay="400">
          <div class="fbox-icon">
            <a href="#"><img class="icon_ongs" src="<?php echo $img?>" alt=""></a>
          </div>
          <h3><?php echo $title?></h3>
          <p class="ongs<?php echo $k?>_desc"><?php echo $description ?></p>
        </div>

        <?php }} ?>

      </div>

      <div class="col-md-4 hidden-sm bottommargin center">
        <img  class="gifanimated animated" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/ongs/Benefits_3d.gif" alt="Image" style="/* position: absolute; */margin-top: 15px;bottom: 0px;height: 450px;">
      </div>

      <div class="col-md-4 col-sm-6 bottommargin">

        <h3 style="text-align: center;"><?php echo $useres_title ?> </h3>
        
        <?php 
		if(is_array($listado_articulos3)){ 

			
		    foreach ($listado_articulos3 as $key => $a) {
		    $title=$a['ong_for_user_title'];
		    $image=$a['ong_for_user_ico'];
		    $img=$image['url'];
		    $description=$a['ong_for_user_description'];
		    $description=str_replace('<p>', '', $description);
		    $description=str_replace('</p>', '', $description);
		    $k++;
	    	?>

       



         <div class="feature-box topmargin righttoleft" onmouseover="overongsicon(this, <?php echo $k?>)" onmouseout="outongsicon(this, <?php echo $k?>)">
          <div class="fbox-icon">
            <a href="#"><img class="icon_ongs" src="<?php echo $img?>" alt=""></a>
          </div>
          <h3><?php echo $title?></h3>
          <p class="ongs<?php echo $k?>_desc"><?php echo $description?></p>
        </div>


        <?php }} ?>


        

      </div>

</div>

					<hr class="divider-hr">

          <div class="container clearfix">

						<div class="col-md-6 col-sm-12 center" style="margin: 10px 0;">
							<?php echo $p3_description ?>
							<img  class="" style=";" src="<?php echo $p3_img ?>" alt="Image">
						</div>

						<div class="col-md-6 col-sm-12 center">
								<img  class="" style="" src="<?php echo $p4_img ?>" alt="Image" >
								<?php echo $p4_description ?>
						</div>

					</div>

				<div class="clear"></div>

			</div>


		</section>


<!-- Contact Us -->
<div class="section footer-stick wow fadeInUp">
			<div class="container clearfix">
				<div class="center">
					<!--
					<a   class="open-community-modal button button-3d button-teal button-xlarge nobottommargin wow tada animated button-rounded button-reveal tright" id="eycty" data-animate="tada" >
					<i class="icon-angle-right"></i><span>Contact us</span>
					</a>
					-->
					<a href="<?php echo $contact_url?>"  class="button button-3d button-teal button-xlarge nobottommargin wow tada animated button-rounded button-reveal tright" id="eycty" data-animate="tada" href="" >
					<i class="icon-angle-right"></i><span>Contact us</span>
					</a>
				</div>
			</div>
</div>
<!-- Contact Us -->

		<!-- Modal -->

    <div class="modal1 mfp-hide" id="modal-get-started">
      <div class="block divcenter" style="background-color: #FFF; max-width: 800px;">
        <div style="padding: 50px;">
          <form action="#" id="get-started-form" method="post" class="nobottommargin">

            <div class="row clearfix">
              <div class="col-sm-8">
                <h3 class="font-body">Register for an Account</h3>
              </div>
              <div class="col-sm-4">
                <div id="modal-get-started-package"></div>
              </div>
            </div>

            <div class="col_half">
              <label class="font-body capitalize" for="get-started-form-username">Choose Name:</label>
              <input type="text" id="get-started-form-username" name="get-started-form-username" value="" class="form-control required no-error-msg" />
            </div>

            <div class="col_half col_last">
              <label class="font-body capitalize" for="get-started-form-email">Your Email:</label>
              <input type="email" id="get-started-form-email" name="get-started-form-email" value="" class="form-control required email no-error-msg" />
            </div>

            <div class="clear"></div>

            <div class="col_half">
              <label class="font-body capitalize" for="get-started-form-password">Choose Password:</label>
              <input type="password" id="get-started-form-password" name="get-started-form-password" value="" class="form-control required no-error-msg" />
            </div>

            <div class="col_half col_last">
              <label class="font-body capitalize" for="get-started-form-password">Your Phone:</label>
              <input type="password" id="get-started-form-repassword" name="get-started-form-repassword" value="" class="form-control required no-error-msg" />
            </div>

            <!-- Package Selector Hidden Input Value Setter -->
            <input type="hidden" id="get-started-form-package" name="get-started-form-package" value="Free">
<!--
            <div class="col_full">
              <label>
                <input type="checkbox" id="get-started-form-agree" name="get-started-form-agree" value="1" style="position: relative; top: 2px; margin-right: 5px;"> I Agree to the Terms &amp; Conditions
              </label>
            </div> -->

            <div class="col_full nobottommargin">
              <button class="button button-rounded nomargin" id="get-started-form-submit" name="get-started-form-submit" value="login">Get Started</button>
              <!--<a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="fright" onClick="$.magnificPopup.close();">Change Plan?</a>-->
            </div>

          </form>
        </div>
      </div>
    </div>




<?php get_footer(); ?>