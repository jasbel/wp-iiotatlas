<?php
/**
 * Funciones y definiciones.
 * @package Iiot Atlas Sample
 * @author  Asbel JAR
 * @license null
 * @link    https://www.iiotatlas.com/
 *
 * Para aniadir codigo personalizado PHP.
 * Solo edita este archivo si tienes accesso directo en el servidor  (to fix errors if they happen).
 */


// Includes Child Theme Functions CSS.
require_once get_stylesheet_directory() . '/lib/child-functions.php';

/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function ajar_enqueue_scripts_styles() {

    //CSS files
    // $parent_style = 'generatepress';

    // wp_enqueue_style( $parent_style . '-main',
    //     get_stylesheet_directory_uri() . '/assets/css/main.css',
    //     array( $parent_style ),
    //     wp_get_theme()->get('1.0.0')
    // );

    wp_enqueue_style( 'main-min', get_stylesheet_directory_uri() . '/assets/css/main.css' );

    // Js files
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.min.js',['jquery'], 1 , true );
}
add_action('wp_enqueue_scripts', 'ajar_enqueue_scripts_styles');

// for admin editor
function add_block_editor_assets()
{
    wp_enqueue_style(
        'block_editor_css',
        get_stylesheet_directory_uri() . '/assets/css/main.css'
    );
}
add_action('enqueue_block_editor_assets', 'add_block_editor_assets', 10, 0);

