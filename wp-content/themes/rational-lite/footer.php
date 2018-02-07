<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
?>

<div class="clearfix"></div>
</div>
<!-- #main --> 
<?php
$rational_lite_fb_url		= get_theme_mod('rational_lite_fbook_link', '#');
$rational_lite_tw_url		= get_theme_mod('rational_lite_twitter_link', '#');
$rational_lite_pin_url		= get_theme_mod('rational_lite_pinterest_link', '#');
$rational_lite_drib_url		= get_theme_mod('rational_lite_dribbble_link', '#');
$rational_lite_tumb_url		= get_theme_mod('rational_lite_tumblr_link', '#');
$rational_lite_skype_url		= get_theme_mod('rational_lite_skype_link', '#');
$rational_lite_instagram_url		= get_theme_mod('rational_lite_instagram_link', '#');
$rational_lite_vk_url		= get_theme_mod('rational_lite_vk_link', '#');
$rational_lite_whatsapp_url		= get_theme_mod('rational_lite_whatsapp_link', '#');
$rational_lite_googleplus_url		= get_theme_mod('rational_lite_googleplus_link', '#');
?>

<!-- #footer -->
<div id="footer" class="skt-section">

	<div id="footer_top">
		<div class="container clearfix">
			<div class="row-fluid">
				<!-- Footer Follow Us Section Start -->
				<div class="social-icons text-center">
					<?php if( $rational_lite_fb_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_fb_url ); ?>" target="_blank" title="<?php _e('Facebook', 'rational-lite'); ?>"><i class="fa fa-facebook"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_tw_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_tw_url ); ?>" target="_blank" title="<?php _e('Twitter', 'rational-lite'); ?>"><i class="fa fa-twitter"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_pin_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_pin_url ); ?>" target="_blank" title="<?php _e('Pinterest', 'rational-lite'); ?>"><i class="fa fa-pinterest"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_drib_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_drib_url ); ?>" target="_blank" title="<?php _e('dribbble', 'rational-lite'); ?>"><i class="fa fa-dribbble"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_tumb_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_tumb_url ); ?>" target="_blank" title="<?php _e('tumblr', 'rational-lite'); ?>"><i class="fa fa-tumblr"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_skype_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_skype_url ); ?>" target="_blank" title="<?php _e('skype', 'rational-lite'); ?>"><i class="fa fa-skype"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_instagram_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_instagram_url ); ?>" target="_blank" title="<?php _e('instagram', 'rational-lite'); ?>"><i class="fa fa-instagram"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_vk_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_vk_url ); ?>" target="_blank" title="<?php _e('vk', 'rational-lite'); ?>"><i class="fa fa-vk"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_whatsapp_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_whatsapp_url ); ?>" target="_blank" title="<?php _e('whatsapp', 'rational-lite'); ?>"><i class="fa fa-whatsapp"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_googleplus_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_googleplus_url ); ?>" target="_blank" title="<?php _e('googleplus', 'rational-lite'); ?>"><i class="fa fa-google-plus"></i></a> </div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div id="footer_arrow"></div>
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
				<div class="copyright span6"> <?php echo wp_kses_post( get_theme_mod( 'rational_lite_copyright', __('Proudly Powered by WordPress', 'rational-lite') ) ); ?> </div>
				<div class="owner span6"><?php printf( __( '%s Theme By %s', 'rational-lite' ), 'Rational', '<a href="'.esc_url('https://sketchthemes.com').'" title="SketchThemes">SketchThemes</a>' ); ?></a></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="<?php _e('Back To Top', 'rational-lite') ?>" id="backtop"></a>
	<?php wp_footer(); ?>
</body>
</html>