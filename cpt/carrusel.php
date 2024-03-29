<?php
// Register Custom Post Type Diapositiva
// Post Type Key: diapositiva
function create_diapositiva_cpt() {

	$labels = array(
		'name' => _x( 'Diapositivas', 'Post Type General Name', 'isaeuniversidad' ),
		'singular_name' => _x( 'Diapositiva', 'Post Type Singular Name', 'isaeuniversidad' ),
		'menu_name' => _x( 'Diapositivas', 'Admin Menu text', 'isaeuniversidad' ),
		'name_admin_bar' => _x( 'Diapositiva', 'Add New on Toolbar', 'isaeuniversidad' ),
		'archives' => __( 'Archivos Diapositiva', 'isaeuniversidad' ),
		'attributes' => __( 'Atributos Diapositiva', 'isaeuniversidad' ),
		'parent_item_colon' => __( 'Padres Diapositiva:', 'isaeuniversidad' ),
		'all_items' => __( 'Todas Diapositivas', 'isaeuniversidad' ),
		'add_new_item' => __( 'Añadir nueva Diapositiva', 'isaeuniversidad' ),
		'add_new' => __( 'Añadir nueva', 'isaeuniversidad' ),
		'new_item' => __( 'Nueva Diapositiva', 'isaeuniversidad' ),
		'edit_item' => __( 'Editar Diapositiva', 'isaeuniversidad' ),
		'update_item' => __( 'Actualizar Diapositiva', 'isaeuniversidad' ),
		'view_item' => __( 'Ver Diapositiva', 'isaeuniversidad' ),
		'view_items' => __( 'Ver Diapositivas', 'isaeuniversidad' ),
		'search_items' => __( 'Buscar Diapositiva', 'isaeuniversidad' ),
		'not_found' => __( 'No se encontraron Diapositivas.', 'isaeuniversidad' ),
		'not_found_in_trash' => __( 'Ningún Diapositiva encontrado en la papelera.', 'isaeuniversidad' ),
		'featured_image' => __( 'Imagen destacada', 'isaeuniversidad' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'isaeuniversidad' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'isaeuniversidad' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'isaeuniversidad' ),
		'insert_into_item' => __( 'Insertar en la Diapositiva', 'isaeuniversidad' ),
		'uploaded_to_this_item' => __( 'Subido a esta Diapositiva', 'isaeuniversidad' ),
		'items_list' => __( 'Lista de Diapositivas', 'isaeuniversidad' ),
		'items_list_navigation' => __( 'Navegación por el listado de Diapositivas', 'isaeuniversidad' ),
		'filter_items_list' => __( 'Lista de Diapositivas filtradas', 'isaeuniversidad' ),
	);
	$args = array(
		'label' => __( 'Diapositiva', 'isaeuniversidad' ),
		'description' => __( 'Carrusel de página de inicio', 'isaeuniversidad' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array('title', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'diapositiva', $args );

}
add_action( 'init', 'create_diapositiva_cpt', 0 );