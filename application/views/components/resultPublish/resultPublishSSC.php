<style>
.attendance tr th {
    text-align: center;
}

.attendance label {
    display: block;
}

.reg-publish td {
    padding: 0 !important;
    border: 1px solid #bcb9b9 !important;
}

.reg-publish td input[type="text"] {
    border: 1px solid transparent;
}

@media print {
    aside {
        display: none !important;
    }

    nav {
        display: none;
    }

    .panel {
        border: 1px solid transparent;
        left: 0px;
        position: absolute;
        top: 0px;
        width: 100%;
    }

    .box-width {
        width: 50%;
    }

    .none {
        display: none;
    }

    .panel-heading {
        display: none;
    }

    .panel-footer {
        display: none;
    }

    .hide {
        display: block !important;
    }

    .title {
        font-size: 25px;
    }
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default none">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>SSC Results Publish</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php
                echo $confirmation;
                $attribute = array("class" => "form-horizontal");
                echo form_open("", $attribute);
                ?>
                <div class="form-group">
                    <label class="col-md-2 control-label">Publishing Date<span class="req">*</span></label>
                    <div class="input-group date col-md-5" id="datetimepicker1">
                        <input name="date" class="form-control" value="<?php echo date('Y-m-d');?>" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
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
                         <?php foreach (config_item('class_for_six_to_ten') as $key => $value) { ?>
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
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>

        <?php if(!empty($student_information)){ ?>
        <div class="panel panel-default" ng-init="active=true">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;"
                        onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
            
            <div class="panel-body">
                <?php
                    $attribute = array("name" => "");
                    echo form_open("", $attribute);
                ?>

                <input type="hidden" name="exam_id" value="<?php echo $student_information[0]->exam_id; ?>">
                <input type="hidden" name="class" value="<?php echo $student_information[0]->class; ?>">
                <input type="hidden" name="year" value="<?php echo $student_information[0]->year; ?>">
                <input type="hidden" name="date" value="<?php echo $this->input->post('date'); ?>">
                <input type="hidden" name="section" value="<?php echo $student_information[0]->section; ?>">

                <table class="table table-bordered reg-publish">
                   <tr>
                      <th class="text-center" width="10px">SL</th>
                      <th width="100px">Student ID </th>
                      <th width="180px">Student Name</th>
                      <th>Total Marks</th>
                      <th>GPA</th>
                      <th>Grade</th>
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
                            
                            $select = ['student_id', 'roll', 'exam_id','subject', 'subject_name', 'total', 'point', 'letter'];
                            $marks  = get_result('marks', $where, $select, '', 'subject', 'ASC');
                   ?>
                   <tr>
                      <td class="text-center">
                        <?= ($key+1); ?>
                      </td>
                      <td class="text-center">
                        <input type="text" name="student_id[]" class="form-control" value="<?= (!empty($student->student_id) ? $student->student_id : ''); ?>" readonly>
                        <input type="hidden" name="roll[]" class="form-control" value="<?= (!empty($student->roll) ? $student->roll : ''); ?>" readonly>
                        <input type="hidden" name="group[]" class="form-control" value="<?= (!empty($student->group) ? $student->group : ''); ?>" readonly>
                      </td>
                      <td class="text-center">
                          <input type="text" name="name[]" class="form-control" value="<?= (!empty($student->name) ? $student->name : ''); ?>" readonly>
                      </td>
                      <td class="text-center" width="60px">
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
                            }
                          ?>
                          <input type="text" name="total_marks[]" class="form-control" value="<?= (!empty($total_marks) ? $total_marks : 0); ?>" readonly>
                      </td>
                      <td class="text-center" width="60px">
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
                        ?>
                        <input type="text" name="gpa[]" class="form-control" value="<?= $gpa; ?>" readonly>
                      </td>
                      <td class="text-center" width="60px">
                        <input type="text" name="grade[]" class="form-control" value="<?= (!empty(get_gpa($gpa)) ? get_gpa($gpa) : 0); ?>" readonly>
                      </td>
                   </tr>
                 <?php } ?>
                   
                </table>

                <div class="btn-group pull-right">
                    <input type="submit" value="Publish" name="publish" class="btn btn-primary">
                </div>

                <?php echo form_close();?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
</div>

<script>
// linking between two date
$('#datetimepicker1').datetimepicker({
    format: 'YYYY-MM-DD',
    useCurrent: false
});
</script>