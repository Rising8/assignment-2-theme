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

    // Enqueue jQuery
    wp_enqueue_script('jquery');

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

/* Custom Widget - Quote of the Day - Completely copied and pasted from my Assessment 1! */

function quote_of_the_day() 
{
    $quotes = array(
        "The only way to do great work is to love what you do. - Steve Jobs",
        "It does not matter how slowly you go, as long as you do not stop. - Confucius",
        "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
        "A journey of a thousand miles begins with a single step. - Lao Tzu",
        "You miss 100% of the shots you don't take. - Wayne Gretzky",
        "Life is what happens when you're busy making other plans. - John Lennon"
    );

    $random_quote = esc_html($quotes[array_rand($quotes)]);

    echo '<div class="quote_of_the_day">';
    echo '<h3>Quote of the Day!</h3>';
    echo '<p>"' . $random_quote . '"</p>';
    echo '</div>';
}

// Function to add a favicon - Code is copied from wordpress theme dev, just the picture link is different (a picture related to esports) //

function add_favicon() 
{
	echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/esports.jpg" />';
}
add_action('wp_head', 'add_favicon');

?>