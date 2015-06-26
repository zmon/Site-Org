<?php 

DEFINE('LIB_PATH',dirname(__FILE__) . '/ccmac/library');					// Create static to our library	
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . LIB_PATH . DIRECTORY_SEPARATOR);	// Include it in PHP include/require search

include("ccmac_helpers.php"); 


