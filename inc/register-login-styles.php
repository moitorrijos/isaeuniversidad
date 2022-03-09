<?php

function isaeuniversidad_wplogin_styles() {

	wp_enqueue_style('login-styles', get_template_directory_uri() . '/css/wp-login.css', array(), '1.0.0', 'all');

}

add_action('login_enqueue_scripts', 'isaeuniversidad_wplogin_styles');

function isaeuniversidad_login_logo_url() {
  return 'https://isae.vercel.app/';
}
add_filter( 'login_headerurl', 'isaeuniversidad_login_logo_url' );

function isaeuniversidad_login_logo_url_title() {
  return 'ISAE Universidad';
}
add_filter( 'login_headertitle', 'isaeuniversidad_login_logo_url_title' );