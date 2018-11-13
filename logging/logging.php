<?php

// the file in the include statement has the commented out code (the myErrorHandler function)
include("myErrorHandler.php");

/*
function myErrorHandler($errno, $errstring, $errfile, $errline) {
   if(!!$errstring) {
	throw new Exception($errstring);
	}
   return false;
}

set_error_handler('myErrorHandler');
*/


//function messenger($msg){
  // $client->publish($msg)
//}

try{


$a = 5/0;

echo $a;

}

catch(Exception $ex){
   $message = "Message: " .$ex->getMessage();
   $line = "Line: " .$ex->getLine();
   $file = "File: " .$ex->getFile();
  // $code = $ex->getCode();
   $trace = "Stack Trace: " .$ex->getTraceAsString();

   file_put_contents("error.log", $message ."\n". $file ."\n" . $line ."\n" .$trace ."\n" ."\n", FILE_APPEND);
 

}



?>






