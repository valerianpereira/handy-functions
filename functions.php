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

function jsonValidator($data = NULL) {
  if (!empty($data)) {
    json_decode($data);
    return (json_last_error() === JSON_ERROR_NONE);
  }
  return false;
}

function escapeDBInfo($value) {

$search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
$replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

return str_replace($search, $replace, $value);
}

function terminate($code = "") {
    die($code);
  }
