<?php 
	
	
	update_option('siteurl','localhost:8888/derekhargest');
	update_option('home','localhost:8888/derekhargest');
	
	function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	}
	
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
	
	?>