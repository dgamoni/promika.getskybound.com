<?php
function custom_child_scripts() {

	// wp_enqueue_style(
	// 	'jquery-bxslider', 
	// 	CORE_URL . '/css/jquery.bxslider.css'
	// );

	wp_enqueue_style(
		'flexslider', 
		CORE_URL . '/css/flexslider.css'
	);

	wp_enqueue_style(
		'product_style', 
		CORE_URL . '/css/product_style.css',
		array(),
		rand(), // no ver
		'all' //media
	);

	// wp_enqueue_script(
	//     'jquery-bxslider',
	//     CORE_URL . '/js/jquery.bxslider.js'
	// );

	wp_enqueue_script(
	    'jquery-flexslider-min',
	    CORE_URL . '/js/jquery.flexslider-min.js'
	);

	wp_enqueue_script(
	    'product_script',
	    CORE_URL . '/js/product_script.js',
        array('jquery'), // array('jquery')
        rand(), // no ver
        true  // footer
	);

	wp_localize_script( 'product_script', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	
}
add_action( 'wp_enqueue_scripts', 'custom_child_scripts' ); 