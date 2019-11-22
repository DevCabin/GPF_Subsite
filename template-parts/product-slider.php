<section class="product-slider">
  <div class="cont">

    <?php if (  is_singular('product') ) { ?>
      <h3>you may also like these products</h3>
    <?php } else { ?>
      <h3>Our Products</h3>
    <?php } ?>

    <div class="slider-content">
      <div class="multiple-items">

        <?php
        $args = array(
        'post_type' => 'product',
        );
        $the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
				$product_image_1 = get_field('product_image_1');
				?>

				<a href="<?php the_permalink();?>">
					<div class="prod-single <?php //taglist();?>">
						<div class="prod-single-2 <?php //taglist();?>">
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

      </div> <!-- slider items -->
    </div> <!-- slider-content -->
  </div> <!-- container -->
</section>
