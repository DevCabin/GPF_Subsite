<?php
/**
 *
 * @package GPF_Subsite
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			if (is_page( 'contact' )){
				get_template_part( 'template-parts/content', 'contact' );

				get_template_part( 'template-parts/home', 'cta-2' );

			} elseif (is_page( 'our-products' )) {
				
				get_template_part( 'template-parts/content', 'product-page' );

			}
			else {
				get_template_part( 'template-parts/content', 'page' );

				get_template_part( 'template-parts/home', 'cta-2' );

			}

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
