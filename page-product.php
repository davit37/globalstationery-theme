<?php get_header(); ?>


<div class='container mt-3'>
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
<div class='row'>

            <?php foreach (get_terms('product-category',array('hide_empty'=> false, 'parent'=>0)) as $cat) :?>
            
                <div class='col-5 col-md-3 col-lg-2 ml-2'>
        
          
                <div class="card-category-product">
         
                    <div class='wrapper-image' >
                        <a href="<?php echo get_term_link($cat->term_id); ?>">
                        <img src='<?php echo z_taxonomy_image_url($cat->term_id); ?>' style="width:100%; height:100%; object-fit:cover">
                        </a>

                        <div class='image-tool quick-view text-center'>
                            <a href='<?php echo get_permalink()?>'>Quick View</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class='text-center font-weight-bold text-uppercase' style='font-size:1em'><?php echo $cat->name; ?></p>
                     
                    </div>
              </div>

               
                
            </div>
              
            <?php  endforeach; ?>

</div>




<?php get_footer(); ?>