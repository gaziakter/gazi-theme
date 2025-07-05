<?php
function gazi_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', [ 'comment-form', 'comment-list', 'gallery', 'caption', 'search-form' ] );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );

    // Load text domain
    load_theme_textdomain( 'gazi-theme', get_template_directory() . '/languages' );

    add_editor_style( 'assets/css/editor-style.css' );

    //Refresh Widgest
    add_theme_support( 'customize-selective-refresh-widgets' );

    remove_theme_support( 'widgets-block-editor' );


    add_theme_support( 'post-formats', array( 
        'image', 
        'video', 
        'audio', 
        'gallery', 
        'quote' 
    ));

    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu','gazi-theme'),
            'footer-menu' => __('Footer Menu','gazi-theme'),
        )
    );
}
add_action( 'after_setup_theme', 'gazi_theme_setup' );
