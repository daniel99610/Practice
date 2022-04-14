<?php

function followtheme_register_styles(){

    wp_enqueue_style('followtheme-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('followtheme-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('followtheme-fontawesome', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'followtheme_register_styles');

?>