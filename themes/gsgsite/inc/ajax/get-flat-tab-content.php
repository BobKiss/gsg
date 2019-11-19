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
        $field2 = get_field('product_descr_two_pics', $_POST['variation_id']);
        output_product_description_b($field, $field2);
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
  ?>
  <div class="imgs-slider">
    <?php foreach($field as $image) : ?>
      <div class="slide-item">
        <img src="<?=$image['url']?>" alt="">
      </div>
    <?php endforeach; ?>
  </div>
  <div class="slider-nav"></div>
  <?php
}

function output_product_images($field){
  ?>
  <div class="imgs-slider tab__third">
    <?php foreach($field as $image) : ?>
      <div class="slide-item">
        <img src="<?=$image['url']?>" alt="">
      </div>
    <?php endforeach; ?>
  </div>
  <div class="slider-nav"></div>
  <?php
}
function output_product_description_a($field){
  ?>
  <div class="prod-desc-one"><?=$field?></div>
  <?php
}
function output_product_description_b($field, $field2){
  ?>
  <?php //var_dump($field); die; ?>
  <div class="prod-desc-two">
    <div class="imgs-slider">
      <?php foreach($field2 as $image) : ?>
        <div class="slide-item" style="background-image: url('<?=$image['url']?>')"></div>
      <?php endforeach; ?>
    </div>
    <!-- <div class="static-img" ></div> -->
    <div class="text-col"><?=$field?></div>
  </div>
  <div class="slider-nav"></div>
  <?php
}
