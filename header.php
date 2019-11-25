<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GPF_Subsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/slick/slick-theme.css" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gpf_sub' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="cont">
			<div class="top-nav">
				<div  class="home-link">
					<a href="https://grandprairiefoods.com/"><span>&lt;</span> Grand Prairie Foods</a>
				</div>
				<div class="top-search">
					<!--<input type="search" placeholder="Search">-->
					<?php get_search_form( ); ?>
				</div>
			</div>
			<div class="site-branding">
				<!--div class="logo-bg"></div-->
				<?php the_custom_logo(); ?>
					<?php
						$gpf_sub_description = get_bloginfo( 'description', 'display' );
						if ( $gpf_sub_description || is_customize_preview() ) :
					?>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
			//	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gpf_sub' ); </button>

				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- end container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
