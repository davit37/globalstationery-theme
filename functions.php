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

add_filter( 'nav_menu_css_class', 'menu_item_classes', 10, 4 );
function menu_item_classes( $classes, $item, $args, $depth ) {
    //unset($classes); //if adding class
    $classes[] = 'nav-item';
    return $classes;
}


// sub menu class
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array()) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"submenu-cstm\">\n";
    }
  }
  add_filter( 'nav_menu_css_class', 'menu_item_classes', 10, 4 );



function wp_get_menu_array($current_menu) {
 
    $array_menu = wp_get_nav_menu_items($current_menu, array('orderby'=>'post_date'));
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
     
}

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


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Slider Wiget',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

add_filter( 'wpmediacategory_taxonomy', function(){ return 'category_media'; } );

// Add Shortcode
function custom_shortcode() {

	// Add Shortcode
	function custom_shortcode( $atts , $content = null ) {
	
	  // Attributes
	  $atts = shortcode_atts(
	    array(
	      'posts_per_page' => '3',
	      'category_slug' => '',
	    ),
	    $atts,
	    'category_posts'
	  );
	
	  // Query
	  $the_query = new WP_Query( array ( 'posts_per_page' => '3', 'category_name' => $atts['category_slug'] ) );
	  
	  // Posts
	  $output = '<ul class="g1-grid">';
	  while ( $the_query->have_posts() ) :
	    $the_query->the_post();
	    $output .= '<li class="g1-column g1-one-third">
	                  <div id="white-box" class="news-box">
	                    <p class="news-text"><strong>' . get_the_title() . '</strong> <br /> '. get_the_content() .'</p>
	                  </div>
	                </li>';
	  endwhile;
	  $output .= '</ul>';
	  
	  // Reset post data
	  wp_reset_postdata();
	  
	  // Return code
	  return $output;
	
	}
	add_shortcode( 'category_posts', 'custom_shortcode' );

}
add_shortcode( '', 'custom_shortcode' );


function template_chooser($template)   
{    
  global $wp_query; 
  $post_type = $wp_query->query_vars["pagename"];   
  if( isset($_GET['s']) && $post_type == 'product' )   
  {
    echo "HALLLO";
    return locate_template('archive-search.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser');

add_filter( 'wpseo_breadcrumb_links', 'single_product_wpseo_breadcrumb_links' );
function single_product_wpseo_breadcrumb_links( $links ) {
	//pk_print( sizeof($links) );
	if( sizeof($links) > 1 && is_single()){
		array_pop($links);
	}
	return $links;
}



