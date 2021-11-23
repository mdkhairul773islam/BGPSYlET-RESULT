<style>
    @page {margin: 10px;}
    .table_header h3 {margin: 0 0 5px;}
    .table_header {
        margin-bottom: 15px;
        text-align: center;
        color: #000;
        padding-top: 20px;
    }
    .table_header img {max-width: 80px;}
    .signature_box {
        justify-content: space-between;
        align-items: center;
        display: flex;
        margin-top: 45px;
    }
    .signature_box h5 {
        border-top: 2px dashed #000;
        display: inline-block;
        padding-top: 5px;
        color: #000;
    }
    @page {size: A4 landscape;}
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
                       "class" => ""
                   );
                   echo form_open("", $attribute);
                ?>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="exam" class="form-control" required>
                                <option value="" selected>Select Exam Name</option>
                                <?php if ($exam != null) { foreach ($exam as $row) { ?>
                                <option value="<?php echo $row->exam_id; ?>"> <?php echo $row->title; ?> </option> 
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="class" ng-model="class" class="form-control" required >
                                <option value="">Select Class</option>
                                <?php foreach (config_item('class_for_one_to_five') as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                       </div>
                    </div>
                    
        			<div class="col-md-3">
                        <div class="form-group">
                            <select name="session" class="form-control" required>
                               <option value="">Select Session</option>
                               <?php foreach ($sessions as $key => $value) { ?>
                               <option value="<?php echo $value->year; ?>"><?php echo $value->year; ?></option>
                               <?php } ?>
                           </select>
                        </div>
                    </div>
                
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="section" class="form-control" required>
                				<option value="">Select Section</option>
                    			<?php foreach (config_item('section') as $value) { ?>
                    				<option value="<?php echo $value; ?>" ><?php echo $value;?></option>
                    			<?php } ?>
            			    </select>
                        </div>
                    </div>
                
    				<div class="col-md-3">
                        <div class="form-group">
        					<input type="text" name="student_id" ng-model="student_id" class="form-control" placeholder="Student ID">
        				</div>
        			</div>
    			
                    <div class="col-md-2">
                        <div class="form-group">
                          <input type="submit" value="Show" name="show" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <?php
                   echo form_close();
               ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        
        <div class="panel panel-default" ng-init="active=true">
            <div class="panel-heading">
                <div class="panal-header-title">
                   <h1 class="pull-left">Primary School Tabulation Sheet</h1>
                   <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
         
            <div class="panel-body">
                <?php
                    if(!empty($student_information)) {
                ?>
                <div class="table_header">
                    <h3><img src="public/images/logo/03.png" alt=""> BORDER GUARD PUBLIC SCHOOL & COLLEGE, SYLHET</h3>
                    <h3>TABULATION SHEET</h3>
                    <h4>
                        <?php 
    				        $exam_name = get_name('exam', 'title', ['exam_id'=>$student_information[0]->exam_id]);
    				        echo (!empty($exam_name) ? $exam_name : '');
    				    ?>
                    </h4>
                    <h4>Class – <?= $student_information[0]->class; ?></h4>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center" rowspan="2" style="width: 40px;">SL</th>
                        <th class="text-center" rowspan="2" style="width: 60px;">ID</th>
                        <th class="text-center" rowspan="2">Student Name</th>
                        <th class="text-center" colspan="2">Bengali (50)</th>
                        <th class="text-center" colspan="2">English (50)</th>
                        <th class="text-center" colspan="2">Mathematics (50)</th>
                        <th class="text-center" rowspan="2">Grand Total Marks (150)</th>
                        <th class="text-center" rowspan="2">GPA</th>
                        <th class="text-center" rowspan="2">Remarks</th>
                    </tr>
                    <tr>
                        <th class="text-center">Obtained Marks</th>
                        <th class="text-center">Letter Grade</th>
                        <th class="text-center">Obtained Marks</th>
                        <th class="text-center">Letter Grade</th>
                        <th class="text-center">Obtained Marks</th>
                        <th class="text-center">Letter Grade</th>
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
                        <td class="text-center"><?= ($key+1); ?></td>
                        <td class="text-center"><?= (!empty($student->student_id) ? $student->student_id : ''); ?></td>
                        <td class="text-center"><?= (!empty($student->name) ? $student->name : ''); ?></td>
                        <?php 
                        $total_marks = $total_point = $subject_qty = $gpa = 0;
                        $letters = [];
                        foreach($marks as $keyMark => $mark){
                                $subject_qty += $keyMark;
                                $letters[] = $mark->letter;
    				            $total_marks += $mark->total;
    				            $total_point += $mark->point;
    				            $gpa = ($total_point / ($subject_qty > 0 ? $subject_qty: 1));
                                if($mark->subject=='Bengali'){
                          ?>
                        <td class="text-center"><?= $mark->total; ?></td>
                        <td class="text-center"><?= $mark->letter; ?></td>
                        <?php }elseif($mark->subject=='English'){ ?>
                        <td class="text-center"><?= $mark->total; ?></td>
                        <td class="text-center"><?= $mark->letter; ?></td>
                        <?php }elseif($mark->subject=='Mathematics'){ ?>  
                        <td class="text-center"><?= $mark->total; ?></td>
                        <td class="text-center"><?= $mark->letter; ?></td>
                        <?php }} ?>
                        <td class="text-center"><?= $total_marks; ?></td>
                        <td class="text-center">
                            <?php
                            if(in_array('F', $letters)){
                                    echo 0;
                                }else{
                                    echo number_format($gpa, 2);
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            
                        </td>
                   </tr>
                   <?php } ?>
                </table>
                
                <div class="signature_box">
                    <h5>Signature of Class Teacher</h5>
                    <h5>Signature of Head Master</h5>
                </div>
                 <?php } ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>