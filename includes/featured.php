<?php

	$i = 1;

	$featured_args = array(

		'posts_per_page' => is_category() ? 1 : 7,

		'cat'            => (int) get_catId( ( is_category() ? get_query_var( 'cat' ) : et_get_option( 'nexus_feat_posts_cat' ) ) ),

		'orderby'             => 'date',

		'order'               => 'ASC',

	);

	if ( is_category() ) {

		$sticky_posts = get_option( 'sticky_posts' );

		if ( is_array( $sticky_posts ) ) {

			$featured_args['post__in'] = $sticky_posts;

			$featured_args['orderby'] = 'date';

			$featured_args['order'] = 'ASC';

		} else {

			$featured_args['orderby'] = 'date';

		}

	}

	$featured_query = new WP_Query( apply_filters( 'et_featured_post_args', $featured_args ) );

?>

<div id="featured">

	<div class="container">

		<div id="et-featured-posts" class="clearfix">



		



<?php



	$col01 = 'wp-content/uploads/featured/slider_01.jpg';

	$col02 = 'wp-content/uploads/featured/slider_02.jpg';

	$col03 = 'wp-content/uploads/featured/slider_03.jpg';

	$col04 = 'wp-content/uploads/featured/slider_04.jpg';

	$col05 = 'wp-content/uploads/featured/slider_05.jpg';

	$col06 = 'wp-content/uploads/featured/slider_06.jpg';

	$col07 = 'wp-content/uploads/featured/slider_07.jpg';



?>



		<a href="observar"><div class="et-featured-post et-first"><img src="<?php echo $col01 ?>" alt="" width="182" height="710"></div></a>

		<a href="classificar"><div class="et-featured-post et-first"><img src="<?php echo $col02 ?>" alt="" width="182" height="710"></div></a>

		<a href="generalizar"><div class="et-featured-post et-first"><img src="<?php echo $col03 ?>" alt="" width="182" height="710"></div></a>

		<a href="questionar"><div class="et-featured-post et-first"><img src="<?php echo $col04 ?>" alt="" width="182" height="710"></div></a>

		<a href="aplicar"><div class="et-featured-post et-first"><img src="<?php echo $col05 ?>" alt="" width="182" height="710"></div></a>

		<a href="verificar"><div class="et-featured-post et-first"><img src="<?php echo $col06 ?>" alt="" width="182" height="710"></div></a>

		<a href="definir"><div class="et-featured-post et-last"><img src="<?php echo $col07 ?>" alt="" width="182" height="710"></div></a>



<!-- 		while ( $featured_query->have_posts() ) : $featured_query->the_post();

			$post_id = get_the_ID();

			$slide_more_link = get_post_meta( $post_id, '_et_slide_more_link', true );

			$more_link = '' != $slide_more_link ? $slide_more_link : get_permalink();

			$class = 'et-first';

			$truncate_length = 610;

			$width = (int) apply_filters( 'et_slider_image_width', 182 );

			$height = (int) apply_filters( 'et_slider_image_height', 710 );

			$title = get_the_title();

			$thumbnail = get_thumbnail( $width, $height, '', $title, $title, true, 'Featured' );

			$thumb = $thumbnail["thumb"];

?>

			<div class="et-featured-post <?php echo esc_attr( $class ); ?>">

				<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $title, $width, $height ); ?> -->

				<!-- <div class="meta-info">

					<div class="meta-date">

						<span class="month"><?php echo get_the_time( 'M' ); ?></span><span><?php echo get_the_time( 'd' ); ?></span>

					</div>

					<span class="featured-comments"><span><?php comments_number( '0', '1', '%' ); ?></span></span>

				</div>

				<div class="post-description">

					<h2><a href="<?php echo esc_url( $more_link ); ?>"><?php the_title(); ?></a></h2>

					<p class="post-meta">

					<?php

						printf( __( 'Posted by %s on %s', 'Nexus' ),

							et_get_the_author_posts_link(),

							get_the_time( et_get_option( 'nexus_date_format', 'M j, Y' ) )

						);

					?>

					</p>

				</div>

				<div class="post-excerpt">

					<div class="excerpt-wrap">

						<a href="<?php echo esc_url( $more_link ); ?>" class="post-title"><?php the_title(); ?></a>

						<p><?php truncate_post( $truncate_length ); ?></p>

					</div>

					<a href="<?php echo esc_url( $more_link ); ?>" class="excerpt-more"><?php esc_html_e( 'Read more', 'Nexus' ); ?></a>

				</div> -->

			</div> <!-- .et-featured-post -->

<?php

		// 	$i++;

		// endwhile;

		// wp_reset_postdata();

?>

		</div> <!-- #et-featured-posts -->

	</div> <!-- .container -->

</div> <!-- #featured -->