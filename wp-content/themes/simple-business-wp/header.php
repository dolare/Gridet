<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('', true); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php 
        wp_head();
        ?>        
    </head>
    <body <?php body_class(); ?> id="<?php if (nimbus_get_option('home-slug')=='') {echo "home";} else {echo nimbus_get_option('home-slug');} ?>">
        <div class="container">
            <header>
                <?php 
                get_template_part( 'parts/header', 'content'); 
                get_template_part( 'parts/header', 'menu');
                ?>
            </header>
            <div class="line"></div>

