<?php get_header(); ?>

<div class='container mt-3'>
    <div class='row'>
        <div class='col-12 col-ms-12 col-lg-8 content-blog'>
            <?php
            /* The loop */
            while ( have_posts() ) : the_post(); ?>
                
                <h3 class='text-center'><?= the_title()?></h3>

                <div class='text-center wrapper-blog-image'><img src='<?php echo  get_the_post_thumbnail_url(); ?>'/></div>

                <?= the_content()?>

            <?php    
            endwhile;
            ?>
        </div>

        <div class='col-12 col-md-6 col-lg-3 sidebar'>
            <div class='widget'>
                <div class='widget-title'>
                    <span>Recent Posts</span>
                </div>
                <div class="is-divider small"></div>
                 <?php get_sidebar(); ?>
            </div>
          
        </div>
    </div>

  
</div>



<?php get_footer(); ?>