<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package shelley
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<div class="col-md-12">
			<div class="copy-info">
				<p><?php _e('Copyright &copy; ', 'shelley'); ?><?php bloginfo('name'); ?></p>
			</div>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shelley' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shelley' ), 'WordPress' ); ?></a>
				<?php if (is_front_page()) {
				?>
				<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( 'http://www.purelythemes.com/shelley', 'shelley' ) ); ?>"><?php printf( esc_html__( 'Theme: %s', 'shelley' ), 'Shelley' ); ?></a>
				<?php } ?>
			</div><!-- .site-info -->
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
