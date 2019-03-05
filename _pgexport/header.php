<!doctype html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
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
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="<?php echo esc_url( get_home_url( null, null, 'relative' ) ); ?>" class="brand">
                        <img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'custom_logo', 'images/logo.png' ), 'normal' ) ?>" width="120" height="40" alt="Logo"/>
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active">
                                <a href="#home"><?php _e( 'Home', 'pluton' ); ?></a>
                            </li>
                            <li>
                                <a href="#service"><?php _e( 'Services', 'pluton' ); ?></a>
                            </li>
                            <li>
                                <a href="#portfolio"><?php _e( 'Portfolio', 'pluton' ); ?></a>
                            </li>
                            <li>
                                <a href="#about"><?php _e( 'About', 'pluton' ); ?></a>
                            </li>
                            <li>
                                <a href="#clients"><?php _e( 'Clients', 'pluton' ); ?></a>
                            </li>
                            <li>
                                <a href="#price"><?php _e( 'Price', 'pluton' ); ?></a>
                            </li>
                            <li>
                                <a href="#contact"><?php _e( 'Contact', 'pluton' ); ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <main>