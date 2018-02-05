<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function freebiescafe_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Cafe Blog, use a find and replace
	 * to change 'cafe-blog' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cafe-blog', get_theme_file_path( 'languages' ) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in 2 locations.
	register_nav_menus( array(
		'primary'   => __( 'Main Menu', 'cafe-blog' ),
		'secondary' => __( 'Footer Menu', 'cafe-blog' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image',
		'video',
		'audio',
		'quote',
		'link',
		'status',
	) );

	// Enable support for Custom Logo. See https://codex.wordpress.org/Theme_Logo
	add_theme_support( 'custom-logo', array(
		'width'       => 300,
		'height'      => 100,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme support for Jetpack Infinite Scroll
	add_theme_support( 'infinite-scroll', array(
		'container' => 'site-content',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'freebiescafe_custom_background_args', array(
		'default-color' => 'f9f9f9',
		'default-image' => '',
	) ) );
}

/**
 * Register widget areas
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function freebiescafe_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cafe-blog' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets will appear in the left sidebar, below the main navigation.', 'cafe-blog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => "</aside>",
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

/**
 * Enqueue scripts and styles
 */
function freebiescafe_scripts() {
	// Load latest css version
	wp_enqueue_style( 'cafe-blog-style', get_stylesheet_uri(), array(), '1.0.9', 'all' );

	// FontAwesome
	wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/css/font-awesome.min.css' ), false, '4.7.0' );

	// Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Nunito:300,300i,800%7CPlayfair+Display:700,700i&amp;subset=latin-ext', array(), null );

	// Adds JavaScript for responsive videos
	wp_enqueue_script( 'fitvids-js', get_theme_file_uri( '/js/jquery.fitvids.js' ), array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'cafe-blog-custom-js', get_theme_file_uri( '/js/custom.js' ), array( 'jquery' ), '1.0.9', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/**
 * "Continue Reading" for excerpts
 */
function freebiescafe_continue_reading_link() {
	return sprintf( ' <br /><br /><a href="%1$s" class="btn-read">%2$s</a>', get_permalink(), __( 'Continue reading', 'cafe-blog' ) );
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and freebiescafe_continue_reading_link()
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @param string $more
 *
 * @return string
 */
function freebiescafe_alter_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}
	
	return ' ' . freebiescafe_continue_reading_link();
}

/**
 * "Continue Reading" link to custom post excerpts.
 *
 * @param string $output
 *
 * @retrun string
 */
function freebiescafe_alter_the_excerpt( $output ) {
	if ( has_excerpt() && ! is_attachment() && ! is_admin() ) {
		$output .= freebiescafe_continue_reading_link();
	}

	return $output;
}

/**
 * Custom excerpt length
 *
 * @param int $length
 */
function freebiescafe_alter_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	
	return 100;
}

/**
 * Related posts
 *
 * @param array $args
 *
 * @global object $post
 * @return
 */
function freebiescafe_related_posts( $args = array() ) {
	global $post;

	// default args
	$args = wp_parse_args( $args, array(
		'post_id'   => ! empty( $post ) ? $post->ID : '',
		'taxonomy'  => get_theme_mod( 'freebiescafe_related_posts_setting', 'category' ),
		'limit'     => 3,
		'post_type' => ! empty( $post ) ? $post->post_type : 'post',
		'orderby'   => 'date',
		'order'     => 'DESC'
	) );

	// check taxonomy
	if ( ! taxonomy_exists( $args['taxonomy'] ) ) {
		return;
	}

	// post taxonomies
	$taxonomies = wp_get_post_terms( $args['post_id'], $args['taxonomy'], array( 'fields' => 'ids' ) );

	if ( empty( $taxonomies ) ) {
		return;
	}

	// query
	$related_posts = get_posts( array(
		'post__not_in'   => (array) $args['post_id'],
		'post_type'      => $args['post_type'],
		'tax_query'      => array(
			array(
				'taxonomy' => $args['taxonomy'],
				'field'    => 'term_id',
				'terms'    => $taxonomies
			),
		),
		'posts_per_page' => $args['limit'],
		'orderby'        => $args['orderby'],
		'order'          => $args['order']
	) );

	include( locate_template( 'template-parts/related.php', false, false ) );

	wp_reset_postdata();
}

/**
 * Posts pagination
 *
 * @return
 */
function freebiescafe_pagination() {	
	the_posts_pagination( array(
		'mid_size'  => 2,
		'prev_text' => __( '&laquo;', 'cafe-blog' ),
		'next_text' => __( '&raquo;', 'cafe-blog' ),
		'type'		=> 'list'
	) );;
}

/**
 * Add a signature in the end of the post content
 *
 * @param string $text
 *
 * @return string
 */
function freebiescafe_add_signature( $text ) {
	if ( ! is_singular( 'post' ) ) {
		return $text;
	}

	$signatureImg = get_theme_mod( 'freebiescafe_signature_image_setting', '' );
	if ( empty( $signatureImg ) ) {
		return $text;
	}

	return $text . sprintf( '<div class="signature"><img src="%s" alt="signature"/></div>', esc_url( $signatureImg ) );
;
}

/**
 * Comment template
 *
 * @param object $comment
 * @param array $args
 * @param int $depth
 */
function freebiescafe_comment( $comment, $args, $depth ) {
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
			?>
			<li class="pingback">
			<p><?php _e( '<span>Pingback:</span>', 'cafe-blog' ); ?><?php comment_author_link(); ?></p>
			<p class="pingback-edit"><?php edit_comment_link( __( 'Edit &rarr;', 'cafe-blog' ), ' ' ); ?></p>
			<?php
			break;
		default:
			?>

		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment">

				<div class="comment-avatar">
					<?php echo get_avatar( $comment, 40 ); ?>
				</div>

				<div class="comment-content">
					<ul class="comment-meta">
						<li class="comment-author"><?php printf( __( ' %s ', 'cafe-blog' ), sprintf( ' %s ', get_comment_author_link() ) ); ?></li>
						<li class="comment-time">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
								<?php
								/* translators: 1: date, 2: time */
								printf( __( '%1$s @ %2$s', 'cafe-blog' ), get_comment_date(), get_comment_time() );
								?></a></li>
						<li class="comment-edit"><?php edit_comment_link( __( 'Edit &rarr;', 'cafe-blog' ), ' &#183; ' ); ?></li>
					</ul>
					<div class="comment-text">
						<?php comment_text(); ?>
						<?php if ( $comment->comment_approved == '0' ) : ?>
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'cafe-blog' ); ?></p>
						<?php endif; ?>
						<p class="comment-reply"><?php
							comment_reply_link( array_merge( $args, array(
								'reply_text' => __( 'Reply', 'cafe-blog' ),
								'depth'      => $depth,
								'max_depth'  => $args['max_depth']
							) ) );
							?></p>
					</div><!-- end .comment-text -->

				</div><!-- end .comment-content -->

			</article><!-- end .comment -->

			<?php
	endswitch;
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function freebiescafe_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'cafe-blog' ) );
			if ( $categories_list ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %s', 'cafe-blog' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'cafe-blog' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links"><span class="m-sep">&middot;</span>' . esc_html__( ' Tagged %1$s', 'cafe-blog' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
		
		// Show comments
		if ( comments_open() ) {			
			echo '<span class="entry-comments"><span class="m-sep">&middot;</span>';
			comments_popup_link( 
					__( 'Leave a comment', 'cafe-blog' ), 
					sprintf( '<span class="icon-comment"></span> %s', __( '1 Comment', 'cafe-blog' ) ), 
					sprintf( '<span class="icon-comment"></span> %s', __( '% Comments', 'cafe-blog' ) ) 
			);
	        echo '</span>';
		}

		// Show edit link
		edit_post_link(
			sprintf(
			/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'cafe-blog' ),
				the_title( '<span class="screen-reader-text">&ldquo;', '&rdquo;</span>', false )
			),
			'<span class="edit-link"><span class="m-sep">&middot;</span>',
			'</span>'
		);
}

/**
 * Menu fallback (when there is no menu saved)
 * 
 * @param array $args
 */
function freebiescafe_menu_fallback( $args = array() ) {
	wp_page_menu( array(
		'depth'		 => $args['depth'],
		'container'  => $args['container'],
		'menu_id'    => '',
		'menu_class' => $args['container_class'],
		'before'	 => sprintf( '<ul class="%s">', $args['menu_class'] ),
		'after'		 => '</ul>'
	) );
}

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function freebiescafe_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
