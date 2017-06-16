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
$rational_lite_fb_url		= get_theme_mod('rational_lite_fbook_link', 'https://www.facebook.com/gridologyEdu/');
$rational_lite_tw_url		= get_theme_mod('rational_lite_twitter_link', 'https://twitter.com/gridologyEdu/');
$rational_lite_lin_url		= get_theme_mod('rational_lite_linkedin_link', 'https://www.linkedin.com/company/gridology-education-&-technology-inc.');

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
					<?php if( $rational_lite_lin_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_lin_url ); ?>" target="_blank" title="<?php _e('LinkedIn', 'rational-lite'); ?>"><i class="fa fa-linkedin"></i></a> </div>
					<?php } ?>
					
					
				</div>
			</div>
		</div>
		<!-- <div id="footer_arrow"></div> -->
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
				<div class="copyright span8 alpha omega"><i> Copyright &copy;<?php echo date("Y"); ?> Gridology Education &amp; Technology, Inc. </i></div>
				<div class="owner span4 alpha omega"><a href="http://www.gridet.com/privacy-policy" ><i>User Privacy &amp; Term</i></a></div>
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