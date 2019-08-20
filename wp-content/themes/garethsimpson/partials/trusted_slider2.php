
<?php if ( have_rows( 'trusted_slider', '2' ) ) : ?>
  <section class='trusted_slider with_logos'>
    <div class='container'>

      <?php while ( have_rows( 'trusted_slider', '2'  ) ) : the_row(); ?>



        <div class='col-12 col-lg-10 center no-padding'>
          <h2 class='h1 '><?php the_sub_field( 'title' ); ?> </h2>
        </div>

        <?php
        $trusted_slider = get_field('trusted_slider', '2');
        $i = 0;
        ?>
        <div class='slider-nav2  '>
          <?php foreach($trusted_slider['slider'] as $nav):?>
            <?php $i++; ?>
            <div class='nav-block slide-button-block <?php echo $i == "1" ? "active" : ""; ?>' data-slide="<?php echo $i; ?>" >
              <img class='fluid-img' src='<?php echo $nav['company_logo']["url"]; ?>' alt='<?php echo $nav['company_logo']["alt"]; ?>' />
              <?php if($i == 1):?>
                <span class='sliding-box'></span>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>

        <div class='col-12 col-lg-10 center no-padding'>
          <?php if ( have_rows( 'slider' ) ) : ?>
            <div id="slider2">
              <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
                <div class='inner-slider'>
                  <div class='d-block text-center stars'>
                    <img class='d-inline-block' src='/wp-content/themes/garethsimpson/assets/img/stars.svg' alt='stars'  />
                  </div>

                  <p class='orange-text no-margin h4'>
                    "<?php the_sub_field( 'quote_text' ); ?>..."
                  </p>
                  <div class='quote quote-text'>
                    <img class='left-quote' src='/wp-content/themes/garethsimpson/assets/img/left-quotes.svg' alt='left quote'  />
                    <div class='quote-wrapper'>
                      <?php the_sub_field( 'quote_description' ); ?>
                    </div>
                    <img  class='right-quote' src='/wp-content/themes/garethsimpson/assets/img/right-quotes.svg' alt='right quote'  />
                  </div>
                  <div class='profile-pics'>
                    <?php $profile_photo = get_sub_field('profile_photo'); ?>
                    <?php if ( $profile_photo ) { ?>
                      <div class='d-block text-center image-wrapper'>
                        <img class='d-inline-block fluid-img' src="<?php echo $profile_photo['url']; ?>" alt="<?php echo $profile_photo['alt']; ?>" />
                      </div>
                    <?php } ?>
                    <p class='h6 profile-name'>
                      <?php the_sub_field( 'profile_name' ); ?>
                    </p>
                    <p class='h6 company-name'>
                      <?php the_sub_field( 'profile_and_company' ); ?>
                    </p>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>




      <?php endwhile; ?>



    </div>
  </section>
<?php endif; ?>
