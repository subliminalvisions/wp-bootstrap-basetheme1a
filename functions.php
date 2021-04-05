<?php

    
if ( ! function_exists( 'bootbase_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * This function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bootbase_theme_setup() {

		/* set the maximum allowed width for any content in the theme
        * @see http://codex.wordpress.org/Content_Width */
		if ( ! isset( $content_width ) ) {
			$content_width = 1140;
		}
    
		/** Add New Sidebars*/
		require get_template_directory() . '/sidebars/sidebars.php';

        /** Widgets */
		require get_template_directory() . '/widgets/class-bootbase-widget-about.php';
		require get_template_directory() . '/widgets/class-bootbase-widget-latest-posts.php';

    } // function bootbase_theme_setup
	add_action( 'after_setup_theme', 'bootbase_theme_setup', 9 );
} // End if().


function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );


add_action( 'init', 'add_slug_body_class' );
	// ADD post name in body class
//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// Change RSS Cache to 10 min
add_filter( 'wp_feed_cache_transient_lifetime', 
   create_function('$a', 'return 900;') );

?>