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

            <div class="promika_aplication_type dog spoton" data-species="dog" data-type="spoton">
            	<span class="promika_aplication_type_label">Dog Spot Ons</span>
            </div>
            <div class="promika_aplication_type dog collar" data-species="dog" data-type="collar">
            	<span class="promika_aplication_type_label">Dog Collars</span>
            </div>
            <div class="promika_aplication_type spray" data-species="" data-type="spray">
            	<span class="promika_aplication_type_label">Sprays</span>
            </div>                         
            <div class="promika_aplication_type cat spoton" data-species="cat" data-type="spoton">
            	<span class="promika_aplication_type_label">Cat Spot Ons</span>
            </div>
            <div class="promika_aplication_type cat collar" data-species="cat" data-type="collar">
            	<span class="promika_aplication_type_label">Cat Collars</span>
            </div> 
	    </div> 

	    <div class="home_product">

	    <?php 
	    $args = array(
	        'post_type' => 'product',
	        'post_status' => 'publish',
	        //'post_per_page'	=> 3
	    );


		$query = new WP_Query( $args );
		$count = 0;

		    if( $query->have_posts() ):
		       
		        while( $query->have_posts() ):
		            $query->the_post(); 
		        	$count++;
		        	if($count == 1) {$first = 'first'; } else {$first = '';}

		        	$promika_homepage_image = get_field('promika_homepage_image', $post->ID);
		        	$size = 'full'; // (thumbnail, medium, large, full or custom size)
		        	$promika_logo = get_field('promika_logo', $post->ID);
		        	$promika_product_benefits_short = get_field('promika_product_benefits_short', $post->ID);

		        	$promika_aplication_type = get_field('promika_aplication_type', $post->ID);
					$promika_species = get_field('promika_species', $post->ID);

		        ?>

					<div data-species="<?php echo $promika_species; ?>" data-type="collar" class="home_product_content flex_column av_one_third  flex_column_div av-zero-column-padding <?php echo $first; ?>  avia-builder-el-7  el_after_av_tab_container  el_before_av_one_third  " style="border-radius:0px; ">
						<section class="av_textblock_section " itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
							<div class="avia_textblock  " itemprop="text">
								
								<div class="promika_homepage_image">
									<?php
										if( $promika_homepage_image ) {
											echo wp_get_attachment_image( $promika_homepage_image, $size );
										}
									  ?>
								</div>
								<div class="promika_logo">
									<?php
										if( $promika_logo ) {
											echo wp_get_attachment_image( $promika_logo, $size );
										}
									  ?>
								</div>
								<div class="promika_product_benefits_short">
									<?php
										if( $promika_product_benefits_short ) {
											echo $promika_product_benefits_short;
										}
									  ?>
								</div>

								<a class="view_product" href="<?php echo get_permalink($post->ID); ?>">View Product!</a>
	

							</div>
						</section>
					</div>

		        <?php endwhile;

				wp_reset_postdata();
			endif;

	    ?>

   	

	    </div>
	
	</div>
    
    <?php

	return ob_get_clean();
}
add_shortcode('home_promika_product', 'get_home_promika_product'); 