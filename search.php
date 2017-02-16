<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>
<?php $posts=query_posts($query_string . '&posts_per_page=9&orderby=date&order=DESC'); ?> 

<div class="page-wrap container<?php if ( $fullwidth ) echo ' fullwidth'; ?>">
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>

				<div id="left-area">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="news">



						
						<div>
							<h2 class="et_pt_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="data"><?php the_time('d/m/Y'); ?></p>
							<p><?php echo get_excerpt(1000); ?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				<?php endwhile; ?>

					<div class="nav-posts">
					<?php wpbeginner_numeric_posts_nav(); ?>
					
					</div>

				<?php else : ?>

					<div class="news">



						
						<div>
							<h2 class="et_pt_title">Sem Resultados</h2></br>
							<p>Desculpe-nos. Não conseguimos encontrar resultados para sua busca.</p>
							<p>Tente modificar os termos da busca para algo mais abrangente.</p>
							
						</div>
						
					</div>

					

				<?php endif; ?>

				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
			<?php if ( ! $fullwidth ) get_sidebar(); ?>
		</div> <!-- .main-content-wrap -->
		<?php get_template_part( 'includes/footer-banner', 'page' ); ?>
	</div> <!-- #main-content -->
<?php get_footer(); ?>