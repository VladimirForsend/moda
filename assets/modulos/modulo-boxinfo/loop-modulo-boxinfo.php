<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-boxinfo/modulo-boxinfo.css'; ?>
</style>

<div class="container-fluid contenedor-boxinfo">
    <div class="row">
        <div class="col-12 col-md-12 mx-auto p-0">
            <!--productos destacados-->
            <ul class="row g-0 p-0">

                <?php $active = true;
                $temp = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_per_page = 12; // -1 shows all posts
                $args = array(
                    'post_type' => 'boxinfo',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'paged' => $paged,
                    'posts_per_page' => $post_per_page
                );
                $wp_query = new WP_Query($args);

                if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <a style="background-color:<?php the_field('color_de_fondo_bloque_web'); ?>;" class="mt-3 <?php the_field('alineacion_del_contenedor'); ?> <?php the_field('display'); ?> <?php the_field('alineacion_de_los_elementos'); ?> <?php the_field('tipo_de_columna'); ?> col-12 col-md-<?php the_field('columnas'); ?>" href="<?php the_field('link_layout'); ?>">
                            <figure class="tarjeta-contenedor-boxinfo <?php the_field('display'); ?> <?php the_field('tipo_de_columna'); ?>  <?php the_field('alineacion_de_los_elementos'); ?> <?php the_field('orden_de_fila'); ?>">


                                <img style="padding:<?php the_field('margen_interior_de_la_imagen'); ?>; max-width:<?php the_field('ancho_imagen'); ?>;" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">
                                <?php
                                $contenido = get_field('titulo_contenido');
                                if (!empty($contenido)) : ?>

                                    <figcaption class="<?php the_field('alinear_texto'); ?>">




                                        <h5 class="<?php the_field('tamano_de_titulo'); ?> <?php the_field('grosor_del_titulo'); ?>"><?php the_field('titulo_contenido'); ?></h5>
                                        <p class="<?php the_field('tamano_de_texto'); ?> <?php the_field('grosor_del_texto'); ?>"><?php the_field('texto_contenido'); ?></p>


                                    </figcaption>
                                <?php endif; ?>
                            </figure>

                        </a>



                <?php
                    endwhile;
                endif;
                wp_reset_query();
                $wp_query = $temp ?>

        </div>
    </div>
</div>