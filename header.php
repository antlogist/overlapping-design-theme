<?php

//Exit if accessed directly
if ( ! defined ("ABSPATH") ) {
  exit;
}

include( get_template_directory() . '/inc/Classes/CSRFToken.php' );
$token = CSRFToken::_token();

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<?php 

wp_head(); ?>

<body <?php echo body_id(); body_class(); ?>>

<!--Nav toggle button-->
<a href="#" id="navToggleButton">
  <span class="toggle-line toggle-line-1"></span>
  <span class="toggle-line toggle-line-2"></span>
  <span class="toggle-line toggle-line-3"></span>
</a>

<!--Nav-->
<nav id="navMain" class="align-items-center justify-content-center">
  <ul>
    <li><a class="py-2 px-3" href="#">Home</a></li>
    <li><a class="py-2 px-3" href="#">About us</a></li>
    <li><a class="py-2 px-3" href="#">Services</a></li>
    <li><a class="py-2 px-3" href="#">Products</a></li>
    <li><a class="py-2 px-3" href="#">Process</a></li>
    <li><a class="py-2 px-3" href="#">Contact</a></li>
  </ul>
</nav>

<script>
  const baseUrl = "<?php echo get_site_url(); ?>";
  const token = "<?php echo $token; ?>";
</script>
