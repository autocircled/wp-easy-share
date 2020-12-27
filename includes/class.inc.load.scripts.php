<?php
if ( ! defined('ABSPATH') ) exit;  // if direct access

class Class_WPESS_Load_Scripts{
    
    public function enqueue_script( $theme = 'theme01' ){
        
        add_action( 'wp_enqueue_styles', array( $this, $this->wpess_theme_style( $theme ) ) );
        
    }
    
    private function wpess_theme_style( $theme ){
        
        $theme_root_url =  WPESS_DIR_URL . 'public/css/';
        wp_register_style( 'wpess-'. $theme, $theme_root_url . $theme .'/style.css', array( 'wpess' ) );
        wp_enqueue_style( 'wpess-'. $theme );
        
    }
}

new Class_WPESS_Load_Scripts();
