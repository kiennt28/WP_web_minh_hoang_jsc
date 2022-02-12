<?php
/**
 * Nhung file css, js
 */
function add_theme_scripts() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/plugin/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/app.css', array(), false, 'all');
    wp_enqueue_style('main-style');

    wp_enqueue_style( 'carousel', get_template_directory_uri() . '/plugin/css/owl.carousel.min.css');
    wp_enqueue_style( 'carousel-theme', get_template_directory_uri() . '/plugin/css/owl.theme.default.min.css');

    wp_enqueue_style( 'aos', get_template_directory_uri() . '/plugin/css/aos.css');

    wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . '/plugin/fontawesome/css/all.css' );
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

/**
* Khai bao hang gia tri
* THEME_URL = lay duong dan thu muc theme
* CORE = lay duong dan cua thu muc /core
*/
define('THEME_URL', get_stylesheet_directory());


/**
* Thiet lap chieu rong noi dung
*/
if(!isset($content_width)) {
    $content_width = 580;
}
/**
* Khai bao chuc nang cua theme
*/
if(!function_exists('minhhoangjsc_theme_support')) {
    function minhhoangjsc_theme_support() {
        /**
        * Thiet lap text domain
        */
        $language_folder = THEME_URL . "/languages";
        load_theme_textdomain('minhhoangjsc', $language_folder);
       
        /**
         * Them menu
         */
        register_nav_menus(
            array(
                'top-menu' => 'Top Menu Location',
                'mobile-menu' => 'Mobile Menu Location',
        ));
    }
add_action( 'init', 'minhhoangjsc_theme_support' );
}
/**
 * Thiet lap menu
 */
if(!function_exists('home_menu')) {
    function home_menu() {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'contanier_class' => $menu
        );
        wp_nav_menu($menu);
    }
}
// add_action('after_setup_theme', 'remove_admin_bar');
// function remove_admin_bar() {
//   if (!current_user_can('administrator') && !is_admin()) {
//     show_admin_bar(false);
//   }
// }

