<?php

/**
 * funcion slider.  chupalo fede
 */

include get_template_directory() . '/assets/customizer/comercio-color-icon.php';
include get_template_directory() . '/assets/woocommerce/funciones_woocommerce.php';

/*assets styles*/
add_post_type_support('page', 'excerpt');


// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

function comercio_framework()
{
    wp_register_style('iconos', get_template_directory_uri() . '/assets/librerias/css/fafa/css/all.css', 'all');
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap', 'all');
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('root', get_template_directory_uri() . '/assets/librerias/css/root.css', 'all');
    wp_register_style('comercio-general-css', get_template_directory_uri() . '/assets/librerias/css/titan.css', 'all');
    wp_register_style('comercio-ecommerce', get_template_directory_uri() . '/assets/librerias/css/ecommerce.css', 'all');
    wp_register_style('ficha-producto', get_template_directory_uri() . '/assets/librerias/css/ficha-producto.css', 'all');
    wp_register_style('proyecto', get_template_directory_uri() . '/assets/librerias/css/project.css', 'all');
wp_register_style('mobile', get_template_directory_uri() . '/assets/librerias/css/mobile.css', 'all');

    

    wp_enqueue_style('iconos');
    wp_enqueue_style('fuentes');
    wp_enqueue_style('root');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('comercio-ecommerce');
    wp_enqueue_style('ficha-producto');
    wp_enqueue_style('comercio-general-css');
    wp_enqueue_style('proyecto');
    wp_enqueue_style('mobile');
}


add_action('wp_enqueue_scripts', 'comercio_framework');


/*assets styles*/




/*assets scripts*/

function comercio_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:

    wp_register_script('comercio-js', get_bloginfo('template_directory') . '/assets/librerias/js/titan.js', array('jquery'), '1', false);
       wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', false, true);
        wp_register_script('slider-fluid', get_bloginfo('template_directory') . '/assets/librerias/js/slick.js', array('jquery'), '1', true);
        wp_register_script('parallax', get_bloginfo('template_directory') . '/assets/librerias/js/parallax.js', array('jquery'), '1', false);
        
        
        /*encolamos los JS*/
        wp_enqueue_script('comercio-js', array('jquery'), true);
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('parallax');
        wp_enqueue_script('slider-fluid');

        
        
        
    }
}
add_action("wp_enqueue_scripts", "comercio_script", 1);




/*assets scripts*/



/*widget assets*/
function widget_menu_footer()
{
    register_sidebar(array('name' => 'Columna 1 IZQUIERDO', 'id' => 'uno_izquierdo', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Columna 2 IZQUIERDO', 'id' => 'dos_izquierdo', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo ">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Columna 3 IZQUIERDO', 'id' => 'tres_izquierdo', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Columna 1 DERECHO', 'id' => 'uno_derecho', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo footer-element-flex">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    //register_sidebar(array('name' => 'Columna INFERIOR 1 IZQUIERDA', 'id' => 'uno_izquierdo_inf', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Columna INFERIOR 2 DERECHA', 'id' => 'dos_derecho_inf', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo footer-element-flex">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    
    
}

add_action('widgets_init', 'widget_menu_footer');
/*widget assets*/


/*extracto*/
function tn_custom_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);


//registros de nav menu
//include get_template_directory() . '/assets/templates/navs/nav-register.php';


//Boleta factura.
// 
/*include(get_stylesheet_directory() . '/assets/modulos/boleta-factura-modulo.php');*/

 
//Regiones.
//
include get_template_directory() . '/assets/regiones-chile.php';
include get_template_directory() . '/assets/modulos/modulo-slider/core-slider.php';
include get_template_directory() . '/assets/woocommerce/campos-woocommerce.php';
include get_template_directory() . '/assets/modulos/modulo-carrusel-logos/core-carrusel-logo.php';
include get_template_directory() . '/assets/modulos/modulo-categorias-oferta/core-categorias-oferta.php';
include get_template_directory() . '/assets/modulos/modulo-boxinfo/core-modulo-boxinfo.php';
include get_template_directory() . '/assets/modulos/modulo-boxinfo-inferior/core-modulo-boxinfo-inferior.php';
//widget wsapp
include get_template_directory() . '/assets/widgets/widget-whatsapp.php';


