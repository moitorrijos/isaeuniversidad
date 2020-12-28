<?php

if ( ! defined( 'ISAE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ISAE_VERSION', '1.0.0' );
}

if ( ! defined( 'UPLOAD_URL' ) ) {
	define( 'UPLOAD_URL', get_site_url() . '/wp-content/uploads' );
}

if ( ! defined( 'IMAGEPATH' ) ) {
	define( 'IMAGEPATH', get_template_directory_uri() . '/images' );
}