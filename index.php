<?php
/*
Plugin Name: DeMomentSomTres Equips
Plugin URI: http://demomentsomtres.com/english/wordpress-plugins/demomentsomtres-teams/
Description: Plugin that will create a custom post type displaying Teams
Version: 1.0.1
Author: Marc Queralt
Author URI: http://demomentsomtres.com/
License: GPLv2
*/
define('DMST_EQUIPS_DOMAIN','dmst-equips');

load_plugin_textdomain( DMST_EQUIPS_DOMAIN, false, plugin_dir_url( __FILE__ ) . '/languages' );
add_action( 'init', 'dmst_create_equips',0 );

function dmst_create_equips() {
        $labels = array(
        'name' => _x('Temporades', 'taxonomy general name',DMST_EQUIPS_DOMAIN),
        'singular_name' => _x('Temporada', 'taxonomy singular name',DMST_EQUIPS_DOMAIN),
        'search_items' => __('Buscar temporades',DMST_EQUIPS_DOMAIN),
        'all_items' => __('Totes les temporades',DMST_EQUIPS_DOMAIN),
        'parent_item' => __('Temporada superior',DMST_EQUIPS_DOMAIN),
        'parent_item_colon' => __('Temporada superior:',DMST_EQUIPS_DOMAIN),
        'edit_item' => __('Editar temporada',DMST_EQUIPS_DOMAIN),
        'update_item' => __('Actualitzar temporada',DMST_EQUIPS_DOMAIN),
        'add_new_item' => __('Afegir temporada',DMST_EQUIPS_DOMAIN),
        'new_item_name' => __('Nova temporada',DMST_EQUIPS_DOMAIN),
    );

    register_taxonomy('temporada', null, array(
        'hierarchical' => false,
        'labels' => $labels
    ));
    register_post_type( 'equip',
        array(
            'labels' => array(
                'name' => __('Equips',DMST_EQUIPS_DOMAIN),
                'singular_name' => __('Equip',DMST_EQUIPS_DOMAIN),
                'add_new' => __('Afegir',DMST_EQUIPS_DOMAIN),
                'add_new_item' => __('Afegir equip',DMST_EQUIPS_DOMAIN),
                'edit' => __('Editar',DMST_EQUIPS_DOMAIN),
                'edit_item' => __('Editar equip',DMST_EQUIPS_DOMAIN),
                'new_item' => __('Nou equip',DMST_EQUIPS_DOMAIN),
                'view' => __('Veure',DMST_EQUIPS_DOMAIN),
                'view_item' => __('Veure equip',DMST_EQUIPS_DOMAIN),
                'search_items' => __('Buscar equip',DMST_EQUIPS_DOMAIN),
                'not_found' => __('No s\'ha trobat cap equip',DMST_EQUIPS_DOMAIN),
                'not_found_in_trash' => __('No hi ha cap equip a la paperera',DMST_EQUIPS_DOMAIN),
                'parent' => __('Equip superior jeràrquic',DMST_EQUIPS_DOMAIN)
            ),
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'temporada' ),
            'has_archive' => true
        )
    );
}
?>
