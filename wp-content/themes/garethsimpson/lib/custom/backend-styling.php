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
</style>
<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');
