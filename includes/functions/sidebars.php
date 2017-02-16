<?php

add_action( 'widgets_init', 'et_widgets_init' );

function et_widgets_init() {

	register_sidebar( array(

		'name' => 'Assista às aulas',

		'id' => 'sidebar-1',

		'before_widget' => '<div id="%1$s " class="sidebar-1 widget %2$s">',

		'after_widget' => '</div> <!-- end .widget -->',

		'before_title' => '<h4 class="widgettitle sdb-01"><a href="' .  site_url()  . '/conheca-as-7-operacoes">',

		'after_title' => '</a></h4>',

	) );

	register_sidebar( array(

		'name' => 'Queremos ouvir você',

		'id' => 'sidebar-2',

		'before_widget' => '<div id="%1$s" class="sidebar-2 widget %2$s">',

		'after_widget' => '<li class="child-1"><a href="professor">professor</a></li><li class="child-2"><a href="estudante">estudante</a></li><li class="child-3"><a href="interessado">interessado</a></li></div> <!-- end .widget -->',

		'before_title' => '<h4 class="widgettitle sdb-02">',

		'after_title' => '</h4>',

	) ); 

	register_sidebar( array(

		'name' => 'Envie seu trabalho',

		'id' => 'sidebar-3',

		'before_widget' => '<div id="%1$s" class="sidebar-3 widget %2$s">',

		'after_widget' => '</div> <!-- end .widget -->',

		'before_title' => '<h4 class="widgettitle sdb-03">',

		'after_title' => '</h4>',

	) );

	register_sidebar( array(

		'name' => 'Assine nossa Newsletter',

		'id' => 'sidebar-4',

		'before_widget' => '<div id="%1$s" class="sidebar-4 widget %2$s">',

		'after_widget' => '</div> <!-- end .widget -->',

		'before_title' => '<h4 class="widgettitle sdb-04">',

		'after_title' => '</h4>',

	) );


	register_sidebar( array(

		'name' => 'Pensadores',

		'id' => 'sidebar-additional-1',

		'before_widget' => '<div id="%1$s" class="middle-1 widget %2$s">',

		'after_widget' => '</div> <!-- end .widget -->',

		'before_title' => '<h4 class="widgettitle"><a href="' .  site_url()  . '/galeria-de-pensadores">',

		'after_title' => '</a></h4>',

	) );

	register_sidebar( array(

		'name' => 'Prêmios',

		'id' => 'sidebar-additional-2',

		'before_widget' => '<div id="%1$s" class="middle-2 widget %2$s">',

		'after_widget' => '</div> <!-- end .widget -->',

		'before_title' => '<h4 class="widgettitle">',

		'after_title' => '</h4>',

	) );

	register_sidebar( array(

		'name' => 'Produção dos estudantes',

		'id' => 'sidebar-additional-3',

		'before_widget' => '<div id="%1$s" class="middle-3 widget %2$s">',

		'after_widget' => '</div> <!-- end .widget -->',

		'before_title' => '<h4 class="widgettitle">',

		'after_title' => '</h4>',

	) );

	register_sidebar( array(

		'name' => 'Header Widgets',

		'id' => 'header-widgets',

		'before_widget' => '<div id="%1$s" class="header-widget %2$s">',

		'after_widget' => '</div> <!-- end .widget -->',

		'before_title' => '',

		'after_title' => '',

	) );

}

