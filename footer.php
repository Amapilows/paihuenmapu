
	<footer>
		<div class="footer">
			<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
			<?php } ?>

			<?php wp_footer() ?>

		</div>
	</footer>


</body>
</html>