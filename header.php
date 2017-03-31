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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
<style>
#tim-container {width:100%;margin:0;padding:0;background-color: #004691}
.logo-it {background-color:#003264;border-bottom:2px solid #82b9e6}
.menu-it {background-color:#004691;}
.menu-fixed-bottom-left {left: 0;position: relative;top: 30px;}
.nav-it {}

.search2 {width:300px;color: #666666;height:43px;font-size: 14px;padding-bottom: 5px;padding-top: 5px;position: relative;}
.search2 input {background: #fff none repeat scroll 0 0 !important;border: 1px solid #fff;border-radius: 4px;font-size: 9pt;height: 34px;width: 100%;}
.search2 input {text-indent: 5px;}
.search2 .fa-search {position: absolute;right: 10px;top: 42%;}
.navbar-overtop-tim-en-pt a {color: #82b9e6;}
.navbar-maintop-tim {background-color: #004691;color: #ffffff;font-size: 12px;height: 90px;letter-spacing: 0;padding: 0;}
 #mega-menu-wrap-header-1, .box-it li, .box-it, .creditos, .box-sz1 h2, .box-sz2 h2, .navbar-maintop-tim, .box-sz3 li a {font-family: 'TIMSansWeb', Fallback, times-new-roman}
.box-it li {color:#fff;padding-top:15px}
.box-sz1 h2, .box-sz2 h2 {color:#89c3ff}
.fa {color:#fff}

/*
#mega-menu-wrap-footer-1, #mega-menu-wrap-header-1 {border-top:1px solid #00a4e4;margin-top:-5px}
#mega-menu-wrap-footer-1 #mega-menu-footer-1 > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link {background: #428bca none repeat scroll 0 0;color:#fff}
#mega-menu-wrap-footer-1, #mega-menu-wrap-footer-1 #mega-menu-footer-1, #mega-menu-wrap-footer-1 #mega-menu-footer-1 ul.mega-sub-menu, #mega-menu-wrap-footer-1 #mega-menu-footer-1 li.mega-menu-item, #mega-menu-wrap-footer-1 #mega-menu-footer-1 a.mega-menu-link {background-color:#004691 !important}
#mega-menu-wrap-footer-1 #mega-menu-footer-1 > li.mega-menu-item > a.mega-menu-link, 
#mega-menu-wrap-footer-1 .mega-menu-toggle {background: #004691 none repeat scroll 0 0;}
#mega-menu-wrap-footer-1 #mega-menu-footer-1 > li.mega-menu-item > a.mega-menu-link:hover {background-color:#00a4e4}
.mega-sub-menu li a {color:#fff !important} */


@media only screen and (min-width: 320px) {
.container-2 {width:320px}
.nav-f {display:block;width:320px;z-index:9999;position:relative}
.box-sz2 {width:280px;text-align:center}
.box-sz2 p {margin-top:5px}
.box-sz2 h2 {font-size:10pt !important;padding-top:20px}
.bar-primary, .bar-secundary, .box-sz3 {width:310px}
.box-sz3 {float:left}
/* {padding-left:0px;width:320px}*/
.bar-primary {padding-left:10px}
.bar-secundary {padding-left:0}
.search2 {margin-left:5px}
.home-first-section {margin-top:10px}
.menu-fixed-border-left {border-color: #004691}
.bar-primary {height:25px;padding-top:5px}
.bar-secundary {height:125px}
.box-it li a {color:#fff}
.box-it li a:hover {color:#82b9e6}
.rede-social {display:none}
.nav-e {padding-bottom:10px;padding-top:35px}
.nav-i {margin-top:5px}
.logo2 {float:right;width:200px;height:22px;margin-top:-20px;padding:0;z-index:99999}
.logo2 img {width:160px;z-index:99999}
.logo-project img {width:71px;z-index:99999}
.logo-project {width:100px;float:left;margin-top:7px;padding-left:10px;z-index:99999}


.footer-links a {color: #ffffff;padding-top: 5px;line-height: 20px;text-decoration: none;}
.footer-links a:hover {color:#89c3ff}
.footer-links li {list-style: none;color: #ffffff;padding-top: 5px;line-height: 0px;}

.menu-fixed-border-left {border-color: #155ea3;border-style: solid;border-width: 0 2px 0 0;top: 34px;}


/*pro TIMFazCiencia*/
#footer-tim {width:100%;background-color: #004691;margin-top:0px;height:825px;color:#89c3ff}
.creditos {width:300px;height:50px;text-align:center;color:#89c3ff;font-size:9pt;clear:both;margin-top:400px}
.footer-links {margin-left:0px}
.box-sz1 {width:290px}
.box-sz1 h2 {font-size:16px;margin-top:5px}
.footerborder-left {border-image: linear-gradient(to right, rgba(24, 86, 154, 1), rgba(1, 60, 125, 1)) 1 100% 1 100%;border-style: solid;border-width: 3px 0 3px 3px}
.footer-tim {width:292px;margin:0 auto;height:300px;font-size:10pt;padding:10px;background-color: #004691}
.box-it {float:none;padding:10px}
#et-featured-posts {margin-top: 14px}
}
  
@media only screen and (min-width: 360px) {
.container-2 {width:360px}
.box-sz1,.box-sz2 {width:320px}
.nav-f, .footer-tim, .creditos {width:340px}
.bar-primary, .bar-secundary {padding-left:10px;width:360px}

/*pro TIMFazCiencia*/
.bar-secundary {height:134px}
#footer-tim {height:646px;}
.creditos {margin-top:264px;margin-left:5px}
}

@media only screen and (min-width: 480px) {
}

@media only screen and (min-width: 768px) {
.container-2 {width:768px;margin:0 auto}
#menu-menu-1 li {display:inline-block}
.bar-primary, .bar-secundary {padding-left:10px;width:768px}
.nav-e {padding-bottom:10px;padding-top:0px}

.box-sz3 {width:500px}
.box-it {float:left}
.box-it li a {font-size:9pt;padding:3px}
.logo2 {width:158px;float:left;margin-top:-5px;padding-right:5px}
.logo-project {width:60px;float:left;padding-left:5px;padding-top:24px;margin-top:0;height:35px;z-index:99999}
.footerborder-left {border-image: linear-gradient(to right, rgba(24, 86, 154, 1), rgba(1, 60, 125, 1)) 1 100% 1 100%;border-style: solid;border-width: 3px 0 3px 3px;height: 150px;}

/*pro TIMFazCiencia*/
#footer-tim {margin-top:0px;height:310px}
.footer-tim {width:748px;height:310px}
.bar-secundary {height:104px}
.nav-f {width:530px;float:left;padding-left:0px}
.box-sz1 {width:110px}
.box-sz2 {width:154px;padding-top:90px}
#et-featured-posts {margin-top:0}
.creditos {margin-top:-55px;width:768px;width:730px}
#mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item > a.mega-menu-link {font-size: 12px;height: 36px}
}

@media only screen and (min-width: 960px) {
#mega-menu-wrap-header-1 #mega-menu-header-1 > li.mega-menu-item > a.mega-menu-link {font-size: 13px;height: 40px}
.logo2 {width:280px;float:left;margin-top:-5px;padding-right:20px}
.logo2 {width:220px;margin-top:-5px;padding-right:12px}
.box-it {float:left;padding:20px}
.box-sz3 {width:630px}
.box-sz3 li {padding:5px 5px;font-size:10.5pt}
.fa-search {margin-top:0px}
.logo2 img {width:270px}
.footer-tim {width:1000px;height:170px;font-size:10pt;padding:30px}
.creditos {width:1000px;height:25px;margin:0 auto;padding-top:50px}
.container-2 {width:1170px;margin:0 auto}
.search2 {padding-left:0}
.bar-secundary {height:90px}
.nav-f {width:620px;float:left;padding-left:70px;display:block;z-index:1;height:90px}
.menu-fixed-border-left {border-color: #155ea3;border-style: solid;border-width: 0 2px 0 0;}
.menu-fixed-bottom-left {top: 34px;}
.main {margin-top:0px}


.footer-links a {color: #ffffff;padding-top: 5px;line-height: 20px;text-decoration: none;}
.footer-links a:hover {color:#89c3ff}
.footer-links li {list-style: none;color: #ffffff;padding-top: 5px;line-height: 0px;}

ul.rede-social  {list-style: none;}
.rede-social {width:200px;float:right;display:block;font-size:16pt}
.rede-social li {display:inline-block;padding:10px 5px}
.rede-social li a {color:#fff}
.nav-i {width:550px;height:30px}
.nav-e {width:350px;float:left;padding-bottom:0;padding-top:0;height:44px}
.search2 {margin-left:0}

/*pro TIMFazCiencia*/
.logo-project img {width:112px;z-index:99999}
.logo-project {width:112px;padding-left:10px;padding-top:24px;margin-top:0;height:35px;z-index:99999}
.box-it h2 {font-size:16px}
.box-sz2 ul, .box-sz2 li {margin:0; padding:0}
.box-sz1 {width:136px}
.footer-links {margin-left: 0px}
.box-sz2 {width:240px;text-align:center}
#footer-tim {height:360px;color:#89c3ff;margin-top:0px}
}


</style>


</head>
<body <?php body_class(); ?>>



<div id="tim-container">

	<div class="logo-it">
		<div class="container-2 bar-primary">
			<a href="http://tim.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_portal_tim.png" title="Instituto TIM" alt="Instituto TIM" /></a>
		</div>
	</div>
	
	<div class="menu-it">
		<div class="container-2 bar-secundary">
			<div class="logo2 menu-fixed-bottom-left menu-fixed-border-left">
				<a href="https://institutotim.org.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
			</div>
			
			<div class="logo-project">
				<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_timfazciencia.png" alt="" title="" /></a>
			</div>
			
			<div class="nav-f">
                                <div class="nav-i">
                                        <div class="nav-e">
                                                    <div class="search2">
                                                            <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                                                                    <input type="search" class="search2" placeholder="O que você procura?" value="" name="s" title="O que você procura?" />
                                                                    <span class="icon"><i class="fa fa-search"></i></span>
                                                            </form>
                                                    </div>
                                        </div>

<!----
                                          <div class="rede-social">
						  <ul>
						  <li><a href="https://www.facebook.com/TIMFazCiencia/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						  <li><a href="https://www.youtube.com/channel/UCWnd3qxdHRziiDG_yJfU1hQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						  <li><a href="https://www.flickr.com/photos/121406068@N03/albums" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
						  <li><a href="https://www.flickr.com/photos/128197418@N02/albums" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
						  </ul>
                                          </div>
--->

                                </div>
				<div class="nav-it">
					<?php wp_nav_menu( array( 'theme_location' => 'header-1' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>


