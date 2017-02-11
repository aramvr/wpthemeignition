<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <nav class="navbar navbar-toggleable-md main-menu animated">
                <div class="container menu-sm">

                        <div class="col-lg-2">
                            <div class="navbar-brand logobar">
                                <a href="<?php get_home_url() ?>" >
                                    <img alt="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 collapse navbar-collapse animated" id="navbarNav">
                            <div class="col-lg-9 header_menu">
                                <?php
                                wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
                                ?>
                            </div>

                            <div class="col-lg-3 col-sm-12 text-center text-lg-right">
                                <div class="header-button">
                                    <a href="#contact"><button class="igite-button">Igite</button></a>
                                </div>
                            </div>
                        </div>

                </div>
                <a class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="navbar-icon"></div>
                </a>

            </nav>
        </header><!-- .site-header -->

    </div><!-- .sidebar -->

    <div id="content" class="site-content">
