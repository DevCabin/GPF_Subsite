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
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/orange-banner.png" alt="">
			<h2>OUR PRODUCTS</h2>
		</div>
	</header><!-- .entry-header -->

			<?php
			$args = array(
			'post_type' => 'product',
			);
			$the_query = new WP_Query( $args );


			function taglist(){

				$terms = get_the_terms( get_the_ID(), 'ingredient' );
				$types = get_the_terms( get_the_ID(), 'type_of_food' );

				//var_dump($terms);

				if (is_array($terms) || is_object($terms))
				{
					foreach ( $terms as $term ) {
						$term = $term->slug;
						 echo $term;
						 echo " ";
					};
				}

				if (is_array($types) || is_object($types)) {
					foreach ( $types as $type ) {
						$type = $type->slug;
						 echo $type;
						 echo " ";
					};
				}
			};


			function typesort(){
				$types = get_the_terms( get_the_ID(), 'type_of_food' );
				if (is_array($types) || is_object($types)) {
						foreach ( $types as $type ) {
						$typeslug = $type->slug;
						$typename = $type->name;
						echo "<option value='.";
						echo $typeslug;
						echo "'>";
						echo $typename;
						echo "</option>";
						};
					};
				};


				function ingredientsort(){
					$terms = get_the_terms( get_the_ID(), 'ingredient' );
					if (is_array($terms) || is_object($terms)) {
 						 foreach ( $terms as $term ) {
 						 $termslug = $term->slug;
						 $termname = $term->name;
							echo "<option value='.";
							echo $termslug;
							echo "'>";
							echo $termname;
							echo "</option>";
							};
						};
					};
					?>

		<div class="entry-content products" style="min-height:800px;">


				<div class="product-sort custom-select">
					<div class="prod-desc">
						Sort By
					</div>
					<select class="filters-select" id="food_types">
						<option value="*">Food Types (show all)</option>
						<?php
						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
						typesort();
						endwhile; endif;
						wp_reset_query();
						?>
					</select>

					<select class="filters-select" id="ingredient_types">
						<option value="*">Main Ingredient (show all)</option>
						<?php
						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
						ingredientsort();

						// could not remove duplicates VIA php
						// JS Solution to remove from UI in main.js

						endwhile; endif;
						wp_reset_query();
						?>
					</select>


				</div><!-- product-sort custom-select -->

			<div class="product-grid">

				<?php
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
				$product_image_1 = get_field('product_image_1');
				?>

				<a href="<?php the_permalink();?>">
					<div class="prod-single <?php taglist();?>">
						<div class="prod-single-2 <?php taglist();?>">
						<div class="img-wrap" style="background-image:url(<?php echo $product_image_1; ?>);">
							<img src="<?php echo $product_image_1; ?>" alt="<?php the_title() ;?> - Product Image" style="display:none;">
						</div>
						<p><?php the_title() ;?></p>
						<div class="prod-home-reviews">
							<?php echo do_shortcode( '[RICH_REVIEWS_SNIPPET category="page"]' ); ?>
						</div>
					</div>
					</div>
				</a>
			<?php endwhile; else: ?> <p>Sorry, there are no products to display</p> <?php endif; ?>

				<?php wp_reset_query(); ?>



			</div>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
<!-- // content-products.php -->
</div>
