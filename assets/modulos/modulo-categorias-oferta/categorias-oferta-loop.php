<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-categorias-oferta/categorias-oferta.css'; ?>
   
</style>

<div class="container-fluid mt-3 contenedor-productos-home carusel--productos">


    <!--productos destacados-->
    <ul class="row p-0">

        <?php $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 12; // -1 shows all posts
        $args = array(
            'post_type' => 'categoriaof',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);

        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <a style="background-color:<?php the_field('color_de_fondo_bloque_web'); ?>;" class="<?php the_field('display'); ?> <?php the_field('alineacion_de_los_elementos'); ?> <?php the_field('tipo_de_columna'); ?> col-12 col-md-<?php the_field('columnas'); ?>" href="<?php the_field('link_layout'); ?>">
            <figure class="tarjeta-contenedor-boxinfo <?php the_field('display'); ?> <?php the_field('tipo_de_columna'); ?>  <?php the_field('alineacion_de_los_elementos'); ?> <?php the_field('orden_de_fila'); ?>" href="<?php the_field('link_layout'); ?>">


                <img style="max-width:<?php the_field('ancho_imagen'); ?>;" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">
                <figcaption class="<?php the_field('alinear_texto'); ?>">
                    <h5><?php echo get_the_title(); ?></h5>
                    <p><?php echo get_the_excerpt(); ?></p>

                </figcaption>

            </figure>

        </a>



<?php
    endwhile;
endif;
wp_reset_query();
$wp_query = $temp ?>


</div>