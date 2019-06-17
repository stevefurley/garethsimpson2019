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
  ?>
  <?php if($font_size == 'h1-hero'):?>
    <h2 class='font-600 <?php echo $font_size; ?>'><?php echo $title;?></h2>
  <?php else:?>
    <<?php echo $font_size;?> class='font-600'><?php echo $title;?></<?php echo $font_size;?>>
  <?php endif;?>
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
  <a class='d-block email <?php echo $otherName; ?>' href='mailto:<?php echo $email_address; ?>'><?php echo $email_address; ?></a>

<?php endif; ?>
