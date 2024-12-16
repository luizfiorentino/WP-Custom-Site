<?php
// Theme setup
function satory_tree_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'satoryCedar' ),
    ) );
}
add_action( 'after_setup_theme', 'satory_tree_theme_setup' );

// Additional functions

