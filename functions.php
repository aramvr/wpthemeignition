<?php

function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

   wp_enqueue_script( 'jquery');
   wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js');
   wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
 add_action( 'init', 'register_my_menus' );