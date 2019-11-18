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

if ( is_page('our-products') | is_page('product-single') ) {
	$footer_color = 'yellow';
}

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="cont">

			<div class="footer-menu <?php echo $footer_color; ?>">
				<div class="menu-flourish">

				<?php if ($footer_color == 'yellow') { ?>
					<img id="yellow-flourish" src="/wp-content/uploads/2019/11/footer-bg-2.png" alt="">
				<?php } else { ?>
					<img id="white-flourish" src="/wp-content/uploads/2019/11/footer-bg-1.png" alt="">
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
				<img src="/wp-content/uploads/2019/11/foot-logo.png" alt="grand prairie foods logo version 2">
				<p>Manufactured by Grand Prairie Foods, inc.<br>
1400 N. Cleveland Ave., Sioux falls, SD 57103    www.grandprairiefoods.com</p>
			</div>

			<div class="site-info">
				<div class="info-left">
					&copy; <?php the_date('Y');?> All Rights Reserved
				</div>
				<div class="info-center">
					<ul>
						<li><a href=""><img src="/wp-content/uploads/2019/11/facebook@2x.png" alt="social icon"></a></li>
						<li><a href=""><img src="/wp-content/uploads/2019/11/twitter@2x.png" alt="social icon"></a></li>
						<li><a href=""><img src="/wp-content/uploads/2019/11/insta@2x.png" alt="social icon"></a></li>
					</ul>
				</div>
        <div class="info-right">
					Site Developed By <a href="https://patientxagency.com">PatientX</a>
				</div>
			</div><!-- .site-info -->
		</div><!-- end cont -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/slick/slick.min.js"></script>

</body>
</html>
