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
$contact_title=just_variable( "contact_title", false); 
$contact_sub_title=just_variable( "contact_sub_title", false); 
$contact_title_form=just_variable( "contact_title_form", false); 
$send_mail_button=just_variable( "send_mail_button", false); 

?>


		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/parallax/9.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1 data-animate="fadeInUp"><?php echo $contact_title ?></h1>
				<span data-animate="fadeInUp" data-delay="300"><?php echo $contact_sub_title ?></span>
				<span data-animate="fadeInUp" data-delay="300">
				
				</span>
				
			</div>

		</section><!-- #page-title end -->

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
							<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
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