
<?php if ( have_rows( 'trusted_slider', '2' ) ) : ?>
  <section class='trusted_slider'>
    <div class='container'>
      <div class='col-12 col-lg-10 center no-padding'>
        <?php while ( have_rows( 'trusted_slider', '2'  ) ) : the_row(); ?>
          <h2 class='h1'><?php the_sub_field( 'title' ); ?></h2>
          <?php if ( have_rows( 'slider' ) ) : ?>
            <div id="slider">
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
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>

        <?php $trusted_slider = get_field('trusted_slider', '2');?>
        <div class='slider-nav'>
          <?php foreach($trusted_slider['slider'] as $nav):?>
            <div class='nav-block'>
              <?php $profile_photo = $nav['profile_photo']; ?>
              <?php if ( $profile_photo ) { ?>
                <div class='d-block text-center image-wrapper'>
                  <img class='d-inline-block fluid-img' src="<?php echo $profile_photo['url']; ?>" alt="<?php echo $profile_photo['alt']; ?>" />
                </div>

              <?php } ?>
              <p class='h6 profile-name'>
                <?php echo $nav['profile_name']; ?>
              </p>
              <p class='h6 company-name'>
                <?php echo $nav['profile_and_company']; ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
