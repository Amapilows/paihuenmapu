<?php get_header() ?>
	<?php 
		$imagen = get_the_post_thumbnail_url();
	 ?>

	<div class="page_style">
		<div class="contenido-hero" style="background-image: url("<?php get_the_post_thumbnail_url(); ?>");"
			<div class="textto-hero">

				<?php the_post() ?>
				<?php the_title() ?>
				<?php the_content(); ?>		
			</div>

		</div>		
	</div>
		<?php the_post_thumbnail();  ?>	



	            
	



<?php get_footer() ?>