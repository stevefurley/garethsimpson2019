<?php get_header(); ?>

<?php if ( have_rows( 'text_blocks_and_featured_in' ) ) : ?>
  <section class='text_blocks_and_featured_in'>
    <span class='background-circle'><img src='/wp-content/themes/garethsimpson/assets/img/background-image.svg' alt='background-image' /></span>
    <div class='container blocks-wrapper relative z-index-2 pad-right-30 pad-left-30'>
      <?php while ( have_rows( 'text_blocks_and_featured_in' ) ) : the_row(); ?>
        <div class='leftside'>
          <h2 class='h1 font-600'><?php the_sub_field( 'leftside_title' ); ?></h2>
        </div>
        <article class='rightside'>
          <h4><?php the_sub_field( 'rightside_title' ); ?></h4>
          <div class='h6'>
            <?php the_sub_field( 'description' ); ?>
          </div>
        </article>
      </div>
      <div class='container relative z-index-2 pad-right-30 pad-left-30'>
        <div class='d-block text-center text-md-left pad-bottom-20'>
          <h4 class='h5'><?php the_sub_field( 'featured_in_title' ); ?></h4>
        </div>
        <div class='d-flex featured-logos '>
          <?php if ( have_rows( 'featured_in_logos' ) ) : ?>
            <?php while ( have_rows( 'featured_in_logos' ) ) : the_row(); ?>
              <?php $logos = get_sub_field( 'logos' ); ?>
              <?php if ( $logos ) { ?>
                <div class='image-wrapper'>
                  <img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
                </div>
              <?php } ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <p class='h7 text-md-right text-center d-block pad-top-15'>
          Plus manymore
        </p>
      </div>
    <?php endwhile; ?>
  </section>
<?php endif; ?>



<?php if ( have_rows( 'purple_section' ) ) : ?>
  <section class='purple_section'  id='consultancy'>
    <span class='background-image'><img src='/wp-content/themes/garethsimpson/assets/img/purple-background2.svg' alt='background image' /></span>
    <div class='container'>
      <?php while ( have_rows( 'purple_section' ) ) : the_row(); ?>

        <div class='orange-block'>
          <p class='no-margin h3'>
            <?php the_sub_field( 'learn_more_text' ); ?>
          </p>
          <img src='/wp-content/themes/garethsimpson/assets/img/down-arrow.svg' alt='down-arrow' />
        </div>
        <div class='main-text'>
          <h2 class='h1'><?php the_sub_field( 'title' ); ?></h2>
          <h3><?php the_sub_field( 'sub_title' ); ?></h3>
        </div>
        <?php if ( have_rows( 'services' ) ) : ?>
          <div class='pull-out'>
            <div class='service-blocks d-flex flex-wrap'>
              <?php while ( have_rows( 'services' ) ) : the_row(); ?>
                <?php $icon = get_sub_field('icon'); ?>
                <div class='col-12 col-md-6 col-lg-4 service-block'>
                  <div class='inner'>
                    <div class='heading'>
                      <img src='/wp-content/themes/garethsimpson/assets/img/icons/<?php echo $icon; ?>.svg' alt='<?php echo $icon; ?>' />
                      <h4><?php the_sub_field( 'title' ); ?></h4>
                    </div>
                    <div class='h6'>
                      <?php the_sub_field( 'description' ); ?>
                    </div>
                    <a class='read-more-version-2 h6 ' href='<?php the_sub_field( 'link' ); ?>'>Learn more</a>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>


<?php if ( have_rows( 'trusted_slider' ) ) : ?>
  <section class='trusted_slider'>
    <div class='container'>
      <div class='col-12 col-lg-10 center no-padding'>
        <?php while ( have_rows( 'trusted_slider' ) ) : the_row(); ?>
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

        <?php $trusted_slider = get_field('trusted_slider');?>
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

<?php if ( have_rows( 'about_me_section' ) ) : ?>
  <section class='about_me_section' id='about'>
    <?php while ( have_rows( 'about_me_section' ) ) : the_row(); ?>
      <?php $gareth_mobile_photo = get_sub_field('gareth_mobile_photo');?>
      <div class='mobile-photo'>
        <img src='<?php echo $gareth_mobile_photo["url"]; ?>' alt='<?php echo $gareth_mobile_photo["alt"]; ?>' />
      </div>
      <div class='container d-flex flex-wrap'>
        <div class='col-12 col-md-5 col-lg-5'>
          <h2 class='h1'><?php the_sub_field( 'title' ); ?></h2>
          <h3><?php the_sub_field( 'sub_title' ); ?></h3>
          <div class='tiny-text-desc h6'>
            <?php the_sub_field( 'description' ); ?>
          </div>
          <div class='d-block button-wrapper'>
            <a class='small read-more d-inline-block' href='<?php the_sub_field( 'custom_link' ); ?>'><?php the_sub_field( 'custom_link_text' ); ?></a>
          </div>

          <?php if ( have_rows( 'social_link', 'option' ) ) : ?>
            <div class='social-links'>
              <p class='h7 follow-me'>
                Follow me
              </p>
              <?php while ( have_rows( 'social_link', 'option' ) ) : the_row(); ?>
                <?php $icon = get_sub_field('icon');?>
                <a href='<?php the_sub_field( 'link' ); ?>' taget='_blank'><img src='/wp-content/themes/garethsimpson/assets/img/icons/<?php echo $icon;?>.svg' alt='<?php echo $icon; ?>' /></a>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class='col-12 col-md-7 col-lg-7 rightside-block'>
          <p class='rightside-title h5'>
            <?php the_sub_field( 'rightside_title' ); ?>
          </p>
          <?php if ( have_rows( 'bold_title_and_text' ) ) : ?>
            <div class='white-box'>
              <?php while ( have_rows( 'bold_title_and_text' ) ) : the_row(); ?>
                <div class='boxes h6'>
                  <?php echo the_sub_field('bold_text_and_titles'); ?>
                </div>
              <?php endwhile; ?>
            </div>

          <?php endif; ?>
        </div>
      </div>
      <?php $gareth_photo = get_sub_field( 'gareth_photo' ); ?>
      <?php if ( $gareth_photo ) { ?>
        <div class='gareth-photo'>
          <img src="<?php echo $gareth_photo['url']; ?>" alt="<?php echo $gareth_photo['alt']; ?>" />
        </div>
      <?php } ?>
      <div class='purple-gareth-section'>

        <div class='container purple-box-wrapper'>
          <?php if ( have_rows( 'purple_background_blocks' ) ) : ?>
            <div class='purple-wrapper'>
              <?php while ( have_rows( 'purple_background_blocks' ) ) : the_row(); ?>
                <div class='purple-block h6'>
                  <img src='/wp-content/themes/garethsimpson/assets/img/star.svg' alt='star'  /><?php the_sub_field( 'blocks' ); ?>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endwhile; ?>
  </section>
<?php endif; ?>


<?php if ( have_rows( 'combining_technical' ) ) : ?>
  <section class='combining_technical'>
    <?php while ( have_rows( 'combining_technical' ) ) : the_row(); ?>
      <div class='container d-flex flex-wrap align-items-center'>
        <div class='col-12 col-md-6 col-lg-4 col-xl-5 pad-bottom-40 pad-bottom-0-m'>
          <h2 class='h1'><?php the_sub_field( 'title' ); ?></h2>
          <div class='h6 description'>
            <?php the_sub_field( 'description' ); ?>
          </div>
          <div class='d-block'>
            <a class='small read-more d-inline-block' href='<?php the_sub_field( 'custom_link' ); ?>'><?php the_sub_field( 'custom_link_text' ); ?></a>
          </div>

        </div>
        <div class='col-12 col-md-6 col-lg-8 col-xl-7 d-block text-center'>
          <?php $rightside_image = get_sub_field( 'rightside_image' ); ?>
          <?php if ( $rightside_image ) { ?>
            <img class='fluid-img d-inline-block' src="<?php echo $rightside_image['url']; ?>" alt="<?php echo $rightside_image['alt']; ?>" />
          <?php } ?>
        </div>
      </div>
    <?php endwhile; ?>
  </section>
<?php endif; ?>




<?php get_footer(); ?>
