<?php
// Register Custom Post Type Evento
// Post Type Key: evento
function create_evento_cpt() {

	$labels = array(
		'name' => _x( 'Eventos', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Evento', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Eventos', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Evento', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Evento', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Evento', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Evento:', 'isaeuniversidad' ),
		'all_items' => __( 'Todos los Eventos', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Evento', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Evento', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Evento', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Evento', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Evento', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Eventos', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Evento', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Eventos.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Evento encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Evento', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Evento', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Eventos', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Eventos', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Eventos filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Evento', 'isaeuniversidad' ),
		'description' => __( 'Eventos de la universidad', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-megaphone',
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
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'evento', $args );

}
add_action( 'init', 'create_evento_cpt', 0 );