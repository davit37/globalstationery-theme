<!DOCTYPE html>
<html>
<head>
	<title><?= get_the_title() ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/flickity/flickity.min.css">
   
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <script defer src="<?php bloginfo('template_url'); ?>/plugin/fontawesome/js/all.js"></script> 
    <script defer src="<?php bloginfo('template_url'); ?>/plugin/flickity/flickity.pkgd.min.js"></script>

  
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>

    <!-- Mobile Menu -->
        <nav class="navbar navbar-expand-lg p-0 top-nav-wrapper">
        
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto p-3">
                <?php
                    wp_nav_menu( array(
                        'menu'              =>'Top Menu',
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
                            <li class='header-search-form search-form'>
                                <div class='header-search-form-wrapper'>
                                <form class="form-inline my-2 my-lg-0" role="search" method="get" action="<?php echo home_url( '/' ); ?>" >
                                    <div class='flex-row position-relative'>
                                        <div class=" p-0">
                                            <input autocomplete="off" name='s' class="search-field" type="search" placeholder="Search..." aria-label="Search">
                                            <input type="hidden" name="post_type" value="product" />
                                        </div>
                                        <div class="col p-0">
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

                <div class="container main-menu">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <?php
                        wp_nav_menu( array(
                            'menu'              =>'Menu By Categories',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
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
                                        <div class=" p-0">
                                            <input autocomplete="off" name='s' class="search-field" type="search" placeholder="Search..." aria-label="Search">
                                            <input type="hidden" name="post_type" value="product" />
                                        </div>
                                        <div class="col p-0">
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
                            'container_class'   => 'navbar-collapse',
                            'container_id'      => 'menubar-items',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
            </div>
                    
            </div>
               
            
        
        </div>
    </header>

    <div class='main'>