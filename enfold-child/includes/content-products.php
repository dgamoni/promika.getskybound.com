<?php

global $p_key;
global $post;


if($p_key % 2 == 0) {$first = 'first'; } else {$first = '';}

$promika_homepage_image = get_field('promika_homepage_image', $post->ID);
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$promika_logo = get_field('promika_logo', $post->ID);
$promika_product_benefits_short = get_field('promika_product_benefits_short', $post->ID);

$promika_aplication_type = get_field('promika_aplication_type', $post->ID);
$promika_species = get_field('promika_species', $post->ID);
//var_dump($promika_aplication_type);
?>

	<div data-species="<?php echo $promika_species; ?>" data-type="collar" class="archive_product_content flex_column av_one_half  flex_column_div av-zero-column-padding <?php echo $first; ?>  avia-builder-el-7  el_after_av_tab_container  el_before_av_one_half  " style="border-radius:0px; ">
		<section class="av_textblock_section " itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
			<div class="avia_textblock  home_product_content_flex" itemprop="text">
				
				<div class="promika_products_image">
					<div>
					<?php
						if( $promika_homepage_image ) {
							echo wp_get_attachment_image( $promika_homepage_image, $size );
						}
					  ?>
					</div>
				</div>

				<div class="promika_product_benefits_short">
					<?php
						if( $promika_product_benefits_short ) {
							echo $promika_product_benefits_short;
						}
					  ?>
				</div>

				<div class="view_product_wrap">
			        <?php if( $promika_aplication_type ): ?>
			            
			                <?php foreach( $promika_aplication_type as $promika_aplication_type_ ): ?>
			                    <div class="promika_aplication_type <?php echo $promika_species; ?> <?php echo $promika_aplication_type_['value']; ?>" >
			                    </div>
			                <?php endforeach; ?>
			            
			        <?php endif; ?>

					<a class="view_product" href="<?php echo get_permalink($post->ID); ?>">View Product!</a>

				</div>


			</div>
		</section>
	</div> 