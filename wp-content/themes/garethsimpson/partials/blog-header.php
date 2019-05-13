
<?php if(is_home()){
  $post_id = get_queried_object();
  $post_id->ID = get_option( 'page_for_posts' );
} else {
  $post_id = get_the_id();

}
?>
<?php if ( have_rows( 'blog_header', $post_id ) ) : ?>
  <?php while ( have_rows( 'blog_header', $post_id ) ) : the_row(); ?>
    <?php

      $header_image = get_sub_field( 'header_image');
      $title = get_sub_field( 'title');
      $header_image_or_background_color = get_sub_field( 'header_image_or_background_color');
      $sub_title = get_sub_field( 'sub_title');

    ?>
    <?php if($header_image_or_background_color == 'image'):?>
      <section class='flexible-header single-post-header relative' style='background: url(<?php echo $header_image["sizes"]["slider_desktop"]; ?>) no-repeat center center / cover;'>
        <span class='cover blog-image-cover'></span>
      <?php else:?>
        <section class='flexible-header single-post-orange-header relative'>
        <?php endif;?>
        <div class='container text-center relative z-index-2'>
          <h1 class='font-600'><?php echo $title ? $title : the_title();?></h1>
          <?php if($sub_title):?>
            <h2 class='h3'><?php echo the_sub_field('sub_title'); ?></h2>
          <?php endif; ?>
          <span class="date"><?php the_date('d F y'); ?></span>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
