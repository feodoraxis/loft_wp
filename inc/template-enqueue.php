<?php
if ( !defined('ABSPATH') ) {
    die();
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
function enqueue_scripts() {
    wp_enqueue_style( 'libs', get_template_directory_uri() . '/assets/css/libs.min.css', [],       '1.0', false );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',     ['libs'], '1.0', false );
    wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media.css',   ['main'], '1.0', false );

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js',       [],         '1.0', true );
    wp_enqueue_script( 'main',   get_template_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0', true );
}