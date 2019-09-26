<?php
function get_flat_tab_content(){
  $response = ['success' => false];
  if(isset($_POST['variation_id'], $_POST['tabname']) && !empty($_POST['variation_id'])){
    $response['value'] = get_field($_POST['tabname'], $_POST['variation_id']);
  }
  else{
    $response['message'] = 'variation is not selected';
  }
  echo json_encode($response);
  die();
}

add_action('wp_ajax_get-flat-tab-content', 'get_flat_tab_content');
add_action('wp_ajax_nopriv_get-flat-tab-content', 'get_flat_tab_content');
