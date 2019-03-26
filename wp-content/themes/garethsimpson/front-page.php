<?php get_header(); ?>
<div class=''>
  <section id="content" role="main" class='container' >
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(' pad-top-50 pad-bottom-50'); ?>>
        <header class="header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <section class="entry-content">
          <?php the_content(); ?>
          <div class="entry-links"><?php wp_link_pages(); ?></div>
        </section>
      </article>
      <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
  </section>
</div>
<?php get_footer(); ?>
