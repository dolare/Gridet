<?php
/**
 * Theme upsell page 
 *
 *
 * @package shelley
 */
?>

<?php
function shelley_upsell_page() {
	add_theme_page( __('More Themes', 'shelley'), __('More Themes', 'shelley'), 'administrator', 'purelythemes', 'shelley_upsell_view' );

}
add_action( 'admin_menu', 'shelley_upsell_page', 20 );

function shelley_upsell_view() {
	// Define Variables
	$directory_uri = get_template_directory_uri();
	?>
<div class="wrap">
		<h2><?php _e('More themes by the author', 'shelley'); ?></h2>
		<p><?php _e('Thanks for downloading one of our themes, we really appreciate it! <br> If you would like to browse some more of our WordPress Themes, donate a penny or two for all the hard work we do, or just  you can visit us at purelythemes.com', 'shelley'); ?></p> 
		<hr />
	<div class="theme-browser">
		<div class="themes">
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/sylvia.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('Sylvia', 'shelley'); ?></h3>
				<div class="theme-actions">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" class="button button-primary" target="_blank"><?php _e('Read More', 'shelley'); ?></a>
				</div>
			</div>	
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/skylar.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('Skylar', 'shelley'); ?></h3>
				<div class="theme-actions">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" class="button button-primary" target="_blank"><?php _e('See Demo', 'shelley'); ?></a>
				</div>
			</div>	
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/emporium.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('Emporium', 'shelley'); ?></h3>
				<div class="theme-actions">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" class="button button-primary" target="_blank"><?php _e('See Demo', 'shelley'); ?></a>
				</div>
			</div>	
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/stella.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('stella', 'shelley'); ?></h3>
				<div class="theme-actions"><a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank" class="button button-primary"><?php _e('See Demo', 'shelley'); ?></a></div>
			</div>	
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/shopping.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('purelyShopping', 'shelley'); ?></h3>
				<div class="theme-actions">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank" class="button button-primary"><?php _e('See Demo', 'shelley'); ?></a>
				</div>
			</div>	
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/blue.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('PurelyBlue', 'shelley'); ?></h3>
				<div class="theme-actions">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank" class="button button-primary"><?php _e('See Demo', 'shelley'); ?></a>
				</div>
			</div>	
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/glider.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('pGlider', 'shelley'); ?></h3>
				<div class="theme-actions">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank" class="button button-primary"><?php _e('See Demo', 'shelley'); ?></a>
				</div>
			</div>	
			<div class="theme">
				<div class="theme-screenshot">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank"><img src="<?php echo $directory_uri; ?>/inc/img/selma.jpg" alt=""></a>
				</div>
				<h3 class="theme-name"><?php _e('Selma', 'shelley'); ?></h3>
				<div class="theme-actions">
					<a href="<?php echo esc_url( __('http://www.purelythemes.com/wordpress-themes', 'shelley'));?>" target="_blank" class="button button-primary"><?php _e('See Demo', 'shelley'); ?></a>
				</div>
			</div>	
		</div>
	</div>	
</div>
	<?php // Close shelley_upsell_view()
} 
	?>