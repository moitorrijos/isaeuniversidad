<?php

// Register Custom Post Type Carrera
// Post Type Key: carrera
function create_carrera_cpt() {

	$labels = array(
		'name' => _x( 'Carreras', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Carrera', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Carreras', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Carrera', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Carrera', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Carrera', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Carrera:', 'isaeuniversidad' ),
		'all_items' => __( 'Todas Carreras', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Carrera', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Carrera', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Carrera', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Carrera', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Carrera', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Carreras', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Carrera', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Carreras.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Carrera encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Carrera', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Carrera', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Carreras', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Carreras', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Carreras filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Carrera', 'isaeuniversidad' ),
		'description' => __( 'Carreras de ISAE', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-location-alt',
		'supports' => array('title', 'excerpt', 'thumbnail', 'revisions', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
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
		'graphql_single_name' => 'carrera',
		'graphql_plural_name' => 'carreras',
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'carrera', $args );

}
add_action( 'init', 'create_carrera_cpt', 0 );