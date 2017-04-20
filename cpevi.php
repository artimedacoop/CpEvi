<?php
/*
Plugin Name: CpEvi PDF
Plugin URI: https://evidenza.itDescription: Require from users to confirm email upon registration in AppThemes themes.

Version: 1.4.20
Author: EvidenzaIt
Author URI: https://evidenza.it/chi-siamo*
Text Domain: cpevi-pdf
Domain Path: /languages
*/

define( 'CE_TD', 'cpevi-pdf' );

// Avoid calling file directly.
if ( ! function_exists( 'add_action' ) ) {
	die( 'Whoops! You shouldn\'t be doing that.' );
}


// Load Text-Domain.
 function cpevi_textdomain() {
	load_plugin_textdomain( CE_TD, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'cpevi_textdomain' );

