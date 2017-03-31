<?php
/*
Template Name: Conheça as 7 operaçoes 
*/
?>
<?php get_header(); ?>

<?php
	$observar = '13';
	$verificar = '8';
	$classificar = '10';
	$questionar = '6';
	$definir = '11';
	$aplicar = '9';
	$generalizar = '12';
	$relampago = '23';
	

	$aula = '18';
	$historia = '19';
	$video1 = '24';
	$video2 = '25';
	$video3 = '26';
	$video4 = '27';
	$video5 = '28';
?>

<!-- <div class="image-header"><img src="<?php echo $cfs->get('header_image') ?>" alt=""></div>  -->

<div class="page-wrap container fullwidth">
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>
				<div id="left-area">
					<div class="image-header">
						<iframe width="853" height="480" src="//www.youtube.com/embed/<?php echo $cfs->get('header_video') ?>" frameborder="0" allowfullscreen></iframe>
					</div> 
				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-observar">
							<h2 class="operacao">observar</h2>
					</div>
					<div class="operacao-body bg-observar">
						<ul class="video-row">



							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $observar, $aula ),
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
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>
							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $observar, $historia ), 
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
									<h4>Veja a história</h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
										</li>										
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->
				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-verificar">
							<h2 class="operacao">Verificar</h2>
					</div>
					<div class="operacao-body bg-verificar">
						<ul class="video-row">



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
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
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
									<h4>Veja a história</h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
										</li>										
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->
				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-classificar">
							<h2 class="operacao">classificar</h2>
					</div>
					<div class="operacao-body bg-classificar">
						<ul class="video-row">



							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $classificar, $aula ),
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
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>
							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $classificar, $historia ), 
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
									<h4>Veja a história</h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
										</li>										
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->
				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-questionar">
							<h2 class="operacao">questionar</h2>
					</div>
					<div class="operacao-body bg-questionar">
						<ul class="video-row">



							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $questionar, $aula ),
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
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>
							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $questionar, $historia ), 
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
									<h4>Veja a história</h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
										</li>										
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->
				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-definir">
							<h2 class="operacao">definir</h2>
					</div>
					<div class="operacao-body bg-definir">
						<ul class="video-row">



							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $definir, $aula ),
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
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>
							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $definir, $historia ), 
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
									<h4>Veja a história</h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
										</li>										
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->
				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-aplicar">
							<h2 class="operacao">aplicar</h2>
					</div>
					<div class="operacao-body bg-aplicar">
						<ul class="video-row">



							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $aplicar, $aula ),
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
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>
							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $aplicar, $historia ), 
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
									<h4>Veja a história</h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
										</li>										
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->
				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-generalizar">
							<h2 class="operacao">generalizar</h2>
					</div>
					<div class="operacao-body bg-generalizar">
						<ul class="video-row">



							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $generalizar, $aula ),
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
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>
							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $generalizar, $historia ), 
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
									<h4>Veja a história</h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
										</li>										
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
							?>
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->

				<!---------------------------------------------------------------------------------------------------------------------------->
					<div class="operacao-header header-relampago">
							<h2 class="operacao">Aulas-Relâmpago</h2>
					</div>
					<div class="operacao-body relampago">
						<ul class="video-row">



							<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $relampago, $video1 ),
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
									<li class="video-column-relampago">
									<h4><?php the_title() ?></h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>

								<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $relampago, $video2 ),
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
									<li class="video-column-relampago">
									<h4><?php the_title() ?></h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>

								<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $relampago, $video3 ),
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
									<li class="video-column-relampago">
									<h4><?php the_title() ?></h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>

								<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $relampago, $video4 ),
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
									<li class="video-column-relampago-4">
									<h4><?php the_title() ?></h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>

								<?php #specific video category query
								$et_recent_videos_query = new WP_Query( apply_filters( 'et_recent_videos_args', array(
									'category__and' => array( $relampago, $video5 ),
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
									<li class="video-column-relampago">
									<h4><?php the_title() ?></h4>
										<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										<a href="<?php echo esc_attr( '#' . $et_video_id ); ?>" class="et-recent-video-play fancybox"></a>
									</li>
										<?php
											if ( '' != $et_videos_output ) echo '<div class="et_embedded_videos">' . $et_videos_output . '</div>';
													$i++;
									endwhile;
								endif;
								rewind_posts(); ?>
							
						</ul>
					</div>
				<!---------------------------------------------------------------------------------------------------------------------------->

				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
		</div> <!-- .main-content-wrap -->
		<?php get_template_part( 'includes/footer-banner', 'page' ); ?>
	</div> <!-- #main-content -->
<?php get_footer(); ?>
