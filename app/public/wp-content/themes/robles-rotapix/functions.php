<?php
function robles_rotapix_enqueue_scripts()
{
    wp_enqueue_script(
        'robles-rotapix-react-app',
        get_template_directory_uri() . '/build/index.js',
        array('react', 'react-dom', 'react-jsx-runtime'),
        filemtime(get_template_directory() . '/build/index.js'),
        true
    );

    wp_enqueue_style(
        'robles-rotapix-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'robles_rotapix_enqueue_scripts');

function robles_rotapix_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu', 'robles-rotapix')
        )
    );
}
add_action('init', 'robles_rotapix_register_menus');
