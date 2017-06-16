<?php
  

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }



    // #################################################
    // This is your option name where all the Redux data is stored.
    // #################################################

    $opt_name = "simple_business_options";



    // #################################################
    // Reg js spicifiv to the customizer
    // #################################################

    function nimbus_customizer_scripts() {

        wp_register_script( 'customizer_scripts', get_template_directory_uri() . '/js/customizer.js', array("jquery"), '', true  );
        wp_enqueue_script( 'customizer_scripts' );

    }
    add_action( 'customize_controls_enqueue_scripts', 'nimbus_customizer_scripts' );
    
    function nimbus_customizer_styles() { ?>
    	<style type="text/css">
            .button-nimbus{background: #e92c6a!important; border-color:#e92c6a!important; -webkit-box-shadow: 0 1px 0 #e92c6a!important; box-shadow: 0 1px 0 #e92c6a!important; color: #fff!important; text-decoration: none!important; text-shadow: 0 -1px 1px #e92c6a,1px 0 1px #e92c6a,0 1px 1px #e92c6a,-1px 0 1px #e92c6a!important;width: 80%!important; margin: 5px auto 5px auto!important; display: block!important; text-align: center!important;margin-top:15px!important;margin-bottom:15px!important;}
            #accordion-section-pro-features>h3.accordion-section-title:before,#accordion-section-slideshow-options>h3.accordion-section-title:before { content: "Pro"!important; position: relative!important; top: -1px!important; margin-left: 0px!important; padding: 3px 6px !important; line-height: 1.5 !important; font-size: 9px !important; color: #ffffff !important; background-color: #e92c6a!important; letter-spacing: 1px!important; text-transform: uppercase!important; -webkit-font-smoothing: subpixel-antialiased !important; }
    	</style>
    <?php }
    add_action( 'customize_controls_print_styles', 'nimbus_customizer_styles', 20 );



    // #################################################
    // Get Option Helper
    // #################################################

    
    function nimbus_get_option($optionID, $default_data = false) {
        global $simple_business_options;

        $options = $simple_business_options;
        if (isset($options[$optionID])) {
            return $options[$optionID];
        } else {
            return NULL;
        }
    }
    
                    


    // #################################################
    // SET ARGUMENTS
    // #################################################

    $theme = wp_get_theme(); 

    $args = array(
        'opt_name' => 'simple_business_options',
        'page_title' => 'Simple Business Theme Options',
        'update_notice' => TRUE,
        'intro_text' => '',
        'footer_text' => '',
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Simple Business Theme Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'dev_mode' => FALSE,
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => FALSE,
        'show_import_export' => TRUE,
        'database' => 'theme_mods',
        'transient_time' => '3600',
        'network_sites' => TRUE,
        'customizer_only' => TRUE,
        'use_cdn' => FALSE,
    );

    Redux::setArgs( $opt_name, $args );



    // #################################################
    // Sections
    // #################################################
         Redux::setSection( $opt_name, array(
        'title'            => __( 'Pro Features', 'nimbus' ),
        'id'               => 'pro-features',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '450px',
        'fields'     => array(
           array(
                'id'       => 'pro-notes-content',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<h2>Simple Business Pro Benifits</h2>
                <p>A few of the many reasons to check out Simple Business Pro:</p>
                <ol>
                    <li><strong>Unlimited Support!</strong></li>
                    <li><strong>Drag & Drop Frontpage Row Ordering</strong></li>
                    <li><strong>Frontpage Row Parallax and Background Support</strong></li>
                    <li><strong>Expanded Social Media Support</strong></li>
                    <li><strong>Frontpage Slideshow</strong></li>
                    <li><strong>Image Logo Support</strong></li>
                    <li><strong>Color & Design Options</strong></li>
                    <li><strong>Typography Options</strong></li>
                    <li><strong>Pro Theme Updates</strong></li>
                </ol>
                <a href="http://www.nimbusthemes.com/wordpress-themes/simple-business/" class="button button-primary button-nimbus" target="_blank">Get Simple Business Pro</a>',
            ),
            array(
                'id'       => 'space3452',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
        ) );   
        
        Redux::setSection( $opt_name, array(
        'title'            => __( 'General', 'nimbus' ),
        'id'               => 'general_settings',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '450px',
        'fields'     => array(
           array(
                'id'       => 'logo',
                'type'     => 'text',
                'title'    => __('Text Logo', 'nimbus'),
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'default'  => get_bloginfo( 'name' )
            ),
            array(
                'id'       => 'copyright',
                'type'     => 'text',
                'title'    => __('Copyright Text', 'nimbus'),
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'default'  => get_bloginfo( 'name' )
            ),
            array(
                'id'       => 'home-slug',
                'type'     => 'text',
                'title'    => __( 'Top of Homepage Navigation Menu ID', 'nimbus' ),
                'subtitle' => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default shown in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => 'home',
            ),
            array(
                'id'       => 'space34453',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
        ) );


    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header Social Media', 'nimbus' ),
        'id'               => 'social',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'social-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Social Icons Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Demo',
                    '3' => 'Hide'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'nimbus_facebook_url',
                'type'     => 'text',
                'title'    => __( 'Facebook URL', 'nimbus' ),
                'subtitle' => __( 'Your Facebook page URL.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'nimbus_linkedin_url',
                'type'     => 'text',
                'title'    => __( 'LinkedIn URL', 'nimbus' ),
                'subtitle' => __( 'Your LinkedIn page URL.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'nimbus_twitter_url',
                'type'     => 'text',
                'title'    => __( 'Twitter Feed URL', 'nimbus' ),
                'subtitle' => __( 'Your Twitter page URL.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'nimbus_mail_url',
                'type'     => 'text',
                'title'    => __( 'Email Address', 'nimbus' ),
                'subtitle' => __( 'Your email address.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'social_note',
                'type'     => 'raw',
                'title'    => __( 'Additional Social Media Options', 'nimbus' ),
                'subtitle' => __( 'Upgrade to the <a href="http://www.nimbusthemes.com/wordpress-themes/simple-business/">Pro Theme</a> for additional social media options ', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
            array(
                'id'       => 'nimbus_hide_rss_icon',
                'type'     => 'checkbox',
                'title'    => __( 'Hide RSS Icon', 'nimbus' ),
                'subtitle' => __( 'Choose to show or hide the rss icon in the header of your website.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '0'// 1 = on | 0 = off
            ),
        )
    ) );
    
    
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Frontpage Banner Section', 'nimbus' ),
        'id'               => 'fp-banner',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px'
        ) );


    Redux::setSection( $opt_name, array(
        'title'            => __( 'Banner/Slideshow Select', 'nimbus' ),
        'id'               => 'banner-select',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => '',
        'fields'           => array(
            array(
                'id'       => 'fp-banner-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Frontpage Banner Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Banner',
                    '2' => 'Demo',
                    '3' => 'Slideshow'
                ),
                'default'  => '2'
            ),
        )
    ) );


Redux::setSection( $opt_name, 
    array(
        'title'            => __( 'Banner Options', 'nimbus' ),
        'id'               => 'static-banner-options',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => '',
        'fields'           => array(
            array(
                'id'       => 'nimbus_content_width_banner',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Upload Banner Image', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'subtitle' => __('Select the banner off your desktop. It should be 1168x526 pixels. Or use the image editor to resize your image.', 'nimbus'),
   
            ),
            array(
                'id'       => 'space2',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    ) 
);



Redux::setSection( $opt_name, 
    array(
        'title'            => __( 'Slideshow Options', 'nimbus' ),
        'id'               => 'slideshow-options',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => '',
        'fields'           => array(
            array(
                'id'       => 'slideshow-info',
                'type'     => 'raw',
                'title'    => __( 'Upgrade to Pro', 'nimbus' ),
                'subtitle' => __( 'With the Pro version of this theme, you will have access to powerful text slideshow options.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<a href="http://www.nimbusthemes.com/wordpress-themes/simple-business/" class="button button-primary button-nimbus" target="_blank">Get Simple Business Pro</a>',
            
            ),
            array(
                'id'       => 'space3',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    ) 
);
    
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Frontpage Action Text', 'nimbus' ),
        'id'               => 'frontpage_settings',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '450px',
        'fields'     => array(
           array(
                'id'       => 'action-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Action Text Section Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Demo',
                    '3' => 'Hide'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'action_text_content',
                'type'     => 'textarea',
                'title'    => __('Action Text Section Content', 'nimbus'),
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'default' => '<h2 class="text-center" style="padding-bottom:25px;">This is the action text area. You can edit it from the dashboard.</h2><p class="text-center"><a href="#" type="button" class="btn btn-primary text-center">Your Button</a></p>',
            ),
            array(
                'id'       => 'fp-action-slug',
                'type'     => 'text',
                'title'    => __( 'Navigation Menu ID', 'nimbus' ),
                'subtitle' => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => 'action',
            ),
            array(
                'id'       => 'space343453',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
        ) );
    
    




    










Redux::setSection( $opt_name, 
    array(
        'title'            => __( 'Frontpage Featured Section', 'nimbus' ),
        'id'               => 'fp-featured',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px',
        'fields'           => array(
                        array(
                'id'       => 'featured-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Featured Page Section Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Demo',
                    '3' => 'Hide'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'nimbus_left_featured',
                'type'     => 'select',
                'multi'    => false,
                'title'    => __('Left Featured Page Column', 'nimbus'), 
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'options'  => nimbus_pages_arr(),
                'default'  => nimbus_random_page()
            ),
            array(
                'id'       => 'nimbus_left_featured_icon',
                'type'     => 'select',
                'multi'    => false,
                'title'    => __('Left Featured Page Column Icon', 'nimbus'), 
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'options'  => nimbus_fontawesome(),
                'default'  => 'fa-bomb'
            ),
            array(
                'id'       => 'nimbus_left_featured_icon_color',
                'type'     => 'raw',
                'title'    => __( 'Set the Left Featured Page Column Icon Color', 'nimbus' ),
                'subtitle' => __( '<a style="font-weight:bold;" target="_blank" href="http://www.nimbusthemes.com/wordpress-themes/simple-business/">Upgrade to the Pro Theme</a> to take advantage of additional color settings.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '',
            ),
            array(
                'id'       => 'nimbus_center_featured',
                'type'     => 'select',
                'multi'    => false,
                'title'    => __('Center Featured Page Column', 'nimbus'), 
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'options'  => nimbus_pages_arr(),
                'default'  => nimbus_random_page()
            ),
            array(
                'id'       => 'nimbus_center_featured_icon',
                'type'     => 'select',
                'multi'    => false,
                'title'    => __('Center Featured Page Column Icon', 'nimbus'), 
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'options'  => nimbus_fontawesome(),
                'default'  => 'fa-wordpress'
            ),
            array(
                'id'       => 'nimbus_center_featured_icon_color',
                'type'     => 'raw',
                'title'    => __( 'Set the Center Featured Page Column Icon Color', 'nimbus' ),
                'subtitle' => __( '<a style="font-weight:bold;" target="_blank" href="http://www.nimbusthemes.com/wordpress-themes/simple-business/">Upgrade to the Pro Theme</a> to take advantage of additional color settings.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '',
            ),
            array(
                'id'       => 'nimbus_right_featured',
                'type'     => 'select',
                'multi'    => false,
                'title'    => __('Right Featured Page Column', 'nimbus'), 
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'options'  => nimbus_pages_arr(),
                'default'  => nimbus_random_page()
            ),
            array(
                'id'       => 'nimbus_right_featured_icon',
                'type'     => 'select',
                'multi'    => false,
                'title'    => __('Right Featured Page Column Icon', 'nimbus'), 
                'subtitle' => __('', 'nimbus'),
                'desc'     => __('', 'nimbus'),
                'options'  => nimbus_fontawesome(),
                'default'  => 'fa-bolt'
            ),
            array(
                'id'       => 'nimbus_right_featured_icon_color',
                'type'     => 'raw',
                'title'    => __( 'Set the Right Featured Page Column Icon Color', 'nimbus' ),
                'subtitle' => __( '<a style="font-weight:bold;" target="_blank" href="http://www.nimbusthemes.com/wordpress-themes/simple-business/">Upgrade to the Pro Theme</a> to take advantage of additional color settings.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '',
            ),
            array(
                'id'       => 'fp-featured-slug',
                'type'     => 'text',
                'title'    => __( 'Navigation Menu ID', 'nimbus' ),
                'subtitle' => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => 'featured',
            ),
            array(
                'id'       => 'space4',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            )
        )
    )
);



Redux::setSection( $opt_name, 
    array(
        'title'            => __( 'Frontpage About Section', 'nimbus' ),
        'id'               => 'fp-about',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'fp-about-toggle',
                'type'     => 'button_set',
                'title'    => __( 'About Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Demo',
                    '3' => 'Hide'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'fp-about-title',
                'type'     => 'text',
                'title'    => __( 'About - Main Title', 'nimbus' ),
                'subtitle' => __( 'This is the big text in the about section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-about-sub-title',
                'type'     => 'text',
                'title'    => __( 'About - Sub Title', 'nimbus' ),
                'subtitle' => __( 'This is the smaller text in the about section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-about-description',
                'type'     => 'text',
                'title'    => __( 'About - Description', 'nimbus' ),
                'subtitle' => __( 'This is the smallest text in the about section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'about-widget-note',
                'type'     => 'raw',
                'title'    => __( 'Populate About Content', 'nimbus' ),
                'subtitle' => __( 'To populate the About content section, you will need to add About content widgets to the Frontpage About widget areas. Go to the Widgets section under Apperance in the left sidebar.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
            array(
                'id'       => 'fp-about-slug',
                'type'     => 'text',
                'title'    => __( 'Navigation Menu ID', 'nimbus' ),
                'subtitle' => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => 'about',
            ),
            array(
                'id'       => 'space6',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    )
);



Redux::setSection( $opt_name, 
    array(
        'title'            => __( 'Frontpage Action Row #2', 'nimbus' ),
        'id'               => 'fp-action2',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'fp-action2-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Frontpage Action Row Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Demo',
                    '3' => 'Hide'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'fp-action2-title',
                'type'     => 'text',
                'title'    => __( 'Action Row #2 - Main Title', 'nimbus' ),
                'subtitle' => __( 'This is the big text in the Action Row #2 section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-action2-button-text',
                'type'     => 'text',
                'title'    => __( 'Action Row #2 - Button Text', 'nimbus' ),
                'subtitle' => __( 'This is the text in the button. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-action2-button-url',
                'type'     => 'text',
                'title'    => __( 'Action Row #2 - Button URL', 'nimbus' ),
                'subtitle' => __( 'This is link destination for the button. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-action2-slug',
                'type'     => 'text',
                'title'    => __( 'Navigation Menu ID', 'nimbus' ),
                'subtitle' => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => 'action2',
            ),
            array(
                'id'       => 'space7',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    )
);



Redux::setSection( $opt_name, 
    array(
        'title'            => __( 'Frontpage Team Section', 'nimbus' ),
        'id'               => 'fp-team',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'fp-team-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Team Section Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Demo',
                    '3' => 'Hide'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'fp-team-title',
                'type'     => 'text',
                'title'    => __( 'Team - Main Title', 'nimbus' ),
                'subtitle' => __( 'This is the big text in the featured section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-team-sub-title',
                'type'     => 'text',
                'title'    => __( 'Team - Sub Title', 'nimbus' ),
                'subtitle' => __( 'This is the smaller text in the featured section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'team-widget-note',
                'type'     => 'raw',
                'title'    => __( 'Populate Team Content', 'nimbus' ),
                'subtitle' => __( 'To populate the Team section, you will need to add Team member widgets to the Team Member widget areas.  Go to the Widgets section under Apperance in the left sidebar.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
            array(
                'id'       => 'fp-team-slug',
                'type'     => 'text',
                'title'    => __( 'Navigation Menu ID', 'nimbus' ),
                'subtitle' => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => 'team',
            ),
            array(
                'id'       => 'space8',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    )
);





    Redux::setSection( $opt_name, array(
        'title'            => __( 'Frontpage News Section', 'nimbus' ),
        'id'               => 'fp-news',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'fp-news-toggle',
                'type'     => 'button_set',
                'title'    => __( 'News Row Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Hide'
                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'news-note',
                'type'     => 'raw',
                'title'    => __( 'About News Section', 'nimbus' ),
                'subtitle' => __( 'You can use this section as either a feed that displays your latest blog posts (the # of posts specified in Settings > Reading > #2), or a page. If you want the Blog to be a separate page completely go to Settings > Reading and make sure Frontpage displays... A static page... and select the HOME page (and create a HOME page if you have not already). Then, create a BLOG page and set the BLOG page as the Posts page option in Settings > Reading. If you do not want the blog to be displayed separately, then set Frontpage displays... Your latest posts.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '',
            ),
            array(
                'id'       => 'fp-news-title',
                'type'     => 'text',
                'title'    => __( 'News - Main Title', 'nimbus' ),
                'subtitle' => __( 'This is the big text in the news section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-news-sub-title',
                'type'     => 'text',
                'title'    => __( 'News - Sub Title', 'nimbus' ),
                'subtitle' => __( 'This is the smaller text in the news section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-news-slug',
                'type'     => 'text',
                'title'    => __( 'Navigation Menu ID', 'nimbus' ),
                'subtitle' => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => 'news',
            ),
            array(
                'id'       => 'fp-news-thumbs-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Example Images Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Hide'
                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'space10',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    ) );




    Redux::setSection( $opt_name, array(
        'title'            => __( 'Frontpage Contact Section', 'nimbus' ),
        'id'               => 'fp-contact',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'contact-toggle',
                'type'     => 'button_set',
                'title'    => __( 'Contact Row Status', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    '1' => 'Show',
                    '2' => 'Demo',
                    '3' => 'Hide'
                ),
                'default'  => '2'
            ),
            array(
                'id'       => 'fp-contact-title',
                'type'     => 'text',
                'title'    => __( 'Contact - Main Title', 'nimbus' ),
                'subtitle' => __( 'This is the big text in the contact section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'fp-contact-sub-title',
                'type'     => 'text',
                'title'    => __( 'Contact - Sub Title', 'nimbus' ),
                'subtitle' => __( 'This is the smaller text in the contact section. Leave blank to hide.', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'contact-mailto',
                'type'     => 'text',
                'title'    => __( 'Mailto Email', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'contact-mailfrom',
                'type'     => 'text',
                'title'    => __( 'Mailfrom Email', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'default'  => '',
            ),
            array(
                'id'       => 'space11',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Blog Settings', 'nimbus' ),
        'id'               => 'blog-settings',
        'desc'             => __( '', 'nimbus' ),
        'customizer_width' => '400px',
        'fields'           => array(
            array(
                'id'       => 'nimbus_blog_sidebar_position',
                'type'     => 'button_set',
                'title'    => __( 'Blog Sidebar Position', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'options'  => array(
                    'right' => 'Right',
                    'left' => 'Left'
                ),
                'default'  => 'left'
            ),
            array(
                'id'       => 'space11sdgf',
                'type'     => 'raw',
                'title'    => __( '', 'nimbus' ),
                'subtitle' => __( '', 'nimbus' ),
                'desc'     => __( '', 'nimbus' ),
                'content'  => '<br><br>',
            ),
        )
    ) );


/* * *************************************************************************************************** */
// Pages
/* * *************************************************************************************************** */

function nimbus_pages_arr() {

    $pages = array();
    $get_pages = get_pages('sort_column=post_parent,menu_order');
    foreach ($get_pages as $page) {
        $pages[$page->ID] = $page->post_title;
    }
    return $pages;
}
function nimbus_random_page(){
    $get_pages = get_pages();
    if(!empty($get_pages)) {
        shuffle($get_pages);
        $page = $get_pages[0]->ID;
    } else {
        $page = "";
    }
    return $page;

}

function nimbus_fontawesome() {

    $i = array("fa-heart" => __('Heart', 'nimbus'),
        "fa-bomb" => __('Bomb', 'nimbus'),
        "fa-paper-plane" => __('Paper Plane', 'nimbus'),
        "fa-wordpress" => __('WordPress', 'nimbus'),
        "fa-arrow-right" => __('Arrow Right', 'nimbus'),
        "fa-arrow-left" => __('Arrow Left', 'nimbus'),
        "fa-bolt" => __('Bolt', 'nimbus'),
        "fa-cloud" => __('Cloud', 'nimbus'),
        "fa-coffee" => __('Coffee', 'nimbus'),
        "fa-bullseye" => __('Bullseye', 'nimbus'),
        "fa-key" => __('Key', 'nimbus')        
        );
    return $i;
}