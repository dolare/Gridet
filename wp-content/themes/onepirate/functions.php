<?php

add_action( 'wp_enqueue_scripts', 'one_pirate_enqueue_styles' );
function one_pirate_enqueue_styles() {
	
	wp_enqueue_style( 'one_pirate_font_roboto', '//fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic');
	
	wp_enqueue_style( 'one_pirate_font_titillium', '//fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,200italic,200,400italic,600,600italic,700,700italic,900');
	
	wp_enqueue_style( 'zerif-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );

}

function one_pirate_custom_script_fix() {
	wp_enqueue_script('one_pirate_script', get_stylesheet_directory_uri() .'/js/one_pirate_script.js', array( 'jquery', 'zerif_knob_nav' ), '201202067', true);
	
	wp_enqueue_script('one_pirate_nicescroll',get_stylesheet_directory_uri().'/js/jquery.nicescroll.js',array('jquery'),'12121',true);
    wp_enqueue_script('one_pirate_nicescroll-script',get_stylesheet_directory_uri().'/js/zerif-nicescroll.js',array('jquery','one_pirate_nicescroll'),'12121',true);	
}

add_action( 'wp_enqueue_scripts', 'one_pirate_custom_script_fix' );

/**
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function one_pirate_theme_setup() {
    load_child_theme_textdomain( 'one-pirate', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'one_pirate_theme_setup' );

/**
 * Notice in Customize to announce the theme is not maintained anymore
 */
function onepirate_customize_register( $wp_customize ) {

	require_once get_stylesheet_directory() . '/class-ti-notify.php';

	$wp_customize->register_section_type( 'Ti_Notify' );

	$wp_customize->add_section(
		new Ti_Notify(
			$wp_customize,
			'ti-notify',
			array(
				'text'     => sprintf( __( 'This child theme is not maintained anymore, consider using the parent theme %1$s or check-out our latest free one-page theme: %2$s.','onepirate' ), sprintf( '<a href="' . admin_url( 'theme-install.php?theme=zerif-lite' ) . '">%s</a>', 'Zerif Lite' ), sprintf( '<a href="' . admin_url( 'theme-install.php?theme=hestia' ) . '">%s</a>', 'Hestia' ) ),
				'priority' => 0,
			)
		)
	);

	$wp_customize->add_setting( 'onepirate-notify', array(
		'sanitize_callback' => 'esc_html',
	) );

	$wp_customize->add_control( 'onepirate-notify', array(
		'label'    => __( 'Notification', 'onepirate' ),
		'section'  => 'ti-notify',
		'priority' => 1,
	) );
}

add_action( 'customize_register', 'onepirate_customize_register' );

/**
 * Notice in admin dashboard to announce the theme is not maintained anymore
 */
function onepirate_admin_notice() {

	global $pagenow;

	if ( is_admin() && ( 'themes.php' == $pagenow ) && isset( $_GET['activated'] ) ) {
		echo '<div class="updated notice is-dismissible"><p>';
			printf( __( 'This child theme is not maintained anymore, consider using the parent theme %1$s or check-out our latest free one-page theme: %2$s.','onepirate' ), sprintf( '<a href="' . admin_url( 'theme-install.php?theme=zerif-lite' ) . '">%s</a>', 'Zerif Lite' ), sprintf( '<a href="' . admin_url( 'theme-install.php?theme=hestia' ) . '">%s</a>', 'Hestia' ) );
		echo '</p></div>';
	}
}

add_action( 'admin_notices', 'onepirate_admin_notice', 99 );
