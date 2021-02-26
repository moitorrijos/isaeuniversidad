<?php

// Register Custom Post Type Oferta Académica
// Post Type Key: ofertaacadmica

function create_ofertaacadmica_cpt() {

	$labels = array(
		'name' => _x( 'Ofertas Académicas', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Oferta Académica', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Oferta Académica', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Oferta Académica', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Oferta Académica', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Oferta Académica', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Oferta Académica:', 'isaeuniversidad' ),
		'all_items' => __( 'Todas las Ofertas', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Oferta Académica', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Oferta Académica', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Oferta Académica', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Oferta Académica', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Oferta Académica', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Oferta Académica', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Oferta Académica', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Ofertas.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Oferta Académica encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Oferta Académica', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Oferta Académica', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Oferta Académica', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Oferta Académica', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Ofertas filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Oferta Académica', 'isaeuniversidad' ),
		'description' => __( 'Oferta Académica', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('taxofertasacademicas'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'ofertaacadmica', $args );

}
add_action( 'init', 'create_ofertaacadmica_cpt', 0 );