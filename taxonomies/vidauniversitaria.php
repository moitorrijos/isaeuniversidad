<?php

// Register Taxonomy Vida Universtaria
// Taxonomy Key: vidauniverstariatax
function create_vidauniverstaria_tax() {

	$labels = array(
		'name'              => _x( 'Vida Universitaria', 'taxonomy general name', ' isaeuniversidad' ),
		'singular_name'     => _x( 'Vida Universtaria', 'taxonomy singular name', ' isaeuniversidad' ),
		'search_items'      => __( 'Buscar Vida Universitaria', ' isaeuniversidad' ),
		'all_items'         => __( 'Todas', ' isaeuniversidad' ),
		'parent_item'       => __( 'Padre Vida Universtaria', ' isaeuniversidad' ),
		'parent_item_colon' => __( 'Padre Vida Universtaria:', ' isaeuniversidad' ),
		'edit_item'         => __( 'Editar Vida Universtaria', ' isaeuniversidad' ),
		'update_item'       => __( 'Actualizar Categoría Vida Universtaria', ' isaeuniversidad' ),
		'add_new_item'      => __( 'Agregar Categoía Vida Universtaria', ' isaeuniversidad' ),
		'new_item_name'     => __( 'Nuevo Nombre', ' isaeuniversidad' ),
		'menu_name'         => __( 'Categorías VU', ' isaeuniversidad' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Categorías para vida universitaria', ' isaeuniversidad' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'vidauniverstariatax', array('vidauniversitaria'), $args );

}
add_action( 'init', 'create_vidauniverstaria_tax' );