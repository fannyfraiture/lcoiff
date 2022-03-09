<?php

require 'wp-functions/admin_custom.php';


// Options page in Admin dashboard
// -> allows the data to be displayed on any pages
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

      acf_add_options_page(array(
        'menu_title'  => 'Footer',
        'page_title'   => 'Footer Data',
        'menu_slug'   => 'footer',
      ));
      acf_add_options_page(array(
        'menu_title'  => 'Header',
        'page_title'   => 'Header Data',
        'menu_slug'   => 'header',
      ));
    }
}


// Css file
  function add_theme_scripts() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/dist/styles.css' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// JS file

function add_theme_js()
{
  // Déclarer jQuery
  wp_enqueue_script('jquery');
  // Déclarer le JS
  wp_enqueue_script(
    'theme-script',
    get_template_directory_uri() . '/dist/all.js',
    array('jquery'),
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_theme_js');


