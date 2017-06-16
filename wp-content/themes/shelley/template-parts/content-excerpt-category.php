<?php
/**
 * Template part for displaying posts.
 *
 * @package shelley
 */

?>
<div class="col-md-4 col-sm-6 masonry-item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="featured-image">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?> 
		</div>
	
		<div class="masonry-blog">
			<header class="entry-header">
				<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php shelley_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_excerpt();
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shelley' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
	</article><!-- #post-## -->
</div>