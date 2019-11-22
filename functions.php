<?php

$min    = WP_DEBUG ? '': '.min';
$file   = "/style.css";
$url    = get_template_directory_uri() . $file;
$path   = get_template_directory() . $file;
$handle = get_stylesheet() . '-default';



// Overridden?
if ( is_child_theme() && is_readable( get_stylesheet_directory() . $file ) )
{
    $url  = get_stylesheet_directory_uri() . $file;
    $path = get_stylesheet_directory()     . $file;
}

$modified = filemtime( $path );

add_action( 'wp_loaded', function() use ( $handle, $url, $modified ) {
    wp_register_style( $handle, $url, [], $modified );
});

add_action( 'wp_enqueue_scripts', function() use ( $handle ) {
    wp_enqueue_style( $handle );
});
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

/**
 * Register Custom Navigation Walker
 */

function registe_mobile_navwalker(){
  require_once get_template_directory().'/walker/class-wp-bootstrap-navwalker-mobile.php';
}
add_action( 'after_setup_theme', 'registe_mobile_navwalker' );

function register_navwalker(){
	require_once get_template_directory() . '/walker/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'maintheme' ),
) );

///end


//add active class to current menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

function getSlider(){

    $query_images_args = array(
        'post_type'      => 'slider',

        'posts_per_page' => - 1,
    );

    $query_images = new WP_Query( $query_images_args );

    $images = [];
    foreach ( $query_images->posts as $image ) {
        
        $images[] =get_the_post_thumbnail_url($image->ID);
        
    }
    
    return $images;
}

add_filter( 'wpseo_breadcrumb_links', 'single_product_wpseo_breadcrumb_links' );
function single_product_wpseo_breadcrumb_links( $links ) {
	//pk_print( sizeof($links) );
	if( sizeof($links) > 1 && is_single()){
		array_pop($links);
	}
	return $links;
}



/*-------------------------------------------------------------------
Bootstrap WordPress Pagination Using WP-Pagenavi
-------------------------------------------------------------------*/

//attach our function to the wp_pagenavi filter
function wp_pagenavi_to_bootstrap($html) {
  
  $out = '';
  $out = str_replace('<div','',$html);
  $out = str_replace('class=\'wp-pagenavi\' role=\'navigation\'>','',$out);
  $out = str_replace('<a','<li class="page-item"><a class="page-link"',$out);
  $out = str_replace('</a>','</a></li>',$out);
  $out = str_replace('<span aria-current=\'page\' class=\'current\'','<li aria-current="page" class="page-item active"><span class="page-link current"',$out);
  $out = str_replace('<span class=\'pages\'','<li class="page-item"><span class="page-link pages"',$out);
  $out = str_replace('<span class=\'extend\'','<li class="page-item"><span class="page-link extend"',$out);  
  $out = str_replace('</span>','</span></li>',$out);
  $out = str_replace('</div>','',$out);
  return '<ul class="pagination" role="navigation">'.$out.'</ul>';
}
add_filter( 'wp_pagenavi', 'wp_pagenavi_to_bootstrap', 10, 2 );
/*-------------------------------------------------------------------
Bootstrap WordPress Pagination Using WP-Pagenavi
-------------------------------------------------------------------*/


