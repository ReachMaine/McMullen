<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );


//you can add custom functions below this line:
//require_once(get_stylesheet_directory().'/custom/reach-CTAs.php');
require_once(get_stylesheet_directory().'/custom/language.php');
require_once(get_stylesheet_directory().'/custom/divi.php');





/**
 * Check whether the page_id query string has been set,
 * and if so, redirect the user to homepage
 */
add_action('template_redirect','wpse339255_redirect_old_urls');
function wpse339255_redirect_old_urls(){
    // Check if the page_id query string is set
    if( isset( $_GET['page_id'] ) && ! empty( $_GET['page_id'] ) ){
        // Do the redirect
        wp_redirect( home_url() );
        die;
    }

}
