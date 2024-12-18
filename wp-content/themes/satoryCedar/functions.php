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

function subtitle_metabox() {
    add_meta_box(
        'subtitle_metabox_id',             
        'Subtitle',      
        'subtitle_metabox_callback',       
        'post',                      // Screen: 'post' or 'page'
        'side'                       // Location: 'normal', 'side', 'advanced'
    );
}
add_action( 'add_meta_boxes', 'subtitle_metabox' );

// Metabox content
function subtitle_metabox_callback( $post ) {
    echo '<label for="custom_subtitle_field">Enter Value:</label>';
    echo '<input type="text" name="custom_subtitle_field" id="custom_subtitle_field" value="' . get_post_meta( $post->ID, 'custom_subtitle_field', true ) . '" />';
}

function save_custom_meta_subtitle( $post_id ) {
    if ( isset( $_POST['custom_subtitle_field'] ) ) {
        update_post_meta( $post_id, 'custom_subtitle_field', sanitize_text_field( $_POST['custom_subtitle_field'] ) );
    }
}
add_action( 'save_post', 'save_custom_meta_subtitle' );

function theme_enqueue_scripts() {
    wp_enqueue_script( 'menu-toggle', get_template_directory_uri() . '/js/menu.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );




