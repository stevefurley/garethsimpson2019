<?php
// sets fonts size on email and number fields
$a++;
$b++;
?>

<?php if($item['acf_fc_layout'] == 'title_item'):?>
  <!--title_item-->
  <?php
  $font_size = $item['font_size'];
  $title = $item['title'];
  $color = $item['color'];
  ?>
  <?php if($font_size == 'h1-hero' || $font_size == 'h1'):?>
    <h2 class='font-600 <?php echo $font_size; ?> <?php echo $color; ?>'><?php echo $title;?></h2>
  <?php else:?>
    <<?php echo $font_size; ?> class='font-600 <?php echo $font_size;?> <?php echo $color; ?>'><?php echo $title;?></<?php echo $font_size; ?>>
  <?php endif;?>
<?php endif; ?>

<?php if($item['acf_fc_layout'] == 'button'):?>
  <?php
  $button_text = $item['button_text'];
  $button_link = $item['button_link'];
  $align_button = $item['align_button'];
  $align_button_desktop = $item['align_button_desktop'];
  $file = $item['file'];
  if($file){
    $button_link = $file;
    $target = "_blank";
  } else {
    $button_link = $button_link;
    $target = "";
  }
  ?>

  <div class='d-block text-center <?php echo $align_button; ?> <?php echo $align_button_desktop; ?>' target='<?php echo $target; ?>'>
    <a class='orange-button' href='<?php echo $button_link; ?>'><?php echo $button_text; ?><img src='/wp-content/themes/garethsimpson/assets/img/button-arrow-white.svg' alt='small-arrow' /></a>
  </div>



<?php endif; ?>



<?php if($item['acf_fc_layout'] == 'add_follow_me_icons'):?>
  <div class='add_follow_me_icons'>
    <?php $follow_me_title = $item['follow_me_title']; ?>
    <?php if($follow_me_title):?>
      <h7 class='pad-bottom-20 d-block'><?php echo $follow_me_title; ?></h7>
    <?php endif; ?>
    <?php if ( have_rows( 'social_link', 'option' ) ) : ?>
      <div class='social-links'>
        <?php while ( have_rows( 'social_link', 'option' ) ) : the_row(); ?>
          <?php $icon = get_sub_field('icon');?>
          <a href='<?php the_sub_field( 'link' ); ?>' target='_blank'><img src='/wp-content/themes/garethsimpson/assets/img/icons/<?php echo $icon;?>.svg' alt='<?php echo $icon; ?>' /></a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

<?php endif; ?>




<?php if($item['acf_fc_layout'] == 'add_padding_to_bottom'):?>
  <!--add_padding_to_bottom-->
  <?php
  $select_padding_bottom = $item['select_padding_bottom'];
  ?>
  <span class='d-block pad-bottom-15 pad-bottom-<?php echo $select_padding_bottom; ?>-m'></span>
<?php endif; ?>





<?php if($item['acf_fc_layout'] == 'contact_number_item'):?>
  <!--add_padding_to_bottom-->
  <?php
  $contact_number = $item['contact_number'];
  if(isset($item['font_size_desktop'])) {
    $font_size_desktop = $item['font_size_desktop'];
  } else {
    $font_size_desktop = '18px';
  }
  if(isset($item['font_size_desktop'])) {
    $font_size_mobile = $item['font_size_mobile'];
  } else {
    $font_size_mobile = '18px';
  }
  $name = '.custom-phone-set-' . $b;
  $otherName = 'custom-phone-set-' . $b;
  ?>
  <style>
  body <?php echo $name; ?>{
    font-size: <?php echo $font_size_mobile; ?>;
    line-height: <?php echo $font_size_mobile; ?>;
  }
  @media only screen and (min-width: 768px) {
    body <?php echo $name; ?> {
      font-size: <?php echo $font_size_desktop; ?>;
      line-height: <?php echo $font_size_desktop; ?>;
    }
  }
  </style>
  <a class='tel d-block <?php echo $otherName; ?>' href='tel:<?php echo $contact_number ?  preg_replace("/[^0-9]/", "", $contact_number) : ""; ?>'><?php echo $contact_number;?></a>
<?php endif; ?>





<?php if($item['acf_fc_layout'] == 'contact_form_Item'):?>
  <!--contact_form_Item-->
  <?php
  $contact_form = $item['contact_form'];
  ?>
  <div class='custom-form'>
    <?php echo do_shortcode( '[contact-form-7 id="' . $contact_form->ID .'" title="Contact form 1"]' ); ?>
  </div>

<?php endif; ?>


<?php if($item['acf_fc_layout'] == 'icon_grid_set'):?>
  <!--contact_form_Item-->
  <?php
  $icon_grid = $item['icon_grid'];
  $b = 0;
  $total = count($item['icon_grid']);
  ?>
  <?php if($icon_grid):?>
    <div class=' icon-row'>
      <?php foreach($icon_grid as $block):?>
        <?php $b++; ?>

        <div class='icon-wrapper text-center'>
          <div class='d-block text-center pad-bottom-10'>
            <img class='d-inline-block' src='/wp-content/themes/garethsimpson/assets/img/icons/<?php echo $block['icon']; ?>.svg' alt='icon' />
          </div>
          <div class='h6'>
            <?php echo $block['description']; ?>
          </div>
        </div>
        <?php if($b != 0 && $b != $total):?>
          <span class='vertical-line'></span>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>


<?php if($item['acf_fc_layout'] == 'keyline'):?>
  <?php
  $tablet_position = $item['tablet_position'];
  $desktop_position = $item['desktop_position'];
  $background_colour = $item['background_colour'];
  $height = $item['height'];
  $width = $item['width'];
  ?>
  <div class='text-align-center keyline-wrapper d-block <?php echo $tablet_position; ?> <?php echo $desktop_position; ?>'>
    <span class='keyline <?php echo $background_colour; ?>' style='height: <?php echo $height; ?>px; width: <?php echo $width; ?>;'></span>
  </div>
<?php endif; ?>


<?php if($item['acf_fc_layout'] == 'two_columns_of_text'):?>
  <?php
  $column_1 = $item['column_1'];
  $column_2 = $item['column_2'];
  ?>
  <div class='d-flex  flex-column flex-md-row justify-content-between'>
    <div class=''>
      <?php echo $column_1; ?>
    </div>
    <span class='d-block pad-right-30-m'></span>
    <div class=''>
      <?php echo $column_2; ?>
    </div>
  </div>

<?php endif; ?>




<?php if($item['acf_fc_layout'] == 'description_item'):?>
  <!--description_item-->
  <?php
  $description = $item['description'];
  ?>
  <div class='desc'>
    <p>
      <?php echo $description; ?>
    </p>
  </div>
<?php endif; ?>

<?php if($item['acf_fc_layout'] == 'wysiwyg_description'):?>
  <!--description_item-->
  <?php
  $description = $item['wysiwyg_block'];
  ?>
  <div class='desc'>
    <?php echo $description; ?>
  </div>
<?php endif; ?>


<?php if($item['acf_fc_layout'] == 'white_block_with_icons_and_text'):?>
  <!--description_item-->
  <?php
  $title = $item['title'];
  $icons_and_text = $item['icons_and_text'];
  $i = 0;
  ?>

  <?php if($icons_and_text):?>
    <div class='white-box-width-icons'>
      <div class='inner'>


        <?php if($title):?>
          <h5 class='font-600'><?php echo $title; ?></h5>
        <?php endif; ?>

        <div class='blocks-wrapper '>
          <?php foreach($icons_and_text as $block):?>
            <?php $i++; ?>
            <div class='col-6 col-md-4 text-center  single-block row-<?php echo $i; ?>'>
              <div class='d-block text-center pad-bottom-10'>
                <img class='d-inline-block' src='/wp-content/themes/garethsimpson/assets/img/icons/<?php echo $block['icon']; ?>.svg' alt='icon' />
              </div>
              <div class='h6'>
                <?php echo $block['description']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endif;?>
<?php endif; ?>





<?php if($item['acf_fc_layout'] == 'link_item'):?>
  <!--link_item-->
  <?php
  $link_text = $item['link_text'];
  $link_url = $item['link_url'];
  ?>
  <?php if($link_text && $link_url):?>
    <a class='read-more d-inline-block ' href='<?php echo $link_url; ?>'><?php echo $link_text; ?></a>
  <?php endif; ?>
<?php endif; ?>





<?php if($item['acf_fc_layout'] == 'list_items'):?>
  <!--list_items-->
  <?php

  $select_bullet_types = $item['select_bullet_types'];
  $bullet_item = $item['bullet_item'];
  ?>
  <?php if($bullet_item):?>
    <ul class='<?php echo $select_bullet_types; ?>'>
      <?php foreach ($bullet_item as $bullet):?>
        <li>
          <?php echo $bullet['bullet_point']; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
<?php endif; ?>





<?php if($item['acf_fc_layout'] == 'image_item'):?>
  <!--image_item-->
  <?php
  $image = $item['image'];
  ?>
  <img class='fluid-img' src='<?php echo $image['url']; ?>' alt='<?php echo $image['alt']; ?>' />

<?php endif; ?>





<?php if($item['acf_fc_layout'] == 'email_address_item'):?>
  <!--email_address_item-->
  <?php
  $email_address = $item['email_address'];
  $email_address_used = = $item['email_address_used'];
  if(isset($item['font_size_desktop'])) {
    $font_size_desktop = $item['font_size_desktop'];
  } else {
    $font_size_desktop = '18px';
  }
  if(isset($item['font_size_desktop'])) {
    $font_size_mobile = $item['font_size_mobile'];
  } else {
    $font_size_mobile = '18px';
  }
  $name = '.custom-email-set-' . $a;
  $otherName = 'custom-email-set-' . $a;
  ?>
  <style>
  body <?php echo $name; ?>{
    font-size: <?php echo $font_size_mobile; ?>;
    line-height: <?php echo $font_size_mobile; ?>;
  }
  @media only screen and (min-width: 768px) {
    body <?php echo $name; ?> {
      font-size: <?php echo $font_size_desktop; ?>;
      line-height: <?php echo $font_size_desktop; ?>;
    }
  }
  </style>
  <a class='d-block email <?php echo $otherName; ?>' href='mailto:<?php echo $email_address_used ? $email_address_used : "sales@seeker.digital"; ?>'><?php echo $email_address; ?></a>

<?php endif; ?>
