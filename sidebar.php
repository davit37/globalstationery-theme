<ul>
<?php
    $args = array('post_type'=> 'blog', );
    $recent_posts = new WP_Query($args);
    while( $recent_posts->have_posts() ) {
    
        $recent_posts->the_post() ; 
        
        if ( has_post_thumbnail() ) { ?>
            <li>
                <a href="<?php echo get_permalink()?>">
                    <?php the_title() ?>
                </a>
            </li>
            
<?php }}?>
</ul>

