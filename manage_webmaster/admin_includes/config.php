<?php
session_start();
date_default_timezone_set("Asia/Kolkata");

$setcon = 2;
if($setcon == 1) {
	$servername = "localhost";
	$username = "palletopatnam";
	$password = "lancius@12#";
	$dbname = "palle2patnam";
} else {
	$servername = "192.168.0.104";	
	$username = "root";
	$password = "root";
	$dbname = "palle2patnam_latest_new";
}  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$base_url = "http://localhost/palle2patnam_latest/";

?>