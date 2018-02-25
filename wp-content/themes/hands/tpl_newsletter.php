<?php 

/*Template Name: Newsletter*/
global $class_black;
$class_black=' style="color: black" ';

get_header();

$content = apply_filters('the_content', $post->post_content);
?>
 

      

				<!-- Content
		============================================= -->
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="container clearfix">

				<div class="content-wrap">
				<?php echo $content;?>



				</div>				
			</div>

		</section><!-- #content end -->





<?php get_footer(); ?>