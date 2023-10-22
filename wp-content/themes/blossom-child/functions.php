<?php
/**
 * Blossom Spa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blossom_Spa
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action('carbon_fields_register_fields', 'crb_register_custom_fields');

function crb_register_custom_fields(){
	require_once __DIR__ . '/../../plugins/carbon-fields/theme-options.php' ;
	require_once __DIR__ . '/../../plugins/carbon-fields/post-meta.php' ;
}

 function site_scripts(){
	//wp_enqueue_style( 'fancy-style', get_stylesheet_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), time() );
    //wp_deregister_script('jquery');
    //wp_enqueue_script ('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'scripts-js', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    wp_enqueue_style( 'theme-added-style', get_stylesheet_directory_uri() . '/css/add-style.css', array(), time() );
    }
add_action( 'wp_enqueue_scripts', 'site_scripts' );


//LOGO header/footer 

function my_customize_register( $wp_customize ) {
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        //'height' => '48',
        'width' => '280',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(

        'section' => 'title_tagline',
        'label' => 'Логотип Header'

    )));
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип Footer'
    )));
}
add_action( 'customize_register', 'my_customize_register' );

