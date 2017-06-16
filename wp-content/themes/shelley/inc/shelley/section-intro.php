<?php function shelley_load_intro() { 

	global $shelley_intro_image;
	global $shelley_intro_title;
	global $shelley_intro_paragraph_1;
	global $shelley_intro_paragraph_2;
?>
<div class="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-6 wow fadeInUp">
				<img src="<?php echo $shelley_intro_image; ?>">
			</div>
			<div class="col-md-6 intro-text">
				<h3><?php echo $shelley_intro_title; ?></h3>
				<p>	<?php echo $shelley_intro_paragraph_1; ?></p>
				<p>	<?php echo $shelley_intro_paragraph_2; ?></p>
			</div>
		</div>
	</div>
</div>
<?php } ?>