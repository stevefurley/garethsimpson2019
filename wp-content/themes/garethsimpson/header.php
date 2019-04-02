<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <!-- using https://realfavicongenerator.net -->
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicons/safari-pinned-tab.svg" color="#E35F30">
  <meta name="msapplication-TileColor" content="#E35F30">
  <meta name="theme-color" content="#E35F30">
  <script type="text/javascript">
    (function() {
        var trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = 'https://easy.myfonts.net/v2/js?sid=288420(font-family=Hurme+Geometric+Sans+4+Light)&sid=288422(font-family=Hurme+Geometric+Sans+4+Regular)&sid=288425(font-family=Hurme+Geometric+Sans+4+SemiBold)&sid=288426(font-family=Hurme+Geometric+Sans+4+Thin)&key=D1cvmAS1JH';
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  $logo = get_field( 'logo', 'option' );
  $header_background_image = get_field( 'header_background_image' );
  $header_title = get_field('header_title');
  $sub_title_header = get_field('sub_title_header');
  $custom_link = get_field('custom_link');
  $custom_link_text = get_field('custom_link_text');
  ?>


  <nav role="navigation" class='mobile-menu d-block d-md-none' id='mobile-menu' onclick='stopProp(event, this)'>
    <span class='block clear'></span>
    <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
  </nav>
  <div class='move'>

    <?php if(is_front_page()):?>
      <header class="homepage-header page-header" role="banner" id='header' style='background: url(<?php echo $header_background_image["url"]; ?>) no-repeat center center / cover;'>
        <span class='darkgrey-overlay cover'></span>
      <?php else:?>
        <header class="standard-header page-header" role="banner" id='header'>
        <?php endif; ?>
        <div class='container d-flex relative z-index-2 '>
          <a class='header-logo ' href='/'>
            <?php if ( $logo ) { ?>
              <img class='fluid-img' src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
            <?php } ?>
          </a>
          <span class='d-flex flex-grow-1 '></span>
          <div class="hamburger-wrapper   d-block d-md-none align-self-center">
            <div id="mobile-menu-button" class="hamburger" ><span></span></div>
          </div>
          <div class='rightside-header'>
            <div class='tel-email-wrapper'>
              <a class='headerphone' href='tel:<?php the_field( 'telephone_number', 'option' ); ?>'><?php the_field( 'telephone_number', 'option' ); ?></a> /
              <a class='headermeail' href='mailto:<?php the_field( 'email_address', 'option' ); ?>'><?php the_field( 'email_address', 'option' ); ?></a>

            </div>
            <div id='header-menu' class='d-md-block d-none align-self-md-center' >
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
          </div>
        </div>
        <?php if(is_front_page()):?>
          <div class='container homepage-text relative z-index-2 '>
            <?php if($header_title):?>
              <h1 class='h1-hero'><?php the_field( 'header_title' ); ?></h1>
            <?php endif; ?>
            <?php if($sub_title_header):?>
              <h2 class='h3'><?php the_field( 'sub_title_header' ); ?></h2>
            <?php endif;?>
            <?php if($custom_link && $custom_link_text):?>

              <div class='d-block text-center'>
                <a class='read-more d-inline-block white-hover' href='<?php echo $custom_link;?>'><?php echo $custom_link_text;?></a>
              </div>
            <?php endif;?>
          </div>
        <?php endif; ?>
      </header>
