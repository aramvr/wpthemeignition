<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <div class="col-xl-12 main-menu border container">
                <div class="row">
                    <div class="col-xl-2">
                        <div class="logobar">
                            <a href="<?php get_home_url() ?>" >
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <?php
                            wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
                        ?>
                    </div>
                    <div class="col-xl-3 text-right">
                        <div class="header-button">
                            <a href="#"><button class="igite-button">Igite</button></a>
                        </div>
                    </div>
                </div>
        </header><!-- .site-header -->

    </div><!-- .sidebar -->

    <div id="content" class="site-content">
