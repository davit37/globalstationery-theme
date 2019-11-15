<?php get_header(); ?>

<div class='container mt-3 mb-5'>
    <div class='row justify-content-center'>
       
        <?php

        
        /* The loop */
        
        while ( have_posts() ) : the_post();
            global $post;

            $tours= pods('product', $post->ID) ;

            ?>
                <div class='col-10 col-md-12 col-lg-5 mr-3'>
                    
                            <div class='product-main position-relative mb-2'>
                                <?php foreach($tours->field('add_image') as $image) : ?>
                                    <div class='wrapper-image easyzoom text-center'>

                                        
                                            <a href="<?= $image['guid']?>">
                                            <img src='<?= $image['guid']?>'>
                                            </a>
                                            
                                        
                                        
                                    </div>
                                    
                                <?php endforeach; ?>
                            </div>

                            <div class='products-nav mb-4'>
                                <?php foreach($tours->field('add_image') as $image) : ?>
                                
                                    <div class='col'>
                                        <img src='<?= $image['guid']?>'>
                                    </div>
                                
                                <?php endforeach; ?>
                            </div>
                
                </div>

                <div class='col-10 col-md-10 col-lg-4'>
                    <?php if ( function_exists('yoast_breadcrumb') ) 
                        {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} 
                    ?>
                    <h3><strong><?= the_title()?></strong></h3>
                    <div class="is-divider small"></div>
                    <?php the_content();?>
                </div>
            
        <?php endwhile; ?>
    

    </div>
</div>



<?php get_footer(); ?>