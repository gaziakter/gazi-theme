<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();

                    // Handle pagination if page is split using <!--nextpage-->
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'your-textdomain'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>

            <?php
        endwhile;
    else :
        echo '<p>' . __('Sorry, no content found.', 'your-textdomain') . '</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
