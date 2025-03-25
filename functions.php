<?php

// ===========
// = CONEXIÓN A ESTILOS GRÁFICOS CSS =
// ===========
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');

// ===========
// = LOGO DESDE WORDPRESS =
// ===========
add_theme_support( 'custom-logo', array(
	'height'      => 200,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

add_theme_support( 'nav-menus' );
register_nav_menus(array('menu' => __('menu')));
register_nav_menus(array('menu-interno' => __('menu-interno')));


// imagen miniatura
add_theme_support( 'post-thumbnails' );

the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' ); // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'medium_large' ); // Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail( 'large' ); // Large resolution (default 1024px x 1024px max)
the_post_thumbnail( 'full' ); // Original image resolution (unmodified)
the_post_thumbnail( array( 100, 100 ) ); // Other resolutions (height, width)


?>