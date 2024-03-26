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
				<main class='product_filter_wrap content units <?php avia_layout_class( 'content' ); ?> <?php echo avia_blog_class_string(); ?>' <?php avia_markup_helper(array('context' => 'content','post_type'=>'post'));?>>
                    <?php

                    //var_dump( $_GET);
                    if( $_GET['species']) {
                    	$species = $_GET['species'];?>
                    	<script>
                    		jQuery(document).ready(function($) {
                    			$('.species_selector_element').removeClass('select');
                    			$('.species_selector_element').each(function(index, el) {
                    				if($(el).data('spice') == '<?php echo $species; ?>' ) {
                    					$(el).addClass('select');
                    				}
                    			});
                    		});
                    	</script>  
                    	<?php                  	
                    } else {
                    	$species = 'dog';
                    } 

                    if( $_GET['application_type']) {
                    	$application_type = $_GET['application_type'];?>
                    	<script>
                    		jQuery(document).ready(function($) {
                    			$('.type_selector_element').removeClass('select');
                    			$('.type_selector_element').each(function(index, el) {
                    				if($(el).data('select') == '<?php echo $application_type; ?>' ) {
                    					$(el).addClass('select');
                    				}
                    			});
                    		});
                    	</script>
                    	<?php
                    } else {
                    	$application_type = 'spoton';
                    }

			        $args = array(
				        'post_type' => 'product',
				        'post_status' => 'publish',
				        //'post_per_page'	=> -1
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



					$query = new WP_Query( $args );
					$count = 0;

					$posts = $query->posts;

				    if( $posts ):
					   

					   echo '<div class="promika_breadcrumbs">'.promika_breadcrumbs().'</div>';

					   foreach ($posts as $p_key => $post) {
					   		get_template_part( 'includes/content', 'products' );
					   }

						wp_reset_postdata();
					else:
						echo '<p class="nofound">No result found!</p>';
					endif;

	    
                        
                    ?>

				</main>

				<?php
					get_sidebar('product');
				?>
			</div><!--end container-->
		</div><!-- close default .container_wrap element -->


	<?php get_footer();
