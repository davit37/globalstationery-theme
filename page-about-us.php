<?php get_header(); ?>

<div class='container mt-5'>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<?php
    the_content();
endwhile; else: ?>

    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>



<?php get_footer(); ?>