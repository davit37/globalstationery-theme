	</div>
	
	<div class='container-fluid pl-0 pr-0  position-absolute' style='bottom:0'>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$('.mySlider').slick({
				dots: true,
				infinite: true,
				autoplay: true,
 				autoplaySpeed: 2000,
			
			});

			$('.category-slide').slick({
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true,
				autoplay: false,
				nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
				prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',
  				
				
			
			});

			$('.blog-slide').slick({
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true,
				nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
				prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',
  				
			
			});

			$('.galary-products-for').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				asNavFor: '.galary-products-nav',
				nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
				prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',
  				
			});

			$('.galary-products-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				asNavFor: '.galary-products-for',
				centerMode: true,
				focusOnSelect: true,
				nextArrow: '<button type="button" class="slide-button next-button"><i class="fas fa-chevron-right"></i></button>',
				prevArrow: '<button type="button" class="slide-button prev-button"><i class="fas fa-chevron-left"></i></button>',
  				
				
				});
			});
  	</script>
	<?php wp_footer(); ?>
</body>
</html>