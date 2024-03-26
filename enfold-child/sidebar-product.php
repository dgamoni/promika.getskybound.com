<?php
if ( !defined('ABSPATH') ){ die(); }
	
global $avia_config;

##############################################################################
# Display the sidebar
##############################################################################

$default_sidebar = true;
$sidebar_pos = avia_layout_class('main', false);

$sidebar_smartphone = avia_get_option('smartphones_sidebar') == 'smartphones_sidebar' ? 'smartphones_sidebar_active' : "";

$sidebar = 'left';

//filter the sidebar position (eg woocommerce single product pages always want the same sidebar pos)
$sidebar = apply_filters('avf_sidebar_position', $sidebar);

//if the layout hasnt the sidebar keyword defined we dont need to display one
//if(empty($sidebar)) return;
if(!empty($avia_config['overload_sidebar'])) $avia_config['currently_viewing'] = $avia_config['overload_sidebar'];

$promika_species = get_field('promika_species', $post->ID);

echo "<aside class='sidebar sidebar_".$sidebar." ".$sidebar_smartphone." ".avia_layout_class( 'sidebar', false )." units' ".avia_markup_helper(array('context' => 'sidebar', 'echo' => false)).">";
    echo "<div class='inner_sidebar extralight-border'>";
?>

            <div class="product_sidebar_wrap">
                <div class="">
                    <h3>Product Selector</h3>
                </div>
                <div class="product_species_selector">
                    <h3 class="product_selector_header">Select a Species</h3>
                    <div class="species_selector_wrap">
                        <div class="species_selector_element _sprite dog select"></div>
                        <div class="species_selector_element _sprite cat"></div>
                    </div>
                </div>
                <div class="product_application_type_selector">
                    <h3 class="product_selector_header">Application Type</h3>
                    <div class="species_application_type_selector_wrap">
                        <div class="type_selector_element select" data-select="spoton">Spot on</div>
                        <div class="type_selector_element" data-select="spray">Spray</div>
                        <div class="type_selector_element" data-select="collar">Collar</div>
                        <div class="type_selector_element" >Comparison Chart</div>
                    </div>
                </div>                
            </div>


<?php

    echo "</div>";
echo "</aside>";






