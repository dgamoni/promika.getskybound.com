
<?php 
global $post;
$promika_homepage_image = get_field('promika_homepage_image', $post->ID);
$promika_image_gallery = get_field('promika_image_gallery', $post->ID);
$promika_product_variants = get_field('promika_product_variants', $post->ID);
$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>

    <?php //if( $promika_homepage_image ) { echo wp_get_attachment_image( $promika_homepage_image, $size ); } ?>



    <?php 
        if( $promika_product_variants ) : ?>
            
            <div class="promika_product_variants_gallery_wrap">
                <?php
                    foreach ( $promika_product_variants as $key => $promika_product_variants_ ): 
						
						$images = $promika_product_variants_['promika_product_variants_gallery'];
						if($key == 0) {$selected = "selected"; } else {$selected = "";}

						if( $images ): ?>
							<div class="gallery_variant <?php echo $selected; ?>" data-galvariant="<?php echo $key; ?>">
							    <div id="slider-<?php echo $key; ?>" class="flexslider">
							        <ul class="slides">
							            <?php foreach( $images as $image ): ?>
							                <li>
							                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							                    <p><?php echo $image['caption']; ?></p>
							                </li>
							            <?php endforeach; ?>
							        </ul>
							    </div>
							    <div id="carousel-<?php echo $key; ?>" class="flexslider">
							        <ul class="slides">
							            <?php foreach( $images as $image ): ?>
							                <li>
							                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
							                </li>
							            <?php endforeach; ?>
							        </ul>
							    </div>
							 </div>
						<?php endif; ?> 

                    <?php endforeach;
                ?>    
            </div>

            <div class="promika_product_variants_title">Size of your dog</div>
            <div class="promika_product_variants_row">
                <?php
                    foreach ( $promika_product_variants as $key => $promika_product_variants_ )  {
                        if($key == 0) {$selected = "selected"; } else {$selected = "";}
                        echo  '<span data-variant="'.$key.'" class="promika_product_variants_size '.$selected.' ">'. $promika_product_variants_['promika_product_variants_size'] .'</span>';
                    }
                ?>    
            </div>
        <?php endif; ?>  