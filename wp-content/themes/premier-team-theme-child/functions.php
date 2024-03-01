<?php
// Enqueue parent and child theme stylesheets
function enqueue_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

// Allow SVG file uploads
function allow_svg_upload( $mime_types ) {
    $mime_types['svg'] = 'image/svg+xml';
    $mime_types['svgz'] = 'image/svg+xml';
    return $mime_types;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

// Enable SVG file uploads in WordPress Media Library
function svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_action( 'mime_types', 'svg_upload' );

//COmment test 
//Comment 02


/* Enqueues the external CSS file */
add_action( 'wp_enqueue_scripts', 'tutsplus_external_styles' );
function tutsplus_external_styles() {
    wp_enqueue_style( 'style-css', get_stylesheet_directory_uri().'/assets/css/style.css' );
}

function child_theme_enqueue_scripts() {
    // Enqueue custom script
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), '1', true );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts' );