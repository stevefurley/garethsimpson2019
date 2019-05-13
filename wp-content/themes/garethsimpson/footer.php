<?php $display_footer_3_step_contact_form = get_field('display_footer_3_step_contact_form'); ?>
<?php if($display_footer_3_step_contact_form == 'yes'):?>
  <?php if(!is_home()):?>
<section class='contact_section' id='contact'>
  <span class='contact-background'><img src='/wp-content/themes/garethsimpson/assets/img/contact-bg.svg' alt='contact-background' /></span>
  <?php if ( have_rows( 'contact_section' ) ) : ?>

    <div class='container relative z-index-2 pad-right-30 pad-left-30'>
      <?php while ( have_rows( 'contact_section' ) ) : the_row(); ?>
        <h2 class='h1'><?php the_sub_field( 'title' ); ?></h2>
        <h3 class='h4'><?php the_sub_field( 'sub_title' ); ?></h3>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
  <div class='container pad-right-30 pad-left-30'>
    <div class='step-form'>
      <div class='steps'>
        <span class='dots'></span>
        <span class='step step-1 active' attr-step='step-1'><span class='text'>Step 1</span><span class='dot'></span></span>
        <span class='step step-2' attr-step='step-2'><span class='text'>Step 2</span><span class='dot'></span></span>
        <span class='step step-3' attr-step='step-3'><span class='text'>Step 3</span><span class='dot'></span></span>
      </div>
      <h4 class='text-center font-600 no-margin'>Ready to do some real SEO with an industry veteran?</h4>
      <div class='custom-form'>
        <?php echo do_shortcode( '[contact-form-7 id="264" title="Contact form 1"]' ); ?>
      </div>

    </div>
  </div>

  <div class='bottom-section relative z-index-2'>
    <p class='or'>
      Or
    </p>
    <a class='bottom-eail h3' href='mailto:<?php the_field( 'email_address', 'option' ); ?>'><?php the_field( 'email_address', 'option' ); ?></a>
    <a class='bottom-phone h3' href='tel:<?php the_field( 'telephone_number', 'option' ); ?>'><?php the_field( 'telephone_number', 'option' ); ?></a>
  </div>
</section>
<?php endif; ?>
<?php endif;?>
<div class="clear"></div>
<?php
$phone = get_field( 'telephone_number', 'option' );
$email = get_field( 'email_address', 'option' );
 $footer_background_image = get_field( 'footer_background_image', 'option' );
 $footer_background_image_mobile = get_field( 'footer_background_image_mobile', 'option' );
?>
<footer id="footer" role="contentinfo">
  <div class='main-footer relative'>
    <span class='background-image d-none d-md-block' style='background: url(<?php echo $footer_background_image["url"]; ?>) no-repeat center center / cover;'></span>
    <span class='background-image d-block d-md-none' style='background: url(<?php echo $footer_background_image_mobile["url"]; ?>) no-repeat center center / cover;'></span>
    <div class='container overflow relative z-index-3'>
      <div class='top-footer-menu'>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-top' ) ); ?>
      </div>
      <a class='footer-email h4' href='mailto:<?php echo $email;?>'><?php echo $email; ?></a>
      <a class='footer-phone h4' href='tel:<?php echo $phone ?  preg_replace("/[^0-9]/", "", $phone) : ""; ?>'><?php echo $phone; ?></a>
      <?php if ( have_rows( 'social_link', 'option' ) ) : ?>
        <div class='social-links-footer'>
          <?php while ( have_rows( 'social_link', 'option' ) ) : the_row(); ?>
            <?php $icon = get_sub_field('icon');?>
            <a href='<?php the_sub_field( 'link' ); ?>' target='_blank'><img src='/wp-content/themes/garethsimpson/assets/img/icons/<?php echo $icon;?>.svg' alt='<?php echo $icon; ?>' /></a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class='footer-bottom'>
    <div class='container'>
      <div class='bottom-footer-menu'>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
          <span>Copyright <?php the_date('Y'); ?>
      </div>
    </div>
  </div>
</footer>
</div><!-- closing div from header-->


<div class='overlay'></div>
<?php wp_footer(); ?>
</body>
</html>
