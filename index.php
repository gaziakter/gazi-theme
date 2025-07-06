<?php get_header(); 

echo get_template_part( 'template-parts/page-header');
?>

<div class="container my-5">
    <?php if ( have_posts() ) : ?>
        <div class="row gy-5 gx-5">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 mb-4">
                  <?php echo get_template_part( 'template-parts/content'); ?>
                  </div>
            <?php endwhile; ?>


        <nav class="mt-4" aria-label="Page navigation">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '&laquo; Previous',
                'next_text' => 'Next &raquo;',
                'screen_reader_text' => 'Posts navigation',
                'class' => 'pagination justify-content-center',
            ));
            ?>
        </nav>

    <?php else : ?>
        <p class="text-center">No posts found.</p>
    <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
