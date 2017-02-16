<?php #specific video category query
	$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
		'category__and' => array( $verificar, $aula ),
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => 'post-format-video',
			)
		),
	) ) );
	
	ob_start();
	if ( $et_recent_videos_query->have_posts() ) :
		$i = 1;
		while ( $et_recent_videos_query->have_posts() ) : $et_recent_videos_query->the_post();
			
		include (TEMPLATEPATH . '/loop-args.php');?>
		
		<li class="video-column column-01">
		<h4>Assista à aula</h4>
			<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
				<a href="<?php echo $et_videolink; ?>" class="et-recent-video-play fancybox-youtube"></a>
			</li>
			<?php
				if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
						$i++;
		endwhile;
	endif;
	rewind_posts(); ?>
<?php #specific video category query
	$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
		'category__and' => array( $verificar, $historia ), 
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => 'post-format-video',
			)
		),
	) ) );
	if ( $et_recent_videos_query->have_posts() ) :
		$i = 1;
		while ( $et_recent_videos_query->have_posts() ) : $et_recent_videos_query->the_post();
			
			include (TEMPLATEPATH . '/loop-args.php');?>

		<li class="video-column column-02">
		<h4>Veja o vídeo</h4>
			<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
				<a href="<?php echo $et_videolink; ?>" class="et-recent-video-play fancybox-youtube"></a>
			</li>										
			<?php
				if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
						$i++;
		endwhile;
	endif;
?>