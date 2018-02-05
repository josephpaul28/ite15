<?php
/**
 * Template for displaying link post format
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>

		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-link">' . __( 'Pages:', 'cafe-blog' ),
			'after'  => '</div>'
		) ); ?>

	</div><!-- end .entry-content -->

</article><!-- end post -<?php the_ID(); ?> -->