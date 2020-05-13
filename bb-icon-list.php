<?php
/**
 * Plugin Name: V Icon List Module
 * Plugin URI:
 * Description: Custom module for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: vipul
 * Author URI:
 *
 * @package Custom BB Module.
 */

define( 'ICON_LIST_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'ICON_LIST_MODULE_URL', plugins_url( '/', __FILE__ ) );

/**
 * Summary Beaver Builder Custom Module Function.
 *
 * Description The function is for creating the custom module for beaver builder.
 *
 * @since 1.0.0
 *
 * @see Function/method/class relied on
 * @link URL
 * @global type $varname Description.
 * @global type $varname Description.
 *
 * @param type $var Description.
 * @param type $var Optional. Description. Default.
 * @return type Description.
 */
function icon_list_module_load() {
	if ( class_exists( 'FLBuilder' ) ) {

		require_once 'vc-icon-list/vc-icon-list.php';
	}
}
add_action( 'init', 'icon_list_module_load' );
