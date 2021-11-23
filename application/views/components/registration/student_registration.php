<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
<style>
    fieldset {
        border: 1px solid #ccc;
        padding: 10px 15px 5px;
        margin-bottom: 25px;
    }
    fieldset legend {
        display: inline-block;
        font-size: 20px;
        border: none;
        margin: 0;
        width: auto;
        color: #00A8FF;
        font-weight: bold;
    }
    .part {
        text-decoration: underline;
        margin-top: 0;
        margin-bottom: 0;
    }
    .table input[type="text"] {
        outline: none;
        width: 100%;
        border: none;
    }
    .table input[type="radio"] {
        
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                   <h1>Student Registration</h1>
                </div>
            </div>
            <div class="panel-body">
                <?php echo $this->session->flashdata('confirmation');?>
                <form action="<?php echo site_url('registration/registration/registered'); ?>" enctype="multipart/form-data" method="POST">
                    <h3 class="text-center part">[ "KA" Part ]</h3>
                    <fieldset>
                        <legend>Personal Information</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">EIIN No.<span class="req"></span></label>
                                <div class="form-group">
                                    <input type="text" name="student_eiin" ng-model="eiin" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Student (বাংলায়)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="name_bn" ng-model="name_bn" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Student (in English Uppercase Word)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="name_en" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Birth Card No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="brith_card_no" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="birthday">
                                        <input type="text" name="dob" class="form-control" >
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Place of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="birth_place" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Gender<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="gender" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('gender') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Nationality<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="nationality" class="form-control selectpicker" data-live-search="true" required>
                                        <option value="">&nbsp;</option>
                                        <option value="bangladeshi">Bangladeshi</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Religion<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="religion" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('religion') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Class<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="study_class" class="form-control selectpicker" data-live-search="true" required>
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('classes') as $key => $value){ ?>
                                        <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Section<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="study_section" class="form-control selectpicker" data-live-search="true" required>
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('section') as $value){ ?>
                                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Group<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="study_group" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('group') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Class Roll<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="class_roll" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Marital Status<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="marital_status" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Disability<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="disability" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Blood Group<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="blood_group" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('blood_group') as $value){ ?>
                                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Small Ethnic Group<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="ethnic_group" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Mother information (According to NID)</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (in English)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_name_en" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (বাংলায়)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_name_bn" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_nid" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="mother_dob">
                                        <input type="text" name="mother_dob" class="form-control" >
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_birth_no" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_mobile" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Occupation<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_profession" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mother Death Year (If Death)</label>
                                <div class="form-group">
                                    <input type="text" name="mother_death_year" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Father information (According to NID)</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (in English)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_name_en" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (বাংলায়)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_name_bn" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_nid" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="father_birthday">
                                        <input type="text" name="father_dob" class="form-control" >
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_birth_no" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_mobile" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Occupation<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_profession" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Father Death Year (If Death)</label>
                                <div class="form-group">
                                    <input type="text" name="father_death_year" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Present Address</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Division<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="present_division" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($divisions as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">District<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="present_district" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($districts as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Upazila/Thana<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="present_upazila" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($upazilas as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Pourashava<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="present_pourashava" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach($pourashava as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">City Corporation<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="present_city_corporation" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach($city_corporation as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Union <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="present_union" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($unions as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Word No</label>
                                <div class="form-group">
                                    <input type="text" name="present_word_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mouza</label>
                                <div class="form-group">
                                    <input type="text" name="present_mouza" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Village</label>
                                <div class="form-group">
                                    <input type="text" name="present_village" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Holding No</label>
                                <div class="form-group">
                                    <input type="text" name="present_holding_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Office</label>
                                <div class="form-group">
                                    <input type="text" name="present_post_office" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Code</label>
                                <div class="form-group">
                                    <input type="text" name="present_post_code" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>
                            Permanent Address
                            <!--<small>
                                <input type="checkbox" id="permanent_address"> 
                                <label for="permanent_address">Same as Present Address</label>
                            </small>-->
                        </legend>
                            
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Division<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="permanent_division" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($divisions as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">District<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="permanent_district" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($districts as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Upazila/Thana<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="permanent_upazila" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($upazilas as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Pourashava<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="permanent_pourashava" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach($pourashava as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">City Corporation<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="permanent_city_corporation" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach($city_corporation as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Union <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="permanent_union" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($unions as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Word No</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_word_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mouza</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_mouza" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Village</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_village" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Holding No</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_holding_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Office</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_post_office" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Code</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_post_code" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                        
                    <fieldset>
                        <legend>Guardian (If Both Parents Die)</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian Name<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian NID No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_nid" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_mobile" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian Occupation<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_occupation" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Relationship with Guardian<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="guardian_relation" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="grand_father">Grand Father</option>
                                        <option value="grand_mother">Grand Mother</option>
                                        <option value="brother">Brother</option>
                                        <option value="sister">Sister</option>
                                        <option value="uncle">Uncle</option>
                                        <option value="aunty">Aunty</option>
                                        <option value="cousin">Cousin</option>
                                        <option value="legal">Legal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    
                    <fieldset>
                        <legend>Others</legend>
                        <p style="cursor: pointer;">
                            <input type="checkbox" name="guardian_correction" id="guardian_correction" required>
                            <label for="guardian_correction" style="cursor: pointer;">
                                The information given in this information table is correct and accurate as far as I know.
                            </label>
                        </p>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Signature of Father/Mother/Guardian</label>
                                <div class="form-group">
                                    <input type="file" name="guardian_sign" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Father/Mother/Guardian Name</label>
                                <div class="form-group">
                                    <input type="text" name="guardian_sign_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="guardian_sign_date">
                                        <input type="text" name="guardian_sign_date" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student ID <span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="student_id" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student UID <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="student_uid" class="form-control" >
                                </div>
                            </div>
                            <!--<div class="col-md-4 col-sm-6">
                                <label class="control-label">OTP Code <span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="otp" class="form-control" required>
                                </div>
                            </div>-->
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student Name <span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" value="{{ name_bn }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">EIIN No. <span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" value="{{ eiin }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    
                    <h3 class="text-center part">[ "KHA" Part ]</h3>
                    
                    <fieldset>
                        <legend>Institution Address</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Educational Institute <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="institute_name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Division <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="institute_division" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($divisions as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">District <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="institute_district" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($districts as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Upazila/Thana <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="institute_upazila" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($upazilas as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Pourashava <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="institute_pourashava" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach($pourashava as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">City Corporation <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="institute_city_corporation" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach($city_corporation as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                                
                                
                    <fieldset>
                        <legend>Information about studying Institution</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Class</label>
                                <div class="form-group">
                                    <select name="studying_class" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('classes') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Section</label>
                                <div class="form-group">
                                    <select name="studying_section" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('section') as $value){ ?>
                                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Shift</label>
                                <div class="form-group">
                                    <select name="studying_shift" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('shift') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Version</label>
                                <div class="form-group">
                                    <select name="studying_version" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('version') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Group</label>
                                <div class="form-group">
                                    <select name="studying_group" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('group') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Roll</label>
                                <div class="form-group">
                                    <input type="text" name="studying_roll" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Registration No</label>
                                <div class="form-group">
                                    <input type="text" name="studying_regi_no" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">First Admission Class in Present Institution</label>
                                <div class="form-group">
                                    <input type="text" name="studying_first_class" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Admission Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="admission_date">
                                        <input type="text" name="studying_admission_date" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Stipend Received</label>
                                <div class="form-group">
                                    <select name="studying_stipend" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Scholarship Received</label>
                                <div class="form-group">
                                    <select name="studying_scholarship" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Other Scholarship Received</label>
                                <div class="form-group">
                                    <select name="studying_other_scholarship" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Transfer In</label>
                                <div class="form-group">
                                    <select name="studying_transfer_in" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Repeater</label>
                                <div class="form-group">
                                    <select name="studying_repeater" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Previous Class Test Results</legend>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name Of Class Exam</th>
                                    <th>Roll No</th>
                                    <th>Name of Educational Institution</th>
                                    <th>EIIN</th>
                                    <th>Board</th>
                                    <th>GPA</th>
                                    <th>Exam Year</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="psc">
                                        PSC/Equivalent
                                    </td>
                                    <td><input type="text" name="psc[roll]"></td>
                                    <td><input type="text" name="psc[institution]"></td>
                                    <td><input type="text" name="psc[eiin]"></td>
                                    <td><input type="text" name="psc[board]"></td>
                                    <td><input type="text" name="psc[gpa]"></td>
                                    <td><input type="text" name="psc[exam_year]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="six">
                                        Six
                                    </td>
                                    <td><input type="text" name="six[roll]"></td>
                                    <td><input type="text" name="six[institution]"></td>
                                    <td><input type="text" name="six[eiin]"></td>
                                    <td><input type="text" name="six[board]"></td>
                                    <td><input type="text" name="six[gpa]"></td>
                                    <td><input type="text" name="six[exam_year]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="seven">
                                        Seven
                                    </td>
                                    <td><input type="text" name="seven[roll]"></td>
                                    <td><input type="text" name="seven[institution]"></td>
                                    <td><input type="text" name="seven[eiin]"></td>
                                    <td><input type="text" name="seven[board]"></td>
                                    <td><input type="text" name="seven[gpa]"></td>
                                    <td><input type="text" name="seven[exam_year]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="jsc">
                                        JSC/Equivalent
                                    </td>
                                    <td><input type="text" name="jsc[roll]"></td>
                                    <td><input type="text" name="jsc[institution]"></td>
                                    <td><input type="text" name="jsc[eiin]"></td>
                                    <td><input type="text" name="jsc[board]"></td>
                                    <td><input type="text" name="jsc[gpa]"></td>
                                    <td><input type="text" name="jsc[exam_year]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="nine">
                                        Nine
                                    </td>
                                    <td><input type="text" name="nine[roll]"></td>
                                    <td><input type="text" name="nine[institution]"></td>
                                    <td><input type="text" name="nine[eiin]"></td>
                                    <td><input type="text" name="nine[board]"></td>
                                    <td><input type="text" name="nine[gpa]"></td>
                                    <td><input type="text" name="nine[exam_year]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="ssc">
                                        SSC/Equivalent
                                    </td>
                                    <td><input type="text" name="ssc[roll]"></td>
                                    <td><input type="text" name="ssc[institution]"></td>
                                    <td><input type="text" name="ssc[eiin]"></td>
                                    <td><input type="text" name="ssc[board]"></td>
                                    <td><input type="text" name="ssc[gpa]"></td>
                                    <td><input type="text" name="ssc[exam_year]"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="eleven">
                                        Eleven
                                    </td>
                                    <td><input type="text" name="eleven[roll]"></td>
                                    <td><input type="text" name="eleven[institution]"></td>
                                    <td><input type="text" name="eleven[eiin]"></td>
                                    <td><input type="text" name="eleven[board]"></td>
                                    <td><input type="text" name="eleven[gpa]"></td>
                                    <td><input type="text" name="eleven[exam_year]"></td>
                                </tr>
                            </table>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Subjective Results (Annual Examination Results)</legend>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name Of Class Exam</th>
                                    <th>Selected Subject</th>
                                    <th>Subject Name</th>
                                    <th>Get Number</th>
                                    <th>Get Point</th>
                                </tr>
                                <tr>
                                    <td rowspan="14">
                                        <label for="subjective_psc">
                                            <input type="radio" id="subjective_psc" name="subjective" value="psc">
                                            PSC/Equivalent
                                        </label><br>
                                        <label for="subjective_six">
                                            <input type="radio" id="subjective_six" name="subjective" value="six">
                                            Six
                                        </label><br>
                                        <label for="subjective_seven">
                                            <input type="radio" id="subjective_seven" name="subjective" value="seven">
                                            Seven
                                        </label><br>
                                        <label for="subjective_jsc">
                                            <input type="radio" id="subjective_jsc" name="subjective" value="jsc">
                                            JSC/Equivalent
                                        </label><br>
                                        <label for="subjective_nine">
                                            <input type="radio" id="subjective_nine" name="subjective" value="nine">
                                            Nine
                                        </label><br>
                                        <label for="subjective_ssc">
                                            <input type="radio" id="subjective_ssc" name="subjective" value="ssc">
                                            SSC/Equivalent
                                        </label><br>
                                        <label for="subjective_eleven">
                                            <input type="radio" id="subjective_eleven" name="subjective" value="eleven">
                                            Eleven
                                        </label>
                                    </td>
                                    <td rowspan="9">
                                        Compulsory Subject
                                    </td>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td rowspan="4">
                                        <div class="radio">
                                            <label><input type="checkbox" name="subjective_type" checked>Optional Subject</label>
                                        </div>
                                    </td>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]"></td>
                                    <td><input type="text" name="number[]"></td>
                                    <td><input type="text" name="point[]"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Co-Curricular Activities<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="co_curricular_activities[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="Scout">Scout - 1</option>
                                        <option value="Girls_in_Scout2">Girls Guide - 2</option>
                                        <option value="Girls_in_Scout3">Girls in Scout - 3</option>
                                        <option value="BNCC">BNCC - 4</option>
                                        <option value="Red_Crescent">Red Crescent - 5</option>
                                        <option value="Student_Cabinet">Student Cabinet - 6</option>
                                        <option value="Healthcare">Healthcare - 7</option>
                                        <option value="Counseling_Services">Counseling Services - 8</option>
                                        <option value="Annual_Sports">Annual Sports - 9</option>
                                        <option value="Annual_Culture">Annual Culture - 10</option>
                                        <option value="Football">Football - 11</option>
                                        <option value="Cricket">Cricket - 12</option>
                                        <option value="Volleyball">Volleyball - 13</option>
                                        <option value="Kabadi">Kabadi - 14</option>
                                        <option value="Handball">Handball - 15</option>
                                        <option value="Indoor_Games">Indoor_Games - 16</option>
                                        <option value="Science_Fair">Science Fair - 17</option>
                                        <option value="Plantation">Plantation - 18</option>
                                        <option value="Voluntary_Blood_Donation">Voluntary Blood Donation - 19</option>
                                        <option value="Signature_Campaign">Signature Campaign - 20</option>
                                        <option value="Debate">Debate - 21</option>
                                        <option value="Hamd_Naat">Hamd Naat - 22</option>
                                        <option value="Kerat">Kerat - 23</option>
                                        <option value="Azan">Azan - 24</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Hobby<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="hobby[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true" >
                                        <option value="Agricultural_Work">Agricultural Work - 1</option>
                                        <option value="Reading_Books">Reading Books - 2</option>
                                        <option value="Painting">Painting - 3</option>
                                        <option value="Writing_Poems_or_Stories">Writing Poems or Stories - 4</option>
                                        <option value="Recitation">Recitation - 5</option>
                                        <option value="Dance">Dance - 6</option>
                                        <option value="Music">Music - 7</option>
                                        <option value="Composition">Composition - 8</option>
                                        <option value="Gardening">Gardening - 9</option>
                                        <option value="Public_Service">Public Service - 10</option>
                                        <option value="Acting">Acting - 11</option>
                                        <option value="Riding">Riding - 12</option>
                                        <option value="Ridin">Ridin - 13</option>
                                        <option value="Travel">Travel - 14</option>
                                        <option value="Swimming">Swimming - 15</option>
                                        <option value="Others">Others - 16</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student Category<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="student_type" class="form-control selectpicker" data-live-search="true" >
                                        <option value="Employee">Employee - 1</option>
                                        <option value="Children_Landless_Guardians">Children of Landless Guardians - 2</option>
                                        <option value="Muktijoddha_pets_grandchildren">Muktijoddha Pets/Grandchildren - 3</option>
                                        <option value="Orphans">Orphans - 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Participation</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Literature and Culture<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="participate_culture[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International">International - 1</option>
                                        <option value="National">National - 2</option>
                                        <option value="Departmental">Departmental - 3</option>
                                        <option value="At_the_National_Level">At the National Level - 4</option>
                                        <option value="At_the_upazila_level">At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution">Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution">Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Sports<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="participate_sports[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International">International - 1</option>
                                        <option value="National">National - 2</option>
                                        <option value="Departmental">Departmental - 3</option>
                                        <option value="At_the_National_Level">At the National Level - 4</option>
                                        <option value="At_the_upazila_level">At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution">Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution">Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Creative and Honest<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="participate_creative[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International">International - 1</option>
                                        <option value="National">National - 2</option>
                                        <option value="Departmental">Departmental - 3</option>
                                        <option value="At_the_National_Level">At the National Level - 4</option>
                                        <option value="At_the_upazila_level">At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution">Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution">Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Rewards/Achievement</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Literature and Culture<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="achievement_culture[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true" >
                                        <option value="International">International - 1</option>
                                        <option value="National">National - 2</option>
                                        <option value="Departmental">Departmental - 3</option>
                                        <option value="At_the_National_Level">At the National Level - 4</option>
                                        <option value="At_the_upazila_level">At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution">Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution">Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Sports<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="achievement_sports[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International">International - 1</option>
                                        <option value="National">National - 2</option>
                                        <option value="Departmental">Departmental - 3</option>
                                        <option value="At_the_National_Level">At the National Level - 4</option>
                                        <option value="At_the_upazila_level">At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution">Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution">Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Creative and Honest<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="achievement_creative[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true" >
                                        <option value="International">International - 1</option>
                                        <option value="National">National - 2</option>
                                        <option value="Departmental">Departmental - 3</option>
                                        <option value="At_the_National_Level">At the National Level - 4</option>
                                        <option value="At_the_upazila_level">At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution">Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution">Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Student Signature & Photo</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student Photo <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="file" name="student_photo" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Signature</label>
                                <div class="form-group">
                                    <input type="file" name="student_sign" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="student_sign_date">
                                        <input type="text" name="student_sign_date" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Class Teacher Information</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Sign</label>
                                <div class="form-group">
                                    <input type="file" name="class_teacher_sign" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name</label>
                                <div class="form-group">
                                    <input type="text" name="class_teacher_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="class_teacher_sign_date">
                                        <input type="text" name="class_teacher_sign_date" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile</label>
                                <div class="form-group">
                                    <input type="text" name="class_teacher_mobile" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID</label>
                                <div class="form-group">
                                    <input type="text" name="class_teacher_nid" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Testimonial</legend>
                        <p class="text-center" style="cursor: pointer;">
                            <input type="checkbox" name="correction" id="correction">
                            <label for="correction" style="cursor: pointer;">
                                The information given in this information table is correct and accurate as far as I know.
                            </label>
                        </p>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Signature of the Head of the Institution</label>
                                <div class="form-group">
                                    <input type="file" name="principal_sign" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name</label>
                                <div class="form-group">
                                    <input type="text" name="principal_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="principal_sign_date">
                                        <input type="text" name="principal_sign_date" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile</label>
                                <div class="form-group">
                                    <input type="text" name="principal_mobile" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID</label>
                                <div class="form-group">
                                    <input type="text" name="principal_nid" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <div class="btn-group pull-right">
                        <input type="submit" class="btn btn-success" name="save" value="Save" >
                    </div>
                </form>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    $('#birthday').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#mother_birthday').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#father_birthday').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#guardian_sign_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#admission_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#testimonial_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#student_sign_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#principal_sign_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#class_teacher_sign_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
</script>