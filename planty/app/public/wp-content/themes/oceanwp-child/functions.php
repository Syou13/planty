<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ) {
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
            $uri = get_template_directory_uri() . '/rtl.css';
        }
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome', 'simple-line-icons', 'oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


// Ajouter un lien "Admin" au menu pour les administrateurs
function display_admin( $items, $args ) {
    if ( current_user_can( 'manage_options' ) && $args->theme_location == 'main_menu' ) {
        $admin_item = '<li id="menu-admin" class=""><a href="' . admin_url() . '" class="menu-link"><span class="text-wrap">Admin</span></a></li>';
        
        // Utilisation de preg_split pour séparer correctement les éléments de menu
        $menu_items = preg_split( '/<\/li>/', $items ); // Correction de l'échappement
        
        // Insertion du lien "Admin" après le premier élément de menu
        array_splice( $menu_items, 1, 0, array( $admin_item ) );
        
        // Reconstruction du menu
        $items = implode( '</li>', $menu_items ) . '</li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'display_admin', 10, 2 );


if ( !function_exists( 'add_commander_button' ) ):
    function add_commander_button($items, $args) {
        if ($args->theme_location == 'main_menu') {
            // Vérifier si le paramètre 'clicked' est dans l'URL
            $is_clicked = isset($_GET['clicked']) ? ' clicked' : '';

            // Ajouter un lien "Commander" qui redirige vers la page /commander/
            $commander_item = '<li><a href="http://planty.local/commander/?clicked=true" class="menu-link commander-button' . $is_clicked . '">Commander</a></li>';

            // Ajouter le bouton à la fin du menu
            $items .= $commander_item;
        }
        return $items;
    }
endif;
add_filter('wp_nav_menu_items', 'add_commander_button', 10, 2);
