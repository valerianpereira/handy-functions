<?php

/*
 * Function to print a formatted array tree
 * 
 * Params :
 * $input_array 	array 	Array which is to be printed. Can be single/multi dimensional
 *
 * Output :
 * @return 			array 	Formatter array.
 *
 */
function r_print($input_array){

	echo "<pre>";
	print_r($input_array);
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
