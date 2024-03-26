<?php

global $post;
$promika_title = get_field('promika_title', $post->ID);
$promika_logo = get_field('promika_logo', $post->ID);
$promika_header_background = get_field('promika_header_background', $post->ID); 
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

	<div class="product_header" style="background-image: url(<?php echo $promika_header_background['url']; ?>); ">
	
		<div class="container product_header_wrap">    
		    <div class="promika_logo">
		    	<?php if( $promika_logo ) { echo wp_get_attachment_image( $promika_logo, $size ); } ?>
		    </div>

		    <h1 class="post-title entry-title promika_title" itemprop="headline"> 
		        <?php echo $promika_title; ?>
		    </h1>
		</div> 

	</div>