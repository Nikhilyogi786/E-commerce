<?php
// Enqueue scripts and styles
function child_theme_scripts() {
    // Enqueue parent theme style.css
    wp_enqueue_style( 'ecom-store-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue custom JavaScript file
    wp_enqueue_script( 'ecom-custom-script', get_stylesheet_directory_uri() . '/custom.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu' ));
 }
 add_action( 'init', 'register_my_menu' );