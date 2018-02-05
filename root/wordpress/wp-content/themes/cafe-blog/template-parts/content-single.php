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
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<aside class="entry-details">
			<ul>
				<?php if ( get_post_format() ) : // Show author link only for standard posts ?>
				<?php else: ?>
					<li class="post-author">
						<?php
						printf( __( '<a href="%1$s" title="%2$s">%3$s</a>, ', 'cafe-blog' ),
							esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
							sprintf( esc_attr__( 'All posts by %s', 'cafe-blog' ), get_the_author() ),
							get_the_author() );
						?>
					</li>
				<?php endif; ?>
				<li><a href="<?php the_permalink(); ?>" class="entry-date"><?php echo get_the_date(); ?></a></li>
			</ul>
		</aside><!--end .entry-details -->
	</header><!--end .entry-header -->

	<div class="entry-content">
		<?php if ( is_search() ) : // Show excerpts on search results. ?>
			<?php the_excerpt(); ?>
		<?php else : ?>
			<?php if ( has_post_thumbnail() ): ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
			<?php the_content( __( 'Read more', 'cafe-blog' ) ); ?>
			<?php wp_link_pages( array(
				'before' => '<div class="page-link">' . __( 'Pages:', 'cafe-blog' ),
				'after'  => '</div>'
			) ); ?>
		<?php endif; ?>
	</div><!-- end .entry-content -->

	<?php if ( get_post_format() ) : // Show author bio only for standard post format posts ?>
	<?php else: ?>
		<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their author bio, show it on standard posts. ?>
			<div class="author-info">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'freebiescafe_author_bio_avatar_size', 40 ) ); ?>
				<div class="author-details">
					<h3><?php the_author(); ?></h3>
				</div><!-- end .author-details -->
				<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
			</div><!-- end .author-info -->
		<?php endif; ?>
	<?php endif; ?>

	<footer class="entry-meta">
		<?php freebiescafe_entry_footer(); ?>
	</footer><!-- end .entry-meta -->

</article><!-- end post -<?php the_ID(); ?> -->
