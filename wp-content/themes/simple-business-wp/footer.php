    </div> <!-- //.container -->
        <?php if (is_active_sidebar( 'Footer Left' ) || is_active_sidebar( 'Footer Center' ) || is_active_sidebar( 'Footer Right' )) { ?>
        <div class="container footer">
            <div class="row content_squeeze footer_widgets">
                <div id="footer_widget_left" class="col-md-4">
                    <?php
                    if (is_active_sidebar( 'Footer Left' )) {
                        dynamic_sidebar( 'Footer Left' );
                    } 
                    ?>
                </div>
                <div id="footer_widget_center_left" class="col-md-4">
                    <?php
                    if (is_active_sidebar( 'Footer Center' )) {
                        dynamic_sidebar( 'Footer Center' );
                    } 
                    ?>
                </div>
                <div id="footer_widget_right" class="col-md-4">
                    <?php
                    if (is_active_sidebar( 'Footer Right' )) {
                        dynamic_sidebar( 'Footer Right' );
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="container noborder base">
            <div class="row">
                <div class="col-md-5">
                    <p id="copyright"><?php if (nimbus_get_option('copyright') != '') { echo nimbus_get_option('copyright'); } else { echo "&copy ". get_bloginfo( 'name' ) . " " . date('Y'); } ?></p>
                </div>
                <div class="col-md-5 col-md-offset-2 text-right">
                    <p id="credit"><a href="http://www.nimbusthemes.com/wordpress-themes/simple-business/">Simple Business Theme</a><br /><?php _e('Powered by', 'nimbus') ?> <a href="http://wordpress.org">WordPress</a></p>
                </div>
            </div>
        </div>
<?php wp_footer(); ?>
</body>
</html>