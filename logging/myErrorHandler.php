<?php

function myErrorHandler($errno, $errstring, $errfile, $errline) {
   if(!!$errstring) {
	throw new Exception($errstring);
	}
   return false;
}

set_error_handler('myErrorHandler');
?>
