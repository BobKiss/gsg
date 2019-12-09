<?php
//not included yet in functions.php
namespace House_System;

/*
* The admin-specific functionality of House System.
*
* Defines hooks for defining choises in product variation package selects
*
* @since      1.0.0
*
* @author    Ash
*/

class  Admin {


  public function __construct(){

    add_filter('acf/load_field/key=field_5de7763c357c1', array($this, 'load_top_duplex_packages_choises') );
    add_filter('acf/load_field/key=field_5dea3cd5f75dc', array($this, 'load_garden_duplex_packages_choises') );
    add_filter('acf/load_field/key=field_5dea3d11f75de', array($this, 'load_cellar_garden_duplex_packages_choises') );

  }

  /*
   * Defines choises of packages in top duplex apartment type
  */
  public function load_top_duplex_packages_choises( $field ){

    // reset choices
    $field['choices'] = array();

    // get choices from options page
    $choices = get_field('top_duplex_packages', 'option');

    if(is_array($choices)){
      foreach ($choices as $choice) {
        $field['choices'][$choice['name']] = $choice['name'];
      }
    }

    //error_log( var_export($field['choises'], true) );

    return $field;

  }

  /*
   * Defines choises of packages in garden duplex apartment type
  */
  public function load_garden_duplex_packages_choises( $field ){

    // reset choices
    $field['choices'] = array();

    // get choices from options page
    $choices = get_field('garden_duplex_packages', 'option');

    if(is_array($choices)){
      foreach ($choices as $choice) {
        $field['choices'][$choice['name']] = $choice['name'];
      }
    }

    return $field;
  }

  /*
   * Defines choises of packages in cellar + garden duplex apartment type
  */
  public function load_cellar_garden_duplex_packages_choises( $field ){

    // reset choices
    $field['choices'] = array();

    // get choices from options page
    $choices = get_field('cellar_garden_duplex_packages', 'option');

    if(is_array($choices)){
      foreach ($choices as $choice) {
        $field['choices'][$choice['name']] = $choice['name'];
      }
    }

    return $field;
  }


}
