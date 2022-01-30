<?php
// Register Custom Post Type Departamento
// Post Type Key: departamento
function create_departamento_cpt() {

	$labels = array(
		'name' => _x( 'Departamentos', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Departamento', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Departamentos', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Departamento', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Departamento', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Departamento:', 'isaeuniversidad' ),
		'all_items' => __( 'Todos los Departamentos', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nuevo Departamento', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nuevo', 'isaeuniversidad' ),
		'new_item' => __( 'Nuevo Departamento', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Departamento', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Departamento', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Departamento', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Departamentos', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Departamento', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Departamentos.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Departamento encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Departamento', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Departamento', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Departamentos', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Departamentos', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Departamentos filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Departamento', 'isaeuniversidad' ),
		'description' => __( 'Departamentos', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businesswoman',
		'supports' => array('title', 'excerpt', 'thumbnail', 'revisions', 'author', 'post-formats', 'custom-fields'),
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
		'show_in_graphql' => true,
		'graphql_single_name' => 'departamento',
		'graphql_plural_name' => 'departamentos',
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'departamento', $args );

}
add_action( 'init', 'create_departamento_cpt', 0 );