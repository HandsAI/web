<?php 

/*Template Name: Post 
Template Post Type: post
*/
$post = get_post(); 
global $class_black;
$class_black=' style="color: black" ';

get_header();

   // get_template_part('parts/tp', 'slider');
   // get_template_part('parts/tp', 'nosotros');
   // get_template_part('parts/tp', 'inicio-servicios');
   // get_template_part('parts/tp', 'articulos');
   // get_template_part('parts/tp', 'mapa');
   // get_template_part('parts/tp', 'contacto');

//print_r($post);
$content = apply_filters('the_content', $post->post_content);
$post_id = get_the_ID();
$image = "";
if (has_post_thumbnail( $post_id ) ) 
{ 
   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail'); 

}
$date=date('j F Y', strtotime($post->post_date));
//print_r($post);

$post_short_description =nl2br(strip_tags(substr($post->post_content, 0, 550)));
$author = get_field('author_information', $post->ID);
?>

<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-post nobottommargin">

						<!-- Single Post
						============================================= -->
						<div class="entry clearfix">




		<!-- Page Title
		============================================= -->
		<?php if($post->post_type!="team_member"){?>
							<!-- Entry Title
							============================================= -->
							<div class="entry-title">
								<h2><?php the_title(); ?></h2>
							</div><!-- .entry-title end -->



							<!-- Entry Meta
							============================================= -->
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> <?php echo $date?></li>
								<li><i class="icon-user"></i><?php echo $author?></li>
							</ul><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							<div class="entry-image bottommargin">
								<a href="#"><img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>"></a>
							</div><!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">

								<p>



		
		<?php } ?>

				<!-- Content
		============================================= -->
		<!-- Content
		============================================= -->


				
				<div class="container clearfix">

					<?php echo $content;?>

				</div>

				<div>
				<?php echo do_shortcode('[ssba-buttons]');?>
				</div>

				</div>
			</div>

		</section><!-- #content end -->








<?php get_footer(); ?>