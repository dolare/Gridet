<?php
/**
 * shelley Theme Customizer
 *
 * @package shelley
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function shelley_customize_register( $wp_customize ) {

//Standard WordPress Settings
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	
//Add Sections for Shelley Theme Specifics
	$wp_customize->add_section( 'shelley_general', array(
	'title' => __('Frontpage Settings', 'shelley'),
	'priority' => 81,
	) );
	$wp_customize->add_section( 'shelley_hero', array(
	'title' => __('Hero', 'shelley'),
	'priority' => 82,
	) );
	$wp_customize->add_section( 'shelley_intro', array(
	'title' => __('Intro', 'shelley'),
	'priority' => 83,
	) );
	$wp_customize->add_section( 'shelley_member', array(
	'title' => __('Members', 'shelley'),
	'priority' => 84,
	) );
	$wp_customize->add_section( 'shelley_services', array(
	'title' => __('Services', 'shelley'),
	'priority' => 85,
	) );
	$wp_customize->add_section( 'shelley_portfolio', array(
	'title' => __('Portfolio', 'shelley'),
	'priority' => 86,
	) );
	$wp_customize->add_section( 'shelley_testimonials', array(
	'title' => __('Testimonials', 'shelley'),
	'priority' => 87,
	) );
	$wp_customize->add_section( 'shelley_counters', array(
	'title' => __('Value Counter', 'shelley'),
	'priority' => 88,
	) );
	$wp_customize->add_section( 'shelley_cta', array(
	'title' => __('Call To Action', 'shelley'),
	'priority' => 89,
	) );

	

//Color Settings
	// Header Color Settings
	$wp_customize->add_setting( 'header_link_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_setting( 'header_link_active_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_setting( 'header_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_setting( 'header_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	// Hero Color Settings
	$wp_customize->add_setting( 'hero_button_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_setting( 'hero_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_setting( 'hero_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	// Intro Color Settings
	$wp_customize->add_setting( 'intro_heading_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'intro_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'intro_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	// Members Color Settings
	$wp_customize->add_setting( 'members_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );		
	$wp_customize->add_setting( 'members_title_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'members_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );		
	// Services Color Settings
	$wp_customize->add_setting( 'services_title_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'services_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'services_heading_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'services_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	// Portfolio Color Settings
	$wp_customize->add_setting( 'portfolio_border_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'portfolio_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'portfolio_heading_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'portfolio_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	// Testimonials Color Settings
	$wp_customize->add_setting( 'testimonials_name_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'testimonials_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'testimonials_heading_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'testimonials_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	// Values Color Settings
	$wp_customize->add_setting( 'value_value_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'value_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'value_heading_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'value_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	// CTA Color Settings
	$wp_customize->add_setting( 'cta_button_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'cta_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'cta_link_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'cta_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );
	// Footer Color Settings
	$wp_customize->add_setting( 'footer_heading_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'footer_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'footer_link_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'footer_bg_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	// Copyright Color Settings
	$wp_customize->add_setting( 'copyright_heading_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'copyright_text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	$wp_customize->add_setting( 'copyright_link_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );	
	
//Color Controls
	// Header Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_link_color', array(
		'label'       => __( 'Header Link Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_link_active_color', array(
		'label'       => __( 'Header Active Link Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
		'label'       => __( 'Header Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
		'label'       => __( 'Header Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	// Hero Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_button_color', array(
		'label'       => __( 'Hero Button Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_text_color', array(
		'label'       => __( 'Hero Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_bg_color', array(
		'label'       => __( 'Hero Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	// Intro Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'intro_heading_color', array(
		'label'       => __( 'Intro Heading Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'intro_text_color', array(
		'label'       => __( 'Intro Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'intro_bg_color', array(
		'label'       => __( 'Intro Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );	
	// Members Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'members_title_color', array(
		'label'       => __( 'Members Title Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'members_text_color', array(
		'label'       => __( 'Members Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'members_bg_color', array(
		'label'       => __( 'Members Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	// Services Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'services_heading_color', array(
		'label'       => __( 'Services Heading Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'services_title_color', array(
		'label'       => __( 'Services Title Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'services_text_color', array(
		'label'       => __( 'Services Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'services_bg_color', array(
		'label'       => __( 'Services Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	// Portfolio Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_heading_color', array(
		'label'       => __( 'Portfolio Heading Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_border_color', array(
		'label'       => __( 'Portfolio Border Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_text_color', array(
		'label'       => __( 'Portfolio Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_bg_color', array(
		'label'       => __( 'Portfolio Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );			
	// Testimonials Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonials_name_color', array(
		'label'       => __( 'Testimonials Name Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonials_heading_color', array(
		'label'       => __( 'Testimonials Heading Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonials_text_color', array(
		'label'       => __( 'Testimonials Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonials_bg_color', array(
		'label'       => __( 'Testimonials Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	// Values Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'value_value_color', array(
		'label'       => __( 'Value Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'value_heading_color', array(
		'label'       => __( 'Value Heading Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'value_text_color', array(
		'label'       => __( 'Value Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'value_bg_color', array(
		'label'       => __( 'Value Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );	
	// CTA Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_link_color', array(
		'label'       => __( 'CTA Link Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_button_color', array(
		'label'       => __( 'CTA Button Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_text_color', array(
		'label'       => __( 'CTA Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_bg_color', array(
		'label'       => __( 'CTA Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );	
	// Footer Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
		'label'       => __( 'Footer Link Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_heading_color', array(
		'label'       => __( 'Footer Heading Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
		'label'       => __( 'Footer Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
		'label'       => __( 'Footer Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );	
	// Copyright Color Controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_link_color', array(
		'label'       => __( 'Copyright Link Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_text_color', array(
		'label'       => __( 'Copyright Text Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_heading_color', array(
		'label'       => __( 'Copyright Background Color', 'shelley' ),
		'description' => __( 'Override default styling', 'shelley' ),
		'section'     => 'colors',
	) ) );	
	
	
	//Add Textarea to customizer (still waiting for official implement)
	if( class_exists( 'WP_Customize_Control' ) ):
		class WP_Customize_Textarea_Control extends WP_Customize_Control {
			public $type = 'textarea';
			public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php  
			} 	
		} 
	endif;		
	
//shelley_general frontpage settings	

	//load order for hero section
	$wp_customize->add_setting( 'shelley_load_order_hero', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_hero', 	array(
		'label'    => __( 'Hero load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_hero',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));	
	//load order for intro section
	$wp_customize->add_setting( 'shelley_load_order_intro', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_intro', 	array(
		'label'    => __( 'Intro load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_intro',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));	
	//load order for members section
	$wp_customize->add_setting( 'shelley_load_order_members', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_members', 	array(
		'label'    => __( 'Members load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_members',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));	
	//load order for services section
	$wp_customize->add_setting( 'shelley_load_order_services', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_services', 	array(
		'label'    => __( 'Services load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_services',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));	
	//load order for portfolio section
	$wp_customize->add_setting( 'shelley_load_order_portfolio', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_portfolio', 	array(
		'label'    => __( 'Portfolio load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_portfolio',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));	
	//load order for testimonials section
	$wp_customize->add_setting( 'shelley_load_order_testimonials', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_testimonials', 	array(
		'label'    => __( 'Testimonials load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_testimonials',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));	
	//load order for value counter section
	$wp_customize->add_setting( 'shelley_load_order_counters', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_counters', 	array(
		'label'    => __( 'Value Counter load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_counters',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));	
	//load order for call to action section
	$wp_customize->add_setting( 'shelley_load_order_actnow', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(	'shelley_load_order_actnow', 	array(
		'label'    => __( 'CTA load order', 'shelley' ),
		'section'  => 'shelley_general',
		'settings' => 'shelley_load_order_actnow',
		'type'     => 'select',
		'choices'  => array('1'  => 1,'2' => 2,'3' => 3,'4' => 4, '5' => 5,'6' => 6,'7' => 7,'8' => 8, '0' => 'Disable')
	));		
	
//shelley_hero section settings and controls
	$wp_customize->add_setting( 'shelley_hero_title', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_hero_tagline', array(
	'sanitize_callback' => 'balanceTags',
	) );
	$wp_customize->add_setting( 'shelley_hero_bg', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_hero_featured_image', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_hero_button_1_link', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_hero_button_1_text', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_hero_button_2_link', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_hero_button_2_text', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_hero_bg',
           array(
               'label'      => __( 'Background image', 'shelley' ),
               'section'    => 'shelley_hero',
               'settings'   => 'shelley_hero_bg',
           )
       )
	);
	$wp_customize->add_control( 'shelley_hero_title', array(
		'label' 	=> __( 'Hero Title', 'shelley'),
		'section'	=> 'shelley_hero',
		'settings'	=> 'shelley_hero_title',
		'type'		=> 'text'
	) );

	$wp_customize->add_control( new WP_Customize_Textarea_Control(
		$wp_customize,
		'shelley_hero_tagline',
			array(
				'label'	=> __( 'Hero description', 'shelley' ),
				'section'	=> 'shelley_hero',
				'settings'	=> 'shelley_hero_tagline'
			)
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_hero_featured_image',
           array(
               'label'      => __( 'Featured image', 'shelley' ),
               'section'    => 'shelley_hero',
               'settings'   => 'shelley_hero_featured_image',
           )
       )
	);
	$wp_customize->add_control( 'shelley_hero_button_1_link', array(
		'label' 	=> __( 'Button 1 link', 'shelley'),
		'section'	=> 'shelley_hero',
		'settings'	=> 'shelley_hero_button_1_link',
		'type'		=> 'text'
	) );
	$wp_customize->add_control( 'shelley_hero_button_1_text', array(
		'label' 	=> __( 'Button 1 text', 'shelley'),
		'section'	=> 'shelley_hero',
		'settings'	=> 'shelley_hero_button_1_text',
		'type'		=> 'text'
	) );
	$wp_customize->add_control( 'shelley_hero_button_2_link', array(
		'label' 	=> __( 'Button 2 link', 'shelley'),
		'section'	=> 'shelley_hero',
		'settings'	=> 'shelley_hero_button_2_link',
		'type'		=> 'text'
	) );
	$wp_customize->add_control( 'shelley_hero_button_2_text', array(
		'label' 	=> __( 'Button 2 text', 'shelley'),
		'section'	=> 'shelley_hero',
		'settings'	=> 'shelley_hero_button_2_text',
		'type'		=> 'text'
	) );	
	
//shelley_intro section
	
	$wp_customize->add_setting( 'shelley_intro_image', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_intro_title', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_intro_paragraph_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_intro_paragraph_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_intro_image',
        array(
			'label'      => __( 'Upload image', 'shelley' ),
			'section'    => 'shelley_intro',
			'settings'   => 'shelley_intro_image',
			'priority'	=> 1
				))
	);	
	$wp_customize->add_control( 'shelley_intro_title', array(
		'label' 	=> __( 'Intro Title', 'shelley'),
		'section'	=> 'shelley_intro',
		'settings'	=> 'shelley_intro_title',
		'type'		=> 'text',
		'priority'	=> 2
	) );
	$wp_customize->add_control( 'shelley_intro_paragraph_1', array(
		'label' 	=> __( 'Intro 1st paragraph', 'shelley'),
		'section'	=> 'shelley_intro',
		'settings'	=> 'shelley_intro_paragraph_1',
		'type'		=> 'text',
		'priority'	=> 3
	) );
	$wp_customize->add_control( 'shelley_intro_paragraph_2', array(
		'label' 	=> __( 'Intro 2nd paragraph', 'shelley'),
		'section'	=> 'shelley_intro',
		'settings'	=> 'shelley_intro_paragraph_2',
		'type'		=> 'text',
		'priority'	=> 4
	) );
//shelley_member section
//1st member
	$wp_customize->add_setting( 'shelley_member_image_1', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_member_title_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_member_name_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_member_description_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_member_image_1',
        array(
			'label'      => __( 'Member 1 image', 'shelley' ),
			'section'    => 'shelley_member',
			'settings'   => 'shelley_member_image_1',

				))
	);	
	$wp_customize->add_control( 'shelley_member_title_1', array(
		'label' 	=> __( 'Member 1 Title', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_title_1',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_member_name_1', array(
		'label' 	=> __( 'Member 1 name', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_name_1',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_member_description_1', array(
		'label' 	=> __( 'Member 1 description', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_description_1',
		'type'		=> 'text',

	) );
//2nd member
	$wp_customize->add_setting( 'shelley_member_image_2', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_member_title_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_member_name_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_member_description_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_member_image_2',
        array(
			'label'      => __( 'Member 2 image', 'shelley' ),
			'section'    => 'shelley_member',
			'settings'   => 'shelley_member_image_2',

				))
	);	
	$wp_customize->add_control( 'shelley_member_title_2', array(
		'label' 	=> __( 'Member 2 Title', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_title_2',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_member_name_2', array(
		'label' 	=> __( 'Member 2 name', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_name_2',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_member_description_2', array(
		'label' 	=> __( 'Member 2 description', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_description_2',
		'type'		=> 'text',
	) );
//3rd member
	$wp_customize->add_setting( 'shelley_member_image_3', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_member_title_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_member_name_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_member_description_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_member_image_3',
        array(
			'label'      => __( 'Member 3 image', 'shelley' ),
			'section'    => 'shelley_member',
			'settings'   => 'shelley_member_image_3',
				))
	);	
	$wp_customize->add_control( 'shelley_member_title_3', array(
		'label' 	=> __( 'Member 3 Title', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_title_3',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_member_name_3', array(
		'label' 	=> __( 'Member 3 name', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_name_3',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_member_description_3', array(
		'label' 	=> __( 'Member 3 description', 'shelley'),
		'section'	=> 'shelley_member',
		'settings'	=> 'shelley_member_description_3',
		'type'		=> 'text',
	) );

//shelley_service section
//1st service
	$wp_customize->add_setting( 'shelley_services_image_1', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_services_title_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_services_description_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_services_image_1',
        array(
			'label'      => __( 'services 1 image', 'shelley' ),
			'section'    => 'shelley_services',
			'settings'   => 'shelley_services_image_1',

				))
	);	
	$wp_customize->add_control( 'shelley_services_title_1', array(
		'label' 	=> __( 'services 1 Title', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_title_1',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_services_description_1', array(
		'label' 	=> __( 'services 1 description', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_description_1',
		'type'		=> 'text',

	) );
//2nd services
	$wp_customize->add_setting( 'shelley_services_image_2', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_services_title_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_services_description_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_services_image_2',
        array(
			'label'      => __( 'services 2 image', 'shelley' ),
			'section'    => 'shelley_services',
			'settings'   => 'shelley_services_image_2',

				))
	);	
	$wp_customize->add_control( 'shelley_services_title_2', array(
		'label' 	=> __( 'services 2 Title', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_title_2',
		'type'		=> 'text',
	) );
		$wp_customize->add_control( 'shelley_services_description_2', array(
		'label' 	=> __( 'services 2 description', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_description_2',
		'type'		=> 'text',
	) );
//3rd services
	$wp_customize->add_setting( 'shelley_services_image_3', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_services_title_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_services_description_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_services_image_3',
        array(
			'label'      => __( 'services 3 image', 'shelley' ),
			'section'    => 'shelley_services',
			'settings'   => 'shelley_services_image_3',
				))
	);	
	$wp_customize->add_control( 'shelley_services_title_3', array(
		'label' 	=> __( 'services 3 Title', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_title_3',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_services_description_3', array(
		'label' 	=> __( 'services 3 description', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_description_3',
		'type'		=> 'text',
	) );
//4th services
	$wp_customize->add_setting( 'shelley_services_image_4', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_services_title_4', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_services_description_4', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_services_image_4',
        array(
			'label'      => __( 'services 4 image', 'shelley' ),
			'section'    => 'shelley_services',
			'settings'   => 'shelley_services_image_4',
			))
	);	
	$wp_customize->add_control( 'shelley_services_title_4', array(
		'label' 	=> __( 'services 4 Title', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_title_4',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_services_description_4', array(
		'label' 	=> __( 'services 4 description', 'shelley'),
		'section'	=> 'shelley_services',
		'settings'	=> 'shelley_services_description_4',
		'type'		=> 'text',
	) );
//shelley_portfolio section
//1st portfolio
	$wp_customize->add_setting( 'shelley_portfolio_image_1', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_title_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_link_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_portfolio_image_1',
        array(
			'label'      => __( 'portfolio 1 image', 'shelley' ),
			'section'    => 'shelley_portfolio',
			'settings'   => 'shelley_portfolio_image_1',

				))
	);	
	$wp_customize->add_control( 'shelley_portfolio_title_1', array(
		'label' 	=> __( 'portfolio 1 Title', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_title_1',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_portfolio_link_1', array(
		'label' 	=> __( 'portfolio 1 link', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_link_1',
		'type'		=> 'text',

	) );
	
//2nd portfolio
	$wp_customize->add_setting( 'shelley_portfolio_image_2', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_title_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_link_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_portfolio_image_2',
        array(
			'label'      => __( 'portfolio 2 image', 'shelley' ),
			'section'    => 'shelley_portfolio',
			'settings'   => 'shelley_portfolio_image_2',

				))
	);	
	$wp_customize->add_control( 'shelley_portfolio_title_2', array(
		'label' 	=> __( 'portfolio 2 Title', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_title_2',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_portfolio_link_2', array(
		'label' 	=> __( 'portfolio 2 link', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_link_2',
		'type'		=> 'text',
	) );
	
//3rd portfolio
	$wp_customize->add_setting( 'shelley_portfolio_image_3', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_title_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_link_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_portfolio_image_3',
        array(
			'label'      => __( 'portfolio 3 image', 'shelley' ),
			'section'    => 'shelley_portfolio',
			'settings'   => 'shelley_portfolio_image_3',
				))
	);	
	$wp_customize->add_control( 'shelley_portfolio_title_3', array(
		'label' 	=> __( 'portfolio 3 Title', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_title_3',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_portfolio_link_3', array(
		'label' 	=> __( 'portfolio 3 link', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_link_3',
		'type'		=> 'text',
	) );
	
//4th portfolio
	$wp_customize->add_setting( 'shelley_portfolio_image_4', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_title_4', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_link_4', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_portfolio_image_4',
        array(
			'label'      => __( 'portfolio 4 image', 'shelley' ),
			'section'    => 'shelley_portfolio',
			'settings'   => 'shelley_portfolio_image_4',
			))
	);	
	$wp_customize->add_control( 'shelley_portfolio_title_4', array(
		'label' 	=> __( 'portfolio 4 Title', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_title_4',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_portfolio_link_4', array(
		'label' 	=> __( 'portfolio 4 link', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_link_4',
		'type'		=> 'text',
	) );
	
//5th portfolio
	$wp_customize->add_setting( 'shelley_portfolio_image_5', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_title_5', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_link_5', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_portfolio_image_5',
        array(
			'label'      => __( 'portfolio 5 image', 'shelley' ),
			'section'    => 'shelley_portfolio',
			'settings'   => 'shelley_portfolio_image_5',
			))
	);	
	$wp_customize->add_control( 'shelley_portfolio_title_5', array(
		'label' 	=> __( 'portfolio 5 Title', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_title_5',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_portfolio_link_5', array(
		'label' 	=> __( 'portfolio 5 link', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_link_5',
		'type'		=> 'text',
	) );
//6th portfolio
	$wp_customize->add_setting( 'shelley_portfolio_image_6', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_title_6', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_portfolio_link_6', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_portfolio_image_6',
        array(
			'label'      => __( 'portfolio 6 image', 'shelley' ),
			'section'    => 'shelley_portfolio',
			'settings'   => 'shelley_portfolio_image_6',
			))
	);	
	$wp_customize->add_control( 'shelley_portfolio_title_6', array(
		'label' 	=> __( 'portfolio 6 Title', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_title_6',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_portfolio_link_6', array(
		'label' 	=> __( 'portfolio 6 link', 'shelley'),
		'section'	=> 'shelley_portfolio',
		'settings'	=> 'shelley_portfolio_link_6',
		'type'		=> 'text',
	) );


//shelley_testimonials section	
	//1st testimonials
	$wp_customize->add_setting( 'shelley_testimonials_image_1', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_title_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_name_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_review_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_testimonials_image_1',
        array(
			'label'      => __( 'testimonials 1 image', 'shelley' ),
			'section'    => 'shelley_testimonials',
			'settings'   => 'shelley_testimonials_image_1',

				))
	);	
	$wp_customize->add_control( 'shelley_testimonials_title_1', array(
		'label' 	=> __( 'testimonials 1 Title', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_title_1',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_testimonials_name_1', array(
		'label' 	=> __( 'testimonials 1 name', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_name_1',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_testimonials_review_1', array(
		'label' 	=> __( 'testimonials 1 review', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_review_1',
		'type'		=> 'text',

	) );
//2nd testimonials
	$wp_customize->add_setting( 'shelley_testimonials_image_2', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_title_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_name_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_review_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_testimonials_image_2',
        array(
			'label'      => __( 'testimonials 2 image', 'shelley' ),
			'section'    => 'shelley_testimonials',
			'settings'   => 'shelley_testimonials_image_2',

				))
	);	
	$wp_customize->add_control( 'shelley_testimonials_title_2', array(
		'label' 	=> __( 'testimonials 2 Title', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_title_2',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_testimonials_name_2', array(
		'label' 	=> __( 'testimonials 2 name', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_name_2',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_testimonials_review_2', array(
		'label' 	=> __( 'testimonials 2 review', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_review_2',
		'type'		=> 'text',
	) );
//3rd testimonials
	$wp_customize->add_setting( 'shelley_testimonials_image_3', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_title_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_name_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_review_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_testimonials_image_3',
        array(
			'label'      => __( 'testimonials 3 image', 'shelley' ),
			'section'    => 'shelley_testimonials',
			'settings'   => 'shelley_testimonials_image_3',
				))
	);	
	$wp_customize->add_control( 'shelley_testimonials_title_3', array(
		'label' 	=> __( 'testimonials 3 Title', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_title_3',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_testimonials_name_3', array(
		'label' 	=> __( 'testimonials 3 name', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_name_3',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_testimonials_review_3', array(
		'label' 	=> __( 'testimonials 3 review', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_review_3',
		'type'		=> 'text',
	) );
//4th testimonials
	$wp_customize->add_setting( 'shelley_testimonials_image_4', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_title_4', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_name_4', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_testimonials_review_4', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_testimonials_image_4',
        array(
			'label'      => __( 'testimonials 4 image', 'shelley' ),
			'section'    => 'shelley_testimonials',
			'settings'   => 'shelley_testimonials_image_4',
			))
	);	
	$wp_customize->add_control( 'shelley_testimonials_title_4', array(
		'label' 	=> __( 'testimonials 4 Title', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_title_4',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_testimonials_name_4', array(
		'label' 	=> __( 'testimonials 4 name', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_name_4',
		'type'		=> 'text',
	) );
	$wp_customize->add_control( 'shelley_testimonials_review_4', array(
		'label' 	=> __( 'testimonials 4 review', 'shelley'),
		'section'	=> 'shelley_testimonials',
		'settings'	=> 'shelley_testimonials_review_4',
		'type'		=> 'text',
	) );
//Counter Settings and Controls
	//Counter 1 
	$wp_customize->add_setting( 'shelley_counters_image_1', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_counters_title_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_counters_value_1', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_counters_image_1',
        array(
			'label'      => __( 'counters 1 image', 'shelley' ),
			'section'    => 'shelley_counters',
			'settings'   => 'shelley_counters_image_1',

				))
	);	
	$wp_customize->add_control( 'shelley_counters_title_1', array(
		'label' 	=> __( 'counters 1 Title', 'shelley'),
		'section'	=> 'shelley_counters',
		'settings'	=> 'shelley_counters_title_1',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_counters_value_1', array(
		'label' 	=> __( 'counters 1 value', 'shelley'),
		'section'	=> 'shelley_counters',
		'settings'	=> 'shelley_counters_value_1',
		'type'		=> 'text',

	) );
	//Counter2
	$wp_customize->add_setting( 'shelley_counters_image_2', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_counters_title_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_counters_value_2', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_counters_image_2',
        array(
			'label'      => __( 'counters 2 image', 'shelley' ),
			'section'    => 'shelley_counters',
			'settings'   => 'shelley_counters_image_2',

				))
	);	
	$wp_customize->add_control( 'shelley_counters_title_2', array(
		'label' 	=> __( 'counters 2 Title', 'shelley'),
		'section'	=> 'shelley_counters',
		'settings'	=> 'shelley_counters_title_2',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_counters_value_2', array(
		'label' 	=> __( 'counters 2 value', 'shelley'),
		'section'	=> 'shelley_counters',
		'settings'	=> 'shelley_counters_value_2',
		'type'		=> 'text',

	) );
	//Counter 3
	$wp_customize->add_setting( 'shelley_counters_image_3', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_counters_title_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_counters_value_3', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'shelley_counters_image_3',
        array(
			'label'      => __( 'counters 3 image', 'shelley' ),
			'section'    => 'shelley_counters',
			'settings'   => 'shelley_counters_image_3',

				))
	);	
	$wp_customize->add_control( 'shelley_counters_title_3', array(
		'label' 	=> __( 'counters 3 Title', 'shelley'),
		'section'	=> 'shelley_counters',
		'settings'	=> 'shelley_counters_title_3',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_counters_value_3', array(
		'label' 	=> __( 'counters 3 value', 'shelley'),
		'section'	=> 'shelley_counters',
		'settings'	=> 'shelley_counters_value_3',
		'type'		=> 'text',

	) );

//Call To Action
//Counter 1 
	$wp_customize->add_setting( 'shelley_cta_link', array(
	'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'shelley_cta_header', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_cta_tagline', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( 'shelley_cta_button_text', array(
	'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'shelley_cta_link', array(
		'label' 	=> __( 'CTA link', 'shelley'),
		'section'	=> 'shelley_cta',
		'settings'	=> 'shelley_cta_link',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_cta_header', array(
		'label' 	=> __( 'CTA Title', 'shelley'),
		'section'	=> 'shelley_cta',
		'settings'	=> 'shelley_cta_header',
		'type'		=> 'text',

	) );
	$wp_customize->add_control( 'shelley_cta_tagline', array(
		'label' 	=> __( 'CTA tagline', 'shelley'),
		'section'	=> 'shelley_cta',
		'settings'	=> 'shelley_cta_tagline',
		'type'		=> 'text',

	) );	
	$wp_customize->add_control( 'shelley_cta_button_text', array(
		'label' 	=> __( 'CTA button text', 'shelley'),
		'section'	=> 'shelley_cta',
		'settings'	=> 'shelley_cta_button_text',
		'type'		=> 'text',

	) );	
}
add_action( 'customize_register', 'shelley_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shelley_customize_preview_js() {
	wp_enqueue_script( 'shelley_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'shelley_customize_preview_js' );

function shelley_custom_css() {

	$bg_img = get_header_image();
	wp_enqueue_style(
		'custom-style',
		get_template_directory_uri() . '/css/custom.css'
	);
		
		if ( '' == get_theme_mod( 'header_link_color' ) ) { $header_link_color = '#303030'; } else { $header_link_color = get_theme_mod('header_link_color'); }
		if ( '' == get_theme_mod( 'header_link_active_color' ) ) { $header_link_active_color = '#303030'; } else { $header_link_active_color = get_theme_mod('header_link_active_color'); }
		if ( '' == get_theme_mod( 'header_text_color' ) ) { $header_text_color = ''; } else { $header_text_color = get_theme_mod('header_text_color'); }
		if ( '' == get_theme_mod( 'header_bg_color' ) ) { $header_bg_color = ''; } else { $header_bg_color = get_theme_mod('header_bg_color'); }
		
		if ( '' == get_theme_mod( 'hero_button_color' ) ) { $hero_button_color = '#222222'; } else { $hero_button_color = get_theme_mod('hero_button_color'); }
		if ( '' == get_theme_mod( 'hero_text_color' ) ) { $hero_text_color = ''; } else { $hero_text_color = get_theme_mod('hero_text_color'); }
		if ( '' == get_theme_mod( 'hero_bg_color' ) ) { $hero_bg_color = ''; } else { $hero_bg_color = get_theme_mod('hero_bg_color'); }
		if ( '' == get_theme_mod( 'shelley_hero_bg' ) ) { $shelley_hero_bg = ''; } else { $shelley_hero_bg = get_theme_mod('shelley_hero_bg'); }
		
		if ( '' == get_theme_mod( 'intro_heading_color' ) ) { $intro_heading_color = ''; } else { $intro_heading_color = get_theme_mod('intro_heading_color'); }
		if ( '' == get_theme_mod( 'intro_text_color' ) ) { $intro_text_color = ''; } else { $intro_text_color = get_theme_mod('intro_text_color'); }
		if ( '' == get_theme_mod( 'intro_bg_color' ) ) { $intro_bg_color = ''; } else { $intro_bg_color = get_theme_mod('intro_bg_color'); }
		
		if ( '' == get_theme_mod( 'members_title_color' ) ) { $members_title_color = ''; } else { $members_title_color = get_theme_mod('members_title_color'); }
		if ( '' == get_theme_mod( 'members_text_color' ) ) { $members_text_color = ''; } else { $members_text_color = get_theme_mod('members_text_color'); }
		if ( '' == get_theme_mod( 'members_bg_color' ) ) { $members_bg_color = ''; } else { $members_bg_color = get_theme_mod('members_bg_color'); }
		
		if ( '' == get_theme_mod( 'services_title_color' ) ) { $services_title_color = ''; } else { $services_title_color = get_theme_mod('services_title_color'); }
		if ( '' == get_theme_mod( 'services_text_color' ) ) { $services_text_color = ''; } else { $services_text_color = get_theme_mod('services_text_color'); }
		if ( '' == get_theme_mod( 'services_bg_color' ) ) { $services_bg_color = ''; } else { $services_bg_color = get_theme_mod('services_bg_color'); }
		if ( '' == get_theme_mod( 'services_heading_color' ) ) { $services_heading_color = ''; } else { $services_heading_color = get_theme_mod('services_heading_color'); }
		
		if ( '' == get_theme_mod( 'portfolio_border_color' ) ) { $portfolio_border_color = ''; } else { $portfolio_border_color = get_theme_mod('portfolio_border_color'); }
		if ( '' == get_theme_mod( 'portfolio_text_color' ) ) { $portfolio_text_color = ''; } else { $portfolio_text_color = get_theme_mod('portfolio_text_color'); }
		if ( '' == get_theme_mod( 'portfolio_bg_color' ) ) { $portfolio_bg_color = ''; } else { $portfolio_bg_color = get_theme_mod('portfolio_bg_color'); }
		if ( '' == get_theme_mod( 'portfolio_heading_color' ) ) { $portfolio_heading_color = ''; } else { $portfolio_heading_color = get_theme_mod('portfolio_heading_color'); }
		
		if ( '' == get_theme_mod( 'testimonials_name_color' ) ) { $testimonials_name_color = ''; } else { $testimonials_name_color = get_theme_mod('testimonials_name_color'); }
		if ( '' == get_theme_mod( 'testimonials_text_color' ) ) { $testimonials_text_color = ''; } else { $testimonials_text_color = get_theme_mod('testimonials_text_color'); }
		if ( '' == get_theme_mod( 'testimonials_bg_color' ) ) { $testimonials_bg_color = ''; } else { $testimonials_bg_color = get_theme_mod('testimonials_bg_color'); }
		if ( '' == get_theme_mod( 'testimonials_heading_color' ) ) { $testimonials_heading_color = ''; } else { $testimonials_heading_color = get_theme_mod('testimonials_heading_color'); }
		
		if ( '' == get_theme_mod( 'value_value_color' ) ) { $value_value_color = ''; } else { $value_value_color = get_theme_mod('value_value_color'); }
		if ( '' == get_theme_mod( 'value_text_color' ) ) { $value_text_color = ''; } else { $value_text_color = get_theme_mod('value_text_color'); }
		if ( '' == get_theme_mod( 'value_bg_color' ) ) { $value_bg_color = ''; } else { $value_bg_color = get_theme_mod('value_bg_color'); }
		if ( '' == get_theme_mod( 'value_heading_color' ) ) { $value_heading_color = ''; } else { $value_heading_color = get_theme_mod('value_heading_color'); }	
		
		if ( '' == get_theme_mod( 'cta_link_color' ) ) { $cta_link_color = ''; } else { $cta_link_color = get_theme_mod('cta_link_color'); }
		if ( '' == get_theme_mod( 'cta_button_color' ) ) { $cta_button_color = ''; } else { $cta_button_color = get_theme_mod('cta_button_color'); }
		if ( '' == get_theme_mod( 'cta_text_color' ) ) { $cta_text_color = ''; } else { $cta_text_color = get_theme_mod('cta_text_color'); }
		if ( '' == get_theme_mod( 'cta_bg_color' ) ) { $cta_bg_color = ''; } else { $cta_bg_color = get_theme_mod('cta_bg_color'); }
		
		if ( '' == get_theme_mod( 'footer_heading_color' ) ) { $footer_heading_color = ''; } else { $footer_heading_color = get_theme_mod('footer_heading_color'); }
		if ( '' == get_theme_mod( 'footer_link_color' ) ) { $footer_link_color = ''; } else { $footer_link_color = get_theme_mod('footer_link_color'); }
		if ( '' == get_theme_mod( 'footer_text_color' ) ) { $footer_text_color = ''; } else { $footer_text_color = get_theme_mod('footer_text_color'); }
		if ( '' == get_theme_mod( 'footer_bg_color' ) ) { $footer_bg_color = ''; } else { $footer_bg_color = get_theme_mod('footer_bg_color'); }
		
		if ( '' == get_theme_mod( 'copyright_link_color' ) ) { $copyright_link_color = ''; } else { $copyright_link_color = get_theme_mod('copyright_link_color'); }
		if ( '' == get_theme_mod( 'copyright_text_color' ) ) { $copyright_text_color = ''; } else { $copyright_text_color = get_theme_mod('copyright_text_color'); }
		if ( '' == get_theme_mod( 'copyright_bg_color' ) ) { $copyright_bg_color = ''; } else { $copyright_bg_color = get_theme_mod('copyright_bg_color'); }
		
// Start adding all the css rules together in one joined variable called $custom_css then join to the actual custom.css file.

	// Header Color Settings
		if ($header_link_color != '') { 
        $custom_css = ".site-header li a, p.site-title a {
                        color: {$header_link_color};
                }
		"; }
		if ($header_link_active_color != '') {
		$custom_css .= "
				.site-header li a:hover, .menu li.current-menu-item a {
						color:{$header_link_active_color};
				}
		"; }
		if ($header_text_color != '') { 
        $custom_css .= "
                p.site-description {
                        color: {$header_text_color};
                }
		"; }
		if ($header_bg_color != '') { 
        $custom_css .= "
                .site-header {
                        background-color: {$header_bg_color};
                }
		"; }
	// Hero Color Settings 
		if ($hero_button_color != '') { 
        $custom_css .= "
                .hero a {
                        border:1px solid {$hero_button_color}!important;
						color:{$hero_button_color};
                }
		"; }
		if ($hero_text_color != '') { 
        $custom_css .= "
                .hero p, .hero h1 {
						color:{$hero_text_color};
                }
		"; }
		if ($shelley_hero_bg != '') { 
        $custom_css .= "
                .hero {
                        background:url({$shelley_hero_bg});
                }
		"; }
		if ($hero_bg_color != '') {
		$custom_css .= "
			.hero { 
			background-color:{$hero_bg_color}; 
			}
		"; }
		
	// Intro Color Settings
		if ($intro_text_color != '') { 
        $custom_css .= "
                .intro p {
						color:{$intro_text_color};
                }
		"; }
		if ($intro_heading_color != '') { 
        $custom_css .= "
                .intro h3 {
						color:{$intro_heading_color};
                }
		"; }
		if ($intro_bg_color != '') { 
        $custom_css .= "
                .intro {
                        background-color: {$intro_bg_color};
                }
		"; }
	// Members Color Settings
		if ($members_text_color != '') { 
        $custom_css .= "
                .members p {
						color:{$members_text_color};
                }
		"; }
		if ($members_title_color != '') { 
        $custom_css .= "
                .members h3, .members h4 {
						color:{$members_title_color};
                }
		"; }
		if ($members_bg_color != '') { 
        $custom_css .= "
                .members {
                        background-color: {$members_bg_color};
                }
		"; }
	// Services Color Settings
		if ($services_text_color != '') { 
        $custom_css .= "
                .services p {
						color:{$services_text_color};
                }
		"; }
		if ($services_heading_color != '') { 
        $custom_css .= "
                .services h3, .services h4 {
						color:{$services_heading__color};
                }
		"; }
		if ($services_title_color != '') { 
        $custom_css .= "
                .service-items h3 {
						color:{$services_title_color};
                }
		"; }
		if ($services_bg_color != '') { 
        $custom_css .= "
                .services {
                        background-color: {$services_bg_color};
                }
		"; }		
	// portfolio Color Settings
		if ($portfolio_text_color != '') { 
        $custom_css .= "
                .portfolio h4 a, .portfolio h4 a:hover {
						color:{$portfolio_text_color};
                }
		"; }
		if ($portfolio_heading_color != '') { 
        $custom_css .= "
                .portfolio h3, .portfolio h4 {
						color:{$portfolio_heading__color};
                }
		"; }
		if ($portfolio_border_color != '') { 
        $custom_css .= "
                .portfolio li {
						background-color:{$portfolio_border_color};
                }
		"; }
		if ($portfolio_bg_color != '') { 
        $custom_css .= "
                .portfolio {
                        background-color: {$portfolio_bg_color};
                }
		"; }	
	// Testimonials Color Settings
		if ($testimonials_text_color != '') { 
        $custom_css .= "
                .testimonials .quote p {
						color:{$testimonials_text_color};
                }
		"; }
		if ($testimonials_heading_color != '') { 
        $custom_css .= "
                .testimonials h3, .testimonials h4 {
						color:{$testimonials_heading__color};
                }
		"; }
		if ($testimonials_name_color != '') { 
        $custom_css .= "
                .testimonials h5 {
						color:{$testimonials_name_color};
                }
		"; }
		if ($testimonials_bg_color != '') { 
        $custom_css .= "
                .testimonials {
                        background-color: {$testimonials_bg_color};
                }
		"; }		
	// Value CountUp Color Settings
		if ($value_value_color != '') { 
        $custom_css .= "
                .counters span {
						color:{$value_value_color};
                }
		"; }
		if ($value_heading_color != '') { 
        $custom_css .= "
                .counters h3, .counters h4 {
						color:{$value_heading_color};
                }
		"; }
		if ($value_text_color != '') { 
        $custom_css .= "
                .counter-items h4 {
						color:{$value_text_color};
                }
		"; }
		if ($value_bg_color != '') { 
        $custom_css .= "
                .counters {
                        background-color: {$value_bg_color};
                }
		"; }	
		
	// CTA Color Settings
		if ($cta_button_color != '') { 
        $custom_css .= "
                .actnow a {
						background-color:{$cta_button_color};
                }
		"; }
		if ($cta_link_color != '') { 
        $custom_css .= "
                .actnow a {
						color:{$cta_link_color};
                }
		"; }
		if ($cta_text_color != '') { 
        $custom_css .= "
                .actnow h3, .actnow h4 {
						color:{$cta_text_color};
                }
		"; }
		if ($cta_bg_color != '') { 
        $custom_css .= "
                .actnow {
                        background-color: {$cta_bg_color};
                }
		"; }	
		
	// Footer Color Settings
		if ($footer_link_color != '') { 
        $custom_css .= "
                .sidebar-wrap a {
						color:{$footer_link_color};
                }
		"; }
		if ($footer_text_color != '') { 
        $custom_css .= "
                .sidebar-wrap, .sidebar-wrap p {
						color:{$footer_text_color};
                }
		"; }
		if ($footer_heading_color != '') { 
        $custom_css .= "
                .sidebar-wrap h4 {
						color:{$footer_heading_color};
                }
		"; }
		if ($footer_bg_color != '') { 
        $custom_css .= "
                .sidebar-wrap {
                        background-color: {$footer_bg_color};
                }
		"; }		

	// Copyright Color Settings
		if ($copyright_link_color != '') { 
        $custom_css .= "
                .site-footer a {
						color:{$copyright_link_color};
                }
		"; }
		if ($copyright_text_color != '') { 
        $custom_css .= "
                .site-footer p {
						color:{$copyright_text_color};
                }
		"; }
		if ($copyright_bg_color != '') { 
        $custom_css .= "
                .site-footer {
                        background-color: {$copyright_bg_color};
                }
		"; }	
	
	// End of Color Options and my energy for the day
    wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'shelley_custom_css' );
