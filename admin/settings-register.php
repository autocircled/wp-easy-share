<?php // WP Easy Social Share - Settings Register

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Do not open this file directly.' );
}

// register settings
if( ! function_exists( 'register_wpess_settings' ) ) {
    /**
     * 
     */
    function register_wpess_settings() { 
        // whitelist options
        register_setting(
            'wpess_settings',
            'social_networks',
            'wpess_callback_validate_options'
        );
        
        add_settings_section( 
            'wpess_social_networks_list',
            'Social Networks',
            'wpess_callback_social_networks',
            'wp-easy-social-share'
        );
        add_settings_section(
            'wpess_social_networks_appearance',
            'Appearance',
            'wpess_callback_social_networks_appearance',
            'wp-easy-social-share'
        );
        
        add_settings_field(
            'widget-position',
            __( 'Widget Positions', 'wpess' ),
            'wpess_callback_field_checkbox', // callback function
            'wp-easy-social-share', // menu slug
            'wpess_social_networks_appearance', // field location
            [ 'id' => 'wpess_positions', 'label' => 'xxxx' ]
        );
    }
}

add_action( 'admin_init', 'register_wpess_settings' );
