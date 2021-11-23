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
                <form action="#" method="POST">
                    <fieldset>
                        <legend>Personal Information</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Student (বাংলায়)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="name_bn" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Student (in English Uppercase Word)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Birth Card No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="brithday_no" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">*</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="birthday">
                                        <input type="text" name="date[birthday]" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Place of Birth<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="place_of_birth" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Gender<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="gender" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Nationality<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="nationality" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="bangladeshi">Bangladeshi</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Religion<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="religion" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="islam">Islam</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Study Class<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="study_class" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="one">One</option>
                                        <option value="two">Two</option>
                                        <option value="three">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Class Roll Number<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="class_roll" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Marital Status<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="marital_status" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Disability<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="disability" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Blood Group<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="blood_group" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <?php foreach(config_item('blood_group') as $value){ ?>
                                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Small Ethnic Group<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="ethnic_group" class="form-control selectpicker" data-live-search="true">
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
                                <label class="control-label">Name (in English)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (বাংলায়)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_name_bn" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_nid_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">*</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="mother_birthday">
                                        <input type="text" name="date[mother_birthday]" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_bithday_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_mobile_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Occupation<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="mother_occupation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Father information (According to NID)</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (in English)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name (বাংলায়)<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_name_bn" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">NID No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_nid_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth<span class="req">*</span></label>
                                <div class="form-group">
                                    <div class="input-group date" id="father_birthday">
                                        <input type="text" name="date[father_birthday]" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Date Of Birth No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_bithday_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_mobile_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Occupation<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_occupation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Student Address</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="display: inline-block; font-weight: bold;">Present Address</h4>
                                <hr style="margin-top: 0;">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Division<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">District<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Upazila/Thana<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">City Corporation / Municipality<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Union<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Word No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_occupation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="display: inline-block; font-weight: bold;">Permanent Address</h4>
                                <input type="checkbox" id="permanent_address"> <label for="permanent_address">Same as Present Address</label>
                                <hr style="margin-top: 0;">
                            </div>
                                
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Division<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">District<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Upazila/Thana<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">City Corporation / Municipality<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Union<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensingh">Mymensingh</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Word No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_occupation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                        
                    <fieldset>
                        <legend>Guardian (If Both Parents Die)</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian Name<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian NID No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="guardian_nid_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Mobile No<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="father_mobile_no" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Guardian Occupation<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="Guardian_occupation" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Relationship with Guardian<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[ethnic_group]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="grandpa">Grandpa</option>
                                        <option value="grandma">Grandma</option>
                                        <option value="brother">Brother</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Information about student learning</legend>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student Name<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="student_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Student ID<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="student_id" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Name of Educational Institution<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="institution_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Institution Address<span class="req">*</span></label>
                                <div class="form-group">
                                    <input type="text" name="institution_address" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label class="control-label">Shift<span class="req">*</span></label>
                                <div class="form-group">
                                    <select name="search[shift]" class="form-control selectpicker" data-live-search="true">
                                        <option value="">&nbsp;</option>
                                        <option value="morning">Morning</option>
                                        <option value="day">Day</option>
                                        <option value="evening">Evening</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
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
</script>
