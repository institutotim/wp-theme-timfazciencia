<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<?php $upload_dir = wp_upload_dir(); ?>


<?php if ( in_category('3') ): ?>
	<div class="container">
		<div class="image-header"><img src="<?php echo $upload_dir['baseurl']; ?>/2001/02/header-noticias.jpg" alt=""></div> 
	</div> <!-- .container -->

<?php elseif ( in_category('17') ): ?>
	<div class="container">
		<div class="image-header"><img src="<?php echo $upload_dir['baseurl']; ?>/2001/02/header-para-saber.jpg" alt=""></div> 
	</div>

<?php elseif ( in_category('20') ): ?>
	<div class="container">
		<div class="image-header"><img src="<?php echo $upload_dir['baseurl']; ?>/2001/02/header-premios.jpg" alt=""></div> 
	</div>
 <?php endif ?>


	
</div> <!-- .post-thumbnail -->
<div class="page-wrap container<?php if ( $fullwidth ) echo ' fullwidth'; ?>">
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>

				<div id="left-area">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="news">



						<div class="et_pt_thumb alignleft">
							<?php the_post_thumbnail(); ?>
						</div>	

						<div>
						<div class="cat-display">
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

					<p>Sorry, no posts to list</p>

				<?php endif; ?>

				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
			<?php if ( ! $fullwidth ) get_sidebar(); ?>
		</div> <!-- .main-content-wrap -->
		<?php get_template_part( 'includes/footer-banner', 'page' ); ?>
	</div> <!-- #main-content -->
<?php get_footer(); ?>