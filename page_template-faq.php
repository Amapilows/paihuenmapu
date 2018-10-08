<?php /* Template Name: Faq */ ?>
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
			<?php the_post() ?>
			<?php the_content(); ?>					
		</div>
	</div>

	<div class="gallery--faq">
		<h2>Aquí deberían ir las malditas galerías</h2>
		<?php if( have_rows('hero') ): 

			while( have_rows('hero') ): the_row(); 
				
				// vars
				$image = get_sub_field('image');
				$link = get_sub_field('link');
				
				?>
				<div id="hero">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<div class="content">
						<?php the_sub_field('caption'); ?>
						<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
					</div>
				</div>
				<style type="text/css">
					#hero {
						background: <?php the_sub_field('color'); ?>;
					}
				</style>
			<?php endwhile; ?>
			
		<?php endif; ?>
	</div>


<?php get_footer() ?>