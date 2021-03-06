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

    wp_enqueue_style( 'main-min', get_stylesheet_directory_uri() . '/assets/css/main.min.css', '', 2 );

    // Js files
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.min.js',['jquery'], 1 , true );
}
add_action('wp_enqueue_scripts', 'ajar_enqueue_scripts_styles');

// for admin editor
function add_block_editor_assets()
{
    wp_enqueue_style(
        'block_editor_css',
        get_stylesheet_directory_uri() . '/assets/css/main.min.css'
    );
}
add_action('enqueue_block_editor_assets', 'add_block_editor_assets', 10, 0);

/**
 * Add custom field body class(es) to the body classes.
 * @param array $classes Existing body classes.
 * @return array Amended body classes.
 */
function custom_body_class( array $classes ) {
    $new_class = is_page() ? get_post_meta( get_the_ID(), 'body_class', true ) : null;
    
	if ( $new_class ) {
        $classes[] = $new_class;
	}
    
	return $classes;
}
add_filter( 'body_class', 'custom_body_class' );



// function deregister_my_styles() {
//     // wp_deregister_style( 'happyform' );
//     wp_dequeue_script('happyforms-color-css');
// }
// add_action( 'wp_print_styles', 'deregister_my_styles', 100 );
