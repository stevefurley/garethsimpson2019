


<?php if($item['acf_fc_layout'] == 'title_item'):?>
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


<!--add_padding_to_bottom-->


<?php if($item['acf_fc_layout'] == 'add_padding_to_bottom'):?>
  <?php
  $select_padding_bottom = $item['select_padding_bottom'];
  ?>
  <span class='d-block pad-bottom-15 pad-bottom-<?php echo $select_padding_bottom; ?>-m'></span>
<?php endif; ?>


<!--add_padding_to_bottom-->


<?php if($item['acf_fc_layout'] == 'contact_number_item'):?>
  <?php
  $contact_number = $item['contact_number'];
  ?>
  <a class='tel d-block' href='tel:<?php echo $contact_number ?  preg_replace("/[^0-9]/", "", $contact_number) : ""; ?>'><?php echo $contact_number;?></a>
<?php endif; ?>


<!--contact_form_Item-->


<?php if($item['acf_fc_layout'] == 'contact_form_Item'):?>
  <?php
  $contact_form = $item['contact_form'];
  ?>
  <div class='custom-form'>
    <?php echo do_shortcode( '[contact-form-7 id="' . $contact_form->ID .'" title="Contact form 1"]' ); ?>
  </div>

<?php endif; ?>


<!--description_item-->


<?php if($item['acf_fc_layout'] == 'description_item'):?>
  <?php
  $description = $item['description'];
  ?>
  <div class='desc'>
    <p>
      <?php echo $description; ?>
    </p>
  </div>
<?php endif; ?>


<!--link_item-->


<?php if($item['acf_fc_layout'] == 'link_item'):?>
  <?php
  $link_text = $item['link_text'];
  $link_url = $item['link_url'];
  ?>
  <?php if($link_text && $link_url):?>
    <a class='read-more d-inline-block ' href='<?php echo $link_url; ?>'><?php echo $link_text; ?></a>
  <?php endif; ?>
<?php endif; ?>


<!--list_items-->


<?php if($item['acf_fc_layout'] == 'list_items'):?>
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


<!--image_item-->


<?php if($item['acf_fc_layout'] == 'image_item'):?>
  <?php
  $image = $item['image'];
  ?>
  <img class='fluid-img' src='<?php echo $image['url']; ?>' alt='<?php echo $image['alt']; ?>' />

<?php endif; ?>


<!--email_address_item-->


<?php if($item['acf_fc_layout'] == 'email_address_item'):?>
  <?php
  $email_address = $item['email_address'];
  ?>
  <a class='d-block email' href='mailto:<?php echo $email_address; ?>'><?php echo $email_address; ?></a>

<?php endif; ?>
