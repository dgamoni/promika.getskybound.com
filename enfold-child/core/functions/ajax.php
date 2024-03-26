<?php


add_action( 'wp_ajax_promika_product_filter', 'promika_product_filter' );
add_action( 'wp_ajax_nopriv_promika_product_filter', 'promika_product_filter' );

function promika_product_filter() {

	$species = $_POST['species'];
	$application_type = $_POST['application_type'];

	$args = array(
		'post_type'      => 'product',
		'post_status' => 'publish',
		'posts_per_page' => - 1
	);

	    $args['meta_query'] = array(
	    	'relation' => 'AND',
					array(
						'key' => 'promika_species',
						'value' => $species,
						//'compare' => 'LIKE'
					),
					array(
						'key' => 'promika_aplication_type',
						'value' => $application_type,
						'compare' => 'LIKE'
					)
		);


	$the_query = new WP_Query( $args );

	global $p_key;
	$p_key = 0;

	ob_start();
		
		if ( $the_query->have_posts() ) :

			echo '<div class="promika_breadcrumbs">'.promika_breadcrumbs().'</div>';

			while ( $the_query->have_posts() ) :
				$the_query->the_post();

		   		get_template_part( 'includes/content', 'products' );
		   		$p_key++;

		   endwhile;
		endif;

		wp_reset_query();

	$response['html'] = ob_get_clean();
	$response['species'] = $species;
	$response['application_type'] = $application_type;
	echo json_encode( $response );
	exit;

}

add_action( 'wp_ajax_promika_product_home_filter', 'promika_product_home_filter' );
add_action( 'wp_ajax_nopriv_promika_product_home_filter', 'promika_product_home_filter' );

function promika_product_home_filter() {

	$species = $_POST['species'];
	$application_type = $_POST['application_type'];

	$args = array(
		'post_type'      => 'product',
		'post_status' => 'publish',
		'posts_per_page' => 3
	);

	if($application_type == 'spray'){
		$relation = 'OR';
	} else {	
		$relation = 'AND';
	}

    $args['meta_query'] = array(
    	'relation' => $relation,
				array(
					'key' => 'promika_species',
					'value' => $species,
					//'compare' => 'LIKE'
				),
				array(
					'key' => 'promika_aplication_type',
					'value' => $application_type,
					'compare' => 'LIKE'
				)
	);


	$query = new WP_Query( $args );
	global $count;
	$count = 0;
	ob_start();

	    if( $query->have_posts() ):
	       
	        while( $query->have_posts() ):
	            $query->the_post();

	            get_template_part( 'includes/home', 'products' );
	            $count++;
	        endwhile;

			wp_reset_postdata();
		endif;


	wp_reset_query();

	$response['html'] = ob_get_clean();
	$response['species'] = $species;
	$response['application_type'] = $application_type;
	echo json_encode( $response );
	exit;

}  