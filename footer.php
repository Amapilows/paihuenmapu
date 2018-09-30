
	<footer>
		<div class="footer">
			<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
			<?php } ?>

			<?php wp_footer() ?>
			<div class="information--footer">
				<p> <i class="fas fa-map-marker-alt"></i> Las Tranqueras, parcela 24, Condominio El Bosque, El Turbio. Pucón</p>				
				<p> <i class="fab fa-whatsapp"></i> +56 9 9125 6756</p>
				<a href="https://www.facebook.com/PaihuenMapu/" target="_blank">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/paihuen_mapu/" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
								
			</div>

		</div>
	</footer>


</body>
</html>