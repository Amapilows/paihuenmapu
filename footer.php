<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>
	<footer background>
		<div class="footer">
			<ul>
				<li> <a> Inicio | </a></li>
				<li> <a> Cabañas | </a></li>
				<li> <a> Servicios | </a></li>
				<li> <a>FAQ | </a></li>
				<li> <a> Blog | </a></li>
				<li> <a> Contacto </a></li>
			</ul>
			<i class="fab fa-facebook-square"></i>
			<i class="fab fa-instagram"></i>

		</div>
	</footer>


</body>
</html>