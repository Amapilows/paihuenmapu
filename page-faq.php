<?php get_header() ?>
	
	<?php while(have_post()): the_post() ?>
		<div class="hero">
			<div class="contenedor-hero">
				<div class="texto-hero">
					<?php the_title('<h1>, </h1>') ?>
					
				</div>
			</div>
		</div>

		<div class="prinipal-contenedor">
			<main class="text-centrado contenido-paginas">
				<?php the_content(); ?>			
			</main>
		</div>
	<?php endwhile; ?>


<?php get_footer() ?>