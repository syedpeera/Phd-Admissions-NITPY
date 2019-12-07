<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHD Admission Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta charset="utf-8">
    <style>
	
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="portal.css" >
</head>
<body>
        <div style="background-color:#324f4f; padding-bottom: 20px" class="container-fluid" >  
            <div class="row">
            <div class="col-auto"><br/>
            <img src="logomin.png" style="width: 120px;height: 120px;"></div>
            <div class="col">
            <div  class="d-none d-md-block" style="color: white; font-family: Times New Roman;font-size:2.8vw">NATIONAL INSTITUTE OF TECHNOLOGY PUDUCHERRY<br></div>
            <div class="d-block d-md-none" style="color:white; font-family: Times New Roman"><h1>NITPY</h1></div>
            
            <div style="color: white; font-family: Times New Roman;font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2019 - 2020)</div>
        </div>
        </div>
        </div>

	
<div style="padding-left: 20px" class="container-fluid">	
<!--     <div class="alert alert-warning mt-3">
    Registration Number (will be assigned by office) :</div> -->
	<p style="color:red;">Note : Candidates applying for more than one department should submit separate application form for each department. However, a single registration fee is sufficient.</p>

	<?php
		echo "<b><center>Your Application Number is :<b/> ".$_SESSION['application_no']."</center><br/><br/>";

		echo "<b><center>Plz Note the Application Number to Download your Application</center></b><br/><br/>";

		echo "<b><center>Check your Mail</center></b><br/>";
	?>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>