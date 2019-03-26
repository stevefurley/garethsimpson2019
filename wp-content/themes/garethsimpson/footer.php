
<div class="clear"></div>
<?php
$phone = get_field( 'telephone_number', 'option' );
$email = get_field( 'email_address', 'option' );
 $footer_background_image = get_field( 'footer_background_image', 'option' );
?>
<footer id="footer" role="contentinfo">
  <div class='main-footer' style='background: url(<?php echo $footer_background_image["url"]; ?>) no-repeat center center / cover;'>
    <div class='container overflow '>
      <div class='top-footer-menu'>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-top' ) ); ?>
      </div>
      <a class='footer-email h4' href='tel:<?php echo $email;?>'><?php echo $email; ?></a>
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
      </div>
    </div>
  </div>
</footer>
</div><!-- closing div from header-->


<div class='overlay'></div>
<?php wp_footer(); ?>
</body>
</html>
