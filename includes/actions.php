<?php
// Navbar
register_nav_menus([
   'main-menu' => __( 'منوی اصلی' ),
]);

// Theme supports
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_image_size('tindex', 300, 200, true);
add_image_size('tsingle', 750, 430, true);
add_image_size('tblog', 362, 248, true);
add_image_size('tfooter', 60, 60, true);
add_image_size('tside', 60, 60, true);

// Enqueue Styles And Scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue' );

// Custom Widgets
add_action( 'widgets_init', 'irandes_widgets_init' );
add_action( 'init', 'post_type_portfolio' );
add_action( 'init', 'create_portfolio_taxonomies', 0 );
add_filter( 'pre_get_posts','exclude_pages_from_search' );

// Shortcodes
add_shortcode('seo', 'seo_shortcode');
add_shortcode('logo', 'logo_shortcode');
add_shortcode('content', 'content_shortcode');
add_shortcode('instagram', 'instagram_shortcode');
add_shortcode('digital-marketing', 'digital_marketing_shortcode');
add_shortcode('webdesign', 'webdesign_shortcode');
