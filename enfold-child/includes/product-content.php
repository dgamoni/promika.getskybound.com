<?php 
global $post;
$promika_compare_to_statement = get_field('promika_compare_to_statement', $post->ID);
$promika_product_benefits_long = get_field('promika_product_benefits_long', $post->ID);
$promika_video = get_field('promika_video', $post->ID);
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$promika_aplication_type = get_field('promika_aplication_type', $post->ID);
$promika_species = get_field('promika_species', $post->ID);
?>    

    <div class="promika_aplication_type_wrap <?php //echo $promika_species; ?>">
        <?php
        // check
        if( $promika_aplication_type ): ?>
            
                <?php foreach( $promika_aplication_type as $promika_aplication_type_ ): ?>
                    <div class="promika_aplication_type <?php echo $promika_species; ?> <?php echo $promika_aplication_type_['value']; ?>" >
                        <?php //echo $promika_aplication_type['choices'][ $color ]; ?>
                    </div>
                <?php endforeach; ?>
            
        <?php endif; ?>

    </div> 

    <h2 class="post-title entry-title promika_compare_to_statement_title" itemprop="headline"> 
        <?php echo $promika_compare_to_statement['promika_compare_to_statement_title']; ?>
    </h2>
    <span class="promika_compare_to_statement_description">
        <?php echo $promika_compare_to_statement['promika_compare_to_statement_description']; ?>
    </span>
        
    <?php if ($promika_product_benefits_long) : ?>
        <div class="promika_product_benefits_long">
            <?php    
            foreach($promika_product_benefits_long as $promika_product_benefits_long_) {
                echo '<div class="promika_product_benefits_long_row">';
                    echo  '<span class="promika_product_benefits_long_logo">'.wp_get_attachment_image( $promika_product_benefits_long_['promika_product_benefits_long_logo'], $size ) .'</span>';
                    echo  '<span class="promika_product_benefits_long_text">'.$promika_product_benefits_long_['promika_product_benefits_long_text'].'</span>';
                echo '</div>';
            } ?>
        </div>
    <?php endif; ?>

    <?php if ($promika_video) : ?>
        <div class="promika_embed-container">
            <?php echo $promika_video; ?>
        </div>
    <?php endif; ?>    