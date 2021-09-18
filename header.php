<?php

//Exit if accessed directly
if ( ! defined ("ABSPATH") ) {
  exit;
}

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

<?php  if (is_front_page()) { ?>
<!--Carousel-->
<div id="frontPageCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dummyimage.com/1024x330/000/fff.jpg" class="d-block w-100" alt="tyre">
    </div>
    <div class="carousel-item">
      <img src="https://dummyimage.com/1024x330/000/ffbd00.jpg" class="d-block w-100" alt="tyre">
    </div>
    <div class="carousel-item">
      <img src="https://dummyimage.com/1024x330/000/fff.jpg" class="d-block w-100" alt="tyre">
    </div>
  </div>
</div>
<!--/Carousel-->
<?php } ?>
