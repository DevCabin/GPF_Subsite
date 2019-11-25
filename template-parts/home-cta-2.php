<?php
if ( !function_exists( 'ot_get_option' ) ) :
  echo "<h3>This section requires the plugin OptionTree to function</h3>";
endif;

$cta_title = ot_get_option( 'pre_footer_cta_title' );
$cta_img = ot_get_option( 'pre_footer_cta_image' );
$cta_heading = ot_get_option( 'pre_footer_cta_heading' );
$cta_text = ot_get_option( 'pre_footer_cta_text' );
$cta_button_text = ot_get_option( 'pre_footer_cta_button_text' );
$cta_button_link = ot_get_option( 'pre_footer_cta_button_link' );

?>
<section class="home-cta-2">
  <div class="cont">

    <div class="home-flourish-2">
      <img src="/wp-content/uploads/2019/11/home-flourish.png" alt="">
      <h3><?php echo $cta_title; ?></h3>
    </div>

    <div class="cta-2-content">
      <div class="cta-2-left">
        <a href="<?php echo $cta_button_link; ?>">
          <img src="<?php echo $cta_img; ?>" alt="Product Guide Placeholder">
        </a>

      </div>

      <div class="cta-2-right">
        <h4><?php echo $cta_heading; ?></h4>
        <?php echo $cta_text; ?>
        <a class="btn" href="<?php echo $cta_button_link; ?>"><?php echo $cta_button_text; ?></a>
      </div>


    </div> <!-- cta-2-content -->

<div class="yellow-flourish">

</div>

  </div> <!-- container -->
</section>
<div class="blue-block"></div>
