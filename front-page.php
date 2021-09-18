<?php 

//Exit if accessed directly
if ( ! defined ("ABSPATH") ) {
  exit;
}
get_header(); ?>

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

<?php
echo "<h1>Front Page</h1>";
echo "<a class='_btn'>Button</a><br>";
echo "<a class='_btn _btn-invert'>Button</a><br>";
echo "<button class='_btn'>Button</button><br>";
echo "<button class='_btn _btn-invert'>Button</button>";
get_footer();