<?php
//--------------------------------------------------------------------------------------------------------------
// load style sheets
function load_css()
{
    // Google Fonts: M PLUS Rounded 1c
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700;800;900&display=swap',
        false
    );

    wp_register_style('tailwind-output', get_template_directory_uri() . '/src/output.css', array(), '4.1', 'all');
    wp_enqueue_style('tailwind-output');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');
//--------------------------------------------------------------------------------------------------------------
// load javascript files
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.3.7', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('custom', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');