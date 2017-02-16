<?php class EtRecentVideosWidget4 extends WP_Widget
{
	function EtRecentVideosWidget4(){
		$widget_ops = array( 'description' => __( 'AAAAAAAAAA', 'Nexus' ) );
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget( false, $name = __( 'AAAAAAAAAAAAAAAAA', 'Nexus' ), $widget_ops, $control_ops );
	}
	/* Displays the Widget in the front-end */
	
	/*Creates the form for the widget in the back-end. */
	function form($instance){
		//Defaults
		$instance = wp_parse_args( (array) $instance, array( 'title' => __( 'Recent Videos', 'Nexus' ), 'et_recent_posts_number' => 4 ) );
		$title = esc_attr( $instance['title'] );
		$et_recent_posts_number = (int) $instance['et_recent_posts_number'];
		# Title
		echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
		echo '<p><label for="' . esc_attr( $this->get_field_id('et_recent_posts_number') ) . '">' . 'Number of Recent Posts:' . '</label><input class="widefat" id="' . esc_attr( $this->get_field_id('et_recent_posts_number') ) . '" name="' . esc_attr( $this->get_field_name('et_recent_posts_number')  ). '" type="text" value="' . esc_attr( $et_recent_posts_number ) . '" /></p>';
	}
}// end EtRecentVideosWidget4 class
function EtRecentVideosWidget4Init() {
	register_widget( 'EtRecentVideosWidget4' );
}
add_action( 'widgets_init', 'EtRecentVideosWidget4Init' );