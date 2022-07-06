<?php
/**
 * Theme enqueue scripts and styles.
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( ! function_exists('siliconova_scripts')){
    function siliconova_scripts() {
        $theme_uri = get_template_directory_uri();
        // include custom jQuery
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
        
    
        // wp_enqueue_style( 'siliconova-style', get_stylesheet_uri(), array(), _S_VERSION );
        // wp_style_add_data( 'siliconova-style', 'rtl', 'replace' );

        // wp_enqueue_script( 'siliconova-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

        // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        // 	wp_enqueue_script( 'comment-reply' );
        // }

        // Custom JS
        wp_enqueue_script('main_theme_functions', $theme_uri . '/src/index.js', [], "my ver", true);
        // wp_enqueue_script('main_theme_functions', $theme_uri . '/src/index.min.js', [], "my ver", true);
        
        //Slick	slider 
        if( is_front_page() || is_page('o-nas') ){
        wp_enqueue_script('slick_theme_functions', $theme_uri . '/libery/slick.min.js', [], false, true);
        // wp_enqueue_script('slider_theme_functions', $theme_uri . '/src/slider.js', [],'my_ver', true);
        }
        wp_enqueue_script('debounce_theme_functions', $theme_uri . '/libery/jquery.ba-throttle-debounce.min.js', [], false, true);

        // Custom css
        wp_enqueue_style('main_theme_style', $theme_uri . '/src/index.css');

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

    }
}
add_action( 'wp_enqueue_scripts', 'siliconova_scripts' );