<?php get_header(); ?>
<?php include(locate_template('/partials/blog-header.php')); ?>
<section id="content" role="main">
  <div class='container no-padding'>
    <div class='col-12 col-md-11 col-lg-8 center single-post-content pad-top-50'>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'entry' ); ?>
        <div class=' d-flex align-item-center  pad-top-30 addtoany-div'>
          <span class='pad-right fs-4 pad-right-15  no-margin'>Share This</span><?php echo do_shortcode('[addtoany]');?>

        </div>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>

      <?php endwhile; endif; ?>

    </div>
  </div>
  <span class='d-block pad-bottom-60 pad-top-40-m'></span>
  <section class="relative flexible-section orange_bg block-number-2 ">
    <div class="container no-padding align-content-center relative z-index-2 overflow">
      <div class=" d-block  center  d-flex flex-wrap justify-content-md-between align-items-md-center  ">
        <div class=" pad-bottom-40  pad-bottom-0-m d-block block-padding mobile-100 text-align-center text-left-m tablet-50 desktop-50">
          <h2 class="font-600"><?php the_field( 'contact_form_title' ); ?></h2>
          <h4 class="font-600"><?php the_field( 'contact_form_sub_title' ); ?></h4>
          <img class='pad-top-20 pad-bottom-30' src='/wp-content/themes/garethsimpson/assets/img/contact-logo.svg' alt='logo'  />
          <a class='d-block email pad-bottom-10' href='mailto:<?php the_field( 'email_address', 'option' ); ?>'><?php the_field( 'email_address', 'option' ); ?></a>
          <a class='tel d-block' href='tel:<?php the_field( 'telephone_number', 'option' ); ?>'><?php the_field( 'telephone_number', 'option' ); ?></a>
        </div>
        <div class=" pad-bottom-30 pad-bottom-0-m d-block block-padding mobile-100 text-left tablet-50 desktop-50">
          <h3 class="font-600">Free SEO Audit</h3>
          <h4 class="font-600">Submit your details below</h4>
          <div class='custom-form'>
            <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
