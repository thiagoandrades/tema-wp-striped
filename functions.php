<?php 

	function striped_wp_styles (){

		wp_enqueue_style('style_css', get_stylesheet_directory_uri() );
		wp_enqueue_style('main_css', get_stylesheet_directory_uri () . '/assets/css/main.css');
		wp_enqueue_style('fontawesome', get_stylesheet_directory_uri () . '/assets/css/fontawesome-all.min.css');
		wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700');

	}
	add_action('wp_enqueue_scripts', 'striped_wp_styles');


 ?>