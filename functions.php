<?php

/*  Enqeue Parent Theme
/* ------------------------------------ */ 
function childtheme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', 
    get_template_directory_uri() . '/style.css' );

  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( 'parent-style' ),
    wp_get_theme()->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'childtheme_enqueue_styles' );

/*  Remove Admin Bar
/* ------------------------------------ */ 
add_filter('show_admin_bar', '__return_false');

/*  Add Custom Scripts
/* ------------------------------------ */ 

  function jquery_enqueue() {
      wp_deregister_script('jquery');
      wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, null);
      wp_enqueue_script('jquery');
  }
  if (!is_admin()) add_action('wp_enqueue_scripts', 'jquery_enqueue', 11);

  function wpb_adding_scripts() {


	wp_register_script('tlc', get_stylesheet_directory_uri() . '/js/tlc.js');

    wp_enqueue_script('tlc');


}
add_action( 'wp_footer', 'wpb_adding_scripts' ); 