<article <?php post_class('mb-4'); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="text-muted"><?php the_time('F j, Y'); ?></p>
    <?php the_excerpt(); ?>
</article>
