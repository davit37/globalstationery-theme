<?php get_header(); ?>
<?php

$term = get_queried_object();
$args = array( 'numberposts' => 10, 'category_name' => $term->slug );
$posts = get_posts( $args );
$categories = get_the_category();

?>

<div class='container mt-5'>
  <div class='row'>
    <?php foreach ($posts as $post) :?>
       
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
          <p class='card-category'><?php echo $categories[0]->cat_name?></p>
        <a href="<?php echo get_permalink()?>"  class="card-text"><?php echo the_title()?></a>
        </div>
      </div>
      
        </div>
       
    <?php  endforeach; ?>
  </div>
</div>
<?php get_footer(); ?>