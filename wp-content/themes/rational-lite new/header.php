<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <title>Gridology</title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<a id="top"></a>
<div id="page-container" class="header-navbar-fixed header-navbar-transparent">

	<header id="header-navbar" class="content-mini content-mini-full">
                <div class="content-boxed">
                    <!-- Header Navigation Right -->
                    <ul class="nav-header pull-right">
                        
                        <li class="hidden-md hidden-lg">
                            <!-- Toggle class helper (for main header navigation below in small screens), functionality initialized in App() -> uiToggleClass() -->
                            <button class="h4 btn btn-link pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="h4 text-white-transparent fa fa-navicon"></i>
                            </button>
                        </li>
                    </ul>
                    <!-- END Header Navigation Right -->

                    <!-- Main Header Navigation -->
                    <ul class="js-nav-main-header nav-main-header pull-right text-uppercase text-white-transparent" style="font-weight: 500; letter-spacing: 0.3px;font-family:'Helvetica Neue','Open Sans',Helvetica,Arial,sans-serif;">
                        <li class="text-right hidden-md hidden-lg">
                            <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
                            <button class="h4 btn btn-link" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="h4 text-white-transparent fa fa-times"></i>
                            </button>
                        </li>
                        <li>
                            <a class="active" href="#top" style="font-weight: 500;">Home</a>
                        </li>
                        <li>
                             <a href="#services" style="font-weight: 500;">Services</a>
                        </li>
                        <li>
                            <a href="#about1" style="font-weight: 500;">About</a>
                        </li>
                        <li>
                            <a href="#contact" style="font-weight: 500;">Contact</a>
                        </li>
                        
                    </ul>
                    <!-- END Main Header Navigation -->

                    <!-- Header Navigation Left -->
                    <ul class="nav-header pull-left">
                        <li class="header-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/G-rid-6 logo only REVERSED.png" height="32" alt="" style="vertical-align: middle;">
                        	&nbsp;<span class="h4 text-uppercase text-white-transparent" style="font-weight: 500; letter-spacing:0.3px; font-family: 'Helvetica Neue','Open Sans',Helvetica,Arial,sans-serif;vertical-align: middle;">Gridology</span>
                        	
                           
                        </li>
                    </ul>
                    <!-- END Header Navigation Left -->
                </div>
            </header>
            <!-- END Header -->
           </div>
<!-- #header -->
		<div class="header-clone"></div>
		<!-- <div class="header-image"> -->
<!-- header image section -->
 <?php
  if ( is_front_page() ) {
  	get_template_part( 'includes/front', 'header-image-section' );
  }
?>
<!-- </div> -->
<div id="main" class="clearfix">