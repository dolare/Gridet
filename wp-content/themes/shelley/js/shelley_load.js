new WOW().init();

jQuery(document).ready(function() {
	
	jQuery('.main-navigation .menu').slicknav({
		label:'',
		prependTo:'.site-branding'
	});
	jQuery("body").queryLoader2();
  jQuery('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
		jQuery('.masonry-content').masonry({
			itemSelector: '.masonry-item',
			columnWidth: 100,
			isAnimated: true
		});
});