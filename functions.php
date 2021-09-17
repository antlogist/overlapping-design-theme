<?php

//Exit if accessed directly
if ( ! defined ("ABSPATH") ) {
  exit;
}

/*===INCLUDES===*/

//Styles and scrpts
include( get_template_directory() . "/inc/enqueue.php" );

/*===HOOKS===*/

//Styles and scrpts
add_action( "wp_enqueue_scripts", "overlap_styles_and_scripts" );
