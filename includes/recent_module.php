<?php
	$width = (int) apply_filters( 'et_recent_module_image_width', 160 );
	$height = (int) apply_filters( 'et_recent_module_image_height', 160 );
	$title = get_the_title();
	$thumbnail = get_thumbnail( $width, $height, '', $title, $title, false, 'Recent' );
	$thumb = $thumbnail["thumb"];
?>
<div class="recent-post destaques-module clearfix">
<?php if ( '' !== $thumb ) : ?>
	<div class="et-main-image">
		<a href="<?php the_permalink(); ?>">
			<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $title, $width, $height ); ?>
		</a>
	</div>
<?php endif; ?>
	<div class="et-description">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="all-news"><?php echo get_excerpt(400); ?></div>
	</div>
</div>