<?php get_header(); ?>
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$term = get_queried_object();
$args = array(
        'post_type'       => 'product',
        'post_status'     => 'publish',
        'paged'           => $paged,
        'tax_query'       => array(
          array(
            'taxonomy' => 'product_tag',
            'field'    => 'slug',
            'terms'    => $term->slug,
          )
       )
 );
$posts = new WP_Query( $args );

$categories = get_the_category();


?>

<div class='container mt-3'>
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
  <div class='row'>
    

      <?php if( $posts->have_posts() ) : ?>
        <?php while( $posts->have_posts() ) :
            $posts->the_post(); ?>
          
            <div class='col-5 col-md-3 col-lg-2 ml-2'>
            
            <div class="cardn card-category-product">
            
                <div class='wrapper-image p-3' >
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
            esc_html_e( "The tags doesn't have product ", 'text-domain' );
          endif;
          ?>
        
  </div>

  <div class='row justify-content-center mt-5 mb-5'>
      <div id='product-pagination'>
          <?php wp_pagenavi(array( 'query' => $posts ) ); ?>
      </div>       
  </div>
 
</div>
<?php get_footer(); ?>