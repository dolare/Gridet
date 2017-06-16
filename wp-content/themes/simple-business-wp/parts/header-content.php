<div class="row content_squeeze">
    <div class="col-sm-6 col-sm-push-6">
        <?php if (nimbus_get_option('social-toggle') == "1") { ?>
        <p id="social_buttons" class="text-right">
            <?php
            $social_type = array("fa-facebook" => "nimbus_facebook_url", "fa-linkedin" => "nimbus_linkedin_url", "fa-twitter" => "nimbus_twitter_url", "fa-envelope" => "nimbus_mail_url");
            foreach ($social_type as $key => $id) {
                $$id = trim(nimbus_get_option($id));
                $mailto = ($key == 'fa-envelope') ? 'mailto:' : '';
                $id = $$id;
                if (!empty($id)) {
                ?>
                    <a href="<?php echo $mailto; ?><?php echo $id; ?>"><i class="fa <?php echo $key; ?> fa-socialcircle"></i></a>
                <?php
                }
            }
            if (nimbus_get_option('nimbus_hide_rss_icon') == 0) {
            ?>
                <a href="<?php echo get_bloginfo('rss2_url'); ?>"><i class="fa fa-rss fa-socialcircle"></i></a>
            <?php
            }
            ?>
        </p>
        <?php } else if (nimbus_get_option('social-toggle') == "3") { ?>

        <?php } else { ?>
            <p id="social_buttons" class="text-right">
                <a href="#"><i class="fa fa-facebook fa-socialcircle"></i></a>
                <a href="q"><i class="fa fa-linkedin fa-socialcircle"></i></a>
                <a href="#"><i class="fa fa-twitter fa-socialcircle"></i></a>
                <a href="mailto:#"><i class="fa fa-envelope fa-socialcircle"></i></a>
                <a href="#"><i class="fa fa-rss fa-socialcircle"></i></a>
            </p>
        <?php } ?>
    </div>
    <div class="col-sm-6 col-sm-pull-6">
        <?php
        get_template_part( 'parts/header', 'logo'); 
        ?>
    </div>
</div>

