<?php

// Function that sets up the themes features

function esports_theme_setup() 
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'esports_theme_setup');

// Function that enqueues styles and scripts

function esports_enqueue_styles() 
{
    // Main stylesheet of the theme 
    wp_enqueue_style('esports-style', get_stylesheet_uri());

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Enqueue jQuery (wordpress has this by default, so there is no url attached)
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JS with jquery
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Loads Font Awesome
    wp_enqueue_script('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'esports_enqueue_styles');


// Function that forces the site title to Esports Arena (for different installations of wordpress)

function force_esports_arena_title() 
{ 
    update_option('blogname', 'Esports Arena'); 
    update_option('blogdescription', 'The Ultimate Competitive Gaming Hub'); 
} 
add_action('after_switch_theme', 'force_esports_arena_title'); // Runs when theme is activated

/* 
Custom Widget - Quote of the Day 
This function generates and displays a random motivational quote
It is copied and reused from my Assessment 1 */

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

    // Selects random quote from the above and displays it on the website
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