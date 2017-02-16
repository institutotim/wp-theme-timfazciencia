<?php
	$et_videolink = get_post_meta( get_the_ID(), '_format_video_embed', true );
	$et_video_id = 'et_video_post_' . get_the_ID();
	$et_videos_output .= '<div id="'. esc_attr( $et_video_id ) .'">' . $wp_embed->shortcode( '', esc_url( $et_videolink ) ) . '</div>';
	$thumb = '';
	$width = (int) apply_filters( 'et_recent_from_image_width', 240 );
	$height = (int) apply_filters( 'et_recent_from_image_height', 240 );
	$classtext = '';
	$titletext = get_the_title();
	$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Recent' );
	$thumb = $thumbnail["thumb"]; 
?>