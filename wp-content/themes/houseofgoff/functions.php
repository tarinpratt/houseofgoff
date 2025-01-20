<?php
    function houseofgoff_files() {
        wp_enqueue_style('hosueofgoff_styles', get_stylesheet_uri());
    }
 
    add_action('wp_enqueue_scripts', 'houseofgoff_files');

?>