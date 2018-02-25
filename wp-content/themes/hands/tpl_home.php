<?php 

/*Template Name: Home */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


get_header();

$header_title = get_field('header_title', $post->ID);
$header_sub_title = get_field('header_sub_title', $post->ID);
$watch_video = get_field('watch_video', $post->ID);
$video_url = get_field('video_url', $post->ID);


$faq_title = get_field('faq_title', $post->ID);
$feature_title = get_field('feature_title', $post->ID);


$listado_articulos = get_field('section_list', $post->ID);
$listado_articulos2 = get_field('feature_list', $post->ID);
$listado_articulos3 = get_field('faq_list', $post->ID);

$k=0;    
foreach ($listado_articulos as $key => $a) {
$img=$a['section_image'];
$s_img[$k]=$img['url'];
$s_title[$k]=$a['section_title'];
$s_description[$k]=$a['section_description'];
$k++;
}


$home_footer_text = get_field('home_footer_text', $post->ID);




$args = array(
    'post_type' => 'solution',
    'orderby' => 'rand',
    'posts_per_page' => 4
);
$id=get_the_ID();
$servicios = new WP_Query($args);


?>
		<section id="slider" class="full-screen slider-parallax">
			<div class="slider-parallax-inner" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/hero/hero_3d.png') center center no-repeat; background-size: cover;">
				<div class="vertical-middle" style="z-index: 2;">
					<div class="container dark clearfix">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-8">
								<div class="emphasis-title">
									<h1 class="font-title main-title"><?php echo $header_title?></h1>
								</div>
								<p style="color: #FFF; font-size: 17px;" class="subtitles"><?php echo $header_sub_title ?> </p>
								<a href="<?php echo $video_url ?>" class="hero-action-link" data-lightbox="iframe"><i class="icon-play-sign"></i> <?php echo $watch_video ?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
					<div class="video-overlay" style="background: rgba(0,0,0,0.2);"></div>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<!-- Modal -->
				<div class="modal1 mfp-hide" id="modal-login">
					<div class="block divcenter" style="background-color: #FFF; max-width: 400px;">
						<div style="padding: 50px;">
							<h3 class="font-title letter-space">Ingrese a su cuenta</h3>
							<form action="#" method="post" class="nobottommargin">
								<div class="col_full">
									<label class="font-body capitalize" for="login-form-modal-username">Usuario:</label>
									<input type="text" id="login-form-modal-username" name="login-form-modal-username" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label class="font-body capitalize" for="login-form-modal-password">Contraseña:</label>
									<input type="password" id="login-form-modal-password" name="login-form-modal-password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-rounded nomargin" id="login-form-modal-submit" name="login-form-modal-submit" value="login">Entrar</button>
									<a href="#" class="fright">Olvido contraseña?</a>
								</div>
							</form>
							<div class="line line-sm"></div>
							<a href="#" class="button button-rounded btn-block t400 center capitalize si-facebook si-colored noleftmargin norightmargin">Inicie sesión con Facebook</a>
							<a href="#" class="button button-rounded btn-block t400 center capitalize si-gplus si-colored nomargin">Inicie sesión con Google</a>
						</div>
					</div>
				</div>
				<!-- Modal ends -->

				<div class="container clearfix">

					<div id="section-nextgen" class="page-section bottommargin-lg">
						<div class="row clearfix">

							<div class="col-md-7 center">
								<img class="topmargin-lg" src="<?php echo $s_img[0]; ?>" alt="NextGen Framework" data-animate="fadeInLeft">
							</div>

							<div class="col-md-5">
								<div class="topmargin-lg hidden-xs hidden-sm"></div>

								<div class="emphasis-title bottommargin-sm">
									<h2 style="font-size: 36px;" class="font-title ls1 t400"><?php echo $s_title[0]?></h2>
								</div>
								<p style="color: #777; font-size: 16px;" class="text-justify">
									<?php echo $s_description[0] ?>
								</p>
							</div>

						</div>
					</div>

					<div class="line" ></div><div class="clear"></div>

					<div id="section-stunning-graphics" class="page-section topmargin bottommargin-lg">
						<div class="row clearfix">

							<div class="col-md-12 center">
								<img class="topmargin-lg fadeInRight animated" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/section/pizarra_ei.png" alt="Hands" data-animate="fadeInRight" style="width: 100%; margin-top: 0px !important; margin-bottom: 0px !important;">
							</div>

						</div>
					</div>

					<div class="line"></div><div class="clear"></div>

				</div>

				<div id="section-secured-solutions" class="page-section section nopadding topmargin-sm" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/section/nexus-3d-bg.png') no-repeat left bottom; background-size: 100% auto;" data-height-lg="700" data-height-md="700" data-height-sm="450" data-height-xs="450" data-height-xxs="450">
					<div class="container clearfix">
						<div class="row clearfix">
							<div class="col-md-5 col-md-offset-6">
								<div class="topmargin-lg hidden-xs hidden-sm"></div>
								<div class="topmargin-lg hidden-xs hidden-sm"></div>

								<div class="emphasis-title bottommargin-sm">
									<h2 style="font-size: 42px;" class="font-title ls1 t400"><?php echo $s_title[1]?></h2>
								</div>
								<p style="color: #777; font-size: 16px;" class="text-justify">
									<?php echo $s_description[1]?>
								</p>
								<!--
								<a href="http://handsforwork.ai/index.html" class="section-more-link">Learn more<i class="icon-angle-right"></i></a>
								-->
							</div>
						</div>
					</div>
					<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
						<div class="video-overlay hidden-xs hidden-sm" style="background: url('<?php echo $s_img[1]?>') no-repeat left top; background-size: auto 100%;" data-animate="fadeInLeft"></div>
					</div>
				</div>

				<div class="clear bottommargin"></div>

				<div class="container clearfix">

					<div class="clear"></div>

                 <div class=" clearfix">
						<h2 class="center font-title letter-space bottommargin-lg"><?php echo $feature_title ?></h2>
						
						<?php 
						if(is_array($listado_articulos2)){ 
	
							if(is_array($listado_articulos2)){ 
		    				$k=$kk=0;
						    foreach ($listado_articulos2 as $key => $a) {

						    $img=$a['f_image'];
						    $title=$a['f_title'];
						    $description=$a['f_description'];
						    if($k==3){
						    		echo '</div>';    	
				    				echo '<div class="row topmargin-lg clearfix">'; 
				    				$k=-1;   						
						    }
						    $k++;
						    
					    	?>


						

							<div class="col-md-4 bottommargin">
								<i class="i-plain i-large <?php echo $img; ?> inline-block" style="margin-bottom: 30px; color: #999;"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<h4 style="font-size: 16px;"><?php echo $title; ?></h4>
								</div>
								<p class="" style="line-height: 26px;" class="text-justify">
									<?php echo $description; ?>
								</p>
							</div>
						<?php } ?>	
						<?php } ?>
						<?php } ?>

						
						

						</div>
					</div>

				</div>

				<div class="clear"></div>

				<div class="container clearfix">
					<div id="section-faqs" class="page-section nopadding nomargin">

						<div class="row topmargin-sm clearfix">

							<h2 class="center font-title letter-space bottommargin-lg"><?php echo $faq_title?></h2>

						</div>



						<?php 
							if(is_array($listado_articulos3)){ 
		    				$k=$kk=0;
		    				echo '<div class="row topmargin-sm clearfix">'; 
						    foreach ($listado_articulos3 as $key => $a) {

						    //$img=$a['f_image'];
						    $title=$a['faq_title'];
						    $description=$a['faq_description'];
						    if($k==2){
						    		echo '</div>';    	
				    				echo '<div class="row topmargin-sm clearfix">'; 
				    				$k=0;   						
						    }
						    $k++;
						    
					    	?>

					    	
								<div class="col-md-6  col-sm-6 bottommargin-sm">
									<h4 class="font-body" style="margin-bottom:15px;"><?php echo $title; ?></h4>
									<p>
										<?php echo $description; ?>
									</p>
								</div>
								
						<?php } ?>	
						<?php } ?>	


						
				</div>
				</div>

					</div>
				</div>

				<div class="section center" style="padding: 30px 0; color: #999; background-color: #F4FAFA; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">
					<div class="container clearfix">

						<h3 class="ls1 t400" style="font-size: 32px;">
						<?php echo $home_footer_text?>
							
						</h3>
<div style="font-size:62px" class="col-md-2 col-md-offset-5">
	<div class="row">
		<div class="col-md-6">
			<a   style="color:#a4c639" href="https://play.google.com/store/apps/details?id=hands.com.hands"> <i class="icon-large  icon-android"></i></a>
		</div>
		<div class="col-md-6">
			<a style="color: #bac0ce" href="https://itunes.apple.com/us/app/hands-ai/id1225437615?ls=1&amp;mt=8"><i class="icon-large  icon-apple"></i></a>
		</div>
	</div>
</div>

					<!--	<a href="#modal-login" data-lightbox="inline" class="button action-blue button-large button-black capitalize" style="border-radius: 23px;">Login Now</a>
						<a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="button button-large capitalize" style="border-radius: 23px;">Try it Free</a>
					-->
						<div class="clear bottommargin"></div>

					</div>
				</div>
		</section><!-- #content end -->




<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Stay in Touch</h4>
        </div>
        <div class="modal-body">
          
        	<form id="widget-subscribe-form" method="post" action="<?php echo site_url()?>/?na=s" role="form" method="post" class="nobottommargin" onsubmit="return newsletter_check(this)">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									
									<input type="email" id="widget-subscribe-form-email" name="ne" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success button button-3d nomargin" type="submit">Subscribe</button>
									</span>
								</div>
							</form>

        	



        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--> 
        </div>
      </div>
      
    </div>
  </div>


<?php get_footer(); ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/files/alert/css/alertify.css" type="text/css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" media="all"/>
<script src="<?php echo get_bloginfo('template_directory'); ?>/files/alert/alertify.js"></script>
<script type="text/javascript">
	
	setTimeout(function() {
          alertify.log("Make new friends!<div class='telegram-btn-container'><a href='https://t.me/hands_coin' target='_blank'><button class='telegram-btn btn btn-outline-primary'><i class='fab fa-telegram-plane'></i>Join Our Telegram</button></a></div>", "default", 0)
        }, 2000);
        setTimeout(function() {
          alertify.log("Stay in touch?<div class='telegram-btn-container'><button class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Join Our Mailing List</button></div>", "default", 0)
        }, 8000);
</script>

