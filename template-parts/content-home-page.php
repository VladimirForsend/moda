<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comercio2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- carrusel de productos -->
  
   <h3 class="text-center titulo-secciones"><?php the_field('titulo_novedades');?></h3>
   <?php include get_template_directory() . '/assets/modulos/modulo-productos/producto-destacados-post-type.php'; ?>
    <!-- carrusel de productos -->
    

</article><!-- #post-<?php the_ID(); ?> -->
