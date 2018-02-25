<?php 

/*Template Name: Career Jobs*/

global $class_black;
$class_black=' style="color: black" ';

get_header();

$header_title = get_field('carrer_jobs_title', $post->ID);
$header_sub_title = get_field('carrer_jobs_sub_title', $post->ID);
$career_our_values_title = get_field('carrer_jobs_our_values_title', $post->ID);
$career_our_values_description = get_field('carrer_jobs_our_values_description', $post->ID);

   
?>




				<!-- Content
		============================================= -->
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">



				<div class="heading-block center">
					<h2><?php echo $header_title ?></h2>
					<span><?php echo $header_sub_title ?></span>
				</div>


				<div class="container clearfix">
				<?php echo do_shortcode('[jobpost]');?>
				
				</div>

				
			</div>

		</section><!-- #content end -->





<?php get_footer(); ?>