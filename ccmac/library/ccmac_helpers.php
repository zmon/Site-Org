<?php
error_reporting(E_ALL);
$path = './Doc/';

$GitHubRepo = "commonaccord/Site-Org";

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = "landing";
}

if (isset($_REQUEST['file'])) {
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


switch ($_REQUEST['action']) {

    case 'list':

        include('list.php');
        break;


    case 'source':

        if (isset($_REQUEST['submit'])) {
            $fp = fopen($path . $dir, "w");
            $data = $_REQUEST['newcontent'];
            $data = preg_replace('/\r\n/', "\n", $data);
            $data = trim($data);
            fwrite($fp, $data);
            fclose($fp);
        }

        $content = file_get_contents($path . $dir, FILE_USE_INCLUDE_PATH);
        $contents = explode("\n", $content);
        $rootdir = pathinfo($dir);
        $filenameX = basename($dir);

	//source.php includes the formatting for the table that displays the components of a document
        include("source.php");

        break;

    case 'render':

        if (isset($_REQUEST['submit'])) {
            echo "RENDERING...........<br>";
        } else {
            echo "not rending ... <br>";
        }

        if (isset($_REQUEST['file'])) {
            echo "</div></div>";
        }
        break;

    case 'edit':

        include('edit.php');
        break;

    case 'pull':

        echo `cd /var/www/www.commonaccord.org/Alpha; git reset --hard HEAD; git pull -f 2>&1`;
        break;

    default:
        include($_REQUEST['action'] . '.php');
        break;
}

