<?php get_header(); ?>
<?php include(locate_template('/partials/blog-header.php')); ?>
<section id="content" role="main" class='pad-top-60'>
  <div class='container d-flex flex-wrap'>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
      //check for thumbnail frst then check post
      $thumb_id = get_post_thumbnail_id();
      if(get_field('blog_header', $post->ID)){
        $hero = get_field('blog_header', $post->ID);
        $thumbnail_id = $hero['header_image']['sizes']['blog_archive'];
      }
      if($thumb_id){
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'blog_archive', true);
        $thumbnail_id = $thumb_url_array[0];
        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
      }
      ?>
      <?php if($thumbnail_id):?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-6 col-lg-4 pad-bottom-50 archive-blog-posts'); ?>>
          <div class='inner'>
            <a href='<?php the_permalink(); ?>' class='image-wrapper'>
              <img class='fluid-img ' src='<?php echo $thumbnail_id; ?>' alt='<?php echo $alt_text; ?>' />
            </a>
            <div>
              <span class="date"><?php echo get_the_date('d F y'); ?></span>
              <a href='<?php the_permalink(); ?>'><h5><?php the_title(); ?></h5></a>
              <div class='desc'>
                <?php echo ShortenText(strip_tags(get_the_content()), 150);?>
              </div>
            </div>

          </div>
        </article>
      <?php endif;?>



      <?php comments_template(); ?>
    <?php endwhile; endif; ?>
  </div>
<?php include(locate_template('/partials/pagination.php')); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
