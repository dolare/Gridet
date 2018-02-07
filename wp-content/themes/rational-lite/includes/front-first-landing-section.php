<?php if( 'none' != get_theme_mod('rational_lite_rat_first_section', 'none') ) {
	$the_query = new WP_Query( array( 'page_id' => get_theme_mod('rational_lite_rat_first_section') ) );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="section1" class="landing-section skt-section skt-default-page">
			<div class="container" >
				<div class="row-fluid">
					<div class="span12">
						<div class="landing-page-title">
							<h3 class="text-white"><?php the_title(); ?></h3>
							<span class="border_center border-white"></span>
						</div>

						<div class="landing-page-content text-white">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php break;
		endwhile;
		wp_reset_postdata();
	endif;
} else { ?>
	<div id="section1" class="landing-section skt-section skt-default-page">
			<div class="container" >
				<div class="row-fluid">
					<div class="span12">
						<div class="landing-page-content text-white">
							<?php echo '<div class="clearfix"><div class="about-contentbox span7 skt_animate_when_almost_visible skt_left-to-right"><h4 class="about-heading">'.__('ABOUT','rational-lite').'</h4><div class="about-bdr"></div>
							<p>'.__('We offer a CONTINUOUS CONSULTING AND REPORTING SaaS service to help businesses to deeply understand their customers and peers, so that clients can stay on top of the competition at all times.', 'rational-lite').'</p>
							<p>'.__('Currently, we are primarily partnering with Executive Education and Professional Development course providers, but we do look forward to the opportunity to diversify our offerings by catering to a greater range of industries.', 'rational-lite').'</p>
							<div id="about-read-more"><a class="button-link large-button alignleft" href="#"><span>'.__('LEARN MORE', 'rational-lite').'</span></a></div></div>
							<div class="image-wrapper span5 skt_animate_when_almost_visible skt_right-to-left">
							<img src="http://www.gridet.com/wp-content/uploads/2018/01/iphone.png" width="294" height="487"></div></div>'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>