<?php function shelley_load_hero() { 
 
	global $shelley_hero_tagline; 
	global $shelley_hero_title;
	global $shelley_hero_button_1_link;
	global $shelley_hero_button_1_text;
	global $shelley_hero_button_2_link;
	global $shelley_hero_button_2_text;
	global $shelley_hero_featured_image;
?>
<div class="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-6 hero-text">
				<h1><?php echo $shelley_hero_title; ?></h1>
				<p><?php echo $shelley_hero_tagline; ?></p></li>
				<span><a href="<?php echo $shelley_hero_button_1_link; ?>"><?php echo $shelley_hero_button_1_text; ?></a></span>
				<span><a href="<?php echo $shelley_hero_button_2_link; ?>"><?php echo $shelley_hero_button_2_text; ?></a></span>
			</div>
			<div class="col-md-6 wow fadeInUp hero-image">
				<img src="<?php echo $shelley_hero_featured_image; ?>">
			</div>
		</div>
	</div>
</div>

<?php } ?>