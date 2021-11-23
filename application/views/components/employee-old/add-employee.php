<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation;
     ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Add Employee</h1>
                </div>
            </div>

            <div class="panel-body">

                <!--blockquote class="form-head">

                    <h4>Add New Employee</h4>

                    <ol style="font-size: 14px;">
                        <li>1 . If you want to insert <mark>new employee</mark> then use the fields</li>
                        <li>2 . At last click on the <mark>Save</mark> button</li>
                    </ol>

                </blockquote>

                <hr-->


                <!-- horizontal form -->
                <?php
                    $attr=array("class"=>"form-horizontal");
                    echo form_open_multipart('', $attr);
                ?>

                    <div class="form-group">
                        <label class="col-md-2 control-label">ID <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="emp_id" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Full Name <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Joining Date <span class="req">*</span></label>
                        <div class="input-group date col-md-5" id="datetimepicker1">
                            <input type="text" name="joining_date" class="form-control" required>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Select Gender <span class="req">*</span></label>
                        <div class="col-md-5">
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Male" required> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Female" required> Female
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Email <span class="req">&nbsp; </span></label>
                        <div class="col-md-5">
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Mobile Number <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="mobile_number" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Present Address <span class="req">*</span></label>
                        <div class="col-md-5">
                            <textarea name="present_address" id="pre_addr" class="form-control" cols="30" rows="5" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Permanent Address <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="checkbox" id="permanent_address" value="0"> <label for="permanent_address">Same as Present Address</label>
                            <textarea name="permanent_address" id="per_addr" class="form-control" cols="30" rows="5" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Type <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="type" class="form-control" id="teacher_type" required>
                                <option value="">Select Employee Type</option>
                                <option value="teacher">Teacher</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">Designation <span class="req">*</span></label>
                        <div class="col-md-5" >
                            <select name="designation_teacher" class="form-control" >
                                <option value="">Select Designation</option>
                                <option value="director">Director</option>
                                <option value="principal">Principal</option>
                                <option value="vice_principal">Vice Principal</option>
                                <option value="co_ordinator">Co-Ordinator</option>    
                                <option value="Professor">Professor</option>
                                <option value="Asst Professor">Asst Professor</option>
                                <option value="Lecturer">Lecturer</option>          
                                <option value="assistant_teacher">Assistant Teacher</option>
                                <option value="teacher">Teacher</option>
                                <option value="Art And Craft">Art And Craft</option>
                            </select>   
                        </div>
                    </div>

                    <div class="form-group staff_option">
                        <label class="col-md-2 control-label">Designation <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="designation_staff" class="form-control" >
                                <option value="">Select Designation</option>                    
                                <option value="office_assistant">Office Assistant</option>
                                <option value="accountant">Accountant</option>
                                <option value="hostel_super">Hostel Super</option>
                                <option value="cooker">Cooker</option>
                                <option value="security_gard">Security Gard</option>  
                                <option value="MLSS">MLSS</option>   
                            </select>   
                        </div>
                    </div>

                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">Subject <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="subject" class="form-control" >
                                <option value="">-- Select Subject --</option>
                                <optgroup  label="Eleven & Twelve">
                                    <option value="bangla_1st_paper">Bangla 1st Paper</option>
                                    <option value="bangla_2nd_paper">Bangla 2nd Paper</option>
                                    <option value="english_1st_paper">English 1st Paper</option>
                                    <option value="english_2nd_paper">English 2nd Paper</option>  
                                <option value="ict">ICT</option> 

                                </optgroup>
                                    <optgroup  label="Science">
                                    <option value="physics_1st_paper">Physics 1st Paper</option>
                                    <option value="physics_2nd_paper">Physics 2nd Paper</option>
                                    <option value="chemistry_1st_paper">Chemistry 1st Paper</option>
                                    <option value="chemistry_2nd_paper">Chemistry 2nd Paper</option>
                                    <option value="botany">Botany</option>
                                    <option value="zoology">Zoology</option>
                                    <option value="higher_math_1st_paper">Higher Math 1st Paper</option>
                                    <option value="higher_math_2nd_paper">Higher Math 2nd Paper</option>
                                </optgroup>

                                <optgroup  label="Arts">
                                    <option value="history_1st_paper">History 1st Paper</option>
                                    <option value="history_2nd_paper">History 2nd Paper</option>
                                    <option value="civics_and_good_governance_1st_paper">Civics & Good Governance 1st Paper</option>
                                    <option value="civics_and_good_governance_2nd_paper">Civics & Good Governance 2nd Paper</option>
                                    <option value="economics_1st_paper">Economics 1st Paper</option>
                                    <option value="economics_2nd_paper">Economics 2nd Paper</option>
                                    <option value="social_science_1st_paper">Social Science 1st Paper</option>
                                    <option value="social_science_2nd_paper">Social Science 2nd Paper</option>
                                    <option value="social_action_1st_paper">Social Action 1st Paper</option>
                                    <option value="social_action_2nd_paper">Social Action 2nd Paper</option>   
                                </optgroup>

                                <optgroup label="Commerce">
                                    <option value="business_organization_and_management_1st_paper">Business Organization and Management 1st Paper</option>
                                    <option value="business_organization_and_management_2nd_paper">Business Organization and Management 2nd Paper</option>
                                    <option value="accounting_1st_paper">Accounting 1st Paper</option>
                                    <option value="accounting_2nd_paper">Accounting 2nd Paper</option>
                                    <option value="finance_and_banking_1st_paper">Finance & Banking 1st Paper</option>
                                    <option value="finance_and_banking_2nd_paper">Finance & Banking 2nd Paper</option>
                                    <option value="production_management_and_marketing_1st_paper">Production Management and Marketing 1st Paper</option>
                                    <option value="production_management_and_marketing_2nd_paper">Production Management and Marketing 2nd Paper</option>
                                </optgroup>
                            </select> 
                        </div>
                    </div>

                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">Username <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>

                    <div class="form-group teachers_option">
                        <label class="col-md-2 control-label">Password <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group" >
                        <label class="col-md-2 control-label">Salary</label>
                        <div class="col-md-5">
                            <input type="text" name="salary" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Employee's Photo <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input id="input-test" type="file" name="attachFile" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-md-2 control-label">Status <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1" >&nbsp; Available
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0" >&nbsp; Not Available
                            </label>
                        </div>
                    </div>

                    <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" name="add_emp" value="Save" class="btn btn-primary">
                    </div>
                    </div>
                    
                <?php echo form_close(); ?>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".teachers_option").hide();
        $(".staff_option").hide();
        $("select#teacher_type").on("change", function(){
            if($(this).val() == "staff"){
                $(".teachers_option").fadeOut('slow');
                $(".staff_option").fadeIn('slow');
                $(".staff_option").show();
            }
            else{
                $(".teachers_option").fadeIn('slow');
                $(".teachers_option").show();
                $(".staff_option").fadeOut('slow');
            }
            
        });

        $("#permanent_address").on("click",function(){
            
            if ($(this).is(":checked")) {
                $("#per_addr").val($("#pre_addr").val());
            }
            else{
                $("#per_addr").val("");
            }
        });
    });
</script>