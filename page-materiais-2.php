<?php
/*
Template Name: materiais didaticos
*/
?>
<?php get_header(); ?>

<?php
	$bula = '21';
	$observar = '13';
	$verificar = '8';
	$classificar = '10';
	$questionar = '6';
	$definir = '11';
	$aplicar = '9';
	$generalizar = '12';
	$caderno = '22';
	
	$materiais = '2';
?>



<div class="page-wrap container fullwidth">
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>
				<div class="title-bg"><h1 class="main-title show"><?php the_title(); ?></h1></div>
				<div id="left-area" class="pg-materiais">
				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $bula, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list alpha">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $observar, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $verificar, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $classificar, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $questionar, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list omega">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $definir, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list alpha">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $aplicar, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $generalizar, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail() ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="materiais-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="materiais-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="materiais-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
								
					<?php 
						$args = array (// args
							'category__and' => array( $caderno, $materiais ),
						);
						$the_query = new WP_Query( $args ); // get results
						?>
						<?php if( $the_query->have_posts() ): // The Loop ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<ul class="materiais-list caderno omega">
									<h4><?php the_title(); ?></h4>
									<div> <?php the_post_thumbnail('big-materiais') ?></div>
									<div><?php the_excerpt() ?></div>
									<li class="materiais-item">
										<div class="folhear bg">
											<div class="caderno-btn folhear-btn">
												<a href="<?php echo $cfs->get('folhear_material') ?>" target="_blank">Folhear material</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-cor bg">
											<div class="caderno-btn imprimir-cor-btn">
												<a href="<?php echo $cfs->get('imprimir_colorido') ?>" target="_blank">Imprimir colorido</a>
											</div>
										</div>
									</li>
									<li class="materiais-item">														
										<div class="imprimir-pb bg">
											<div class="caderno-btn imprimir-pb-btn">
												<a href="<?php echo $cfs->get('imprimir_pb') ?>" target="_blank">Imprimir PB</a>
											</div>
										</div>
									</li>
									<?php endwhile; ?>
								</ul>
								<div class="clearfix"></div>
								<div class="comments">
								<?php
									if ( comments_open() && 'on' == et_get_option( 'nexus_show_pagescomments', 'false' ) )
										comments_template( '', true );
								?>
								<?php endif; ?>
								</div>
							<?php wp_reset_query();  // Restore global post data stomped by the_post(). 
						?>
				<!----------------------------------------------------------------------------------------------------------------------------> 
				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
		</div> <!-- .main-content-wrap -->
		<?php get_template_part( 'includes/footer-banner', 'page' ); ?>
	</div> <!-- #main-content -->
<?php get_footer(); ?>