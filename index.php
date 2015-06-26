<?php 

DEFINE('ROOT' ,dirname(__FILE__) );									// Root directory of site
DEFINE('LIB_PATH', ROOT . '/ccmac/library');								// Create static to our library	
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . LIB_PATH . DIRECTORY_SEPARATOR);	// Include it in PHP include/require search

include("ccmac_helpers.php"); 


