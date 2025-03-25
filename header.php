<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo('name'); ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    
    <?php wp_head(); ?>
</head>
<body>


<!--  MENU AVANZADO-->

<?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium' ); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">

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
    
