<?php get_header() ?>
	<?php 
		$imagen = get_the_post_thumbnail_url();
	 ?>
	<?php the_post_thumbnail();  ?>	
	<h1><?php the_title() ?></h1>
	<div class="page_style">
		<div class="contenido-hero" style="background-image: url("<?php get_the_post_thumbnail_url(); ?>");"
			<div class="textto-hero col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">

				<?php the_post() ?>
				<?php the_title() ?>
				<?php the_content(); ?>		
			</div>

		</div>		
	</div>




	            
	



<?php get_footer() ?>