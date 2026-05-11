<?php
/**
 * DIVERGENTES — Página Nosotros
 * Carga assets exclusivos solo en la plantilla page-nosotros.php.
 */

add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_page_template( 'page-nosotros.php' ) ) {
        return;
    }

    wp_enqueue_style(
        'divergentes-tokens-bridge',
        get_template_directory_uri() . '/css/tokens-bridge.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'divergentes-ds-fonts',
        'https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=Source+Serif+4:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=JetBrains+Mono:wght@400;500&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'divergentes-nosotros-style',
        get_template_directory_uri() . '/css/nosotros.css',
        array( 'divergentes-tokens-bridge' ),
        '1.0.0'
    );

    wp_enqueue_script(
        'divergentes-nosotros-script',
        get_template_directory_uri() . '/css/nosotros.js',
        array(),
        '1.0.0',
        true
    );
}, 20 );
