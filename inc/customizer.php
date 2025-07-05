<?php
function gazi_theme_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'gazi_theme_header', [
        'title' => __( 'Header Settings', 'gazi-theme' ),
        'priority' => 30,
    ]);

    $wp_customize->add_setting( 'header_bg_color', [
        'default' => '#ffffff',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color_control', [
        'label' => __( 'Header Background Color', 'gazi-theme' ),
        'section' => 'gazi_theme_header',
        'settings' => 'header_bg_color',
    ]));
}
add_action( 'customize_register', 'gazi_theme_customize_register' );
