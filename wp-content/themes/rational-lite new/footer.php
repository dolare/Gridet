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

	<div id="footer_top" style="background: linear-gradient(180deg, rgba(44,62,80,0.9) 10%, rgba(44,62,80,0.7) 100%), url('<?php echo get_template_directory_uri(); ?>/images/contact-map.jpg') no-repeat center 40%;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; padding-bottom: 0">
		<!-- background: linear-gradient(0deg, rgba(44,62,80,0.4) 0%, rgba(44,62,80,0.1) 50%), url('<?php echo get_template_directory_uri(); ?>/images/sayagata-400px.png') repeat top left; -->
		<div class="container clearfix">
			<div class="row-fluid">

				<div class="col-sm-6 pull-left push-30-t" style="margin-bottom: 80px;">
					<img src="<?php echo get_template_directory_uri(); ?>/images/G-rid-6 copy REVERSED.png" height="60" alt="" class="push-10">
				    <p style="font-size:16px; padding-left:35px; color: #cccccc;" class="flat-text-shadow">Copyright &copy; <?php echo date("Y"); ?></br> Gridology Education &amp; Technology, Inc.</p>

				</div>

				<div class="col-sm-6 push-30-t">
					<div class="social-icons text-center pull-right">
				    <h5 class="text-uppercase push-30-t push-20 flat-text-shadow" style="color:#cccccc; font-family: 'Helvetica Neue','Open Sans',Helvetica,Arial,sans-serif; ">Stay Connected</h5>
					<?php if( $rational_lite_fb_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_fb_url ); ?>" target="_blank" title="<?php _e('Facebook', 'rational-lite'); ?>"><i class="fa fa-facebook flat-text-shadow"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_tw_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_tw_url ); ?>" target="_blank" title="<?php _e('Twitter', 'rational-lite'); ?>"><i class="fa fa-twitter flat-text-shadow"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_lin_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_lin_url ); ?>" target="_blank" title="<?php _e('LinkedIn', 'rational-lite'); ?>"><i class="fa fa-linkedin flat-text-shadow"></i></a> </div>
					<?php } ?>
					
					<br/></br>
					<a href="http://www.gridet.com/privacy-policy" class="flat-text-shadow text-center" style="font-size:16px; color: #cccccc;">User Privacy &amp; Term</a>

				</div>
				</div>

				<!-- Footer Follow Us Section Start -->
				
			</div>
		</div>
		<!-- <div id="footer_arrow"></div> -->
	</div>

	<!-- <div class="third_wrapper" style="margin:0; padding:0">
		<div class="container">
			<div class="row" style="margin-bottom: 5px">
				<div class="col-sm-6 pull-left push-10-t">
					<div class="copyright alpha omega" style="color: #2C3E50;font-size: 12px;font-family:'Helvetica Neue','Open Sans',Helvetica,Arial,sans-serif;">Copyright &copy;<?php echo date("Y"); ?> Gridology Education &amp; Technology, Inc. </div>

				</div>

				<div class="col-sm-6 pull-right flat-text-blue push-10-t">
					<div class="owner alpha omega" style="color: #2C3E50;font-size: 12px;font-family:'Helvetica Neue','Open Sans',Helvetica,Arial,sans-serif;"><a href="http://www.gridet.com/privacy-policy" ><i>User Privacy &amp; Term</i></a></div>
				</div>

				
				
			</div>
		</div>
	</div> -->

	<!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="<?php _e('Back To Top', 'rational-lite') ?>" id="backtop" style="background-color:#2980B9;"></a>
	<?php wp_footer(); ?>
	

</body>
</html>