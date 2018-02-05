<?php
/**
 * The default template for displaying content
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php if ( is_sticky() ) { ?>
			<div class="featured-label"><?php _e( 'Featured', 'cafe-blog' ); ?></div>
		<?php } ?>

		<a href="<?php the_permalink(); ?>"><?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?></a>

		<aside class="entry-details">
			<ul>
				<li class="post-author">
					<?php
					printf( __( '<a href="%1$s" title="%2$s">%3$s</a>, ', 'cafe-blog' ),
						esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
						sprintf( esc_attr__( 'All posts by %s', 'cafe-blog' ), get_the_author() ),
						get_the_author() );
					?>
				</li>
				<li class="entry-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></li>
			</ul>
		</aside><!--end .entry-details -->
	</header><!--end .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
			<?php the_content(); ?>

		<?php else : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>


		<?php wp_link_pages( array(
			'before' => '<div class="page-link">' . __( 'Pages:', 'cafe-blog' ),
			'after'  => '</div>'
		) ); ?>

	</div><!-- end .entry-content -->

	<footer class="entry-meta">
		<?php freebiescafe_entry_footer(); ?>
	</footer><!-- end .entry-meta -->

</article><!-- end post -<?php the_ID(); ?> -->