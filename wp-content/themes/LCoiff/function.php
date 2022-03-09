<?php
  require 'wp-functions/admin_custom.php';


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
