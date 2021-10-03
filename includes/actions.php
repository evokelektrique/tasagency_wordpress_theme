<?php
// Theme supports
add_theme_support( 'post-thumbnails' );

// Enqueue Styles And Scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue' );