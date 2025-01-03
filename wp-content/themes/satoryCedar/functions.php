<?php
// Theme setup
function satory_tree_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'satoryCedar' )
    ) );
}
add_action( 'after_setup_theme', 'satory_tree_theme_setup' );

function customtheme_setup() {
    register_nav_menus( array(
        "secondary" => __("Secondary Menu" , "satoryCedar")
    ));
    add_theme_support( "title-tag");
}
add_action('after_setup_theme', 'customtheme_setup');

// Additional functions
function my_theme_enqueue_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style('playwrite-font', 'https://fonts.googleapis.com/css2?family=Playwrite+TZ+Guides&family=Playwrite+TZ:wght@100..400&display=swap', array(), null);

    // Enqueue Bootstrap CSS (using Bootstrap 4)
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css', array(), '4.3.1');
    
    // Enqueue Theme CSS 
    wp_enqueue_style('my-theme-style', get_stylesheet_uri(), array('bootstrap-css'), time());

    // Enqueue jQuery (for Bootstrap 4 JS to work properly)
    wp_enqueue_script('jquery');
    
    // Enqueue Popper.js (required for Bootstrap 4 JS to work)
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array('jquery'), '1.14.7', true);

    // Enqueue Bootstrap 4 JS (requires jQuery and Popper.js)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array('jquery', 'popper'), '4.3.1', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

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

// function theme_enqueue_scripts() {
//     wp_enqueue_script( 'menu-toggle', get_template_directory_uri() . '/js/menu.js', array(), null, true );
// }
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

if ( ! function_exists( 'custom_shortcode') ) :
function custom_shortcode( $atts , $content = null ) {
    return '<div class="col-sm-4">' . $content . '</div>';
}
add_shortcode( 'one_third', 'custom_shortcode');
endif;
// To remove eg. WP's auto generated paragraph tags
// remove_filter( 'the_content' , 'wpautop';)

function customtheme_widgets() {
    register_sidebar( array (
        'name' => __('Sidebar', 'customtheme'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in the sidebar', 'customtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'customtheme_widgets');

?>



