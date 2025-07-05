<?php
/**
 * Enqueue theme styles and scripts.
 */

function gazi_enqueue_assets() {

	wp_enqueue_style( 'google-fonts', gazi_fonts_url(), array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'unpkg', 'https://unpkg.com/aos@2.3.4/dist/aos.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'gazi-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animations.css', array(), '1.0.0', 'all' );

    wp_enqueue_script( 'unpkg', 'https://unpkg.com/aos@2.3.4/dist/aos.js', array(), 1.1, true );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), 1.1, true );
    wp_enqueue_script( 'gazi-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true );

}
add_action( 'wp_enqueue_scripts', 'gazi_enqueue_assets' );



/*
Register Fonts
 */
function gazi_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'gazi-theme' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Quicksand:wght@400;500;600;700&amp;display=swap');
    }
    return $font_url;
}