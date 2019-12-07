<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
	<title>PHD Admission Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
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
            <div  class="d-none d-md-block" style="color: white; font-family: Times New Roman;font-size:2.8vw">NATIONAL INSTITUTE OF TECHNOLOGY PUDUCHERRY<br>
            </div>
            <div class="d-none d-md-block" style="color: white; font-family: Times New Roman;font-size:1.2vw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(An Institution of National Importance under MHRD, Govt. of India)<br>
            </div>
            <div class="d-none d-md-block" style="color: white; font-family: Times New Roman;font-size:1.6vw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thiruvettakudy, Karaikal - 609609<br>
            </div>
            <div class="d-block d-md-none" style="color:white; font-family: Times New Roman"><h1>NITPY</h1></div>

            
            <div style="color: white; font-family: Times New Roman;font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2019 - 2020)</div>
        </div>
        </div>
        </div>

        <br/><br/><br/><br/>

	
<div style="padding-left: 20px" class="container-fluid">	
	<form class="form" action="home.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-auto"></div>
		<div class="col-md-6 col-lg-8"><div class="card"><fieldset>
  <div class="card-header"><legend>Regisration fee details</legend></div>
			<div class="card-body">
			<div class="form-group">
			Transaction Number : <input class="form-control" type="text" name="t_no" required></div>
			Transaction Date : <input class="form-control" type="text" name="t_date" required>(DD/MM/YYYY)<br/><br/>
			Amount Rs : <input class="form-control" type="text" name="amount" required>
			Bank Drawn : <input class="form-control" type="text" name="bank_drawn" required><br/><br/></div>
        </fieldset>
    </div>
    
    

		<div class="card mt-3"><fieldset>
  <div class="card-header"><legend>Application category</legend><div class="form-check">
  			<div class="row">
  			<div class="col">
			<b>Application Category : <input type="text" id="fullt" name="application_category" required></b></br>
			[Full Time, Part Time(on-campus/ external) ]
		</div>
		<div class="card-body">
		</div class="row">
  		</div>	
		</div>
		</div>
    </fieldset>

</div>


	<fieldset>
    <fieldset>
    	<div class="card mt-3">
    		<div class="card-header">
 <legend>Department and Area of Research:</legend></div>
 	<div class="card-body">
		<div class="form-group"><h6><span style="color:#00FF00;">짜 </span>Select Department :</h6> 
		<select class="form-control" id="department" name="department" onchange="fun1('department','area_of_research')" required>
			<option value="">select department</option>
			<option value="Civil Engineering">Civil Engineering</option>
			<option value="Computer Science and Engineering">Computer Science and Engineering</option>
			<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
			<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
			<option value="Mechanical Engineering">Mechanical  Engineering</option>
			<option value="Mathematics">Mathematics</option>
			<option value="Chemistry">Chemistry</option>
			<option value="Physics">Physics</option>
			<option value="English">English</option>
			<option value="Physical Education">Physical Education</option>
		</select>

		<h6>Select Area of Research :</h6> 
		<select class="form-control" id="area_of_research" name="area_of_research" required>
		<option value="">Select Area of Research</option> 
		</select>
	</div>
	</div>
</div>
    </fieldset><br>
<div class="card">
<fieldset>
<div class="card-header">
 <legend>Personal details</legend></div>
    <div class="card-body">
    <div class='alert alert-danger'>NOTE: Use CAPITAL letters</div>
		<div class="form-row">
		<div class="col-md-6">	
		Name of the Candidate <input class="form-control" type="text" name="c_name" required>
		</div>
		<div class="col-md-6">
		Father's/Guardian's/Husband's Name <input class="form-control" type="text" name="f_name" required><br/>
		</div>
		
		<div class="col-md-6">
		Date of Birth : <input class="form-control" type="text" name="dob" required>(DD/MM/YYYY)<br/><br/>
		</div>
		<div class="col-md-6">
		Age : <input class="form-control" type="text" name="age" required><br/><br/>
		</div>
		<div class="col-md-4">		Gender :
		<br>
		<input type="radio" name="gender" value="Male" required>Male 
		<input type="radio" name="gender" value="Female" required>Female 
		</div>
		<div class="col-md-4">

		Marital Status :
		<br>
		<input type="radio" value="Married" name="maritalstatus" required>Married  
		<input type="radio" value="Single" name="maritalstatus" required>Single  
		</div>
		<div class="col-md-4">

		<span style="color:blue; font-weight: bold"># </span>Category :<br>
		<input type="radio" value="OC" name="category" checked required>OC   
		<input type="radio" value="OBC" name="category" required>OBC 
		<input type="radio" value="SC" name="category" required>SC   
		<input type="radio" value="ST" name="category" required>ST   
		<br><br>
	</div>
	<div class="col-md-12">
		<h6><span style="color:blue;"># </span>Physically Challenged (PH) :(persons with disability of 40% and above)
		</h6>
		  <input type="radio" value="Yes" name="ph" required>Yes
		 <input type="radio" value="No" name="ph" required>NO<br/><br/>
	</div>
	<div class="col-md-12">
		<h6><span style="color:blue;"># </span>Economically Weaker Section (EWS) :</h6>
		  <input type="radio" value="Yes" name="ews" required>Yes
		 <input type="radio" value="No" name="ews" required>NO<br/><br/>
	</div>
		<div class="col-md-8">Nationality : <input class="form-control" type="text" name="nationality" required><br/><br/>
		</div>
		<div class="col-md-6"> 
		Address of Communication :<textarea class="form-control"rows="4" cols="50" name="address" placeholder="(Address of Communication)Enter your address..." onkeypress="myFunction1(this)" onkeydown="myFunction2(this)" onkeyup="myFunction3(this)" required></textarea>
	</div>
		<div class="col-md-6">
		Permanent Address :<textarea class="form-control" rows="4" cols="50" name="permanent_address" placeholder="(Permanent Address)Enter your permanent address..." onkeypress="myFunction1(this)" onkeydown="myFunction2(this)" onkeyup="myFunction3(this)" required></textarea></br></br>
	</div>
	<div class="col-md-4">
		Land Line (optional) <input class="form-control" type="text" name="landline"> </br></br>
	</div>
	<div class="col-md-4">
		Mobile Number : <input class="form-control" type="text" name="mobile_number" required></br></br>
</div>
<div class="col-md-4">
			Email ID : <input class="form-control" type="email" name="applicant_email" required></br></br>
		</div>
  </fieldset>
</div>
<br>

	<div class="card">
<fieldset>

 <div class="card-header">
 <legend><span style="color:blue;"># </span>Qualifying Degree Particulars :</legend>
		</div>
<div class="card-body">
		<h4>UG :</h4> 
		<div class="form-row">
			<div class="col-md-4">
		Name of the Degree : <input class="form-control" type="text" name="ug_name_of_degree" required></br>
</div>
<div class="col-md-4">
		Branch/Specialization : <input  class="form-control" type="text" name="ug_branch" required></br>
</div>
<div class="col-md-4">
		Percentage of Marks/CGPA : <input class="form-control" type="text" name="ug_marks_gpa" required></br>
</div>
		<div class="col-md-6">
		Class (Honors/Distinction/First/Second) : <input type="text"  class="form-control" name="ug_class" required></br>
</div>
<div class="col-md-6"> 
		Name of the Institute : <input class="form-control" type="text" name="ug_name_of_institute" onkeypress="myFunction1(this)" onkeydown="myFunction2(this)" onkeyup="myFunction3(this)" required></br>
</div>
<div class="col-md-6">
		Name of the University : <input class="form-control" type="text" name="ug_name_of_university" onkeypress="myFunction1(this)" onkeydown="myFunction2(this)" onkeyup="myFunction3(this)"></br> 
	</div>
<div class="col-md-6">
		Year of Passing : <input class="form-control" type="text" name="ug_year_of_passing" required><br/>
</div><br/>
</div>
		<h4>PG :</h4> 
		<div class="form-row">
		<div class="col-md-4">
		Name of the Degree : <input class="form-control" type="text" name="pg_name_of_degree" required></br>
</div>
<div class="col-md-4">
		Branch/Specialization : <input class="form-control" type="text" name="pg_branch" required></br>
</div>
<div class="col-md-4">
			<span style="color:red;">* </span>Percentage of Marks/CGPA : <input class="form-control" type="text" name="pg_marks_gpa" required></br>
</div>
<div class="col-md-6">
		Class (Honors/Distinction/First/Second) : <input class="form-control" type="text" name="pg_class" required></br>
</div>
<div class="col-md-6">
		Name of the Institute : <input  class="form-control" type="text" name="pg_name_of_institute" onkeypress="myFunction1(this)" onkeydown="myFunction2(this)" onkeyup="myFunction3(this)" required></br>
</div>
<div class="col-md-6">
		Name of the University : <input class="form-control" type="text" name="pg_name_of_university" onkeypress="myFunction1(this)" onkeydown="myFunction2(this)" onkeyup="myFunction3(this)"></br></br>
</div>
<div class="col-md-6">
		Year of Passing : <input class="form-control" type="text" name="pg_year_of_passing" required></br>
</div>
</div>
		<p style="color:red;">*write as <b>'RA'</b> if results awaiting.</p>
	</div>
	</fieldset>

	</div>
</div>
</div>
<div class="row">
<div class="col-auto"></div>
<div class="col-md-4">
	<div class="card mt-4">
		<div class="card-header">
		<h4><span style="color:blue;"># </span>GATE :(if applicable)</h4> 
</div>
<div class="card-body">
		Score : <input class="form-control" type="text" name="gate_score" >

		Rank : <input class="form-control" type="text" name="gate_rank" >

		Percentile : <input class="form-control" type="text" name="gate_percentile">

		Discipline : <input class="form-control" type="text" name="gate_discipline">

		Year appeared : <input class="form-control" type="text" name="gate_year">

		Valid Upto : <input class="form-control" type="text" name="gate_validity"><br/><br/>
</div>
</div>
</div>

<div class="col-md-4">
	<div class="card mt-4">
		<div class="card-header">
		<h4><span style="color:blue;"># </span>NET :(if applicable)</h4>
</div>
<div class="card-body">
		Score : <input class="form-control" type="text" name="net_score">

		Rank : <input class="form-control" type="text" name="net_rank">

		Percentile : <input class="form-control" type="text" name="net_percentile">

		Discipline : <input class="form-control" type="text" name="net_discipline">

		Year appeared : <input class="form-control" type="text" name="net_year">

		Valid Upto : <input class="form-control" type="text" name="net_validity"><br/><br/>
</div>
</div>
</div>
</div>
<div class="row">
	<div class="col-auto"></div>
	<div class="col-md-4">
		<div class="card mt-4">
	<div class="card-header">
		<h4><span style="color:blue;"># </span>SLET :(if applicable)</h4>
</div>
<div class="card-body">
		Score : <input class="form-control" type="text" name="slet_score">

		Rank : <input class="form-control" type="text" name="slet_rank">

		Percentile : <input class="form-control" type="text" name="slet_percentile">

		Discipline : <input class="form-control" type="text" name="slet_discipline">

		Year appeared : <input class="form-control" type="text" name="slet_year">

		Valid Upto : <input class="form-control" type="text" name="slet_validity"><br/><br/>
</div>
</div>
</div>
<div class="col-md-4">
	<div class="card mt-4">
		<div class="card-header">
		<h4><span style="color:blue;"># </span>CSIR :(if applicable)</h4>
</div>
<div class="card-body">
		Score : <input class="form-control" type="text" name="csir_score">

		Rank : <input class="form-control" type="text" name="csir_rank">

		Percentile : <input class="form-control" type="text" name="csir_percentile">

		Discipline : <input class="form-control" type="text" name="csir_discipline">

		Year appeared : <input class="form-control" type="text" name="csir_year">

		Valid Upto : <input class="form-control" type="text" name="csir_validity"><br/><br/>
</div>
</div>
</div>
</div>
<div class=row>
<div class="col-auto"></div>
<div class="col-md-4">
	<div class="card mt-4">
		<div class="card-header">
		<h4><span style="color:blue;"># </span>CAT :(if applicable)</h4>
</div>
<div class="card-body">
		Score : <input class="form-control" type="text" name="cat_score">

		Rank : <input class="form-control" type="text" name="cat_rank">

		Percentile : <input class="form-control" type="text" name="cat_percentile">

		Discipline : <input class="form-control" type="text" name="cat_discipline">

		Year appeared : <input class="form-control" type="text" name="cat_year">

		Valid Upto : <input class="form-control" type="text" name="cat_validity"><br/><br/>
</div>
</div>
</div>

<div class="col-md-4">
	<div class="card mt-4">
		<div class="card-header"><h4><span style="color:blue;"># </span>UGC :(if applicable)</h4></div>
		<div class="card-body">
		Score : <input class="form-control" type="text" name="ugc_score">

		Rank : <input class="form-control" type="text" name="ugc_rank">

		Percentile : <input class="form-control" type="text" name="ugc_percentile">

		Discipline : <input class="form-control" type="text" name="ugc_discipline">

		Year appeared : <input class="form-control" type="text" name="ugc_year">

		Valid Upto : <input class="form-control" type="text" name="ugc_validity"><br/><br/>
	</div>
</div>
</div>
</div>
<div class=row>
	<div class="col-md-1"></div>
		<div class="col-md-6">
		<div class="form-inline mt-4"><h4>Title of PG Project  <input class="form-control" type="text" name="pg_project_title" onkeypress="myFunction1(this)" onkeydown="myFunction2(this)" onkeyup="myFunction3(this)" required></h4></div>

		<h6><span style="color:#B06E54;">$ </span><b>Details of publication in refereed journals/ Proceedings of Conference : (if applicable)</b></h6><textarea rows="8" cols="100" name="journals" placeholder="Enter details here"></textarea><br/><br/>

		<h6><b>Awards/Prizes/Sports/NCC etc : (if applicable)</b></h6><textarea rows="8" cols="100" name="awards_sports" placeholder="Enter details here"></textarea></br></br>

		<h6><span style="color:blue;"># </span><b>Details of Professional Experience :</b></h6><textarea rows="8" cols="100" name="professional_experience" placeholder="Name of Employer, Position Held, From Date to Date"></textarea></br></br>

		<h6><b>Research Proposal (Maximum 500 words) : </b></h6><textarea rows="8" cols="100" name="research_proposal" placeholder="Enter details here" required></textarea></br></br>
</div>
</div>

		<p><h6><input type="checkbox" name="confirm" required>&nbsp;I do here by declare that the information given in this application are true and correct to the best of my knowledge. If any of the particulars furnished above are found to be incorrect at the time of admission, the admission will be cancelled</h6></p>

		Date : <input id="date" class="form-control" type="text" name="f_date" required>(DD/MM/YYYY)<br/><br/>

<fieldset>
 <legend><span style="color:red;">NOTE</span></legend>
		<p><span style="color:#00FF00;">짜 </span>Candidates applying for more than one department should submit separate application form for each department. However, a single registration fee is sufficient.</p>
		<p><span style="color:blue;"># </span>Attach photocopies of certificates. Original certificates should be produced at the time of Interview and Admission.</p>
		<p><span style="color:#B06E54;">$ </span>Attach photocopies of journals/conference papers</p>
		<p>Note: The part time external Ph.D. applicant should attach the duly filledin Form-1 & Form-2, and Part time/Full Time on campus applicant should attach the dulyfilledin Form-3. Otherwise, the application will be rejected.</p> 		
</fieldset>
<br>
		<center><input  class="btn btn-success" type="submit" name="submit" value="Submit Application"></center>
	</form>
	<br>
	<br>
</div> 
	<script type="text/javascript">
		function myFunction1(e) 
		{
			var s = e.value;
		    if(s.includes("'"))
			{
		    	window.alert("single or double quotes are not allowed");
		    }    
		}
		function myFunction2(e) 
		{
			var s = e.value;
		    if(s.includes("'"))
			{
		    	window.alert("single or double quotes are not allowed");
		    }    
		}
		function myFunction3(e) 
		{
			var s = e.value;
		    if(s.includes("'"))
			{
		    	window.alert("single or double quotes are not allowed");
		    }    
		}
		function fun1(s1,s2)
		{
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "";
			if(s1.value == "Civil Engineering")
			{
				var optionArray = ["Structural Engineering|Structural Engineering"];
			}
			else if(s1.value == "Computer Science and Engineering")
			{
				var optionArray = ["Artificial Intelligence|Artificial Intelligence","Information Security|Information Security","Computer Vision|Computer Vision","Medical imaging|Medical imaging","Software|Software","Data Analytics and Machine Learning|Data Analytics and Machine Learning","Networks and Security|Networks and Security"];
			}
			else if(s1.value == "Electrical and Electronics Engineering")
			{
				var optionArray = ["Control and Instrumentation System|Control and Instrumentation System","Power system|Power System","Power Electronics|Power Electronics","High Voltage Engineering|High Voltage Engineering","Electrical Drives and Control|Electrical Drives and Control"];
			}
			else if(s1.value == "Electronics and Communication Engineering")
			{
				var optionArray = ["Climate related studies and signal processing|Climate related studies and signal processing","Microwave engineering|Microwave engineering","Wireless networks & 5G Wireless communications|Wireless networks & 5G Wireless communications","Machine learning and pattern recognition|Machine learning and pattern recognition","VLSI signal processing and Wireless communication|VLSI signal processing and Wireless communication"];
			}
			else if(s1.value == "Mechanical Engineering")
			{
				var optionArray = ["Design|Design","Thermal|Thermal","Manufacturing|Manufacturing","Industrial Engineering|Industrial Engineering","Energy|Energy"];
			}
			else if(s1.value == "Mathematics")
			{
				var optionArray = ["Fuzzy optimization|Fuzzy optimization","Operations Research|Operations Research","Numerical Heat and Mass transfer|Numerical Heat and Mass transfer","Mathematical theory of control|Mathematical theory of control"];
			}
			else if(s1.value == "Chemistry")
			{
				var optionArray = ["Nanomaterials|Nanomaterials"];
			}
			else if(s1.value == "Physics")
			{
				var optionArray = ["Materials Science for energy storage|Materials Science for energy storage","condensed matter Physics|condensed matter Physics"];	
			}
			else if(s1.value == 'English')
			{
				var optionArray = ["English Language Teaching and Literary Studies|English Language Teaching and Literary Studies"];
			}
			else if(s1.value == 'Physical Education')
			{
				var optionArray = ["Physiology of exercise|Physiology of exercise","Health and fitness|Health and fitness","Yoga|Yoga"];
			}
			for(var option in optionArray)
			{
				var pair = optionArray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value = pair[0];
				newoption.innerHTML = pair[1];
				s2.options.add(newoption);
			}
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>