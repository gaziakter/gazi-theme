<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-light py-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'navbar-nav ms-auto',
                    'fallback_cb' => '__return_false',
                    'depth' => 2,
                    'walker' => new Bootstrap_NavWalker()
                ]);
                ?>
            </div>
        </nav>
    </div>
</header>
