<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- End Favicon -->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/flickity/flickity.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css?v=08112019">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/easyzoom/css/easyzoom.css">
    <script defer src="<?php bloginfo('template_url'); ?>/plugin/fontawesome/js/all.js"></script> 
    



	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php echo  is_front_page() ? "<div class='d-flex flex-column' style='height:100%'>" :''?> 
	<header>

        <div class='header-wrapper'>
        
            <nav class="navbar navbar-expand-lg p-0 top-nav-wrapper">
                 <div class='container'>
                
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto ">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'Top Menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                        </ul>
                    </div>         
                </div>   
            </nav>

            <div class='header-main'>
                <div class='container flex-row'>

                    <div class=' flex-col p-0 position-absolute'>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" id="menu-bar" aria-label="Toggle navigation">
                            <span class="ham"></span>
                        </button>
                    </div>
                    <div class='logo'> <a class="navbar-brand m-0" href="<?php echo site_url() ?>"><img src="<?php bloginfo('template_url'); ?>/images/MG-UK-logo.png" width="270"></a></div>
                    
                    <div class='col ml-auto flex-col p-0 main-nav'>
                            <ul class='header-nav pl-0'>
                                <li class='header-search-form search-form ml-auto'>
                                    <div class='header-search-form-wrapper'>
                                    <form class="form-inline my-2 my-lg-0" role="search" method="get" action="<?php echo home_url( '/' ); ?>" >
                                        <div class='flex-row position-relative'>
                                            <div class="flex-col p-0">
                                                <input autocomplete="off" name='s' class="search-field" type="search" placeholder="Search..." aria-label="Search">
                                                <input type="hidden" name="post_type" value="product" />
                                            </div>
                                            <div class="flex-col p-0">
                                                <button class="button-search button" type="submit"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>                              
                                    </form>
                                    </div>
                                </li>
                            </ul>
                    </div>    
                
                </div>
            </div>
        
            <nav class="navbar navbar-expand-md navbar-bottom p-0" role="navigation">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="container ">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <?php
                        wp_nav_menu( array(
                            'menu'              =>'Menu By Categories',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbar-main',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                                  
                        ));
                    ?>
                </div>
            </nav>
            

            <div class='mobile-menu-wrapper'>
                <div class='mobile-menu-bg'></div>

                <div class="mobile-menu-container">
                    <div class='wrapper-menu'>

                        <div class='search-mobile-wrapper'>
                            <ul class='header-nav pl-0'>
                                <li class='header-search-form search-form'>
                                    <div class='header-search-form-wrapper'>
                                    <form class="form-inline my-2 my-lg-0" role="search" method="get" action="<?php echo home_url( '/' ); ?>" >
                                        <div class='flex-row position-relative'>
                                            <div class="flex-col p-0">
                                                <input autocomplete="off" name='s' class="search-field" type="search" placeholder="Search..." aria-label="Search">
                                                <input type="hidden" name="post_type" value="product" />
                                            </div>
                                            <div class="flex-col p-0">
                                                <button class="button-search button" type="submit"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>                              
                                    </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                        <?php
                            wp_nav_menu( array(
                                'menu'              =>'Menu By Categories',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'navbar',
                                'container_id'      => 'menubar-items-mobile',
                                'menu_class'        => 'nav navbar-nav',
                                'menu_orientation'  => 'mobile',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker_Mobile::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker_Mobile(),
                            ) );
                        ?>
                </div>
                        
                </div>
                
                
            
            </div>
        </div>

  
    </header>

    <?php if(is_front_page()) {?>
        <?php $images = getSlider(); ?>
            <div class='container-slide flex-grow-1 mh-100'>
                <div id='main-slider' class="">
                    <?php 
                        foreach($images as $key=>$url){
                        
                            
                            echo "<div class='box-slider' style='background-image:url($url)'></div>";
                            
                        }
                    ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class='main'>