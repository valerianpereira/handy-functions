<?php

/*
 * Function to print a formatted array tree
 * 
 * Params :
 * $inputArray 	array 	Array which is to be printed. Can be single/multi dimensional
 *
 * Output :
 * @return array 	Formatter array.
 *
 */
function rPrint($inputArray){

	echo "<pre>";
	print_r($inputArray);
	echo "</pre>";
	
}

function responseHandler($response, $status = 0) {
	$data['desc']   = $response;
	if(!empty($status)) {
	    $data['status'] = false;
	    terminate(json_encode($data));
	}
	// False !!! We are done here !
	$data['status'] = true;
	return json_encode($data);
}
