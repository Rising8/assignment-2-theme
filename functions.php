<?php

function esports_theme_setup() 
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'esports_theme_setup');

function esports_enqueue_styles() 
{
    wp_enqueue_style('esports-style', get_stylesheet_uri());

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'esports_enqueue_styles');

function force_esports_arena_title() 
{ 
    update_option('blogname', 'Esports Arena'); 
    update_option('blogdescription', 'The Ultimate Competitive Gaming Hub'); 
} 
add_action('after_switch_theme', 'force_esports_arena_title'); // Runs when theme is activated

?>