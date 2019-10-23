<?php get_header(); ?>

<div class='container mt-5'>
    <div class='row justify-content-center'>
       
    <?php

    
    /* The loop */
    
    while ( have_posts() ) : the_post();
          global $post;

           $tours= pods('product', $post->ID) ;

           ?>
            <div class='col-5 mr-3'>
                <div class='slide-product'>
                        <div class='galary-products-for'>
                            <?php foreach($tours->field('add_image') as $image) : ?>
                                <div class='wrapper-image'>
                                    <img src='<?= $image['guid']?>'>
                                </div>
                                
                            <?php endforeach; ?>
                        </div>

                        <div class='galary-products-nav'>
                            <?php foreach($tours->field('add_image') as $image) : ?>
                                <div class=''>
                                    <img src='<?= $image['guid']?>'>
                                </div>
                               
                            <?php endforeach; ?>
                        </div>
                </div>
            </div>

            <div class='col-4'>
                <h3><strong><?= the_title()?></strong></h3>
                 <?php the_content();?>
            </div>
           
    <?php endwhile; ?>
   

    </div>
</div>



<?php get_footer(); ?>