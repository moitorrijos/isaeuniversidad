<?php

// Register Custom Post Type Vida Universitaria
// Post Type Key: vidauniversitaria
function create_vidauniversitaria_cpt() {

	$labels = array(
		'name' => _x( 'Vida Universitaria', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Vida Universitaria', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Vida Universitaria', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Vida Universitaria', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Vida Universitaria', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Vida Universitaria', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Vida Universitaria:', 'isaeuniversidad' ),
		'all_items' => __( 'Ver todas', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Vida Universitaria', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Vida Universitaria', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Vida Universitaria', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Vida Universitaria', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Vida Universitaria', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Vida Universitaria', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Vida Universitaria', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Vida Universitaria.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Vida Universitaria encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Vida Universitaria', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Vida Universitaria', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Vida Universitaria', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Vida Universitaria', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Vida Universitaria filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Vida Universitaria', 'isaeuniversidad' ),
		'description' => __( 'Artículos relacionados a la vida universitaria de ISAE', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-smiley',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category'),
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
	register_post_type( 'vidauniversitaria', $args );

}
add_action( 'init', 'create_vidauniversitaria_cpt', 0 );