<?php get_header(); ?>


<div class='container '>


<div class='row mt-4'>
    
    
        
        
            <?php foreach (get_terms('product-category',array('hide_empty'=> false, 'parent'=>0)) as $cat) :?>
            
            <div class='col-2 col-md-2'>

                <a href="<?php echo get_category_link($cat->term_id); ?>">
                    <div class='col-inner'>
                        
                        <div class='wrapper-image'>
                            <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="slider-img" alt="...">
                        </div>
                    
                        <div class='wrapper-text text-center'>
                            <p class='title'><?php echo $cat->name; ?></p>
                        </div>
                    </div>
                </a>
                
            </div>
              
            <?php  endforeach; ?>

</div>
</div>



<?php get_footer(); ?>