<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="container-fluid feature_section5">	
	<div class="container">
		<?php $wl_theme_options=weblizar_get_options();;
		if($wl_theme_options['blog_title'] !='') { echo "<h2 class='guardian_blog_title'>".esc_attr($wl_theme_options['blog_title']). "</h2><br>"; } ?>
		<?php if ( have_posts()) {
		$i=1;
		$args = array( 'post_type' => 'post','posts_per_page'=>3, 'post__not_in' => get_option( 'sticky_posts' ));		
		$post_type_data = new WP_Query( $args );
		while($post_type_data->have_posts()):
		$post_type_data->the_post(); 	 ?>		
		<div class="col-md-4 col-sm-6 one_third animate" data-anim-type="fadeInUp" <?php if($i==3) { echo "id='nth_child_service'"; } ?>>    
			<h4 ><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>        
			<?php if(has_post_thumbnail()): 						
				$class=array('class'=>'enigma_img_responsive'); 
				the_post_thumbnail('home_post_thumb', $class); 
			endif; ?>      
			<p><?php echo substr(get_the_excerpt(),0,$wl_theme_options['excerpt_blog'] ); ?></p><br /> 
			<a href="<?php the_permalink(); ?>" class="lfour"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php _e('Read More', 'guardian'); ?></a>        
		</div>
		<?php  $i++; endwhile; 
			} else { ?>		
		<div class="col-md-4 col-sm-6 one_third animate" data-anim-type="fadeInUp">    
			<h4 ><?php _e('The point of using psum is that has more normal letters ', 'guardian'); ?></h4>        
			<img src="http://placehold.it/361x180" alt="" class="img_left1" />        
			<p><?php _e('Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.', 'guardian'); ?></p>
			<br />
			<a href="#" class="lfour"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php _e('Read More', 'guardian'); ?></a>        
		</div>
		
		<div class="col-md-4 col-sm-6 one_third animate" data-anim-type="fadeInUp">    
			<h4 class="white"><?php _e('Will cover many web sites still in their infancy websites', 'guardian'); ?></h4>        
			<img src="http://placehold.it/361x180" alt="" class="img_left1" />        
			<p><?php _e('Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.', 'guardian'); ?></p>
			<br />
			<a href="#" class="lfour"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php _e('Read More', 'guardian'); ?></a>
		</div>
		
		<div class="col-md-4 col-sm-6 one_third last animate" data-anim-type="fadeInUp">		
			<h4 class="white"><?php _e('The point of using psum is that has more normal letters', 'guardian'); ?></h4>			
			<img src="http://placehold.it/361x180" alt="" class="img_left1" />			
			<p><?php _e('Lorem Ipsum as their default model the and a search for lorem ipsum will uncover many web sites the stilin infancy versions have evolved over the years.', 'guardian'); ?></p>
			<br />
			<a href="#" class="lfour"><i class="fa fa-chevron-circle-right"></i>&nbsp; <?php _e('Read More', 'guardian'); ?></a>			
		</div>
		<?php } ?>
	</div>
</div><!-- end blog section5 -->
<div class="clearfix"></div>
