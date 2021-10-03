<?php
// Enqueue custom scripts and styles
function theme_enqueue() {
   wp_enqueue_style( 'tas-styles', get_template_directory_uri() . '/dist/styles/all.css' );
   // wp_enqueue_script( 'tas-scripts', get_template_directory_uri() . '/dist/js/scripts.js' );
}
