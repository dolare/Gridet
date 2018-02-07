<?php
function weblizar_customizer( $wp_customize ) {
	wp_enqueue_style('customizr', WL_TEMPLATE_DIR_URI .'/css/customizr.css'); 
	wp_enqueue_style('customizr-fa', get_template_directory_uri() .'/iconpicker-control/assets/css/font-awesome.min.css');
	
	$ImageUrl1 = get_template_directory_uri() ."/images/slide-1.jpg";
	$ImageUrl2 = get_template_directory_uri() ."/images/slide-2.jpg";
	$ImageUrl3 = get_template_directory_uri() ."/images/slide-3.jpg";

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
	'selector' => '.site-title',
	'render_callback' => 'blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	'selector' => '.site-description',
	'render_callback' => 'blogdescription',
	) );
	$wp_customize->selective_refresh->add_partial( 'custom_logo', array(
	'selector' => '.site-custom_logo',
	'render_callback' => 'custom_logo',
	) );
	/* Genral section */
		/* Slider Section */
	$wp_customize->add_panel( 'weblizar_theme_option', array(
    'title' => __( 'Guardian Options','guardian' ),
    'priority' => 1, // Mixed with top-level-section hierarchy.
	) );
	
	//changelog//	
	$wp_customize->add_section('changelog_sec',	array('title' =>  __( 'Changelog','guardian' ),
			'panel'=>'weblizar_theme_option',
            'priority' => 1,
    ));
	$wp_customize->add_setting( 'changelog', array(
			'default'    		=> null,
			'sanitize_callback' => 'weblizar_sanitize_text',
	));
	$wp_customize->add_control( new guardian_changelog_Control( $wp_customize, 'changelog', array(
			'label'    => __( 'Guardian', 'guardian' ),
			'section'  => 'changelog_sec',
			'settings' => 'changelog',
			'priority' => 1,
	)));
	//changelog close//	
	
	$wp_customize->add_section(
        'general_sec',
        array(
            'title' => __('Theme General Options','guardian'),
            'description' => __('Here you can customize Your theme\'s general Settings','guardian'),
			'panel'=>'weblizar_theme_option',
			'capability'=>'edit_theme_options',
            'priority' => 35,
        )
    );
	$wl_theme_options = weblizar_get_options();
	//var_dump($wl_theme_options['upload_image_logo']); die;
	$wp_customize->add_setting(
		'guardian_options[_frontpage]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['_frontpage'],
			'sanitize_callback'=>'weblizar_sanitize_checkbox',
			'capability'        => 'edit_theme_options',
		)
	);
	$wp_customize->add_control( 'weblizar_front_page', array(
		'label'        => __( 'Show Front Page', 'guardian' ),
		'type'=>'checkbox',
		'section'    => 'general_sec',
		'settings'   => 'guardian_options[_frontpage]',
	) );
	
	$wp_customize->add_setting(
		'guardian_options[snoweffect]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['snoweffect'],
			'sanitize_callback'=>'weblizar_sanitize_checkbox',
			'capability'        => 'edit_theme_options',
		)
	);
	$wp_customize->add_control( 'snoweffect', array(
		'label'        => __( 'Snow effect on/off', 'guardian' ),
		'type'=>'checkbox',
		'section'    => 'general_sec',
		'settings'   => 'guardian_options[snoweffect]',
	) );
	
	$wp_customize->add_setting(
		'guardian_options[height]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['height'],
			'sanitize_callback'=>'weblizar_sanitize_integer',
			'capability'        => 'edit_theme_options'
		)
	);
	$wp_customize->add_setting(
		'guardian_options[width]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['width'],
			'sanitize_callback'=>'weblizar_sanitize_integer',
			'capability'        => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_control( 'weblizar_logo_height', array(
		'label'        => __( 'Logo Height', 'guardian' ),
		'type'=>'number',
		'section'    => 'general_sec',
		'settings'   => 'guardian_options[height]',
	) );
	$wp_customize->add_control( 'weblizar_logo_width', array(
		'label'        => __( 'Logo Width', 'guardian' ),
		'type'=>'number',
		'section'    => 'general_sec',
		'settings'   => 'guardian_options[width]',
	) );
	
	
		$wp_customize->add_control( 'custom_css', array(
		'label'        => __( 'Custom CSS', 'guardian' ),
		'type'=>'textarea',
		'section'    => 'general_sec',
		'settings'   => 'guardian_options[custom_css]'
	) );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'guardian_upload_image', array(
		'label'        => __( 'Header Image', 'guardian' ),
		'section'    => 'general_sec',
		'settings'   => 'guardian_options[upload__header_image]',
	) ) );
	
	/* Font Family Section */
	$wp_customize->add_section('font_section', array(
	'title' => __('Typography Setting', 'guardian'),
	'panel' => 'weblizar_theme_option',
	'capability' => 'edit_theme_options',
	'priority' => 35
	));
	
	$wp_customize->add_setting(
	'guardian_options[main_heading_font]',
	array(
	'default' => esc_attr($wl_theme_options['main_heading_font']),
	'type' => 'option',
	'sanitize_callback'=>'weblizar_sanitize_text',
	'capability'=>'edit_theme_options'
    ));
	$wp_customize->add_control(new guardian_Font_Control($wp_customize, 'main_heading_font', array(
	'label' => __('Logo Font Style', 'guardian'),
	'section' => 'font_section',
	'settings' => 'guardian_options[main_heading_font]'
	)));
	
	$wp_customize->add_setting(
	'guardian_options[menu_font]',
	array(
	'default' => esc_attr($wl_theme_options['menu_font']),
	'type' => 'option',
	'sanitize_callback'=>'weblizar_sanitize_text',
	'capability'=>'edit_theme_options'
    ));
	$wp_customize->add_control(new guardian_Font_Control($wp_customize, 'menu_font', array(
	'label' => __('Header Menu Font Style', 'guardian'),
	'section' => 'font_section',
	'settings' => 'guardian_options[menu_font]'
	)));
	
	$wp_customize->add_setting(
	'guardian_options[theme_title]',
	array(
	'default' => esc_attr($wl_theme_options['theme_title']),
	'type' => 'option',
	'sanitize_callback'=>'weblizar_sanitize_text',
	'capability'=>'edit_theme_options'
    ));
	$wp_customize->add_control(new guardian_Font_Control($wp_customize, 'theme_title', array(
	'label' => __('Theme Title Font Style', 'guardian'),
	'section' => 'font_section',
	'settings' => 'guardian_options[theme_title]'
	)));
	
	$wp_customize->add_setting(
	'guardian_options[desc_font_all]',
	array(
	'default' => esc_attr($wl_theme_options['desc_font_all']),
	'type' => 'option',
	'sanitize_callback'=>'weblizar_sanitize_text',
	'capability'=>'edit_theme_options'
    ));
	$wp_customize->add_control(new guardian_Font_Control($wp_customize, 'desc_font_all', array(
	'label' => __('Theme Description Font Style', 'guardian'),
	'section' => 'font_section',
	'settings' => 'guardian_options[desc_font_all]'
	)));

	/* Slider Section */
	$wp_customize->add_section(
        'slider_sec',
        array(
            'title' => __('Theme Slider Options','guardian'),
			'panel'=>'weblizar_theme_option',
            'description' => __('Here you can add slider images','guardian'),
			'capability'=>'edit_theme_options',
            'priority' => 35,
			'active_callback' => 'is_front_page',
        )
    );
	$wp_customize->add_setting(
		'guardian_options[slider_image_speed]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slider_image_speed'],
			'sanitize_callback'=>'weblizar_sanitize_text',
			'capability'        => 'edit_theme_options',
		)
	);
	$wp_customize->add_control( 'slider_image_speed', array(
		'label'        => __( 'Slider Speed Option', 'guardian' ),
		'description' => 'Value will be in milliseconds',
		'type'=>'text',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slider_image_speed]',
	) );
	$wp_customize->add_setting(
		'guardian_options[slide_image]',
		array(
			'type'    => 'option',
			'default'=>$ImageUrl1,
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'esc_url_raw',
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_image_1]',
		array(
			'type'    => 'option',
			'default'=>$ImageUrl2,
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'esc_url_raw'
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_image_2]',
		array(
			'type'    => 'option',
			'default'=>$ImageUrl3,
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'esc_url_raw',
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_title]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_title'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[slide_title]', array(
	'selector' => '.guardian_slide_title',
	'render_callback' => 'guardian_options[slide_title]',
	) );
	$wp_customize->add_setting(
		'guardian_options[slide_title_1]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_title_1'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[slide_title_1]', array(
	'selector' => '.guardian_slide_title_1',
	'render_callback' => 'guardian_options[slide_title_1]',
	) );
	$wp_customize->add_setting(
		'guardian_options[slide_title_2]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_title_2'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[slide_title_2]', array(
	'selector' => '.guardian_slide_title_2',
	'render_callback' => 'guardian_options[slide_title_2]',
	) );
	$wp_customize->add_setting(
		'slide_desc',
		array(
			'default'=>$wl_theme_options['slide_desc'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slide_desc', array(
	'selector' => '.guardian_slide_desc',
	'render_callback' => 'slide_desc',
	) );
	$wp_customize->add_setting(
		'slide_desc_1',
		array(
			'default'=>$wl_theme_options['slide_desc_1'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slide_desc_1', array(
	'selector' => '.guardian_slide_desc_1',
	'render_callback' => 'slide_desc_1',
	) );
	$wp_customize->add_setting(
		'slide_desc_2',
		array(
			'default'=>$wl_theme_options['slide_desc_2'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'slide_desc_2', array(
	'selector' => '.guardian_slide_desc_2',
	'render_callback' => 'slide_desc_2',
	) );
	$wp_customize->add_setting(
		'guardian_options[slide_btn_text]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_btn_text'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_btn_text_1]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_btn_text_1'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_btn_text_2]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_btn_text_2'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'weblizar_sanitize_text'
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_btn_link]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_btn_link'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'esc_url_raw'
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_btn_link_1]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_btn_link_1'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'esc_url_raw'
		)
	);
	$wp_customize->add_setting(
		'guardian_options[slide_btn_link_2]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['slide_btn_link_2'],
			'capability' => 'edit_theme_options',
			'sanitize_callback'=>'esc_url_raw'
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'weblizar_slider_image_1', array(
		'label'        => __( 'Slider Image One', 'guardian' ),
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_image]'
	) ) );
	$wp_customize->add_control( 'weblizar_slide_title_1', array(
		'label'        => __( 'Slider title one', 'guardian' ),
		'type'=>'text',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_title]'
	) );
	$wp_customize->add_control(new One_Page_Editor($wp_customize, 'slide_desc', array(
		'label'        => __( 'Slider description one', 'guardian' ),
		'section'    => 'slider_sec',
		'active_callback' => 'show_on_front',
		'include_admin_print_footer' => true,
		'settings'   => 'slide_desc',
	)
	) );
	$wp_customize->add_control( 'Slider button one', array(
		'label'        => __( 'Slider Button Text One', 'guardian' ),
		'type'=>'text',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_btn_text]'
	) );
	
	$wp_customize->add_control( 'weblizar_slide_btnlink_1', array(
		'label'        => __( 'Slider Button Link', 'guardian' ),
		'type'=>'url',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_btn_link]'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'weblizar_slider_image_2', array(
		'label'        => __( 'Slider Image Two ', 'guardian' ),
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_image_1]'
	) ) );
	
	$wp_customize->add_control( 'weblizar_slide_title_2', array(
		'label'        => __( 'Slider Title Two', 'guardian' ),
		'type'=>'text',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_title_1]'
	) );
	$wp_customize->add_control( new One_Page_Editor($wp_customize,'slide_desc_1', array(
		'label'        => __( 'Slider Description Two', 'guardian' ),
		'section'    => 'slider_sec',
		'active_callback' => 'show_on_front',
		'include_admin_print_footer' => true,
		'settings'   => 'slide_desc_1'
	)
	) );
	$wp_customize->add_control( 'weblizar_slide_btn_2', array(
		'label'        => __( 'Slider Button Text Two', 'guardian' ),
		'type'=>'text',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_btn_text_1]'
	) );
	$wp_customize->add_control( 'weblizar_slide_btnlink_2', array(
		'label'        => __( 'Slider Link Two', 'guardian' ),
		'type'=>'url',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_btn_link_1]'
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'weblizar_slider_image_3', array(
		'label'        => __( 'Slider Image Three', 'guardian' ),
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_image_2]'
	) ) );
	$wp_customize->add_control( 'weblizar_slide_title_3', array(
		'label'        => __( 'Slider Title Three', 'guardian' ),
		'type'=>'text',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_title_2]'
	) );
	
	$wp_customize->add_control( new One_Page_Editor($wp_customize,'slide_desc_2', array(
		'label'        => __( 'Slider Description Three', 'guardian' ),
		'section'    => 'slider_sec',
		'active_callback' => 'show_on_front',
		'include_admin_print_footer' => true,
		'settings'   => 'slide_desc_2'
	)
	) );
	$wp_customize->add_control( 'weblizar_slide_btn_3', array(
		'label'        => __( 'Slider Button Text Three', 'guardian' ),
		'type'=>'text',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_btn_text_2]'
	) );
	$wp_customize->add_control( 'weblizar_slide_btnlink_3', array(
		'label'        => __( 'Slider Button Link Three', 'guardian' ),
		'type'=>'url',
		'section'    => 'slider_sec',
		'settings'   => 'guardian_options[slide_btn_link_2]'
	) );

	/* Blog Option */
	$wp_customize->add_section('blog_section',array(
	'title'=>__('Home Blog Options','guardian'),
	'panel'=>'weblizar_theme_option',
	'capability'=>'edit_theme_options',
    'priority' => 37
	));

	$wp_customize->add_setting(
		'blog_home',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['blog_home'],
			'sanitize_callback'=>'weblizar_sanitize_checkbox',
			'capability' => 'edit_theme_options'
		)
	);
	$wp_customize->add_control( 'guardian_show_blog', array(
		'label'        => __( 'Enable Blogs on Home', 'guardian' ),
		'type'=>'checkbox',
		'section'    => 'blog_section',
		'settings'   => 'blog_home'
	) );
	$wp_customize->add_setting(
	'guardian_options[blog_title]',
		array(
		'default'=>esc_attr($wl_theme_options['blog_title']),
		'type'=>'option',
		'sanitize_callback'=>'weblizar_sanitize_text',
		'capability'=>'edit_theme_options'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[blog_title]', array(
	'selector' => '.guardian_blog_title',
	'render_callback' => 'guardian_options[blog_title]',
	) );
	$wp_customize->add_control( 'weblizar_blog_title', array(
		'label'        => __( 'Home Blog Title', 'guardian' ),
		'type'=>'text',
		'section'    => 'blog_section',
		'settings'   => 'guardian_options[blog_title]'
	) );

	/* Service Section */
	$wp_customize->add_section('service_section',array(
	'title'=>__("Service Options","guardian"),
	'panel'=>'weblizar_theme_option',
	'capability'=>'edit_theme_options',
    'priority' => 35,
	'active_callback' => 'is_front_page',
	));

		$wp_customize->add_setting(
		'services_home',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['services_home'],
			'sanitize_callback'=>'weblizar_sanitize_checkbox',
			'capability' => 'edit_theme_options'
		)
	);
		$wp_customize->add_control( 'guardian_show_service', array(
		'label'        => __( 'Enable Service on Home', 'guardian' ),
		'type'=>'checkbox',
		'section'    => 'service_section',
		'settings'   => 'services_home'
	) );

	$wp_customize->add_setting(
	'guardian_options[home_service_title]',
		array(
		'default'=>esc_attr($wl_theme_options['home_service_title']),
		'type'=>'option',
		'capability'=>'edit_theme_options',
		'sanitize_callback'=>'weblizar_sanitize_text',
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[home_service_title]', array(
	'selector' => '.guardian_home_service_title',
	'render_callback' => 'guardian_options[home_service_title]',
	) );
	$wp_customize->add_setting(
	'home_service_description',
		array(
		'default'=>esc_attr($wl_theme_options['home_service_description']),
		'capability'=>'edit_theme_options',
		'sanitize_callback'=>'weblizar_sanitize_text',
		)
	);
	$wp_customize->selective_refresh->add_partial( 'home_service_description', array(
	'selector' => '.guardian_home_service_description',
	'render_callback' => 'home_service_description',
	) );
	$wp_customize->add_control( 'weblizar_service_title', array(
		'label'        => __( 'Service Title', 'guardian' ),
		'type'	=>'text',
		'section'    => 'service_section',
		'settings'   => 'guardian_options[home_service_title]'
	) );
	$wp_customize->add_control(new One_Page_Editor($wp_customize, 'home_service_description', array(
		'label'        => __( 'Service Description', 'guardian' ),
		'section'    => 'service_section',
		'active_callback' => 'show_on_front',
		'include_admin_print_footer' => true,
		'settings'   => 'home_service_description'
	)
	) );
	for($i=1;$i<=4;$i++){
	$wp_customize->add_setting(
	'guardian_options[service_'.$i.'_icons]',
		array(
		'default'=>esc_attr($wl_theme_options['service_'.$i.'_icons']),
		'type'=>'option',
		'capability'=>'edit_theme_options',
		'sanitize_callback'=>'weblizar_sanitize_text',
			)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[service_'.$i.'_icons]', array(
	'selector' => '.guardian_service_'.$i.'_icons',
	'render_callback' => 'guardian_options[service_'.$i.'_icons]',
	) );
	$wp_customize->selective_refresh->add_partial( 'guardian_options[blog_title]', array(
	'selector' => '.guardian_blog_title',
	'render_callback' => 'guardian_options[blog_title]',
	) );
	$wp_customize->add_setting(
	'guardian_options[service_'.$i.'_title]',
		array(
		'default'=>esc_attr($wl_theme_options['service_'.$i.'_title']),
		'type'=>'option',
		'capabilit'=>'edit_theme_options',
		'sanitize_callback'=>'weblizar_sanitize_text',
			)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[service_'.$i.'_title]', array(
	'selector' => '.guardian_service_'.$i.'_title',
	'render_callback' => 'guardian_options[service_'.$i.'_title]',
	) );
	$wp_customize->add_setting(
	'service_'.$i.'_text',
		array(
		'default'=>esc_attr($wl_theme_options['service_'.$i.'_text']),
		'sanitize_callback'=>'weblizar_sanitize_text',
		'capabilit'=>'edit_theme_options',
			)
	);
	$wp_customize->selective_refresh->add_partial( 'service_'.$i.'_text', array(
	'selector' => '.guardian_service_'.$i.'_text',
	'render_callback' => 'service_'.$i.'_text',
	) );
	$wp_customize->add_setting(
	'guardian_options[service_'.$i.'_link]',
		array(
		'type'    => 'option',
		'default'=>$wl_theme_options['service_'.$i.'_link'],
		'capability' => 'edit_theme_options',
		'sanitize_callback'=>'esc_url_raw'
		)
	);
	}
	for($i=1;$i<=4;$i++){
	$j = array('', ' One', ' Two', ' Three');
	$wp_customize->add_control( new weblizar_Customize_Misc_Control($wp_customize, 'guardian_options1-line', array(
            'section'  => 'service_section',
            'type'     => 'line'
        )
    ));
	$wp_customize->add_control( new Guardian_Customizer_Icon_Picker_Control($wp_customize,'weblizar_service_icon'.$i, array(
		'label'        => __( 'Service Icon', 'guardian' ) .$i,
		'type'=>'text',
		'section'  => 'service_section',
		'settings'   => 'guardian_options[service_'.$i.'_icons]',
	)
    ) );
	$wp_customize->add_control( 'weblizar_service_title'.$i, array(
		'label'        => __( 'Service Icon', 'guardian' ) .$i,
		'type'=>'text',
		'section'    => 'service_section',
		'settings'   => 'guardian_options[service_'.$i.'_title]'
	) );
	$wp_customize->add_control(new One_Page_Editor($wp_customize, 'service_'.$i.'_text', array(
		'label'        => __( 'Service Text', 'guardian' ) .$i,
		'section'    => 'service_section',
		'active_callback' => 'show_on_front',
		'include_admin_print_footer' => true,
		'settings'   => 'service_'.$i.'_text'
	)
	) );
	$wp_customize->add_control( 'weblizar_service_link_'.$i, array(
		'label'        => __( 'Service Icon', 'guardian' ) .$i,
		'type'=>	'url',
		'section'    => 'service_section',
		'settings'   => 'guardian_options[service_'.$i.'_link]',
	) );
	}

	/* Social options */
	$wp_customize->add_section('social_section',array(
	'title'=>__("Social Options","guardian"),
	'panel'=>'weblizar_theme_option',
	'capabilit'=>'edit_theme_options',
    'priority' => 41
	));
	$wp_customize->add_setting(
	'guardian_options[header_section_social_media_enbled]',
		array(
		'default'=>esc_attr($wl_theme_options['header_section_social_media_enbled']),
		'type'=>'option',
		'sanitize_callback'=>'weblizar_sanitize_checkbox',
		'capabilit'=>'edit_theme_options'
		)
	);
	$wp_customize->add_control( 'header_section_social_media_enbled', array(
		'label'        => __( 'Enable Social Media Icons in Header Section', 'guardian' ),
		'type'=>'checkbox',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[header_section_social_media_enbled]'
	) );
	$wp_customize->add_setting(
	'guardian_options[footer_section_social_media_enbled]',
		array(
		'default'=>esc_attr($wl_theme_options['footer_section_social_media_enbled']),
		'type'=>'option',
		'sanitize_callback'=>'weblizar_sanitize_checkbox',
		'capabilit'=>'edit_theme_options'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[footer_section_social_media_enbled]', array(
	'selector' => '.guardian_footer_section_social_media',
	'render_callback' => 'guardian_options[footer_section_social_media_enbled]',
	) );
	$wp_customize->add_control( 'footer_section_social_media_enbled', array(
		'label'        => __( 'Enable Social Media Icons in Footer', 'guardian' ),
		'type'=>'checkbox',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[footer_section_social_media_enbled]'
	) );
	$wp_customize->add_setting(
	'guardian_options[facebook_link]',
		array(
		'default'=>esc_attr($wl_theme_options['facebook_link']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url_raw',
		'capabilit'=>'edit_theme_options'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[facebook_link]', array(
	'selector' => '.guardian_facebook_link',
	'render_callback' => 'guardian_options[facebook_link]',
	) );
	$wp_customize->add_control( 'facebook_link', array(
		'label'        => __( 'Facebook URL', 'guardian' ),
		'type'=>'url',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[facebook_link]'
	) );
	$wp_customize->add_setting(
	'guardian_options[twitter_link]',
		array(
		'default'=>esc_attr($wl_theme_options['twitter_link']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url_raw',
		'capabilit'=>'edit_theme_options'
		)
	);
	$wp_customize->add_control( 'twitter_link', array(
		'label'        =>  __('Twitter URL', 'guardian' ),
		'type'=>'url',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[twitter_link]'
	) );
	$wp_customize->add_setting(
	'guardian_options[linkedin_link]',
		array(
		'default'=>esc_attr($wl_theme_options['linkedin_link']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url_raw',
		'capabilit'=>'edit_theme_options'
		)
	);
		$wp_customize->add_control( 'linkedin_link', array(
		'label'        => __( 'LinkedIn URL', 'guardian' ),
		'type'=>'url',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[linkedin_link]'
	) );
	$wp_customize->add_setting(
	'guardian_options[google_plus]',
		array(
		'default'=>esc_attr($wl_theme_options['google_plus']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url_raw',
		'capabilit'=>'edit_theme_options'
		)
	);
		$wp_customize->add_control( 'google_plus', array(
		'label'        => __( 'Goole+ URL', 'guardian' ),
		'type'=>'url',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[google_plus]'
	) );
	$wp_customize->add_setting(
	'guardian_options[flicker_link]',
		array(
		'default'=>esc_attr($wl_theme_options['flicker_link']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url_raw',
		'capabilit'=>'edit_theme_options'
		)
	);
		$wp_customize->add_control( 'flicker_link', array(
		'label'        => __( 'Flicker URL', 'guardian' ),
		'type'=>'url',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[flicker_link]'
	) );
	$wp_customize->add_setting(
	'guardian_options[rss_link]',
		array(
		'default'=>esc_attr($wl_theme_options['rss_link']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url_raw',
		'capabilit'=>'edit_theme_options'
		)
	);
		$wp_customize->add_control( 'rss_link', array(
		'label'        => __( 'RSS URL', 'guardian' ),
		'type'=>'url',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[rss_link]'
	) );
	$wp_customize->add_setting(
	'guardian_options[youtube_link]',
		array(
		'default'=>esc_attr($wl_theme_options['youtube_link']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url_raw',
		'capabilit'=>'edit_theme_options'
		)
	);
		$wp_customize->add_control( 'youtube_link', array(
		'label'        => __( 'Youtube URL', 'guardian' ),
		'type'=>'url',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[youtube_link]'
	) );
	
	$wp_customize->add_setting(
	'guardian_options[contact_email]',
		array(
		'default'=>esc_attr($wl_theme_options['contact_email']),
		'type'=>'option',
		'capabilit'=>'edit_theme_options',
		'sanitize_callback'=>'is_email',
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[contact_email]', array(
	'selector' => '.guardian_contact_email',
	'render_callback' => 'guardian_options[contact_email]',
	) );
		$wp_customize->add_control( 'contact_email', array(
		'label'        => __( 'Email-ID', 'guardian' ),
		'type'=>'email',
		'section'    => 'social_section',
		'settings'   => 'guardian_options[contact_email]'
	) );
	$wp_customize->add_setting(
	'guardian_options[contact_phone_no]',
		array(
		'default'=>esc_attr($wl_theme_options['contact_phone_no']),
		'type'=>'option',
		'capabilit'=>'edit_theme_options',
		'sanitize_callback'=>'weblizar_sanitize_text',
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[contact_phone_no]', array(
	'selector' => '.guardian_contact_phone',
	'render_callback' => 'guardian_options[contact_phone_no]',
	) );
		$wp_customize->add_control( 'contact_phone_no', array(
		'label'        => __( 'Phone Number', 'guardian' ),
		'type'=>'text',
		'section'    => 'social_section',
		'sanitize_callback'=>'weblizar_sanitize_text',
		'settings'   => 'guardian_options[contact_phone_no]'
	) );

	/* Footer Options */
	$wp_customize->add_section('footer_section',array(
	'title'=>__("Footer Options","guardian"),
	'panel'=>'weblizar_theme_option',
	'capabilit'=>'edit_theme_options',
    'priority' => 40
	));
	$wp_customize->add_setting(
	'guardian_options[footer_customizations]',
		array(
		'default'=>esc_attr($wl_theme_options['footer_customizations']),
		'type'=>'option',
		'sanitize_callback'=>'weblizar_sanitize_text',
		'capabilit'=>'edit_theme_options'
		)
	);
	$wp_customize->selective_refresh->add_partial( 'guardian_options[footer_customizations]', array(
	'selector' => '.guardian_footer_customizations',
	'render_callback' => 'guardian_options[footer_customizations]',
	) );
	$wp_customize->add_control( 'weblizar_footer_customizations', array(
		'label'        => __( 'Footer Customization Text', 'guardian' ),
		'type'=>'text',
		'section'    => 'footer_section',
		'settings'   => 'guardian_options[footer_customizations]'
	) );
	
	$wp_customize->add_setting(
	'guardian_options[developed_by_text]',
		array(
		'default'=>esc_attr($wl_theme_options['developed_by_text']),
		'type'=>'option',
		'sanitize_callback'=>'weblizar_sanitize_text',
		'capabilit'=>'edit_theme_options'
		)
	);
	$wp_customize->add_control( 'weblizar_developed_by_text', array(
		'label'        => __( 'Footer Developed By Text', 'guardian' ),
		'type'=>'text',
		'section'    => 'footer_section',
		'settings'   => 'guardian_options[developed_by_text]'
	) );
	$wp_customize->add_setting(
	'guardian_options[developed_by_weblizar_text]',
		array(
		'default'=>esc_attr($wl_theme_options['developed_by_weblizar_text']),
		'type'=>'option',
		'sanitize_callback'=>'weblizar_sanitize_text',
		'capabilit'=>'edit_theme_options'
		)
	);
	$wp_customize->add_control( 'weblizar_developed_by_weblizar_text', array(
		'label'        => __( 'Footer Company Text', 'guardian' ),
		'type'=>'text',
		'section'    => 'footer_section',
		'settings'   => 'guardian_options[developed_by_weblizar_text]'
	) );
	$wp_customize->add_setting(
	'guardian_options[developed_by_link]',
		array(
		'default'=>esc_attr($wl_theme_options['developed_by_link']),
		'type'=>'option',
		'capabilit'=>'edit_theme_options',
		'sanitize_callback'=>'esc_url_raw'
		)
	);
	$wp_customize->add_control( 'weblizar_developed_by_link', array(
		'label'        => __( 'Footer Customization Link', 'guardian' ),
		'type'=>'url',
		'section'    => 'footer_section',
		'settings'   => 'guardian_options[developed_by_link]'
	) );
	$wp_customize->add_section( 'guardian_options_more' , array(
				'title'      	=> __( 'Upgrade to Guardian Premium', 'guardian' ),
				'priority'   	=> 999,
				'panel'=>'weblizar_theme_option',
			) );

			$wp_customize->add_setting( 'guardian_options_more', array(
				'default'    		=> null,
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->add_control( new More_guardian_Control( $wp_customize, 'guardian_options_more', array(
				'label'    => __( 'Guardian Premium', 'guardian' ),
				'section'  => 'guardian_options_more',
				'settings' => 'guardian_options_more',
				'priority' => 1,
			) ) );
			
	// excerpt option 
    $wp_customize->add_section('excerpt_option',array(
    'title'=>__("Excerpt Option",'guardian'),
    'panel'=>'weblizar_theme_option',
    'capability'=>'edit_theme_options',
    'priority' => 37,
    ));
    
    $wp_customize->add_setting( 'guardian_options[excerpt_blog]', array(
        'default'=>_($wl_theme_options['excerpt_blog']),
        'type'=>'option',
        'sanitize_callback'=>'weblizar_sanitize_integer',
        'capability'=>'edit_theme_options'
    ) );
        $wp_customize->add_control( 'excerpt_blog', array(
        'label'        => __( 'Excerpt length blog section', 'guardian' ),
        'type'=>'number',
        'section'    => 'excerpt_option',
		'description' => esc_html__('Excerpt length only for home blog section.', 'guardian'),
		'settings'   => 'guardian_options[excerpt_blog]'
    ) );
        	// home layout //
	$wp_customize->add_section('Home_Page_Layout',array(
    'title'=>__("Home Page Layout Option",'guardian'),
    'panel'=>'weblizar_theme_option',
    'capability'=>'edit_theme_options',
    'priority' => 50,
    ));
	$wp_customize->add_setting('home_reorder',
            array(
				'type'=>'theme_mod',
                'sanitize_callback' => 'sanitize_json_string',
				'capability'        => 'edit_theme_options',
            )
        );
        $wp_customize->add_control(new guardian_Custom_sortable_Control($wp_customize,'home_reorder', array(
			'label'=>__( 'Front Page Layout Option', 'guardian' ),
            'section' => 'Home_Page_Layout',
            'type'    => 'home-sortable',
            'choices' => array(
                'services'      => __('Home Services', 'guardian'),
                'blog'        => __('Home Blog', 'guardian'),
            ),
			'settings'=>'home_reorder',
        )));
	// home layout close //
}

add_action( 'customize_register', 'weblizar_customizer' );
function weblizar_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
function weblizar_sanitize_checkbox( $input ) {
    if ( $input == 'on' ) {
        return 'on';
    } else {
        return '';
    }
}
function weblizar_sanitize_integer( $input ) {
    return (int)($input);
}
function sanitize_json_string($json){
    $sanitized_value = array();
    foreach (json_decode($json,true) as $value) {
        $sanitized_value[] = esc_attr($value);
    }
    return json_encode($sanitized_value);
}
/* Custom Control Class */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'weblizar_Customize_Misc_Control' ) ) :
class weblizar_Customize_Misc_Control extends WP_Customize_Control {
    public $settings = 'blogname';
    public $description = '';
    public function render_content() {
        switch ( $this->type ) {
            default:
           
            case 'heading':
                echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
                break;
 
            case 'line' :
                echo '<hr />';
                break;
			
        }
    }
}
endif;


if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'More_guardian_Control' ) ) :
class More_guardian_Control extends WP_Customize_Control {

	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">
			<div class="col-md-2 col-sm-6 upsell-btn">					
					<a style="margin-bottom:20px;margin-left:20px;" href="https://weblizar.com/themes/guardian-premium-theme/" target="blank" class="btn btn-success btn"><?php _e('Upgrade to Guardian Premium','guardian'); ?> </a>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="enigma_img_responsive " src="<?php echo WL_TEMPLATE_DIR_URI .'/images/GP.png'?>">
			</div>			
			<div class="col-md-3 col-sm-6">
				<h3 style="margin-top:10px;margin-left: 20px;text-decoration:underline;color:#333;"><?php echo _e( 'Guardian Premium - Features','guardian'); ?></h3>
					<ul style="padding-top:20px">
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Responsive Design','guardian'); ?> </li>						
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('More than 15+ Templates','guardian'); ?> </li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('12 types Themes Colors Scheme','guardian'); ?> </li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('6 Types of Portfolio Templates','guardian'); ?></li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Patterns Background','guardian'); ?></li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Full Width & Boxed Layout','guardian'); ?>   </li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Touch Slider','guardian'); ?>   </li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Ultimate Portfolio layout with Isotope effect','guardian'); ?>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Image Background','guardian'); ?>  </li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Rich Short codes','guardian'); ?>  </li>	
						
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Coming Soon Mode','guardian'); ?>  </li>
						<li class="upsell-enigma"> <div class="dashicons dashicons-yes"></div> <?php _e('Extreme Gallery Design Layout','guardian'); ?>  </li>
					
					</ul>
			</div>
			<div class="col-md-2 col-sm-6 upsell-btn">					
					<a style="margin-bottom:20px;margin-left:20px;" href="https://weblizar.com/themes/guardian-premium-theme/" target="blank" class="btn btn-success btn"><?php _e('Upgrade to Guardian Premium','guardian'); ?> </a>
			</div>
			<span class="customize-control-title"><?php _e( 'Enjoying Guardian?', 'guardian' ); ?></span>
			<p>
				<?php
					printf( __( 'If you Like our Products , Please do Rate us on %sWordPress.org%s?  We\'d really appreciate it!', 'guardian' ), '<a target="" href="https://wordpress.org/support/view/theme-reviews/guardian?filter=5">', '</a>' );
				?>
			</p>
		</label>
		<?php
	}
}
endif;


/* class for font-family */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'guardian_Font_Control' ) ) :
class guardian_Font_Control extends WP_Customize_Control 
{  
 public function render_content() 
 {?>
   <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
   <select <?php $this->link(); ?> >
    <option  value="Abril Fatface"<?php if($this->value()== 'Abril Fatface') echo 'selected="selected"';?>><?php _e('Abril Fatface','guardian'); ?></option>
	<option  value="Advent Pro"<?php if($this->value()== 'Advent Pro')  echo 'selected="selected"';?>><?php _e('Advent Pro','guardian'); ?></option>
	<option  value="Aldrich"<?php if($this->value()== 'Aldrich') echo 'selected="selected"';?>><?php _e('Aldrich','guardian'); ?></option>
	<option  value="Alex Brush"<?php if($this->value()== 'Alex Brush') echo 'selected="selected"';?>><?php _e('Alex Brush','guardian'); ?></option>
	<option  value="Allura"<?php if($this->value()== 'Allura') echo 'selected="selected"';?>><?php _e('Allura','guardian'); ?></option>
	<option  value="Amatic SC"<?php if($this->value()== 'Amatic SC') echo 'selected="selected"';?>><?php _e('Amatic SC','guardian'); ?></option>
	<option  value="arial"<?php if($this->value()== 'arial') echo 'selected="selected"';?>><?php _e('Arial','guardian'); ?></option>
	<option  value="Astloch"<?php if($this->value()== 'Astloch') echo 'selected="selected"';?>><?php _e('Astloch','guardian'); ?></option>
	<option  value="arno pro bold italic"<?php if($this->value()== 'arno pro bold italic') echo 'selected="selected"';?>><?php _e('Arno pro bold italic','guardian'); ?></option>
	<option  value="Bad Script"<?php if($this->value()== 'Bad Script') echo 'selected="selected"';?>><?php _e('Bad Script','guardian'); ?></option>
	<option  value="Bilbo"<?php if($this->value()== 'Bilbo') echo 'selected="selected"';?>><?php _e('Bilbo','guardian'); ?></option>
	<option  value="Calligraffitti"<?php if($this->value()== 'Calligraffitti') echo 'selected="selected"';?>><?php _e('Calligraffitti','guardian'); ?></option>
	<option  value="Candal"<?php if($this->value()== 'Candal') echo 'selected="selected"';?>><?php _e('Candal','guardian'); ?></option>
	<option  value="Cedarville Cursive"<?php if($this->value()== 'Cedarville Cursive') echo 'selected="selected"';?>><?php _e('Cedarville Cursive','guardian'); ?></option>
	<option  value="Clicker Script"<?php if($this->value()== 'Clicker Script') echo 'selected="selected"';?>><?php _e('Clicker Script','guardian'); ?></option>
	<option  value="Dancing Script"<?php if($this->value()== 'Dancing Script') echo 'selected="selected"';?>><?php _e('Dancing Script','guardian'); ?></option>
	<option  value="Dawning of a New Day"<?php if($this->value()== 'Dawning of a New Day') echo 'selected="selected"';?>><?php _e('Dawning of a New Day','guardian'); ?></option>
	<option  value="Fredericka the Great"<?php if($this->value()== 'Fredericka the Great') echo 'selected="selected"';?>><?php _e('Fredericka the Great','guardian'); ?></option>
	<option  value="Felipa"<?php if($this->value()== 'Felipa') echo 'selected="selected"';?>><?php _e('Felipa','guardian'); ?></option>
	<option  value="Give You Glory"<?php if($this->value()== 'Give You Glory') echo 'selected="selected"';?>><?php _e('Give You Glory','guardian'); ?></option>
	<option  value="Great vibes"<?php if($this->value()== 'Great vibes') echo 'selected="selected"';?>><?php _e('Great vibes','guardian'); ?></option>
	<option  value="Homemade Apple"<?php if($this->value()== 'Homemade Apple') echo 'selected="selected"';?>><?php _e('Homemade Apple','guardian'); ?></option>
	<option  value="Indie Flower"<?php if($this->value()== 'Indie Flower') echo 'selected="selected"';?>><?php _e('Indie Flower','guardian'); ?></option>
	<option  value="Italianno"<?php if($this->value()== 'Italianno') echo 'selected="selected"';?>><?php _e('Italianno','guardian'); ?></option>
	<option  value="Jim Nightshade"<?php if($this->value()== 'Jim Nightshade') echo 'selected="selected"';?>><?php _e('Jim Nightshade','guardian'); ?></option>
	<option  value="Kaushan Script"<?php if($this->value()== 'Kaushan Script') echo 'selected="selected"';?>><?php _e('Kaushan Script','guardian'); ?></option>
	<option  value="Kristi"<?php if($this->value()== 'Kristi') echo 'selected="selected"';?>><?php _e('Kristi','guardian'); ?></option>
	<option  value="La Belle Aurore"<?php if($this->value()== 'La Belle Aurore') echo 'selected="selected"';?>><?php _e('La Belle Aurore','guardian'); ?></option>
	<option  value="Meddon"<?php if($this->value()== 'Meddon') echo 'selected="selected"';?>><?php _e('Meddon','guardian'); ?></option>
	<option  value="Montez"<?php if($this->value()== 'Montez') echo 'selected="selected"';?>><?php _e('Montez','guardian'); ?></option>
	<option  value="Megrim"<?php if($this->value()== 'Megrim') echo 'selected="selected"';?>><?php _e('Megrim','guardian'); ?></option>
	<option  value="Mr Bedfort"<?php if($this->value()== 'Mr Bedfort') echo 'selected="selected"';?>><?php _e('Mr Bedfort','guardian'); ?></option>
	<option  value="Neucha"<?php if($this->value()== 'Neucha') echo 'selected="selected"';?>><?php _e('Neucha','guardian'); ?></option>
	<option  value="Nothing You Could Do"<?php if($this->value()== 'Nothing You Could Do') echo 'selected="selected"';?>><?php _e('Nothing You Could Do','guardian'); ?></option>
	<option  value="Open Sans"<?php if($this->value()== 'Open Sans') echo 'selected="selected"';?>><?php _e('Open Sans','guardian'); ?></option>
	<option  value="Over the Rainbow"<?php if($this->value()== 'Over the Rainbow') echo 'selected="selected"';?>><?php _e('Over the Rainbow','guardian'); ?></option>
	<option  value="Pinyon Script"<?php if($this->value()== 'Pinyon Script') echo 'selected="selected"';?>><?php _e('Pinyon Script','guardian'); ?></option>
	<option  value="Princess Sofia"<?php if($this->value()== 'Princess Sofia') echo 'selected="selected"';?>><?php _e('Princess Sofia','guardian'); ?></option>
	<option  value="Reenie Beanie"<?php if($this->value()== 'Reenie Beanie') echo 'selected="selected"';?>><?php _e('Reenie Beanie','guardian'); ?></option>
	<option  value="Rochester"<?php if($this->value()== 'Rochester') echo 'selected="selected"';?>><?php _e('Rochester','guardian'); ?></option>
	<option  value="Rock Salt"<?php if($this->value()== 'Rock Salt') echo 'selected="selected"';?>><?php _e('Rock Salt','guardian'); ?></option>
	<option  value="Ruthie"<?php if($this->value()== 'Ruthie') echo 'selected="selected"';?>><?php _e('Ruthie','guardian'); ?></option>
	<option  value="Sacramento"<?php if($this->value()== 'Sacramento') echo 'selected="selected"';?>><?php _e('Sacramento','guardian'); ?></option>
	<option  value="Sans Serif"<?php if($this->value()== 'Sans Serif') echo 'selected="selected"';?>><?php _e('Sans Serif','guardian'); ?></option>
	<option  value="Seaweed Script"<?php if($this->value()== 'Seaweed Script') echo 'selected="selected"';?>><?php _e('Seaweed Script','guardian'); ?></option>
	<option  value="Shadows Into Light"<?php if($this->value()== 'Shadows Into Light') echo 'selected="selected"';?>><?php _e('Shadows Into Light','guardian'); ?></option>
	<option  value="Smythe"<?php if($this->value()== 'Smythe') echo 'selected="selected"';?>><?php _e('Smythe','guardian'); ?></option>
	<option  value="Stalemate"<?php if($this->value()== 'Stalemate') echo 'selected="selected"';?>><?php _e('Stalemate','guardian'); ?></option>
	<option  value="Tahoma"<?php if($this->value()== 'Tahoma') echo 'selected="selected"';?>><?php _e('Tahoma','guardian'); ?></option>
	<option  value="Tangerine"<?php if($this->value()== 'Tangerine') echo 'selected="selected"';?>><?php _e('Tangerine','guardian'); ?></option>
	<option  value="Trade Winds"<?php if($this->value()== 'Trade Winds') echo 'selected="selected"';?>><?php _e('Trade Winds','guardian'); ?></option>
	<option  value="UnifrakturMaguntia"<?php if($this->value()== 'UnifrakturMaguntia') echo 'selected="selected"';?>><?php _e('UnifrakturMaguntia','guardian'); ?></option>
	<option  value="Verdana"<?php if($this->value()== 'Verdana') echo 'selected="selected"';?>><?php _e('Verdana','guardian'); ?></option>
	<option  value="Waiting for the Sunrise"<?php if($this->value()== 'Waiting for the Sunrise') echo 'selected="selected"';?>><?php _e('Waiting for the Sunrise','guardian'); ?></option>
	<option  value="Warnes"<?php if($this->value()== 'Warnes') echo 'selected="selected"';?>><?php _e('Warnes','guardian'); ?></option>
	<option  value="Yesteryear"<?php if($this->value()== 'Yesteryear') echo 'selected="selected"';?>><?php _e('Yesteryear','guardian'); ?></option>
	<option  value="Zeyada"<?php if($this->value()== 'Zeyada') echo 'selected="selected"';?>><?php _e('Zeyada','guardian'); ?></option>
    </select>		
		
  <?php
 }
}
endif;

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Guardian_Customizer_Icon_Picker_Control' ) ) :
	class Guardian_Customizer_Icon_Picker_Control extends WP_Customize_Control {
		public function enqueue() {
			wp_enqueue_script( 'fontawesome-iconpicker', get_stylesheet_directory_uri() . '/iconpicker-control/assets/js/fontawesome-iconpicker.min.js', array( 'jquery' ), '1.0.0', true );
			wp_enqueue_script( 'iconpicker-control', get_stylesheet_directory_uri() . '/iconpicker-control/assets/js/iconpicker-control.js', array( 'jquery' ), '1.0.0', true );
			wp_enqueue_style( 'fontawesome-iconpicker', get_stylesheet_directory_uri() . '/iconpicker-control/assets/css/fontawesome-iconpicker.min.css' );
		}
		
		
		public function render_content() {
			?>
			<label>
				<span class="customize-control-title">
					<?php echo esc_html( $this->label ); ?>
				</span>
				<div class="input-group icp-container">
					<input data-placement="bottomRight" class="icp icp-auto" <?php $this->link(); ?> value="<?php echo esc_attr( $this->value() ); ?>" type="text">
					<span class="input-group-addon"></span>
				</div>
			</label>
			<?php
		}
	}
endif;


if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'One_Page_Editor' ) ) :
/* Class to create a custom tags control */
class One_Page_Editor extends WP_Customize_Control {	
	private $include_admin_print_footer = false;
	private $teeny = false;
	public $type = 'text-editor';
	public function __construct( $manager, $id, $args = array() ) {
		parent::__construct( $manager, $id, $args );
		if ( ! empty( $args['include_admin_print_footer'] ) ) {
			$this->include_admin_print_footer = $args['include_admin_print_footer'];
		}
		if ( ! empty( $args['teeny'] ) ) {
			$this->teeny = $args['teeny'];
		}
	}
	/* Enqueue scripts */
	public function enqueue() {
		wp_enqueue_script( 'one_lite_text_editor', get_template_directory_uri() . '/inc/customizer-page-editor/js/one-lite-text-editor.js', array( 'jquery' ), false, true );
	}
	/* Render the content on the theme customizer page */
	public function render_content() {
		?>

		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>">
		<?php
		$settings = array(
			'textarea_name' => $this->id,
			'teeny' => $this->teeny,
		);
		$control_content = $this->value();
		wp_editor( $control_content, $this->id, $settings );

		if ( $this->include_admin_print_footer === true ) {
			do_action( 'admin_print_footer_scripts' );
		}
	}
}
endif;

function show_on_front() {
	if(is_front_page())
	{
		return is_front_page() && 'posts' !== get_option( 'show_on_front' );
	}
	elseif(is_home()) 
	{
		return is_home();
	}
}


if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'guardian_Custom_sortable_Control' ) ) :
class guardian_Custom_sortable_Control extends WP_Customize_Control
{
    public $type = 'home-sortable';
    /*Enqueue resources for the control*/
    public function enqueue()
    {

        wp_enqueue_style('customizer-repeater-admin-stylesheet', get_template_directory_uri() . '/assets/customizer_js_css/css/guardian-admin-style.css', time());

        wp_enqueue_script('customizer-repeater-script', get_template_directory_uri() . '/assets/customizer_js_css/js/guardian-customizer_repeater.js', array('jquery', 'jquery-ui-draggable'), time(), true);

    }
    public function render_content()
    {
        if (empty($this->choices)) {
            return;
        }
        $values = json_decode($this->value());
        $name         = $this->id;
        ?>

		<span class="customize-control-title">
			<?php echo esc_attr($this->label); ?>
		</span>

		<?php if (!empty($this->description)): ?>
			<span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
		<?php endif;?>

		<div class="customizer-repeater-general-control-repeater customizer-repeater-general-control-droppable">
			<?php 
			if(!empty($values)){ 
				foreach ($values as $value) {?>
					<div class="customizer-repeater-general-control-repeater-container customizer-repeater-draggable ui-sortable-handle">
					<div class="customizer-repeater-customize-control-title">
						<?php echo $this->choices[$value]; ?>
					</div>
					<input type="hidden" class="section-id" value="<?php echo $value; ?>">
					</div>	
				<?php }?>
				
			<?php }else{
			foreach ($this->choices as $value => $label): ?>
					<div class="customizer-repeater-general-control-repeater-container customizer-repeater-draggable ui-sortable-handle">
					<div class="customizer-repeater-customize-control-title">
						<?php echo $label; ?>
					</div>
					<input type="hidden" class="section-id" value="<?php echo $value; ?>">
					</div>

				<?php endforeach;
			}
        		if (!empty($value)) {?>
					<input type="hidden"
					       id="customizer-repeater-<?php echo $this->id; ?>-colector" <?php esc_url($this->link());?>
					       class="customizer-repeater-colector"
					       value="<?php echo esc_textarea(json_encode($value)); ?>"/>
					<?php
				} else {?>
					<input type="hidden"
					       id="customizer-repeater-<?php echo $this->id; ?>-colector" <?php esc_url($this->link());?>
					       class="customizer-repeater-colector"/>
					<?php
				}?>
		</div>
		<?php
}
}
endif;

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'guardian_changelog_Control' ) ) :
class guardian_changelog_Control extends WP_Customize_Control {

	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() { ?>
		<label style="overflow: hidden; zoom: 1;">
						
			<div class="col-md-3 col-sm-6">
				<h2 style="margin-top:10px;color:#fff;background-color: #3ca3e0;padding: 10px;font-size: 18px;"><?php echo _e( 'Guardian Theme Changelog','guardian'); ?></h2>
					<ul style="padding-top:20px">
					<li class="upsell-enigma"> <div class="versionhd"> Version 3.8 - <span> Current Version </span></div>
		<ol> <li> Snow effect option added. </li><li> Rating banner dismiss option added. </li></ol></li>	
						<li class="upsell-enigma"> <div class="versionhd"> Version 3.7 - </div>
		<ol> <li> Text Editor added in Slider, Service Options. </li><li> Icon Picker added in Service Options.</li><li> Quick Edit Option added.</li><li> Home Page Layout Options added.</li><li> Rating banner added.</li></ol></li>				
	<li class="upsell-enigma"> <div class="versionhd"> Version 3.6.3 - </div>
		<ol> <li> New feature add in Slider Option.</li><li> Excerpt Option added. </li><li>Minor changes in header.</li></ol> </li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 3.6.2 - </div>
		<ol> <li> Minor changes in custom header. </li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 3.6.1 - </div>
		<ol> <li> Snow effect Removed. </li><li> Randomised Image support. </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 3.6 - </div>
		<ol> <li> Minor changes in guardian theme and plugin. FontAwesome Library updated 4.7.0. </li><li> Snow effect Added.</li><li>minor changes in header and services. </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 3.4 - </div>
		<ol> <li>New theme tag changed.</li><li>Minor CSS header and footer layout changed. </li><li> Sidebar layout designs with neww css </li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 3.3 - </div>
		<ol> <li> Updated Pro Themes & Plugin Page with Upcoming Premium Themes. </li><li> Minor CSS related issue Fixed.</li><li> Google Fonts reletd issue Fixed.</li><li> Font Awesome new version added.</li><li> Plugin Recomendation added. </li></ol></li>				
	<li class="upsell-enigma"> <div class="versionhd"> Version 3.2 - </div>
		<ol> <li> Updated Pro Themes & Plugin Page with Premium Themes and Plugin Features. </li><li> Woocommerce issue Fixed. </li></ol> </li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 3.1 - </div>
		<ol> <li> Update Theme Info Pgae with Premium Themes and Plugin Features. </li><li> Google Font issue fixed.  </li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 3.0 - </div>
		<ol> <li> Bootstrap formed. </li> <li> RTL support. </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 2.9 - </div>
		<ol> <li> Google Font API Added. </li><li> Update Theme Info Pgae with Premium Theme Features and Configure Home Page.</li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 2.8 - </div>
		<ol> <li>Update Theme Info Pgae with Premium Theme Features.</li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 2.7 - </div>
		<ol> <li> Snow-fall effect removed. </li></ol></li>				
	<li class="upsell-enigma"> <div class="versionhd"> Version 2.6 - </div>
		<ol> <li> Snow Effetcs.</li><li>FA version 4.5.0 added. </li><li>X-MAS BANNER added. </li></ol> </li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 2.5 - </div>
		<ol> <li> Theme-Options removed. </li><li>Mobile Menus FIXED.</li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 2.4 - </div>
		<ol> <li>HOME-Static Page Issue Fixed. </li><li> Customizer Setting Added.</li><li> Theme-Info Page Added.</li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd">Version 2.3 - </div>
		<ol> <li> WPML READY. </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 2.2 - </div>
		<ol> <li>READING-Setting BUG FIXED.</li></ol></li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 2.1 - </div>
		<ol> <li> WHITE SPACE BUG FIXED. </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 2.0 - </div>
		<ol> <li>Minor Changes.</li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.9.6 - </div>
		<ol> <li> Search-Form Issue Fixed. </li></ol></li>				
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.9.5 - </div>
		<ol> <li>Issue removed from the Ticket -> https://themes.trac.wordpress.org/ticket/23434 </li> </ol></li>


	<li class="upsell-enigma"> <div class="versionhd"> Version 1.9.4 - </div>
		<ol> <li> Issue removed from the Ticket -> https://themes.trac.wordpress.org/ticket/23434 </li></ol></li>				
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.9.1 - </div>
		<ol> <li> Translation Related issue. </li><li> esc_* functions used. </li><li> Prefixd Used. </li></ol> </li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.9 - </div>
		<ol> <li> Front-Page Static. </li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.8.3 - </div>
		<ol> <li> Removed Minified CSS/JS. </li><li>Custom Front-Page Option </li><li> wp-title support </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 1.8.2 - </div>
		<ol> <li> Editor in Serivice Option. </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 1.8.1 - </div>
		<ol> <li> Rollback-Snow Effect. </li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.8 - </div>
		<ol> <li> Services Link on HOME. </li><li>Snow Effect in Op. </li><li> String Translation.</li></ol></li>				
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.7 - </div>
		<ol> <li> UPSELL BANNER Removed. </li></ol> </li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.6 - </div>
		<ol> <li> THEM UPSELL BANNER SIZE DECREASED. </li><li> MINOR CHANGES ON HEADER PART.</li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.5 - </div>
		<ol> <li> Some Issue from Tickets. </li><li> Date format. </li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 1.4 - </div>
		<ol> <li> Sane Defaults. </li><li> Hard-coded DATE removed.</li><li> Resources bundled with in the package.</li><li> WooCommerce Ready.</li></ol> </li>
	<li class="upsell-enigma">  <div class="versionhd"> Version 1.3 - </div>
		<ol> <li>Issue Raised in Ticket #20445 resolved</li></ol></li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.2 - </div>
		<ol> <li> Changes :-> Previous Ticket issue resolved. </li> </ol></li>				
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.1 - </div>
		<ol> <li> Full-Width Added.</li><li> Widget Managed.</li><li> POT files correction / updates</li></ol> </li>
	<li class="upsell-enigma"> <div class="versionhd"> Version 1.0 - </div>
		<ol> <li> Release on WPORG. </li></ol></li>
			</ul>
			</div>
			<div class="col-md-2 col-sm-6 upsell-btn">					
					<a style="margin-bottom:20px;margin-left:20px;" href="<?php echo esc_url(get_template_directory_uri()) ?>/changelog.txt" target="blank" class="btn btn-success btn"><?php _e('Changelog','guardian'); ?> </a>
			</div>
		</label>
		<?php
	}
}
endif;
?>