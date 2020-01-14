<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GPF_Subsite
 */

?>
<!-- content-content.php -->
<div class="cont">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php gpf_sub_post_thumbnail(); ?>

	<div class="entry-content contact">
			<div class="contact-left">
				<?php the_content(); ?>
			</div>
			<div class="contact-right">
				<?php the_field('contact_form');?>
			</div>

			<?php if (get_field('add_a_map') == true) { ?>
				<div class="contact-map">
					<?php the_field('map_area_code');?>
				</div>
			<?php }; ?>
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
<!-- // content-contact.php -->
</div>
