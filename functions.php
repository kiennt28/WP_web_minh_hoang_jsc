<?php
/**
 * Nhung file css
 */
function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/plugin/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/app.css', array(), false, 'all');
    wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'load_css');
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
        * Theme custom background
        */
        $default_background = array (
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-background', $default_background);
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
