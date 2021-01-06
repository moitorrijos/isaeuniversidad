<?php


/**
 * Enqueue scripts and styles.
 */
function isaeuniversidad_scripts() {
	wp_enqueue_style( 'isaeuniversidad-font', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap', array(), ISAE_VERSION, 'all' );
	wp_enqueue_style( 'isaeuniversidad-style', get_template_directory_uri() . '/css/main.css', array(), ISAE_VERSION );
	wp_style_add_data( 'isaeuniversidad-style', 'rtl', 'replace' );

	wp_enqueue_script( 'isaeuniversidad-navigation', get_template_directory_uri() . '/js/navigation.js', array(), ISAE_VERSION, true );
	wp_enqueue_script( 'isaeuniversidad-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), ISAE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_front_page() ) {
		wp_deregister_script( 'jquery' );
	}
}
add_action( 'wp_enqueue_scripts', 'isaeuniversidad_scripts' );