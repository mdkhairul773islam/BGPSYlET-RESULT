<div class="container-fluid">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                   <h1>Registration</h1>
                </div>
            </div>
            <div class="panel-body" ng-controller="registrationCtrl"> 
                <?php
                    $attr=array( "class"=>"");
                    echo form_open_multipart("registration/regi_validation", $attr);
                ?>
                <div class="row">
                    <input type="hidden" name="session" value="<?php echo date('Y'); ?>" class="form-control">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Student ID<span class="req">*</span></label>
                        <div class="form-group">
                            <input type="text" name="student_id" ng-model="student_id" ng-change="checkExistsRegIdFn(student_id)" class="form-control"   maxlength="7"  minlength="6" required >
                            <span ng-if="existsStudentId" class="text-danger">This student id already exists. </span>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label"> Name of Student (in English)</small><span class="req">*</span></label>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"  required >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Name of Student (বাংলায়)<span class="req"></span></label>
                        <div class="form-group">
                            <input type="text" name="name_bn" class="form-control"  >
                        </div>
                    </div>
                    
                </div>
                <h5><strong class="color-size">FATHER INOFORMATION</strong><hr style="margin-top: 10px;"></h5>
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Name <span class="req"></span></label>
                        <div class="form-group">
                            <input type="text" name="father_name" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Profession <span class="req"></span></label>
                        <div class="form-group">
                            <input type="text" name="father_profession" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Workplace <span class="req"></span></label>
                        <div class="form-group">
                            <input type="text" name="father_workplace" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Mobile Number <span class="req"></span></label>
                        <div class="form-group">
                            <input type="text" name="guardian_mobile" class="form-control" >
                        </div>
                    </div>
                  
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Annual Income <span class="req"></span></label>
                        <div class="form-group">
                            <input type="text" name="father_annual_income" class="form-control" >
                        </div>
                    </div>
                </div>
                <h5><strong class="color-size">MOTHER INOFORMATION</strong><hr style="margin-top: 10px;"></h5>
               
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Name <span class="req"></span></label>
                        <div class="form-group">
                            <input type="text" name="mother_name" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Profession </label>
                        <div class="form-group">
                            <input type="text" name="mother_profession" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Workplace </label>
                        <div class="form-group">
                            <input type="text" name="mother_workplace" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Mobile Number </label>
                        <div class="form-group">
                            <input type="text" name="mother_mobile" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Annual Income </label>
                        <div class="form-group">
                            <input type="text" name="mother_annual_income" class="form-control">
                        </div>
                    </div>
                </div>
                
                <h5><strong class="color-size">Student Information</strong><hr style="margin-top: 10px;"></h5>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Date of Birth <span class="req"></span></label>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker1">
                                <input type="text" class="form-control" name="birth_date" >
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <label class="control-label">Class <span class="req">*</span></label>
                        <div class="form-group ">
                            <select name="class" id="class_name" ng-model="class" ng-init="class='';" class="form-control" required>
                                <option value="">Select Class</option>
                                <?php foreach(config_item('classes') as $key => $value){?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <label class="control-label">Roll <span class="req">*</span></label>
                        <div class="form-group ">
                            <input type="text" name="roll" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Section<span class="req">*</span></label>
                        <div class="form-group">
                            <select name="section" class="form-control" required>
                                <option value="">Select Section</option>
                                <?php foreach(config_item('section') as $key => $value){ ?>
                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-6">
                        <label class="control-label">Session/Year <span class="req"> *</span></label>
                        <div class="form-group" ng-if="class =='Eleven' || class =='Twelve'">
                            <select name="session" class="form-control" required>
                                <option value="">Select Session</option>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group" ng-if="class !='Eleven' && class !='Twelve'">
                            <select name="session" class="form-control" required>
                                <option value="">Select Session</option>
                                <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Group <span class="req">*</span></label>
                        <div class="form-group">
                            <select style="margin-bottom: 10px;" name="group" class="form-control" ng-model="group" ng-change="getSubjectFn()" required>
                                <option value="" selected disabled>Select Group</option>
                                <option value="None">None</option>
                                <option value="Science">Science</option>
                                <option value="Humanities">Humanities</option>
                                <option value="Business-Studies">Business Studies</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Name of the previous educational institution</label>
                        <div class="form-group">
                            <input type="text" name="previous_educational_institution" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label">Present Address <span class="req"></span></label>
                        <div class="form-group">
                            <textarea name="present_address" ng-model="present_address" id="pre_addr" class="form-control" cols="30" rows="5" ></textarea>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Permanent Address <span class="req">&nbsp;</span></label>
                            <input type="checkbox" ng-click="check()" ng-model="checkbox" id="permanent_address"> <label for="permanent_address">Same as Present Address</label>
                            <textarea name="permanent_address"  ng-bind="permanent_address" id="per_addr" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="control-label">Name and address of local guardian (With phone number)<span class="req">&nbsp;</span></label>
                        <div class="form-group ">
                            <textarea name="local_guardian" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                
                <h5>
                    <strong class="color-size">If the father or mother of the student is working in BGB</strong>
                    <hr style="margin-top: 10px;">
                </h5>
        
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Personal No</label>
                        <div class="form-group">
                            <input type="text" name="personal_no" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Designation</label>
                        <div class="form-group">
                            <input type="text" name="bgb_designation" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Last unit</label>
                        <div class="form-group">
                            <input type="text" name="last_unit" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Type <span class="req">*</span></label>
                        <div class="form-group">
                            <select name="type" class="form-control" required>
                                <option value="">Select Type</option>
                                <?php foreach (config_item('type') as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Student Photo <span class="req"></span> <small>(Image Max Size 1 Mb)</small></label>
                        <div class="form-group">
                            <input id="input-test"  type="file"  name="photo" class="form-control file" data-show-preview="true" data-show-upload="false"  data-show-remove="false">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">&nbsp;</label>
                        <div class="form-group">
                            <input type="submit" value="Save" name="student_submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
               
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="panel-footer">&nbsp;</div>
    </div>
</div>
<script>
    var class_name = document.querySelector('#class_name');
    if(class_name){
        class_name.addEventListener('change', ()=>{
            console.log(class_name.value);
        });
    }
</script>