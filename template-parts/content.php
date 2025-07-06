
        <article class="blog-post">
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid rounded mb-3">
                </a>
            <?php endif; ?>

            <div class="post-info mb-3">
                <div class="date mb-1">
                    <i class="bi bi-calendar3 me-1"></i><?php echo get_the_date(); ?>
                </div>
                <div class="categories">
                    <i class="bi bi-tags me-1"></i>
                    <?php
                    $categories = get_the_category();
                    if ( $categories ) {
                        $cat_links = array();
                        foreach ( $categories as $cat ) {
                            $cat_links[] = '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="text-decoration-none text-success">' . esc_html( $cat->name ) . '</a>';
                        }
                        echo implode( ' | ', $cat_links );
                    }
                    ?>
                </div>
            </div>

            <h5 class="fw-bold">
                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
            </h5>

            <p class="text-muted"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>

            <a href="<?php the_permalink(); ?>" class="btn btn-outline-success btn-sm">Read More →</a>
        </article>