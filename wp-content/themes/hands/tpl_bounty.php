<?php 

/*Template Name: Bounty*/

$post = get_post( ); 
get_header();

$header_title = get_field('bounty_title', $post->ID);
$header_sub_title = get_field('bounty_sub_title', $post->ID);
$about_overview = get_field('about_overview', $post->ID);
$about_overview_content = get_field('about_overview_content', $post->ID);

$about_team_title = get_field('about_team_title', $post->ID);
$about_team_sub_title = get_field('about_team_sub_title', $post->ID);

$about_client_title = get_field('about_client_title', $post->ID);


$listado_articulos2 = get_field('bounty_list', $post->ID);


$current=pll_current_language();
$site=get_site_url();




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

						    $img=$a['bounty_list_image'];
							$s_img=$img['url'];

						    $title=$a['bounty_list_title'];
						    $line1=$a['bounty_list_line1'];
						    $line2=$a['bounty_list_line2'];
						    $line3=$a['bounty_list_line3'];
						    $button_name=$a['bounty_list_button'];
						    $button_id=$a['bounty_list_id'];
						    
						    if($k==3){
						    		echo '</div>';    	
				    				echo '<div class="row topmargin-lg clearfix">'; 
				    				$k=0;   						
						    }
						    if($k==2)
						    	$mid="bounty-card-middlex";
						    else
						    	$mid="";
						    $k++;
						    
					    	?>


						

							<div class="col-md-4 " >
								
								
								<div class="  bounty-card <?php echo $mid?>" >
								<div class="text-center" >
									<img src="<?php echo $s_img;?>" class="height_60px">
								</div>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<span class="bounty-card-content-title"><?php echo $title; ?></span>
								</div>
								<div class="bounty-line">
									<div class="text-center bounty-card-content-subtitle bounty_border">
										<?php echo $line1; ?>
									</div>
									<?php if($line2!=""){?>
									<div class="text-center bounty-card-content-subtitle  bounty_border">
										<?php echo $line2; ?>
									</div>
									<?php }
									if($line2!=""){?>
									<div class="text-center bounty-card-content-subtitle">
										<?php echo $line3; ?>
									</div>
									<?php } ?>
								</div>
								<div class="text-center bottom_button">
									<button onclick="bounty('<?php echo $button_id?>')" class="btn btn-success button button-3d nomargin" id="modal_bounty" data-toggle="modal" data-target="#myModal" type="button"><?php echo $button_name;  ?></button>


								</div>
								</div>
							</div>
						<?php } ?>	
						<?php } ?>
						<?php } ?>


					

				</div>
			</div>
		</section><!-- #content end -->

	
	


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $header_title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php 
      	if($current=="en")
		echo do_shortcode('[contact-form-7 id="670" title="bounty"]');
		else
		echo do_shortcode('[contact-form-7 id="672" title="bounty"]');

      	?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>

<script type="text/javascript">
	

	function bounty(typex)
	{
		//alert(typex);
		$("#bounty_type").val(typex);
	}

</script>