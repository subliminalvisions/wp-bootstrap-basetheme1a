<?php

if ( function_exists( 'register_sidebar' ) ) {
	if ( ! function_exists( 'bootbase_register_sidebars' ) ) {
		function bootbase_register_sidebars() {

			# Register sidebars #

			register_sidebar( array(
				'id' => 'blog-sidebar',
				'name' => __( '[Blog] Sidebar #1', 'bootbase' ),
				'description' => __( 'In blog archive, right side', 'bootbase' ),
				'before_title' => '<h3 class="widget-title"><span>',
				'after_title' => '</span></h3>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
			) );

			register_sidebar( array(
				'id' => 'footer-sidebar-1',
				'name' => __( '[Footer] Sidebar #1', 'bootbase' ),
				'description' => __( 'In footer, first column', 'bootbase' ),
				'before_title' => '<h3 class="widget-title"><span>',
				'after_title' => '</span></h3>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
			) );

			register_sidebar( array(
				'id' => 'footer-sidebar-2',
				'name' => __( '[Footer] Sidebar #2', 'bootbase' ),
				'description' => __( 'In footer, 2nd column', 'bootbase' ),
				'before_title' => '<h3 class="widget-title"><span>',
				'after_title' => '</span></h3>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
			) );

			register_sidebar( array(
				'id' => 'footer-sidebar-3',
				'name' => __( '[Footer] Sidebar #3', 'bootbase' ),
				'description' => __( 'In footer, 3rd column', 'bootbase' ),
				'before_title' => '<h3 class="widget-title"><span>',
				'after_title' => '</span></h3>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
			) );

			register_sidebar( array(
				'id' => 'footer-sidebar-4',
				'name' => __( '[Footer] Sidebar Full Width', 'bootbase' ),
				'description' => __( 'In footer, displayed as full width. Below the first 3 widgets.', 'bootbase' ),
				'before_title' => '<h3 class="widget-title"><span>',
				'after_title' => '</span></h3>',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
			) );


		} // function bootbase_register_sidebars end

		add_action( 'widgets_init', 'bootbase_register_sidebars' );

	} // End if().
} // End if().
