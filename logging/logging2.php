<?php

// PHP 7 treats parse errors as exceptions, not errors



register_shutdown_function('handleFatalError');

function handleFatalError(){
   
include ("include.php");

  // ini_set('log_errors', 1);
  // ini_set('display_errors', 1);
   $last_error = error_get_last();
   //returns the error as an array. without this line the error is returned as a string
   // use output as variable and get rid of implode
  // $output = print_r($last_error, TRUE);
   if(!is_null($last_error) && $last_error['type'] === E_PARSE || E_NOTICE || E_ERROR || E_WARNING || E_STRICT){
	file_put_contents("/var/log/php.log", implode($last_error, "\n" ) . "\n" . "\n" , FILE_APPEND);


	}

}



//}

//use these the same way as the register_shutdown_function? Write a function for it. 

//set_error_handler(handleFatalError());






//handleFatalError();


echo $test;











/*
function get_errors(){
	$last_error = error_get_last();
	if(!is_null($last_error)){
		file_put_contents("error.log", $last_error, FILE_APPEND);

	}

}

*/

//class log{
//get_errors();



//$error_log = 'error.log';
//$error_response = "";



/*
function log_errors(){


file_put_contents("error.log", "Hello \n", FILE_APPEND);



}
log_errors();
*/

?>
