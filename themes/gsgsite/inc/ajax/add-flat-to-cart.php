<?php
function add_flat_to_cart(){
  global $woocommerce;

  $product_id = apply_filters('woocommerce_add_to_cart_product_id', $_POST['product_id']);
  $variation_id = apply_filters('woocommerce_add_to_cart_product_id', $_POST['variation_id']);

  //make variation out of stock
  wc_update_product_stock($variation_id, 0, 'set');

  //
  // $added = $woocommerce->cart->add_to_cart(
  //   $product_id,
  //   1,
  //   $variation_id,
  //   wc_get_product_variation_attributes( $variation_id )
  // );
  $response = ['success' => true];
  // if($added){
  //   do_action('woocommerce_ajax_added_to_cart', $product_id);
  // }
  // else{
  //   $response['success'] = false;
  //   $response['message'] = 'An error occured, try to reload the page or contact administrator.';
  // }
  echo json_encode($response);
  wp_die();
}
add_action('wp_ajax_add-flat', 'add_flat_to_cart');
add_action('wp_ajax_nopriv_add-flat', 'add_flat_to_cart');
?>
