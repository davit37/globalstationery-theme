<?php  global $wp_query; ?>
<?php get_header(); ?>

<div class='container mt-3'>

<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
  <div class='row'>

       <?php if ( have_posts() ) { ?>
       
       <?php while ( have_posts() ) { the_post(); ?>
		<div class='col-5 col-md-3 col-lg-2 ml-2'>
        
        <div class="card-category-product">
         
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
       <?php } ?>
      
       <?php } ?>

</div>
</div>

         

<?php get_footer(); ?>