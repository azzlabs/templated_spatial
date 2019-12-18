		<!-- Footer -->
        <footer id="footer">
				<div class="container">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_social',
                            'container' => 'ul',
                            'menu_class' => 'icons',
                            'walker' => new Social_Nav_Walker
                        ));
                    ?>
					<?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_credits',
                            'container' => 'ul',
                            'menu_class' => 'copyright'
                        ));
                    ?>
				</div>
			</footer>

		<!-- Scripts -->
		<?php wp_footer(); ?>

	</body>
</html>