<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('py-4', $product); ?>>
    <div class="container-fluid">

        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-7 foto-producto">
                <?php woocommerce_breadcrumb(); ?>
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action('woocommerce_before_single_product_summary');

                ?>
            </div>
            <div class="col-12 col-md-5 text-center detalles-producto pt-5">
                <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                do_action('woocommerce_single_product_summary');
                ?>

                <div class="tipo--entrega">
                    <?php if ($categoria_producto == 16) {
                        $clasediseno = "checkmark";
                    } else {
                        $clasediseno = "checkmark2";
                    }; ?>
                    <ul class="row flex-column caracteristicas-destacadas">
                        <?php if ($categoria_producto == 16) { ?>
                            <?php $color = get_field('nombre_color');
                            if (!empty($color)) { ?>
                                <li class="padextra">
                                    <div class="muestra-color" style="background-color:<?php the_field('codigo_color', false, false); ?>"></div><?php the_field('nombre_color'); ?>
                                </li>
                            <?php }; ?>
                        <?php }; ?>
                        <?php $caracteristica1 = get_field('caracteristicas_destacadas_uno');
                        if (!empty($caracteristica1)) { ?>
                            <li class="<?php echo $clasediseno; ?>"><?php the_field('caracteristicas_destacadas_uno'); ?></li>
                        <?php }; ?>
                        <?php $caracteristica2 = get_field('caracteristicas_destacadas_dos');
                        if (!empty($caracteristica2)) { ?>
                            <li class="<?php echo $clasediseno; ?>"><?php the_field('caracteristicas_destacadas_dos'); ?></li>
                        <?php }; ?>
                        <?php $caracteristica3 = get_field('caracteristicas_destacadas_tres');
                        if (!empty($caracteristica3)) { ?>
                            <li class="<?php echo $clasediseno; ?>"><?php the_field('caracteristicas_destacadas_tres'); ?></li>
                        <?php }; ?>
                        <?php $caracteristica4 = get_field('caracteristicas_destacadas_cuatro');
                        if (!empty($caracteristica4)) { ?>
                            <li class="<?php echo $clasediseno; ?>"><?php the_field('caracteristicas_destacadas_cuatro'); ?></li>
                        <?php }; ?>
                        <?php $caracteristica5 = get_field('caracteristicas_destacadas_cinco');
                        if (!empty($caracteristica5)) { ?>
                            <li class="<?php echo $clasediseno; ?>"><?php the_field('caracteristicas_destacadas_cinco'); ?></li>
                        <?php }; ?>
                        <?php $caracteristica6 = get_field('caracteristicas_destacadas_seis');
                        if (!empty($caracteristica6)) { ?>
                            <li class="<?php echo $clasediseno; ?>"><?php the_field('caracteristicas_destacadas_seis'); ?></li>
                        <?php }; ?>
                        <?php $caracteristica7 = get_field('caracteristicas_destacadas_siete');
                        if (!empty($caracteristica7)) { ?>
                            <li class="<?php echo $clasediseno; ?>"><?php the_field('caracteristicas_destacadas_siete'); ?></li>
                        <?php }; ?>


                        <?php /*
                        $tbdatos = get_field('datos_de_busto');
                        if ($tbdatos) : ?>

                            <div class="tabla-de-caracteristicas">
                                <div class="cat cat-titulo">
                                    <?php echo $tbdatos['titulo_busto']; ?></div>
                                <div class="cate"><?php echo $tbdatos['busto_uno']; ?></div>
                                <div class="cate"><?php echo $tbdatos['busto_dos']; ?></div>
                                <div class="cate"><?php echo $tbdatos['busto_tres']; ?></div>
                                <div class="cat cat-titulo"><?php echo $tbdatos['titulo_cadera']; ?></div>
                                <div class="cate"><?php echo $tbdatos['cadera_dos']; ?></div>
                                <div class="cate"><?php echo $tbdatos['cadera_uno']; ?></div>
                                <div class="cate"><?php echo $tbdatos['cadera_tres']; ?></div>
                                <div class="cat cat-titulo"><?php echo $tbdatos['titulo_cintura']; ?></div>
                                <div class="cate"><?php echo $tbdatos['cintura_uno']; ?></div>
                                <div class="cate"><?php echo $tbdatos['cintura_dos']; ?></div>
                                <div class="cate"><?php echo $tbdatos['cintura_tres']; ?></div>
                                <div class="cat cat-titulo"><?php echo $tbdatos['titulo_largo_de_prenda']; ?></div>
                                <div class="cate"><?php echo $tbdatos['largo_de_prenda_uno']; ?></div>
                                <div class="cate"><?php echo $tbdatos['largo_de_prenda_dos']; ?></div>
                                <div class="cate"><?php echo $tbdatos['largo_de_prenda_tres']; ?></div>
                            </div>

                        <?php endif; */?>
                        
                        <div class="tabla-de-caracteristicas">
                        <?php echo do_shortcode( '[contact-form-7 id="242" title="avisame cuando tenga stock este producto"]' );?>
                        </div>
                       
                    </ul>
                    <?php $envio = get_field('envio_a_domicilio');
                    $retiro = get_field('retira_tu_compra');
                    if (!empty($envio) || !empty($retiro)) { ?>
                        <h6 class="subtitulo-sm bold mt-5 mb-0">Tipo de entrega: </h6>
                        <div class="row flex-column caracteristicas-destacadas">
                            <?php if (!empty($envio)) { ?>

                                <button class="tipo--entrega--in" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Puedes escoger donde enviar tu compra desde tu boleta o tu cuenta">
                                    <i class="fas fa-truck"></i>
                                    <span>Envío a domicilio</span>
                                </button>
                            <?php }; ?>
                            <?php if (!empty($retiro)) { ?>

                                <button class="tipo--entrega--in" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Puedes retirar en <?php the_field('retira_tu_compra_txt', false, false); ?>">
                                    <i class="fas fa-store-alt"></i>
                                    <span>Retira tu compra</span>
                                </button>



                            <?php }; ?>
                        <?php }; ?>
                        </div>
                        <!---compartir botones--->
                        <div class="share-buttons">
                            <div class="botones-share boton-uno">
                                <a target="_blank" href="https://www.facebook.com/EscuelaDisenoDuoc"><i class="fab fa-facebook"></i></a>
                            </div>
                            <div class="botones-share boton-dos">
                                <a href="http://twitter.com/share?url=<?php echo urlencode(get_permalink($post->ID)); ?>&via=Azahar&count=horizontal" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>

                            <div class="botones-share boton-cinco">
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                       


                        </div>
                        <!---compartir botones--->
                </div>
            </div>
        </div>
       
    </div>
</div>
<div class="container">
    <?php do_action('woocommerce_after_single_product'); ?>
    <h3 class="text-center titulo-secciones">Te puede interesar</h3>
        <?php include get_template_directory() . '/assets/modulos/modulo-productos/producto-destacados-post-type.php'; ?>
    <!-- carrusel de productos -->
</div>
