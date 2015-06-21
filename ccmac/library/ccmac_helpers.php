<?php
error_reporting(E_ALL);
$path = './Doc/';

$GitHubRepo="commonaccord/Site-Org";

if(!isset($_REQUEST['action'])) { 
	$_REQUEST['action'] = "landing"; 
}

if(isset($_REQUEST['file'])) {
	$dir = $_REQUEST['file'];
	$dir = str_replace('..', '', $dir);
	$fff = fopen("newlogs", "a");
	$rrr = print_r($_SERVER, TRUE);
	fwrite($fff, "$rrr\n");
	$www = print_r($_POST, TRUE);
	fwrite($fff, "::: $www\n");
	fwrite($fff, "$dir\n\n");
	fclose($fff);
} else {
	$dir = './'; 
}


if($_REQUEST['action'] == 'list') {

include('list.php');


} // end 'list'

// "Show the Document"

else if($_REQUEST['action'] == 'source') {

if(isset($_REQUEST['submit'])) {
print "<pre>|$path.$dir|</pre>";  // |./Doc/.doc/escrow/Demo_Escrow_Step_1_Parties|
	$fp = fopen($path.$dir, "w");
	$data = $_REQUEST['newcontent'];
	$data = preg_replace('/\r\n/', "\n", $data);
	$data = trim($data);
	fwrite($fp, $data);
	fclose($fp);
}

print "<pre>|$path.$dir|</pre>";
$content = file_get_contents($path.$dir, FILE_USE_INCLUDE_PATH);
$contents = explode("\n", $content);
$rootdir = pathinfo($dir);
$filenameX = basename($dir);

//source.php includes the formatting for the table that displays the components of a document
include("source.php"); 

} // end 'source'

else if($_REQUEST['action'] == 'render') {


	if(isset($_REQUEST['submit'])) {
		echo "RENDERING...........<br>";
	} else { echo "not rending ... <br>"; }

	if(isset($_REQUEST['file'])){
#		include('file.php');

	}
	
	if(isset($_REQUEST['file'])){
		echo "</div></div>";

	}
} // end 'render'

else if($_REQUEST['action'] == 'edit') {

	include('edit.php');

} // end 'edit'

else if($_REQUEST['action'] == 'pull') {

echo `cd /var/www/www.commonaccord.org/Alpha; git reset --hard HEAD; git pull -f 2>&1`;

}

/*
else if($_REQUEST['action'] == 'graph') {
	$lib_path = LIB_PATH;
	echo `perl $lib_path/tree-parse.pl $dir 2&>1`;
}
*/
	

else { include($_REQUEST['action'].'.php'); }

?>
