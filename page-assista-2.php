<?php
?>
<?php get_header(); ?>
<?php
$featured_image = false;
if ( '' != get_the_post_thumbnail() ) :
	$featured_image = true;
?>
<div class="post-thumbnail">
	<div class="container">
		<h1 class="post-heading"><?php the_title(); ?></h1>
	</div> <!-- .container -->
</div> <!-- .post-thumbnail -->
<?php endif; ?>
<div class="page-wrap container fullwidth">
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>
				<div id="left-area">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="entry-content clearfix">
					<?php if ( ! $featured_image ) : ?>
						<h1 class="main-title"><?php the_title(); ?></h1>
					<?php endif; ?>
					<?php
						the_content();
						wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'Nexus' ), 'after' => '</div>' ) );
					?>
					</article> <!-- .entry -->
					<?php
						if ( comments_open() && 'on' == et_get_option( 'nexus_show_pagescomments', 'false' ) )
							comments_template( '', true );
					?>
						Observar
						<?php
						echo '<object width="560" height="315"><param name="movie" value="' . $cfs->get('observar_aula') . '?version=3&hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="' . $cfs->get('observar_aula') . '?version=3&hl=en_US" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
						?>
						
				<?php endwhile; ?>
				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
		</div> <!-- .main-content-wrap -->
		<?php get_template_part( 'includes/footer-banner', 'page' ); ?>
	</div> <!-- #main-content -->
<?php get_footer(); ?>