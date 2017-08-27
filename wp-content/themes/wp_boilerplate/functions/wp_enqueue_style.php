<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		
		wp_register_style('tooplate_style', get_parent_theme_file_uri('tooplate_style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');	
		
		wp_register_style('white', get_parent_theme_file_uri('css_pirobox/white/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');	
		/* Enqueue Scripts */

		wp_enqueue_style('mainStyle');
		wp_enqueue_style('tooplate_style');
		wp_enqueue_style('white');

	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>