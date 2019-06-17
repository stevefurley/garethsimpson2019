<?php if ( have_rows( 'flexible_blocks' ) ): ?>
  <?php while ( have_rows( 'flexible_blocks' ) ) : the_row(); ?>

    <?php if ( get_row_layout() == 'left_and_right_block' ) : ?>
      <?php if ( have_rows( 'block_options' ) ) : ?>
        <?php while ( have_rows( 'block_options' ) ) : the_row(); ?>
          <?php
          $block_background_colour = get_sub_field('block_background_colour');
          $number_of_blocks = get_sub_field('number_of_blocks');
          $block_width_desktop = get_sub_field('block_width_desktop');
          $block_width_tablet = get_sub_field('block_width_tablet');
          $background_overlay = get_sub_field('background_overlay');
          ?>
        <?php endwhile; ?>
      <?php endif; ?>

      <section class='relative flexible-section <?php echo $block_background_colour; ?> block-number-<?php echo $number_of_blocks; ?> '>

        <?php if($background_overlay):?>
          <span class='image-overlay' style="background: url(<?php echo $background_overlay['url']; ?>) no-repeat bottom right / contain;"></span>
        <?php endif; ?>

        <div class='container no-padding align-content-center relative z-index-2'>
          <div class='mobile-100 tablet-<?php echo $block_width_tablet;?> desktop-<?php echo $block_width_desktop;?> d-block  center  d-flex flex-wrap justify-content-md-between align-items-md-center  '>


            <?php
            $block = get_sub_field('block');
            $right_block = get_sub_field('right_block');
            $three_blocks = get_sub_field('three_blocks');
            ?>

            <?php
            if($block['choose_block_item']):
              $desktop_width = $block['desktop_width'];
              $tablet_width = $block['tablet_width'];
              $text_align = $block['text_align'];
              $a = 0;
              $b = 0;
              ?>
              <div class=' pad-bottom-40  pad-bottom-0-m d-block block-padding mobile-100 text-align-center <?php echo $text_align; ?>-m tablet-<?php echo $tablet_width;?> desktop-<?php echo $desktop_width;?>'>
                <?php foreach($block['choose_block_item'] as $item):?>
                  <?php include(locate_template('/partials/left-right-blocks.php')); ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <?php
            if($right_block['block']['choose_block_item']):
              $block = $right_block;
              $desktop_width = $block['block']['desktop_width'];
              $tablet_width1 = $block['block']['tablet_width'];
              $text_align = $block['block']['text_align'];
              $a = 100;
              $b = 100;
              ?>
              <div class=' pad-bottom-30 pad-bottom-0-m d-block block-padding mobile-100 <?php echo $text_align; ?> tablet-<?php echo $tablet_width;?> desktop-<?php echo $desktop_width;?>'>
                <?php foreach($block['block']['choose_block_item'] as $item):?>
                  <?php include(locate_template('/partials/left-right-blocks.php')); ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <?php
            if($three_blocks['block']['choose_block_item']):

              $block = $three_blocks;
              $desktop_width = $block['block']['desktop_width'];
              $tablet_width1 = $block['block']['tablet_width'];
              $text_align = $block['block']['text_align'];
              $a = 1000;
              $b = 1000;
              ?>
              <div class=' pad-bottom-30 pad-bottom-0-m d-block block-padding mobile-100 <?php echo $text_align; ?> tablet-<?php echo $tablet_width;?> desktop-<?php echo $desktop_width;?>'>
                <?php foreach($block['block']['choose_block_item'] as $item):?>
                  <?php include(locate_template('/partials/left-right-blocks.php')); ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'header_section_custom' ) : ?>
      <?php $background_image = get_sub_field( 'background_image' ); ?>
      <section class='flexible-header' style='background: url(<?php echo $background_image['url']; ?>) no-repeat center center / cover;'>
        <div class='d-block text-center'>
          <img class='d-inline-block' src='/wp-content/themes/garethsimpson/assets/img/gareth-logo.svg' alt='Gareth Simpson Logo' />
        </div>
        <div class='container text-center relative z-index-2'>
          <h1 class='font-600'> <?php the_sub_field( 'title' ); ?></h1>
          <h2 class='h3'><?php echo the_sub_field('sub_title'); ?></h2>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'add_testimonial' ) : ?>
      <?php $include_testimonials = get_sub_field( 'include_testimonials' ); ?>
      <?php if($include_testimonials):?>
        <?php include(locate_template('/partials/trusted_slider.php')); ?>
      <?php endif;?>
    <?php elseif ( get_row_layout() == 'add_featured_in_section_from_homepage' ) : ?>

      <?php $add_featured_in = get_sub_field( 'add_featured_in' ); ?>
      <?php if($add_featured_in):?>
        <?php include(locate_template('/partials/featured_in.php')); ?>
      <?php endif; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
