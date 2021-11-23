<!DOCTYPE html>
<html>
<head>
	<title><?php echo ucwords(str_replace('_',' ',$site_name)); ?> | <?php echo ucwords(str_replace('_',' ',$meta_title));?></title>
	<style>
		.wrapper{
			margin: 20px auto;
			width: 100%;
			max-width: 750px;
			height: auto;
			border: 1px solid rgba(0,0,0,0.2);
		}
		.header{
			text-align: center;
			max-height: 94px;
		}
		.header img{
			margin: 0;
			width: 100%;			
			height: auto;
		}
		.body{
			padding: 10px;
			width: 100%;
			max-width: 730px;
			height: auto;
			border-top: 1px solid rgba(0,0,0,0.2);
			border-bottom: 1px solid rgba(0,0,0,0.2);
			background: #F4F4F4;			
		}
		table, tr, th, td{
			font-size: 12px;
			margin-top: 3px;
			border: 1px solid rgba(0,0,0,0.2);
			border-collapse: collapse !important;				
			padding:5px;
		}
		.body a{
			color: #000;
			border: 1px solid rgba(0, 0, 0, 0.3);
			padding: 0 20px;
			font-size: 18px;
			background: rgba(0, 0, 0, 0.1) none repeat scroll 0% 0%;
			text-decoration: none;
		}
		.footer{
			padding: 10px;
			width: 100%;
			max-width: 730px;
			height: auto;
			background: #F4F4F4;
			text-align: center;			
		}
		.footer a{
			text-decoration: none;
			color: #000; 
			font-weight: bold;
		}
				
		/* NEW STYLE */
		h3.new_name{
			text-align:center;
			margin-bottom:0;
			margin-top: 5px;
		}
		p.new_exam{
			text-align:center;
			margin-top:0;
			margin-bottom: 0px;			
		}
		.new_table_bottom tr,
		.new_table_bottom tr th,
		.new_table_bottom tr td{border:1px solid transparent;}
		.new_table_bottom tr th:nth-child(odd){border-top:2px solid rgba(0,0,0,0.2); }
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="header">
			<img src="<?php echo 'http://localhost/bgpsc/public/banner/' . $banner[0]->path; ?>" />
		</div>
		
		<div class="body">

		<?php if($result != NULL){ ?>	
		<div>
			<h3 class="new_name">ACADEMIC TRANSCRIPT</h3>
			<p class="new_exam">
		    <?php 
			    $cond=array("exam_id"=>$result[0]->exam_id);
			    $exam_name=$this->retrieve->read("exam",$cond);
			    echo $exam_name[0]->title."-".$result[0]->year;
		    ?>
			</p>
			 
  		<table style="width:100%;" border="0">
  			<?php $student_info = $this->retrieve->read("registration",array('id'=>$student[0]->student_id)); ?>
 			<tr>
 				<td style="width:60%;padding-left:0px;">
 					<table width="100%" cellspacing="1" cellpadding="5">
				        <tr>
				          <td align="right" class="title3">Student's ID</td>
				          <td align="left" class="title3" colspan="2"><b><?php echo $student_info[0]->id;?></b></td>
				          <td align="center" class="title3" rowspan="4"><img style="width:100px; height:100px;" src="<?php echo site_url('public/students/'.$student_info[0]->photo);?>"></td>
				        </tr>
				        
				        <tr>
				          <td align="right" class="title3">Class Roll</td>
				          <td align="left" class="title3" colspan="2"><?php echo $student[0]->roll;?></td>
				        </tr>

				        <tr>
				          <td align="right" class="title3">Name</td>
				          <td align="left" class="title3" colspan="2"><?php echo $student_info[0]->name;?></td>
				        </tr>

				        <tr>
				          <td align="right" class="title3">Class</td>
				          <td align="left" class="title3" colspan="2"><b><?php echo $student[0]->class;?></b></td>
				        </tr>

				        <tr>
				          <td class="title3">Group</td>
				          <td class="title3" colspan="3"><?php echo $student[0]->group;?></td>
				        </tr>

				        <tr>
				          <td lign="right" class="title3">Section</td>
				          <td align="left" class="title3"><?php echo $student[0]->section;?></td>
				          <td align="right" class="title3">Shift</td>
				          <td align="left" class="title3"><?php echo $student[0]->shift;?></td>
				        </tr>

				        <tr>
				          <td align="right" class="title3">Session</td>
				          <td align="left" class="title3"><?php echo $student[0]->session;?></td>
				          <td align="right" class="title3">Version</td>
				          <td align="left" class="title3"><b><?php echo $student[0]->version;?></b></td>
				        </tr>

				        <tr>
				          <td align="right" class="title3">Batch</td>
				          <td align="left" class="title3" colspan="3"><?php echo ucwords(str_replace("_"," ",$student[0]->batch));?></td>
				        </tr>
					</table>
 				</td>

 				<td style="width:40%;">
 					<table style="width:100%;" cellspacing="1" cellpadding="5">
				        <tr>		
				          <td align="center" class="title3"><b>LG</b></td>				          
				          <td align="center" class="title3"><b>Marks</b></td>					          
				          <td align="center" class="title3"><b>GP</b></td>				          
				        </tr>

				        <tr>
				          <td align="center">A+</td>
				          <td align="center">80-100</td>					          
				          <td align="center">5</td>
				        </tr>

				        <tr>
				          <td align="center">A</td>
				          <td align="center">70-79</td>			          				       
				          <td align="center">4</td>
				        </tr>

				        <tr>
				          <td align="center">A-</td>
				          <td align="center">60-69</td>					          
				          <td align="center">3.5</td>
				        </tr>

				        <tr>
				          <td align="center">B</td>
				          <td align="center">50-59</td>					          
				          <td align="center">3</td>
				        </tr>

				        <tr>
				          <td align="center">C</td>
				          <td align="center">40-49</td>					          
				          <td align="center">2</td>
				        </tr>

				        <tr>
				          <td align="center">D</td>
				          <td align="center">33-39</td>					          
				          <td align="center">1</td>
				        </tr>

				        <tr>
				          <td align="center">F</td>
				          <td align="center">0-32</td>					          
				          <td align="center">0</td>
				        </tr>
					</table>
 				</td>
 			</tr>
 		</table>

		<table style="width: 100%;margin-bottom: 8px;">
			<tr class="app_tr">
				<th><p>SL</p></th>
				<th style="width:35%;"><p>Subjects</p></th>
				<th><p>Full Marks</p></th>					
				<th><p>OBJ</p></th>					
				<th><p>WR</p></th>					
				<th><p>PRAC</p></th>
				<th><p>Total Marks</p></th>
				<th><p>Highest Marks</p></th>		
				<th><p>Letter Grade</p></th>	
				<th><p>Grade Point</p></th>					
			</tr>				
			
			<?php
			$totalMarks = 0;					
			$final_total_gpa = 0;

			function getGPA($marks){
                if($marks >= 80){return 5;} elseif($marks >= 70){return 4;}
                elseif($marks >= 60){return 3.5;} elseif($marks >= 50){return 3;}
                elseif($marks >= 40){return 2;} elseif($marks >= 33){return 1;}
                else{return 0;}
            }

            function getLetterGrade($gpa){
                if($gpa >=5){return "A+";} elseif($gpa >=4){return "A";}
                elseif($gpa >= 3.5){return "A-";} elseif($gpa >=3){return "B";}
                elseif($gpa >=2){return "C";} elseif($gpa >= 1){return "D";}
                else{return "F";}
            }

            function getComment($gpa){
				if($gpa >=5){
					return "Excellents";
				}elseif($gpa >=3.5 && $gpa<5){
					return "Good";
				}elseif($gpa >= 2 && $gpa<3.5){
					return "Satisfied";
				}else{
					return "Bad";
				}
            }

            // GPA Calculation Start
		    foreach($students as $key => $row){ 
                $finalSubject = array();
                $allMarks = array();
                $where = array("roll" => $row->roll, "class" => $row->class);
                $total = $gpa = 0;
                $marks = $this->retrieve->read("marks", $where);

                // get optional
                $optional = $this->retrieve->read("admission", $where);
                // get subject
                $subjects = $this->retrieve->read("subject", array("class" => $row->class));

                foreach($marks as $key => $val){
                    $total += $val->total;

                    if($optional[0]->optional == $val->subject_name){
                        if(getGPA($val->total) > 2){
                            $gpa += (getGPA($val->total) -2);
                        }
                    } else {
                        if(in_array($val->subject_name, $finalSubject)){
                            $allMarks[$val->subject_name] = ($allMarks[$val->subject_name] + $val->total) / 2;
                        } else {
                            $finalSubject[] = $val->subject_name;
                            $allMarks[$val->subject_name] = $val->total;
                        }
                    } 
                }

                // calculate total point
                foreach($allMarks as $key => $val){
                    $gpa += getGPA($val);
                    $final_total_gpa=$gpa;
                }                        
                // calculate total gpa
                if(($gpa / count($allMarks)) > 5){
                    $gpa = "5.00";
                } else {
                    $gpa = round($gpa / count($allMarks), 2);
                }
            } 
         
        	// GPA Calculation Start
			foreach ($result as $key => $value) {
				$totalMarks += $value->total;
				//Highest Marks
				$highest_mark=$this->retrieve->readMax("marks","total",$value->subject);

				$subject=explode(" ",$value->subject);
				$where=array("class"=>$value->class,"subject"=>$value->subject_name); 
				$full_marks=$this->retrieve->read("subject",$where);  

				if(in_array('1st', $subject) or in_array('2nd', $subject)){ 
			?>
		    <tr>
				<td align="right"><?php echo $key+1;?></td>
		 		<td><?php echo $value->subject;?> Paper</td>
		 		<td align="center"><b><?php echo $full_marks[0]->written+$full_marks[0]->objective+$full_marks[0]->practical;?></b></td>														
				<td align="center"><?php echo $value->objective;?></td>
				<td align="center"><?php echo $value->written;?></td>
				<td align="center"><?php echo $value->practical;?></td>								
				<td align="center"><b><?php echo $value->total;?></b></td>													
				<td align="center"><?php echo $highest_mark[0]->highest_marks; ?></td>		
				<td align="center"><?php echo $value->letter;?></td>	
				<td align="center" rowspan="1"><b><?php echo $value->point;?></b></td>										
			</tr>
			<?php }else{ ?>
			<tr>
				<td align="right"><?php echo $key+1; ?></td>
				<td><?php echo $value->subject; ?></td></td>
				<td align="center"><b><?php echo $full_marks[0]->written+$full_marks[0]->objective+$full_marks[0]->practical; ?></b></td>									
				<td align="center"><?php echo $value->objective; ?></td>
				<td align="center"><?php echo $value->written; ?></td>
				<td align="center"><?php echo $value->practical; ?></td>										
				<td align="center"><b><?php echo $value->total; ?></b></td>													
				<td align="center"><?php echo $highest_mark[0]->highest_marks; ?></td>		
				<td align="center"><?php echo $value->letter; ?></td>	
				<td align="center"><b><?php echo $value->point; ?></b></td>																		
			</tr>
			<?php }} ?> 

			<tr>
                <td colspan="6"><b>Total Marks & Total GP</b></td>
                <td align="center"><b><?php echo $totalMarks; ?></b></td>
                <td colspan="2">&nbsp;</td>				                
                <td align="center"><b><?php echo $final_total_gpa; ?></b></td>
			</tr>
		</table>

		<table style="width: 100%;margin-bottom: 8px;">	
			<tr>
				<th align="left">GPA</th>
				<th><?php echo $gpa; ?></th>
				<th align="left" colspan="2" style="text-align:center;">Position in Merit List</th>
				<th align="left" colspan="2">Attendance</th>
			</tr>

			<tr>
				<td>Letter Grade</td>
				<td align="center"><b><?php echo getLetterGrade($gpa); ?></b></td>
				<td align="center" rowspan="2">Class</td>
				<td align="center" rowspan="2">
				<?php
				$total_marks = array();
				$cond = array(
					"class"			=> $student[0]->class,
					"YEAR(date)"	=> $result[0]->year,
					"exam_id"		=> $result[0]->exam_id
				);

				$where = array(
					"class"			=> $student[0]->class,
					"YEAR(date)"	=> $result[0]->year,
					"session"		=> $result[0]->year."-".($result[0]->year+1)
				);	

				$no_Student = $this->retrieve->read("admission", $where);
				$position = $this->retrieve->read("result", $cond);

				foreach ($position as $key => $value) { $total_marks[$value->roll] = $value->total; }	  
				arsort($total_marks);
				
				echo (array_search($student[0]->roll, array_keys($total_marks))+1); ?> out of <?php echo count($no_Student); ?>
				</td>

				<td>Working Day</td>
				<td>&nbsp;</td>
			</tr>

			<tr>
				<td>Total Marks</td>
				<td align="center"><b><?php echo $totalMarks; ?></b></td>			
				<td>Present</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		
		<table style="width: 100%;margin-bottom: 8px;">	
			<tr><td><b>Remarks : </b><?php echo getComment($gpa); ?></td></tr>
		</table>
	
		<table border="0" style="width:100%;margin-bottom:8px;">	
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<th>Class Teacher</th>
				<th>&nbsp;</th>
				<th>Parents/Guardian</th>
				<th>&nbsp;</th>
				<th>Principal</th>
			</tr>
		</table>	

		<p style="margin:50px 0 9px 0;">
		<?php $result_publish_date = $this->retrieve->read("result", array('exam_id'=>$result[0]->exam_id)); ?>
		Date of publication of result: <?php if($result_publish_date != NULL){ echo date( 'd F, Y', strtotime($result_publish_date[0]->date)); }else{echo "10 April,2016";} ?>
		</p>

		</div>
		<?php } ?>

	</div>		
		<div class="footer">Software by <strong>Freelance IT Lab</strong>, Mymensingh.</div>
	</div>
</body>
</html>