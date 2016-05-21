<?php  
/* 
Plugin Name: Custom Types Cbre
Plugin URI: http://www.yourpluginurlhere.com/ 
Version: Current Version 
Author: Gabriel
Description: For write information about reports
*/  

//custom types

function custom_post_reportes() {
  $labels = array(
    'singular_name'      => _x( 'Reporte', 'custom type slug'),
    'add_new'            => _x( 'Add New', 'custom type slug'),
    'add_new_item'       => __( 'Add New Reporte' ),
    'edit_item'          => __( 'Edit Reporte' ),
    'new_item'           => __( 'New Reporte' ),
    'all_items'          => __( 'All Reporte' ),
    'view_item'          => __( 'View Reporte' ),
    'search_items'       => __( 'Search Reporte' ),
    'not_found'          => __( 'No Reporte found' ),
    'not_found_in_trash' => __( 'No Reporte found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Reportes de Mercado'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Datos específicos de los reportes',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'reporte', $args );
}
add_action( 'init', 'custom_post_reportes' );

function custom_post_casos() {
  $labels = array(
    'singular_name'      => _x( 'Caso', 'custom type slug'),
    'add_new'            => _x( 'Add New', 'custom type slug'),
    'add_new_item'       => __( 'Add New Caso' ),
    'edit_item'          => __( 'Edit Caso' ),
    'new_item'           => __( 'New Caso' ),
    'all_items'          => __( 'All Caso' ),
    'view_item'          => __( 'View Caso' ),
    'search_items'       => __( 'Search Caso' ),
    'not_found'          => __( 'No Caso found' ),
    'not_found_in_trash' => __( 'No Caso found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Casos de Éxito'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Datos específicos de los casos de éxito',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail','page-attributes'),
    'has_archive'   => true,
  );
  register_post_type( 'caso', $args );
}
add_action( 'init', 'custom_post_casos' );

function custom_post_premios() {
  $labels = array(
    'singular_name'      => _x( 'Premio', 'custom type slug'),
    'add_new'            => _x( 'Add New', 'custom type slug'),
    'add_new_item'       => __( 'Add New Premio' ),
    'edit_item'          => __( 'Edit Premio' ),
    'new_item'           => __( 'New Premio' ),
    'all_items'          => __( 'All Premio' ),
    'view_item'          => __( 'View Premio' ),
    'search_items'       => __( 'Search Premio' ),
    'not_found'          => __( 'No Premio found' ),
    'not_found_in_trash' => __( 'No Premio found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Premios y Reconocimientos'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Datos específicos de los premios',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'Premio', $args );
}
add_action( 'init', 'custom_post_premios' );
?>