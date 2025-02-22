<?php

// Стили и скрипты

add_action( 'wp_enqueue_scripts', 'euroglass_scripts' );

function euroglass_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/swiper-bundle.min.css', array('main-style'));
    wp_enqueue_style( 'euroglass-style', get_template_directory_uri() . '/assets/style.css', array('swiper-style'));

    
    wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/script/swiper-bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'euroglass-script', get_template_directory_uri() . '/assets/script/main.js', array('swiper-script'), '1.0.0', true );
}

?>