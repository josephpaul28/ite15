<?php
/**
 * The template used for displaying page content.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- end .entry-header -->

	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div><!-- end .entry-content -->

</article><!-- end post-<?php the_ID(); ?> -->