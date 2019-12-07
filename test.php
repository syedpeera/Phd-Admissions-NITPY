<?php
include("intermediate.php");
require('fpdf_folder/fpdf17/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
//font bold size 
$pdf->SetFont('Arial','B',20);
//cell(width,height,text,border,endline,[align])
/*$pdf->Cell(130,5,'Name : ',1,0);
$pdf->Cell(59,5,$_POST['Phone'],1,1);*/
$pdf->SetFillColor(20,13,76);
$pdf->Image('logomin.png',10,10,-300);
$pdf->Cell(25,25,'');
$pdf->Cell(130,7,'     National Institute of Technology Puducherry',0,1);
$pdf->SetFont('Times','',9);
$pdf->Cell(130,7,'                                                                                (An Institution of National Importance under MHRD, Govt. of India)',0,1);
$pdf->Cell(25,25,'');
$pdf->SetFont('Times','',11);
$pdf->Cell(130,7,'                                                            Thiruvettakudy, Karaikal - 609609',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100,7,'                                 APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2019 - 2020)',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(25,5,'Application Number  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                      : '.$_POST['app_num'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(35,45,'(Self Attested) Photo',1,1,'C');
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Transaction Number  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                      : '.$row['t_no'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Transcation Date  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                      : '.$row['t_date'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Amount Rs  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                      : '.$row['amount'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Bank Drawn  ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                      : '.$row['bank_drawn'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Application category  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                      : '.$row['application_category'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'& Department  ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                      : '.$row['department'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Area of Research  ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                      : '.$row['area_of_research'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'PERSONAL DETAILS            ',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Name of the Candidate     :  ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                        '.$row['c_name'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Father\'s/Guardian\'s/Husband\'s Name  : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                                             '.$row['f_name'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Date of Birth  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['dob'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Age  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['age'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Gender  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['gender'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Marital Status  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['maritalstatus'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'# Category  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['category'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'# Physically Challenged  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['ph'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'# Economically Weaker Section (EWS) ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                          : '.$row['ews'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Nationality  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['nationality'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Address of Communication      : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                               '.$row['address'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Permanent Address                   : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                               '.$row['permanent_address'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Landline  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['landline'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Mobile Number  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                             : '.$row['mobile_number'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Email Id                                     : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                               '.$row['applicant_email'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'# QUALIFYING DEGREE PARTICULARS          ',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(25,5,'UG  ',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Name of the Degree  ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                                           : '.$row['ug_name_of_degree'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Branch/Specialization  ');
$pdf->SetFont('Helvetica','',14);

$pdf->Multicell(170,5,'                                           : '.$row['ug_branch'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentage of Marks/CGPA  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                           : '.$row['ug_marks_gpa'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Class (Honors/Distinction/First/Second)  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                           : '.$row['ug_class'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Name of the Institute                                : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                                             '.$row['ug_name_of_institute'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Name of the University                             : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                                             '.$row['ug_name_of_university'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year of Passing  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                           : '.$row['ug_year_of_passing'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'PG  ',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(25,5,'Name of the Degree  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                           : '.$row['pg_name_of_degree'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Branch/Specialization  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Multicell(170,5,'                                           : '.$row['pg_branch'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentage of Marks/CGPA  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                           : '.$row['pg_marks_gpa'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Class (Honors/Distinction/First/Second): ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                             '.$row['pg_class'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Name of the Institute                                : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                                             '.$row['pg_name_of_institute'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Name of the University                            : ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                                             '.$row['pg_name_of_university'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year of Passing  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                                           : '.$row['pg_year_of_passing'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'# GATE  (if applicable) ',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Score  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['gate_score'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Rank  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['gate_rank'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentile  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['gate_percentile'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Discipline  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['gate_discipline'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year appeared  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['gate_year'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Validity  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['gate_validity'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'# NET  (if applicable) ',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Score  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['net_score'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Rank  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['net_rank'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentile  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['net_percentile'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Discipline  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['net_discipline'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year appeared  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['net_year'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Validity  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['net_validity'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'# SLET 	 (if applicable) ',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Score  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['slet_score'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Rank  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['slet_rank'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentile  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['slet_percentile'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Discipline  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['slet_discipline'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year appeared  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['slet_year'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Validity  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['slet_validity'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'# CSIR  (if applicable) ',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Score  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['csir_score'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Rank  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['csir_rank'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentile  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['csir_percentile'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Discipline  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['csir_discipline'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year appeared  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['csir_year'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Validity  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['csir_validity'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'# CAT (if applicable) ',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Score  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['cat_score'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Rank  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['cat_rank'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentile  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['cat_percentile'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Discipline  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['cat_discipline'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year appeared  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['cat_year'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Validity  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['cat_validity'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25,5,'# UGC  (if applicable) ',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Score  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['ugc_score'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Rank  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['ugc_rank'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Percentile  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['ugc_percentile'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Discipline  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['ugc_discipline'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Year appeared  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['ugc_year'],0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Validity  ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,'                   : '.$row['ugc_validity'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Title of PG Project  ');
$pdf->SetFont('Helvetica','',14);
$pdf->MultiCell(170,5,'                   : '.$row['pg_project_title'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'$ Details of publication in refereed journals/ Proceedings of Conference :(if applicable)',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Helvetica','',14);
$pdf->Multicell(190,5,$array_form_data[0],0,1);
/*$value = $pdf->GetStringWidth(utf8_decode($x));
$pdf->Cell($value,10,$x,1,1);*/
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Awards/Prizes/Sports/NCC etc : (if applicable)',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Helvetica','',14);
$pdf->Multicell(190,5,$array_form_data[1],0,1);
$pdf->Cell(1,5,'',0,1);	
$pdf->Cell(1,5,'',0,1);	
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'# Details of Professional Experience :',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Helvetica','',14);
$pdf->Multicell(190,5,$array_form_data[2],0,1);
$pdf->Cell(1,5,'',0,1);	
$pdf->Cell(1,5,'',0,1);	
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Research Proposal (Maximum 500 words) : ',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Helvetica','',14);
$pdf->Multicell(190,5,$array_form_data[3],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','',14);
$pdf->Multicell(190,5,'I do here by declare that the information given in this application are true and correct to the best of my knowledge. If any of the particulars furnished above are found to be incorrect at the time of admission, the admission will be cancelled',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Date : ');
$pdf->SetFont('Helvetica','',14);
$pdf->Cell(25,5,$row['f_date'],0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Signature of the Applicant',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'NOTE',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','',14);
$pdf->Multicell(190,5,'& Candidates applying for more than one department should submit separate application form for each department. However, a single registration fee is sufficient.',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Multicell(190,5,'# Attach photocopies of certificates. Original certificates should be produced at the time of Interview and Admission.',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Multicell(190,5,'$ Attach photocopies of journals/conference papers',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Multicell(190,5,'Note: The part time external Ph.D. applicant should attach the duly filledin Form-1 & Form-2, and Part time/Full Time on campus applicant should attach the dulyfilledin Form-3. Otherwise, the application will be rejected.',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'CHECKLIST',0,1);
$pdf->SetFont('Times','',14);
$pdf->MultiCell(190,5,'List of Enclosures (Put tick mark in the space provided and strike out whichever is not applicable)',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(1,5,'',0,1);
$pdf->Cell(10,7,'1.',1,0);
$pdf->Cell(140,7,'Application fee Transaction Receipt',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'2.',1,0);
$pdf->Cell(140,7,'GATE/UGC/NET/CAT/AIMA/CSIR/NBHM(if applicable)',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'3.',1,0);
$pdf->Cell(140,7,'Photograph (Affixed)',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'4.',1,0);
$pdf->Cell(140,7,'10th or HSC Certificate',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'5.',1,0);
$pdf->Cell(140,7,'Semester wise gradesheets/marksheets UG & PG',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'6.',1,0);
$pdf->Cell(140,7,'UG Degree Certificate PG Degree/Provisional Certificate',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'7.',1,0);
$pdf->Cell(140,7,'OBC /SC /ST, PH and EWS Certificates (if applicable)',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'8.',1,0);
$pdf->Cell(140,7,'Form-1,Form-2, and Form-3 (If applicable)',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'9.',1,0);
$pdf->Cell(140,7,'Experience Certificate (If applicable)',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'10.',1,0);
$pdf->Cell(140,7,'Reprints of Journal/Conference papers (if applicable)',1,0);
$pdf->Cell(40,7,'',1,1);
$pdf->Cell(10,7,'11.',1,0);
$pdf->Cell(140,7,'Awards/Prizes/Sports/NCC (if applicable)',1,0);
$pdf->Cell(40,7,'',1,1);
fclose($fp);
/*$merge = new FPDF_Merge();
$merge->add('cast.pdf');
$merge->add('physically challenged.pdf');
$merge->add('ug.pdf');
$merge->add('pg.pdf');
$merge->add('gate.pdf');
$merge->add('net.pdf');
$merge->add('slet.pdf');
$merge->add('csir.pdf');
$merge->add('cat.pdf');
$merge->add('ugc.pdf');
$merge->add('publications.pdf');
$merge->add('sports.pdf');
$merge->add('professional experience.pdf');
$merge->add('research proposal.pdf');
$merge->output();*/
$pdf->Output();	
//rgb(20, 13, 76)
//rgb(216, 252, 233)
?>