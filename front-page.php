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

<!--Content-->
<div class="figures-wrapper">
  <div class="figure figure-1"></div>
  <div class="figure figure-2">
    <div class="logo-wrapper d-flex align-items-center justify-content-center">
      <div>
        <img src="https://dummyimage.com/512x512/ffbd00/000.jpg" class="logo" alt="logo">
        <h2 class="tagline text-uppercase">Lorem Ipsum<br>Dolor sit Amet</h2>
        <div class="button-wrapper">
          <button class="_btn _btn-left _btn-invert" id="openModalAbout">About Us</button>
          <button class="_btn _btn-right mt-3" id="openModalProducts">Products</button>
        </div>
      </div>
    </div>
  </div>
  <div class="figure figure-3">
    <div class="contact-wrapper d-flex align-items-center">
      <div class="mt-3">
        <h3 class="tagline text-uppercase">Call Us</h3>
        <h5 class="contact">Phone: <a href="tel:1247 5678">1247 5678</a></h5>

        <h3 class="tagline text-uppercase mt-4">Address</h3>
        <h5 class="contact">251 Beibitshilik Street, New Chum QLD 1234</h5>

        <h3 class="tagline text-uppercase mt-4">Postal Address</h3>
        <h5 class="contact">251 Beibitshilik Street, New Chum QLD 1234</h5>
        <div class="button-wrapper">
          <button class="_btn _btn-left _btn-invert mt-3" id="openModalMail">Send Mail</button>
          <button class="_btn _btn-right mt-3" id="openModalMap">Open Map</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Content-->

<?php get_footer(); ?>
