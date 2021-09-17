<?php

//Exit if accessed directly
if ( ! defined ('ABSPATH') ) {
  exit;
}

function overlap_styles_and_scripts() {
  //libs CSS
  wp_enqueue_style("overlap-lib-css", get_theme_file_uri("dist/css/libs.css"));  
    
  //custom CSS
  wp_enqueue_style("overlap-app-css", get_theme_file_uri("dist/css/all.css"), NULL, microtime());
  
  //custom js
  wp_enqueue_script("overlap-app-js", get_theme_file_uri("dist/js/all.js"), null, microtime(), true);
}
