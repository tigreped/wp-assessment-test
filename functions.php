<?php


if (file_exists(get_stylesheet_directory() . '/secret.php')) {

    // This file should run once, and then be deleted before the test begins
    require_once('secret.php');

}


add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'test_script', get_stylesheet_directory_uri() . '/script.js', array('jquery') );
});
