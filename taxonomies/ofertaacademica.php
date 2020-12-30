<?php

// Register Taxonomy Oferta Académica
// Taxonomy Key: ofertaacademica
function create_ofertaacadmica_tax() {

	$labels = array(
		'name'              => _x( 'Ofertas Académicas', 'taxonomy general name', 'isaeuniversidad' ),
		'singular_name'     => _x( 'Oferta Académica', 'taxonomy singular name', 'isaeuniversidad' ),
		'search_items'      => __( 'Search Ofertas Académicas', 'isaeuniversidad' ),
		'all_items'         => __( 'All Ofertas Académicas', 'isaeuniversidad' ),
		'parent_item'       => __( 'Parent Oferta Académica', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Parent Oferta Académica:', 'isaeuniversidad' ),
		'edit_item'         => __( 'Edit Oferta Académica', 'isaeuniversidad' ),
		'update_item'       => __( 'Update Oferta Académica', 'isaeuniversidad' ),
		'add_new_item'      => __( 'Add New Oferta Académica', 'isaeuniversidad' ),
		'new_item_name'     => __( 'New Oferta Académica Name', 'isaeuniversidad' ),
		'menu_name'         => __( 'Oferta Académica', 'isaeuniversidad' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Ofertas académicas de la universidad', 'isaeuniversidad' ),
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
	register_taxonomy( 'ofertaacademica', array(), $args );

}
add_action( 'init', 'create_ofertaacadmica_tax' );