<?php
header("Access-Control-Allow-Origin: *");
include '/Users/DMAN/Documents/davral1.github.io/php/cartoDBProxy.php';
//			^CHANGE THIS TO THE PATH TO YOUR cartodbProxy.php
$queryURL = $_POST['qurl'];
$return = goProxy($queryURL);
echo $return;
?>