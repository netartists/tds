<?php
	// Loads child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, CHILD_DIR . '/languages' );

	add_filter( 'cherry_stickmenu_selector', 'cherry_change_selector' );
	function cherry_change_selector($selector) {
		$selector = 'header .nav-wrap';
		return $selector;
	}

	if ( !function_exists( 'mytheme_comment' ) ) {
		function mytheme_comment($comment, $args, $depth) {
			$GLOBALS['comment'] = $comment;
		?>
		<li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>" class="comment-body clearfix">
				<div class="wrapper">
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment->comment_author_email, 130 ); ?>
						<?php printf('<span class="author">%1$s</span>', get_comment_author_link()) ?>
					</div>
					<?php if ($comment->comment_approved == '0') : ?>
						<em><?php echo theme_locals("your_comment") ?></em>
					<?php endif; ?>
					<div class="extra-wrap">
						<?php echo esc_html( get_comment_text() ); ?>

						<div class="wrapper">
					<div class="reply">
						<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					</div>
					<div class="comment-meta commentmetadata"><?php printf('%1$s', get_comment_date()) ?></div>
				</div>
					</div>
				</div>
				
			</div>
		<?php }
	}


	if(!function_exists('cherry_related_posts')){
		function cherry_related_posts($args = array()){
			global $post;
			$default = array(
				'post_type' => get_post_type($post),
				'class' => 'related-posts',
				'class_list' => 'related-posts_list',
				'class_list_item' => 'related-posts_item',
				'display_title' => true,
				'display_link' => true,
				'display_thumbnail' => true,
				'width_thumbnail' => 350,
				'height_thumbnail' => 350,
				'before_title' => '<h3 class="related-posts_h">',
				'after_title' => '</h3>',
				'posts_count' => 4
			);
			extract(array_merge($default, $args));

			$post_tags = wp_get_post_terms($post->ID, $post_type.'_tag', array("fields" => "slugs"));
			$tags_type = $post_type=='post' ? 'tag' : $post_type.'_tag' ;
			$suppress_filters = get_option('suppress_filters');// WPML filter
			$blog_related = apply_filters( 'cherry_text_translate', of_get_option('blog_related'), 'blog_related' );
			$rand  = rand();
			if ($post_tags && !is_wp_error($post_tags)) {
				$args = array(
					"$tags_type" => implode(',', $post_tags),
					'post_status' => 'publish',
					'posts_per_page' => $posts_count,
					'ignore_sticky_posts' => 1,
					'post__not_in' => array($post->ID),
					'post_type' => $post_type,
					'suppress_filters' => $suppress_filters
					);
				query_posts($args);
				if ( have_posts() ) {
					$output = '<div class="'.$class.'">';
					$output .= $display_title ? $before_title.$blog_related.$after_title : '' ;
					$output .= '<ul class="'.$class_list.' clearfix">';
					while( have_posts() ) {
						the_post();
						$prettyType = 'prettyPhoto-'.$rand;
						$thumb   = has_post_thumbnail() ? get_post_thumbnail_id() : PARENT_URL.'/images/empty_thumb.gif';
						$blank_img = stripos($thumb, 'empty_thumb.gif');
						$img_url = $blank_img ? $thumb : wp_get_attachment_url( $thumb,'full');
						$image   = $blank_img ? $thumb : aq_resize($img_url, $width_thumbnail, $height_thumbnail, true) or $img_url;

						$output .= '<li class="'.$class_list_item.'">';
						$output .= $display_thumbnail ? '<figure class="thumbnail featured-thumbnail"><a href="'.$img_url.'" title="'.get_the_title().'" rel="' .$prettyType.'"><img data-src="'.$image.'" alt="'.get_the_title().'" /><span class="zoom-icon"></span></a></figure>': '' ;
						$output .= $display_link ? '<a href="'.get_permalink().'" >'.get_the_title().'</a>': '' ;
						$output .= '<div class="post_date">';
						$output .= '<time datetime="'.get_the_time('Y-m-d\TH:i:s', $post->ID).'">' .get_the_date(). '</time>';
						$output .= '</div>';
						$output .= '</li>';
					}
					$output .= '</ul></div>';
					echo $output;
				}
				wp_reset_query();
			}
		}
	}
	
	// Loads custom scripts.
	require_once( 'custom-js.php' );
	//require_once( 'custom-category.php' );
	require_once( CHILD_DIR. "/meta-box-class/my-meta-box-init.php");
	require_once( 'shortcodes/service-box.php' );
	require_once( 'shortcodes/circle-stat.php' );
	require_once( 'shortcodes/posts-grid.php' );
	require_once( 'shortcodes/banner.php' );
	require_once( 'shortcodes/post-cycle.php' );
?>