<?php 

/*Template Name: BLOG */
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

global $class_black;
$class_black=' style="color: black" ';

get_header();

$header_title = get_field('blog_title', $post->ID);
$header_sub_title = get_field('blog_sub_title', $post->ID);


?>


		<section id="slider" class="slider-parallax swiper_wrapper clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/slider/swiper/word_falls.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
							</div>
						</div>
					</div>
					<div class="swiper-slide dark">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
							</div>
						</div>
						<div class="video-wrap">
							<video poster="<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.jpg" preload="auto" loop autoplay muted>
								<source src='<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.mp4' type='video/mp4' />
								<source src='<?php echo get_bloginfo('template_directory'); ?>/files/images/videos/explore.webm' type='video/webm' />
							</video>
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/slider/swiper/3.jpg'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption">
								<h2 data-caption-animate="fadeInUp">Great Performance</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
							</div>
						</div>
					</div>
				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">


				<div class="container clearfix">

					<div class="heading-block center">
						<h1><?php echo $header_title?></h1>
						<span><?php echo $header_sub_title ?></span>
					</div>

					<!-- Post Content
					============================================= -->
										<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts" class="small-thumbs">


						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'post', 'posts_per_page' => 2, 'paged' => $paged );
						$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); 
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
						<div class="entry clearfix">
								<div class="entry-image">
									<a href="<?php echo get_permalink($post->ID)?> " data-lightbox="image">
									<img src="<?php echo $image[0] ?>" class="image_fade" src="" alt="' . $post->post_title . '"></a>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> <?php echo $date;?></li>
										<li><i class="icon-user"></i> <?php echo $author?></li>
									</ul>
									<div class="entry-content">
										<?php echo $post_short_description?>
										</br>
										<a href="<?php echo get_permalink($post->ID)?>"class="more-link">Read More</a>
									</div>
								</div>
							</div>
						    

						<?php endwhile; ?>













							

							
						</div><!-- #posts end -->

						<!-- Pagination
						============================================= -->

						<!-- then the pagination links -->
						
						<ul class="pager nomargin">
						<li class="previous"><?php previous_posts_link( '&larr; Newer' ); ?></li>
						
						<li class="next"><?php next_posts_link( 'Older &rarr;', $wp_query ->max_num_pages); ?></li>
						</ul>
						<?php //wpbeginner_numeric_posts_nav(); ?>
						
							

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->




<?php get_footer(); ?>