<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GPF_Subsite
 */

get_header();
?>
<!-- 404.php -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<div class="page-content">
					<div class="cont">

						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gpf_sub' ); ?></h1>
						</header><!-- .page-header -->
						<div style="padding:0 4%;">
							<p><?php esc_html_e( 'It looks like nothing was found. Maybe check out our Products below or try a search?', 'gpf_sub' ); ?></p>

							<h3>Search Form:</h3>
							<div style="width:33%;">
								<?php get_search_form( ); ?>
							</div>
							<br>
							<hr>

							<h2>Our Products</h2>
						  <?php
							$args = array(
								'post_type' => 'product',
							);
							$the_query = new WP_Query( $args );

							if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
							$product_image_1 = get_field('product_image_1');
							?>

							<a href="<?php the_permalink();?>">
								<div class="prod-single">
									<div class="img-wrap">
										<img src="<?php echo $product_image_1; ?>" alt="<?php the_title() ;?> - Product Image">
									</div>
									<p><?php the_title() ;?></p>
								</div>
							</a>
						<?php endwhile; else: ?> <p>Sorry, there are no products to display</p> <?php endif; ?>
							<?php wp_reset_query();?>
						</div>
				</div><!-- cont -->
				<div style="clear:both;float:left;width:100%;">
					<?php
					get_template_part( 'template-parts/home', 'cta-2' );
					?>
				</div>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
