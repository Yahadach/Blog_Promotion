<?php 

function style(){

    wp_enqueue_style( 'style_youness', get_template_directory_uri() . '/style.css');
}

function ressources() {

// Chargement des styles


wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.css');
// Chargement des scripts
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/css/bootstrap/js/bootstrap.js');
}

add_action('wp_enqueue_scripts', 'ressources');
add_action('wp_enqueue_scripts', 'style');

add_theme_support( 'post-thumbnails' );

?>