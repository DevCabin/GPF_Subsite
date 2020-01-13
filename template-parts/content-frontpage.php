<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GPF_Subsite
 */

?>
<!-- content-frontpage.php -->


<div class="home-flourish">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/orange-banner.png" alt="">
	<h2><?php the_field('below_banner_headline') ;?></h2>
</div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="cont center-content">
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<!-- // content-frontpage.php -->
