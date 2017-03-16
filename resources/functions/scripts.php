<?php

function register_and_load_theme_css ()
{
    wp_register_style('theme-css', get_template_directory_uri() . '/public/css/app.css', null, null );
    wp_enqueue_style('theme-css');
}

add_action('wp_enqueue_scripts', 'register_and_load_theme_css');

function register_and_load_theme_js()
{
    wp_register_script('theme-js', get_template_directory_uri() . '/public/js/app.js', null, true);
    wp_enqueue_script('theme-js');

    wp_deregister_script('jquery');

}

add_action('wp_enqueue_scripts', 'register_and_load_theme_js');
