<?php
		
	// Load Order Sections Settings
		global $shelley_load_order_hero;
		if ( '' == get_theme_mod( 'shelley_load_order_hero' ) ) { $shelley_load_order_hero = '1'; } else { $shelley_load_order_hero = get_theme_mod('shelley_load_order_hero'); }
		global $shelley_load_order_intro;
		if ( '' == get_theme_mod( 'shelley_load_order_intro' ) ) { $shelley_load_order_intro = '2'; } else { $shelley_load_order_intro = get_theme_mod('shelley_load_order_intro'); }
		global $shelley_load_order_members;
		if ( '' == get_theme_mod( 'shelley_load_order_members' ) ) { $shelley_load_order_members = '3'; } else { $shelley_load_order_members = get_theme_mod('shelley_load_order_members'); }
		global $shelley_load_order_services;
		if ( '' == get_theme_mod( 'shelley_load_order_services' ) ) { $shelley_load_order_services = '4'; } else { $shelley_load_order_services = get_theme_mod('shelley_load_order_services'); }
		global $shelley_load_order_portfolio;
		if ( '' == get_theme_mod( 'shelley_load_order_portfolio' ) ) { $shelley_load_order_portfolio = '5'; } else { $shelley_load_order_portfolio = get_theme_mod('shelley_load_order_portfolio'); }
		global $shelley_load_order_testimonials; 
		if ( '' == get_theme_mod( 'shelley_load_order_testimonials' ) ) { $shelley_load_order_testimonials = '6'; } else { $shelley_load_order_testimonials = get_theme_mod('shelley_load_order_testimonials'); }
		global $shelley_load_order_counters;
		if ( '' == get_theme_mod( 'shelley_load_order_counters' ) ) { $shelley_load_order_counters = '7'; } else { $shelley_load_order_counters = get_theme_mod('shelley_load_order_counters'); }
		global $shelley_load_order_actnow;
		if ( '' == get_theme_mod( 'shelley_load_order_actnow' ) ) { $shelley_load_order_actnow = '8'; } else { $shelley_load_order_actnow = get_theme_mod('shelley_load_order_actnow'); }
		
	// Hero Settings	
		global $shelley_hero_title;
		if ( '' == get_theme_mod( 'shelley_hero_title' ) ) { $shelley_hero_title = 'Shelley WordPress Theme'; } else { $shelley_hero_title = get_theme_mod('shelley_hero_title'); }
		global $shelley_hero_tagline;
		if ( '' == get_theme_mod( 'shelley_hero_tagline' ) ) { $shelley_hero_tagline = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ultricies felis. Fusce sed nisi velit. Quisque cursus pharetra diam, non congue ligula sodales at. Phasellus sodales sem sagittis arcu vulputate dictum. Vestibulum faucibus malesuada risus.'; } else { $shelley_hero_tagline = get_theme_mod('shelley_hero_tagline'); }
		global $shelley_hero_featured_image;
		if ( '' == get_theme_mod( 'shelley_hero_featured_image' ) ) { $shelley_hero_featured_image = 'http://placehold.it/540x370'; } else { $shelley_hero_featured_image = get_theme_mod('shelley_hero_featured_image'); }
		global $shelley_hero_button_1_link;
		if ( '' == get_theme_mod( 'shelley_hero_button_1_link' ) ) { $shelley_hero_button_1_link = 'change this link in customizer'; } else { $shelley_hero_button_1_link = get_theme_mod('shelley_hero_button_1_link'); }
		global $shelley_hero_button_1_text;
		if ( '' == get_theme_mod( 'shelley_hero_button_1_text' ) ) { $shelley_hero_button_1_text = 'Change in'; } else { $shelley_hero_button_1_text = get_theme_mod('shelley_hero_button_1_text'); }
		global $shelley_hero_button_2_link;
		if ( '' == get_theme_mod( 'shelley_hero_button_2_link' ) ) { $shelley_hero_button_2_link = 'change this link in customizer'; } else { $shelley_hero_button_2_link = get_theme_mod('shelley_hero_button_2_link'); }
		global $shelley_hero_button_2_text;
		if ( '' == get_theme_mod( 'shelley_hero_button_2_text' ) ) { $shelley_hero_button_2_text = 'Customizer'; } else { $shelley_hero_button_2_text = get_theme_mod('shelley_hero_button_2_text'); }		
		
	// Intro Settings	
		global $shelley_intro_image;
		if ( '' == get_theme_mod( 'shelley_intro_image' ) ) { $shelley_intro_image = 'http://placehold.it/540x370'; } else { $shelley_intro_image = get_theme_mod('shelley_intro_image'); }
		global $shelley_intro_title;
		if ( '' == get_theme_mod( 'shelley_intro_title' ) ) { $shelley_intro_title = 'Change this title in Customizer'; } else { $shelley_intro_title = get_theme_mod('shelley_intro_title'); }
		global $shelley_intro_paragraph_1;
		if ( '' == get_theme_mod( 'shelley_intro_paragraph_1' ) ) { $shelley_intro_paragraph_1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ultricies felis. Fusce sed nisi velit. Quisque cursus pharetra diam, non congue ligula sodales at. Phasellus sodales sem sagittis arcu vulputate dictum. Vestibulum faucibus malesuada risus. '; } else { $shelley_intro_paragraph_1 = get_theme_mod('shelley_intro_paragraph_1'); }
		global $shelley_intro_paragraph_2;
		if ( '' == get_theme_mod( 'shelley_intro_paragraph_2' ) ) { $shelley_intro_paragraph_2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ultricies felis. Fusce sed nisi velit. Quisque cursus pharetra diam, non congue ligula sodales at. Phasellus sodales sem sagittis arcu vulputate dictum. Vestibulum faucibus malesuada risus. '; } else { $shelley_intro_paragraph_2 = get_theme_mod('shelley_intro_paragraph_2'); }
		
	//Member images
		global $shelley_member_image_1;
		if ( '' == get_theme_mod( 'shelley_member_image_1' ) ) { $shelley_member_image_1 = 'http://placehold.it/256x256'; } else { $shelley_member_image_1 = get_theme_mod('shelley_member_image_1'); }
		global $shelley_member_image_2;
		if ( '' == get_theme_mod( 'shelley_member_image_2' ) ) { $shelley_member_image_2 = 'http://placehold.it/256x256'; } else { $shelley_member_image_2 = get_theme_mod('shelley_member_image_2'); }
		global $shelley_member_image_3;
		if ( '' == get_theme_mod( 'shelley_member_image_3' ) ) { $shelley_member_image_3 = 'http://placehold.it/256x256'; } else { $shelley_member_image_3 = get_theme_mod('shelley_member_image_3'); }
	//Member Names
		global $shelley_member_name_1;
		if ( '' == get_theme_mod( 'shelley_member_name_1' ) ) { $shelley_member_name_1 = 'Change this name in Customizer'; } else { $shelley_member_name_1 = get_theme_mod('shelley_member_name_1'); }
		global $shelley_member_name_2;
		if ( '' == get_theme_mod( 'shelley_member_name_2' ) ) { $shelley_member_name_2 = 'Change this name in Customizer'; } else { $shelley_member_name_2 = get_theme_mod('shelley_member_name_2'); }
		global $shelley_member_name_3;
		if ( '' == get_theme_mod( 'shelley_member_name_3' ) ) { $shelley_member_name_3 = 'Change this name in Customizer'; } else { $shelley_member_name_3 = get_theme_mod('shelley_member_name_3'); }
	//Member titles
		global $shelley_member_title_1;
		if ( '' == get_theme_mod( 'shelley_member_title_1' ) ) { $shelley_member_title_1 = 'Change this title in Customizer'; } else { $shelley_member_title_1 = get_theme_mod('shelley_member_title_1'); }
		global $shelley_member_title_2;
		if ( '' == get_theme_mod( 'shelley_member_title_2' ) ) { $shelley_member_title_2 = 'Change this title in Customizer'; } else { $shelley_member_title_2 = get_theme_mod('shelley_member_title_2'); }
		global $shelley_member_title_3;
		if ( '' == get_theme_mod( 'shelley_member_title_3' ) ) { $shelley_member_title_3 = 'Change this title in Customizer'; } else { $shelley_member_title_3 = get_theme_mod('shelley_member_title_3'); }
	//Member descriptions
		global $shelley_member_description_1;
		if ( '' == get_theme_mod( 'shelley_member_description_1' ) ) { $shelley_member_description_1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ultricies felis. Fusce sed nisi velit. Quisque cursus pharetra diam, non congue ligula sodales at. Phasellus sodales sem sagittis arcu vulputate dictum. Vestibulum faucibus malesuada risus. '; } else { $shelley_member_description_1 = get_theme_mod('shelley_member_description_1'); }
		global $shelley_member_description_2;
		if ( '' == get_theme_mod( 'shelley_member_description_2' ) ) { $shelley_member_description_2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ultricies felis. Fusce sed nisi velit. Quisque cursus pharetra diam, non congue ligula sodales at. Phasellus sodales sem sagittis arcu vulputate dictum. Vestibulum faucibus malesuada risus. '; } else { $shelley_member_description_2 = get_theme_mod('shelley_member_description_2'); }
		global $shelley_member_description_3;
		if ( '' == get_theme_mod( 'shelley_member_description_3' ) ) { $shelley_member_description_3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ultricies felis. Fusce sed nisi velit. Quisque cursus pharetra diam, non congue ligula sodales at. Phasellus sodales sem sagittis arcu vulputate dictum. Vestibulum faucibus malesuada risus. '; } else { $shelley_member_description_3 = get_theme_mod('shelley_member_description_3'); }
		
	// Services settings
		global $shelley_services_header;
		if ( '' == get_theme_mod( 'shelley_services_header' ) ) { $shelley_services_header = 'Change this heading title in Customizer'; } else { $shelley_services_header = get_theme_mod('shelley_services_header'); }
		global $shelley_services_tagline;
		if ( '' == get_theme_mod( 'shelley_services_tagline' ) ) { $shelley_services_tagline = 'Change this tagline in Customizer'; } else { $shelley_services_tagline = get_theme_mod('shelley_services_tagline'); }
	//Service images
		global $shelley_services_image_1;
		if ( '' == get_theme_mod( 'shelley_services_image_1' ) ) { $shelley_services_image_1 = 'http://placehold.it/128x128'; } else { $shelley_services_image_1 = get_theme_mod('shelley_services_image_1'); }
		global $shelley_services_image_2;
		if ( '' == get_theme_mod( 'shelley_services_image_2' ) ) { $shelley_services_image_2 = 'http://placehold.it/128x128'; } else { $shelley_services_image_2 = get_theme_mod('shelley_services_image_2'); }
		global $shelley_services_image_3;
		if ( '' == get_theme_mod( 'shelley_services_image_3' ) ) { $shelley_services_image_3 = 'http://placehold.it/128x128'; } else { $shelley_services_image_3 = get_theme_mod('shelley_services_image_3'); }
		global $shelley_services_image_4;
		if ( '' == get_theme_mod( 'shelley_services_image_4' ) ) { $shelley_services_image_4 = 'http://placehold.it/128x128'; } else { $shelley_services_image_4 = get_theme_mod('shelley_services_image_4'); }
	//Service titles
		global $shelley_services_title_1;
		if ( '' == get_theme_mod( 'shelley_services_title_1' ) ) { $shelley_services_title_1 = 'Change this title in Customizer'; } else { $shelley_services_title_1 = get_theme_mod('shelley_services_title_1'); }
		global $shelley_services_title_2;
		if ( '' == get_theme_mod( 'shelley_services_title_2' ) ) { $shelley_services_title_2 = 'Change this title in Customizer'; } else { $shelley_services_title_2 = get_theme_mod('shelley_services_title_2'); }
		global $shelley_services_title_3;
		if ( '' == get_theme_mod( 'shelley_services_title_3' ) ) { $shelley_services_title_3 = 'Change this title in Customizer'; } else { $shelley_services_title_3 = get_theme_mod('shelley_services_title_3'); }
		global $shelley_services_title_4;
		if ( '' == get_theme_mod( 'shelley_services_title_4' ) ) { $shelley_services_title_4 = 'Change this title in Customizer'; } else { $shelley_services_title_4 = get_theme_mod('shelley_services_title_4'); }
	//Service descriptions
		global $shelley_services_description_1;
		if ( '' == get_theme_mod( 'shelley_services_description_1' ) ) { $shelley_services_description_1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet dolor nec diam pharetra, eu sodales massa euismod.'; } else { $shelley_services_description_1 = get_theme_mod('shelley_services_description_1'); }
		global $shelley_services_description_2;
		if ( '' == get_theme_mod( 'shelley_services_description_2' ) ) { $shelley_services_description_2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet dolor nec diam pharetra, eu sodales massa euismod.'; } else { $shelley_services_description_2 = get_theme_mod('shelley_services_description_2'); }
		global $shelley_services_description_3;
		if ( '' == get_theme_mod( 'shelley_services_description_3' ) ) { $shelley_services_description_3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet dolor nec diam pharetra, eu sodales massa euismod.'; } else { $shelley_services_description_3 = get_theme_mod('shelley_services_description_3'); }
		global $shelley_services_description_4;
		if ( '' == get_theme_mod( 'shelley_services_description_4' ) ) { $shelley_services_description_4 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet dolor nec diam pharetra, eu sodales massa euismod.'; } else { $shelley_services_description_4 = get_theme_mod('shelley_services_description_4'); }
		
	// Portfolio settings
		global $shelley_portfolio_header;
		if ( '' == get_theme_mod( 'shelley_portfolio_header' ) ) { $shelley_portfolio_header = 'Change this heading title in Customizer'; } else { $shelley_portfolio_header = get_theme_mod('shelley_portfolio_header'); }
		global $shelley_portfolio_tagline;
		if ( '' == get_theme_mod( 'shelley_portfolio_tagline' ) ) { $shelley_portfolio_tagline = 'Change this tagline in Customizer'; } else { $shelley_portfolio_tagline = get_theme_mod('shelley_portfolio_tagline'); }
	//portfolio images
		global $shelley_portfolio_image_1;
		if ( '' == get_theme_mod( 'shelley_portfolio_image_1' ) ) { $shelley_portfolio_image_1 = 'http://placehold.it/323x243'; } else { $shelley_portfolio_image_1 = get_theme_mod('shelley_portfolio_image_1'); }
		global $shelley_portfolio_image_2;
		if ( '' == get_theme_mod( 'shelley_portfolio_image_2' ) ) { $shelley_portfolio_image_2 = 'http://placehold.it/323x243'; } else { $shelley_portfolio_image_2 = get_theme_mod('shelley_portfolio_image_2'); }
		global $shelley_portfolio_image_3;
		if ( '' == get_theme_mod( 'shelley_portfolio_image_3' ) ) { $shelley_portfolio_image_3 = 'http://placehold.it/323x243'; } else { $shelley_portfolio_image_3 = get_theme_mod('shelley_portfolio_image_3'); }
		global $shelley_portfolio_image_4;
		if ( '' == get_theme_mod( 'shelley_portfolio_image_4' ) ) { $shelley_portfolio_image_4 = 'http://placehold.it/323x243'; } else { $shelley_portfolio_image_4 = get_theme_mod('shelley_portfolio_image_4'); }
		global $shelley_portfolio_image_5;
		if ( '' == get_theme_mod( 'shelley_portfolio_image_5' ) ) { $shelley_portfolio_image_5 = 'http://placehold.it/323x243'; } else { $shelley_portfolio_image_5 = get_theme_mod('shelley_portfolio_image_5'); }
		global $shelley_portfolio_image_6;
		if ( '' == get_theme_mod( 'shelley_portfolio_image_6' ) ) { $shelley_portfolio_image_6 = 'http://placehold.it/323x243'; } else { $shelley_portfolio_image_6 = get_theme_mod('shelley_portfolio_image_6'); }
	//portfolio titles
		global $shelley_portfolio_title_1;
		if ( '' == get_theme_mod( 'shelley_portfolio_title_1' ) ) { $shelley_portfolio_title_1 = 'Change this title in Customizer'; } else { $shelley_portfolio_title_1 = get_theme_mod('shelley_portfolio_title_1'); }
		global $shelley_portfolio_title_2;
		if ( '' == get_theme_mod( 'shelley_portfolio_title_2' ) ) { $shelley_portfolio_title_2 = 'Change this title in Customizer'; } else { $shelley_portfolio_title_2 = get_theme_mod('shelley_portfolio_title_2'); }
		global $shelley_portfolio_title_3;
		if ( '' == get_theme_mod( 'shelley_portfolio_title_3' ) ) { $shelley_portfolio_title_3 = 'Change this title in Customizer'; } else { $shelley_portfolio_title_3 = get_theme_mod('shelley_portfolio_title_3'); }
		global $shelley_portfolio_title_4;
		if ( '' == get_theme_mod( 'shelley_portfolio_title_4' ) ) { $shelley_portfolio_title_4 = 'Change this title in Customizer'; } else { $shelley_portfolio_title_4 = get_theme_mod('shelley_portfolio_title_4'); }
		global $shelley_portfolio_title_5;
		if ( '' == get_theme_mod( 'shelley_portfolio_title_5' ) ) { $shelley_portfolio_title_5 = 'Change this title in Customizer'; } else { $shelley_portfolio_title_5 = get_theme_mod('shelley_portfolio_title_5'); }
		global $shelley_portfolio_title_6;
		if ( '' == get_theme_mod( 'shelley_portfolio_title_6' ) ) { $shelley_portfolio_title_6 = 'Change this title in Customizer'; } else { $shelley_portfolio_title_6 = get_theme_mod('shelley_portfolio_title_6'); }
	//portfolio Links
		global $shelley_portfolio_link_1;
		if ( '' == get_theme_mod( 'shelley_portfolio_link_1' ) ) { $shelley_portfolio_link_1 = 'Change this link in Customizer'; } else { $shelley_portfolio_link_1 = get_theme_mod('shelley_portfolio_link_1'); }
		global $shelley_portfolio_link_2;
		if ( '' == get_theme_mod( 'shelley_portfolio_link_2' ) ) { $shelley_portfolio_link_2 = 'Change this link in Customizer'; } else { $shelley_portfolio_link_2 = get_theme_mod('shelley_portfolio_link_2'); }
		global $shelley_portfolio_link_3;
		if ( '' == get_theme_mod( 'shelley_portfolio_link_3' ) ) { $shelley_portfolio_link_3 = 'Change this link in Customizer'; } else { $shelley_portfolio_link_3 = get_theme_mod('shelley_portfolio_link_3'); }
		global $shelley_portfolio_link_4;
		if ( '' == get_theme_mod( 'shelley_portfolio_link_4' ) ) { $shelley_portfolio_link_4 = 'Change this link in Customizer'; } else { $shelley_portfolio_link_4 = get_theme_mod('shelley_portfolio_link_4'); }
		global $shelley_portfolio_link_5;
		if ( '' == get_theme_mod( 'shelley_portfolio_link_5' ) ) { $shelley_portfolio_link_5 = 'Change this link in Customizer'; } else { $shelley_portfolio_link_5 = get_theme_mod('shelley_portfolio_link_5'); }
		global $shelley_portfolio_link_6;
		if ( '' == get_theme_mod( 'shelley_portfolio_link_6' ) ) { $shelley_portfolio_link_6 = 'Change this link in Customizer'; } else { $shelley_portfolio_link_6 = get_theme_mod('shelley_portfolio_link_6'); }
	//testimonials header and tagline
		global $shelley_testimonials_header;
		if ( '' == get_theme_mod( 'shelley_testimonials_header' ) ) { $shelley_testimonials_header = 'Change this heading title in Customizer'; } else { $shelley_testimonials_header = get_theme_mod('shelley_testimonials_header'); }
		global $shelley_testimonials_tagline;
		if ( '' == get_theme_mod( 'shelley_testimonials_tagline' ) ) { $shelley_testimonials_tagline = 'Change this tagline in Customizer'; } else { $shelley_testimonials_tagline = get_theme_mod('shelley_testimonials_tagline'); }
	//testimonials images
		global $shelley_testimonials_image_1;
		if ( '' == get_theme_mod( 'shelley_testimonials_image_1' ) ) { $shelley_testimonials_image_1 = 'http://placehold.it/80x80'; } else { $shelley_testimonials_image_1 = get_theme_mod('shelley_testimonials_image_1'); }
		global $shelley_testimonials_image_2;
		if ( '' == get_theme_mod( 'shelley_testimonials_image_2' ) ) { $shelley_testimonials_image_2 = 'http://placehold.it/80x80'; } else { $shelley_testimonials_image_2 = get_theme_mod('shelley_testimonials_image_2'); }
		global $shelley_testimonials_image_3;
		if ( '' == get_theme_mod( 'shelley_testimonials_image_3' ) ) { $shelley_testimonials_image_3 = 'http://placehold.it/80x80'; } else { $shelley_testimonials_image_3 = get_theme_mod('shelley_testimonials_image_3'); }
		global $shelley_testimonials_image_4;
		if ( '' == get_theme_mod( 'shelley_testimonials_image_4' ) ) { $shelley_testimonials_image_4 = 'http://placehold.it/80x80'; } else { $shelley_testimonials_image_4 = get_theme_mod('shelley_testimonials_image_4'); }
	//testimonials titles
		global $shelley_testimonials_title_1;
		if ( '' == get_theme_mod( 'shelley_testimonials_title_1' ) ) { $shelley_testimonials_title_1 = 'Change this title in Customizer'; } else { $shelley_testimonials_title_1 = get_theme_mod('shelley_testimonials_title_1'); }
		global $shelley_testimonials_title_2;
		if ( '' == get_theme_mod( 'shelley_testimonials_title_2' ) ) { $shelley_testimonials_title_2 = 'Change this title in Customizer'; } else { $shelley_testimonials_title_2 = get_theme_mod('shelley_testimonials_title_2'); }
		global $shelley_testimonials_title_3;
		if ( '' == get_theme_mod( 'shelley_testimonials_title_3' ) ) { $shelley_testimonials_title_3 = 'Change this title in Customizer'; } else { $shelley_testimonials_title_3 = get_theme_mod('shelley_testimonials_title_3'); }
		global $shelley_testimonials_title_4;
		if ( '' == get_theme_mod( 'shelley_testimonials_title_4' ) ) { $shelley_testimonials_title_4 = 'Change this title in Customizer'; } else { $shelley_testimonials_title_4 = get_theme_mod('shelley_testimonials_title_4'); }
	//testimonials names
		global $shelley_testimonials_name_1;
		if ( '' == get_theme_mod( 'shelley_testimonials_name_1' ) ) { $shelley_testimonials_name_1 = 'Change this name in Customizer'; } else { $shelley_testimonials_name_1 = get_theme_mod('shelley_testimonials_name_1'); }
		global $shelley_testimonials_name_2;
		if ( '' == get_theme_mod( 'shelley_testimonials_name_2' ) ) { $shelley_testimonials_name_2 = 'Change this name in Customizer'; } else { $shelley_testimonials_name_2 = get_theme_mod('shelley_testimonials_name_2'); }
		global $shelley_testimonials_name_3;
		if ( '' == get_theme_mod( 'shelley_testimonials_name_3' ) ) { $shelley_testimonials_name_3 = 'Change this name in Customizer'; } else { $shelley_testimonials_name_3 = get_theme_mod('shelley_testimonials_name_3'); }
		global $shelley_testimonials_name_4;
		if ( '' == get_theme_mod( 'shelley_testimonials_name_4' ) ) { $shelley_testimonials_name_4 = 'Change this name in Customizer'; } else { $shelley_testimonials_name_4 = get_theme_mod('shelley_testimonials_name_4'); }
	//testimonials reviews
		global $shelley_testimonials_review_1;
		if ( '' == get_theme_mod( 'shelley_testimonials_review_1' ) ) { $shelley_testimonials_review_1 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.'; } else { $shelley_testimonials_review_1 = get_theme_mod('shelley_testimonials_review_1'); }
		global $shelley_testimonials_review_2;
		if ( '' == get_theme_mod( 'shelley_testimonials_review_2' ) ) { $shelley_testimonials_review_2 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.'; } else { $shelley_testimonials_review_2 = get_theme_mod('shelley_testimonials_review_2'); }
		global $shelley_testimonials_review_3;
		if ( '' == get_theme_mod( 'shelley_testimonials_review_3' ) ) { $shelley_testimonials_review_3 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.'; } else { $shelley_testimonials_review_3 = get_theme_mod('shelley_testimonials_review_3'); }
		global $shelley_testimonials_review_4;
		if ( '' == get_theme_mod( 'shelley_testimonials_review_4' ) ) { $shelley_testimonials_review_4 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.'; } else { $shelley_testimonials_review_4 = get_theme_mod('shelley_testimonials_review_4'); }
	//Counters Settings
	//Heading and tagline	
		global $shelley_counters_header;
		if ( '' == get_theme_mod( 'shelley_counters_header' ) ) { $shelley_counters_header = 'Change this heading title in Customizer'; } else { $shelley_counters_header = get_theme_mod('shelley_counters_header'); }
		global $shelley_counters_tagline;
		if ( '' == get_theme_mod( 'shelley_counters_tagline' ) ) { $shelley_counters_tagline = 'Change this tagline in Customizer'; } else { $shelley_counters_tagline = get_theme_mod('shelley_counters_tagline'); }
	//Counter 1 value plus title plus image
		global $shelley_counters_title_1;
		if ( '' == get_theme_mod( 'shelley_counters_title_1' ) ) { $shelley_counters_title_1 = 'Change this title in Customizer'; } else { $shelley_counters_title_1 = get_theme_mod('shelley_counters_title_1'); }
		global $shelley_counters_value_1;
		if ( '' == get_theme_mod( 'shelley_counters_value_1' ) ) { $shelley_counters_value_1 = '1234567'; } else { $shelley_counters_value_1 = get_theme_mod('shelley_counters_value_1'); }
		global $shelley_counters_image_1;
		if ( '' == get_theme_mod( 'shelley_counters_image_1' ) ) { $shelley_counters_image_1 = 'http://placehold.it/128x128'; } else { $shelley_counters_image_1 = get_theme_mod('shelley_counters_image_1'); }
	//Counter 2 value plus title plus image
		global $shelley_counters_title_2;
		if ( '' == get_theme_mod( 'shelley_counters_title_2' ) ) { $shelley_counters_title_2 = 'Change this title in Customizer'; } else { $shelley_counters_title_2 = get_theme_mod('shelley_counters_title_2'); }
		global $shelley_counters_value_2;
		if ( '' == get_theme_mod( 'shelley_counters_value_2' ) ) { $shelley_counters_value_2 = '1337'; } else { $shelley_counters_value_2 = get_theme_mod('shelley_counters_value_2'); }
		global $shelley_counters_image_2;
		if ( '' == get_theme_mod( 'shelley_counters_image_2' ) ) { $shelley_counters_image_2 = 'http://placehold.it/128x128'; } else { $shelley_counters_image_2 = get_theme_mod('shelley_counters_image_2'); }
	//Counter 3 value plus title plus image
		global $shelley_counters_title_3;
		if ( '' == get_theme_mod( 'shelley_counters_title_3' ) ) { $shelley_counters_title_3 = 'Change this title in Customizer'; } else { $shelley_counters_title_3 = get_theme_mod('shelley_counters_title_3'); }
		global $shelley_counters_value_3;
		if ( '' == get_theme_mod( 'shelley_counters_value_3' ) ) { $shelley_counters_value_3 = '14.684893'; } else { $shelley_counters_value_3 = get_theme_mod('shelley_counters_value_3'); }	
		global $shelley_counters_image_3;
		if ( '' == get_theme_mod( 'shelley_counters_image_3' ) ) { $shelley_counters_image_3 = 'http://placehold.it/128x128'; } else { $shelley_counters_image_3 = get_theme_mod('shelley_counters_image_3'); }
	
	//Call To Action Settings
		global $shelley_cta_header;
		if ( '' == get_theme_mod( 'shelley_cta_header' ) ) { $shelley_cta_header = 'Change this heading title in Customizer'; } else { $shelley_cta_header = get_theme_mod('shelley_cta_header'); }
		global $shelley_cta_tagline;
		if ( '' == get_theme_mod( 'shelley_cta_tagline' ) ) { $shelley_cta_tagline = 'Change this tagline in Customizer'; } else { $shelley_cta_tagline = get_theme_mod('shelley_cta_tagline'); }	
		global $shelley_cta_link;
		if ( '' == get_theme_mod( 'shelley_cta_link' ) ) { $shelley_cta_link = 'Change This Link In Customizer'; } else { $shelley_cta_link = get_theme_mod('shelley_cta_link'); }
		global $shelley_cta_button_text;
		if ( '' == get_theme_mod( 'shelley_cta_button_text' ) ) { $shelley_cta_button_text = 'Act Now!'; } else { $shelley_cta_button_text = get_theme_mod('shelley_cta_button_text'); }
			
?>