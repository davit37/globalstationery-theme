<?php get_header(); ?>

<?php $images = getSlider(); ?>

<?php 

// echo "<pre>";print_r($images); echo"</pre>";?>

<div class='container-slide'>
	<div class="mySlider">
		<?php 
			foreach($images as $key=>$url){
			
				
				echo "<img src='$url' />";
				
			}
		?>
	</div>
</div>

 <div class='section'>
	<div class='container '>

		<h5 class='section-title'>
			<b></b>  
				<span class='section-title-main'>product by category</span>
			<b></b>
		</h5>

		<div class='row mt-4'>
			
			<div class='col-12'>
				<div class='category-slide' >
				
				
					<?php foreach (get_terms('product-category', array('hide_empty'=> false, 'parent'=>0)) as $cat) :?>
					<a href="<?php echo get_term_link($cat->term_id); ?>">
					<div>
						
						<div class="card " >
							<div class='wrapper-image'>
								<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="slider-img" alt="...">
							</div>
						
							<div class="card-body">
								<p class='card-title'><?php echo $cat->name; ?></p>
							</div>
						</div>

					</div>
					</a>
					
					
					<?php  endforeach; ?>

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
					<div class='col-4 text-center text-white'>
						<h3 class="uppercase" style='font-size: 38px;'><strong>RETAIL OR WHOLESALE?</strong></h3>
						<p class="lead">We have great offers available!<br>Please contact us with your enquiries</p>

						<a href="/contact-us" class="btn btn-primary button-transparent" role="button" aria-pressed="true">Get in Touch</a>
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
	
	<div class='col-12'>
		<div class='blog-slide' >
			<?php
				$args = array( 'post_type'     => 'blog', );
				$recent_posts = new WP_Query($args);
				while( $recent_posts->have_posts() ) {
				
				$recent_posts->the_post() ; 
				
				if ( has_post_thumbnail() ) {
					?>
				<a href="<?php echo get_permalink()?>">
					<div class='wrapper-slide'>
						
						<div class="card " >
							<div class='wrapper-date'>
								<div class='bedge-inner'>
									<span class='date-day'><?php echo get_the_date('d')?></span><br>
									<span class='date-month'><?php echo get_the_date('M')?></span>
								</div>
							
							</div>
							<div class='wrapper-image'>
								<?php echo  get_the_post_thumbnail(); ?>
							</div>
						
							<div class="card-body">
								<p class='card-title'><?php echo  the_title(); ?></p>

								<p class='text-preview'><?php echo wp_trim_words( get_the_content(), 13, ' [...]' ) ?></p>
							</div>
						</div>

					</div>
				</a>
					
					

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