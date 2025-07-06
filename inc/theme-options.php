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


    //Pagination 
    function gazi_pagination(){
    $pagination_links = paginate_links(array(
        'mid_size' => 2,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type' => 'array',
    ));

    if ($pagination_links) :
    ?>
        <nav class="mt-4" aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                foreach ($pagination_links as $link) {
                    $active = strpos($link, 'current') !== false ? 'active' : '';
                    echo '<li class="page-item ' . $active . '">' . str_replace('page-numbers', 'page-link custom-page-link', $link) . '</li>';
                }
                ?>
            </ul>
        </nav>
    <?php endif;
}