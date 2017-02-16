<?php get_header(); ?>

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
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>
				<div class="title-bg"><h1 class="main-title show"><?php the_title(); ?></h1></div>
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<div id="left-area">

<?php while ( have_posts() ) : the_post(); ?>



					<?php if (et_get_option('nexus_integration_single_bottom') <> '' && et_get_option('nexus_integrate_singlebottom_enable') == 'on') echo(et_get_option('nexus_integration_single_bottom')); ?>
					<article class="entry-content clearfix">
					<?php if ( ! $featured_image ) : ?>
						<h1 class="main-title"><?php the_title(); ?></h1>
					<?php endif; ?>
						<!--<?php et_nexus_post_meta(); ?>
						<?php if ( ( $review_rating = get_post_meta( get_the_ID(), '_et_author_rating', true ) ) && '' !== $review_rating ) : ?>
							<span class="review-rating"><span style="width: <?php echo $review_rating * 33.5; ?>px;"></span></span>
						<?php endif; ?>-->
				<?php
					if ( has_post_format( 'video' ) ) {
						global $wp_embed;
						$video_width = (int) apply_filters( 'nexus_video_width', 838 );
						$et_video_url = get_post_meta( get_the_ID(), '_format_video_embed', true );
						$video = apply_filters( 'the_content', $wp_embed->shortcode( '', esc_url( $et_video_url ) ) );
						$video = preg_replace('/<embed /','<embed wmode="transparent" ',$video);
						$video = preg_replace('/<\/object>/','<param name="wmode" value="transparent" /></object>',$video);
						$video = preg_replace("/width=\"[0-9]*\"/", "width={$video_width}", $video);
						echo '<div class="et-single-video">' . $video . '</div>';
					}
				?>
				<p>
					<div class="cat-display" style="float:left">
							    <?php 
									$category = get_the_category();
										foreach($category as $category) { 
											if (!($category->cat_name=='Notícias') && !($category->cat_name=='Destaques') && !($category->slug=='para-saber-mais')) {
												echo '<span class="normal"><a href="' .get_category_link($category->term_id). '">' . $category->cat_name . '</a></span>'; 
											}
											else if (($category->cat_name=='Destaques')){
												echo '<span class="destaques"><a href="' .get_category_link($category->term_id). '">' . $category->cat_name . '</a></span>'; 
											}
									    } 
								    ?>
							</div>
					<div class="data" style="text-align:right; float: right;"><?php the_time('d/m/Y'); ?></div>
					<div style="clear:both;"></div>
				</p>
					<?php
						the_content();
						wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'Nexus' ), 'after' => '</div>' ) );

					?>
					<?php the_tags( '<ul class="tim-tags"><h6>Tags:</h6><li>', '</li><li>', '</li></ul>' ); ?>
					<?php echo do_shortcode('[shareaholic app="share_buttons" id="6361707"]'); ?>

					</article> <!-- .entry -->
					<?php if (et_get_option('nexus_integration_single_bottom') <> '' && et_get_option('nexus_integrate_singlebottom_enable') == 'on') echo(et_get_option('nexus_integration_single_bottom')); ?>
					<?php
						if ( comments_open() && 'on' == et_get_option( 'nexus_show_postcomments', 'on' ) )
							comments_template( '', true );
					?>
				<?php endwhile; ?>

				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
			<?php get_sidebar(); ?>
		</div> <!-- .main-content-wrap -->
		<?php get_template_part( 'includes/footer-banner', 'single' ); ?>
	</div> <!-- #main-content -->
	<?php get_footer(); ?>