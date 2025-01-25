<?php
error_reporting(E_ALL);
ini_set('display_error',1);
$file="../HomeUploaded/".$_GET['file'];


header("content-disposition:attachment; filename=".urlencode($file));
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length: ' . filesize($file));
header('Pragma: public');

$fb=fopen($file,"r");

while(!feof($fb)){
    echo fread($fb,8192);
    flush();
}

fclose($fb);


?>