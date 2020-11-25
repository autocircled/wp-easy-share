<?php // WP Easy Social Share - Settings Page

if ( !defined( 'ABSPATH' ) ) {
    die( 'Do not open this file directly.' );
}

if( !function_exists( 'wp_easy_social_share_callback' ) ){
    function wp_easy_social_share_callback(){
        
        if( ! current_user_can( 'manage_options' ) ) return;
        
        ?>
        <div class="wrap">
            <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
            <form method="post" action="options.php"> 
                <?php
                settings_fields( 'wpess_settings' );
                do_settings_sections( 'wp-easy-social-share' );                
                submit_button(); ?>
            </form>
        </div>
<?php
    }
}
