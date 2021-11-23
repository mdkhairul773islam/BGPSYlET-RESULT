<div class="container-fluid">
    <div class="row">
<?php //echo "<pre>"; print_r($emp_info); echo "</pre>"; ?>
<?php echo $confirmation; ?>
<?php
        $img_url=$emp_name=$email=$status=null;
        if ($emp_info[0]->employee_type=="teacher"){
            $img_url=$emp_info[0]->image;
            $emp_name=$emp_info[0]->name;
            $email=$emp_info[0]->email;
        }
        elseif($emp_info[0]->employee_type=="staff"){
            $img_url=$emp_info[0]->employee_photo;
            $emp_name=$emp_info[0]->employee_name;
            $email=$emp_info[0]->employee_email;
        }
        if ($emp_info[0]->employee_status==1) {
            $status="Available";
        }
        elseif ($emp_info[0]->employee_status==0) {
            $status="Not Available";
        }
    ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Eidit Information</h1>
                </div>
            </div>

            <div class="panel-body"> 

                <?php
                $attr=array(
                    "class"=>"form-horizontal"
                    );
                echo form_open_multipart("employee/employee/edit_employee?id=".$this->input->get("id"),$attr);?>
                <input type="hidden" name="type" value="<?php echo $emp_info[0]->employee_type; ?>">
                <input type="hidden" name="old_file" value="<?php echo $emp_info[0]->employee_photo; ?>">
                <input type="hidden" name="emp_id" value="<?php echo $emp_info[0]->employee_emp_id; ?>">
                    <div class="form-group">
                        <label class="col-md-2 control-label">&nbsp; <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <img src="<?php echo base_url($emp_info[0]->employee_photo) ?>" width="80px" height="80px" alt="">
                        </div>
                    </div>
                    <input type="hidden" name="emp_id" value="<?php echo $emp_info[0]->employee_emp_id; ?>">
                    <!--<div class="form-group">
                        <label class="col-md-2 control-label">Employee ID </label>
                        <div class="col-md-5">
                            <input type="text" name="emp_id" readonly placeholder="Type Employee ID" value="<?php echo $emp_info[0]->employee_emp_id; ?>" class="form-control">
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label class="col-md-2 control-label">AC ID<span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="ac_id" value="<?php echo $emp_info[0]->ac_id; ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Full Name </label>
                        <div class="col-md-5">
                            <input type="text" name="full_name" placeholder="Type Full Name" value="<?php echo $emp_info[0]->employee_name; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Joining Date </label>
                        <div class="input-group date col-md-5" id="datetimepicker">
                            <input type="text" name="joining_date" placeholder="YYYY-MM-YY" class="form-control" value="<?php echo $emp_info[0]->employee_joining; ?>">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>

                    <script type="text/javascript">
                            $(document).ready(function(){
		                $('#datetimepicker').datetimepicker({
		                    format: 'YYYY-MM-DD'
		                });
		            });
                    </script>

                    <!--div class="form-group">
                        <label class="col-md-2 control-label">Select Gender <span class="req">*</span></label>
                        <div class="col-md-5">
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Male" required> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Female" required> Female
                            </label>
                        </div>
                    </div-->

                    <div class="form-group">
                        <label class="col-md-2 control-label">Mobile Number</label>
                        <div class="col-md-5">
                            <input type="text" name="mobile_number" placeholder="without +88" value="<?php echo $emp_info[0]->employee_mobile; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Email </label>
                        <div class="col-md-5">
                            <input type="email" name="emp_email" placeholder="Type your Email" value="<?php echo $emp_info[0]->employee_email; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Present Address</label>
                        <div class="col-md-5">
                            <textarea name="present_address" placeholder="Type Present Address" class="form-control" cols="30" rows="5"><?php echo $emp_info[0]->employee_present_address; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Permanent Address</label>
                        <div class="col-md-5">
                            <textarea name="permanent_address" placeholder="Type Permanent Address" class="form-control" cols="30" rows="5"><?php echo $emp_info[0]->employee_permanent_address; ?></textarea>
                        </div>
                    </div>

                    <!--div class="form-group">
                        <label class="col-md-2 control-label">Type <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="type" id="teacher_type" value="<?php echo $emp_info[0]->employee_type; ?>" class="form-control" >
                                <option value="">Select Employee Type</option>
                                <option <?php if($emp_info[0]->employee_type=="teacher") echo "selected"; ?> value="teacher">Teacher</option>
                                <option <?php if($emp_info[0]->employee_type=="staff") echo "selected"; ?> value="staff">Staff</option>
                            </select>
                        </div>
                    </div-->
                    
                    <?php if($emp_info[0]->employee_type=="teacher"){ ?>
                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">Type </label>
                        <div class="col-md-5">
                            <select name="designation" class="form-control" >
                                <option value="">Select Designation</option>
                                <option <?php if($emp_info[0]->employee_designation=="President") echo "selected"; ?> value="President">President</option>
                                <option <?php if($emp_info[0]->employee_designation=="Honourable GB Member") echo "selected"; ?> value="Honourable GB Member">Honourable GB Member</option>
                                <option <?php if($emp_info[0]->employee_designation=="principal") echo "selected"; ?> value="principal">Principal</option>
                                <option <?php if($emp_info[0]->employee_designation=="vice_principal") echo "selected"; ?> value="vice_principal">Vice Principal</option>
                                <option <?php if($emp_info[0]->employee_designation=="Professor") echo "selected"; ?> value="Professor">Professor</option>
                                <option <?php if($emp_info[0]->employee_designation=="Asst Professor") echo "selected"; ?> value="Asst Professor">Asst Professor</option>
                                <option <?php if($emp_info[0]->employee_designation=="co_ordinator") echo "selected"; ?> value="co_ordinator">Co-Ordinator</option>
                                <option <?php if($emp_info[0]->employee_designation=="Lecturer") echo "selected"; ?> value="Lecturer">Lecturer</option>
                                <option <?php if($emp_info[0]->employee_designation=="Demonstrator") echo "selected"; ?> value="Demonstrator">Demonstrator</option>
                                <option <?php if($emp_info[0]->employee_designation=="Head Teacher") echo "selected"; ?> value="Head Teacher">Head Teacher</option>
                                <option <?php if($emp_info[0]->employee_designation=="Asst Head Teacher") echo "selected"; ?> value="Asst Head Teacher">Asst Head Teacher</option>
                                <option <?php if($emp_info[0]->employee_designation=="assistant_teacher") echo "selected"; ?> value="assistant_teacher">Assistant Teacher</option>
                                <option <?php if($emp_info[0]->employee_designation=="teacher") echo "selected"; ?> value="teacher">Teacher</option>
                                <option <?php if($emp_info[0]->employee_designation=="Art And Craft") echo "selected"; ?> value="Art And Craft">Art And Craft</option>
                        </select>
                        </div>
                    </div>

                    <?php } if($emp_info[0]->employee_type=="staff"){ ?>
                    <div class="form-group staff_option">
                        <label class="col-md-2 control-label">Designation </label>
                        <div class="col-md-5">
                            <select name="designation" class="form-control" >
                                <option value="">Select Designation</option>
                                <option <?php if($emp_info[0]->employee_designation=="office_assistant") echo "selected"; ?> value="office_assistant">Office Assistant</option>
                                <option <?php if($emp_info[0]->employee_designation=="accountant") echo "selected"; ?> value="accountant">Accountant</option>
                                <option <?php if($emp_info[0]->employee_designation=="Chief_Accountant") echo "selected"; ?> value="Chief_Accountant">Chief Accountant</option>
                                <option <?php if($emp_info[0]->employee_designation=="MLSS") echo "selected"; ?> value="MLSS">MLSS</option>
                                <option <?php if($emp_info[0]->employee_designation=="security_gard") echo "selected"; ?> value="security_gard">Security Gard</option>
                                <option value="security_gard" <?php if($emp_info[0]->employee_designation=="security_gard") echo "selected"; ?>>Security Gard</option>
                                <option value="Front_Office_Manager" <?php if($emp_info[0]->employee_designation=="Front_Office_Manager") echo "selected"; ?>>Front Office Manager</option>
                                <option value="Deputy_Office_Assistant" <?php if($emp_info[0]->employee_designation=="Deputy_Office_Assistant") echo "selected"; ?>>Deputy Office Assistant</option>
                                <option value="pLab_Attendant" <?php if($emp_info[0]->employee_designation=="pLab_Attendant") echo "selected"; ?>>pLab Attendant</option>
                                <option value="Aya" <?php if($emp_info[0]->employee_designation=="Aya") echo "selected"; ?>>Aya</option>
                                <option value="IT_suppot_technician" <?php if($emp_info[0]->employee_designation=="IT_suppot_technician") echo "selected"; ?>>IT suppot technician</option>
                                <option value="electrician" <?php if($emp_info[0]->employee_designation=="electrician") echo "selected"; ?>>Electrician</option>
                            </select>
                        </div>
                    </div>
                <?php } if($emp_info[0]->employee_type=="teacher"){ ?>
                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">Subject </label>
                        <div class="col-md-5">
                            <select name="subject" class="form-control" >
                                <option value="">-- Select Subject --</option>
                                <optgroup  label="Eleven & Twelve">
                                    <option <?php echo ($emp_info[0]->employee_subject=='bangla_1st_paper'? 'selected' : ''); ?> value="bangla_1st_paper">Bangla 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='bangla_2nd_paper'? 'selected' : ''); ?> value="bangla_2nd_paper">Bangla 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='english_1st_paper'? 'selected' : ''); ?> value="english_1st_paper">English 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='english_2nd_paper'? 'selected' : ''); ?> value="english_2nd_paper">English 2nd Paper</option>
                                <option value="ict">ICT</option>

                                </optgroup>
                                    <optgroup  label="Science">
                                    <option <?php echo ($emp_info[0]->employee_subject=='physics_1st_paper'? 'selected' : ''); ?> value="physics_1st_paper">Physics 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='physics_2nd_paper'? 'selected' : ''); ?> value="physics_2nd_paper">Physics 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='chemistry_1st_paper'? 'selected' : ''); ?> value="chemistry_1st_paper">Chemistry 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='chemistry_2nd_paper'? 'selected' : ''); ?> value="chemistry_2nd_paper">Chemistry 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='botany'? 'selected' : ''); ?> value="botany">Botany</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='zoology'? 'selected' : ''); ?> value="zoology">Zoology</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='higher_math_1st_paper'? 'selected' : ''); ?> value="higher_math_1st_paper">Higher Math 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='higher_math_2nd_paper'? 'selected' : ''); ?> value="higher_math_2nd_paper">Higher Math 2nd Paper</option>
                                </optgroup>

                                <optgroup  label="Arts">
                                    <option <?php echo ($emp_info[0]->employee_subject=='history_1st_paper'? 'selected' : ''); ?> value="history_1st_paper">History 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='history_2nd_paper'? 'selected' : ''); ?> value="history_2nd_paper">History 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='civics_and_good_governance_1st_paper'? 'selected' : ''); ?> value="civics_and_good_governance_1st_paper">Civics & Good Governance 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='civics_and_good_governance_2nd_paper'? 'selected' : ''); ?> value="civics_and_good_governance_2nd_paper">Civics & Good Governance 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='economics_1st_paper'? 'selected' : ''); ?> value="economics_1st_paper">Economics 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='economics_2nd_paper'? 'selected' : ''); ?> value="economics_2nd_paper">Economics 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='social_science_1st_paper'? 'selected' : ''); ?> value="social_science_1st_paper">Social Science 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='social_science_2nd_paper'? 'selected' : ''); ?> value="social_science_2nd_paper">Social Science 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='social_action_1st_paper'? 'selected' : ''); ?> value="social_action_1st_paper">Social Action 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='social_action_2nd_paper'? 'selected' : ''); ?> value="social_action_2nd_paper">Social Action 2nd Paper</option>
                                </optgroup>

                                <optgroup label="Commerce">
                                    <option <?php echo ($emp_info[0]->employee_subject=='business_organization_and_management_1st_paper'? 'selected' : ''); ?> value="business_organization_and_management_1st_paper">Business Organization and Management 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='business_organization_and_management_2nd_paper'? 'selected' : ''); ?> value="business_organization_and_management_2nd_paper">Business Organization and Management 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='accounting_1st_paper'? 'selected' : ''); ?> value="accounting_1st_paper">Accounting 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='accounting_2nd_paper'? 'selected' : ''); ?> value="accounting_2nd_paper">Accounting 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='finance_and_banking_1st_paper'? 'selected' : ''); ?> value="finance_and_banking_1st_paper">Finance & Banking 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='finance_and_banking_2nd_paper'? 'selected' : ''); ?> value="finance_and_banking_2nd_paper">Finance & Banking 2nd Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='production_management_and_marketing_1st_paper'? 'selected' : ''); ?> value="production_management_and_marketing_1st_paper">Production Management and Marketing 1st Paper</option>
                                    <option <?php echo ($emp_info[0]->employee_subject=='production_management_and_marketing_2nd_paper'? 'selected' : ''); ?> value="production_management_and_marketing_2nd_paper">Production Management and Marketing 2nd Paper</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">User Name</label>
                        <div class="col-md-5">
                            <input type="text" name="username" value="<?php echo $emp_info[0]->username; ?>" placeholder="Username" class="form-control">
                        </div>
                    </div>

                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">Password </label>
                        <div class="col-md-5">
                            <input type="password" name="password" placeholder="password" class="form-control"/>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Salary </label>
                        <div class="col-md-5">
                            <input type="text" name="salary" value="<?php echo $emp_info[0]->employee_salary; ?>" placeholder="Amount in Tk" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Employee's Photo </label>
                        <div class="col-md-5">
                            <input id="input-test" type="file" name="attachFile" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                        </div>
                    </div>
                    
                    <input type="hidden" name="status" value="1">
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Status <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <label class="radio-inline">
                                <input type="radio" name="job_status" value="permanent" <?=($emp_info[0]->job_status=="permanent"?"checked":"")?> checked>&nbsp; Permanent
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="job_status" value="contractual" <?=($emp_info[0]->job_status=="contractual"?"checked":"")?> >&nbsp; Contractual
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="job_status" value="part-time" <?=($emp_info[0]->job_status=="part-time"?"checked":"")?> >&nbsp; Part-Time
                            </label>
                        </div>
                    </div>

                    <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" name="update_emp" value="Update" class="btn btn-success">
                    </div>
                    </div>

                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
