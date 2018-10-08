<?php /* Template Name: Contacto */ ?>
<?php get_header() ?>
	<div class="container-contact">
		<img src="<?php echo get_field('banner')['url']; ?>" alt="" class="banner-contact">
		<h1><?php the_title() ?></h1>		
	</div>

	<div class="container">
		<div class="row">
			<div class="contact--form">
				<form action="">
					<label for="">Nombre</label>
					<input type="" name="Coloca tu nombre">

				</form>
				
			</div>			
		</div>
		
	</div>

<?php get_footer()  ?>	