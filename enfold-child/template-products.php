<?php

	/*
	Template Name: Products
	*/
	
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config, $post;

	if ( post_password_required() )
    {
		get_template_part( 'page' ); exit();
    }
	



	get_header(); ?>


		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>
			<div class='container template-blog template-single-blog '>
				<main class='content units <?php avia_layout_class( 'content' ); ?> <?php echo avia_blog_class_string(); ?>' <?php avia_markup_helper(array('context' => 'content','post_type'=>'post'));?>>
                    <?php

			        $args = array(
				        'post_type' => 'product',
				        'post_status' => 'publish',
				        //'post_per_page'	=> 3
						
						// 'meta_query' => array(
						// 	'relation' => 'AND',
						// 	array(
						// 		'key' => 'promika_species',
						// 		'value' => 'dog'
						// 	),
						// 	// array(
						// 	// 	'key' => 'promika_aplication_type',
						// 	// 	'value' => 'spoton',
						// 	// 	'meta_compare' => 'IN'
						// 	// )
						// )
						
				    );


					$query = new WP_Query( $args );
					$count = 0;

					$posts = $query->posts;

				    if( $posts ):
					   

					   echo '<div class="promika_breadcrumbs">'.promika_breadcrumbs().'</div>';

					   foreach ($posts as $p_key => $post) {
					   		get_template_part( 'includes/content', 'products' );
					   }

						wp_reset_postdata();
					endif;

	    
                        
                    ?>

				</main>

				<?php
					get_sidebar('product');
				?>
			</div><!--end container-->
		</div><!-- close default .container_wrap element -->


	<?php get_footer();
