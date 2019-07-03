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
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#E35F30">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#E35F30">
  <script type="text/javascript">
  // (function() {
  //     var trial = document.createElement('script');
  //     trial.type = 'text/javascript';
  //     trial.async = true;
  //     trial.src = 'https://easy.myfonts.net/v2/js?sid=288420(font-family=Hurme+Geometric+Sans+4+Light)&sid=288422(font-family=Hurme+Geometric+Sans+4+Regular)&sid=288425(font-family=Hurme+Geometric+Sans+4+SemiBold)&sid=288426(font-family=Hurme+Geometric+Sans+4+Thin)&key=D1cvmAS1JH';
  //     var head = document.getElementsByTagName("head")[0];
  //     head.appendChild(trial);
  // })();
</script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-75603045-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->


<script type="text/javascript" src="/wp-content/themes/garethsimpson/assets/js/MyFontsWebfontsKit.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  $logo = get_field( 'logo', 'option' );
  $header_background_image = get_field( 'header_background_image' );
  $header_background_image_mobile = get_field( 'header_background_image_mobile' );
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
      <header class="homepage-header page-header" role="banner" id='header' >
        <span class='cover d-none d-md-block' style='background: url(<?php echo $header_background_image["url"]; ?>) no-repeat center center / cover;'></span>
        <span class='cover d-block d-md-none' style='background: url(<?php echo $header_background_image_mobile["url"]; ?>) no-repeat center center / cover;'></span>
        <span class='darkgrey-overlay cover z-index-2'></span>

      <?php else:?>
        <?php $f = 0;?>
        <?php if ( have_rows( 'flexible_blocks' ) ): ?>
          <?php while ( have_rows( 'flexible_blocks' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'about_header' ) : ?>
              <?php $header_background_image = get_sub_field( 'image' ); ?>
              <header class="homepage-header about-header page-header" role="banner" id='header' >
                <span class='cover d-block' style='background: url(<?php echo $header_background_image["url"]; ?>) no-repeat center center / cover;'></span>
              <?php else: ?>
                <?php $f++; ?>
                <?php if($f == 1):?>
                  <header class="standard-header page-header" role="banner" id='header'>
                  <?php endif; ?>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>

          <?php endif; ?>
          <div class='container d-flex relative z-index-3 '>
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
                <h1 class='h1-hero font-600'><?php the_field( 'header_title' ); ?></h1>
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

          <?php if ( have_rows( 'flexible_blocks' ) ): ?>
            <?php while ( have_rows( 'flexible_blocks' ) ) : the_row(); ?>
              <?php if ( get_row_layout() == 'about_header' ) : ?>
                <?php $header_background_image = get_sub_field( 'image' ); ?>
                <div class='container homepage-text relative z-index-2 '>
                  <h1 class='h1-hero font-600'><?php the_sub_field( 'title' ); ?></h1>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </header>
