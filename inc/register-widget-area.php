<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function isaeuniversidad_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1 (Sin Título)', 'isaeuniversidad' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'isaeuniversidad' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>'
		)
  );
  register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'isaeuniversidad' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'isaeuniversidad' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="footer-widget-title">',
			'after_title'   => '</h2>',
		)
  );
  register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'isaeuniversidad' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'isaeuniversidad' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="footer-widget-title">',
			'after_title'   => '</h2>',
		)
  );
  register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'isaeuniversidad' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'isaeuniversidad' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="footer-widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'isaeuniversidad_widgets_init' );