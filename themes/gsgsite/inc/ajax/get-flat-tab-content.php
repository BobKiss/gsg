<?php
function get_flat_tab_content(){
  if(isset($_POST['variation_id'], $_POST['tabname']) && !empty($_POST['variation_id'])){

    $field = get_field($_POST['tabname'], $_POST['variation_id']);
    switch ($_POST['tabname']) {
      case 'product_architecture':
        output_product_architecture($field);
        break;

      case 'product_images':
        output_product_images($field);
        break;

      case 'product_description_a':
        output_product_description_a($field);
        break;

      case 'product_description_b':
        output_product_description_b($field);
        break;
    }
    // echo '<pre>';
    // var_dump($field);
    // echo '</pre>';
  }
  die();
}

add_action('wp_ajax_get-flat-tab-content', 'get_flat_tab_content');
add_action('wp_ajax_nopriv_get-flat-tab-content', 'get_flat_tab_content');


//each tab output
function output_product_architecture($field){
  foreach($field as $image){ ?>
    <img src="<?=$image['url']?>" alt="">
  <?php }
}

function output_product_images($field){
  foreach($field as $image){ ?>
    <img src="<?=$image['url']?>" alt="">
  <?php }
}
function output_product_description_a($field){
  echo $field;
}
function output_product_description_b($field){
  echo $field;
}
