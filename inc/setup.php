<?php 

//Exit if accessed directly
if ( ! defined ("ABSPATH") ) {
  exit;
}

function overlap_theme_support() {
  //Thumbnails support
  add_theme_support("post-thumbnails");
  
  //Image size
  add_image_size("pageBanner", 1500, 350, true);
  add_image_size("standardImage", 1024, 683, true);
  add_image_size("squareImage", 683, 683, true);
  
  //Document title tag support
  add_theme_support( "title-tag" );
  
  //Menus
  add_theme_support("menus");
}

// Dynamic body id
function body_id() { 
  if (is_front_page()) {
    return ' id="frontPage"';
  } elseif (is_home()) {
    return ' id="homePage"';
  } elseif (is_single()) {
    return ' id="singlePage"';
  } elseif (is_search()) {
    return ' id="searchPage"';
  } elseif (is_archive()) {
    return ' id="archivePage"';
  }
}
