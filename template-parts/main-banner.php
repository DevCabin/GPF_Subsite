<section class="main-banner" style="background-image:url('<?php the_field('banner_bg_img'); ?>">
  <div class="cont">
    <div class="banner-content">
      <?php the_field('banner_text');
      /*
      <h2>the complete grab n’ go breakfast</h2>
      <p>Ro con porendit vellaccatias eosam hicit acera dolora cus earchil int aut mi, sincimet et at.</p>
      */
      ?>
      <a class="btn" href="<?php the_field('banner_button_link') ;?>">
        <?php the_field('banner_button_text');?>
      </a>
    </div> <!-- banner-content -->
  </div> <!-- container -->
</section>
