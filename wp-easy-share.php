<?php
/**
 * Plugin Name: Easy Social Share
 * Plugin URI: 
 * Description: 
 * Version: 1.0.0
 * Author: autocircle
 * Author URI: https://devhelp.us/
 * Text Domain: wp-easy-share
 * Domain Path: /languages/
 *
 * @author autocircle
 * @package WordPress Easy Share
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Do not open this file directly.' );
}

/**
* Including Plugin file for security
* Include_once
* 
* @since 1.0.0
*/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Default Configuration for WP Easy Social Share
 * 
 * @since 1.0.0
 */

require_once plugin_dir_path( __FILE__ ) . 'includes/functions.php';

// if admin area
if( is_admin() ) {
    
    // include dependencies
    require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';

}
