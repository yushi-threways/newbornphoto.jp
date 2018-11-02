<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belinda
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="top-a-p animate-on-70 animate-opacity animate-delay-1 animate-move-bottom-1">
				<div class="top-about animate-on-70 animate-opacity animate-delay-1 animate-move-bottom-1">
					<div class="top-unit top-unit-about">
						<div class="top-left top-unit-text">
							<h2>What’s new born photo??</h2>
							<p class="top-about-desc">
								ぐっすり眠った状態で、おなかなの中にいた時の、<br class="sp-only">
								まあるく柔軟性のある体だからできるポージングで撮影します。
							</p>
							<p class="top-about-desc-eu">
								<img src="<?php bloginfo("template_directory"); ?>/images/top-about-desc.png" alt="">
							</p>
							<a href="<?php echo esc_url(home_url("/about")); ?>">Read More</a>
						</div>
						<div class="top-right top-unit-img top-unit-img-right">
							<img src="<?php bloginfo('template_directory'); ?>/images/top-a-img.png" alt="">
						</div>
					</div>
				</div>
				<div class="top-p top-photo animate-on-70 animate-opacity animate-delay-1 animate-move-bottom-1">
					<div class="top-unit">
						<div class="top-right top-unit-text">
							<h2>出張ニューボーンフォト</h2>
							<p class="top-about-desc">
								赤ちゃんにはもちろん<br>
								ママにも負担のない短時間での撮影を追求しています。<br>
								赤ちゃんの一眠りの間、<br class="pc-only">お宅にお邪魔してから、<br>
								片付けまで「２時間」を目安に撮影します。
							</p>
							<p class="top-about-desc-eu">
								<img src="<?php bloginfo('template_directory'); ?>/images/top-photo-desc.png" alt="">
							</p>
							<a href="<?php echo esc_url(home_url("/plan")); ?>">Read More</a>
						</div>
						<div class="top-left top-unit-img top-unit-img-left">
							<img src="<?php bloginfo('template_directory'); ?>/images/photo_main.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="top-gallery">
				<div class="top-gallery-inner size_minako-content">
					<ul>
						<?php

		        $args = Array(
		        'post_type' => 'gallery',
		        'posts_per_page' => 6,
		         );
		        $the_query = new WP_Query($args);
		        $index = 0;
		        if($the_query -> have_posts()):
		          while($the_query -> have_posts()): $the_query -> the_post(); $index++; ?>
		          <li class="top-gallery-list top-gallery-list-<?php echo $index ?> animate-on-70 animate-opacity animate-delay-<?php echo $index ?> animate-move-bottom-<?php echo $index ?>">
								<div class="top-gallery-list-img">
									<?php
										$filed = get_field('image');
										if($filed){ ?>
											<img src="<?php echo $filed['url']; ?>" alt="<?php echo get_the_title(); ?>">
									<?php } ?>
								</div>
		          </li>

		        <?php endwhile; endif; wp_reset_postdata(); ?>
					</ul>

					<p>
						Happy new born...
						<br>
						<a href="<?php echo esc_url(home_url("/gallery")); ?>">Read More</a>
					</p>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
