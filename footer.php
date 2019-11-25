<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GPF_Subsite
 */

$footer_color = 'default';

if ( is_page('our-products') | is_page('product-single') | is_singular('product') ) {
	$footer_color = 'yellow';

}

$footer_logo = ot_get_option( 'footer_area_logo', 'Default Value');
$physical_address = ot_get_option( 'physical_address' );
$facebook_url = ot_get_option( 'facebook_url' );
$twitter_url = ot_get_option( 'twitter_url' );
$instagram_url = ot_get_option( 'instagram_url' );
//$pinterest_url = ot_get_option( 'pinterest_url' );
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="cont">

			<div class="footer-menu <?php echo $footer_color; ?>">
				<div class="menu-flourish">

				<?php if ($footer_color == 'yellow') { ?>
					<img id="yellow-flourish" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Yellow-banner@2x.png" alt="">
				<?php } else { ?>
					<img id="white-flourish" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white-footer-nav-block@2x.png" alt="">
				<?php }; ?>

					<nav id="footer-navigation" class="secondary-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						) );
						?>
					</nav><!-- #site-navigation -->

				</div>

			</div>

			<div class="pre-footer">
				<img src="<?php echo $footer_logo; ?>" alt="logo version 2">
				<?php echo $physical_address; ?>

			</div>

			<div class="site-info">
				<div class="info-left">
					&copy; <?php the_date('Y');?> All Rights Reserved
				</div>
				<div class="info-center">
					<ul>
						<li><a href="<?php echo $facebook_url; ?>"><img src="/wp-content/uploads/2019/11/facebook@2x.png" alt="social icon"></a></li>
						<li><a href="<?php echo $twitter_url; ?>"><img src="/wp-content/uploads/2019/11/twitter@2x.png" alt="social icon"></a></li>
						<?php if ($instagram_url != "") {?>
							<li><a href="<?php echo $instagram_url; ?>"><img src="/wp-content/uploads/2019/11/insta@2x.png" alt="social icon"></a></li>
						<?php } ?>
					</ul>
				</div>
        <div class="info-right">
					Site Developed By <a href="https://patientxagency.com"><img id="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/PX_cmyk_logo_WHITE-TEXT@2x.png" alt="Patient X Logo"></a>
				</div>
			</div><!-- .site-info -->
		</div><!-- end cont -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/slick/slick.min.js"></script>


</body>
</html>
