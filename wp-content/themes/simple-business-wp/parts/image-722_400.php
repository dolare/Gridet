<?php
if (has_post_thumbnail()) {
    the_post_thumbnail('nimbus_722_400', array('class' => 'nimbus_722_400 img-responsive'));
} else { ?>
    <?php if ( (nimbus_get_option('fp-news-thumbs-toggle') == "1") || (nimbus_get_option('fp-news-thumbs-toggle') == "") ) { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/preview/722x400-<?php echo rand(1,8); ?>.jpeg" class="nimbus_722_400 img-responsive" alt="<?php the_title(); ?>" />
    <?php } ?>
<?php } ?>