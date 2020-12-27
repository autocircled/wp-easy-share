<?php // WP Easy Social Share - Common Functions

function wpess_load_scripts(){
    wp_register_style( 'wpess', WPESS_DIR_URL . 'public/css/style.css' );
    wp_enqueue_style( 'wpess' );
}

add_action( 'wp_enqueue_scripts', 'wpess_load_scripts' );