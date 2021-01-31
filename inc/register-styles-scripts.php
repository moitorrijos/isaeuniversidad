<?php


/**
 * Enqueue scripts and styles.
 */
function isaeuniversidad_scripts() {
	wp_enqueue_style( 'isaeuniversidad-font', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', array(), ISAE_VERSION, 'all' );
	wp_enqueue_style( 'isaeuniversidad-style', get_template_directory_uri() . '/css/main.css', array(), ISAE_VERSION );
	wp_style_add_data( 'isaeuniversidad-style', 'rtl', 'replace' );

	wp_enqueue_script( 'isaeuniversidad-navigation', get_template_directory_uri() . '/js/navigation.js', array(), ISAE_VERSION, true );
	wp_enqueue_script( 'aosjs', 'https://unpkg.com/aos@next/dist/aos.js', array(), ISAE_VERSION, true );
	wp_enqueue_script( 'isaeuniversidad-aos', get_template_directory_uri() . '/js/local-aos.js', array('aosjs'), ISAE_VERSION, true );

	wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@next/dist/aos.css', array(), ISAE_VERSION );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_front_page() ) {
		wp_deregister_script( 'jquery' );
	}
}
add_action( 'wp_enqueue_scripts', 'isaeuniversidad_scripts' );

function isaeuniversidad_scripts_admin() {
	wp_enqueue_style( 'isaeuniversidad-font', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', array(), ISAE_VERSION, 'all' );
	wp_enqueue_style( 'isae-admin', get_template_directory_uri() . '/css/admin.css', array(), ISAE_VERSION, 'all' );
}

add_action( 'admin_enqueue_scripts', 'isaeuniversidad_scripts_admin' );