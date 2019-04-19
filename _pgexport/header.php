<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Load Roboto font -->
        <!-- Load css styles -->
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/pluton-ie7.css" />
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico/favicon.ico">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="brand">
                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'custom_logo', 'images/logo.png' ), 'normal' ) ?>" width="120" height="40" alt="Logo"/>
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <?php wp_nav_menu( array(
                            	'menu' => 'primary',
                            	'menu_class' => 'nav',
                            	'menu_id' => 'top-navigation',
                            	'container' => '',
                            	'depth' => '-1'
                        ) ); ?>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <main>