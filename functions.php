<?php

function add_theme_scripts() {
  
  $tpl_directory = get_template_directory_uri() ;
  
  //font-awesome
  wp_enqueue_style( 'font-awesome',$tpl_directory  . '/vendor/font-awesome/css/font-awesome.min.css',array(),'4.7.0','all' );

  //bootstrap
  wp_enqueue_style( 'bootstrap-css',$tpl_directory . '/vendor/bootstrap/css/bootstrap.min.css',array(),'4.1.1','all' );
  wp_enqueue_script( 'bootstrap-js', $tpl_directory. '/vendor/bootstrap/js/bootstrap.bundle.min.js', array ( 'jquery' ), '4.1.1', true);

  //jquery-easing
  wp_enqueue_script( 'jquery-easing-js', $tpl_directory . '/vendor/jquery-easing/jquery.easing.min.js', array ( 'jquery' ), '1.4.1', true);

  //magnific-popup
  wp_enqueue_style( 'magnific-popup-css',$tpl_directory  . '/vendor/magnific-popup/magnific-popup.css',array(),'1.1.0 ','all' );
  wp_enqueue_script( 'magnific-popup-js', $tpl_directory . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array ( 'jquery' ), '1.1.0 ', true);

  wp_enqueue_script('jqBootstrapValidation', $tpl_directory . '/js/jqBootstrapValidation.js', array ( 'jquery' ), 1.0 , true);
  wp_enqueue_script('contact_me', $tpl_directory . '/js/contact_me.js', array ( 'jquery' ), 1.0 , true);

  wp_enqueue_style('freelancer-css', $tpl_directory . '/css/freelancer.min.css', false, '1.0.0', 'all');
  wp_enqueue_script('freelancer-js', $tpl_directory . '/js/freelancer.min.js', array ( 'jquery' ), 1.0 , true);
  
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function freelancer_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/img/profile.png',
        'width'              => 256,
        'height'             => 256,
        'flex-width'         => true,
        'flex-height'        => true
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'freelancer_custom_header_setup' );
