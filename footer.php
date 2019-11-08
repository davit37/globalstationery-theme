	</div>
	
	<div class='container-fluid pl-0 pr-0 '>
		<div class="footer-dark">
			<div class='container'>
				<nav class="navbar navbar-expand-md navbar-footer pt-0" role="navigation">
					<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
				
					
						<?php
						wp_nav_menu( array(
							'menu'              =>'footer-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
						?>
					</div>
				</nav>

				<div class="copyright-footer">
					
					<p>Copyright 2019 © <strong>Global Stationery Indonesia</strong>. </p>
					
					   
			   </div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugin/slick/slick.min.js"></script>
	<script  src="<?php bloginfo('template_url'); ?>/plugin/flickity/flickity.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/main.js?v=05112019"></script>
				

	<?php wp_footer(); ?>
</body>
</html>