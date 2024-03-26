<?php
global $count;
global $post;

if($count == 0) {$first = 'first'; } else {$first = '';}

$promika_homepage_image = get_field('promika_homepage_image', $post->ID);
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$promika_logo = get_field('promika_logo', $post->ID);
$promika_product_benefits_short = get_field('promika_product_benefits_short', $post->ID);

$promika_aplication_type = get_field('promika_aplication_type', $post->ID);
$promika_species = get_field('promika_species', $post->ID);

?>

	<div data-species="<?php echo $promika_species; ?>" data-type="collar" class="home_product_content flex_column av_one_third  flex_column_div av-zero-column-padding <?php echo $first; ?>  avia-builder-el-7  el_after_av_tab_container  el_before_av_one_third  " style="border-radius:0px; ">
		<section class="av_textblock_section " itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">
			<div class="avia_textblock  home_product_content_flex" itemprop="text">
				
				<div class="promika_homepage_image">
					<?php
						if( $promika_homepage_image ) {
							echo wp_get_attachment_image( $promika_homepage_image, $size );
						}
					  ?>
				</div>
				<div class="promika_logo_home">
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