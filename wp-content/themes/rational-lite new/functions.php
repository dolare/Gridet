<?php
/**
 * Advertica functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 */
/**
 * Registers widget areas.
 *
 */
function rational_lite_widgets_init() {
	register_sidebar(array(
		'name' => __('Page Sidebar', 'rational-lite' ),
		'id' => 'page-sidebar', 
		'before_widget' => '<li id="%1$s" class="ske-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="ske-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Blog Sidebar', 'rational-lite' ),
		'id' => 'blog-sidebar',
		'before_widget' => '<li id="%1$s" class="ske-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="ske-title">',
		'after_title' => '</h3>',
	));
}
function lander_scripts() {
    
    if( is_front_page() ) {
                
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('oneui', get_stylesheet_directory_uri() . '/css/oneui.css');
        wp_enqueue_style('front-style', get_stylesheet_directory_uri() . '/front-style.css');
        wp_enqueue_script( 'addtohome', get_stylesheet_directory_uri() . '/js/addtohomescreen.min.js', array('jquery'));
        wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/core/bootstrap.min.js');
        wp_enqueue_script( 'slimscroll', get_stylesheet_directory_uri() . '/js/core/jquery.slimscroll.min.js', array('jquery'));
        wp_enqueue_script( 'scrollLock', get_stylesheet_directory_uri() . '/js/core/jquery.scrollLock.min.js', array('jquery'));
        wp_enqueue_script( 'appear', get_stylesheet_directory_uri() . '/js/core/jquery.appear.min.js', array('jquery'));
        wp_enqueue_script( 'countTo', get_stylesheet_directory_uri() . '/js/core/jquery.countTo.min.js', array('jquery'));
        wp_enqueue_script( 'placeholder', get_stylesheet_directory_uri() . '/js/core/jquery.placeholder.min.js', array('jquery'));
        wp_enqueue_script( 'cookie', get_stylesheet_directory_uri() . '/js/core/js.cookie.min.js', array('jquery'));
        wp_enqueue_script( 'stellar', get_stylesheet_directory_uri() . '/js/core/jquery.stellar.min.js', array('jquery'));
        wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'));

        wp_enqueue_script('lander-script', get_stylesheet_directory_uri() . '/js/landerscripts.js', array('jquery'),'20160615');
        wp_enqueue_script( 'addtohome', get_stylesheet_directory_uri() . '/js/addtohomescreen.min.js', array('jquery'));
        wp_enqueue_style('addtohomestyle', get_stylesheet_directory_uri() . '/css/addtohomescreen.css');
    }
}

add_action('wp_enqueue_scripts','lander_scripts');
add_action( 'widgets_init', 'rational_lite_widgets_init' );
// add_action( 'wp_enqueue_scripts', 'Rational_addtohome' );
// add_action( 'wp_enqueue_scripts', 'addToHomescreen' );

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Advertica supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
*/
function rational_lite_theme_setup() {
	/*
	 * Makes Advertica available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'rational-lite' to the name of your theme in all
	 * template files.
	 */
	 load_theme_textdomain( 'rational-lite', get_template_directory() . '/languages' );
	 
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	add_theme_support( 'title-tag' );

	// This theme allows users to set a custom header.
	add_theme_support( 'custom-header', array( 
        'flex-width' => true, 
        'width' => 1600, 
        'flex-height' => true, 
        'height' => 750, 
        'default-image' => get_template_directory_uri() . '/images/header.jpg') );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'rational_lite_custom_background_args', array('default-color' => 'ffffff') ) );
	
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support('post-thumbnails');

	/**
	 * Enable support for Post Formats
	 */
	set_post_thumbnail_size( 600, 220, true );
	add_image_size( 'rational_standard_img',770,365,true); //standard size
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'Header' => __( 'Main Navigation', 'rational-lite' ),
	));

	/**
	 * SETS UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN.
	 */
	if ( ! isset( $content_width ) ){
	    $content_width = 900;
	}

	/**
	 * Add Description Page 
	 */
	require get_template_directory() . '/includes/admin/welcome-screen/welcome-screen.php';
}
add_action( 'after_setup_theme', 'rational_lite_theme_setup' ); 

/**
* Funtion to add CSS class to body
*/
function rational_lite_add_class( $classes ) {

	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
	
	return $classes;
}
add_filter( 'body_class','rational_lite_add_class' );

/**
 * Filter content with empty post title
 *
 */

add_filter('the_title', 'rational_lite_untitled');
function rational_lite_untitled($title) {
	if ($title == '') {
		return __('Untitled','rational-lite');
	} else {
		return $title;
	}
}

/**
 * Add Customizer 
 */
require get_template_directory() . '/includes/customizer.php';
/**
 * Add Customizer 
 */
require_once(get_template_directory() . '/SketchBoard/functions/admin-init.php');