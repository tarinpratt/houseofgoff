<?php
    function houseofgoff_files() {
        wp_enqueue_style('hosueofgoff_styles', get_stylesheet_uri());
    }
    function custom_scripts() {
        wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );
    }
    
    add_action( 'wp_enqueue_scripts', 'custom_scripts' );
 
    add_action('wp_enqueue_scripts', 'houseofgoff_files');

    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

?>