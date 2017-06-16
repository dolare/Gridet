<?php function shelley_load_counters() {
	global $shelley_counters_header;
	global $shelley_counters_tagline;
	global $shelley_counters_image_1;
	global $shelley_counters_title_1;
	global $shelley_counters_value_1;
	global $shelley_counters_image_2;
	global $shelley_counters_title_2;
	global $shelley_counters_value_2;
	global $shelley_counters_image_3;
	global $shelley_counters_title_3;
	global $shelley_counters_value_3;
	
?>
	<div class="counters">
			<div class="container">
				<h3><?php echo $shelley_counters_header; ?></h3>
				<h4><?php echo $shelley_counters_tagline; ?></h4>
		   <hr>
				<div class="row counter-items wow fadeInUp">
					<div class="col-md-4">
						<img src="<?php echo $shelley_counters_image_1; ?>" alt="<?php echo $shelley_counters_title_1; ?>">
						<span class="counter"><?php echo $shelley_counters_value_1; ?></span>
						<h4><?php echo $shelley_counters_title_1; ?></h4>
					</div>
					<div class="col-md-4">
						<img src="<?php echo $shelley_counters_image_2; ?>" alt="<?php echo $shelley_counters_title_2; ?>">
						<span class="counter"><?php echo $shelley_counters_value_2; ?></span>
						<h4><?php echo $shelley_counters_title_2; ?></h4>
					</div>	
					<div class="col-md-4">
						<img src="<?php echo $shelley_counters_image_3; ?>" alt="<?php echo $shelley_counters_title_3; ?>">
						<span class="counter"><?php echo $shelley_counters_value_3; ?></span>
						<h4><?php echo $shelley_counters_title_3; ?></h4>
					</div>
				</div>
			</div>
	</div>
<?php } ?>