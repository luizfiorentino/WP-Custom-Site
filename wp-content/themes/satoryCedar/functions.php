<?php
// Theme setup
function satory_tree_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'satoryCedar' ),
    ) );
}
add_action( 'after_setup_theme', 'satory_tree_theme_setup' );

// Additional functions
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri(), array(), time() ); 
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

