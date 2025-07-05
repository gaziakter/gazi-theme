<?php

// Primariy Menu
function gazi_primary_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'primary-menu',
            'menu_class'      => 'navbar-nav ms-auto',
            'menu_id'         => '',
            'fallback_cb'     => 'Bootstrap_NavWalker::fallback',
            'walker'     => new Bootstrap_NavWalker,
        ) 
    ); 
}