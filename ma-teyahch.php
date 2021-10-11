<?php
/**
* Plugin Name: Ma Teyahch
* Description: A plugin that filter the bad algerian words.
* Version: 0.1
* Author: Miminou
* Author URI: https://am-amine.com/
**/

add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );
function my_custom_script_load(){
  wp_enqueue_script( 'my-custom-script', plugin_dir_url( __FILE__ ) . '/custom.js', array() , false, true);
}
