<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); // Hook for WordPress to add styles/scripts ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </h1>
            
            
            <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
            &#9776;
        </button>
            <nav class="main-navigation">
                <div class="iconItems">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu',
                    'container_id'   => 'primary-menu',
                ) );
                ?>
                </div>
            </nav>
        </div>
    </header>
