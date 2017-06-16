<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package shelley
 */

get_header();
/**
 * Load Shelley Variables
 */
 get_template_part ('inc/shelley', 'variables' );

/**
 * Load Shelley Frontpage View
 */
 get_template_part( 'inc/shelley', 'frontpage' ); 

?>
	
		
<div class="loop-wrap">		
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="masonry-content">
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php get_template_part( 'template-parts/content', 'excerpt-frontpage' ); ?>
	
						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>
				</div>
		</main><!-- #main -->
		
	</div><!-- #primary -->
</div>
<div class="sidebar-wrap">	
	<div class="container">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
	
</div>