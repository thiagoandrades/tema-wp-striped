<?php 

	function striped_wp_styles (){

		wp_enqueue_style('style_css', get_stylesheet_directory_uri() );
		wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/css/main.css');
		wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome-all.min.css');
		wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700');

		wp_enqueue_script('browser_js', get_template_directory_uri() . '/assets/js/browser.min.js', array('jquery'), '', true );
		wp_enqueue_script('break_js', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), '', true );
		wp_enqueue_script('util_js', get_template_directory_uri() . '/assets/js/util.js', array(), '', true );
		wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );

	}
	add_action('wp_enqueue_scripts', 'striped_wp_styles');

	add_theme_support('title-tag');




 ?> 