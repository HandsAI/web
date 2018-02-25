<?php 

/*Template Name: Contact*/

get_header();

   // get_template_part('parts/tp', 'slider');
   // get_template_part('parts/tp', 'nosotros');
   // get_template_part('parts/tp', 'inicio-servicios');
   // get_template_part('parts/tp', 'articulos');
   // get_template_part('parts/tp', 'mapa');
   // get_template_part('parts/tp', 'contacto');
$facebook=just_variable( "facebook", false); 
$twitter=just_variable( "twitter", false); 
$youtube=just_variable( "youtube", false); 


$current=pll_current_language();

if($current=="en")
{	
$contact_title=just_variable( "contact_title", false); 
$contact_sub_title=just_variable( "contact_sub_title", false); 
$contact_title_form=just_variable( "contact_title_form", false); 
$send_mail_button=just_variable( "send_mail_button", false); 
}else{
$contact_title=just_variable( "contact_title_es", false); 
$contact_sub_title=just_variable( "contact_sub_title_es", false); 
$contact_title_form=just_variable( "contact_title_form_es", false); 
$send_mail_button=just_variable( "send_mail_button_es", false); 

}
?>
 

        <!-- Page Title
        ============================================= -->
        <section id="slider" class="slider-parallax full-screen force-full-screen ohidden">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen section nopadding nomargin noborder ohidden">

					<div class="slider-caption slider-caption-center" style= "color: #EEE;">
						<h2 class= "headercaption" style= "color: #EEE; font-family: 'Folks', sans-serif;" data-caption-animate="fadeInUp"><?php echo $contact_title ?></h2>
						<!--p data-caption-animate="fadeInUp" data-caption-delay="200">Creating a better place to work everyday.</p-->


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
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="container clearfix">

				<div class="content-wrap">
				<!--
					<div id="section-contact" class="heading-block title-center page-section">
						<h2><?php echo $contact_title;?></h2>
						<span><?php echo $contact_sub_title;?></span>
					</div>
					-->
					<!-- Contact Form
					============================================= -->
					<div class="col_three_fifth">

						<div class="fancy-title title-dotted-border">
							<h3><?php echo $contact_title_form;?></h3>
						</div>

						<div class="contact-widget2">

							<div class="contact-form-result"></div>
							<?php 
							if($current=="en")
							{	
							echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]');
							}else{
							echo do_shortcode('[contact-form-7 id="461" title="Contact form ES"]');
							}	
							?>
							<!--
							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

							</form>
							-->

						</div>


					</div><!-- Contact Form End -->

					<!-- Google Map
					============================================= -->
					<div class="col_two_fifth topmargin col_last">

						<!-- Sidebar
					============================================= -->
					<div class="sidebar col_last nobottommargin">

						<address>
						 <?php echo just_variable( "address"); ?>
						</address>
						<abbr title="Phone Number"><?php echo just_variable( "phone"); ?><br>
						<abbr title="Fax"><?php echo just_variable( "fax"); ?><br>
						<abbr title="Email Address"><?php echo just_variable( "email"); ?>

						

						<div class="widget noborder notoppadding">

						<?php 
						if($facebook!=""){
						?>
							<a href="<?php echo $facebook?>" class="social-icon si-small si-dark si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
						<?php }
						if($twitter!=""){
						?>

							<a href="<?php echo $twitter?>" class="social-icon si-small si-dark si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

						<?php }
						if($youtube!=""){
						?>
							<a href="#" class="social-icon si-small si-dark si-youtube">
								<i class="icon-youtube"></i>
								<i class="icon-youtube"></i>
							</a>
						<?php }
						?>
						</div>

					</div><!-- .sidebar end -->



					</div><!-- Google Map End -->


				</div>				
			</div>

		</section><!-- #content end -->





<?php get_footer(); ?>