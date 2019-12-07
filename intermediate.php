<?php
include("connection.php");
session_start();
$fileName = "./doc/".$_POST['app_num'].".txt";
$fp = fopen($fileName,"r");
if( $fp == false )
{
  echo "Invalid Application Number...";
  exit();
}
$array_form_data = array();
$homepage = file_get_contents("./doc/".$_POST['app_num'].".txt");
$array_form_data = explode("!@#$%^&*()",$homepage);

$sql1 = "SELECT * FROM applicant_details INNER JOIN exam_details ON applicant_details.sno=exam_details.serialno where application_number='".$_POST['app_num']."';";
$result1 = $con->query($sql1);
$row = $result1->fetch_assoc();
?>