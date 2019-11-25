<section class="home-cta">
  <div class="cont">
    <div class="dots"></div>

    <div class="cta-content">
      <div class="cta-left">
        <?php the_field('cta_copy'); /*
        <h3>Call-To-Action Headline Lorem Ipsum Dolor
  Amet Con Illumquis Cuscia Et Susdae</h3>
        <p>Ro con porendit vellaccatias eosam hicit acera dolora cus earchil int aut mi, sincimet et at. Alit, venti optatqui tes a voluptatem fuga. Urepedio. Usam fuga. Et et esequam, quaspel mod quid modiae plamendignam es il illumquis cuscia doloreriam facesti onsersp erchitempos esecto eos doloruptas sequodis ra debit doluptur susdae nusdam libus, sitis adit, experum audis eos as errum eos doles dolupit atisimenet utem fugit fuga.</p>
        */ ?>
        <a class="btn" href="<?php the_field('cta_button_link'); ?>"><?php the_field('cta_button_text'); ?></a>
      </div>

      <div class="cta-right">
        <img src="<?php the_field('cta_image'); ?>" alt="Image of Featured Product">
      </div>


    </div> <!-- cta-content -->

    <div class="dots"></div>
  </div> <!-- container -->
</section>
