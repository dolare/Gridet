<?php get_header(); 
$wl_theme_options = weblizar_get_options(); 
if ($wl_theme_options['_frontpage']=="on" && is_front_page())
{ ?>
<!-- Slider ======================================= -->
<?php if($wl_theme_options['slider_image_speed']!='')
	{
		
	echo '<script type="text/javascript">
		jQuery(document ).ready(function( $ ) {
		jQuery("#myCarousel" ).carousel({
			interval:'.$wl_theme_options['slider_image_speed'].'

		    });
	   });
	</script>';
	 
	} ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>        
        <li data-target="#myCarousel" data-slide-to="2"></li>        
      </ol>
      <div class="carousel-inner">		
	  <?php if($wl_theme_options['slide_image'] !='') { ?> 
        <div class="item active">
			<img src="<?php echo esc_url($wl_theme_options['slide_image']); ?>" class="img-responsive" alt="First slide">	
			<div class="container">
				<div class="carousel-caption">	
				<?php if($wl_theme_options['slide_title'] !='') { ?> <p class="guardian_slide_title"><strong><?php echo  esc_attr($wl_theme_options['slide_title']); ?></strong></p>	<?php } ?>
				<?php if($wl_theme_options['slide_desc'] !='') { ?>
				<p class="guardian_slide_desc"><?php echo  get_theme_mod('slide_desc' , $wl_theme_options['slide_desc']); ?></p>
				<?php } ?>
				<?php if($wl_theme_options['slide_desc'] !='') { ?>
				<p><a class="btn btn-lg btn-primary" target="_blank" href="<?php if($wl_theme_options['slide_btn_link'] !='') { echo esc_url($wl_theme_options['slide_btn_link']); }  ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text']); ?></a></p>
				<?php } ?>
				</div>
			</div>
        </div>
		<?php } ?>
		<?php if($wl_theme_options['slide_image_1'] !='') { ?> 
		<div class="item ">
			<img src="<?php echo esc_url($wl_theme_options['slide_image_1']); ?>" class="img-responsive" alt="Second slide">	
			<div class="container">
				<div class="carousel-caption">	
				<?php if($wl_theme_options['slide_title_1'] !='') { ?> <p class="guardian_slide_title_1"><strong><?php echo  esc_attr($wl_theme_options['slide_title_1']); ?></strong></p>	<?php } ?>
				<?php if($wl_theme_options['slide_desc_1'] !='') { ?>
				<p class="guardian_slide_desc_1"><?php echo  get_theme_mod('slide_desc_1' , $wl_theme_options['slide_desc_1']); ?></p>
				<?php } ?>
				<?php if($wl_theme_options['slide_desc_1'] !='') { ?>
				<p><a class="btn btn-lg btn-primary" target="_blank" href="<?php if($wl_theme_options['slide_btn_link_1'] !='') { echo esc_url($wl_theme_options['slide_btn_link_1']); }  ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_1']); ?></a></p>
				<?php } ?>
				</div>
			</div>
        </div>
		<?php } ?>
		<?php if($wl_theme_options['slide_image_2'] !='') { ?> 
		<div class="item ">
			<img src="<?php echo esc_url($wl_theme_options['slide_image_2']); ?>" class="img-responsive" alt="First slide">	
			<div class="container">
				<div class="carousel-caption">	
				<?php if($wl_theme_options['slide_title_2'] !='') { ?> <p class="guardian_slide_title_2"><strong><?php echo  esc_attr($wl_theme_options['slide_title_2']); ?></strong></p>	<?php } ?>
				<?php if($wl_theme_options['slide_desc_2'] !='') { ?>
				<p class="guardian_slide_desc_2"><?php echo get_theme_mod('slide_desc_2' , $wl_theme_options['slide_desc_2']); ?></p>
				<?php } ?>
				<?php if($wl_theme_options['slide_desc_2'] !='') { ?>
				<p><a class="btn btn-lg btn-primary" target="_blank" href="<?php if($wl_theme_options['slide_btn_link_2'] !='') { echo esc_url($wl_theme_options['slide_btn_link_2']); }  ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_2']); ?></a></p>
				<?php } ?>
				</div>
			</div>
        </div>
		<?php } ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
 </div><!-- /.carousel -->



<?php 
if($sections = json_decode(get_theme_mod('home_reorder'),true)) {
	  foreach ($sections as $section) {
		$data =$section.'_home';
		if($wl_theme_options[$data]=="on") {
		get_template_part('home', $section);
		}
	}
} else {
	if($wl_theme_options['services_home']=='on') {
	get_template_part('home','services'); 
	}
	if($wl_theme_options['blog_home']=='on') {
	get_template_part('home','blog');
	}
} ?>

<?php 
get_footer();
}
else 
{       
if(is_page()){
get_template_part('page');
} else {
get_template_part('index');
}
} ?>