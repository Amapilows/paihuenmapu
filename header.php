<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Raleway" rel="stylesheet">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>
	<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar fixed-top">
		<nav class="navbar navbar-expand-lg ">
		  <a class="navbar-brand" href="#">
    		<img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" class="logo">
  		  </a>
		  <div class="collapse navbar-collapse navbar-right" id="navbarNav">
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Cabañas</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Servicios</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">FAQ</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Contacto</a>
		      </li>		      		      
		    </ul>
		  </div>
		</nav>

	</header>
<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>