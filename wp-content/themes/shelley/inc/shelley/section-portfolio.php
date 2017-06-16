<?php function shelley_load_portfolio() {
	global $shelley_portfolio_header;
	global $shelley_portfolio_tagline;
	global $shelley_portfolio_link_1;	
	global $shelley_portfolio_image_1;	
	global $shelley_portfolio_title_1;	
	global $shelley_portfolio_link_2;	
	global $shelley_portfolio_image_2;	
	global $shelley_portfolio_title_2;	
	global $shelley_portfolio_link_3;	
	global $shelley_portfolio_image_3;	
	global $shelley_portfolio_title_3;	
	global $shelley_portfolio_link_4;	
	global $shelley_portfolio_image_4;	
	global $shelley_portfolio_title_4;	
	global $shelley_portfolio_link_5;	
	global $shelley_portfolio_image_5;	
	global $shelley_portfolio_title_5;	
	global $shelley_portfolio_link_6;	
	global $shelley_portfolio_image_6;	
	global $shelley_portfolio_title_6;	
?>
<div class="portfolio">
	<div class="container  wow fadeInUp">
		<h3><?php echo $shelley_portfolio_header; ?></h3>
		<h4><?php echo $shelley_portfolio_tagline; ?></h4>
	   <hr>
	<ul>
	<li>
		<a href="<?php echo $shelley_portfolio_link_1; ?>">
			<img src="<?php echo $shelley_portfolio_image_1; ?>" alt="<?php echo $shelley_portfolio_title_1; ?>">
		</a>
		<h4>
			<a href="<?php echo $shelley_portfolio_link_1; ?>"><?php echo $shelley_portfolio_title_1; ?></a>
		</h4>
	</li>
	<li>
		<a href="<?php echo $shelley_portfolio_link_2; ?>">
			<img src="<?php echo $shelley_portfolio_image_2; ?>" alt="<?php echo $shelley_portfolio_title_2; ?>">
		</a>
		<h4>
			<a href="<?php echo $shelley_portfolio_link_2; ?>"><?php echo $shelley_portfolio_title_2; ?></a>
		</h4>
	</li>
	<li>
		<a href="<?php echo $shelley_portfolio_link_3; ?>">
			<img src="<?php echo $shelley_portfolio_image_3; ?>" alt="<?php echo $shelley_portfolio_title_3; ?>">
		</a>
		<h4>
			<a href="<?php echo $shelley_portfolio_link_3; ?>"><?php echo $shelley_portfolio_title_3; ?></a>
		</h4>
	</li>
	<li>
		<a href="<?php echo $shelley_portfolio_link_4; ?>">
			<img src="<?php echo $shelley_portfolio_image_4; ?>" alt="<?php echo $shelley_portfolio_title_4; ?>">
			</a>
		<h4>
			<a href="<?php echo $shelley_portfolio_link_4; ?>"><?php echo $shelley_portfolio_title_4; ?></a>
		</h4>
	</li>
	<li>
		<a href="<?php echo $shelley_portfolio_link_5; ?>">
			<img src="<?php echo $shelley_portfolio_image_5; ?>" alt="<?php echo $shelley_portfolio_title_5; ?>">
		</a>
		<h4>
			<a href="<?php echo $shelley_portfolio_link_5; ?>"><?php echo $shelley_portfolio_title_5; ?></a>
		</h4>
	</li>
	<li>
		<a href="<?php echo $shelley_portfolio_link_6; ?>">
			<img src="<?php echo $shelley_portfolio_image_6; ?>" alt="<?php echo $shelley_portfolio_title_6; ?>">
		</a>
		<h4>
			<a href="<?php echo $shelley_portfolio_link_6; ?>"><?php echo $shelley_portfolio_title_6; ?></a>
		</h4>
	</li>
	</ul>
	</div>
</div>

<?php } ?>