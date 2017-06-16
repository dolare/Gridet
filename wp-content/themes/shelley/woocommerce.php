<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package shelley
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="woocommerce-content">
				<?php woocommerce_content(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<div class="sidebar-wrap">
	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
