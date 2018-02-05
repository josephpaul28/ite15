<?php
/**
 * The template for displaying Archive pages.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
get_header();
?>

<div id="site-content">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<?php
			the_archive_title( '<h2 class="page-title">', '</h2>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- end .page-header -->

		<?php rewind_posts(); ?>

		<?php /* Start the Loop */ ?>
		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; // end of the loop. ?>

		<?php freebiescafe_pagination(); ?>

	<?php else : ?>

		<article id="post-0" class="post no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e('Nothing Found', 'cafe-blog'); ?></h1>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cafe-blog'); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	<?php endif; ?>

</div><!-- end #site-content -->

<?php get_footer(); ?>