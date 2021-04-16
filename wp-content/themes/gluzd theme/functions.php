<?php

function gluzd_files () {
    wp_enqueue_style('gluzd_main_styles', get_stylesheet_uri());
    wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400&display=swap');
}

add_action('wp_enqueue_scripts', 'gluzd_files');

function gluzd_features () {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('after_setup_theme', 'gluzd_features');

add_theme_support('post-thumbnails');