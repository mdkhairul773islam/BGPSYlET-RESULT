<style>
	.attendance tr th {text-align: center;}
	.attendance label {display: block;}
</style>
<div class="container-fluid">
    <div class="row">
        <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Take Attendance</h1>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 no-padding">
                    <?php
                        $attr=array("class"=>"form-horizontal");
                        echo form_open("",$attr);
                    ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="search[class]" ng-model="class" class="form-control"  required>
                                <option value="">Select Class</option>
                                <?php foreach(config_item('classes') as $key => $value){?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Year/Session <span class="req">*</span></label>
                        <div class="col-md-5" ng-if="class =='Eleven' || class =='Twelve'">
                            <select name="search[session]" class="form-control" required>
                                <option value="">Select Session</option>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="col-md-5" ng-if="class !='Eleven' && class !='Twelve'">
                            <select name="search[session]" class="form-control" required>
                                <option value="">Select Session</option>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Group <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="search[group]" class="form-control"  required>
                                <option value="">Select Group</option>
                                <option value="None">None</option>
                                <option value="science">Science</option>
                                <option value="humanities">Humanities</option>
                                <option value="business studies">Business Studies</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Section <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="search[section]" class="form-control"  required>
                                <option value="">Select Section</option>
                                <?php foreach(config_item('section') as $key => $value){ ?>
                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Student ID </label>
                        <div class="col-md-5">
                            <input type="text" name="search[student_id]" ng-model="reg_id" class="form-control" placeholder="Student ID">
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                        <div class="btn-group pull-right">
                            <input type="submit" value="Show" name="show_students" class="btn btn-primary">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        
        <?php if($all_students != NULL){ ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Please Uncheck the Roll Numbers those are absent to Send SMS</h1>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open(''); ?>
                <div class="row attendance-section">
                    <div class="col-md-12">
                        <ul>
                        <?php foreach ($all_students as $key => $value) {?>
                              <input type="hidden" name="reg_id[]" value="<?php echo $value->student_id; ?>">
                              <input type="hidden" name="id[]" value="<?php echo $value->id; ?>">
                              <input type="hidden" name="class" value="<?php echo $value->class;?>">
                              <input type="hidden" name="session" value="<?php echo $value->session;?>">
                              <input type="hidden" name="group" value="<?php echo $value->group;?>">
                              <input type="hidden" name="section" value="<?php echo $value->section;?>">
                              <input type="hidden" name="subject" value="<?php echo $subject;?>">
                             <?php $student_info = $this->action->read('registration', array('reg_id'=> $value->student_id)); ?>
                             <li ng-class="{red: !boxvalue<?php echo $key; ?>}" ng-init="boxvalue<?php echo $key; ?>=true">
                                <label for="chackbox-<?php echo $key; ?>">
                                    <img src="<?php  echo site_url('public/students/'.$student_info[0]->photo); ?>"
                                         style="max-width=48px; max-height: 51px;" alt="Photo not found!">
                                    <p>
                                        <strong><?php  echo ucwords($student_info[0]->name);?></strong><br>
                                        <small><?php echo $value->roll;?></small>
                                    </p>
                                    <input type="checkbox" name="attendance[]" ng-model="boxvalue<?php echo $key; ?>"
                                        id="chackbox-<?php echo $key; ?>"
                                        value="<?php  echo $value->roll."_".$student_info[0]->guardian_mobile;?>">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>         
                </div>
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-12">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Date<span class="req"> *</span></label>
                            <div class="input-group  col-md-8" id="datetimepicker1">
                                <input type="text" class="form-control" name="attendance_date"  required value="<?php echo date('Y-m-d'); ?>">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="btn-group pull-right">
                           <select name="submit_method" class="btn" required style="margin-right: 2px; border: 1px solid #DDDDDD;" >
                                <option value="">--Select an option--</option>
                                <option value="save">Only Save</option>
                                <option value="save_send">Save & Send</option>
                           </select>
                           <input type="submit" value="Save" name="submit" class="btn btn-primary">
                        </div>
                    </div>  
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
      <?php } ?>    
  </div>
</div>