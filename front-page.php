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

		  <div class="row">
		    <div class="col-sm cards_home">
		      	<div class="circle">
					<i class="fas fa-home"></i>
				</div>
				<h3 class="sub_title"> Cabañas</h3>
				<p> Contamos con cabañas full equipadas. Para que te desconectes y disfrutes de las maravillas de la Región de la Araunacía.
				<br>Disponibes áres de estacionamiento, y parrilas en cada casa, así puedes disfrutar tranquilamente con tu familia o con amigos.</p>
				<button class="btn btn-success btn__cards">Ver Más</button>			
		    </div>
		    <div class="col-sm cards_home">
				<div class="circle">
					<i class="fas fa-bus"></i>
				</div>
				<div class="description_home">
					<h3 class="sub_title"> Turismo</h3>
					<p> ¿Te gustaría recorrer Parques Nacinales, descubrir cascadas escondidas, o relizar un recorrido por termas o el Huilo Huilo?, tenemos equipamiento para ir a diversos lugares desde las termas geométricas hasta un recorrido especial por el parque Huilo Huilo</p>
					<button class="btn btn-success btn__cards">Ver Más</button>		
				</div>
				
		    </div>
		    <div class="col-sm cards_home">
				<div class="circle">
					<i class="fas fa-map-marked-alt"></i>
				</div>
				<h3 class="sub_title"> Ubicación</h3>
				<p> Nuestras cabañas se encuentran rodeadas de naturaleza. A 15 minutos del centro de Pucón. Tenemos accedor directo con el Río Turbio. </p>
				<button class="btn btn-success btn__cards">Ver Más</button>	
		    </div>
		  </div>
		
		<div class="slide-home">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/src/images/copihues.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/src/images/copihues.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/src/images/copihues.jpg" alt="First slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>			
			
		</div>
		
		<div class="row">
			<div class="col-lg-6 col-xs-12 google_maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3087.331491306524!2d-71.8921476840752!3d-39.303408828507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961386e8325c4f2d%3A0x83affd5a0ead1b2!2sCaba%C3%B1as+Paihuen+Mapu!5e0!3m2!1ses!2scl!4v1538323280354" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-lg-6 col-xs-12 form_contact">
				<h1 class="title_form">Reserva</h1>
		        <form class="offset-xl-0 col-xl-4 offset-lg-0 col-lg-4 offset-md-0 col-md-4 offset-sm-1 col-sm-10 offset-1 col-10 footer__form">

		          <input type="text" class="form__input form-control" id="inputName" placeholder="Nombre">
		          <input type="email" class="form__input form-control" id="inputMail" placeholder="Mail" aria-describedby="emailHelp">
		          <input type="text" class="form__input form-control" id="inputMessage" placeholder="Mensaje">

		          <button type="submit" class="form__button btn">Enviar</button>
    			</form>
			</div>		
		</div>

<?php get_sidebar() ?>

<?php get_footer() ?>
