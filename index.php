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
        <?php gazi_pagination(); ?>

    <?php else : ?>
        <p class="text-center">No posts found.</p>
    <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
