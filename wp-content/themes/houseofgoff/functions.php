<?php
    function houseofgoff_files() {
        wp_enqueue_style('hosueofgoff_styles', get_stylesheet_uri());
    }
    function custom_scripts() {
        wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );
    }
    function my_custom_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('my-custom-jquery', get_template_directory_uri() . '/js/customjquery.js', array('jquery'));
    }
    add_action('wp_enqueue_scripts', 'my_custom_scripts');
    add_action( 'wp_enqueue_scripts', 'custom_scripts' );
 
    add_action('wp_enqueue_scripts', 'houseofgoff_files');

    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

?>