<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GPF_Subsite
 */

$item_number = get_field('item_number');
$format = get_field('format');
$reheating_instructions = get_field('reheating_instructions');
$pack_size = get_field('pack_size');
$storage = get_field('storage');
$ingredient_statement = get_field('ingredient_statement');
$nutrition_facts = get_field('nutrition_facts');

$product_image_1 = get_field('product_image_1');
$product_image_2 = get_field('product_image_2');
$product_image_3 = get_field('product_image_3');
$product_image_4 = get_field('product_image_4');
$product_image_5 = get_field('product_image_5');
$product_image_6 = get_field('product_image_6');

?>
<!-- content-product.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php // gpf_sub_post_thumbnail(); ?>

	<div class="entry-content">

		<div class="cont">

			<div class="product-images">

						<div class="prod-single">
							<img src="<?php echo $product_image_1; ?>" alt="<?php the_title();?> - Product Shot 1">
						</div>

					<?php
					// if there is at least one more image, start pulling them in
					 if ($product_image_2 != "") { ?>

						<div class="prod-single">
							<img src="<?php echo $product_image_2; ?>" alt="<?php the_title();?> - Product Shot 2">
						</div>

						<?php if ($product_image_3 != "") { ?>
							<div class="prod-single">
								<img src="<?php echo $product_image_3; ?>" alt="<?php the_title();?> - Product Shot 3">
							</div>
						<?php }; ?>
						<?php if ($product_image_4 != "") { ?>
							<div class="prod-single">
								<img src="<?php echo $product_image_4; ?>" alt="<?php the_title();?> - Product Shot 4">
							</div>
						<?php }; ?>
						<?php if ($product_image_5 != "") { ?>
							<div class="prod-single">
								<img src="<?php echo $product_image_5; ?>" alt="<?php the_title();?> - Product Shot 5">
							</div>
						<?php }; ?>
						<?php if ($product_image_6 != "") { ?>
							<div class="prod-single">
								<img src="<?php echo $product_image_6; ?>" alt="<?php the_title();?> - Product Shot 6">
							</div>
						<?php }; ?>

					<?php }; // product_image_2 ?>

			</div>

				<div class="product-content">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gpf_sub' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gpf_sub' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</div><!-- cont -->

	<div class="product-details">
		<div class="cont">
			<h2>ABOUT THIS PRODUCT</h2>
			<table>
				<tr>
					<td><span>Item Number:</span> <?php echo $item_number;?></td>
					<td><span>Pack Size:</span> <?php echo $pack_size; ?>

					</td>
				</tr>

				<tr>
					<td><span>Format:</span> <?php echo $format;?></td>
					<td><span>Storage:</span> <?php echo $storage;?></td>
				</tr>

				<tr>
					<td colspan="2" style="padding-top:18px;"><span>Reheating Instructions:</span> <?php echo $reheating_instructions;?>
						<div class="dots"></div>
					</td>
				</tr>
				<tr>
					<td colspan="2"><span>Ingredient Statement:</span>
						<?php echo $ingredient_statement; ?>
					</td>
				</tr>
			</table>
			<div class="facts">
				<span>Nutrition Facts:</span><br>
					<a target="_blank" rel="noopener" href="<?php echo $nutrition_facts;?>">
						<img src="<?php echo $nutrition_facts;?>" alt="Nutrition Facts for <?php the_title(); ?>">
					</a>
			</div>
		</div><!-- cont -->
		<div class="product-reviews">
			<div class="cont">
				<div class="home-flourish product-flourish">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Brown-banner@2x.png" alt="">
					<h2>REVIEWS</h2>
				</div>

			</div><!-- cont -->
		</div><!-- product details -->
	<div class="floater">
		<?php get_template_part( 'template-parts/product', 'slider' ); ?>
	</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gpf_sub_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<!-- // content-product.php -->
