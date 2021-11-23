<style>
   td {
   vertical-align: middle !important;
   }
   .attendance tr th{
   text-align: center;
   }
   .attendance label{
   display: block;
   }
   .reg-publish td{
   padding: 0 !important;
   border:  1px solid #bcb9b9 !important;
   }
   .reg-publish td input[type="text"]{
   border: 1px solid transparent;
   }
   @media print{
   aside{
   display: none !important;
   }
   nav{
   display: none;
   }
   .panel{
   border: 1px solid transparent;
   left: 0px;
   position: absolute;
   top: 0px;
   width: 100%;
   }
   .box-width{
   width: 50%;
   }
   .none{
   display: none;
   }
   .panel-heading{
   display: none;
   }
   .panel-footer{
   display: none;
   }
   .hide{
   display: block !important;
   }
   .title{
   font-size:  25px;
   }
   .reg-publish tr th:nth-of-type(1){
   width: 6%;
   }
   .reg-publish tr th:nth-of-type(3){
   width: 8%;
   }
   }
</style>
<div class="container-fluid">
   <div class="row">
      <div class="panel panel-default none">
         <div class="panel-heading">
            <div class="panal-header-title pull-left">
               <h1>Search Result</h1>
            </div>
         </div>
         <div class="panel-body">
            <?php
               $attribute = array(
                   "class" => "form-horizontal"
               );
               echo form_open("", $attribute);
            ?>
            <div class="form-group">
               <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
               <div class="col-md-5">
                  <select name="exam" class="form-control" required>
                     <option value="" selected> -- Select Exam Name -- </option>
                     <?php if ($exam != null) { foreach ($exam as $row) { ?>
                     <option value="<?php echo $row->exam_id; ?>"> <?php echo $row->title; ?> </option> 
                     <?php } } ?>
                  </select>
               </div>
            </div>
            
            <div class="form-group">
               <label class="col-md-2 control-label">Class <span class="req">*</span></label>
               <div class="col-md-5">
                  <select name="class" ng-model="class" class="form-control" required >
                     <option value="">-- Select Class --</option>
                     <?php foreach (config_item('class_for_one_to_five') as $key => $value) { ?>
                     <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                     <?php } ?>
                  </select>
               </div>
            </div>
            
            <div class="form-group">
               <label class="col-md-2 control-label">Year/Session <span class="req">*</span></label>
				<div class="col-md-5">
                    <select name="session" class="form-control" required>
                       <option value="">-- Select Session --</option>
                       <?php foreach ($sessions as $key => $value) { ?>
                       <option value="<?php echo $value->year; ?>"><?php echo $value->year; ?></option>
                       <?php } ?>
                   </select>
                </div>
            </div>
            
            <div class="form-group">
               <label class="col-md-2 control-label">Section <span class="req">*</span></label>
               <div class="col-md-5">
                  <select name="section" class="form-control" required>
        				<option value="">-- Select Section --</option>
        			<?php foreach (config_item('section') as $value) { ?>
        				<option value="<?php echo $value; ?>" ><?php echo $value;?></option>
        			<?php } ?>
        			</select>
               </div>
            </div>
            
            <div class="form-group">
				<label class="col-md-2 control-label">Student ID <span class="req"></span></label>
				<div class="col-md-5">
					<input type="text" name="student_id" ng-model="student_id" class="form-control" placeholder="Student ID">
				</div>
			</div>
			
            <div class="col-md-7">
               <div class="btn-group pull-right">
                  <input type="submit" value="Show" name="show" class="btn btn-primary">
               </div>
            </div>
            <?php
               echo form_close();
               ?>
         </div>
         <div class="panel-footer">&nbsp;</div>
      </div>
      <?php
         if(!empty($student_information)) {
         ?>
      <div class="panel panel-default" ng-init="active=true">
         <div class="panel-heading">
            <div class="panal-header-title">
               <h1 class="pull-left">Tabulation Sheet</h1>
               <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
            </div>
         </div>
         
         <div class="panel-body">
            <!--<p class="text-center">
               Session : <br/>
               Class : <br/>
               Exam: <br/>
            </p>-->
            <table class="table table-bordered reg-publish">
               <tr>
                  <th class="text-center" width="10px">SL</th>
                  <th width="180px">Student Name</th>
                  <th class="text-center" width="100px">Student ID </th>
                  <th class="text-center" width="450px">Marks</th>
                  <th class="text-center">GPA</th>
                  <th class="text-center">Grade</th>
                  <th class="text-center">Position</th>
               </tr>
               <?php
                    foreach($student_information as $key => $student){
                        
                        $where = [
                            'class'       =>$student->class,
                            'section'     =>$student->section,
                            'year'        =>$student->year,
                            'exam_id'     =>$student->exam_id,
                            'student_id'  =>$student->student_id
                        ];
            
                        if(!empty($this->input->post('student_id'))){
                            $where['student_id'] = $student->student_id;
                        }
                        
                        $select    = ['student_id','exam_id','subject','total', 'point', 'letter'];
                        $marks = get_result('marks', $where, $select, '', 'subject', 'ASC');
               ?>
               <tr>
                  <td class="text-center">
                    <?= ($key+1); ?>
                  </td>
                  <td class="text-center">
                     <?= (!empty($student->name) ? $student->name : ''); ?>
                  </td>
                  <td class="text-center">
                       <?= (!empty($student->student_id) ? $student->student_id : ''); ?>
                  </td>
                  <td class="text-center">
                      <?php 
                        $total_marks = $total_point = $subject_qty = $gpa = 0;
                        $letters = [];
                        foreach($marks as $keyMark => $mark){
                            $subject_qty += $keyMark;
                            $letters[] = $mark->letter;
				            $total_marks += $mark->total;
				            $total_point += $mark->point;
				            $gpa = ($total_point / ($subject_qty > 0 ? $subject_qty: 1));
                            echo $mark->subject.' = '. $mark->letter.' ';
                        }
                      ?>
                  </td>
                  <td class="text-center" width="60px" >
                    <?php
                        if(in_array('F', $letters)){
                            echo 0;
                        }else{
                            echo number_format($gpa, 2);
                            
                        }
                    ?>
                  </td>
                  <td class="text-center" width="60px">&nbsp;</td>
                  <td style="text-align:center; vertical-align: middle; font-weight: bold;">
                     <?php 
                        if(in_array('F', $letters)){
                            echo "F";
                        }else{
                           $position = (array_search($total_marks, $student_mark_position)) + 1;
                            echo ($position);
                        }
                     ?>
                  </td>
               </tr>
             <?php } ?>
               
            </table>
            <div class="pull-right principal_main hide" style="width: 200px; margin: 60px 0px 0px; text-align: center; border-top: 1px solid #bfbaba;">
               <img class="principal_sign img-responsive" src="<?php echo base_url('public/img/hs.jpg');?>" alt="Sign Not Found !">
               <strong>Principal</strong>
            </div>
         </div>
         <div class="panel-footer">&nbsp;</div>
      </div>
      <?php } ?>
   </div>
</div>