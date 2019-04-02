<?php /* Template Name: Flexible Content Page*/ ?>
<?php get_header(); ?>
<section id="content" role="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php include(locate_template('/partials/flexible-fields.php')); ?>
    </article>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
