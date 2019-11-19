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
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Brown-banner@2x.png" alt="">
	<?php // custom field for title ;?>
	<h2>OUR SITE TITLE</h2>
</div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="cont center-content">
	<div class="entry-content">
		<?php
		the_content();
		?>
	</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<!-- // content-frontpage.php -->
