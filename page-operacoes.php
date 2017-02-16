<?php
/*
Template Name: Operações Page
*/
?>

<?php 
	$aula = '18';
	$historia = '19';

if ( is_page( 'observar' ) ) {
	$cate = '13';
} elseif ( is_page('verificar') ) {
	$cate = '8';
} elseif ( is_page('classificar') ) {
	$cate = '10';
} elseif ( is_page('questionar') ) {
	$cate = '6';
} elseif ( is_page('definir') ) {
	$cate = '11';
} elseif ( is_page('aplicar') ) {
	$cate = '9';
} elseif ( is_page('generalizar') ) {
	$cate = '12';
}
?>

<?php get_header(); ?>
<div class="image-header"><img src="<?php echo $cfs->get('header_image') ?>" alt=""></div> 
<!--<?php
$featured_image = false;
if ( '' != get_the_post_thumbnail() ) :
	$featured_image = true;
?>
	<div class="post-thumbnail">
		<div class="container">
			<h1 class="post-heading"><?php the_title(); ?></h1>
		</div> 
	</div> 
<?php endif; ?>
-->
<div class="page-wrap container">
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>
				<div id="left-area">
				<?php while ( have_posts() ) : the_post(); ?> 
					<?php if (et_get_option('nexus_integration_single_bottom') <> '' && et_get_option('nexus_integrate_singlebottom_enable') == 'on') echo(et_get_option('nexus_integration_single_bottom')); ?>
					<article class="entry-content clearfix">
					<?php if ( ! $featured_image ) : ?>
						<h1 class="main-title"><?php the_title(); ?></h1>
					<?php endif; ?>
					
				
					<?php
						the_content();
					?>
					<?php echo do_shortcode('[shareaholic app="share_buttons" id="6361707"]'); ?>
					</article> <!-- .entry -->
					<?php if (et_get_option('nexus_integration_single_bottom') <> '' && et_get_option('nexus_integrate_singlebottom_enable') == 'on') echo(et_get_option('nexus_integration_single_bottom')); ?>
					<?php
						if ( comments_open() && 'on' == et_get_option( 'nexus_show_postcomments', 'on' ) )
							comments_template( '', true );
					?>
				<?php endwhile;
				rewind_posts(); ?>

				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
			<div id="sidebar">
				<?php #specific video category query
					$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
						'category__and' => array( $cate, $aula ),
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
							
						<div class="assista widget">
							<h4 class="widgettitle">Assista à aula</h4>
							<div class="recent-video-slides">
								<div class="et-recent-video">
									<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
									<a href="<?php echo $et_videolink; ?>" class="et-recent-video-play fancybox-youtube"></a>
								</div>	
							</div>		
						</div>

							<?php
							if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
								$i++;
						endwhile;
					endif;
					rewind_posts(); ?>
				?>

				<?php #specific video category query
					$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
						'category__and' => array( $cate, $historia ), 
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
							
						<div class="assista widget">
							<h4 class="widgettitle">Veja a história</h4>
							<div class="recent-video-slides">
								<div class="et-recent-video">
									<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
									<a href="<?php echo $et_videolink; ?>" class="et-recent-video-play fancybox-youtube"></a>
								</div>	
							</div>		
						</div>

							<?php
								if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
										$i++;
								
						endwhile;
					endif;
				?>
			</div>
		</div> <!-- .main-content-wrap -->
		
		
		<?php get_template_part( 'includes/footer-banner', 'single' ); ?>
	</div> <!-- #main-content -->
	<?php get_footer(); ?>