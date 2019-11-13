<?php
/**
 * The template for displaying the front page
 * @package GPF_Subsite
 */

get_header();
?>
<!-- front page -->
	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

				get_template_part( 'template-parts/main', 'banner' );

				get_template_part( 'template-parts/content', 'frontpage' );

				get_template_part( 'template-parts/product', 'slider' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary ggg -->
<!--  // front page -->
<?php
// get_sidebar();
get_footer();
