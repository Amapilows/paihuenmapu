<?php get_header() ?>
	
	<div class="container">
		<div class="row">
			<?php the_post() ?>
			<?php the_title() ?>
			<?php the_content(); ?>
			
			<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
				<?php dynamic_sidebar( 'contact_widget' ); ?>            
			<?php endif; ?>			
		</div>

	</div>


<?php get_footer() ?>