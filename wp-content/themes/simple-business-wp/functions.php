<?php

/* **************************************************************************************************** */
// Load Admin Panel
/* **************************************************************************************************** */


require get_template_directory() . '/admin/admin-init.php';
require_once(get_template_directory() . '/meta_boxes.php');


/* **************************************************************************************************** */
// Setup Theme
/* **************************************************************************************************** */

add_action('after_setup_theme', 'nimbus_setup');

if (!function_exists('nimbus_setup')):

    function nimbus_setup() {


       // Localization

        $lang_local = get_template_directory() . '/lang';
        load_theme_textdomain('nimbus', $lang_local);

        // Register Thumbnail Sizes

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1170, 9999, true);
        add_image_size('nimbus_722_400', 722, 400, true);
        add_image_size('nimbus_1168_526', 1168, 526, true);


        // Load feed links

        add_theme_support('automatic-feed-links');

        // Support Custom Background

        $nimbus_custom_background_defaults = array(
            'default-color' => 'ffffff'
        );
        add_theme_support( 'custom-background', $nimbus_custom_background_defaults );

        // Register Menus

        register_nav_menu('primary', __('Primary Menu', 'nimbus'));
        
        // Set Content Width
        
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1168;
        }
    }

endif;


/* **************************************************************************************************** */
// Clear Helper/s
/* **************************************************************************************************** */

function nimbus_clear($ht = "0") {
echo "<div class='clear' style='height:" . $ht . "px;'></div>";
}


/* **************************************************************************************************** */
// Do Title 
/* **************************************************************************************************** */

add_action('wp_title', 'nimbus_title');
  
function nimbus_title() {
    global $wp_query;
    $title = get_bloginfo('name');
    $seporate = ' | ';
    if (is_page() || is_single()) {
        $postid = $wp_query->post->ID;
        $title = the_title('','',false) . $seporate . get_bloginfo('name');
    }
    wp_reset_query();
    return $title;
}

/* **************************************************************************************************** */
// Modify Search Form
/* **************************************************************************************************** */

function nimbus_modify_search_form($form) {
    $form = '<form method="get" id="searchform" action="' . home_url() . '/" >';
    if (is_search()) {
        $form .='<input type="text" value="' . esc_attr(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />';
    } else {
        $form .='<input type="text" value="Search" name="s" id="s"  onfocus="if(this.value==this.defaultValue)this.value=\'\';" onblur="if(this.value==\'\')this.value=this.defaultValue;"/>';
    }
    $form .= '<input type="image" id="searchsubmit" src="' . get_stylesheet_directory_uri() . '/images/search_icon.png" />
            </form>';
    return $form;
}
add_filter('get_search_form', 'nimbus_modify_search_form');


/* **************************************************************************************************** */
// Override gallery style
/* **************************************************************************************************** */

add_filter( 'use_default_gallery_style', '__return_false' );




/* **************************************************************************************************** */
// More Tag
/* **************************************************************************************************** */

function nimbus_wrap_more_tag($link){
return "<p class='more_tag_wrap'>$link</p>";
}
add_filter('the_content_more_link', 'nimbus_wrap_more_tag');


/* **************************************************************************************************** */
// Register Sidebars
/* **************************************************************************************************** */

add_action('widgets_init', 'nimbus_register_sidebars');

function nimbus_register_sidebars() {

    register_sidebar(array(
        'name' => __('Default Page Sidebar', 'nimbus'),
        'id' => 'sidebar_pages',
        'description' => __('Widgets in this area will be displayed in the sidebar on the pages.', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Default Blog Sidebar', 'nimbus'),
        'id' => 'sidebar_blog',
        'description' => __('Widgets in this area will be displayed in the sidebar on the blog and posts.', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Left', 'nimbus'),
        'id' => 'footer-left',
        'description' => __('Widgets in this area will be shown in the left footer column.', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Center', 'nimbus'),
        'id' => 'footer-center',
        'description' => __('Widgets in this area will be shown in the center footer column.', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Right', 'nimbus'),
        'id' => 'footer-right',
        'description' => __('Widgets in this area will be shown in the right footer column.', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));
    
    
       // frontpage - about
    register_sidebar(array(
        'id' => 'frontpage-about',
        'name' => __('Frontpage About', 'nimbus' ),
        'before_widget' => '<div class="row frontpage-about-row" data-sr="enter left and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    
    
    
    // frontpage - team - left
    register_sidebar(array(
        'id' => 'frontpage-team-left',
        'name' => __('Frontpage Team Left', 'nimbus' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));

    // frontpage - team - center left
    register_sidebar(array(
        'id' => 'frontpage-team-center-left',
        'name' => __('Frontpage Team Center Left', 'nimbus' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - team - center right
    register_sidebar(array(
        'id' => 'frontpage-team-center-right',
        'name' => __('Frontpage Team Center Right', 'nimbus' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));
    
    // frontpage - team - right
    register_sidebar(array(
        'id' => 'frontpage-team-right',
        'name' => __('Frontpage Team Right', 'nimbus' ),
        'before_widget' => '<div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="team-item-title">',
        'after_title' => '</h4>'
    ));   
    

    // create 50 alternate sidebar widget areas for use on post and pages
    $i = 1;
    while ($i <= 50) {
        register_sidebar(array(
            'name' => __('Alternate Sidebar #', 'nimbus') . $i,
            'id' => 'sidebar_' . $i,
            'description' => __('Widgets in this area will be displayed in the sidebar for any posts or pages that are tagged with sidebar', 'nimbus') . $i . '.',
            'before_widget' => '<div class="%1$s" class="widget %2$s widget sidebar_widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget_title">',
            'after_title' => '</h3>'
        ));
        $i++;
    }
}


// #################################################
// Custom Widgets
// #################################################
 
require_once(get_template_directory() . '/inc/widgets.php');


// #################################################
// Custom NavWalker
// #################################################
 
require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');

/* **************************************************************************************************** */
// Excerpt Modifications
/* **************************************************************************************************** */

// Excerpt Length

add_filter('excerpt_length', 'nimbus_excerpt_length');

function nimbus_excerpt_length($length) {
    return 30;
}

// Excerpt More

add_filter('excerpt_more', 'nimbus_excerpt_more');

function nimbus_excerpt_more($more) {
    return '';
}

// Add to pages

add_action('init', 'nimbus_add_excerpts_to_pages');

function nimbus_add_excerpts_to_pages() {
    add_post_type_support('page', 'excerpt');
}


function nimbus_get_the_excerpt_by_id($post_id) {
  global $post;
  $save_post = $post;
  $post = get_post($post_id);
  $output = get_the_excerpt();
  $post = $save_post;
  return $output;
}

/* **************************************************************************************************** */
// Enable Threaded Comments
/* **************************************************************************************************** */

add_action('wp_enqueue_scripts', 'nimbus_threaded_comments');

function nimbus_threaded_comments() {
    if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}

/* **************************************************************************************************** */
// Modify Comments Output
/* **************************************************************************************************** */

if (!function_exists('nimbus_comment')){
    function nimbus_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <li <?php comment_class('media'); ?> id="comment-<?php comment_ID(); ?>">
            <article>
                <div class="comment-avatar pull-left">
                    <?php echo get_avatar( $comment, 75 ); ?>
                </div>
                <div class="comment-content media-body">
                    <p class="text-right right"><?php comment_reply_link(array_merge($args, array('reply_text' => __('Leave a Reply', 'nimbus'), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
                    <p class="text-left left"><strong><?php comment_author_link(); ?></strong><br />
                    <?php echo(get_comment_date()) ?> <?php edit_comment_link(__('(Edit)', 'nimbus'), '  ', '') ?></p>
                    <div class="clear"></div>
                    <?php 
                    if ($comment->comment_approved == '0') {
                    ?>
                        <em><?php _e('Your comment is awaiting moderation.', 'nimbus') ?></em>
                    <?php 
                    } 
                    comment_text(); 
                    ?>
                </div> 
            </article>
    <?php
    }
} 


/* **************************************************************************************************** */
// Modify Ping Output
/* **************************************************************************************************** */

    function nimbus_ping($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <li id="comment_<?php comment_ID(); ?>"><?php comment_author_link(); ?> - <?php comment_excerpt(); ?>
    <?php
    }


/* **************************************************************************************************** */
// Modify Avatar Classes
/* **************************************************************************************************** */

add_filter('get_avatar','nimbus_avatar_class');

function nimbus_avatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar img-responsive", $class) ;
    return $class;
}


/* **************************************************************************************************** */
// Add Image Classes ##Look for way to apply to exsisting
/* **************************************************************************************************** */

function nimbus_add_image_class($class){
    $class .= ' img-responsive';
    return $class;
}
add_filter('get_image_tag_class','nimbus_add_image_class');


/* **************************************************************************************************** */
// Load Public Scripts
/* **************************************************************************************************** */

add_action('wp_enqueue_scripts', 'nimbus_public_scripts');

function nimbus_public_scripts() {

    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.0.0');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('waypoints',get_template_directory_uri() . '/js/jquery.waypoints.min.js','','3.1.1',true);
        wp_enqueue_script('scrollreveal',get_template_directory_uri() . '/js/scrollReveal.min.js','','2.3.2',true);
        wp_enqueue_script('easing',get_template_directory_uri() . '/js/jquery.easing.min.js','','1.3',true);
        wp_enqueue_script('waypoints-sticky',get_template_directory_uri() . '/js/sticky.min.js','','3.1.1',true);
        wp_enqueue_script('nimbus_public',get_template_directory_uri() . '/js/public.js','','1.0.0',true);
    }
}

/* **************************************************************************************************** */
// Load Public Scripts in Conditional
/* **************************************************************************************************** */

add_action('wp_head', 'nimbus_public_scripts_conditional');

function nimbus_public_scripts_conditional() {
?>
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
<?php
}


/* **************************************************************************************************** */
// Load Public CSS
/* **************************************************************************************************** */


add_action('wp_print_styles', 'nimbus_public_styles');

function nimbus_public_styles() {

    if (!is_admin()) {

        wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), "1.0", "all");
        wp_enqueue_style('bootstrap');
        wp_register_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css", array(), "1.0", "all");
        wp_enqueue_style( 'font-awesome' );
        wp_register_style( 'source-sans', "//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,400italic", array(), "1.0", "all");
        wp_enqueue_style( 'source-sans' );
        wp_register_style( 'pt-sans', "//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700", array(), "1.0", "all");
        wp_enqueue_style( 'pt-sans' );
        wp_register_style( 'nimbus-style', get_bloginfo( 'stylesheet_url' ), false, get_bloginfo('version') );
        wp_enqueue_style( 'nimbus-style' );

    }
}



/* **************************************************************************************************** */
// Scrollto in footer
/* **************************************************************************************************** */

add_action('wp_footer', 'nimbus_contact_js', 99);

function nimbus_contact_js() {
    global $post;
    if(isset($_POST['submitted']) && isset($_POST['scrolltoform'])) { ?>
    	<script>
    	    var offset = jQuery("#<?php echo $_POST['scrolltoform']; ?>").height();
            jQuery('html, body').delay( 1000 ).stop().animate({
                scrollTop: jQuery("#<?php echo $_POST['scrolltoform']; ?>").offset().top + offset
            }, 1000, 'easeInOutQuad');
        </script>
    <?php }
}