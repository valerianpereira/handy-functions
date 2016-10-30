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