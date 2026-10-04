<?php
/**
 * functions.php — Exclusive On Trip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Salida directa no permitida.
}

if ( ! function_exists( 'exclusive_theme_setup' ) ) {
    function exclusive_theme_setup() {
        // Soporte de funcionalidades base
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    }
}
add_action( 'after_setup_theme', 'exclusive_theme_setup' );

/**
 * Encolar hoja de estilos del tema.
 */
function exclusive_theme_scripts() {
    wp_enqueue_style(
        'exclusive-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'exclusive_theme_scripts' );

/**
 * Longitud del extracto en el listado del blog.
 */
function exclusive_excerpt_length( $length ) {
    return 24;
}
add_filter( 'excerpt_length', 'exclusive_excerpt_length' );

/**
 * Texto del "seguir leyendo".
 */
function exclusive_excerpt_more( $more ) {
    return '…';
}
add_filter( 'excerpt_more', 'exclusive_excerpt_more' );
