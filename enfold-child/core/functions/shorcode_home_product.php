<?php





function get_home_promika_product( $atts ){

	//$promika_aplication_type = array( 'spoton' => 'Spot Ons', 'spray' => 'Sprays', 'collar' => 'Collars');
	//$promika_aplication_type = array( 'spoton' => 'Spot Ons', 'collar' => 'Collars');

	ob_start(); ?>

	<div class="promika_product_home_wrap">

		<h2 class="post-title entry-title promika_product_select" itemprop="headline"> 
	        Quick Product Selection
	    </h2>
	    <span class="promika_product_select_description">
	        Choose the application that best suits your needs.
	    </span>

		<div class="promika_aplication_type_wrap promika_aplication_type_home">

            <div class="promika_aplication_type_element promika_aplication_type dog spoton" data-species="dog" data-type="spoton">
            	<span class="promika_aplication_type_element promika_aplication_type_label">Dog Spot Ons</span>
            </div>
            <div class="promika_aplication_type_element promika_aplication_type dog collar" data-species="dog" data-type="collar">
            	<span class="promika_aplication_type_label">Dog Collars</span>
            </div>
            <div class="promika_aplication_type_element promika_aplication_type spray" data-species="" data-type="spray">
            	<span class="promika_aplication_type_label">Sprays</span>
            </div>                         
            <div class="promika_aplication_type_element promika_aplication_type cat spoton" data-species="cat" data-type="spoton">
            	<span class="promika_aplication_type_label">Cat Spot Ons</span>
            </div>
            <div class="promika_aplication_type_element promika_aplication_type cat collar" data-species="cat" data-type="collar">
            	<span class="promika_aplication_type_label">Cat Collars</span>
            </div> 
	    </div> 

	    <div class="home_product">

	    <?php 
	    $args = array(
	        'post_type' => 'product',
	        'post_status' => 'publish',
	        'post_per_page'	=> 3
	    );


		$query = new WP_Query( $args );
		global $count;
		$count = 0;

		    if( $query->have_posts() ):
		       
		        while( $query->have_posts() ):
		            $query->the_post();

		            get_template_part( 'includes/home', 'products' );
		            $count++;
		        endwhile;

				wp_reset_postdata();
			endif;

	    ?>

   	

	    </div>
	
	</div>
    
    <?php

	return ob_get_clean();
}
add_shortcode('home_promika_product', 'get_home_promika_product'); 