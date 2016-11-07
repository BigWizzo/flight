<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "flight";

$conn = mysqli_connect($host,$user, $pass, $db);
 if (!$conn){
	die(mysqli_connect_error());		 
 }

?>
