<style>
    .attendance tr th{
        text-align: center;
    }
    .attendance label{
        display: block;
    }
    .panelShow{
        display: none;
    }
    .exam-table tr td{
        padding: 0 !important;
    }
    .exam-table tr td .form-control{
        border: none;
    }
</style>

<div class="container-fluid" ng-controller="MarksCtrl" ng-cloak>
    <div class="row">
        <?php echo $confirmation; ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Marks</h1>
                </div>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal" ng-submit="getAllStudents()">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Exam Name <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="exam_id" ng-change="getExamTypeInfoFn();" ng-model="examID" class="form-control" required>
                                <option value="" selected> -- Select Exam Name -- </option>
                                <?php if($exam != null){ foreach($exam as $row){ ?>
                                <option value="<?php echo $row->exam_id; ?>">
                                    <?php echo $row->title; ?>
                                </option>
                                <?php }} ?>
                            </select>
                        </div>
                        <input type="hidden"  ng-value="exam_type">
                    </div>

                    <!--div class="form-group">
                        <label class="col-md-2 control-label">Year <span class="req">*</span></label>
                        <div class="col-md-5" ng-init="year=<?php echo date('Y'); ?>">
                            <input type="text" name="year" ng-model="year" class="form-control" required>
                        </div>
                    </div-->
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="class" ng-model="class" class="form-control" required >
                                <option value="">-- Select Class --</option>
                                <?php foreach(config_item('classes') as $key => $value){ ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="col-md-2 control-label">Year/Session<span class="req"> *</span></label>
                        <div class="col-md-5">
                            <select name="year" ng-model="year"  class="form-control" required>
                                <option value="">--Select Session--</option>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                <?php } ?>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-md-2 control-label">Group <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="group" ng-model="group" class="form-control" required>
                                <option value="" selected>-- Select Group --</option>
                                <?php foreach(config_item('group') as $key => $value){ ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!--<div class="form-group ">
                        <label class="col-md-2 control-label">Subject Name <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="subject_name" ng-model="subjectName" class="form-control" required>
                                <?php // foreach (config_item('subject') as $key => $value) { ?>
                                <optgroup label="Class <?php echo $key; ?>" ng-if="class=='<?php echo $key; ?>'">
                                    <?php // foreach ($value as $val) { ?>
                                    <option value="<?php echo $val; ?>">
                                        <?php echo $val; ?>
                                    </option>
                                    <?php // } ?>
                                </optgroup>
                                <?php // } ?>
                            </select>
                        </div>
                    </div>-->
                    
                    <div class="form-group ">
                        <label class="col-md-2 control-label">Subject Name <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="subject_name" ng-model="subjectName" ng-init="subjectName=''" class="form-control" ng-required="required">
                                <option value="" disabled selected>-- Select Subject --</option>
                                <?php foreach ($allSubject as $key => $value) { ?>
                                    <option value="<?php echo trim($value->name); ?>"><?php echo trim($value->name); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-md-2 control-label">Paper <span class="req">*</span> </label>
                        <div class="col-md-5">
                            <select name="paper" ng-model="paper" class="form-control" required>
                                <option value="" disabled selected>-- Select Paper --</option>
                                <option value="None">None</option>
                                <option value="1st">1st Paper</option>
                                <option value="2nd">2nd Paper</option>
                            </select>
                        </div>
                    </div>

                      <div class="form-group ">
                        <label class="col-md-2 control-label">Section <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="section" ng-model="section" class="form-control" required>
                                <option value="" selected>-- Select Section--</option>
                                <?php foreach(config_item('section') as $value){ ?>
				                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
				                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Student ID </label>
                        <div class="col-md-5">
                            <input type="text" name="student_id" ng-model="reg_id" class="form-control" placeholder="Student ID">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="btn-group pull-right">
                            <input type="submit" value="Show" name="show" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>


        <div ng-init="active=true" class="panel panel-default" ng-hide="active" ng-cloak>
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Set Marks</h1>
                    <p>Total <strong>{{ students.length }}</strong> Students Found.</p>
                </div>
            </div>

            <?php
            $attribute = array("name" => "");
            echo form_open("", $attribute);
            ?>
            <div class="panel-body">

                <input type="hidden" name="exam_id" ng-value="examID">
                <input type="hidden" name="year" ng-value="year">
                <input type="hidden" name="class" ng-value="class">
                <input type="hidden" name="group" ng-value="group">
                <input type="hidden" name="subject" ng-value="subjectName">
                <input type="hidden" name="subject_code" ng-value="subjectCode">
                <input type="hidden" name="paper" ng-value="paper">
                <input type="hidden" name="section" ng-value="section">


                <table class="table table-bordered exam-table" ng-init="row_active=true;">
                    <tr>
                        <th class="text-center" width="50px" style="cursor:pointer;">Sl</th>
                        <th width="80px" style="cursor:pointer;">Student ID</th>
                        <th> Name </th>
                       <!-- <th width="80px" ng-hide="row_active">Attendance</th>
                        <th width="120px" ng-hide="row_active">Weekly Test</th>-->
                        <th width="90px">Written</th>
                        <th width="90px">Objective</th>
                        <th width="90px">Assignment</th>
                        <th width="90px">Cleanliness</th>
                        <th width="90px">Practical</th>
                        <th width="100px">Total Marks</th>
                        <th width="110px">Letter Grade</th>
                        <th width="100px">Grade Point</th>
                    </tr>
                    <tr ng-repeat="student in students | orderBy:sort:reverse">
                        <td class="text-center">
                            {{$index+1}}
                        </td>
                        <td>
                            <input type="text" name="student_id[]" class="form-control" ng-model="student.student_id" readonly>
                            <input type="hidden" name="student[]" class="form-control" ng-value="student.roll" readonly>
                            <input type="hidden" class="form-control" name="attendance[]" min="0" max="5" ng-model="student.attendance" step="any">
                            <input type="hidden" class="form-control" name="monthlyTest[]" min="0" max="6" ng-model="student.monthlyTest" step="any">
                        </td>

                        <td style="padding: 4px 8px !important;"> {{student.name}}</td>

                        <!--<td ng-hide="row_active">
                            <input
                                type="number" class="form-control" name="attendance[]"
                                min="0" max="5"
                                ng-model="student.attendance" step="any">
                        </td>

                        <td ng-hide="row_active">
                            <input
                                type="number" class="form-control" name="monthlyTest[]"
                                min="0" max="6"
                                ng-model="student.monthlyTest" step="any">
                        </td>-->

                        <td>
                            <input
                                type="number" class="form-control" name="written[]"
                                min="0" max="{{ subject.written }}"
                                ng-model="student.written" step="any">
                        </td>
                        
                        <td>
                            <input
                                type="number" class="form-control" name="objective[]"
                                min="0" max="{{ subject.objective }}"
                                ng-model="student.objective" step="any">
                        </td>

                        <td>
                            <input
                                type="number" class="form-control" name="assignment[]"
                                min="0" max="{{ subject.assignment }}"
                                ng-model="student.assignment" step="any">
                        </td>
                        
                        <td>
                            <input
                                type="number" class="form-control" name="cleanliness[]"
                                min="0" max="{{ subject.cleanliness }}"
                                ng-model="student.cleanliness" step="any">
                        </td>
                        
                        <td>
                            <input
                                type="number" class="form-control" name="practical[]"
                                min="0" max="{{ subject.practical }}"
                                ng-model="student.practical" step="any">
                        </td>

                        <td>
                            <input
                                type="text" class="form-control" name="total[]"
                                ng-model="student.total"
                                ng-value="totalMarksFn(student.roll)" readonly>
                        </td>

                        <td>
                            <input
                                type="text" class="form-control" name="letter[]"
                                ng-model="student.letter"
                                ng-value="letterGradeFn(student.roll)" readonly>
                        </td>

                        <td>
                            <input
                                type="text" class="form-control" name="grade[]"
                                ng-model="student.grade"
                                ng-value="gradePointFn(student.roll)" readonly>
                        </td>
                    </tr>

                </table>

                <div class="btn-group pull-right">
                    <input type="submit" value="Save" name="save" class="btn btn-primary">
                </div>

            </div>
            <?php echo form_close(); ?>

            <div class="panel-footer">&nbsp;</div>
        </div>

    </div>
</div>
