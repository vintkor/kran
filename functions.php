<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_theme_support('post-thumbnails');
remove_action('wp_head', 'wp_generator');

function custom_disable_embeds_init() {
    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');
    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}

//Убираем лишние теги
// remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий


// --------------------Регистрация меню верхнее--------------------------------------
add_action('init', 'top_menu');
function top_menu() {
    register_nav_menus(array(
        'top-menu' => 'Меню сайта верхнее'
    ));
}

// --------------------Регистрация меню футер --------------------------------------
add_action('init', 'footer_menu');
function footer_menu() {
    register_nav_menus(array(
        'footer-menu' => 'Меню в футере основное'
    ));
}

// --------------------Регистрация меню футер правое --------------------------------------
add_action('init', 'footer_menu_right');
function footer_menu_right() {
    register_nav_menus(array(
        'footer-menu-right' => 'Меню в футере правое'
    ));
}

// --------------------Виджет контакты в футере---------------------------
function footer_contact_text_widget_init() {
  register_sidebar( array(
    'name'          => 'Контакты в футере',
    'id'            => 'footer_contact',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<span class="hidden">',
    'after_title'   => '</span>',
  ) );
}
add_action( 'widgets_init', 'footer_contact_text_widget_init' );

// --------------------Виджет каталог в футере---------------------------
function footer_calalog_text_widget_init() {
  register_sidebar( array(
    'name'          => 'Каталог в футере',
    'id'            => 'footer_calalog',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<span class="hidden">',
    'after_title'   => '</span>',
  ) );
}
add_action( 'widgets_init', 'footer_calalog_text_widget_init' );

/*
** Отключение вкладок на странице товара
*/

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

unset( $tabs['reviews'] ); // Убираем вкладку "Отзывы"
unset( $tabs['additional_information'] ); // Убираем вкладку "Свойства"

return $tabs;

}

// --------------------Скрыть количество товара в выводимых категориях--------------------------

add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );

function woo_remove_category_products_count() {
    return;
}
