<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
		<div class="home--banner">
			<div>
				<h4>reconéctate con la naturaleza</h4>
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
		    <div class="col-sm">
		      	<div class="circle">
					<i class="fas fa-home"></i>
				</div>
				<h3> Cabañas</h3>
				<p> listacdsfjshf</p>
				<button class="btn btn-success">Ver Más</button>			
		    </div>
		    <div class="col-sm">
				<div class="circle">
					<i class="fas fa-bus"></i>
				</div>
				<h3> Turismo</h3>
				<p> listacdsfjshf</p>
				<button class="btn btn-success">Ver Más</button>
		    </div>
		    <div class="col-sm cards_home">
				<div class="circle">
					<i class="fas fa-map-marked-alt"></i>
				</div>
				<h3> Ubicación</h3>
				<p> listacdsfjshf</p>
				<button class="btn btn-success">Ver Más</button>
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
		<div class="medio">
			<div class="col-lg-6 col-xs-12 form_contact">
				Aqui va el mapa de google
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
		<div class="row">
		  <div class="col-xs-6">.col-xs-6</div>
		  <div class="col-xs-6">.col-xs-6</div>
		</div>

<?php get_sidebar() ?>

<?php get_footer() ?>
