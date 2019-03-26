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
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <nav role="navigation" class='mobile-menu d-block d-md-none' id='mobile-menu' onclick='stopProp(event, this)'>
    <span class='block clear'></span>
    <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
  </nav>
  <div class='move'>

    <header class="site-header relative pad-top-15 pad-bottom-15" role="banner" id='header'>
      <div class='container d-flex  '>
        <a class='header-logo pad-top-30 pad-bottom-30' href='/'>
          <img class='img-responsive' src='<?php echo get_template_directory_uri();?>/assets/img/header-logo.svg' />
        </a>
        <span class='d-flex flex-grow-1 '></span>
        <div class="hamburger-wrapper   d-block d-md-none align-self-center">
          <div id="mobile-menu-button" class="hamburger" ><span></span></div>
        </div>
        <div id='header-menu' class='d-md-block d-none align-self-md-center' >
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
      </div>

    </header>
