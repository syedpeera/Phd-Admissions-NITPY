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
        <div style="background-color:#324f4f; padding-bottom: 20px" class="container-fluid">  
            <div class="row">
            <div class="col-auto"><br/>
            <img src="logomin.png" style="width: 120px;height: 120px;"></div>
            <div class="col">
            <div  class="d-none d-md-block" style="color: white; font-family: Times New Roman;font-size:2.8vw">NATIONAL INSTITUTE OF TECHNOLOGY PUDUCHERRY<br></div>
            <div class="d-none d-md-block" style="color: white; font-family: Times New Roman;font-size:1.2vw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(An Institution of National Importance under MHRD, Govt. of India)<br>
            </div>
            <div class="d-none d-md-block" style="color: white; font-family: Times New Roman;font-size:1.6vw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thiruvettakudy, Karaikal - 609609<br>
            </div>

            <div class="d-block d-md-none" style="color:white; font-family: Times New Roman"><h1>NITPY</h1></div>
            
            <div style="color: white; font-family: Times New Roman;font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2019 - 2020)</div>
        </div>
        </div>
        </div>

	<div class="form-group">
	<?php

	echo "<br/><br/><br/><br/>
        <b style='color:red;'><marquee>*****  The Registrations for PHD Admissions for the year 2019-20 are CLOSED  *****</marquee></b>";
	exit();



	$flag=0;
	$t_no=$_POST['t_no'];
	$t_date=$_POST['t_date'];
	$amount=$_POST['amount'];
	$bank_drawn=$_POST['bank_drawn'];
	$application_category=$_POST['application_category'];
	$department=$_POST['department'];
	$area_of_research=$_POST['area_of_research'];
	$c_name=$_POST['c_name'];
	$f_name=$_POST['f_name'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$maritalstatus=$_POST['maritalstatus'];
	$category=$_POST['category'];
	$ph=$_POST['ph'];
	$ews=$_POST['ews'];
	$nationality=$_POST['nationality'];
	$address=$_POST['address'];
	if(strpos($address,"'"))
	{
		echo "</br></br><center>Application not submitted.</center></br></br>";
		echo "<center><b>single or double</b> quotes are not allowed in Address of Communication field.</center>";
		exit();
	}
	$permanent_address=$_POST['permanent_address'];
	if(strpos($permanent_address,"'"))
	{
		echo "</br></br><center>Application not submitted.</center></br></br>";
		echo "<center><b>single or double</b> quotes are not allowed in Permanent Address field.</center>";
		exit();
	}
	if(isset($_POST['landline']))
	{
		$landline=$_POST['landline'];
	}
	else
	{
		$landline="";
	}
	$mobile_number=$_POST['mobile_number'];
	$applicant_email=$_POST['applicant_email'];
	$_SESSION['applicant_email']=$applicant_email;
	$ug_name_of_degree=$_POST['ug_name_of_degree'];
	$ug_branch=$_POST['ug_branch'];
	$ug_class=$_POST['ug_class'];
	$ug_marks_gpa=$_POST['ug_marks_gpa'];
	$ug_name_of_institute=$_POST['ug_name_of_institute'];
	if(isset($_POST['ug_name_of_university']))
	{
		$ug_name_of_university=$_POST['ug_name_of_university'];
	}
	else
	{
		$ug_name_of_university="";
	}
	if(strpos($ug_name_of_institute,"'"))
	{
		echo "</br></br><center>Application not submitted.</center></br></br>";
		echo "<center><b>single or double</b> quotes are not allowed in UG Name of the Institute field.</center>";
		exit();
	}
	if(strpos($ug_name_of_university,"'"))
	{
		echo "</br></br><center>Application not submitted.</center></br></br>";
		echo "<center><b>single or double</b> quotes are not allowed in UG Name of the University field.</center>";
		exit();
	}
	$ug_year_of_passing=$_POST['ug_year_of_passing'];
	$pg_name_of_degree=$_POST['pg_name_of_degree'];
	$pg_branch=$_POST['pg_branch'];
	$pg_marks_gpa=$_POST['pg_marks_gpa'];
	$pg_class=$_POST['pg_class'];
	$pg_name_of_institute=$_POST['pg_name_of_institute'];
	if(isset($_POST['pg_name_of_university']))
	{
		$pg_name_of_university=$_POST['pg_name_of_university'];
	}
	else
	{
		$pg_name_of_university="";
	}
	if(strpos($pg_name_of_institute,"'"))
	{
		echo "</br></br><center>Application not submitted.</center></br></br>";
		echo "<center><b>single or double</b> quotes are not allowed in PG Name of the Institute field.</center>";
		exit();
	}
	if(strpos($pg_name_of_university,"'"))
	{
		echo "</br></br><center>Application not submitted.</center></br></br>";
		echo "<center><b>single or double</b> quotes are not allowed in PG Name of the University field.</center>";
		exit();
	}
	$pg_year_of_passing=$_POST['pg_year_of_passing'];
	$pg_project_title=$_POST['pg_project_title'];
	if(strpos($pg_project_title,"'"))
	{
		echo "</br></br><center>Application not submitted.</center></br></br>";
		echo "<center><b>single or double</b> quotes are not allowed in PG Project Title field.</center>";
		exit();
	}
	$journals=$_POST['journals'];
	$awards_sports=$_POST['awards_sports'];
	$professional_experience=$_POST['professional_experience'];
	$research_proposal=$_POST['research_proposal'];
	$f_date=$_POST['f_date'];
	if(isset($_POST['gate_score']))
	{
		$gate_score=$_POST['gate_score'];
	}
	else
	{
		$gate_score="";
	}
	$gate_rank=$_POST['gate_rank'];
	$gate_percentile=$_POST['gate_percentile'];
	$gate_discipline=$_POST['gate_discipline'];
	$gate_year=$_POST['gate_year'];
	$gate_validity=$_POST['gate_validity'];
	if(isset($_POST['net_score']))
	{
		$net_score=$_POST['net_score'];
	}
	else
	{
		$net_score="";
	}
	$net_rank=$_POST['net_rank'];
	$net_percentile=$_POST['net_percentile'];
	$net_discipline=$_POST['net_discipline'];
	$net_year=$_POST['net_year'];
	$net_validity=$_POST['net_validity'];
	if(isset($_POST['slet_score']))
	{
		$slet_score=$_POST['slet_score'];
	}
	else
	{
		$slet_score="";
	}
	$slet_rank=$_POST['slet_rank'];
	$slet_percentile=$_POST['slet_percentile'];
	$slet_discipline=$_POST['slet_discipline'];
	$slet_year=$_POST['slet_year'];
	$slet_validity=$_POST['slet_validity'];
	if(isset($_POST['csir_score']))
	{
		$csir_score=$_POST['csir_score'];
	}
	else
	{
		$csir_score="";
	}
	$csir_rank=$_POST['csir_rank'];
	$csir_percentile=$_POST['csir_percentile'];
	$csir_discipline=$_POST['csir_discipline'];
	$csir_year=$_POST['csir_year'];
	$csir_validity=$_POST['csir_validity'];
	if(isset($_POST['cat_score']))
	{
		$cat_score=$_POST['cat_score'];
	}
	else
	{
		$cat_score="";
	}
	$cat_rank=$_POST['cat_rank'];
	$cat_percentile=$_POST['cat_percentile'];
	$cat_discipline=$_POST['cat_discipline'];
	$cat_year=$_POST['cat_year'];
	$cat_validity=$_POST['cat_validity'];
	if(isset($_POST['ugc_score']))
	{
		$ugc_score=$_POST['ugc_score'];
	}
	else
	{
		$ugc_score="";
	}
	$ugc_rank=$_POST['ugc_rank'];
	$ugc_percentile=$_POST['ugc_percentile'];
	$ugc_discipline=$_POST['ugc_discipline'];
	$ugc_year=$_POST['ugc_year'];
	$ugc_validity=$_POST['ugc_validity'];

	$sql3 = "select * from applicant_details where c_name = '".$c_name."' and f_name = '".$f_name."' and department = '".$department."' and applicant_email = '".$applicant_email."';";

	$result3 = $con->query($sql3);

	if($result3->num_rows > 0)
	{
		echo "<br/><br/><center>You have already submitted the application in this department</center>";
		$flag++;
		exit();
	}
	else
	{
			$sql1 = "insert into applicant_details(t_no,t_date,amount,bank_drawn,application_category,department,area_of_research,c_name,f_name,dob,age,gender,maritalstatus,category,ph,ews,nationality,address,permanent_address,landline,mobile_number,applicant_email,ug_name_of_degree,ug_branch,ug_marks_gpa,ug_class,ug_name_of_institute,ug_name_of_university,ug_year_of_passing,pg_name_of_degree,pg_branch,pg_marks_gpa,pg_class,pg_name_of_institute,pg_name_of_university,pg_year_of_passing,pg_project_title,f_date) values('$t_no','$t_date','$amount','$bank_drawn','$application_category','$department','$area_of_research','$c_name','$f_name','$dob','$age','$gender','$maritalstatus','$category','$ph','$ews','$nationality','$address','$permanent_address','$landline','$mobile_number','$applicant_email','$ug_name_of_degree','$ug_branch','$ug_marks_gpa','$ug_class','$ug_name_of_institute','$ug_name_of_university','$ug_year_of_passing','$pg_name_of_degree','$pg_branch','$pg_marks_gpa','$pg_class','$pg_name_of_institute','$pg_name_of_university','$pg_year_of_passing','$pg_project_title','$f_date');";
		//echo $sql1;

		$result1 = $con->query($sql1);

		if($result1 != true)
		{
			echo "<br/><br/><center>Application not submitted (go back and resubmit the form)</center><br/><br/>";
			exit();
		}

		$sql4 = "select * from applicant_details where c_name = '".$c_name."' and f_name = '".$f_name."' and department = '".$department."';";

		$result4 = $con->query($sql4);

		$row = $result4->fetch_assoc();

		$_SESSION['sno_applicant'] = $row['sno'];
		$sequence_no = $row['sno'];

		$rand_num = rand(11111111,99999999);

		if($department == 'Civil Engineering')
		{
			$application_no = "CE";
		}
		else if($department == 'Computer Science and Engineering')
		{
			$application_no = "CS";
		}
		else if($department == 'Electrical and Electronics Engineering')
		{
			$application_no = "EE";
		}
		else if($department == 'Electronics and Communication Engineering')
		{
			$application_no = "EC";
		}
		else if($department == 'Mathematics')
		{
			$application_no = "MA";
		}
		else if($department == 'Chemistry')
		{
			$application_no = "CH";	
		}
		else if($department == 'Physics')
		{
			$application_no = "PH";
		}
		else if($department == 'English')
		{
			$application_no = "EN";
		}
		else if($department == 'Physical Education')
		{
			$application_no = "PE";			
		}
		else if($department == 'Mechanical Engineering')
		{
			$application_no = "ME";
		}

		$application_no .= $sequence_no;

		$application_no .= $rand_num;

		$fileName = "./doc/".$application_no.".txt";
		$fp = fopen($fileName,"w");
		if( $fp == false )
		{
		  echo ( "Error in opening file" );
		  exit();
		}
		fwrite($fp,$journals);
		fwrite($fp, "!@#$%^&*()");
		fwrite($fp,$awards_sports);
		fwrite($fp, "!@#$%^&*()");
		fwrite($fp,$professional_experience);
		fwrite($fp, "!@#$%^&*()");
		fwrite($fp,$research_proposal);
		fwrite($fp, "!@#$%^&*()");
		fclose($fp);

		echo "<br/><br/><b><center>Your Application Number is : ".$application_no."</center></b><br/><br/>";

		echo "<b><center>Please Note the Application Number to Download your Application</center></b><br/><br/>";

		$_SESSION['application_no'] = $application_no;

		$sql5 = "UPDATE applicant_details SET application_number='".$application_no."' WHERE sno='".$sequence_no."';";

		$result5 = $con->query($sql5);

		$sql2 = "insert into exam_details(gate_score,gate_rank,gate_percentile,gate_discipline,gate_year,gate_validity,net_score,net_rank,net_percentile,net_discipline,net_year,net_validity,slet_score,slet_rank,slet_percentile,slet_discipline,slet_year,slet_validity,csir_score,csir_rank,csir_percentile,csir_discipline,csir_year,csir_validity,cat_score,cat_rank,cat_percentile,cat_discipline,cat_year,cat_validity,ugc_score,ugc_rank,ugc_percentile,ugc_discipline,ugc_year,ugc_validity) values('$gate_score','$gate_rank','$gate_percentile','$gate_discipline','$gate_year','$gate_validity','$net_score','$net_rank','$net_percentile','$net_discipline','$net_year','$net_validity','$slet_score','$slet_rank','$slet_percentile','$slet_discipline','$slet_year','$slet_validity','$csir_score','$csir_rank','$csir_percentile','$csir_discipline','$csir_year','$csir_validity','$cat_score','$cat_rank','$cat_percentile','$cat_discipline','$cat_year','$cat_validity','$ugc_score','$ugc_rank','$ugc_percentile','$ugc_discipline','$ugc_year','$ugc_validity');";

		$result2 = $con->query($sql2);

		$sql6 = "UPDATE exam_details SET serialno='".$sequence_no."' WHERE serialno=-1;";

		$result6 = $con->query($sql6);

		if(($result1 == true) && ($result2 == true))
		{
			echo "<center><b>Application Submitted Successfully...</b></center><br/><br/>";
		}
		else
		{
			echo "<br/><br/><center>Application not submitted...</center><br/><br/>";
		}
	}
	?>
	<div  id="mail" style="display:none">
	<?php
		use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'phdadmissionnitpy@gmail.com';                 // SMTP username
            $mail->Password = 'NITPY@123';                           // SMTP password
            $mail->SMTPSecure = 'tls';  //tls;                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port =  587 ;//465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('phdadmissionnitpy@gmail.com', 'NITPY PHD Admission');
            $mail->addAddress($applicant_email, 'Applicant');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Acknowledgement NITPY PHD Admission';
            $mail->Body    = 'Your Application has been submitted and your Application Number is <b>'.$application_no.'</b><br/><br/><b>Keep the Application Number with you for Downloading your Application.</b></br><a href='.'http://www.nitpyphdadmissions.in/download_application.php'.'>Download Application Click Here</a>';
            $mail->AltBody = 'Your Application has been submitted and your Application Number is <b>'.$application_no.'</b><br/><br/><b>Keep the Application Number with you for Downloading your Application.</b>';

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        } 
        ?>
        </div>
        <?php
        if($flag==0)
        {
        	echo '<b><center>Application Number has been sent to your email</center></b>';	
        }
		?>
	</div>

	<script src="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
		var x = document.getElementById("hidden");
		x.style.display = "none";
	</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
