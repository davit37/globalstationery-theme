<!DOCTYPE html>
<html>
<head>
	<title><?= get_the_title() ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/plugin/slick/slick-theme.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <script defer src="<?php bloginfo('template_url'); ?>/plugin/fontawesome/js/all.js"></script> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
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
    
    <div class='container'>
         <div class='logo'> <a class="navbar-brand" href="<?php echo site_url() ?>"><img src="<?php bloginfo('template_url'); ?>/images/MG-UK-logo.png" width="270"></a></div>
    </div>

    <nav class="navbar navbar-expand-md navbar-bottom" role="navigation">
        <div class="container">
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
                ) );
                ?>
            </div>
        </nav>
    </header>

    <div class='main'>