<?php
/**
 * The template for displaying search results.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */

get_header(); ?>

	<div id="site-content">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h2 class="page-title">
					<?php printf( __( 'Search Results for <strong>&lsquo;%s&rsquo;</strong>', 'cafe-blog' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h2>
			</header><!--end .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'search' ); ?>
			<?php endwhile; // end of the loop. ?>

			<?php freebiescafe_pagination(); ?>
			
		<?php else : ?>

			<article id="post-0" class="page no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'cafe-blog' ); ?></h1>
				</header><!--end .entry-header -->
				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'cafe-blog' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- end .entry-content -->
			</article>

		<?php endif; ?>

	</div><!-- end #site-content -->

<?php get_footer(); ?>