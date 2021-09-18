<?php

//Exit if accessed directly
if ( ! defined ('ABSPATH') ) {
  exit;
}

/*===INCLUDES===*/
//Theme features
include( get_template_directory() . '/inc/setup.php' );

//Styles and scrpts
include( get_template_directory() . '/inc/enqueue.php' );

//Theme customizer
include( get_template_directory() . '/inc/customizer.php');

/*===HOOKS===*/
//Theme features
add_action('after_setup_theme', 'overlap_theme_support');

//Styles and scrpts
add_action( 'wp_enqueue_scripts', 'overlap_styles_and_scripts' );

//Theme customizer
add_action( 'customize_register', 'overlap_customize_register' );
