<?php
/***** Theme Info Page *****/
if (!function_exists('enigma_info_page')) {
	function enigma_info_page() {
	$page1=add_theme_page(__('Enigma Parallax', 'enigma-parallax'), __('Premium Theme Features', 'enigma-parallax'), 'edit_theme_options', 'enigma', 'enigmadisplay_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'weblizar_admin_info');
	}
}
add_action('admin_menu', 'enigma_info_page');
function weblizar_admin_info(){
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin.css');
	wp_enqueue_style('font-awesome',  get_template_directory_uri() .'/css/font-awesome-4.4.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrp',  get_template_directory_uri() .'/css/bootstrap.css');
	
}
if (!function_exists('enigmadisplay_theme_info_page')) {
	function enigmadisplay_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
 <div class="theme-info-wrap">
  <!-- Theme Premium Features  -->
	<div class="container-fluid">
	<div class="col-md-12">
        <h1 class="section-title">ENIGMA PREMIUM THEMES FEATURES </h1>	
	    <p class="section-description"> We create awesome themes which are the perfect solution for your website project. </p>
	</div>
	   <div class="col-md-12">
        <div class="container services">
		    <div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-reorder"></i>
				<h3> ENIGMA PARALLAX INCLUDED </h3>
				 <p class="desc">Enigma Parallax version is ONE PAGE LANDING PAGE of Enigma Theme.</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-language"></i>
				<h3> WPML COMPATIBLE </h3>
				 <p class="desc">All our themes are WPML translation ready including Enigma.</p>
				 </div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-tablet"></i>
				<h3> RESPONSIVE DESIGN </h3>
				 <p class="desc">Weblizar Pro adapts to different screen sizes so that your website will work (and be optimized for) iPhones, iPads and other mobile devices.</p>
		    </div>
			</div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-eye"></i>
				<h3> RATINA EYE </h3>
				 <p class="desc">Ratina ready - iOS Competible. </p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-html5"></i>
				<h3> HTML5 & CSS3 </h3>
				 <p class="desc">Modern HTML5 / CSS3 Elements.</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-css3"></i>
				<h3> 18 PAGE TEMPLATE </h3>
				 <p class="desc">A very large number of Page Templates for various usage.</p>
		    </div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-globe"></i>
				<h3> MULTI PURPOSE </h3>
				 <p class="desc">Theme can be used for various purpose like : Corporate - Healthcare - Hotels - RealEstate - Pharma etc. </p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-th"></i>
				<h3> UNLIMITED COLOR SCHEME </h3>
				 <p class="desc">!0 Predifined color schemes including Custom Color picker so that you can create your own color layout .</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-file-text-o"></i>
				<h3> WELL DOCUMENTED </h3>
				 <p class="desc">Our all themes have well docementation so that you could use our themes easily.</p>
			</div>
		    </div>
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-file-photo-o"></i>
				<h3> 2 IMAGE LIGHT BOX </h3>
				 <p class="desc">Portfolio Lightbox on Home Page and Portfolio Template.</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-cubes"></i>
				<h3> ISOTOPE EFFECTS   </h3>
				 <p class="desc">Most Popular ISOTOPE Effects for Portfolio and Blog.</p>
				 </div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-calendar"></i>
				<h3> COMING SOON MODE </h3>
				 <p class="desc">You can HIDE your website untill the site is Complete, Using COMING SOON MODE.</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-gears"></i>
				<h3> THEME OPTION PANEL </h3>
				 <p class="desc">Easily customizable settings through Theme-Options.</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-plus-square-o"></i>
				<h3> CUSTOM SHOTCODES </h3>
				 <p class="desc">Variety of Shortcodes.</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-thumbs-up"></i>
				<h3> BROWSER COMPATIBILITY </h3>
				 <p class="desc">Theme supports all leading web browsers.</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-check-square-o"></i>
				<h3> FAST & FRIENDLY SUPPORT </h3>
				 <p class="desc">Dedicated Support via email / forum / skype / teamviewer .</p>
			</div>
		    </div>
			
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-shopping-cart"></i>
				<h3> WOOCOMMERCE COMPATIBLE </h3>
				 <p class="desc">You can create your own online Store using WOOCOMMERCE Plugin and ENIGMA Theme.</p>
			</div>
		    </div>
			<div class="col-md-4 detail">
			<div class="icon">
				<i class="fa fa-dollar"></i>
				<h3>ONE TIME PAYMENT </h3>
				 <p class="desc">No Recurring Billing , One Payment and its done.</p>
			</div>
		    </div>
	    </div>
	   </div>
	</div>
	
	<div class="container-fluid">
	<div class="col-md-12">
        <h1 class="section-title">pricing </h1>	
	    <p class="section-description"> Our price really cost to your need </p>
	</div>
	
	<div class="container">
	<div class=" pricing-table pricing-three-column">
	    <div class="col-md-4">
            <div class="plan">  
			    <div class="plan-name"> 
				    <h2> Enigma Pro </h2>
					<p><span> Feature Sets </span></p>
				</div>
				<ul> 
				<li class="plan-feature"> Front Page</li>
				<li class="plan-feature"> Parallax Design </li>
				<li class="plan-feature"> Theme Option Panel</li>
				<li class="plan-feature"> Unlimited Color Skins</li>
				<li class="plan-feature"> Multiple Bakground Patterns</li>
				<li class="plan-feature"> Multiple Theme Tempplates</li>
				<li class="plan-feature"> 6 Portfolio Layout</li>
				<li class="plan-feature"> 10 Page Layout</li>
				<li class="plan-feature"> 6 Blog Layout</li>
				<li class="plan-feature"> Multilingual</li>
				<li class="plan-feature"> Complete Doceumentation</li>
				<li class="plan-feature"> 2 Service Page Template</li>
				<li class="plan-feature"> About Us Page Template</li>
				<li class="plan-feature"> Contact Us Page Template</li>
				<li class="plan-feature"> Custom Shortcodes</li>
				</ul>	
			</div>
        </div>		
		
		 <div class="col-md-4">
            <div class="plan">  
			    <div class="plan-name"> 
				    <h2> Premium </h2>
					<p><span> Get this in just @$39 </span></p>
				</div>
				<ul> 
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"> 
				<a href="http://demo.weblizar.com/preview/#enigma" target="_new" class="demo_button"><i class="fa fa-check-circle"></i> Demo</a>
				<a href="http://weblizar.com/amember/signup/enigma" target="_new" class="purchase_button"><i class="fa fa-shopping-cart"></i> Buy</a>
				</li>
				</ul>	
			</div>
        </div>	
		
		 <div class="col-md-4">
            <div class="plan">  
			    <div class="plan-name"> 
				    <h2> Free </h2>
					<p><span> $0 </span></p>
				</div>
				<ul> 
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"> 
				<a href="https://wordpress.org/themes/enigma-parallax/" target="_new" class="demo_button"><i class="fa fa-download"></i> Download</a>
				</li>
				</ul>	
			</div>
        </div>	
	</div>
	</div>
	</div>
			
			<div id="theme-author">
				<p><?php printf(__('%1s is proudly brought to you by %2s. If you like this WordPress theme, %3s.', 'enigma-parallax'),
					$theme_data->Name,
					'<a target="_blank" href="https://weblizar.com/" title="weblizar">Weblizar</a>',
					'<a target="_blank" href="https://wordpress.org/support/view/theme-reviews/enigma-parallax" title="Enigma Review">' . __('rate it', 'enigma-parallax') . '</a>'); ?>
				</p>
			</div>
 </div> <?php
	}
}
?>