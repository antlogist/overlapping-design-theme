<?php 

//Exit if accessed directly
if ( ! defined ("ABSPATH") ) {
  exit;
}

function overlap_theme_support() {
  //Thumbnails support
  add_theme_support("post-thumbnails");
  
  //Document title tag support
  add_theme_support( "title-tag" );
}
