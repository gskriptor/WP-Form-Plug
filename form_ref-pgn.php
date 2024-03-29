<?php
/*
Plugin Name: Form Reference Plugin
Plugin URI: https://gusspencer.com
Description: Multi-step form reference code.
Version: 0.0.19
Author: Gus Spencer
Author URI: https://gusspencer.com/design/
*/

//If accessed directly exit for security
if(!defined('ABSPATH')) {
  exit;
}

// Load scripts
require_once(plugin_dir_path(__FILE__).'/incs/wfp_scripts.php');

function wfp_shortcode() {
	ob_start();
	custom_registration_function();

	return ob_get_clean();
}


add_shortcode( 'wfp_form', 'wfp_shortcode' );



?>
