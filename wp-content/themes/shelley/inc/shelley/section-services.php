<?php function shelley_load_services() {

	global $shelley_services_header; 
	global $shelley_services_tagline;
	global $shelley_services_image_1;
	global $shelley_services_title_1; 
	global $shelley_services_description_1;
	global $shelley_services_image_2;
	global $shelley_services_title_2; 
	global $shelley_services_description_2;
	global $shelley_services_image_3;
	global $shelley_services_title_3; 
	global $shelley_services_description_3;
	global $shelley_services_image_4;
	global $shelley_services_title_4; 
	global $shelley_services_description_4;
	
?>
<div class="services">
	<div class="container">
		<h3><?php echo $shelley_services_header; ?></h3>
		<h4><?php echo $shelley_services_tagline; ?></h4>
	   <hr>
		<div class="row service-items wow fadeInUp">
			<div class="col-sm-6 col-md-3">
				<img src="<?php echo $shelley_services_image_1; ?>" >
					<h3><?php echo $shelley_services_title_1; ?></h3>
					<p><?php echo $shelley_services_description_1; ?></p>
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="<?php echo $shelley_services_image_2; ?>" >
				<h3><?php echo $shelley_services_title_2; ?></h3>
				<p><?php echo $shelley_services_description_2; ?></p>
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="<?php echo $shelley_services_image_3; ?>" >
				<h3><?php echo $shelley_services_title_3; ?></h3>
				<p><?php echo $shelley_services_description_3; ?></p>
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="<?php echo $shelley_services_image_4; ?>" >
				<h3><?php echo $shelley_services_title_4; ?></h3>
				<p><?php echo $shelley_services_description_4; ?></p>
			</div>
		</div>
	</div>
</div>
<?php } ?>