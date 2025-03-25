<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="refresh" content="60000">
        <?php wp_head(); ?>
    </head>
<body>

<!--  MENU -->
<ul>
	<li>
		<?php wp_list_pages( 'title_li=&depth=1' ); ?>
	</li>
</ul>

<!--  MENU AVANZADO-->

<?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium' ); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="logo">
	<a href="<?php echo home_url() ?>"><?php echo $custom_logo ?></a>
</div>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    <span class="navbar-toggler-icon"></span>
</button>

<?php
	wp_nav_menu( array(
	'theme_location'  => 'menu',
	'depth'           => 2,
	'container'       => 'div',
	'container_id'    => 'navbarSupportedContent',
	'container_class' => 'collapse navbar-collapse',
	'menu_class'      => 'nav navbar-nav ms-auto',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker()
	) );
?>

</nav>

<!-- Alineaciones documentación bootstrap 5-->
https://stackoverflow.com/questions/63948287/bootstrap-5-navbar-align-items-right

<!-- INCLUDES -->
 
<?php get_header(); ?> 
<?php get_sidebar(); ?> 
<?php get_footer(); ?>
 
 

 
<!-- HEAD -->



<!-- CSS -->

/* 
Theme Name: Nombre Tema
Theme URI: www.misite.cl
Description: descripcion del tema
Version: 1
Author: auto
Author URI: direccion web autor
*/


<!-- LOOP DE WORDPRESS -->

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?> 
	<h1> <?php the_title(); ?> </h1> <!-- TITULO -->
	<h2> <?php the_time('F jS, Y') ?> </h2> <!-- FECHA -->
	<p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
	
<?php endwhile; ?> 
<?php else : ?>  
<?php endif; ?>
<?php wp_reset_query(); ?>


<!-- QUERY -->
<!-- Filtro de categorías -->
<?php query_posts(“Aquí van los valores”); ?> <!-- entre el if y while -->

<?php query_posts("category_name=banner"); ?>

Valores separados por &:
	- Categoría: category_name=banner
	- Paginación: paged=$paged
	- Cantidad de posts: showposts=3
	- Orden de los post: order= ASC o DESC


<!-- Filtro de paginación -->
<?php query_posts("paged=$paged"); ?>


<!--Valores dentro del Loop: -->
- Agregar un texto antes del llamado: <?php _e( ‘Posteado en’ ); ?> 
- La Categoría: <?php the_category( ', ' ); ?>
- El Autor: <?php the_author(); ?>
- Titulo: <?php the_title(); ?>
- Contenido: <?php the_content(); ?>
- Resumen: <?php the_excerpt(); ?>
- Fecha: <?php the_time(‘Y’); ?>   // (https://codex.wordpress.org/Formatting_Date_and_Time)
- Tags: <?php the_tags(); ?>
- Categoría: <?php the_category(); ?>
- Comentarios: <?php comment_form(); ?>


<!-- Post Thumbnails -->

<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>

<!-- Post Thumbnails functions.php -->
add_theme_support( 'post-thumbnails' );

the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' ); // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'medium_large' ); // Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail( 'large' ); // Large resolution (default 1024px x 1024px max)
the_post_thumbnail( 'full' ); // Original image resolution (unmodified)
the_post_thumbnail( array( 100, 100 ) ); // Other resolutions (height, width)





<!-- Volver atrás -->
<a href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
	
<a href="javascript:history.back()">&laquo; Volver Atrás</a>


<!-- TEMPLATE PAGE -->

<?php
/*
Template Name: Pagina
*/
?>

<!-- PLUGIN HOOK -->
<?php wp_footer(); ?>
<?php wp_head(); ?>

<!--TAG PARA LINK DEL POST-->
<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>

Navegación entre post:
Reemplazar 
<?php endwhile; ?> 
<?php else : ?>  
<?php endif; ?>

Por:
<!-- NAVEGACIÓN ENTRE POST-->
<?php endwhile; ?>

<!-- PAGINACIÓN 01 -->
<h5 class="text-left"><?php previous_post_link(' %link','&laquo Anterior','1') ?></h5>								
<h5 class="text-left"><a href="<?php the_permalink(); ?>/noticias">info</a></h5>
<h5 class="text-left"><?php next_post_link('%link ','Siguiente &raquo','1') ?></h5>

<!-- PAGINACIÓN 02 -->
<?php wp_pagenavi(); ?>

	
<?php else : ?>
<!-- sino encuentro -->
<h5>UPS!... lo buscas no se encuentra disponible</h5>

<?php endif; ?>



<!-- BUSCADOR -->
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<?php $id_categoria = get_cat_id('noticias'); ?>
	
	<div class="buscador_form">
	
	<input type="text" placeholder="Buscar…" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="hidden" name="cat" value="<?php echo $id_categoria; ?>" />
	<button type="submit" class="icon-only" id="searchsubmit"><i class="fa fa-search"></i></button>	
	</div>
</form>

<!--MULTIPLES SINGLE PAGE-->

<?php
$post = $wp_query->post;
if ( in_category('noticias') ) {
include(TEMPLATEPATH . '/single_notcias.php'); } 
elseif ( in_category('productos') ) {
include(TEMPLATEPATH . '/single_productos.php'); }
elseif ( in_category('servicios') ) {
include(TEMPLATEPATH . '/single_servicios.php'); }
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>

<?php echo do_shortcode( '' ); ?>

<?php dynamic_sidebar( '' ); ?>






