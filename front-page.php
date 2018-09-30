<?php get_header() ?>
	<?php the_post() ?>

		<div class="home--banner">
			<div class="col-md-offset-3 banner-text">
				<h4 class="title_banner">reconéctate con la naturaleza</h4>
				<p> Cabañas paihuen mapu, ubicadas  entre bosques cerca del río tubio a 10 minutos de pucón y la naturaleza</p>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<h1 class="title">¿Qué puedes encontrar?</h1>	
				</div>
			</div>
		</div>

		<div class="container">
		  <div class="row">
		    <div class="col-sm cards_home">
		      	<div class="circle">
					<i class="fas fa-home"></i>
				</div>
				<h3 class="sub_title"> Cabañas</h3>
				<p> listacdsfjshf</p>
				<button class="btn btn-success btn__cards">Ver Más</button>			
		    </div>
		    <div class="col-sm cards_home">
				<div class="circle">
					<i class="fas fa-bus"></i>
				</div>
				<div class="description_home">
					<h3 class="sub_title"> Turismo</h3>
					<p> listacdsfjshf</p>
					<button class="btn btn-success btn__cards">Ver Más</button>		
				</div>
				
		    </div>
		    <div class="col-sm cards_home">
				<div class="circle">
					<i class="fas fa-map-marked-alt"></i>
				</div>
				<h3 class="sub_title"> Ubicación</h3>
				<p> listacdsfjshf</p>
				<button class="btn btn-success btn__cards">Ver Más</button>	
		    </div>
		  </div>
		</div>
		
		<div id="carouselExampleSlidesOnly" class="carousel slide slider" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/src/images/copihues.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/src/images/copihues.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/src/images/copihues.jpg" alt="Third slide">
		    </div>
		  </div>
		</div>
			<div class="row">
				<div class="col-lg-6 col-xs-12 form_contact">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3087.331491306524!2d-71.8921476840752!3d-39.303408828507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961386e8325c4f2d%3A0x83affd5a0ead1b2!2sCaba%C3%B1as+Paihuen+Mapu!5e0!3m2!1ses!2scl!4v1538323280354" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-lg-6 col-xs-12 form_contact">
					<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>	
				</div>		
			
		</div>

<?php get_sidebar() ?>

<?php get_footer() ?>
