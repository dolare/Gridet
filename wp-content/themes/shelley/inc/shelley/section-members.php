<?php function shelley_load_members() {

	global $shelley_member_image_1;
	global $shelley_member_name_1; 
	global $shelley_member_title_1;
	global $shelley_member_description_1;
	global $shelley_member_image_2;
	global $shelley_member_name_2; 
	global $shelley_member_title_2;
	global $shelley_member_description_2;
	global $shelley_member_image_3;
	global $shelley_member_name_3; 
	global $shelley_member_title_3;
	global $shelley_member_description_3;
	
?>
<div class="members">
	<div class="container">
		<div class="row team wow fadeInUp">
			<div class="col-md-4">
				<img src="<?php echo $shelley_member_image_1; ?>" class="img-responsive">
				<h3><?php echo $shelley_member_name_1; ?></h3>
				<h4><?php echo $shelley_member_title_1; ?></h4>
				<p><?php echo $shelley_member_description_1; ?></p>
			</div>
			<div class="col-md-4 wow fadeInUp">
				<img src="<?php echo $shelley_member_image_2; ?>" class="img-responsive">
				<h3><?php echo $shelley_member_name_2; ?></h3>
				<h4><?php echo $shelley_member_title_2; ?></h4>
				<p><?php echo $shelley_member_description_2; ?></p>
			</div>
			<div class="col-md-4 wow fadeInUp">
				<img src="<?php echo $shelley_member_image_3; ?>" class="img-responsive">
				<h3><?php echo $shelley_member_name_3; ?></h3>
				<h4><?php echo $shelley_member_title_3; ?></h4>
				<p><?php echo $shelley_member_description_3; ?></p>
			</div>
		</div>
	</div>
</div>

<?php } ?>