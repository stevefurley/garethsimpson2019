<div class='container '>
  <div class='col-12 col-11-m center no-padding'>
    <nav id="nav-below" class="navigation " role="navigation">
      <?php if($link = get_previous_post_link()):?>
        <div class="leftside-block">
          <p class='prev-next-article'>
          <?php previous_post_link( '%link', 'Previous Article' ); ?>
          </p>
          <div class='leftside-arrow'>
            <img class='pad-right-10 pad-top-5-m none block-m' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-left.svg' />
            <h4><?php previous_post_link( '%link', ' %title' ); ?></h4>
          </div>
        </div>
      <?php endif;?>
      <?php if($link = get_next_post_link()):?>
        <div class="rightside-block">
          <p class='prev-next-article'>
            <?php next_post_link( '%link', 'Next Article' ); ?>
          </p>
          <div class='rightside-arrow'>
            <h4><?php next_post_link( '%link', '%title ' ); ?></h4>
            <img class='pad-left-10 pad-top-5-m none block-m' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg' />
          </div>
        </div>
      <?php endif;?>
    </div>
  </nav>
</div>
