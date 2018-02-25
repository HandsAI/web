<?php
$facebook=just_variable( "facebook", false); 
$twitter=just_variable( "twitter", false); 
$youtube=just_variable( "youtube", false); 
$current=pll_current_language();
if($current=="en")
{	
$footer_text=just_variable( "footer_text", false); 
$footer_subscriber_text=just_variable( "footer_subscriber_text", false); 
}else{
$footer_text=just_variable( "footer_text_es", false); 
$footer_subscriber_text=just_variable( "footer_subscriber_text_es", false); 

}

?>
	<!-- Footer
		============================================= -->
		<footer id="footer" style="background-color: #F47E5C;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="row clearfix">

						<div class="col-md-8 col-md-offset-2">

							<div class="widget clearfix">
								<div class="row clearfix">
									<div class="col-md-12 bottommargin-sm clearfix" style="color:#FFF; margin-bottom:15px">
										<img src="<?php echo get_bloginfo('template_directory'); ?>/files/images/footer-logo.png" alt="Hands.ai" style="display: block; margin:0 auto">
										<p style="text-align:center"><?php echo $footer_text ?> </p>
										<div class="col-md-2 col-md-offset-5 center-icons">
											<a href="https://www.facebook.com/handsAI/" class="social-icon si-small si-borderless si-colored si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>

											<a href="https://twitter.com/hands_ai" class="social-icon si-small si-borderless si-colored si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>

											<a href="https://www.youtube.com/channel/UChzk-az63RMZ-tzozXtRvOw" class="social-icon si-small si-borderless si-rounded si-colored si-youtube si-youtube">
												<i class="icon-youtube"></i>
												<i class="icon-youtube"></i>
											</a>
										</div>


									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="notoppadding">

				<div class="container clearfix">

					<div  id="footer_copyright" class="col_half footer-text">
						<?php echo $footer_subscriber_text?><br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a> / <a href="<?php echo get_site_url()?>/sitemap">SiteMap</a></div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->


<div id="gotoTop" class="icon-angle-up"></div>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '168966870268190'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=168966870268190&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90990851-1', 'auto');
  ga('send', 'pageview');

</script>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/files/js/jquery.js"></script>
	<!--<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/files/js/team_mocks/team_menbers.js"></script>-->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/files/js/functions.js"></script>

	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/files/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/files/js/skrollr.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/files/js/wow.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/files/js/contactUs.js"></script>


	<!-- Footer Scripts
	============================================= -->
	<!-- Start of LiveChat (www.livechatinc.com) code -->
	<script type="text/javascript">
	window.__lc = window.__lc || {};
	window.__lc.license = 9222835;
	(function() {
	  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
	})();
	</script>
	<!-- End of LiveChat code -->
	<script>

				function overflag(x){
			document.getElementsByClassName("cajaidiomas")[0].style.display="block";
		}
		function outflag(x){
			document.getElementsByClassName("cajaidiomas")[0].style.display="none";
		}

		function overmenu(x){
			document.getElementsByClassName("cajamenu")[0].style.display="block";
		}
		function outmenu(x){
			document.getElementsByClassName("cajamenu")[0].style.display="none";
		}

		function overongsicon(x, y){
			if (y==1){
				document.getElementsByClassName("ongs1_desc")[0].style.display="block";
			}else if (y==2){
				document.getElementsByClassName("ongs2_desc")[0].style.display="block";
			}else if (y==3){
				document.getElementsByClassName("ongs3_desc")[0].style.display="block";
			}else if (y==4){
				document.getElementsByClassName("ongs4_desc")[0].style.display="block";
			}else if (y==5){
				document.getElementsByClassName("ongs5_desc")[0].style.display="block";
			}else if (y==6){
				document.getElementsByClassName("ongs6_desc")[0].style.display="block";
			}else if (y==7){
				document.getElementsByClassName("ongs7_desc")[0].style.display="block";
			}else if (y==8){
				document.getElementsByClassName("ongs8_desc")[0].style.display="block";
			}else if (y==9){
				document.getElementsByClassName("ongs9_desc")[0].style.display="block";
			}else if (y==10){
				document.getElementsByClassName("ongs10_desc")[0].style.display="block";
			}
		}
		function outongsicon(x, y){
			if (y==1){
				document.getElementsByClassName("ongs1_desc")[0].style.display="none";
			}else if (y==2){
				document.getElementsByClassName("ongs2_desc")[0].style.display="none";
			}else if (y==3){
				document.getElementsByClassName("ongs3_desc")[0].style.display="none";
			}else if (y==4){
				document.getElementsByClassName("ongs4_desc")[0].style.display="none";
			}else if (y==5){
				document.getElementsByClassName("ongs5_desc")[0].style.display="none";
			}else if (y==6){
				document.getElementsByClassName("ongs6_desc")[0].style.display="none";
			}else if (y==7){
				document.getElementsByClassName("ongs7_desc")[0].style.display="none";
			}else if (y==8){
				document.getElementsByClassName("ongs8_desc")[0].style.display="none";
			}else if (y==9){
				document.getElementsByClassName("ongs9_desc")[0].style.display="none";
			}else if (y==10){
				document.getElementsByClassName("ongs10_desc")[0].style.display="none";
			}
		}

		function overongs(x, y){
			if (y==1){
				document.getElementsByClassName("encourage_desc1")[0].style.display="block";
			}else if (y==2){
				document.getElementsByClassName("encourage_desc2")[0].style.display="block";
			}else if (y==3){
				document.getElementsByClassName("encourage_desc3")[0].style.display="block";
			}else if (y==4){
				document.getElementsByClassName("encourage_desc4")[0].style.display="block";
			}else if (y==5){
				document.getElementsByClassName("encourage_desc5")[0].style.display="block";
			}
		}
		function outongs(x, y){
			if (y==1){
				document.getElementsByClassName("encourage_desc1")[0].style.display="none";
			}else if (y==2){
				document.getElementsByClassName("encourage_desc2")[0].style.display="none";
			}else if (y==3){
				document.getElementsByClassName("encourage_desc3")[0].style.display="none";
			}else if (y==4){
				document.getElementsByClassName("encourage_desc4")[0].style.display="none";
			}else if (y==5){
				document.getElementsByClassName("encourage_desc5")[0].style.display="none";
			}
		}

		function function_play(){
			alert('1');
			<!--document.getElementById("slider-arrow-right").onclick();-->
			alert('2');
		}


		jQuery(document).ready( function($){

			var newDate = new Date(2018, 2, 31);
			$('#countdown-hands').countdown({until: newDate});

			function pricingSwitcher( elementCheck, elementParent, elementPricing ) {
				elementParent.find('.pts-left,.pts-right').removeClass('pts-switch-active');
				elementPricing.find('.pts-switch-content-left,.pts-switch-content-right').addClass('hidden');

				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.find('.pts-right').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-right').removeClass('hidden');
				} else {
					elementParent.find('.pts-left').addClass('pts-switch-active');
					elementPricing.find('.pts-switch-content-left').removeClass('hidden');
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $(this).parents('.pricing-tenure-switcher'),
					elementPricing = $( elementParent.attr('data-container') );

				pricingSwitcher( elementCheck, elementParent, elementPricing );

				elementCheck.on( 'change', function(){
					pricingSwitcher( elementCheck, elementParent, elementPricing );
				});
			});

			// Get Started From Validation
			var getStartedForm = $('#get-started-form'),
				getStartedFormAlert = getStartedForm.attr('data-alert-type'),
				getStartedFormLoader = getStartedForm.attr('data-loader'),
				getStartedFormResult = getStartedForm.find('.contact-form-result'),
				getStartedFormRedirect = getStartedForm.attr('data-redirect');

			getStartedForm.validate({
				submitHandler: function(form) {

					getStartedFormResult.hide();

					if( getStartedFormLoader == 'button' ) {
						var defButton = $(form).find('button'),
							defButtonText = defButton.html();

						defButton.html('<i class="icon-line-loader icon-spin nomargin"></i>');
					} else {
						$(form).find('.form-process').fadeIn();
					}

					$(form).ajaxSubmit({
						target: getStartedFormResult,
						dataType: 'json',
						resetForm: true,
						success: function( data ) {
							if( getStartedFormLoader == 'button' ) {
								defButton.html( defButtonText );
							} else {
								$(form).find('.form-process').fadeOut();
							}
							if( data.alert != 'error' && getStartedFormRedirect ){
								window.location.replace( getStartedFormRedirect );
								return true;
							}
							if( getStartedFormAlert == 'inline' ) {
								if( data.alert == 'error' ) {
									var alertType = 'alert-danger';
								} else {
									var alertType = 'alert-success';
								}

								getStartedFormResult.addClass( 'alert ' + alertType ).html( data.message ).slideDown( 400 );
							} else {
								getStartedFormResult.attr( 'data-notify-type', data.alert ).attr( 'data-notify-msg', data.message ).html('');
								SEMICOLON.widget.notifications( getStartedFormResult );
							}
						}
					});
				}
			});

			$('[data-pricing-plan]').click( function(){
				getStartedForm.find('#get-started-form-package').val( $(this).attr('data-pricing-plan') );
				getStartedForm.find('#modal-get-started-package').html( $(this).attr('data-pricing-plan') );
			});

			/*****************************************************
												DIEGO jQUery
			*****************************************************/
			//Hero banner height
			$("#hero-banner-main .hero-banner-inner").css({
				"background-position": "50% 0px"
			});

			// var winH = $(window).height(),
      // winW = $(window).width();
			//
		  // function setHeroBannerMainHeight(winHeight, windowWidth){
		  //   $("#hero-banner-main").css({
		  //     "height": winHeight + "px"
		  //   });
		  // }
			//
		  // setHeroBannerMainHeight(winH,winW);
			//
		  // $(window).resize(function(){
		  //   winH = $(window).height();
		  //   winW = $(window).width();
		  //   setHeroBannerMainHeight(winH,winW);
		  // });

			$(".swimlane-slider").handsSwimlane();

			//PROD SPECS
			$(".snav_content_item:gt(0)").hide();
			$(".side_nav_item a.side_nav_inner:eq(0)").addClass('active');

			$(".side_nav_item").on("click", "a.side_nav_inner", function(e){
				e.preventDefault();
				var dataId = $(this).data('option-id');
				$(this).addClass('active').parent().siblings().find('a').removeClass('active');
				$("#"+dataId).fadeIn().siblings().hide();
			});

		});
	</script>

<script>


		//INIT WOWjs
		new WOW().init();

		//INIT Skrollr
		/*
		( function( $ ) {
			// Init Skrollr
			var s = skrollr.init({
					render: function(data) {
							//Debugging - Log the current scroll position.
							//console.log(data.curTop);
					}
			});
		} )( jQuery );
		*/


		$.fn.handsSwimlane = function(options){
			this.each(function(){

				var settings = $.extend({
					swimSection: this,
					currentSlide: 1
				}, options);

				var setTheDots = function(){
				 $(settings.swimSection).find(".swim-inner-content > ul li").map(function(i,e){
					 $(settings.swimSection).find(".dots-slider").append("<li class='dot-slider'></li>");
				 });
					$(settings.swimSection).find(".dots-slider > li:first-child").addClass("active");
				};

				var swimSliding = function(){
					var dot = $(this),
							liIndex = dot.index(),
							swimUl = $(settings.swimSection).find(".swim-inner-content > ul"),
							swimContentLi = swimUl.children("li.swim-list-item-left:eq("+ liIndex +")").position(),
							swimLogosUl = $(settings.swimSection).find(".swim-right-content > ul"),
							swimLogosLi = swimLogosUl.children("li.swim-list-item-right:eq("+ liIndex +")");

							settings.currentSlide = liIndex + 1;

					$(settings.swimSection).find(".dots-slider > li:eq("+ liIndex +")").addClass("active").siblings().removeClass("active");
					swimLogosLi.addClass("active").siblings().removeClass("active");
					swimUl.animate({"left": "-" + swimContentLi.left + "px"});
				};


				var swimSlidingArrows = function(){
					var arrow = $(this).attr('class'),
							swimUl = $(settings.swimSection).find(".swim-inner-content > ul"),
							liItemWidth = $("li.swim-list-item-left").width(),
							slidesLimit = swimUl.find("> li").size();

							if(arrow.indexOf("right") != -1 && settings.currentSlide < slidesLimit){
								settings.currentSlide+=1;
								$(settings.swimSection).find(".dots-slider > li:eq("+ (settings.currentSlide-1) +")").addClass("active").siblings().removeClass("active");
								swimUl.animate({"left": "-=" + liItemWidth + "px"});
							}else if(arrow.indexOf("left") != -1 && settings.currentSlide > 1){
								settings.currentSlide-=1;
								$(settings.swimSection).find(".dots-slider > li:eq("+ (settings.currentSlide-1) +")").addClass("active").siblings().removeClass("active");
								swimUl.animate({"left": "+=" + liItemWidth + "px"});
							}


				};

				setTheDots();
				$(settings.swimSection).find(".dots-slider").on("click", "li", swimSliding);
				$(settings.swimSection).find(".logos-ul").on("click", "li", swimSliding);
				$(settings.swimSection).find(".arrows").on("click", swimSlidingArrows);

			});
		}
		
</script>
<script>


		//INIT WOWjs
		new WOW().init();
/*
		//INIT Skrollr
		( function( $ ) {
			// Init Skrollr
			var s = skrollr.init({
					render: function(data) {
							//Debugging - Log the current scroll position.
							//console.log(data.curTop);
					}
			});
		} )( jQuery );
*/

		$.fn.handsSwimlane = function(options){
			this.each(function(){

				var settings = $.extend({
					swimSection: this,
					currentSlide: 1
				}, options);

				var setTheDots = function(){
				 $(settings.swimSection).find(".swim-inner-content > ul li").map(function(i,e){
					 $(settings.swimSection).find(".dots-slider").append("<li class='dot-slider'></li>");
				 });
					$(settings.swimSection).find(".dots-slider > li:first-child").addClass("active");
				};

				var swimSliding = function(){
					var dot = $(this),
							liIndex = dot.index(),
							swimUl = $(settings.swimSection).find(".swim-inner-content > ul"),
							swimContentLi = swimUl.children("li.swim-list-item-left:eq("+ liIndex +")").position(),
							swimLogosUl = $(settings.swimSection).find(".swim-right-content > ul"),
							swimLogosLi = swimLogosUl.children("li.swim-list-item-right:eq("+ liIndex +")");

							settings.currentSlide = liIndex + 1;

					$(settings.swimSection).find(".dots-slider > li:eq("+ liIndex +")").addClass("active").siblings().removeClass("active");
					swimLogosLi.addClass("active").siblings().removeClass("active");
					swimUl.animate({"left": "-" + swimContentLi.left + "px"});
				};


				var swimSlidingArrows = function(){
					var arrow = $(this).attr('class'),
							swimUl = $(settings.swimSection).find(".swim-inner-content > ul"),
							liItemWidth = $("li.swim-list-item-left").width(),
							slidesLimit = swimUl.find("> li").size();

							if(arrow.indexOf("right") != -1 && settings.currentSlide < slidesLimit){
								settings.currentSlide+=1;
								$(settings.swimSection).find(".dots-slider > li:eq("+ (settings.currentSlide-1) +")").addClass("active").siblings().removeClass("active");
								swimUl.animate({"left": "-=" + liItemWidth + "px"});
							}else if(arrow.indexOf("left") != -1 && settings.currentSlide > 1){
								settings.currentSlide-=1;
								$(settings.swimSection).find(".dots-slider > li:eq("+ (settings.currentSlide-1) +")").addClass("active").siblings().removeClass("active");
								swimUl.animate({"left": "+=" + liItemWidth + "px"});
							}


				};

				setTheDots();
				$(settings.swimSection).find(".dots-slider").on("click", "li", swimSliding);
				$(settings.swimSection).find(".logos-ul").on("click", "li", swimSliding);
				$(settings.swimSection).find(".arrows").on("click", swimSlidingArrows);

			});
		}
		
</script>

</body>
</html>