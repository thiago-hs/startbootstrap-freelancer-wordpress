<?php

function add_theme_scripts() {
  
  //font-awesome
  wp_enqueue_style( 'font-awesome',get_template_directory_uri()  . '/vendor/font-awesome/css/font-awesome.min.css',array(),'4.7.0','all' );

  //bootstrap
  wp_enqueue_style( 'bootstrap-css',get_template_directory_uri()  . '/vendor/bootstrap/css/bootstrap.min.css',array(),'4.1.1','all' );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array ( 'jquery' ), '4.1.1', true);

  //jquery-easing
  wp_enqueue_script( 'jquery-easing-js', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array ( 'jquery' ), '1.4.1', true);

  //magnific-popup
  wp_enqueue_style( 'magnific-popup-css',get_template_directory_uri()  . '/vendor/magnific-popup/magnific-popup.css',array(),'1.1.0 ','all' );
  wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array ( 'jquery' ), '1.1.0 ', true);

  wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array ( 'jquery' ), 1.0 , true);
  wp_enqueue_script('contact_me', get_template_directory_uri() . '/js/contact_me.js', array ( 'jquery' ), 1.0 , true);

  wp_enqueue_style('freelancer-css', get_template_directory_uri() . '/css/freelancer.min.css', false, '1.0.0', 'all');
  wp_enqueue_script('freelancer-js', get_template_directory_uri() . '/js/freelancer.min.js', array ( 'jquery' ), 1.0 , true);
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );