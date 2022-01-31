<?php
/**
 * Theme Functions.
 *
 * @package Light
 */

use Light_THEME\Inc\LIGHT_THEME;

if ( ! defined( 'LIGHT_DIR_PATH' ) ) {
    define( 'LIGHT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'LIGHT_DIR_URI' ) ) {
    define( 'LIGHT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once LIGHT_DIR_PATH.'/inc/helpers/autoloader.php';


function light_get_theme_instance(){

   LIGHT_THEME::get_instance();
}
light_get_theme_instance();

function light_enqueue_scripts()
{
    

}

add_action( 'wp_enqueue_scripts', 'light_enqueue_scripts' );
