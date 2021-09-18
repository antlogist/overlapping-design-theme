<?php 

//Exit if accessed directly
if ( ! defined ("ABSPATH") ) {
  exit;
}

get_header();
echo "<h1>Front Page</h1>";
echo "<a class='_btn'>Button</a><br>";
echo "<a class='_btn _btn-invert'>Button</a><br>";
echo "<button class='_btn'>Button</button><br>";
echo "<button class='_btn _btn-invert'>Button</button>";
get_footer();