<?php
// Register Custom Post Type Investigacion
// Post Type Key: investigacion
function create_investigacion_cpt() {

	$labels = array(
		'name' => _x( 'Investigaciones', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Investigacion', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Investigaciones', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Investigacion', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Investigacion Archives', 'textdomain' ),
		'attributes' => __( 'Investigacion Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Investigacion:', 'textdomain' ),
		'all_items' => __( 'All Investigaciones', 'textdomain' ),
		'add_new_item' => __( 'Add New Investigacion', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Investigacion', 'textdomain' ),
		'edit_item' => __( 'Edit Investigacion', 'textdomain' ),
		'update_item' => __( 'Update Investigacion', 'textdomain' ),
		'view_item' => __( 'View Investigacion', 'textdomain' ),
		'view_items' => __( 'View Investigaciones', 'textdomain' ),
		'search_items' => __( 'Search Investigacion', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Investigacion', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Investigacion', 'textdomain' ),
		'items_list' => __( 'Investigaciones list', 'textdomain' ),
		'items_list_navigation' => __( 'Investigaciones list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Investigaciones list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Investigacion', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-clipboard',
		'supports' => array('title', 'excerpt', 'thumbnail', 'revisions', 'author'),
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
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'investigacion', $args );

}
add_action( 'init', 'create_investigacion_cpt', 0 );