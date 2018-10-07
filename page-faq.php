<?php get_header() ?>
	

	<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>">
		<div class="contenedor-hero">
			<div class="texto-hero">
				<h1><?php the_title() ?></h1>
				
			</div>
		</div>
	</div>
	
	<div class="principal container">
		<div class="texto-centrado contenido-paginas">
			<?php the_content(); ?>				
		</div>
	</div>


<?php get_footer() ?>