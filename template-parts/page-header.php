<?php
// Get featured image and title
if ( is_home() && ! is_front_page() ) {
    $posts_page_id = get_option('page_for_posts');
    $background_image = get_the_post_thumbnail_url( $posts_page_id, 'full' );
    $title = get_the_title( $posts_page_id );
} elseif ( is_archive() ) {
    $background_image = ''; // Add fallback if needed
    $title = get_the_archive_title();
} elseif ( is_search() ) {
    $background_image = '';
    $title = 'Search Results for: ' . get_search_query();
} else {
    $background_image = get_the_post_thumbnail_url( get_queried_object_id(), 'full' );
    $title = get_the_title();
}

$header_classes = $background_image ? 'page-header' : 'page-header no-image';
?>

<section class="<?php echo esc_attr($header_classes); ?>" style="<?php if ($background_image) echo 'background-image: url(' . esc_url($background_image) . ');'; ?>">
    <?php if ($background_image): ?>
        <div class="header-overlay"></div>
        <div class="title-content">
            <h1 class="display-4"><?php echo esc_html($title); ?></h1>
        </div>
    <?php else: ?>
        <h1 class="display-4"><?php echo esc_html($title); ?></h1>
    <?php endif; ?>
</section>