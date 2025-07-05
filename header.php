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
        <a class="navbar-brand d-flex align-items-center" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-light.png" alt="Logo Light" class="logo-default"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.png" alt="Logo Dark" class="logo-scrolled"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.html">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul><a href="talk.html" class="btn btn-green ms-3">Let's Talk</a>
        </div>
      </div>
    </nav>
  </header>
