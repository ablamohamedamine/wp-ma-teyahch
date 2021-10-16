<?php
/**
* Plugin Name: Ma Teyahch
* Description: A plugin that filter the bad Algerian words in arabic and french letters, the list is static now, and it will be updated from time to time.
* Now you need just to install it, that's all.
* Version: 0.1.0
* Author: Miminou
* Author URI: https://am-amine.com/
**/


if(!function_exists('mtyhch_script_load')) {

  add_action( 'wp_enqueue_scripts', 'mtyhch_script_load' );

  function mtyhch_script_load(){
    wp_enqueue_script( 'mtyhch-custom-script', plugin_dir_url( __FILE__ ) . '/custom.js', array() , false, true);
  }
}
