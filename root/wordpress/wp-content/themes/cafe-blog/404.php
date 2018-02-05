<?php
/**
 * The template for displaying 404 error pages.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */

get_header(); ?>

	<div id="site-content">
		<article id="post-0" class="page error404 not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Not Found', 'cafe-blog' ); ?></h1>
			</header><!--end .entry-header -->

			<div class="entry-content">
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'cafe-blog' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- end .entry-content -->
		</article><!-- end #post-0 -->
	</div><!-- end #site-content -->

<?php get_footer(); ?>