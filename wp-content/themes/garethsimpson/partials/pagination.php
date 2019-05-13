<div class='pad-bottom-50'>
  <?php
  $nav = get_the_posts_pagination( array(
    'prev_text'          => __( 'Prev', 'twentyfifteen' ),
    'next_text'          => __( 'Next', 'twentyfifteen' ),
    'screen_reader_text' => __( 'A' )
  ) );
  $nav = str_replace('<h2 class="screen-reader-text">A</h2>', '', $nav);
  echo $nav;
  ?>
</div>
