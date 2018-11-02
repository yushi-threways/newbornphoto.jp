<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belinda
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="size_minako-main size_minako-gallery">
				<div class="size_minako-content">
					<div class="gallery">
						<div class="gallery-inner">
							<div id="gallery">
								<?php

								$args = Array(
								'post_type' => 'gallery',
								'posts_per_page' => -1,
								 );
								$the_query = new WP_Query($args);
								$index = 0;
								if($the_query -> have_posts()):
									while($the_query -> have_posts()): $the_query -> the_post(); $index++; ?>

										<?php
											$filed = get_field('image');
											if($filed){ ?>
											<div class="gallery-item gallery-item-<?php echo $index ?> animate-on-70 animate-opacity animate-delay-1 animate-move-bottom-1" style="width:<?php echo $filed['width']; ?>px; height:<?php echo $filed['height']; ?>px;">
												<a href="<?php echo $filed['url']; ?>" data-lity>
													<img src="<?php echo $filed['url']; ?>" alt="<?php echo get_the_title(); ?>">
												</a>
											</div>
										<?php } ?>
								<?php endwhile; endif; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
