<?php get_header(); ?>

<main class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('templates/parts/content');
                endwhile;
                the_posts_pagination();
            else :
                echo '<p>No content available.</p>';
            endif;
            ?>
        </div>
        <aside class="col-md-4">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
