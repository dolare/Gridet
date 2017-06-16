<?php
/**
 * The function file for the child theme
 */

function lander_scripts() {
    
    if( is_front_page() ) {
        wp_enqueue_style('lander-styles', get_stylesheet_directory_uri() . '/lander-style.css');
        wp_enqueue_script('lander-script', get_stylesheet_directory_uri() . '/js/landerscripts.js', array('jquery'),'20160615');
//        wp_enqueue_script('fullpage-script', get_stylesheet_directory_uri() . '/js/jquery.fullpage.min.js', array('jquery'),'20160615');
//        wp_enqueue_style('fullpage-styles', get_stylesheet_directory_uri() . '/jquery.fullpage.min.css');
        
    }
}

add_action('wp_enqueue_scripts','lander_scripts');

add_image_size('testimonial-mug',253,253,true);

// remove default action from simone
remove_action( 'after_setup_theme', 'simone_custom_header_setup' );

//
//$defaults = array(
//	'default-image'          => '',
//	'width'                  => '',
//	'height'                 => '',
//	'flex-height'            => true,
//	'flex-width'             => true,
//	'uploads'                => true,
//	'random-default'         => false,
//	'header-text'            => true,
//	'default-text-color'     => '',
//	'wp-head-callback'       => '',
//	'admin-head-callback'    => '',
//	'admin-preview-callback' => '',
//);
//add_theme_support( 'custom-header', $defaults );

// define new custom header size
function yourchildthemename_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'simone_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '',
		'width'                  => 1800,
		'height'                 => 1200,
		'flex-height'            => true,
		'wp-head-callback'       => 'simone_header_style',
		'admin-head-callback'    => 'simone_admin_header_style',
		'admin-preview-callback' => 'simone_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'yourchildthemename_custom_header_setup' );