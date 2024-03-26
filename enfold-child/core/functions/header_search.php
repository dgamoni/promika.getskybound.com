<?php

	add_filter( 'wp_nav_menu_items', 'add_ajax_search_pro', 9997, 2 );

	function add_ajax_search_pro ( $items, $args ){	

	    $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-5"><a class="search_wrap">' . do_shortcode('[wd_asp id=1]') .'</a></li>';

	    return $items;
	} 