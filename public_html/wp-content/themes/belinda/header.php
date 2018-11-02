<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package belinda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'belinda' ); ?></a>

	<header id="masthead" class="site-header <?php if ( is_home() || is_front_page() ) : ?> site-header-home<?php else: ?> site-header-content<?php endif; ?>">
		<div class="<?php if ( is_home() || is_front_page() ) : ?><?php else: ?> site-header-content-inner<?php endif; ?>">
			<div class="site-branding<?php if ( is_home() || is_front_page() ) : ?> site-branding-home<?php else: ?> site-branding-content<?php endif; ?>">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$belinda_description = get_bloginfo( 'description', 'display' );
				if ( $belinda_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $belinda_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<?php if ( is_home() || is_front_page() ) : ?>
				<div class="site-header-img">
					<div class="site-header-img-inner">
						<div class="site-header-img-list">
						  <div><img src="<?php bloginfo('template_directory'); ?>/images/top-main.png" alt=""></div>
						  <div><img src="<?php bloginfo('template_directory'); ?>/images/top-main2.png" alt=""></div>
						  <div><img src="<?php bloginfo('template_directory'); ?>/images/top-main3.png" alt=""></div>
							<div><img src="<?php bloginfo('template_directory'); ?>/images/top-main4.png" alt=""></div>
						  <div><img src="<?php bloginfo('template_directory'); ?>/images/top-main5.png" alt=""></div>
						</div>

						<nav id="site-navigation" class="main-navigation minako-navigation-home">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'belinda' ); ?>
								<i></i>
								<i></i>
								<i></i>
							</button>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="top-news">
						<?php

						$args = Array(
						'post_type' => 'news',
						'posts_per_page' => 1,
						 );
						$the_query = new WP_Query($args);
						if($the_query -> have_posts()):
							while($the_query -> have_posts()): $the_query -> the_post(); ?>
							<p>
								<span class="top-news-time"><?php echo get_the_date(); ?></span><span class="top-news-text"><?php echo get_the_content(); ?></span>
							</p>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
				</div>

			<?php else: ?>
				<nav id="site-navigation" class="main-navigation minako-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'belinda' ); ?>
						<i></i>
						<i></i>
						<i></i>
					</button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>

				</nav><!-- #site-navigation -->

			<?php endif; ?>

		</div>
		<a href="<?php echo esc_url(home_url("/reserve")); ?>" class="nav-reserve">
			<img src="<?php bloginfo('template_directory'); ?>/images/ribon_off.png" alt="reserve">
		</a>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
