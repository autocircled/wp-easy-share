<?php // WP Easy Social Share - Admin Menu

if ( !defined( 'ABSPATH' ) ) {
    die( 'Do not open this file directly.' );
}

if( !function_exists( 'wpess_register_menu' ) ){
    function wpess_register_menu(){
        add_menu_page( 
            __( 'WP Easy Social Share', 'wpess' ),
            __( 'WP Easy Social Share', 'wpess' ),
            'manage_options',
            'wp-easy-social-share',
            'wp_easy_social_share_callback',
            '',
            10
        );
    }
}

add_action( 'admin_menu', 'wpess_register_menu' );