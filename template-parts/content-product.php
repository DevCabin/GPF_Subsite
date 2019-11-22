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


function taglist2(){
		$terms = get_the_terms( get_the_ID(), 'ingredient' );
				foreach ( $terms as $term ) {
				$tagname = $term->name;
				echo $tagname;
				echo " ";
			};
			$types = get_the_terms( get_the_ID(), 'type_of_food' );
					foreach ( $types as $type ) {
					$typename = $type->name;
					echo $typename;
					echo " ";
				};
			};
// In case we need to show "related" products or
// something. Mainly used on product home page.


/*
 * Prepend Facebook, Twitter and Google+ social share buttons to the post's content
 *
 */
function add_share_buttons_before_content( ) {

    global $post;

    // Get the post's URL that will be shared
    $post_url   = urlencode( esc_url( get_permalink($post->ID) ) );

    // Get the post's title
    $post_title = urlencode( $post->post_title );

    // Compose the share links for Facebook, Twitter and Google+
    $facebook_link    = sprintf( 'https://www.facebook.com/sharer/sharer.php?u=%1$s', $post_url );
    $twitter_link     = sprintf( 'https://twitter.com/intent/tweet?text=%2$s&url=%1$s', $post_url, $post_title );
		$pinterest_link     = sprintf( 'http://pinterest.com/pin/create/button/?url=u=%1$s', $post_url );

		$img_path = get_stylesheet_directory_uri();


    // Wrap the buttons
    $output = '<ul>';

        // Add the links inside the wrapper

        $output .= '<li><a target="_blank" href="' . $facebook_link . '"><img src="' . $img_path . '/assets/img/Icon-awesome-facebook-f.png" alt=""></a></li>';
				$output .= '<li><a target="_blank" href="' . $twitter_link . '"><img src="' . $img_path . '/assets/img/Icon-metro-twitter.png" alt=""></a></li>';
				$output .= '<li><a target="_blank" href="' . $pinterest_link . '"><img src="' . $img_path . '/assets/img/Icon-metro-pinterest.png" alt=""></a></li>';
				$output .= '<li><a target="_blank" href="https://www.instagram.com/grandprairiefoods/"><img src="' . $img_path . '/assets/img/Icon-awesome-instagram.png" alt=""></a></li>';

    $output .= '</ul>';

    // Return the buttons and the original content
    echo $output;
}

?>
<!-- content-product.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<div class="cont">

			<div class="breadcrumbs">
				<ul>
					<li>
						<a href="/">Home</a> /
					</li>
					<li>
						<a href="/our-products/">All Products</a> /
					</li>
					<li>
						<?php the_title();?>
					</li>
				</ul>
			</div>

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
				<?php the_content(); ?>

				<div class="single-social">
					<span>Share</span>
						<?php add_share_buttons_before_content(); ?>

				</div>

				<hr>
				<div class="review-area-one prod-home-reviews">
					<?php // echo do_shortcode( '[RICH_REVIEWS_SHOW]' ); ?>

					<?php echo do_shortcode( '[RICH_REVIEWS_SNIPPET category="page"]' ); ?>

					<?php // echo do_shortcode( '[RICH_REVIEWS_FORM]' ); ?>
				</div>

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
		</div><!-- product details -->
			<div class="product-reviews">
				<div class="cont">
					<div class="home-flourish product-flourish">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Brown-banner@2x.png" alt="">
							<h2>REVIEWS</h2>
					</div>
						<?php echo do_shortcode( '[RICH_REVIEWS_SHOW]' ); ?>

						<div id="show-review">
							LEAVE A REVIEW
						</div>
						<div id="reviews-form" style="display:none;">
							<div id="close-review">CLOSE</div>
							<?php echo do_shortcode( '[RICH_REVIEWS_FORM]' ); ?>
						</div>
				</div><!-- cont -->
			</div><!-- product reviews -->
			<div class="floater">
				<?php get_template_part( 'template-parts/product', 'slider' ); ?>
			</div>


	</div><!-- .entry-content -->
<?php /*
	<footer class="entry-footer">
		<?php gpf_sub_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	*/ ?>
</article><!-- #post-<?php the_ID(); ?> -->
<!-- // content-product.php -->
