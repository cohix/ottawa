<?php 

    function register_main_menu() 
    {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    
    add_action( 'init', 'register_main_menu' );


    function init_left_sidebar() 
    {
		register_sidebar( array(
			'name'          => 'Left Sidebar',
			'id'            => 'left_sidebar_1',
			'before_widget' => '<div class = "widgetWrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	add_action( 'widgets_init', 'init_left_sidebar' );

    
?>