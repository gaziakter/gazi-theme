<?php
// Theme Setup
function gazi_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');

    register_nav_menus([
        'primary' => __('Primary Menu', 'gazi-theme')
    ]);
}
add_action('after_setup_theme', 'gazi_theme_setup');

// Enqueue Styles and Scripts
function gazi_theme_enqueue_scripts() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], '5.3', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'gazi_theme_enqueue_scripts');

// Register Sidebar
function gazi_theme_widgets_init() {
    register_sidebar([
        'name'          => __('Sidebar', 'gazi-theme'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'gazi_theme_widgets_init');

// WooCommerce Support
function gazi_theme_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'gazi_theme_woocommerce_support');




// Inclode file
require_once get_template_directory() . '/inc/class-bootstrap-navwalker.php';
