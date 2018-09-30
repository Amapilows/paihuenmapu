<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto+Condensed" rel="stylesheet">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>
<nav class="navbar navbar-expand flex-column flex-md-row bd-navbar fixed-top">
  <div class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" class="logo">
        </a>
  <div>
  <?php if ( has_nav_menu( 'header-menu' ) ) { ?>

  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
  <?php } ?>
</nav>
