<?php 

	function striped_wp_styles (){

		wp_enqueue_style ('style_css', get_stylesheet() );
		wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/css/main.css');

		add_action('wp_enqueue_scripts', 'striped_wp_styles');
	}


 ?>