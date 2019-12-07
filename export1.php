<?php  
//export.php  
$conn = mysqli_connect("localhost", "root", "root", "phd_admission"); 
$output = '';

$tablename = "applicant_details";
$ar = array();
$q = "SELECT column_name
FROM information_schema.columns
WHERE  table_name = 'applicant_details'
   AND table_schema = 'id9600623_phd_admission'";

  $re = mysqli_query($conn,$q);                 // obatin the column names of table
  while($row = mysqli_fetch_assoc($re)){
    foreach($row as $cname => $cvalue){
        
        array_push($ar, $cvalue);
    }
    
}

$tablename = "exam_details";
$q = "SELECT column_name
FROM information_schema.columns
WHERE  table_name = 'exam_details'
   AND table_schema = 'id9600623_phd_admission'";

  $re = mysqli_query($conn,$q);                 // obatin the column names of table
  while($row = mysqli_fetch_assoc($re)){
    foreach($row as $cname => $cvalue){
        
        array_push($ar, $cvalue);
    }
    
}
if(isset($_POST['export'])){

$query = mysqli_query($conn, 'SELECT * FROM applicant_details INNER JOIN exam_details ON applicant_details.sno=exam_details.serialno'); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = $tablename . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = $ar;
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = mysqli_fetch_assoc($query)){
        $n = array();
        for($x=0; $x<count($ar); $x++)
        {
          array_push($n, $row[$ar[$x]]);
        }

        $lineData = $n;
        fputcsv($f, $lineData, $delimiter);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 
 }
?>