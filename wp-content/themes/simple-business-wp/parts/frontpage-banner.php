    <?php if (nimbus_get_option('fp-banner-toggle') == "1") { ?>
        <div>
            <img id="frontpage_banner" class="static_banner nimbus_1168_526" src="<?php echo nimbus_get_option('nimbus_content_width_banner')['url']; ?>" />
        </div>
    <?php } else if (nimbus_get_option('fp-banner-toggle') == "3") { ?>
            <h2 style="text-align:center;font-weight:bold;"><?php _e("Please update to the <a style='font-weight:bold;color:blue;' href='http://www.nimbusthemes.com/wordpress-themes/simple-business/'>Pro version</a> of this theme in order to use this slideshow feature.","nimbus"); ?></h2>
    <?php } else { ?>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/preview/simplebiz.jpg" class="nimbus_1168_526 static_banner" alt="Example Banner" />
        </div>
    <?php } ?>
