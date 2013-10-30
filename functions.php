<?php 

// Get the Javascript files from the theme
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {
  // Modernizr
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '2.6.2', false );
	// jQuery
	wp_register_script( 'jquery-cdn', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', true );
	wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
	
	wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery-cdn');
	wp_enqueue_script('script');
}