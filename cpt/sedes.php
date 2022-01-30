<?php

// Register Custom Post Type Sede
// Post Type Key: sede
function create_sede_cpt() {

	$labels = array(
		'name' => _x( 'Sedes', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Sede', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Sedes', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Sede', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Sede', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Sede', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Sede:', 'isaeuniversidad' ),
		'all_items' => __( 'Todas las Sedes', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Sede', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Sede', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Sede', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Sede', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Sede', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Sedes', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Sede', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Sedes.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Sede encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Sede', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Sede', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Sedes', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Sedes', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Sedes filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Sede', 'isaeuniversidad' ),
		'description' => __( 'Sede de universidades', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-building',
		'supports' => array('title'),
		'taxonomies' => array('ofertaacademica'),
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
		'show_in_graphql' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'sede', $args );

}
add_action( 'init', 'create_sede_cpt', 0 );