<?php
/*
Plugin Name: Widget Plugin
Plugin URI: http://www.wpexplorer.com/
Description: A simple plugin that adds a simple widget
Version: 1.0
Author: WPExplorer
Author URI: http://www.wpexplorer.com/
License: GPL2
*/

class aeVidi_Recent_Comments extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'aevidi_widget_recent_comments', 'description' => __( 'The most recent comments' ) );
		parent::__construct('aevidi-recent-comments', __('Footer Recent Comments'), $widget_ops);
		$this->alt_option_name = 'aevidi_widget_recent_comments';


		add_action( 'comment_post', array($this, 'flush_widget_cache') );
		add_action( 'edit_comment', array($this, 'flush_widget_cache') );
		add_action( 'transition_comment_status', array($this, 'flush_widget_cache') );
	}

	function flush_widget_cache() {
		wp_cache_delete('aevidi_widget_recent_comments', 'widget');
	}

	function widget( $args, $instance ) {
		global $comments, $comment;

		$cache = wp_cache_get('aevidi_widget_recent_comments', 'widget');

		if ( ! is_array( $cache ) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

 		extract($args, EXTR_SKIP);
 		$output = '';

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Comments' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number )
 			$number = 5;

		$comments = get_comments( apply_filters( 'widget_comments_args', array( 'number' => $number, 'status' => 'approve', 'post_status' => 'publish' ) ) );
		$output .= $before_widget;
		if ( $title )
			$output .= $before_title . $title . $after_title;

		$output .= '<ul id="recentcomments">';
		if ( $comments ) {
			// Prime cache for associated posts. (Prime post term cache if we need it for permalinks.)
			$post_ids = array_unique( wp_list_pluck( $comments, 'comment_post_ID' ) );
			_prime_post_caches( $post_ids, strpos( get_option( 'permalink_structure' ), '%category%' ), false );

			foreach ( (array) $comments as $comment) {
			  $output .= '<li class="row recentcomments"><div class="small-4 medium-3 columns user-box"><h5>'.get_comment_author_link().'</h5>'.get_avatar($comment, '50').'</div><div class="small-8 medium-9 columns">'.get_comment_excerpt().'</div></li>';
/*

				$output .=  '<li class="recentcomments"><div class="floater">'.get_avatar($comment, '32').'</div><span class="title"><span class="user-box">' . get_avatar($comment, '32') . ' ' . sprintf(_x('%1$s on %2$s', 'widgets'),  get_comment_author_link().'</span>', '<a href="' . esc_url( get_comment_link($comment->comment_ID) ) . '">' . get_the_title($comment->comment_post_ID) . '</a>').'</span><span class="comment-content">asd asdasdasdadasdas d<br>asdasd asdasd adasd<br>,asdasdasdas dasdasdasdasd</span></li>';
*/
			}
 		}
		$output .= '</ul>';
		$output .= $after_widget;

		echo $output;
		$cache[$args['widget_id']] = $output;
		wp_cache_set('aevidi_widget_recent_comments', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = absint( $new_instance['number'] );
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['aevidi_widget_recent_comments']) )
			delete_option('aevidi_widget_recent_comments');

		return $instance;
	}

	function form( $instance ) {
		$title  = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of comments to show:' ); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
<?php
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("aeVidi_Recent_Comments");'));