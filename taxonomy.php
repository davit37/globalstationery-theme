<?php get_header(); ?>
<?php

$term = get_queried_object();
$args = array(
        'post_type'   => 'product',
        'post_status' => 'publish',
        'tax_query'   => array(
          array(
            'taxonomy' => 'product-category',
            'field'    => 'slug',
            'terms'    => $term->slug,
          )
       )
 );
$posts = new WP_Query( $args );

$categories = get_the_category();


?>

<div class='container mt-5'>
  <div class='row'>

  <?php if( $posts->have_posts() ) : ?>
    <?php while( $posts->have_posts() ) :
        $posts->the_post(); ?>
       
        <div class='col-2'>
        
        <div class="cardn card-category-product">
         
            <div class='wrapper-image' >
             <a href="<?php echo get_permalink()?>">
              <img src='<?php echo  get_the_post_thumbnail_url(); ?>' style="width:100%; height:100%; object-fit:cover">
              </a>

              <div class='image-tool quick-view text-center'>
                <a href='<?php echo get_permalink()?>'>Quick View</a>
              </div>
            </div>
          
        
        <div class="card-body">
          <p class='card-category'><?php echo $term->name;?></p>
        <a href="<?php echo get_permalink()?>"  class="card-text"><?php echo the_title()?></a>
        </div>
      </div>
      
        </div>
       
    <?php  endwhile; ?>
    <?php
      else :
        esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
      endif;
      ?>
  </div>
</div>
<?php get_footer(); ?>