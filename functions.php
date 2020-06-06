<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/constants.php';

/*
 * include CSS function 
 */
function theme_script_unqueue(){

    wp_enqueue_style( 'customstyle', THEME_CSS_URL . '/style.css' , array(), THEME_VERSION, 'all' );
    wp_enqueue_script( 'customscript', THEME_JS_URL . '/script.js', array(), THEME_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'theme_script_unqueue' );