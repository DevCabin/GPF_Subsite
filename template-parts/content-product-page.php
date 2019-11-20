<?php
/**
 *
 * @package GPF_Subsite
 */

?>
<!-- content-products.php -->
<div class="cont">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="home-flourish product-flourish">
		<!--img src="/wp-content/uploads/2019/11/home-flourish.png" alt=""-->
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Brown-banner@2x.png" alt="">

			<?php // custom field for title ;?>
			<h2>OUR PRODUCTS</h2>
		</div>
	</header><!-- .entry-header -->

	<?php gpf_sub_post_thumbnail(); ?>

	<div class="entry-content products" style="min-height:800px;">
		<div class="product-sort custom-select">

				<select class="filters-select">
					<option value="*">Show All</option>
					<option value=".chicken">chicken</option>
					<option value=".beef">beef</option>
					<option value=".taco">taco</option>
				</select>

		</div>


<style>



</style>
<script>


</script>
			<div class="product-grid">

					<div class="prod-single chicken" data-category="chicken">
						<img src="/wp-content/uploads/2019/11/1X2U9909_CC.png" alt="Product Name">
						<p>CHICKEN lorem ipsum doler sit</p>
						@ @ @ @ @
					</div>

					<div class="prod-single beef" data-category="beef">
						<img src="/wp-content/uploads/2019/11/1X2U9909_CC.png" alt="Product Name">
						<p>BEEF lorem ipsum doler sit</p>
						@ @ @ @ @
					</div>

					<div class="prod-single taco" data-category="taco">
						<img src="/wp-content/uploads/2019/11/1X2U9909_CC.png" alt="Product Name">
						<p>TACO lorem ipsum doler sit</p>
						@ @ @ @ @
					</div>



					<div class="prod-single chicken" data-category="chicken">
						<img src="/wp-content/uploads/2019/11/1X2U9909_CC.png" alt="Product Name">
						<p>CHICKEN lorem ipsum doler sit</p>
						@ @ @ @ @
					</div>

					<div class="prod-single taco" data-category="taco">
						<img src="/wp-content/uploads/2019/11/1X2U9909_CC.png" alt="Product Name">
						<p>TACO lorem ipsum doler sit</p>
						@ @ @ @ @
					</div>


			</div>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'gpf_sub' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
<!-- // content-products.php -->
</div>
