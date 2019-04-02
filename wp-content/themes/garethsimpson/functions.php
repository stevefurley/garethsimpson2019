<?php
add_action( 'after_setup_theme', 'garethsimpson_setup' );
function garethsimpson_setup(){
  // Add Menu Support
  load_theme_textdomain( 'garethsimpson', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  global $content_width;

  add_theme_support('menus');

  add_image_size('square_desktop', 180, 180, true);
  add_image_size('square_mobile', 500, 500, true);

  add_image_size('slider_desktop', 1368, 581, true);
  add_image_size('slider_tablet', 747, 417, true);

  add_image_size('media_desktop', 395, 257, true);
  add_image_size('media_tablet', 500, 325, true);

  add_image_size('news_desktop', 227, 176, true);

  add_theme_support( 'title-tag' );


  register_nav_menus(array( // Using array to specify more menus if needed
    'header-menu' => __('Header Menu', 'garethsimpson'), // Main Navigation
    'mobile-menu' => __('Mobile Menu', 'garethsimpson'), // Sidebar Navigation
    'footer-menu' => __('Footer Menu', 'garethsimpson'), // Sidebar Navigation
      'footer-menu-top' => __('Footer Menu (top footer)', 'garethsimpson'),
  ));
}


if (!isset($content_width)){
  $content_width = 1400;
}



$blank_includes = [
  /**
  * BC Extensions
  */


  'lib/custom/custom-query-controller.php',         // Control all queries

  'lib/acf/options.php',

  'lib/custom/backend-styling.php',


];

//depicts where templates are found
foreach ($blank_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'garethsimpson'), $file), E_USER_ERROR);
  }

  require_once $filepath;
} unset($file, $filepath);


function loading_custom_scripts(){
  $currentTheme = wp_get_theme();

  // Theme's main CSS file.
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), false, false);
  wp_enqueue_style( 'OpenSans', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' );
  // if(is_front_page()){
	// 	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
   	// wp_enqueue_script( 'font', get_stylesheet_directory_uri() . '/assets/js/font.js');
	 	wp_enqueue_script( 'swipejs', get_stylesheet_directory_uri() . '/assets/js/swipe.min.js', array( 'jquery' ));
	// }
  // wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/js/scrollreveal.js', array( 'jquery' ));
  wp_enqueue_style('main.css', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('style.css', get_template_directory_uri() . '/style.css');


  // HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  // wp_enqueue_script('swipe',
  // get_template_directory_uri() . '/assets/js/swipe.min.js',
  // $currentTheme->get('Version'),
  // false);

  wp_enqueue_script('scripts',
  get_template_directory_uri() . '/assets/js/scripts.js',
  $currentTheme->get('Version'),
  false);

}
add_action('wp_enqueue_scripts', 'loading_custom_scripts');

add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
  return 'assets/img/icons/';
}
