<?php

// Register Custom Post Type Unidad Académica
// Post Type Key: unidad_academica
function create_unidadacadmica_cpt() {

	$labels = array(
		'name' => _x( 'Unidades Académicas', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Unidad Académica', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Unidades Académicas', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Unidad Académica', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Unidad Académica', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Unidad Académica', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Unidad Académica:', 'isaeuniversidad' ),
		'all_items' => __( 'Todas Unidades Académicas', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Unidad Académica', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Unidad Académica', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Unidad Académica', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Unidad Académica', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Unidad Académica', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Unidades Académicas', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Unidad Académica', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Unidades Académicas.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Unidad Académica encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Unidad Académica', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Unidad Académica', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Unidades Académicas', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Unidades Académicas', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Unidades Académicas filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Unidad Académica', 'isaeuniversidad' ),
		'description' => __( 'Unidad Académica por Departamento y Sede.', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array('title', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
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
	register_post_type( 'unidad_academica', $args );

}
add_action( 'init', 'create_unidadacadmica_cpt', 0 );