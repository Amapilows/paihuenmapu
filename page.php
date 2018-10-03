<?php get_header() ?>
	
	<?php the_post_thumbnail();  ?>	

		<div class="container">
		<div class="row">

		<?php the_post() ?>

		<?php the_title() ?>
		<?php the_content(); ?>		
		</div>

	</div>

	            
	



<?php get_footer() ?>