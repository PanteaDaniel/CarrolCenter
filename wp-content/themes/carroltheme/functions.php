<?php

// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu' ),
		)
	);

	function ourWidgetsInit()
	{
  	register_sidebar( array(
    	'name' => 'Footer 1',
    	'id' => 'footer1'
  	));

  	register_sidebar( array(
    	'name' => 'Footer 2',
    	'id' => 'footer2'
  	));
	}
add_action('widgets_init', 'ourWidgetsInit');
?>
