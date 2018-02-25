<?php 

/*Template Name: Post 
Template Post Type: post
*/
$post = get_post( ); 
get_header();

   // get_template_part('parts/tp', 'slider');
   // get_template_part('parts/tp', 'nosotros');
   // get_template_part('parts/tp', 'inicio-servicios');
   // get_template_part('parts/tp', 'articulos');
   // get_template_part('parts/tp', 'mapa');
   // get_template_part('parts/tp', 'contacto');

//print_r($post);
?>


		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/parallax/9.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1 data-animate="fadeInUp"><?php the_title(); ?></h1>
				<span data-animate="fadeInUp" data-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
				<span data-animate="fadeInUp" data-delay="300">
				
				</span>
				
			</div>

		</section><!-- #page-title end -->

				<!-- Content
		============================================= -->
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">



				<div class="heading-block center">
					<h2>In the News</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				</div>


				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

						

					</div><!-- #posts end -->

				<div class="heading-block center">
					<h2>Press Releases</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				</div>


				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

						

					</div><!-- #posts end -->

				<div class="heading-block center">
					<h2>Industry Perspectives</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				</div>


				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>
						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo get_bloginfo('template_directory'); ?>/files/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								<a href="blog-single.html"class="more-link">Read More</a>
							</div>
						</div>

						

					</div><!-- #posts end -->

					<!-- Pagination
					============================================= -->
					<!--
					<ul class="pagination nobottommargin">
						<li class="disabled"><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
					-->

				</div>

			</div>

		</section><!-- #content end -->








<?php get_footer(); ?>