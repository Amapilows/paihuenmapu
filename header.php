<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto+Condensed" rel="stylesheet">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>
  <nav class="navbar fixed-top">
    <div class="menu_principal">
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" class="logo">
      </a>
      <div class="mobile_menu">
        <a href="#" class="mobile"><i class="fas fa-bars"></i></a>
      </div> 

      <div class="navbar-nav ml-auto">
        <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
        <?php wp_nav_menu( array( 
          'theme_location' => 'header-menu',
          'container' => 'nav', 
          'container_class' => 'header_menu' 
          ) ); ?>
        <?php } ?> 
          
      </div>
      
    </div>

  </nav>
