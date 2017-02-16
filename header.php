<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>

<?php load_theme_textdomain('theme_textdomain', get_template_directory() . '/lang'); ?>

<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>
	<?php do_action( 'et_head_meta' ); ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
	<header id="main-header">
		<div class="container">
			<div id="top-info" class="clearfix">
				<div class="instituto-tim-logo"><img src="<?php echo $template_directory_uri . '/images/instituto-tim-logo.png'; ?>" alt="Instituto Tim"></div>
				<div class="top-logo">
					<?php if ( 'on' === et_get_option( 'nexus_header_banner', 'false' ) ) : ?>
						<div class="header-banner">
						<?php
							printf( '<a href="%s"><img src="%s" alt="%s" /></a>',
								esc_url( et_get_option( 'nexus_header_banner_url', '#' ) ),
								esc_attr( et_get_option( 'nexus_header_banner_image' ) ),
								esc_attr( et_get_option( 'nexus_header_banner_description' ) )
							);
						?>
						</div> <!-- .header-banner -->
					<?php endif; ?>
					
					<?php
						$logo = ( $user_logo = et_get_option( 'nexus_logo' ) ) && '' != $user_logo
							? $user_logo
							: $template_directory_uri . '/images/logo.png';
					?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo $template_directory_uri . '/images/tim-faz-ciencia-logo.png'; ?>" alt="TIM Faz Ciência">
						</a>
					</div>
						
<!-- 					<?php if ( is_active_sidebar( 'top-right' ) ) : ?>
							<?php dynamic_sidebar( 'top-right' ); ?>
						<?php endif; ?>
 -->
	 				<ul id="et-social-icons">
						<li class="contato">
							<a href="<?php echo esc_url( et_get_option( 'nexus_twitter_url', '#' ) ); ?>" target="_blank">
								<span class="et-social-normal"><?php esc_html_e( 'Follow us on Twitter', 'Nexus' ); ?></span>
								<span class="et-social-hover"></span>
							</a>
						</li>
						<?php if ( 'on' === et_get_option( 'nexus_show_facebook_icon', 'on' ) ) : ?>
						<li class="facebook">
							<a href="<?php echo esc_url( et_get_option( 'nexus_facebook_url', '#' ) ); ?>" target="_blank">
								<span class="et-social-normal"><?php esc_html_e( 'Follow us on Facebook', 'Nexus' ); ?></span>
								<span class="et-social-hover"></span>
							</a>
							<div class="tooltip">Facebook</div>
						</li>
						<?php endif; ?>
						<?php if ( 'on' === et_get_option( 'nexus_show_rss_icon', 'on' ) ) : ?>
						<li class="youtube">
							<?php $et_rss_url = '' !== et_get_option( 'nexus_rss_url' ) ? et_get_option( 'nexus_rss_url' ) : get_bloginfo( 'comments_rss2_url' ); ?>
							<a href="<?php echo esc_url( $et_rss_url ); ?>" target="_blank">
								<span class="et-social-normal"><?php esc_html_e( 'Subscribe To Rss Feed', 'Nexus' ); ?></span>
								<span class="et-social-hover"></span>
							</a>
							<div class="tooltip">YouTube</div>
						</li>
						<?php endif; ?>
						<?php if ( 'on' === et_get_option( 'nexus_show_google_icon', 'on' ) ) : ?>
						<li class="flickr">
							<a href="https://www.flickr.com/photos/121406068@N03/albums" target="_blank">
								<span class="et-social-normal"><?php esc_html_e( 'Follow Us On Google+', 'Nexus' ); ?></span>
								<span class="et-social-hover"></span>
							</a>
							<div class="tooltip">Flickr – Atividades</div>
						</li>
						<li class="flickr">
							<a href="https://www.flickr.com/photos/128197418@N02/albums" target="_blank">
								<span class="et-social-normal"><?php esc_html_e( 'Follow us on Facebook', 'Nexus' ); ?></span>
								<span class="et-social-hover"></span>
							</a>
							<div class="tooltip">Flickr – Fotos</div>
						</li>
						<?php endif; ?>
					</ul>
					 <div class="searchbar"> 
						 <form method="get" action="<?php bloginfo('url'); ?>">
							<fieldset>
								<input type="text" name="s" value="" maxlength="50" required="required" />
								<button type="submit">Buscar</button>
							</fieldset>
						</form>
					</div>
				
				</div>
			<div id="top-navigation" class="clearfix">
				<?php do_action( 'et_header_top' ); ?>
				<nav>
				<?php
					$menuClass = 'nav';
					if ( 'on' == et_get_option( 'nexus_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
					$primaryNav = '';
					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );
					if ( '' == $primaryNav ) :
				?>
					<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
						<?php if ( 'on' == et_get_option( 'nexus_home_link' ) ) { ?>
							<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home','Nexus' ); ?></a></li>
						<?php }; ?>
						<?php show_page_menu( $menuClass, false, false ); ?>
						<?php show_categories_menu( $menuClass, false ); ?>
					</ul>
				<?php
					else :
						echo( $primaryNav );
					endif;
				?>
				</nav>
				
				
			</div> <!-- #top-navigation -->
		</div> <!-- .container -->
	</header> <!-- #main-header -->
