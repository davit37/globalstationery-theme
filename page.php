<?php get_header(); ?>

<div class='container mt-5 mb-5'>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class='row justify-content-center'>
        <div class='col-10'>

        <h4>
            <strong>
                <?php the_title() ?>
            </strong>
        </h4>

        <?php
            the_content(); ?>

        </div>

   <?php     
    endwhile; 
    
    else: ?>

    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>



<?php get_footer(); ?>