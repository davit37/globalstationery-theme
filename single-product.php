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

                                       
                                            <a href="<?php echo pods_image_url($image,'')?>">
                                            <?php echo pods_image( $image, '' );?>
                                            </a>
                                            
                                    </div>
                                    
                                <?php endforeach; ?>
                            </div>

                            <div class='products-nav mb-4'>
                                <?php if (count($tours->field('add_image')) >=2 ):?>
                            
                                    <?php foreach($tours->field('add_image') as $image) : ?>
                                    
                                        <div class='col'>
                                            <img src='<?= $image['guid']?>'>
                                        </div>
                                    
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                
                            </div>
                
                </div>

                <div class='col-10 col-md-10 col-lg-4'>
                    <?php if ( function_exists('yoast_breadcrumb') ) 
                        {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} 
                    ?>
                    <h3><strong><?= the_title()?></strong></h3>
                    <div class="is-divider small"></div>

                    <!-- advance custom field -->

                    <div class="table-responsive">
 

                    <?php if( have_rows('harga_jual_general_trade_') ): ?>
                        <?php while( have_rows('harga_jual_general_trade_') ): the_row(); 

                            $karton = get_sub_field('karton') == 0 ? '-' : number_format(get_sub_field('karton'),0,',','.');
                            $pak = get_sub_field('pak') == 0 ? '-' : number_format(get_sub_field('pak'),0,',','.');
                            $lusin = get_sub_field('lusin') == 0 ? '-' : number_format(get_sub_field('lusin'),0,',','.');
                            $pcs = get_sub_field('pcs') == 0 ? '-' : number_format(get_sub_field('pcs'),0,',','.');
                            

                            ?>                           

                            <table class="table table-bordered">
                            <thead>
                                <tr>
                               
                                <th class='text-center' scope="col" colspan='4'>Harga Jual General Trade</th>
                                
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                               
                                <th scope="col">Karton</th>
                                <th scope="col">Pak</th>
                                <th scope="col">Lusin</th>
                                <th scope="col">Pcs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td><?php echo  $karton ?></td>
                                <td><?php echo  $pak ?></td>
                                <td><?php echo  $lusin ?></td>
                                <td><?php echo  $pcs ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <?php endwhile; ?>
                    <?php endif; ?>


                    <?php if( have_rows('harga_jual_modern_trade_') ): ?>
                        <?php while( have_rows('harga_jual_modern_trade_') ): the_row(); 

                            $karton = get_sub_field('karton') == 0 ? '-' : number_format(get_sub_field('karton'),0,',','.');
                            $pak = get_sub_field('pak') == 0 ? '-' : number_format(get_sub_field('pak'),0,',','.');
                            $lusin = get_sub_field('lusin') == 0 ? '-' : number_format(get_sub_field('lusin'),0,',','.');
                            $pcs = get_sub_field('pcs') == 0 ? '-' : number_format(get_sub_field('pcs'),0,',','.');
                            
                            ?>                           

                            <table class="table table-bordered">
                            <thead>
                                <tr>
                               
                                <th class='text-center' scope="col" colspan='4'>Harga Jual Modern Trade</th>
                                
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                               
                                <th scope="col">Karton</th>
                                <th scope="col">Pak</th>
                                <th scope="col">Lusin</th>
                                <th scope="col">Pcs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td><?php echo  $karton ?></td>
                                <td><?php echo  $pak ?></td>
                                <td><?php echo  $lusin ?></td>
                                <td><?php echo  $pcs ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    </div>

                    <!-- End -->

                    <?php the_content();?>
                </div>
            
        <?php endwhile; ?>
    

    </div>
</div>



<?php get_footer(); ?>