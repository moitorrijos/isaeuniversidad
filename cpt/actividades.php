<?php

// Register Custom Post Type Actividad
// Post Type Key: actividad
function create_actividad_cpt() {

	$labels = array(
		'name' => _x( 'Actividades', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Actividad', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Actividades', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Actividad', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Actividad', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Actividad', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Actividad:', 'isaeuniversidad' ),
		'all_items' => __( 'Todas las Actividades', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Actividad', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Actividad', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Actividad', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Actividad', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Actividad', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Actividades', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Actividad', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Actividades.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Actividad encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Actividad', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Actividad', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Actividades', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Actividades', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Actividades filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Actividad', 'isaeuniversidad' ),
		'description' => __( 'Actividades de la universidad', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-activity',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'show_in_graphql' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'actividad', $args );

}
add_action( 'init', 'create_actividad_cpt', 0 );