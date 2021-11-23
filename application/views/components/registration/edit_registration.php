<?php $previous_class = get_result('previous_class',array('student_id' => $result[0]->student_id)); ?>
<?php $subjective_result = json_decode($result[0]->subjective_result,true); ?>
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
                   <h1>Edit Registration</h1>
                </div>
            </div>
            <div class="panel-body">
                <?php echo $this->session->flashdata('confirmation');?>
                <form action="<?php echo site_url('registration/registration/edit_registered/'.$result[0]->id); ?>" enctype="multipart/form-data" method="POST">

                    <h3 class="text-center part">[ "KA" Part ]</h3>
                    <fieldset>
                        <legend>Personal Information</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">EIIN No.<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="student_eiin" ng-value="eiin" ng-init="eiin='<?php echo $result[0]->eiin; ?>'" ng-model="eiin" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Student (বাংলায়)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="name_bn" ng-value="name_bn" ng-init="name_bn='<?php echo $result[0]->name_bn; ?>'" ng-model="name_bn" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Student (in English Uppercase Word)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="name_en" value="<?php echo $result[0]->name_en; ?>" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Birth Card No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="brith_card_no" value="<?php echo $result[0]->name_en; ?>" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="birthday">
                                        <input type="text" name="dob" value="<?php echo $result[0]->dob; ?>" class="form-control" >
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Place of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="birth_place" value="<?php echo $result[0]->birth_place; ?>" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Gender<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="gender" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('gender') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>" <?php if($result[0]->gender == $key){ echo "selected"; }; ?>><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Nationality<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="nationality" class="form-control selectpicker" data-live-search="true" required>
                                        <option value="">&nbsp;</option>
                                        <option value="bangladeshi" <?php if($result[0]->nationality == "bangladeshi"){ echo "selected"; }; ?>>Bangladeshi</option>
                                        <option value="others" <?php if($result[0]->nationality == "others"){ echo "selected"; }; ?>>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Religion<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="religion" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('religion') as $key => $value){ ?>
                                        <option value="<?php echo $key; ?>" <?php if($result[0]->religion == $key){ echo "selected"; }; ?>><?php echo $value; ?></option>
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
                                        <option value="<?php echo $key;?>" <?php if($result[0]->study_class == $key){ echo "selected"; }; ?>><?php echo $value;?></option>
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
                                        <option value="<?php echo $value; ?>" <?php if($result[0]->study_section == $value){ echo "selected"; }; ?> ><?php echo $value; ?></option>
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
                                        <option value="<?php echo $key; ?>" <?php if($result[0]->study_group == $key){ echo "selected"; }; ?> ><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Class Roll<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="class_roll" value="<?php echo $result[0]->class_roll; ?>" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Marital Status<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="marital_status" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="married" <?php if($result[0]->marital_status == 'married'){ echo "selected"; }; ?> >Married</option>
                                        <option value="unmarried" <?php if($result[0]->marital_status == 'unmarried'){ echo "selected"; }; ?> >Unmarried</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Disability<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="disability" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="yes" <?php if($result[0]->disability == 'yes'){ echo "selected"; }; ?> >Yes</option>
                                        <option value="no" <?php if($result[0]->disability == 'no'){ echo "selected"; }; ?> >No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Blood Group<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="blood_group" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('blood_group') as $value){ ?>
                                        <option value="<?php echo $value; ?>" <?php if($result[0]->blood_group == $value){ echo "selected"; }; ?> ><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Small Ethnic Group<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="ethnic_group" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="yes" <?php if($result[0]->small_ethnic_group == 'yes'){ echo "selected"; }; ?> >Yes</option>
                                        <option value="no" <?php if($result[0]->small_ethnic_group == 'no'){ echo "selected"; }; ?> >No</option>
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
                                    <input type="text" name="mother_name_en" value="<?php echo $result[0]->mother_name_en; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (বাংলায়)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_name_bn" value="<?php echo $result[0]->mother_name_bn; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_nid" value="<?php echo $result[0]->mother_nid; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="mother_dob" value="<?php echo $result[0]->mother_dob; ?>">
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
                                    <input type="text" name="mother_birth_no" value="<?php echo $result[0]->mother_birth_no; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_mobile" value="<?php echo $result[0]->mother_mobile; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Occupation<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_profession" value="<?php echo $result[0]->mother_profession; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mother Death Year (If Death)</label>
                                <div class="form-group">
                                    <input type="text" name="mother_death_year" value="<?php echo $result[0]->mother_death_year; ?>" class="form-control">
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
                                    <input type="text" name="father_name_en" value="<?php echo $result[0]->father_name_en; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (বাংলায়)<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_name_bn" value="<?php echo $result[0]->father_name_bn; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_nid" value="<?php echo $result[0]->father_nid; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="father_dob" value="<?php echo $result[0]->father_dob; ?>">
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
                                    <input type="text" name="father_birth_no" class="form-control" value="<?php echo $result[0]->father_birth_no; ?>" >
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
                                    <input type="text" name="father_profession" class="form-control" value="<?php echo $result[0]->father_profession; ?>" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Father Death Year (If Death)</label>
                                <div class="form-group">
                                    <input type="text" name="father_death_year" class="form-control" value="<?php echo $result[0]->father_death_year; ?>">
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->present_division == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->present_district == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->present_upazila == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->present_pourashava == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->present_city_corporation == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->present_union == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Word No</label>
                                <div class="form-group">
                                    <input type="text" name="present_word_no" value="<?php echo $result[0]->present_word_no; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mouza</label>
                                <div class="form-group">
                                    <input type="text" name="present_mouza" value="<?php echo $result[0]->present_mouza; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Village</label>
                                <div class="form-group">
                                    <input type="text" name="present_village" value="<?php echo $result[0]->present_village; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Holding No</label>
                                <div class="form-group">
                                    <input type="text" name="present_holding_no" value="<?php echo $result[0]->present_holding_no; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Office</label>
                                <div class="form-group">
                                    <input type="text" name="present_post_office" value="<?php echo $result[0]->present_post_office; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Code</label>
                                <div class="form-group">
                                    <input type="text" name="present_post_code" value="<?php echo $result[0]->present_post_code; ?>" class="form-control">
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->permanent_division == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->permanent_district == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->permanent_upazila == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->permanent_pourashava == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->permanent_city_corporation == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->permanent_union == $value->name){ echo "selected"; }; ?> ><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Word No</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_word_no" value="<?php echo $result[0]->permanent_word_no; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mouza</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_mouza" value="<?php echo $result[0]->permanent_mouza; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Village</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_village" value="<?php echo $result[0]->permanent_village; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Holding No</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_holding_no" value="<?php echo $result[0]->permanent_holding_no; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Office</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_post_office" value="<?php echo $result[0]->permanent_post_office; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Post Code</label>
                                <div class="form-group">
                                    <input type="text" name="permanent_post_code" value="<?php echo $result[0]->permanent_post_code; ?>" class="form-control">
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
                                    <input type="text" name="guardian_name" value="<?php echo $result[0]->guardian_name; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian NID No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_nid" value="<?php echo $result[0]->guardian_nid; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_mobile" value="<?php echo $result[0]->guardian_mobile; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian Occupation<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_occupation" value="<?php echo $result[0]->guardian_occupation; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Relationship with Guardian<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="guardian_relation" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <option value="grand_father" <?php if($result[0]->guardian_relation == "grand_father"){ echo "selected"; } ?> >Grand Father</option>
                                        <option value="grand_mother" <?php if($result[0]->guardian_relation == "grand_mother"){ echo "selected"; } ?> >Grand Mother</option>
                                        <option value="brother" <?php if($result[0]->guardian_relation == "brother"){ echo "selected"; } ?> >Brother</option>
                                        <option value="sister" <?php if($result[0]->guardian_relation == "sister"){ echo "selected"; } ?> >Sister</option>
                                        <option value="uncle" <?php if($result[0]->guardian_relation == "uncle"){ echo "selected"; } ?> >Uncle</option>
                                        <option value="aunty" <?php if($result[0]->guardian_relation == "aunty"){ echo "selected"; } ?> >Aunty</option>
                                        <option value="cousin" <?php if($result[0]->guardian_relation == "cousin"){ echo "selected"; } ?> >Cousin</option>
                                        <option value="legal" <?php if($result[0]->guardian_relation == "legal"){ echo "selected"; } ?> >Legal</option>
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
                                    <input type="hidden" name="old_guardian_sign" value="<?php echo $result[0]->guardian_sign; ?>" class="form-control">
                                    <input type="file" name="guardian_sign" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Father/Mother/Guardian Name</label>
                                <div class="form-group">
                                    <input type="text" name="guardian_sign_name" value="<?php echo $result[0]->guardian_sign_name; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="guardian_sign_date">
                                        <input type="text" name="guardian_sign_date" class="form-control" value="<?php echo $result[0]->guardian_sign_date; ?>">
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
                                    <input type="text" name="student_id" value="<?php echo $result[0]->student_id; ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student UID <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <input type="text" name="student_uid" value="<?php echo $result[0]->student_uid; ?>" class="form-control" >
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
                                    <input type="text" name="institute_name" value="<?php echo $result[0]->institute_name; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Division <span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="institute_division" class="form-control selectpicker" data-live-search="true" >
                                        <option value="">&nbsp;</option>
                                        <?php foreach($divisions as $key => $value){ ?>
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->institute_division == $value->name){ echo "selected"; } ?>><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->institute_district == $value->name){ echo "selected"; } ?>><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->institute_upazila == $value->name){ echo "selected"; } ?>><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->institute_pourashava == $value->name){ echo "selected"; } ?>><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $value->name; ?>" <?php if($result[0]->institute_city_corporation == $value->name){ echo "selected"; } ?>><?php echo $value->name; ?></option>
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
                                        <option value="<?php echo $key; ?>" <?php if($result[0]->studying_class == $key){ echo "selected"; } ?> ><?php echo $value; ?></option>
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
                                        <option value="<?php echo $value; ?>" <?php if($result[0]->studying_section == $value){ echo "selected"; } ?> ><?php echo $value; ?></option>
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
                                        <option value="<?php echo $key; ?>" <?php if($result[0]->studying_shift == $key){ echo "selected"; } ?> ><?php echo $value; ?></option>
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
                                        <option value="<?php echo $key; ?>" <?php if($result[0]->studying_version == $key){ echo "selected"; } ?> ><?php echo $value; ?></option>
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
                                        <option value="<?php echo $key; ?>" <?php if($result[0]->studying_group == $key){ echo "selected"; } ?> ><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Roll</label>
                                <div class="form-group">
                                    <input type="text" name="studying_roll" value="<?php echo $result[0]->studying_roll; ?>" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Registration No</label>
                                <div class="form-group">
                                    <input type="text" name="studying_regi_no" value="<?php echo $result[0]->studying_regi_no; ?>" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">First Admission Class in Present Institution</label>
                                <div class="form-group">
                                    <input type="text" name="studying_first_class" value="<?php echo $result[0]->studying_first_class; ?>" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Admission Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="admission_date">
                                        <input type="text" name="studying_admission_date" value="<?php echo $result[0]->studying_admission_date; ?>" class="form-control">
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
                                        <option value="yes" <?php if($result[0]->studying_stipend == 'yes'){ echo "selected"; } ?> >Yes</option>
                                        <option value="no" <?php if($result[0]->studying_stipend == 'no'){ echo "selected"; } ?> >No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Scholarship Received</label>
                                <div class="form-group">
                                    <select name="studying_scholarship" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes" <?php if($result[0]->studying_scholarship == 'yes'){ echo "selected"; } ?> >Yes</option>
                                        <option value="no" <?php if($result[0]->studying_scholarship == 'no'){ echo "selected"; } ?> >No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Other Scholarship Received</label>
                                <div class="form-group">
                                    <select name="studying_other_scholarship" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes" <?php if($result[0]->studying_other_scholarship == 'yes'){ echo "selected"; } ?> >Yes</option>
                                        <option value="no" <?php if($result[0]->studying_other_scholarship == 'no'){ echo "selected"; } ?> >No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Transfer In</label>
                                <div class="form-group">
                                    <select name="studying_transfer_in" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes" <?php if($result[0]->studying_transfer_in == 'yes'){ echo "selected"; } ?> >Yes</option>
                                        <option value="no" <?php if($result[0]->studying_transfer_in == 'no'){ echo "selected"; } ?> >No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Repeater</label>
                                <div class="form-group">
                                    <select name="studying_repeater" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes" <?php if($result[0]->studying_repeater == 'yes'){ echo "selected"; } ?> >Yes</option>
                                        <option value="no" <?php if($result[0]->studying_repeater == 'no'){ echo "selected"; } ?> >No</option>
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
                                <?php foreach($previous_class as $key => $value) { ?>
                                <tr>
                                    <td>
                                        <input type="hidden" name="previous_class" value="<?php echo $value->class; ?>">
                                        <?php echo strtoupper($value->class); ?> <?php if($value->class=="psc" || $value->class=="ssc") { echo "/ Equivalent"; } ?>
                                        
                                        <?php /*if($value->class="psc") { echo "PSC/Equivalent"; } ?>
                                        <?php if($value->class="six") { echo "Six"; } ?>
                                        <?php if($value->class="seven") { echo "Seven"; } ?>
                                        <?php if($value->class="jsc") { echo "JSC/Equivalent"; } ?>
                                        <?php if($value->class="nine") { echo "Nine"; } ?>
                                        <?php if($value->class="ssc") { echo "SSC/Equivalent"; } ?>
                                        <?php if($value->class="eleven") { echo "Eleven"; } */ ?>
                                    </td>
                                    <td>
                                        <input type="text" name="psc[roll]" value="<?php echo $value->roll; ?>">
                                    </td>
                                    <td>
                                        <input type="text" name="psc[institution]" value="<?php echo $value->institution; ?>">
                                    </td>
                                    <td>
                                        <input type="text" name="psc[eiin]" value="<?php echo $value->eiin; ?>">
                                    </td>
                                    <td>
                                        <input type="text" name="psc[board]" value="<?php echo $value->board; ?>">
                                    </td>
                                    <td>
                                        <input type="text" name="psc[gpa]" value="<?php echo $value->gpa; ?>">
                                    </td>
                                    <td>
                                        <input type="text" name="psc[exam_year]" value="<?php echo $value->exam_year; ?>">
                                    </td>
                                </tr>
                                <?php } ?>
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
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[0]['subject']; ?>" ></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[0]['number']; ?>" ></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[0]['point']; ?>" ></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[1]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[1]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[1]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[2]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" name="<?php $subjective_result[2]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[2]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[3]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[3]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[3]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[4]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[4]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[4]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[5]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[5]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[5]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[6]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[6]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[6]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[7]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[7]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[7]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[8]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[8]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[8]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td rowspan="4">
                                        <div class="radio">
                                            <label><input type="checkbox" name="subjective_type" checked>Optional Subject</label>
                                        </div>
                                    </td>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[9]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[9]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[9]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[10]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[10]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[10]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[11]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[11]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[11]['point']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="subject_name[]" value="<?php $subjective_result[12]['subject']; ?>"></td>
                                    <td><input type="text" name="number[]" value="<?php $subjective_result[12]['number']; ?>"></td>
                                    <td><input type="text" name="point[]" value="<?php $subjective_result[12]['point']; ?>"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Co-Curricular Activities<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                   <?php $achievement_creative = json_decode($result[0]->co_curricular_activities,true); ?>
                                    <select name="co_curricular_activities[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="Scout" <?php get_select($achievement_creative, 'Scout'); ?>>Scout - 1</option>
                                        <option value="Girls_in_Scout2" <?php get_select($achievement_creative, 'Girls_in_Scout2'); ?>>Girls Guide - 2</option>
                                        <option value="Girls_in_Scout3" <?php get_select($achievement_creative, 'Girls_in_Scout3'); ?>>Girls in Scout - 3</option>
                                        <option value="BNCC" <?php get_select($achievement_creative, 'BNCC'); ?>>BNCC - 4</option>
                                        <option value="Red_Crescent" <?php get_select($achievement_creative, 'Red_Crescent'); ?>>Red Crescent - 5</option>
                                        <option value="Student_Cabinet" <?php get_select($achievement_creative, 'Student_Cabinet'); ?>>Student Cabinet - 6</option>
                                        <option value="Healthcare" <?php get_select($achievement_creative, 'Healthcare'); ?>>Healthcare - 7</option>
                                        <option value="Counseling_Services" <?php get_select($achievement_creative, 'Counseling_Services'); ?>>Counseling Services - 8</option>
                                        <option value="Annual_Sports" <?php get_select($achievement_creative, 'Annual_Sports'); ?>>Annual Sports - 9</option>
                                        <option value="Annual_Culture" <?php get_select($achievement_creative, 'Annual_Culture'); ?>>Annual Culture - 10</option>
                                        <option value="Football" <?php get_select($achievement_creative, 'Football'); ?>>Football - 11</option>
                                        <option value="Cricket" <?php get_select($achievement_creative, 'Cricket'); ?>>Cricket - 12</option>
                                        <option value="Volleyball" <?php get_select($achievement_creative, 'Volleyball'); ?>>Volleyball - 13</option>
                                        <option value="Kabadi" <?php get_select($achievement_creative, 'Kabadi'); ?>>Kabadi - 14</option>
                                        <option value="Handball" <?php get_select($achievement_creative, 'Handball'); ?>>Handball - 15</option>
                                        <option value="Indoor_Games" <?php get_select($achievement_creative, 'Indoor_Games'); ?>>Indoor_Games - 16</option>
                                        <option value="Science_Fair" <?php get_select($achievement_creative, 'Science_Fair'); ?>>Science Fair - 17</option>
                                        <option value="Plantation" <?php get_select($achievement_creative, 'Plantation'); ?>>Plantation - 18</option>
                                        <option value="Voluntary_Blood_Donation" <?php get_select($achievement_creative, 'Voluntary_Blood_Donation'); ?>>Voluntary Blood Donation - 19</option>
                                        <option value="Signature_Campaign" <?php get_select($achievement_creative, 'Signature_Campaign'); ?>>Signature Campaign - 20</option>
                                        <option value="Debate" <?php get_select($achievement_creative, 'Debate'); ?>>Debate - 21</option>
                                        <option value="Hamd_Naat" <?php get_select($achievement_creative, 'Hamd_Naat'); ?>>Hamd Naat - 22</option>
                                        <option value="Kerat" <?php get_select($achievement_creative, 'Kerat'); ?>>Kerat - 23</option>
                                        <option value="Azan" <?php get_select($achievement_creative, 'Azan'); ?>>Azan - 24</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Hobby<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <?php $hobby = json_decode($result[0]->hobby,true); ?>
                                    <select name="hobby[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true" >
                                        <option value="Agricultural_Work" <?php get_select($hobby, 'Agricultural_Work'); ?>>Agricultural Work - 1</option>
                                        <option value="Reading_Books" <?php get_select($hobby, 'Reading_Books'); ?>>Reading Books - 2</option>
                                        <option value="Painting" <?php get_select($hobby, 'Painting'); ?>>Painting - 3</option>
                                        <option value="Writing_Poems_or_Stories" <?php get_select($hobby, 'Writing_Poems_or_Stories'); ?>>Writing Poems or Stories - 4</option>
                                        <option value="Recitation" <?php get_select($hobby, 'Recitation'); ?>>Recitation - 5</option>
                                        <option value="Dance" <?php get_select($hobby, 'Dance'); ?>>Dance - 6</option>
                                        <option value="Music" <?php get_select($hobby, 'Music'); ?>>Music - 7</option>
                                        <option value="Composition" <?php get_select($hobby, 'Composition'); ?>>Composition - 8</option>
                                        <option value="Gardening" <?php get_select($hobby, 'Gardening'); ?>>Gardening - 9</option>
                                        <option value="Public_Service" <?php get_select($hobby, 'Public_Service'); ?>>Public Service - 10</option>
                                        <option value="Acting" <?php get_select($hobby, 'Acting'); ?>>Acting - 11</option>
                                        <option value="Riding" <?php get_select($hobby, 'Riding'); ?>>Riding - 12</option>
                                        <option value="Ridin" <?php get_select($hobby, 'Ridin'); ?>>Ridin - 13</option>
                                        <option value="Travel" <?php get_select($hobby, 'Travel'); ?>>Travel - 14</option>
                                        <option value="Swimming" <?php get_select($hobby, 'Swimming'); ?>>Swimming - 15</option>
                                        <option value="Others" <?php get_select($hobby, 'Others'); ?>>Others - 16</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student Category<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <select name="student_type" class="form-control selectpicker" data-live-search="true" >
                                        <option value="Employee" <?php if($result[0]->student_type == 'Employee'){ echo "selected"; } ?>>Employee - 1</option>
                                        <option value="Children_Landless_Guardians" <?php if($result[0]->student_type == 'Children_Landless_Guardians'){ echo "selected"; } ?>>Children of Landless Guardians - 2</option>
                                        <option value="Muktijoddha_pets_grandchildren" <?php if($result[0]->student_type == 'Muktijoddha_pets_grandchildren'){ echo "selected"; } ?>>Muktijoddha Pets/Grandchildren - 3</option>
                                        <option value="Orphans" <?php if($result[0]->student_type == 'Orphans'){ echo "selected"; } ?>>Orphans - 4</option>
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
                                    <?php $participate_culture = json_decode($result[0]->participate_culture,true); ?>
                                    <select name="participate_culture[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International" <?php get_select($participate_culture, 'International'); ?>>International - 1</option>
                                        <option value="National" <?php get_select($participate_culture, 'National'); ?>>National - 2</option>
                                        <option value="Departmental" <?php get_select($participate_culture, 'Departmental'); ?>>Departmental - 3</option>
                                        <option value="At_the_National_Level" <?php get_select($participate_culture, 'At_the_National_Level'); ?>>At the National Level - 4</option>
                                        <option value="At_the_upazila_level" <?php get_select($participate_culture, 'At_the_upazila_level'); ?>>At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution" <?php get_select($participate_culture, 'Inter_Educational_Institution'); ?>>Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution" <?php get_select($participate_culture, 'Own_Educational_Institution'); ?>>Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Sports<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <?php $participate_sports = json_decode($result[0]->participate_sports,true); ?>
                                    <select name="participate_sports[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International" <?php get_select($participate_sports, 'International'); ?>>International - 1</option>
                                        <option value="National" <?php get_select($participate_sports, 'National'); ?>>National - 2</option>
                                        <option value="Departmental" <?php get_select($participate_sports, 'Departmental'); ?>>Departmental - 3</option>
                                        <option value="At_the_National_Level" <?php get_select($participate_sports, 'At_the_National_Level'); ?>>At the National Level - 4</option>
                                        <option value="At_the_upazila_level" <?php get_select($participate_sports, 'At_the_upazila_level'); ?>>At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution" <?php get_select($participate_sports, 'Inter_Educational_Institution'); ?>>Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution" <?php get_select($participate_sports, 'Own_Educational_Institution'); ?>>Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Creative and Honest<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <?php $participate_creative = json_decode($result[0]->participate_creative,true); ?>
                                    <select name="participate_creative[]" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International" <?php get_select($participate_creative, 'International'); ?>>International - 1</option>
                                        <option value="National" <?php get_select($participate_creative, 'National'); ?>>National - 2</option>
                                        <option value="Departmental" <?php get_select($participate_creative, 'Departmental'); ?>>Departmental - 3</option>
                                        <option value="At_the_National_Level" <?php get_select($participate_creative, 'At_the_National_Level'); ?>>At the National Level - 4</option>
                                        <option value="At_the_upazila_level" <?php get_select($participate_creative, 'At_the_upazila_level'); ?>>At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution" <?php get_select($participate_creative, 'Inter_Educational_Institution'); ?>>Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution" <?php get_select($participate_creative, 'Own_Educational_Institution'); ?>>Own Educational Institution - 7</option>
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
                                    <?php $achievement_culture = json_decode($result[0]->achievement_culture,true); ?>
                                    <select name="achievement_culture" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true" >
                                        <option value="International" <?php get_select($achievement_culture, 'International'); ?>>International - 1</option>
                                        <option value="National" <?php get_select($achievement_culture, 'National'); ?>>National - 2</option>
                                        <option value="Departmental" <?php get_select($achievement_culture, 'Departmental'); ?>>Departmental - 3</option>
                                        <option value="At_the_National_Level" <?php get_select($achievement_culture, 'At_the_National_Level'); ?>>At the National Level - 4</option>
                                        <option value="At_the_upazila_level" <?php get_select($achievement_culture, 'At_the_upazila_level'); ?>>At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution" <?php get_select($achievement_culture, 'Inter_Educational_Institution'); ?>>Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution" <?php get_select($achievement_culture, 'Own_Educational_Institution'); ?>>Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Sports<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <?php $achievement_sports = json_decode($result[0]->achievement_sports,true); ?>
                                    <select name="achievement_sports" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true">
                                        <option value="International" <?php get_select($achievement_sports, 'International'); ?>>International - 1</option>
                                        <option value="National" <?php get_select($achievement_sports, 'National'); ?>>National - 2</option>
                                        <option value="Departmental" <?php get_select($achievement_sports, 'Departmental'); ?>>Departmental - 3</option>
                                        <option value="At_the_National_Level" <?php get_select($achievement_sports, 'At_the_National_Level'); ?>>At the National Level - 4</option>
                                        <option value="At_the_upazila_level" <?php get_select($achievement_sports, 'At_the_upazila_level'); ?>>At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution" <?php get_select($achievement_sports, 'Inter_Educational_Institution'); ?>>Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution" <?php get_select($achievement_sports, 'Own_Educational_Institution'); ?>>Own Educational Institution - 7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Creative and Honest<span class="req">&nbsp;</span></label>
                                <div class="form-group">
                                    <?php $achievement_creative = json_decode($result[0]->achievement_creative,true); ?>
                                    <select name="achievement_creative" class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true" >
                                        <option value="International" <?php get_select($achievement_creative, 'International'); ?>>International - 1</option>
                                        <option value="National" <?php get_select($achievement_creative, 'National'); ?>>National - 2</option>
                                        <option value="Departmental" <?php get_select($achievement_creative, 'Departmental'); ?>>Departmental - 3</option>
                                        <option value="At_the_National_Level" <?php get_select($achievement_creative, 'At_the_National_Level'); ?>>At the National Level - 4</option>
                                        <option value="At_the_upazila_level" <?php get_select($achievement_creative, 'At_the_upazila_level'); ?>>At the Upazila Level - 5</option>
                                        <option value="Inter_Educational_Institution" <?php get_select($achievement_creative, 'Inter_Educational_Institution'); ?>>Inter-Educational Institution - 6</option>
                                        <option value="Own_Educational_Institution" <?php get_select($achievement_creative, 'Own_Educational_Institution'); ?>>Own Educational Institution - 7</option>
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
                                    <input type="hidden" name="old_student_photo" value="<?php echo $result[0]->student_photo; ?>" class="form-control">
                                    <input type="file" name="student_photo" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Signature</label>
                                <div class="form-group">
                                    <input type="hidden" name="old_student_sign" value="<?php echo $result[0]->student_sign; ?>" class="form-control">
                                    <input type="file" name="student_sign" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="student_sign_date">
                                        <input type="text" name="student_sign_date" class="form-control" value="<?php $result[0]->student_sign_date; ?>">
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
                                    <input type="hidden" name="old_class_teacher_sign" value="<?php echo $result[0]->class_teacher_sign; ?>" class="form-control">
                                    <input type="file" name="class_teacher_sign" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name</label>
                                <div class="form-group">
                                    <input type="text" name="class_teacher_name" value="<?php $result[0]->class_teacher_name; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="class_teacher_sign_date">
                                        <input type="text" name="class_teacher_sign_date" value="<?php $result[0]->class_teacher_sign_date; ?>" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile</label>
                                <div class="form-group">
                                    <input type="text" name="class_teacher_mobile" value="<?php $result[0]->class_teacher_mobile; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID</label>
                                <div class="form-group">
                                    <input type="text" name="class_teacher_nid" value="<?php $result[0]->class_teacher_nid; ?>" class="form-control">
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
                                    <input type="hidden" name="old_principal_sign" value="<?php echo $result[0]->principal_sign; ?>" class="form-control">
                                    <input type="file" name="principal_sign"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name</label>
                                <div class="form-group">
                                    <input type="text" name="principal_name" value="<?php $result[0]->principal_name; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="principal_sign_date">
                                        <input type="text" name="principal_sign_date" value="<?php $result[0]->principal_sign_date; ?>" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile</label>
                                <div class="form-group">
                                    <input type="text" name="principal_mobile" value="<?php $result[0]->principal_mobile; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID</label>
                                <div class="form-group">
                                    <input type="text" name="principal_nid" value="<?php $result[0]->principal_nid; ?>"  class="form-control">
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