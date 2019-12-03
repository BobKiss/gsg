<?php
// scripts
add_action( 'wp_enqueue_scripts', 'enqueue_script' );
add_action( 'admin_enqueue_scripts', 'enqueue_script' );

// styles
add_action( 'admin_enqueue_scripts', 'enqueue_styles' );
add_action( 'admin_menu', 'tests_menu' );


function enqueue_script () {
  wp_enqueue_script( 'vados-js', plugins_url('/Tests/js/main.js') );
}
function enqueue_styles () {
  wp_enqueue_style('main', plugins_url('Tests/css/main.css'));
}

function tests_menu () {
  add_menu_page( 'Vedek Tests' , 'Vedek\'s Tests' , 'manage_options' , 'test_quiz' , 'tests_page' , 'dashicons-buddicons-activity');
  add_submenu_page( 'test_quiz', 'Add test', 'Add test', 'manage_options', 'add_test');
}


?>