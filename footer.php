	</div>

	<div class="footer-dark ">
		<div class='container '>
			<div class=''>
		
				<nav id='footer-navbar' class="navbar navbar-expand-md navbar-footer p-0 justify-content-sm-center justify-content-md-center justify-content-lg-start" role="navigation">
					
					<!-- Brand and toggle get grouped for better mobile display -->
				
					
						<?php
						wp_nav_menu( array(
							'menu'              =>'footer-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => ' ',
							'container_id'      => '',
							'menu_class'        => 'nav navbar-nav justify-content-center ',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
						?>
					
				</nav>
				<div class="copyright-footer p-0  ">
					
					<p class='text-center text-lg-left text-md-center'>Copyright 2019 © <strong>Global Stationery Indonesia</strong>. </p>
					
						
				</div>
			</div>
		</div>
	
	</div>


	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugin/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugin/flickity/flickity.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugin/easyzoom/js/easyzoom.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script/main.js?v=08112019"></script>
				

	<?php wp_footer(); ?>
</body>
</html>