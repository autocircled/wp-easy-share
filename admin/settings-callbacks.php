<?php // WP Easy Social Share - Settings Callbacks

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Do not open this file directly.' );
}

// callback: validate_options
function wpess_callback_validate_options($args){
    var_dump($args);
    return $args;
}

// callback: social_networks
function wpess_callback_social_networks(){
    
    echo '<p>This area is for social networks enable/disable purpose.</p>';
    $checked_networks = get_option('social_networks');
//    var_dump($checked_networks);
    ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row"><?php echo esc_html__( 'Select Social Networks', 'wpess' ); ?></th>
            <td>
                <ul>
                <?php 
                $social_networks = array(
                    'facebook' => __( 'Facebook', 'wpess' ),
                    'twitter' => __( 'Twitter', 'wpess' ),
                    'linkedin' => __( 'LinkedIn', 'wpess' ),
                    'pinterest' => __( 'Pinterest', 'wpess' ),
                    'reddit' => __( 'Reddit', 'wpess' ),
                    'instagram' => __( 'Instagram', 'wpess' ),
                    'whatsapp' => __( 'Whatsapp', 'wpess' ),
                    'gosocial' => __( 'Go Social', 'wpess' )
                );
                foreach ($social_networks as $key => $name){
                    $isChecked = false;
                    if(!empty($checked_networks)){
                        $isChecked = $checked_networks[$key];
                    }
                    $isChecked = $isChecked == 'on' ? 'checked' : '';
                    ?>
                    <li>
                        <input type="checkbox" id="social-networks[<?php echo esc_attr( $key );?>]" name="social_networks[<?php echo esc_attr( $key );?>]" value="on" <?php echo esc_attr( $isChecked ); ?>/>
                        <label for="social-networks[<?php echo esc_attr( $key );?>]"><?php echo esc_html( $name );?></label>
                    </li>
                    <?php
                }?>
                </ul>
            </td>
        </tr>

    </table>    
    <?php
}

// callback: social_networks_appearance
function wpess_callback_social_networks_appearance(){
    
    echo '<p>This area is for social networks appearance purpose.</p>';
    
}

function wpess_callback_field_checkbox( $args ){
    
    $options = get_option( 'social_networks', wpess_default_options() );
    var_dump($options);
    
    
    
}