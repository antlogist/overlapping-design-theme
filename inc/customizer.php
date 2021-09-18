<?php 

//Exit if accessed directly
if ( ! defined ('ABSPATH') ) {
  exit;
}

function overlap_customize_register( $wp_customize ) {
  
  $wp_customize->add_panel('overlap_customize_panel',array(
      'title'=>'Theme Settings',
      'description'=> 'Theme Settings',
      'priority'=> 10,
  ));

  //Front-page section
  $wp_customize->add_section('front_page_section',array(
      'title'=>'Front Page',
      'priority'=>10,
      'panel'=>'overlap_customize_panel',
  ));

  //Front-page tagline setting
  $wp_customize->add_setting('front_page_tagline',array(
      'default'=>'Lorem Ipsum<br>Dolor Sit Amet',
      'sanitize_callback' => 'wp_kses_post',
      'transport' => 'postMessage'
  ));

  //Front-page tagline control
  $wp_customize->add_control('front_page_tagline_control',array(
      'label'=>'Front Page Tagline',
      'type'=>'textarea',
      'section'=>'front_page_section',
      'settings'=>'front_page_tagline',
  ));
}

