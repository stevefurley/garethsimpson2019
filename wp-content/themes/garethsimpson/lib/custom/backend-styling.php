<?php
function my_acf_admin_head() {
  ?>
  <style type="text/css">
  .acf-flexible-content .layout .acf-fc-layout-handle {
    background: #c7e9f7;
  }
  /* .acf-flexible-content .layout > .acf-table > thead > tr > th {
  display: none;
  } */
  /* .acf-field.acf-field-5ca247f24ef75 .acf-label {
  display: none;
}
.acf-field.acf-field-5ca247f24ef75 .acf-label label {
display: none;
}
.acf-fields > .acf-field.acf-field-5ca247f24ef75  {
padding: 0;
border: 0;
} */
.acf-field-5ca247f24ef75 > .acf-label {
  display: none !important;
}
.acf-field.acf-field-group.acf-field-5ca247f24ef75 {
  padding: 0;
  border: 0;
}
.acf-field.acf-field-group.acf-field-5ca247f24ef75 .acf-label {
  margin: 0;
}

[data-layout='left_and_right_block']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/left_and_right_block.png) no-repeat center center / contain;
  content: '';
  height: 190px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='header_section_custom']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/header_section_custom.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='add_testimonial']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/add_testimonial.png) no-repeat center center / contain;
  content: '';
  height: 190px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='add_featured_in_section_from_homepage']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/add_featured_in_section_from_homepage.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='green_block']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/green_block.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='white_block_with_icons_and_text']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/white_block_with_icons_and_text.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='button']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/button.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='list_items']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/list_items.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='icon_grid_set']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/icon_grid_set.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}
[data-layout='two_columns_of_text']:hover:after {
  background: url(/wp-content/themes/garethsimpson/assets/img/acf-layouts/two_columns_of_text.png) no-repeat center center / contain;
  content: '';
  height: 110px;
  width: 250px;
  display: block;
  position: absolute;
  right: -250px;
  top: 0px;
}






</style>
<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

function prefix_reset_metabox_positions(){
  delete_user_meta( 1, 'meta-box-order_post' );
  delete_user_meta( 1, 'meta-box-order_page' );
  delete_user_meta( 1, 'meta-box-order_custom_post_type' );
}
add_action( 'admin_init', 'prefix_reset_metabox_positions' );
