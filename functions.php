<?php

function esports_theme_setup() 
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'esports-arena'),
    ));
}
add_action('after_setup_theme', 'esports_theme_setup');

function esports_enqueue_styles() 
{
    wp_enqueue_style('esports-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'esports_enqueue_styles');

function esports_arena_theme_setup() 
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'esports-arena'),
    ));
}
add_action('after_setup_theme', 'esports_arena_theme_setup');

function force_esports_arena_title() 
{ 
    update_option('blogname', 'Esports Arena'); 
    update_option('blogdescription', 'The Ultimate Competitive Gaming Hub'); 
} 
add_action('after_switch_theme', 'force_esports_arena_title'); // Runs when theme is activated

?>  
