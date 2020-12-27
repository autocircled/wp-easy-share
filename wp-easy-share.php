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

if( !defined( 'WPESS_SHORTCODE_TEXT' ) ){
    define( 'WPESS_SHORTCODE_TEXT', apply_filters( 'wpess_shortcode_text', 'WPESS' ) );
}

if( !defined( 'WPESS_DIR_PATH' ) ){
    define( 'WPESS_DIR_PATH', plugin_dir_path( __FILE__ ));
}

if( !defined( 'WPESS_DIR_URL' ) ){
    define( 'WPESS_DIR_URL', plugins_url('/', __FILE__));
}
//var_dump(WPESS_DIR_PATH,WPESS_DIR_URL);

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

require_once plugin_dir_path( __FILE__ ) . 'includes/functions.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.inc.load.scripts.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.inc.shortcode.php';

// default plugin options
function wpess_default_options(){
    return array(
        'social_networks' => [ 'facebook', 'linkedin' ],
        
    );
}