<?php
$post = $wp_query->post;
if ( in_category('servicios') ) {

include(TEMPLATEPATH . '/single-servicio.php'); 

} elseif ( in_category('producto') ) {

include(TEMPLATEPATH . '/single-producto.php'); 

} else {

include(TEMPLATEPATH . '/single-generico.php');

}


?>
