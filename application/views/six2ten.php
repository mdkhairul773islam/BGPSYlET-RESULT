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
		select, input[type="text"],input[type="number"]{
			border: 1px solid rgba(0,0,0,0.3);
			height: 20px;
			padding-left: 5px;
			font-size: 12px;
			width: 124px;
		}
		select{
			height: 25px;
		}
		input[type="submit"]{

			width: 80px;
			text-align: center;
			border: 1px solid rgba(0,0,0,0.3);
			background: rgba(0,0,0,0.1);
			line-height:22px;
		}
		input[type="submit"]:hover{
			cursor: pointer;
		}
		table, tr, th, td{
			font-size: 12px;
			margin-top: 3px;
			border: 1px solid rgba(0,0,0,0.2);
			border-collapse: collapse;
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

		@media print{
			select, input[type="text"], input[type="submit"], a.print, legend{display: none;}
			.body{width:98%;}
			.footer{width:98%; margin-top: -20px;}
			table.new_remarks{border-bottom:2px solid rgba(0,0,0,0.2);}
			.none{display: none;}
			h3.new_name{margin: 0;}
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
		.new_table_bottom tr, .new_table_bottom tr th, .new_table_bottom tr td{border:1px solid transparent;}
		.new_table_bottom tr th:nth-child(odd){border-top:2px solid rgba(0,0,0,0.2);}
		.marks-table tr, th, td{}
		
		/* NEW STYLE */
		.main-area {position: relative;}
	    .img-fluid {max-width: 105%; display: none;}
	    .main-area {position: static;}
	    .new-hearde-custom {display: none; text-align: center;}
	    ._logo {width: 25%;position: absolute;top: 40%;left: 40%;opacity: 0.1;}
	    @media print {
	        ._logo {width: 50%;position: absolute;top: 28%;left: 24%;opacity: 0.1;}
	        *, *::before, *::after {padding: 0; margin: 0;}
	        .wrapper {max-width: 100%; max-height: 100%;}
	        .main-area {top: 6.5%;width: 88.5%;margin-left: 30px; position: absolute;}
		    .no-print {display: none;}
		    .img-fluid, .new-hearde-custom {display: block;}
		    .img-fluid{}
		    .new-hearde-custom h3 {margin-top: -5px;}
	    }
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="header">
			<img class="no-print" src="<?php echo site_url('public/banner/banner.png'); ?>"/>
		</div>
		<div class="body">
		 <?php  $attr = array('class' => 'none');
		        echo form_open("", $attr); ?>

			<select name="session" ng-model="session" class="form-control">
               <option value="">-- Select Session --</option>
               <?php foreach ($sessions as $key => $value) { ?>
               <option value="<?php echo $value->year; ?>"><?php echo $value->year; ?></option>
               <?php } ?>
           </select>

		   <select name="class" required>
				<option value="">-- Select Class --</option>
				<?php foreach (config_item('class_for_six_to_ten') as $key => $value) { ?>
				  <option value="<?php echo $key;?>" ><?php echo $value;?></option>
				<?php } ?>
			</select>

			<select name="section" required>
				<option value="">-- Select Section --</option>
			<?php foreach (config_item('section') as $value) { ?>
				<option value="<?php echo $value; ?>" ><?php echo $value;?></option>
			<?php } ?>
			</select>
			
			<input type="text" name="student_id" placeholder="Student ID"   required />
			
		    <select name="exam" required>
				<option value="">-- Select Exam--</option>
				<?php foreach ($exam as $key => $value) { ?>
				  <option value="<?php echo $value->exam_id;?>"><?php echo $value->title;?></option>
				<?php } ?>
			</select>

			<input type="submit" name="submit"  class="button" value="Show" />
		    <?php echo form_close();?>

			<div class="main-cover">
			    <?php 
			        if(!empty($student_information)){
			    ?>
			    <img src="<?php echo base_url('public/img/border1.png');?>" class="img-fluid">
			    <img src="<?php echo base_url('public/logo/logo.png');?>" class="_logo">
                <div class="main-area">
                    <div class="new-hearde-custom">
                        <img style="width: 75px; float: left; margin-left: 45px;" src="<?php echo base_url('public/logo/logo.png');?>" class="img-fluid">
                        <h2>Border Guard Public School and College, Sylhet</h2>
                    </div>
    				<h3 class="new_name">
    				    <?php 
    				        $exam_name = get_name('exam', 'title', ['exam_id'=>$student_information[0]->exam_id]);
    				        echo (!empty($exam_name) ? $exam_name : '');
    				    ?> <br/>
    				    ACADEMIC TRANSCRIPT
    				</h3>
    
      				<table style="width:100%;">
     				<tr>
     					<td style="width:60%;border:1px solid transparent;padding-left:0px;">
     						<table width="100%" cellspacing="1" cellpadding="0">
    					         <tr>
    					          <td width="25%" align="right" class="title3">Student's ID</td>
    					          <td width="25%" align="left" class="title3" colspan="2"><b><?= (!empty($student_information[0]->student_id) ? $student_information[0]->student_id : '' ); ?></b></td>
    					          <!--<td width="25%" align="center" class="title3" rowspan="4">
    					              <img style="width:100px; height:100px;" src="<?php // echo site_url('public/students').'/'.(!empty($student_information[0]->photo) ? $student_information[0]->photo : 'fitdevteam.png' );?>">
    					          </td>-->
    					        </tr>
    
    					        <tr>
    					          <td width="25%" align="right" class="title3">Name</td>
    					          <td width="25%" align="left" class="title3" colspan="2"><b><?= (!empty($student_information[0]->name) ? ucfirst($student_information[0]->name) : '' ); ?></b></td>
    					        </tr>
    					        <tr>
    					          <td width="25%" align="right" class="title3">Class</td>
    					          <td width="25%" align="left" class="title3" colspan="2"><b><?= (!empty($student_information[0]->class) ? $student_information[0]->class : '' ); ?></b></td>
    					        </tr>
    					        <?php
    					            if($student_information[0]->class=='Nine' || $student_information[0]->class=="Ten"){
    					        ?>
    					        <tr>
    					          <td width="25%" align="right" class="title3">Group</td>
    					          <td width="25%" align="left" class="title3" colspan="3"><?= (!empty($student_information[0]->group) ? $student_information[0]->group : '' ); ?></td>
    					        </tr>
    					        <?php } ?>
    					        <tr>
    					          <td width="25%" align="right" class="title3">Section</td>
    					          <td width="25%" align="left" class="title3"><?= (!empty($student_information[0]->section) ? $student_information[0]->section : '' ); ?></td>
    					        </tr>
    					        <tr>
    					            <td width="25%" align="right" class="title3">Session</td>
    					            <td width="25%" align="left" class="title3"><?= (!empty($student_information[0]->year) ? $student_information[0]->year : '' ); ?></td>
    					        </tr>
    					    </table>
     					</td>
     					<td style="width:40%;border:1px solid transparent;">
     						<table class="marks-table" width="100%"  cellspacing="1" cellpadding="0">
                                <tr>
                                    <td width="34%" align="center" class="title3"><b>LG</b></td>
                                    <td width="33%" align="center" class="title3"><b>Marks</b></td>
                                    <td width="33%" align="center" class="title3"><b>GP</b></td>
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
                                    <td align="center">00-32</td>
                                    <td align="center">0</td>
                                </tr>
    					    </table>
     					</td>
     				</tr>
     			</table>
    
    			<table style="width: 100%;margin-bottom: 8px;">
    				 <tr>
    					<th rowspan="2" style="width:25%;">Subjects</th>
    					<th>Subjective</th>
    					<th>Objective</th>
    					<th>Assignment</th>
    					<th>Cleanliness/Project</th>
    					<th>Total</th>
    					<th rowspan="2">Letter Grade</th>
    					<th rowspan="2">GPA</th>
    				</tr>
    				
    			    <tr>
    			 		<td align="center"><b>35</b></td>
    			 		<td align="center"><b>15</b></td>
    			 		<td align="center"><b>40</b></td>
    			 		<td align="center"><b>10</b></td>
    			 		<td align="center"><b>100</b></td>
    				</tr>
    				
    				<?php 
				    $total_marks = $total_point = $total_point_without_part =
				    $bangla = $bangla_gpa = $english = $english_gpa = $point = 0;
				    
    				    foreach($student_information as $key => $mark){
    				        
    				        $total_marks += $mark->total;
    				        $total_point += $mark->point;
    				        
    				        if($mark->subject=='Bengali 1st' || $mark->subject=='Bengali 2nd'){
    				            $bangla_gpa += $mark->point; 
    				        }
    				        if($mark->subject=='English 1st' || $mark->subject=='English 2nd'){
    				            $english_gpa += $mark->point; 
    				        }
    				        if($mark->subject !='Bengali 1st' && $mark->subject!='Bengali 2nd' && $mark->subject !='English 1st' && $mark->subject !='English 2nd'){
    				            $total_point_without_part += $mark->point; 
    				        }
    				?>
    				<tr>
    			 		<td align="center"><b><?= (!empty($mark->subject) ? $mark->subject : ''); ?></b></td>
    					<td align="center"><?= (!empty($mark->written) ? number_format($mark->written) : 0); ?></td>
    					<td align="center"><?= (!empty($mark->objective) ? number_format($mark->objective) : 0); ?></td>
    					<td align="center"><?= (!empty($mark->assignment) ? number_format($mark->assignment) : 0); ?></td>
    					<td align="center"><?= (!empty($mark->cleanliness) ? number_format($mark->cleanliness) : 0); ?></td>
    					<td align="center"><?= (!empty($mark->total) ? number_format($mark->total) : 0); ?></td>
    				    <td align="center"><?= (!empty($mark->letter) ? $mark->letter : 0); ?></td>
    				    <td align="center"><?= (!empty($mark->point) ? $mark->point : 0); ?></td>
    		        </tr>
    		        <?php } ?>
    		        <tr>
            			<th align="left"></th>
            			<th></th>
            			<th></th>
            			<th></th>
            			<th></th>
            			<th><?= $total_marks; ?></th>
            			<th></th>
            			<th><?= number_format($total_point /(!empty($subject_qty) ? $subject_qty : 0), 2); ?></th>
            		</tr>
            		<tr>
            			<th align="center">Total Presence</th>
            			<th colspan="7"></th>
            		</tr>
            		
            		<!--<tr>
            			<th align="center">Merit order</th>
            			<td colspan="7"><b></b></td>
            		</tr>-->
            		
            		<tr>
            			<th align="center">Type of Result</th>
            			<td colspan="7">
            			    <?php 
            			        $bangla = ($bangla_gpa / 2);
            			        $english = ($english_gpa / 2);
            			        $point = $total_point_without_part + $bangla + $english;
            			        $point = ($point/$subject_qty);
            			    ?>
            			    
                            <input type="checkbox" id="not_good" name="not_good" value="not_good" <?php echo (!empty(getComment($point)) && getComment($point)=='Not Good' ? 'checked' : ''); ?>>
            			    <label for="not_good">Not Good</label>
            			    
                            <input type="checkbox" id="good" name="good" value="good" <?php echo (!empty(getComment($point)) && getComment($point)=='Good' ? 'checked' : ''); ?>>
            			    <label for="good">Good</label>
            			    
                            <input type="checkbox" id="excellent" name="excellent" value="excellent" <?php echo (!empty(getComment($point)) && getComment($point)=='Excellents' ? 'checked' : ''); ?>>
            			    <label for="excellent">Excellent</label>
            			</td>
            		</tr>
            		
            		<tr>
            			<th align="center">GPA</th>
            			<th colspan="3">
            			    <?= number_format($point, 2); ?>
            			</th>
            			<th>Letter Grade</th>
            			<th colspan="3">
            			     <?= get_gpa($point); ?>
            			</th>
            		</tr>
            	</table>
            	<style>
            	    .principal_main {position: relative;}
            	    .principal_sign {
                        position: absolute;
                        top: -45px;
                        left: 0;
            	    }
            	</style>
            	<table class="new_table_bottom" style="width: 100%;margin-bottom: 8px;">
            		<tr><td colspan="7">&nbsp</td></tr>
            		<tr><td colspan="7">&nbsp</td></tr>
            		<tr>
            			<th width="16%">Signature of Parents </th>
            			<th width="3.75%"></th>
            			<th width="16%">Signature of Class Teacher</th>
            			<th width="3.75%"></th>
            			<th width="16%">Signature of Head Master</th>
            			<th width="3.75%"></th>
            			<!--<th width="16%" class="principal_main">
            			    <img style="width: 100%;" class="principal_sign" src="<?php // echo base_url('public/img/hs.jpg');?>" alt="Sign Not Found !">
            			    Principal
            			</th>-->
            		</tr>
            	</table>
        	  	<p style="margin:20px 0 9px 20px;">
        	  		Date of Publishing Result: 
        	  	</p>
        		<a href="#" class="print" onclick="window.print()" style="margin-left: 20px;">Print</a>
    	  </div>			    
    </div>
   
	</div>
		<div class="footer">
			Software by <a target="_blank" href="http://www.freelanceitlab.com">Freelance IT Lab</a>, Mymensingh.
		</div>
	</div>
	 <?php } ?>
</body>
</html>