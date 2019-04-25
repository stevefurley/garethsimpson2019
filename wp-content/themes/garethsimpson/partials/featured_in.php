
<?php if ( have_rows( 'text_blocks_and_featured_in', '2') ) : ?>
  <section class='text_blocks_and_featured_in <?php echo is_front_page() ? "" : "overflow";?>'>
    <span class='background-circle'><img src='/wp-content/themes/garethsimpson/assets/img/background-image.svg' alt='background-image' /></span>
        <?php while ( have_rows( 'text_blocks_and_featured_in', '2' ) ) : the_row(); ?>
          <?php if(is_front_page()):?>
            <div class='container blocks-wrapper relative z-index-2 pad-right-30 pad-left-30'>
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
      <?php endif;?>
      <div class='container relative z-index-2 pad-right-30 pad-left-30'>
        <div class='d-block text-center text-md-left pad-bottom-20'>
          <h4 class='h5'><?php the_sub_field( 'featured_in_title' ); ?></h4>
        </div>
        <div class='d-flex featured-logos '>
          <?php if ( have_rows( 'featured_in_logos', '2' ) ) : ?>
            <?php while ( have_rows( 'featured_in_logos', '2' ) ) : the_row(); ?>
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
