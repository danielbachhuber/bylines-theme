<?php

add_filter( 'pre_option_blogname', function(){
	return 'Bylines';
});

add_filter( 'pre_option_blogdescription', function(){
	return 'Modern multi-author publishing for WordPress';
});

add_action( 'after_setup_theme', function() {
	add_theme_support( 'title-tag' );
});

add_action( 'wp_enqueue_scripts', array( 'Bylines_Theme\Assets', 'action_wp_enqueue_scripts' ) );

/**
 * Autoload without Composer
 */
spl_autoload_register( function( $class ) {
	$class = ltrim( $class, '\\' );
	if ( 0 !== stripos( $class, 'Bylines_Theme\\' ) ) {
		return;
	}

	$parts = explode( '\\', $class );
	array_shift( $parts ); // Don't need "Bylines".
	$last = array_pop( $parts ); // File should be 'class-[...].php'.
	$last = 'class-' . $last . '.php';
	$parts[] = $last;
	$file = dirname( __FILE__ ) . '/inc/' . str_replace( '_', '-', strtolower( implode( $parts, '/' ) ) );
	if ( file_exists( $file ) ) {
		require $file;
	}

});
