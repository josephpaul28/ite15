<?php
/**
 * The template for displaying Comments.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
?>

<div class="comments-wrap">
	<div id="comments" class="comments-area">
		<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'cafe-blog' ); ?></p>
	</div><!-- #comments .comments-area -->
	<?php
	/* Stop the rest of comments.php from being processed,
	 * but don't kill the script entirely -- we still have
	 * to fully load the template.
	 */

	return;
	endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			
			if ( '1' === $comments_number ) {
				printf( _x( 'One Comment', 'comments title', 'cafe-blog' ) );
			} else {
				printf(
					_nx(
						'%s Comment',
						'%s Comments',
						$comments_number,
						'comments title',
						'cafe-blog'
					),
					number_format_i18n( $comments_number )
				);
			}
			?>			
		</h3>

		<ol class="commentlist">
			<?php
			/* Loop through and list the comments. Tell wp_list_comments()
			 * to use freebiescafe_comment() to format the comments.
			 * If you want to overload this in a child theme then you can
			 * define freebiescafe_comment() and that will be used instead.
			 * See freebiescafe_comment() in functions.php for more.
			 */
			wp_list_comments( array( 'callback' => 'freebiescafe_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="comment-nav">
				<div class="nav-previous"><?php previous_comments_link( __( ' &larr;  Older Comments', 'cafe-blog' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments  &rarr; ', 'cafe-blog' ) ); ?></div>
				<div class="clear"></div>
			</nav><!-- end #comment-nav -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
	// If comments are closed and there are no comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'cafe-blog' ); ?></p>
	<?php endif; ?>

	<?php comment_form(
		array(
			'title_reply'          => __( '<h3 id="reply-title">Leave a Comment</h3>', 'cafe-blog' ),
			'comment_notes_before' => __( '<p class="comment-note">Required fields are marked <span class="required">*</span>.</p>', 'cafe-blog' ),
			'comment_notes_after'  => ( '' ),
			'comment_field'        => '<div class="comment-form-comment"><label for="comment">' . _x( 'Message <span class="required">*</span>', 'noun', 'cafe-blog' ) . '</label><br/><textarea id="comment" name="comment" rows="8"></textarea></div>',
			'label_submit'         => __( 'Send Comment', 'cafe-blog' )
		)
	);
	?>

</div><!-- #comments .comments-area -->
</div><!-- .comments-wrap -->
