<?php get_header(); ?>

<div class='container mt-5'>
    <div class='row'>
        <div class='col-8'>
    <?php
    /* The loop */
    while ( have_posts() ) : the_post(); ?>
        
        <h3><?= the_title()?></h3>
        <?= the_content()?>

    <?php    
    endwhile;
    ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>