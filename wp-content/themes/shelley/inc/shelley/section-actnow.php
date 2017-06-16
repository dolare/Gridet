<?php function shelley_load_actnow() {
	
	global $shelley_cta_header;
	global $shelley_cta_tagline;
	global $shelley_cta_link;
	global $shelley_cta_button_text;

?>
<div class="actnow">
	<div class="container">
		<div class="col-md-8">
			<h3><?php echo $shelley_cta_header; ?></h3>
			<h4><?php echo $shelley_cta_tagline; ?></h4>
		</div>	
		<div class="col-md-4">
			<a class="cta-button" href="<?php echo $shelley_cta_link; ?>" title="<?php echo $shelley_cta_header; ?>">
				<?php echo $shelley_cta_button_text; ?>
			</a>
		</div>
		
	</div>
</div>	
<?php } ?>