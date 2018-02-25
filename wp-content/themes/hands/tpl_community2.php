<?php 

/*Template Name: COMMUNITY */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


get_header();

$header_title = get_field('header_title', $post->ID);
$header_sub_title = get_field('header_sub_title', $post->ID);
$title = get_field('title', $post->ID);
$sub_title = get_field('sub_title', $post->ID);
$listado_articulos = get_field('section_list', $post->ID);

$scuare1_title = get_field('scuare1_title', $post->ID); 
$scuare1_description = get_field('scuare1_description', $post->ID);
$scuare2_title = get_field('scuare2_title', $post->ID);
$scuare2_description = get_field('scuare2_description', $post->ID);
$scuare3_title = get_field('scuare3_title', $post->ID);
$scuare3_description = get_field('scuare3_description', $post->ID);


$args = array(
    'post_type' => 'solution',
    'orderby' => 'rand',
    'posts_per_page' => 4
);
$id=get_the_ID();
$servicios = new WP_Query($args);


?>

		<section id="slider" class="slider-parallax full-screen force-full-screen ohidden">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen section nopadding nomargin noborder ohidden">

					<div class="slider-caption slider-caption-center" style= "color: #EEE;">
						<h2 class= "headercaption" style= "color: #EEE; font-family: 'Folks', sans-serif;" data-caption-animate="fadeInUp">HANDS FOR YOUR COMMUNITY</h2>
						<!--p data-caption-animate="fadeInUp" data-caption-delay="200">Creating a better place to work everyday.</p-->


						<p data-caption-animate="fadeInUp" data-caption-delay="200">
								Access our community and let us find meaningful connections for you!
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

 			<div id="promoCommunity" class="promo promo-full landing-promo header-stick">
					<div class="container clearfix text-center">
						<h3 class="open-community-modal" >Discover connections that connect you to different communities. <i class="icon-circle-arrow-right" style="position:relative;top:2px;"></i></h3>
						<span>Join them, meet new people who can enrich your life, give and receive a hand.</span>
					</div>
				</div>
<section id="content">
					<section class="container-fluid clearfix section_features_community">

						<div class="container">

							<div class="row feature-row wow bounceIn">
								<div class="col-md-3">
									<div class="robot-icon-feature" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/community/robot_amelia_02_3d.png');">
										<!-- <a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/einstein_robot_16.png" alt="Responsive Layout"></a> -->
									</div>
								</div>
								<div class="col-md-9">
									<h3>Introducing the Virtual Assistant</h3>
									<p>Your new virtual assistant has the ability to learn about our interests, desires and needs; thus generating more assertive suggestions on the activities we can do, the people we should meet and the communities in which we can participate. In this way, we can create a network with possible connections that helps us fulfill our goals and share our interests.
									</p>
								</div>
							</div>

							<div class="row feature-row clearfix wow bounceIn">
								<div class="col-md-3 col-sm-12 col-xs-12 pull-right">
									<div class="robot-icon-feature" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/community/robot_amelia_03_3d.png');">
										<!-- <a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/einstein_robot_16.png" alt="Responsive Layout"></a> -->
									</div>
								</div>
								<div class="col-md-9 text-right pull-left">
									<h3>¿How does it work?</h3>
									<p>Hands provides an assistant to encourage us to connect with people and communities who share the same values, interests, beliefs and/or passions. The ability to make questions is one of the most astonishing we have as humans. We use it to connect with others through perspectives and feelings that provide shared experiences and ideas. We want to do for people what only friends in common have been able to do: put people in touch with each other understanding that they help one another. All this using a scheme that connects concepts, which seem at first apart from each other, and through a dynamic of questions and answers.</p>
								</div>
							</div>

							<div class="row feature-row wow bounceIn">
								<div class="col-md-3">
									<div class="robot-icon-feature" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/community/robot_amelia_04_3d.png');" >
										<!-- <a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/einstein_robot_16.png" alt="Responsive Layout"></a> -->
									</div>
								</div>
								<div class="col-md-9">
									<h3>Geolocation and real-time dynamic suggestions</h3>
									<p>When connecting to Hands through our position and interests, the assistant will offer us to connect with people and/or activities that are taking place around us and that may be of interest to us.<br>
Hands for your community offers different communication channels to create new communities or integrate yourself into already existing ones. It also offers the possibility for each community to establish its rules as well as configure them and moderate them in real time with the virtual assistant.</p>
								</div>
							</div>


						</div>


					</section>



					<section class="container section_prod_specs wow fadeInLeft">

						<div class="title_section">
							<h2>Discover all the Possibilities</h2>
						</div>

					  <div class="row">

					      <!-- SIDE NAV MAIN -->
					      <div class="side_nav_main col-md-4 col-sm-12">
					         <ul class="ul_side_nav">

					           <li class="side_nav_item">
					              <a href="" class="side_nav_inner" data-option-id="option-1">
					                 <p>Profile matching</p>
					                <i class="glyphicon glyphicon-menu-right"></i>
					               </a>
					           </li>

					           <li class="side_nav_item">
					              <a href="" class="side_nav_inner" data-option-id="option-2">
					                 <p>Communities to share and grow.</p>
					                <i class="glyphicon glyphicon-menu-right"></i>
					               </a>
					           </li>

					           <li class="side_nav_item">
					              <a href="" class="side_nav_inner" data-option-id="option-3">
					                 <p>Chat and channels.</p>
					                <i class="glyphicon glyphicon-menu-right"></i>
					               </a>
					           </li>

					           <li class="side_nav_item">
					              <a href="" class="side_nav_inner" data-option-id="option-4">
					                 <p>Configurable access to communities.</p>
					                <i class="glyphicon glyphicon-menu-right"></i>
					               </a>
					           </li>

					           <li class="side_nav_item">
					              <a href="" class="side_nav_inner" data-option-id="option-5">
					                 <p>Create a community.</p>
					                <i class="glyphicon glyphicon-menu-right"></i>
					               </a>
					           </li>

										 <li class="side_nav_item">
					              <a href="" class="side_nav_inner" data-option-id="option-6">
					                 <p>Questionnaires y personalized surveys.</p>
					                <i class="glyphicon glyphicon-menu-right"></i>
					               </a>
					           </li>

										 <li class="side_nav_item">
					              <a href="" class="side_nav_inner" data-option-id="option-7">
					                 <p>Search by ability.</p>
					                <i class="glyphicon glyphicon-menu-right"></i>
					               </a>
					           </li>

										 <li class="side_nav_item">
												<a href="" class="side_nav_inner" data-option-id="option-8">
													 <p>Posts in your community.</p>
													<i class="glyphicon glyphicon-menu-right"></i>
												 </a>
										 </li>

					          </ul>

					      </div>

					    <!-- CONTENT SIDE NAV MAIN -->
					      <div class="snav_content_main col-md-8 col-sm-12">

					        <div class="snav_content_item" id="option-1">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
					          <h3>Profile matching</h3>
										Honesty and recognition are precious values ​​for Hands. The relationships we suggest are based on
										 your true interests and we continually seek to unveil the network of connections that lie beneath
										 us —connections and possibilities that are available at all times but usually unnoticed.
										 The virtual assistant can generate suggestions taking notice of your interests, passions,
										 skills and values on communities that correspond to you, people you could meet or help,
										 or put you in touch with people who share something with you, even though that bond has remained unknown to you.

					        </div>

					        <div class="snav_content_item" id="option-2">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
					                  <h3>Communities to share and grow:</h3>
														Connection is a fundamental value at Hands, we know that possibilities multiply when we remain together, and that’s when we are more powerful. In Hands for your community, you will find spaces to share your interests and values. Discover what you have in common with people near you and know the possibilities that surround you.

									</div>

					        <div class="snav_content_item" id="option-3">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
					                  <h3>Chat and channels: </h3>
														Hands for your community offers, through configurable communication channels, the possibility for members to communicate instantly. It creates channels so that members can share and communicate in a new space that can serve to strengthen human relationships, plan collaboration strategies and solve problems in a cooperative way.
									</div>

					        <div class="snav_content_item" id="option-4">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
					                  <h3>Configurable access to communities:</h3>
					                  Not all of us have the same needs or the same availabilities; neither all communities have the same goals or perspectives. Hands for your community offers a whole range of possibilities of accessibility for communities in the most convenient way, whether you prefer a completely open community where everyone can enter and communicate or one with restricted personalized access.
					        </div>

					        <div class="snav_content_item" id="option-5">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
					                  <h3>Create a community:</h3>
					                  Haven’t you find the community you are looking for? There are times when we have to take the initiative. At Hands we firmly believe that we have to be the change we want to see in the world and that together we can do it. Create a community and be the founding member of the connection you are looking for. You are not alone. We always share something with someone. Hands’ connection assistant will suggest possible members sharing the interests and values of your new community and people with similar interests will have your community among their suggestions.
					        </div>

									<div class="snav_content_item" id="option-6">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
					                  <h3>Questionnaires y personalized surveys:</h3>
					                  Information is vital in your community, ignorance separates us. Hands for your community offers the possibility of creating personalized questionnaires to give you a way to get to know better the members of your community, or you can even create surveys to find out the members’ opinion on a specific topic. Hands’ assistant will take care of making questions in such a manner that the process of acknowledgement happens in the most natural way.
					        </div>

									<div class="snav_content_item" id="option-7">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
					                  <h3>Search by ability:</h3>
														Find who can help you and also find ways to be helpful. Hands’ assistant can help you find out a way to help your community based on your abilities, as well as the person in your community that can help you solve a problem based on his/her abilities. You can specify the search by geolocation so you can know who the nearest person is.
					        </div>

									<div class="snav_content_item" id="option-8">
										<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/community/demo-Gif.gif" class="pull-left" alt=""> -->
														<h3>Posts in your community:</h3>
														Bring out community goals, problems and topics so that other members can see them. You’ll be able to create a flow of questions and send them to other members of the community, and you can include a category to find and notify members of the community that can collaborate with an objective, solve a problem or participate in a given topic. The assistant can also suggest your post to members of the community who might be helpful or interested. A chat can be associated to the post so that members can communicate there.
									</div>

					      </div>

					  </div>
					</section>
<div class="section footer-stick wow fadeInUp">

			<div class="container clearfix">

				<div class="title_section">
					<p>
						Space and time are the basis of the experience we offer. And we will help you get the most of them. Probably, your local environment offers plenty of possibilities you ignore. Hands can help discover all the connections you share with your community.
					</p>
				</div>

				<div class="center">
					<a class="open-community-modal button button-3d button-teal button-xlarge nobottommargin wow tada animated" id="eycty" data-animate="tada" >
					<i class="icon-star3"></i>
						Enter your community
					</a>
				</div>

			</div>

</div>

		<!-- Content
		============================================= -->
</section>


					<div class="section notopmargin footer-stick" style="padding: 10px 0; background-color: #FDECEB; border-top: 1px solid #E5E5E5;">
						<div class="container clearfix">

							<div class="row clearfix">
								<div class="col-md-4">
									<div class="app-footer-features"><i class="icon-line2-globe-alt"></i><h5 class="font-body"><a href="#">Worldwide network</a><span> &amp; 24-hour coverage</span></h5></div>
								</div>
								<div class="col-md-4">
									<div class="app-footer-features"><i class="icon-line2-notebook"></i><h5 class="font-body"><a href="#">Share your</a><span> hands to anyone</span></h5></div>
								</div>
								<div class="col-md-4">
									<div class="app-footer-features"><i class="icon-line2-lock"></i><h5 class="font-body"><span>Serious about</span> <a href="#">Security</a> <span>&amp;</span> <a href="#">Privacy</a></h5></div>
								</div>
							</div>

						</div>
					</div>





<?php get_footer(); ?>