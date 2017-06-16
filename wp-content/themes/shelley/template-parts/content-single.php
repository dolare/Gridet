<?php
/**
 * Template part for displaying single posts.
 *
 * @package shelley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php shelley_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
		<?php if ( has_post_thumbnail() ) {	?>
			<div class="featured-image">
				<?php the_post_thumbnail(); ?>
			</div>		
		<?php } ?> 
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shelley' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php shelley_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

