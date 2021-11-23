<style>
    @page {margin: 10px;}
    .table_header h3 {
        font-weight: 600;
        margin: 0 0 5px;
    }
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
    .table tr .d_table {
        border-right: none;
        border-top: none;
        border-left: none; 
        flex-wrap: wrap;
        display: flex;
        padding: 2px;
    }
    .table tr .table {
        max-width: calc(33.33% - 6px);
        margin: 3px;
        min-width: 156px;
    }
    .table tr .table th,
    .table tr .table td {
        font-size: 10px;
        padding: 1px;
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
                                <?php foreach (config_item('class_for_six_to_ten') as $key => $value) { ?>
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
                   <h1 class="pull-left">Secondary Tabulation Sheet</h1>
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
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="text-center" style="width: 40px;">SL</th>
                            <th class="text-center" style="width: 60px;">ID</th>
                            <th class="text-center">Student Name</th>
                            <th class="text-center" style="width: 495px;">Marks</th>
                            <th class="text-center">Grand Total</th>
                            <th class="text-center">GPA</th>
                            <th class="text-center">Remarks</th>
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
                                
                                $select    = ['student_id','exam_id','subject','objective','written','assignment','cleanliness','total', 'point', 'letter'];
                                $marks     = get_result('marks', $where, $select, '', 'subject', 'ASC');
                            ?>
                        <tr>
                            <td class="text-center"><?= ($key+1); ?></td>
                            <td class="text-center"><?= (!empty($student->student_id) ? $student->student_id : ''); ?></td>
                            <td class="text-center"><?= (!empty($student->name) ? $student->name : ''); ?></td>
                            <td class="text-center d_table">
                                <?php 
                                $total_marks = $bangla = $bangla_point = $english = $english_point = $total_point = $total_point_without_part = $gpa = 0;
                                $letters = [];
                                
                                foreach($marks as $keyMark => $mark){
                                    $letters[] = $mark->letter;
    				                $total_marks += $mark->total;
    				                $total_point += $mark->point;
    				                
    				                if($mark->subject=='Bengali 1st' || $mark->subject=='Bengali 2nd'){
        				                $bangla_point += $mark->point; 
            				        }
            				        if($mark->subject=='English 1st' || $mark->subject=='English 2nd'){
            				            $english_point += $mark->point; 
            				        }
            				        if($mark->subject !='Bengali 1st' && $mark->subject!='Bengali 2nd' && $mark->subject !='English 1st' && $mark->subject !='English 2nd'){
            				            $total_point_without_part += $mark->point; 
            				        }
                                    
                                ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th class="text-center" colspan="6"><?= $mark->subject; ?></th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">W</th>
                                        <th class="text-center">O</th>
                                        <th class="text-center">As</th>
                                        <th class="text-center">C/P</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">LG</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><?= number_format($mark->written); ?>  </td>
                                        <td class="text-center"><?= number_format($mark->objective); ?></td>
                                        <td class="text-center"><?= $mark->assignment; ?></td>
                                        <td class="text-center"><?= $mark->cleanliness; ?></td>
                                        <td class="text-center"><?= $mark->total; ?></td>
                                        <td class="text-center"><?= $mark->letter; ?></td>
                                    </tr>
                                </table>
                                <?php } ?>
                            </td>
                            <td class="text-center"><?= $total_marks; ?></td>
                            <td class="text-center">
                                <?php
                                    if(in_array('F', $letters)){
                                        $gpa = 0;
                                    }else{
                                        $bangla = ($bangla_point / 2);
                    			        $english = ($english_point / 2);
                    			        $point = $total_point_without_part + $bangla + $english;
                    			        $point = ($point/$subject_qty);
                                        $gpa = number_format($point, 2);
                                    }
                                    echo $gpa;
                                ?>
                            </td>
                            <td class="text-center"></td>
                       </tr>
                        <?php } ?>
                    </table>
                </div>
                
                <div class="signature_box">
                    <h5>Signature of Class Teacher</h5>
                    <h5>Signature of Head Master</h5>
                </div>
                <? } ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>