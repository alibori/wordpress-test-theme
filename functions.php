<?php

function load_scripts(){
    wp_register_style('stylesheet', get_template_directory_uri().'/dist/app.css', '', 1, 'all');

    wp_enqueue_style('stylesheet');

    wp_register_script('app', get_template_directory_uri().'/dist/app.js', '', 1, true);

    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'load_scripts');