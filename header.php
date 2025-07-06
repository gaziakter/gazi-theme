<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
      <?php endif;?>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="<?php echo home_url() ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-light.png" alt="Logo Light" class="logo-default">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.png" alt="Logo Dark" class="logo-scrolled">
      </a>

      <!-- Mobile toggle button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Right-side menu -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <?php gazi_primary_menu(); ?>
      </div>
    </div>
  </nav>
</header>

