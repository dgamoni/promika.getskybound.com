<?php
add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths) {
	array_unshift($paths, CORE_PATH.'/shortcodes/');
	return $paths;
} 