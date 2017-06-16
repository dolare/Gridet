<?php function shelley_load_testimonials() {

	global $shelley_testimonials_header; 
	global $shelley_testimonials_tagline; 
	global $shelley_testimonials_image_1;
	global $shelley_testimonials_review_1;
	global $shelley_testimonials_name_1;
	global $shelley_testimonials_title_1;
	global $shelley_testimonials_image_2;
	global $shelley_testimonials_review_2;
	global $shelley_testimonials_name_2;
	global $shelley_testimonials_title_2;
	global $shelley_testimonials_image_3;
	global $shelley_testimonials_review_3;
	global $shelley_testimonials_name_3;
	global $shelley_testimonials_title_3;
	global $shelley_testimonials_image_4;
	global $shelley_testimonials_review_4;
	global $shelley_testimonials_name_4;
	global $shelley_testimonials_title_4;

?>
<div class="testimonials">
	<div class="container">
        <h3><?php echo $shelley_testimonials_header; ?></h3>
		<h4><?php echo $shelley_testimonials_tagline; ?></h4>
        <hr>            

        <div class="row wow fadeInUp">
            <div class="col-md-6">
                <div class="clientsphoto">
                    <img src="<?php echo $shelley_testimonials_image_1; ?>" alt="">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p><?php echo $shelley_testimonials_review_1; ?></p>                        
                    </blockquote>
                    <h5><?php echo $shelley_testimonials_name_1; ?></h5>
                    <p><?php echo $shelley_testimonials_title_1; ?></p>
                </div>                
            </div>

            <div class="col-md-6">
               <div class="clientsphoto">
                    <img src="<?php echo $shelley_testimonials_image_2; ?>" alt="">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p><?php echo $shelley_testimonials_review_2; ?></p>                        
                    </blockquote>
                    <h5><?php echo $shelley_testimonials_name_2; ?></h5>
                    <p><?php echo $shelley_testimonials_title_2; ?></p>
                </div>                
            </div>
			
            <div class="col-md-6">
                 <div class="clientsphoto">
                    <img src="<?php echo $shelley_testimonials_image_3; ?>" alt="">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p><?php echo $shelley_testimonials_review_3; ?></p>                        
                    </blockquote>
                    <h5><?php echo $shelley_testimonials_name_3; ?></h5>
                    <p><?php echo $shelley_testimonials_title_3; ?></p>
                </div>                
            </div>
            <div class="col-md-6">
                <div class="clientsphoto">
                    <img src="<?php echo $shelley_testimonials_image_4; ?>" alt="">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p><?php echo $shelley_testimonials_review_4; ?></p>                        
                    </blockquote>
                    <h5><?php echo $shelley_testimonials_name_4; ?></h5>
                    <p><?php echo $shelley_testimonials_title_4; ?></p>
                </div>                
            </div>
			
        </div>        
    </div>
</div>
<?php } ?>