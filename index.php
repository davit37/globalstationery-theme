<?php get_header(); ?>

<?php

$args = array(
	'post_type'       => 'product',
	'post_status'     => 'publish',
	'orderby'   => 'rand',
	
   
);
$products = new WP_Query( $args );

?>





 <div class='section'>
	<div class='container container-slider ' >

		<h5 class='section-title'>
			<b></b>  
				<span class='section-title-main'>future products</span>
			<b></b>
		</h5>


		<div class='row mt-4'>
			
			<div class='col-12  pl-0 pr-0'>
				<div class='category-slide'  data-flickity-options="" tabindex="0">
				

				<?php if($products->have_posts()) :?>

				
					 <?php while( $products->have_posts() ) :  $products->the_post(); ?>
					
					<div class="carousel-cell col">
						<div class='col-inner'>
							<a href="<?php echo get_permalink()?>">

								<div class='box box-content'>
										<div class='box-image'>
											<div class='image-cover'>
											<img src="<?php echo  get_the_post_thumbnail_url(); ?>" class="slider-img" alt="...">

											</div>

										</div>
										<div class="box-text ">
											<div class='box-text-inner'>
												<h5 class=''><?php echo wp_trim_words(the_title(), 4, '..' )?></h5>
												<p class='is-xsmall text-uppercase '><?php echo wp_trim_words( "Lorem ipsum dolor sit amet, eos ne blandit e", 4, '..' ) ?></p>

											</div>
										</div>
									
								</div>
								
								
							</a>
						</div>
					</div>
					
				<?php  endwhile; ?>

				<?php endif;?>
				</div>

			</div>
		</div>
	</div>

	<div class='banner mt-5'>
		<div class='banner-inner fill'>
			<div class='banner-bg fill'>
				<div class='bg-loaded fill'>

				</div>
				<div class='overlay'></div>
			</div>

			<div class='container'>
				<div class='row justify-content-center mt-5'>
					<div class='col-8 col-md-6 col-lg-4  text-center text-white'>
						<h3 class="uppercase" ><strong>RETAIL OR WHOLESALE?</strong></h3>
						<p class="lead text-center">We have great offers available!<br>Please contact us with your enquiries</p>

						<a href="/contact-us" class="btn  button-transparent" role="button" aria-pressed="true">Get in Touch</a>
					</div>

				</div>
			</div>
		</div>

	</div>




	<div class='container mt-3'>

		<h5 class='section-title'>
			<b></b>  
				<span class='section-title-main section-title-border'>From The Blog</span>
			<b></b>
		</h5>

		


		<div class='row mt-4'>
			
			<div class='col-12 pl-0 pr-0'>
				<div class='blog-slide '  >
					<?php
						$args = array('post_type'=> 'blog', );
						$recent_posts = new WP_Query($args);
						while( $recent_posts->have_posts() ) {
						
							$recent_posts->the_post() ; 
							
							if ( has_post_thumbnail() ) {
								?>

								<div class='col blog-items'>
									<div class='col-inner'>
										<a href="<?php echo get_permalink()?>">
											
												
												<div class="box box-blog" >
													<div class='box-date'>
														<div class='bedge-inner'>
															<span class='date-day'><?php echo get_the_date('d')?></span><br>
															<span class='date-month'><?php echo get_the_date('M')?></span>
														</div>						
													</div>

													<div class='box-image' >
														<div class='image-cover' style='padding-top:180px;'>
															<img src="<?php echo  get_the_post_thumbnail_url(); ?>"/>
														</div>
													
													</div>
												
													<!-- <div class="card-body">
														<p class='card-title'>
															<?php echo  the_title(); ?>
														</p>
														<p class='text-preview'>
															
														</p>
													</div> -->

													<div class='box-text text-center'>
														<div class='box-text-inner'>
															<h5 class='blog-title is-large font-weight-bold'>
																<?php echo  the_title(); ?>
															</h5>
															<div class="is-divider small" style='margin: 15px auto;'></div>
															<p class='is-xsmall  text-center blog-description'>
																<?php echo wp_trim_words( get_the_content(), 13, ' [...]' ) ?>
															</p>
														</div>
													</div>
												</div>

											
										</a>
									</div>
									
								</div>
							
							<?php
							}
						}
						wp_reset_postdata();
					?> 
				</div>	
			</div>

		</div>
	</div>
</div>


<?php get_footer(); ?>