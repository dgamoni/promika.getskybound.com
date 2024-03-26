<?php

function promika_breadcrumbs(){
	$spec = 'Dog Products';
	$type = 'Spot Ons';
	$out = '<span>'.$spec .'</span> > <span>'.$type.'</span>';
	return $out;
}