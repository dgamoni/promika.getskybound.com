<?php

function promika_breadcrumbs(){
	


	if( isset($_POST['species']) && $_POST['species'] == 'dog' ){
		$spec = 'Dog Products';
	} else 	if( isset($_POST['species']) && $_POST['species'] == 'cat' ){
		$spec = 'Cat Products';
	} else 	if( isset($_GET['species']) && $_GET['species'] == 'dog' ){
		$spec = 'Dog Products';
	} else 	if( isset($_GET['species']) && $_GET['species'] == 'cat' ){
		$spec = 'Cat Products';
	} else {
		$spec = 'Dog Products';
	}

	if( isset($_POST['application_type']) && $_POST['application_type'] == 'spoton' ){
		$type = 'Spot Ons';
	} else 	if( isset($_POST['application_type']) && $_POST['application_type'] == 'spray' ){
		$type = 'Sprays';
	} else 	if( isset($_POST['application_type']) && $_POST['application_type'] == 'collar' ){
		$type = 'Collars';
	} else 	if( $_GET['application_type'] && $_GET['application_type'] == 'spoton' ) {
        $type = 'Spot Ons';
	} else 	if( $_GET['application_type'] && $_GET['application_type'] == 'spray' ) {
        $type = 'Sprays';
	} else 	if( $_GET['application_type'] && $_GET['application_type'] == 'collar' ) {
		$type = 'Collars';     
	} else {
		$type = 'Spot Ons';
	}



	//$spec = 'Dog Products';
	//$type = 'Spot Ons';
	$out = '<span>'.$spec .'</span> > <span>'.$type.'</span>';
	return $out;
}