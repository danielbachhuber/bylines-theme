<?php

namespace Bylines_Theme;

class Assets {

	public static function action_wp_enqueue_scripts() {
		$time = filemtime( get_template_directory() . '/assets/css/style.css' );
		wp_enqueue_style( 'bylines-theme', get_template_directory_uri() . '/assets/css/style.css?r=' . (int) $time );
	}

}
