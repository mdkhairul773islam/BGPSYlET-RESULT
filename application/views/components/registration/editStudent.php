<style>
    .req{color: red;}
         .table > tbody > tr > td{padding: 0;vertical-align: middle;}
         .table > tbody > tr > td{padding: 0;}
         .table > tbody > tr > td input, .table > tbody > tr > td select{height: 35px !important;border: none !important;}
         .table-custome > tbody > tr > td input{width: 50%;}
         .panal-header-title h4{margin: 0;}
         .table > tbody > tr > th {background: #15749c;color: #fff;}
         .alert button{padding: 35px 20px;}
         .form-control{border-radius:0;}
         .color-size {
             color: #15749c;
             font-size: 20px;
         }
         .color {color: #15749c;}
         .file-input-new {
            display: inline-block;
            margin-top: -13px;
         }
</style>
<div class="container-fluid" ng-controller="edit_registrationCtrl">
    <div class="row">
        <?php echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Edit Student's Information</h1>
                </div>
            </div>

            <div class="panel-body">
    			<?php
    			 	$attr=array("class"=>"form-horizontal");
    				echo form_open_multipart("registration/regi_validation/update/".$student[0]->student_id,$attr);
    			?>
                <div class="form-group">
                    <!--<div class="col-md-4 col-sm-6">-->
                    <!--    <label class="control-label">Student ID </small><span class="req">*</span></label>-->
                    <!--    <input type="hidden" ng-init="student_id='<?= $student[0]->student_id; ?>'" class="form-control"  required>-->
                    <!--</div>-->
                    <input type="hidden" ng-init="student_id='<?= $student[0]->student_id; ?>'" class="form-control">
                    
                    <div class="col-md-6 col-sm-6">
                        <label class="control-label">Name of Student (in English)</small><span class="req">*</span></label>
                        <input type="text" name="name" value="<?= $student[0]->name; ?>" class="form-control"  required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label class="control-label">Name of Student (বাংলায়)</label>
                        <input type="text" name="name_bn" value="<?= $student[0]->name_bn; ?>" class="form-control" >
                    </div>
                </div>
    
                <h5 style="margin: 30px 0 0;"><strong class="color-size">FATHER INOFORMATION</strong><hr style="margin-top: 10px;"></h5>
                <div class="form-group">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Name</label>
                        <input type="text" name="father_name" value="<?= $student[0]->father_name; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Profession</label>
                        <input type="text" name="father_profession" value="<?= $student[0]->father_profession; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Workplace</label>
                        <input type="text" name="father_workplace" value="<?= $student[0]->father_workplace; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Mobile Number</label>
                        <input type="text" name="guardian_mobile" value="<?= $student[0]->guardian_mobile; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Father's Annual Income</label>
                        <input type="text" name="father_annual_income" value="<?= $student[0]->father_annual_income; ?>" class="form-control">
                    </div>
                </div>
               
                <h5 style="margin: 30px 0 0;"><strong class="color-size">MOTHER INOFORMATION</strong><hr style="margin-top: 10px;"></h5>
                <div class="form-group ">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Name</label>
                        <input type="text" name="mother_name" value="<?= $student[0]->mother_name; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Profession</label>
                        <input type="text" name="mother_profession" value="<?= $student[0]->mother_profession; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Workplace</label>
                        <input type="text" name="mother_workplace" value="<?= $student[0]->mother_workplace; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Mobile Number</label>
                        <input type="text" name="mother_mobile" value="<?= $student[0]->mother_mobile; ?>" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Mother's Annual Income </label>
                        <input type="text" name="mother_annual_income" value="<?= $student[0]->mother_annual_income; ?>" class="form-control">
                    </div>
                </div>
               
                <div class="form-group ">
                    <div class="col-md-6">
                        <label class="control-label">Present Address</label>
                        <textarea name="present_address" id="pre_addr" class="form-control" cols="30" rows="5"><?php echo $student[0]->present_address;?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Permanent Address</label>
                        <input type="checkbox" id="permanent_address" value="0"> <label for="permanent_address">Same as Present Address</label>
                        <textarea name="permanent_address" id="per_addr" class="form-control" cols="30" rows="5"><?php echo $student[0]->permanent_address;?></textarea>
                    </div>
                </div>
               
                <div class="form-group ">
                    <div class="col-md-12">
                        <label class="control-label">Name and address of local guardian (With phone number)</label>
                        <textarea name="local_guardian" class="form-control" cols="30" rows="5"><?= $student[0]->local_guardian; ?></textarea>
                    </div>
                </div>
                
                <div class="form-group ">
                    <div class="col-md-2 col-sm-3">
                        <label class="control-label">Date of Birth</label>
                        <div class="input-group date" id="datetimepicker1">
                            <input type="text" class="form-control" name="birth_date" value="<?= $student[0]->birth_date; ?>">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div> 
                    <div class="col-md-2 col-sm-3">
                        <label class="control-label">Class <span class="req">*</span></label>
                        <select name="class" class="form-control" required>
                            <option value="">Select Class</option>
                            <?php
                                foreach(config_item('classes') as $key => $value){?>
                                    <option <?php if($key==$student[0]->class){ echo "selected";}?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="col-md-2 col-sm-3">
                        <label class="control-label">Roll <span class="req">*</span></label>
                        <div class="form-group ">
                            <input type="text" name="roll" value="<?php echo $student[0]->roll; ?>" class="form-control" required>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <label class="control-label">Section<span class="req">*</span></label>
                         <select name="section" class="form-control" required>
                                <option value="">Select Section</option>
                                <?php foreach(config_item('section') as $key => $value){ ?>
                                    <option <?= ($student[0]->section==$value ? 'selected': ''); ?> value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                    </div>
                    
                    <div class="col-md-2">
                        <label class="control-label"> Group <span class="req">*</span></label>
                        <select style="margin-bottom: 10px;" name="group" class="form-control" required>
                            <option value="" selected disabled>&nbsp;</option>
                            <option <?php echo (!empty($student[0]->group) && $student[0]->group == "None") ? "selected" : "" ?> value="None">None</option>
                            <option <?php echo (!empty($student[0]->group) && $student[0]->group == "Science") ? "selected" : "" ?> value="science">Science</option>
                            <option <?php echo (!empty($student[0]->group) && $student[0]->group == "Humanities") ? "selected" : "" ?> value="humanities">Humanities</option>
                            <option <?php echo (!empty($student[0]->group) && $student[0]->group == "Business-Studies") ? "selected" : "" ?> value="business studies">Business Studies</option>
                        </select>
                    </div>
                    
                    <div class="col-md-2 col-sm-3">
                        <label class="control-label">Session <span class="req"> *</span></label>
                        <select name="session" class="form-control" required>
                            <option value="">Select Session</option>
                            <option <?= ($student[0]->session=='2019' ? 'selected' : '')?> value="2019">2019</option>
                            <option <?= ($student[0]->session=='2019-2020' ? 'selected' : '')?> value="2019-2020">2019-2020</option>
                            <option <?= ($student[0]->session=='2020' ? 'selected' : '')?> value="2020">2020</option>
                            <option <?= ($student[0]->session=='2020-2021' ? 'selected' : '')?> value="2020-2021">2020-2021</option>
                            <option <?= ($student[0]->session=='2021' ? 'selected' : '')?> value="2021">2021</option>
                            <option <?= ($student[0]->session=='2021-2022' ? 'selected' : '')?> value="2021-2022">2021-2022</option>
                            <option <?= ($student[0]->session=='2022' ? 'selected' : '')?> value="2022">2022</option>
                            <option <?= ($student[0]->session=='2022-2023' ? 'selected' : '')?> value="2022-2023">2022-2023</option>
                            <option <?= ($student[0]->session=='2023' ? 'selected' : '')?> value="2023">2023</option>
                            <option <?= ($student[0]->session=='2023-2024' ? 'selected' : '')?> value="2023-2024">2023-2024</option>
                        </select>
                    </div>

                </div>
                
                <div class="form-group ">
                    <div class="col-md-4 col-sm-6">
                        <label class="control-label">Name of the previous educational institution</label>
                        <input type="text" name="previous_educational_institution" value="<?= $student[0]->previous_educational_institution; ?>" class="form-control">
                    </div>
                </div>
               
                <h5 style="margin: 30px 0 0;"><strong class="color-size">If the father or mother of the student is working in BGB</strong><hr style="margin-top: 10px;"></h5>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Personal No</label>
                        <input type="text" name="personal_no" value="<?= $student[0]->personal_no; ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Designation</label>
                        <input type="text" name="bgb_designation" value="<?= $student[0]->bgb_designation; ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Last unit</label>
                        <input type="text" name="last_unit" value="<?= $student[0]->last_unit; ?>" class="form-control">
                    </div>
                </div>
           
                <!--div class="col-md-12 clearfix">
                  <div class="row" ng-cloak>
                     <table class="table table-bordered text-center table-custome">
                        <tr>
                           <th colspan="6" style="text-align: center;">Compulsory</th>
                           <th style="text-align: center;">Optional</th>
                        </tr>
                        <tr>
                           <td><input type="text" name="compulsory_subject_one" value="BANGLA" readonly></td>
                           <td><input type="text" name="compulsory_subject_two" value="ENGLISH" readonly></td>
                           <td><input type="text" name="compulsory_subject_three" value="ICT" readonly></td>
                           <td>
                               <select 
                                     ng-show="group == 'humanities'"
                                     name="compulsory_subject_four" 
                                     ng-model="chose3rd"
                                     ng-options="cho[0] for cho in chose_3 track by cho[0]"
                                     ng-change="getSubjectCodeFn('chose_3')"
                                     class="form-control">
                                    <option value=""  disabled>--Select Subject--</option>                                    
                                </select>
                                  
                               <input ng-if="group == 'science'" type="text" name="compulsory_subject_four" value="Physics" readonly>
                               <input ng-if="group == 'business studies'" type="text" name="compulsory_subject_four" value="Accounting" readonly>
                            </td>
                           <td>
                               
                          <select ng-show="group == 'humanities'" name="compulsory_subject_five" ng-model="chose2nd" ng-options="cho[0] for cho in chose_2 track by cho[0]" ng-change="getSubjectCodeFn('chose_2')" class="form-control">
                            <option value="" selected disabled>--Select Subject--</option>                                    
                          </select>
                           <input ng-if="group == 'science'" style="width: 60%;" type="text" name="compulsory_subject_five" value="Chemistry" readonly>
                           <input ng-if="group == 'business studies'" style="width: 60%;" type="text" name="compulsory_subject_five" value="Business Organization and Management" readonly>
                        </td>
    
                           <td>
                                <select 
                                     name="compulsory_subject_six" 
                                     ng-model="chose1st" 
                                     ng-options="cho[0] for cho in chose_1 track by cho[0]"
                                     ng-change="getSubjectCodeFn('chose_1')" 
                                     class="form-control" ng-required="true">
                                    <option value="" selected disabled>--Select Subject--</option>                                    
                                  </select>
                           </td>
                           
                           <td>
                            <select 
                                 name="optional_subject" 
                                 ng-model="optional_chose" 
                                 ng-options="cho[0] for cho in optional track by cho[0]"
                                 ng-change="getSubjectCodeFn('optional')" 
                                 class="form-control" ng-required="true">
                                 <option value="" selected disabled>--Select Subject--</option>
                              </select>
                           </td>
                           
                        </tr>
                        <tr>
                           <td><input type="text" name="compulsory_code_one" value="101" readonly></td>
                           <td><input type="text" name="compulsory_code_two" value="107" readonly></td>
                           <td><input type="text" name="compulsory_code_three" value="275" readonly></td>
                           
                           <td>
                               <input ng-if="group == 'science'" type="text" name="compulsory_code_four" value="174" readonly>
                               <input ng-if="group == 'humanities'" type="text" name="compulsory_code_four" ng-value="code.chose3rd" readonly>
                               <input ng-if="group == 'business studies'" type="text" name="compulsory_code_four" value="253" readonly>
                            </td>
                           <td>
                               <input ng-if="group == 'science'" type="text" name="compulsory_code_five" value="176" readonly>
                               <input ng-if="group == 'humanities'" type="text" name="compulsory_code_five" ng-value="code.chose2nd" readonly>
                               <input ng-if="group == 'business studies'" type="text" name="compulsory_code_five" value="277" readonly>
                            </td>
                           <td>
                               <input type="text" name="compulsory_code_six" ng-value="code.chose1st" readonly></td>
                           
                           <td>
                               <input type="text" name="optional_code" ng-value="code.optional" readonly>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div-->
    
    			<div class="form-group ">
                    <div class="col-sm-6">
    					<label class="control-label">Student Photo <span class="req"></span></label>
    					</br>
    					</br>
    					<?php if(!empty($student[0]->photo)){ ?>
    					    <img class="img-responsive pull-right" src="<?php echo base_url('public/students/'.$student[0]->photo); ?>" alt="" width="150px" height="150px" style="margin-bottom: 40px;" />
    					<?php } ?>
    					<input id="input-test" type="file" name="photo" class="form-control file"
    					data-show-preview="true" data-show-upload="false"  data-show-remove="false">
    					<input type="hidden" name="picture" value="<?php echo $student[0]->photo;?>">
    				</div>
					<div class="col-sm-6">
                        <label class="control-label">Type <span class="req">*</span></label>
                        <select name="type" class="form-control" required> 
                            <option value="">-- Select Type --</option>
                            <?php foreach (config_item('type') as $key => $value) { ?>
                            <option <?php echo ($student[0]->type==$key ? 'selected' : ''); ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>
        			</div>
                    
        			<div class="col-sm-12">
					    <br>
    			        <div class="btn-group pull-right">
    						<input type="submit" value="Update" name="student_submit" class="btn btn-primary">
    					</div>
    				</div>
    			</div>
    		</div>
			<?php echo form_close(); ?>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

<script>
    $("#permanent_address").on("click",function(){
        if ($(this).is(":checked")) {
            $("#per_addr").val($("#pre_addr").val());
        }
        else {
            $("#per_addr").val("");
        }
    });
    $(document).ready(function(){
        $('#dateOfBirth').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>
