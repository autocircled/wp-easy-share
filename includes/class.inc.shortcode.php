<?php
if ( ! defined('ABSPATH') ) exit;  // if direct access

class Class_WPESS_Shortcode {
    
    public function __construct() {
        add_shortcode( WPESS_SHORTCODE_TEXT, array( $this, 'wpess_shortcode_callback' ) );
    }
    
    /**
     * This function generates the social buttons
     * 
     * @param type $atts
     * @return social share buttons
     */
    public function wpess_shortcode_callback( $atts ){
        
        $atts = shortcode_atts( 
                array(
                        'theme' => 'theme01',
                ), $atts );
        
        ob_start();
        echo '<h1>Share Plugin by Mukul</h1>';
        
        $wpess_script_instance = new Class_WPESS_Load_Scripts();
        
        // @todo need to dynamically get theme name from database
        $wpess_script_instance->enqueue_script( 'theme02' );
        
        ?>

        <div class="wpess-wrapper">
            <ul>
                <li><a href="https://facebook.com">Facebook</a></li>
                <li><a href="https://facebook.com">Twitter</a></li>
                <li><a href="https://facebook.com">Youtube</a></li>
                <li><a href="https://facebook.com">Instagram</a></li>
            </ul>
        </div>
        <?php
        
        return ob_get_clean();
        
    }
    
}
new Class_WPESS_Shortcode();