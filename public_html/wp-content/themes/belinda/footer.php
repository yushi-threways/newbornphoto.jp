<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package belinda
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="size_minako-main">
				<p id="page" class="pagetop"><a href="#page"></a></p>
				<div class="foot-unit">
					<a id="js-foot-box" href="<?php echo esc_url(home_url('/reserve')) ?>" class="foot-reserve">
						<div class="foot-reserve--inner">
							<p class="foot-reserve--ua">RESEVE</p>
							<p class="foot-reserve--ja">ご予約</p>
							<div class="foot-arrow">
								<div id="js-foot-arrow" class="foot-arrow--inner">
									<img src="<?php bloginfo('template_directory'); ?>/images/fot-arrow.png" alt="矢印">
								</div>
							</div>
						</div>
					</a>
					<a id="js-foot-box2" href="<?php echo esc_url(home_url('/contact')) ?>" class="foot-contact">
						<div class="foot-contact--inner">
							<p class="foot-contact--ua">CONTACT</p>
							<p class="foot-contact--ja">お問い合わせ</p>
							<div class="foot-arrow">
								<div id="js-foot-arrow2" class="foot-arrow--inner">
									<img src="<?php bloginfo('template_directory'); ?>/images/fot-arrow.png" alt="矢印">
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<small class="minako-copy">&copy; 2018 Minako Kiyohara. All Rights Reserved</small>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery(function() {
  // mouseoverを使用
  jQuery("#js-foot-box").mouseover(function() {
    jQuery("#js-foot-arrow").animate({width : "160px"}, 800);
  });
  jQuery("#js-foot-box").mouseout(function(){
    jQuery("#js-foot-arrow").animate({width : "0"}, 800);
  });
	jQuery("#js-foot-box2").mouseover(function() {
    jQuery("#js-foot-arrow2").animate({width : "160px"}, 800);
  });
  jQuery("#js-foot-box2").mouseout(function(){
    jQuery("#js-foot-arrow2").animate({width : "0"}, 800);
  });


	jQuery('#gallery').freetile({
		animate: true,
		elementDelay: 15,
		selector: '.gallery-item'
	});

	jQuery('a[href^=#]').click(function(){
		var speed = 500;
		var href= jQuery(this).attr("href");
		var target = jQuery(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		jQuery("html, body").animate({scrollTop:position}, speed);
		return false;
	});

	jQuery('.site-header-img-list').slick({
		dots: false,
		infinite: true,
		speed: 600,
		fade: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
		cssEase: 'linear'
	});

});

var $pageTop = jQuery(".pagetop")
$pageTop.hide();
jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 500) {
				$pageTop.fadeIn();
		} else {
				$pageTop.fadeOut();
		}
});

</script>

</script>

</body>
</html>
