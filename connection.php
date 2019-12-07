<?php
$servername = "localhost";		
$username = "root";
$password = "root";
$dbname = "phd_admission";

$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error)
{
	die("Connection Failed".$con->connect_error);	
}
?>