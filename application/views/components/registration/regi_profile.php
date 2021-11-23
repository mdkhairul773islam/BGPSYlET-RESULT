<?php $prev_class = get_result('previous_class',array('student_id'=> $result[0]->student_id));?>
<?php $subjective_result = json_decode($result[0]->subjective_result,true); ?>
<style>
    @media print{
        aside, nav, .none, .panel-heading, .panel-footer {
            display: none !important;
        }
        .panel{
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .panel .hide{
            display: block !important;
        }
        .title{
            font-size: 25px;        
        }
    }
    table.table.table-bordered tr td, table.table.table-bordered tr th {vertical-align: middle;}
</style>

<div class="container-fluid">
    <div class="row">
        <?php if($result != null){ ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class=" pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i>Print
                    </a>
                </div>
            </div>

            <div class="panel-body">
                <img class="img-responsive" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                <hr class="hide" style="border-bottom: 1px solid #ccc;">
                <h4 class="hide text-center" style="margin-top: -10px;"> Student Profile </h4>
                
                <table class="table table-bordered">
                    <tr>
                        <th width="14%">Date</th>
                        <td width="19%"><?php echo (!empty($result[0]->create_at)) ? $result[0]->create_at : ""; ?></td>
                        <th width="14%">Student ID</th>
                        <td width="19%"><?php echo (!empty($result[0]->student_id)) ? $result[0]->student_id : ""; ?></td>
                        <th width="14%">Student UID</th>
                        <td width="19%"><?php echo (!empty($result[0]->student_uid)) ? $result[0]->student_id : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Name Bn</th>
                        <td><?php echo (!empty($result[0]->name_bn)) ? filter($result[0]->name_bn) : ""; ?></td>
                        <th>Name En</th> 
                        <td><?php echo (!empty($result[0]->name_en)) ? filter($result[0]->name_en) : ""; ?></td>
                        <th>Birth Card No</th>
                        <td><?php echo (!empty($result[0]->birth_no)) ? filter($result[0]->birth_no) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td><?php echo (!empty($result[0]->dob)) ? $result[0]->dob : ""; ?></td>
                        <th>Birth Place</th>
                        <td><?php echo (!empty($result[0]->birth_place)) ? filter($result[0]->birth_place) : ""; ?></td>
                        <th>Gender</th>
                        <td><?php echo (!empty($result[0]->gender)) ? filter($result[0]->gender) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td><?php echo (!empty($result[0]->nationality)) ? filter($result[0]->nationality) : ""; ?></td>
                        <th>Religion</th>
                        <td><?php echo (!empty($result[0]->religion)) ? filter($result[0]->religion) : ""; ?></td>
                        <th>Marital Status</th>
                        <td><?php echo (!empty($result[0]->marital_status)) ? filter($result[0]->marital_status) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td><?php echo (!empty($result[0]->study_class)) ? filter($result[0]->study_class) : ""; ?></td>
                        <th>Study Section</th>
                        <td><?php echo (!empty($result[0]->study_section)) ? filter($result[0]->study_section) : ""; ?></td>
                        <th>Study Group</th>
                        <td><?php echo (!empty($result[0]->study_group)) ? filter($result[0]->study_group) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Disability</th>
                        <td><?php echo (!empty($result[0]->disability)) ? filter($result[0]->disability) : ""; ?></td>
                        <th>Blood Group</th>
                        <td><?php echo (!empty($result[0]->blood_group)) ? filter($result[0]->blood_group) : ""; ?></td>
                        <th>Small Ethnic Group</th>
                        <td><?php echo (!empty($result[0]->small_ethnic_group)) ? filter($result[0]->small_ethnic_group) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Mother Name Bn</th>
                        <td><?php echo (!empty($result[0]->mother_name_bn)) ? filter($result[0]->mother_name_bn) : ""; ?></td>
                        <th>Mother Name En</th>
                        <td><?php echo (!empty($result[0]->mother_name_en)) ? filter($result[0]->mother_name_en) : ""; ?></td>
                        <th>Mother NID</th>
                        <td><?php echo (!empty($result[0]->mother_nid)) ? filter($result[0]->mother_nid) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Mother Date of Birth</th>
                        <td><?php echo (!empty($result[0]->mother_dob)) ? $result[0]->mother_dob : ""; ?></td>
                        <th>Mother Birth No</th>
                        <td><?php echo (!empty($result[0]->mother_birth_no)) ? filter($result[0]->mother_birth_no) : ""; ?></td>
                        <th>Mother Mobile</th>
                        <td><?php echo (!empty($result[0]->mother_mobile)) ? filter($result[0]->mother_mobile) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Mother Profession</th>
                        <td><?php echo (!empty($result[0]->mother_profession)) ? filter($result[0]->mother_profession) : ""; ?></td>
                        <th>Father Name Bn</th>
                        <td><?php echo (!empty($result[0]->father_name_bn)) ? filter($result[0]->father_name_bn) : ""; ?></td>
                        <th>Father Name En</th>
                        <td><?php echo (!empty($result[0]->father_name_en)) ? filter($result[0]->father_name_en) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Father NID</th>
                        <td><?php echo (!empty($result[0]->father_nid)) ? filter($result[0]->father_nid) : ""; ?></td>
                        <th>Father Date of Birth</th>
                        <td><?php echo (!empty($result[0]->father_dob)) ? $result[0]->father_dob : ""; ?></td>
                        <th>Father Birth No</th>
                        <td><?php echo (!empty($result[0]->father_birth_no)) ? filter($result[0]->father_birth_no) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Father Mobile</th>
                        <td><?php echo (!empty($result[0]->father_mobile)) ? filter($result[0]->father_mobile) : ""; ?></td>
                        <th>Father Profession</th>
                        <td><?php echo (!empty($result[0]->father_profession)) ? filter($result[0]->father_profession) : ""; ?></td>
                        <th>Guardian Name</th>
                        <td><?php echo (!empty($result[0]->guardian_name)) ? filter($result[0]->guardian_name) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Guardian NID</th>
                        <td><?php echo (!empty($result[0]->guardian_nid)) ? filter($result[0]->guardian_nid) : ""; ?></td>
                        <th>Guardian Mobile</th>
                        <td><?php echo (!empty($result[0]->guardian_mobile)) ? filter($result[0]->guardian_mobile) : ""; ?></td>
                        <th>Guardian Occupation</th>
                        <td><?php echo (!empty($result[0]->guardian_occupation)) ? filter($result[0]->guardian_occupation) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Guardian Relation</th>
                        <td><?php echo (!empty($result[0]->guardian_relation)) ? filter($result[0]->guardian_relation) : ""; ?></td>
                        <th>Status</th>
                        <td><?php echo (!empty($result[0]->status)) ? filter($result[0]->status) : ""; ?></td>
                        <th></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">Present Address</h3></th>
                    </tr>
                    <tr>
                        <th>Present Division</th>
                        <td><?php echo (!empty($result[0]->present_division)) ? filter($result[0]->present_division) : ""; ?></td>
                        <th>Present District</th>
                        <td><?php echo (!empty($result[0]->present_district)) ? filter($result[0]->present_district) : ""; ?></td>
                        <th>Present Upazila</th>
                        <td><?php echo (!empty($result[0]->present_upazila)) ? filter($result[0]->present_upazila) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Present Pourashava</th>
                        <td><?php echo (!empty($result[0]->present_pourashava)) ? filter($result[0]->present_pourashava) : ""; ?></td>
                        <th>Present City Corporation</th>
                        <td><?php echo (!empty($result[0]->present_city_corporation)) ? filter($result[0]->present_city_corporation) : ""; ?></td>
                        <th>Present Union</th>
                        <td><?php echo (!empty($result[0]->present_union)) ? filter($result[0]->present_union) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Present Village</th>
                        <td><?php echo (!empty($result[0]->present_village)) ? filter($result[0]->present_village) : ""; ?></td>
                        <th>Present Word No</th>
                        <td><?php echo (!empty($result[0]->present_word_no)) ? filter($result[0]->present_word_no) : ""; ?></td>
                        <th>Present Mouza</th>
                        <td><?php echo (!empty($result[0]->present_mouza)) ? filter($result[0]->present_mouza) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Present Holding No</th>
                        <td><?php echo (!empty($result[0]->present_holding_no)) ? filter($result[0]->present_holding_no) : ""; ?></td>
                        <th>Present Post Office</th>
                        <td><?php echo (!empty($result[0]->present_post_office)) ? filter($result[0]->present_post_office) : ""; ?></td>
                        <th>Present Post Code</th>
                        <td><?php echo (!empty($result[0]->present_post_code)) ? filter($result[0]->present_post_code) : ""; ?></td>
                    </tr>
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">Permanent Address</h3></th>
                    </tr>
                    <tr>
                        <th>Permanent Division</th>
                        <td><?php echo (!empty($result[0]->permanent_division)) ? filter($result[0]->permanent_division) : ""; ?></td>
                        <th>Permanent District</th>
                        <td><?php echo (!empty($result[0]->permanent_district)) ? filter($result[0]->permanent_district) : ""; ?></td>
                        <th>Permanent Upazila</th>
                        <td><?php echo (!empty($result[0]->permanent_upazila)) ? filter($result[0]->permanent_upazila) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Permanent Pourashava</th>
                        <td><?php echo (!empty($result[0]->permanent_pourashava)) ? filter($result[0]->permanent_pourashava) : ""; ?></td>
                        <th>Permanent City Corporation</th>
                        <td><?php echo (!empty($result[0]->permanent_city_corporation)) ? filter($result[0]->permanent_city_corporation) : ""; ?></td>
                        <th>Permanent Union</th>
                        <td><?php echo (!empty($result[0]->permanent_union)) ? filter($result[0]->permanent_union) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Permanent Village</th>
                        <td><?php echo (!empty($result[0]->permanent_village)) ? filter($result[0]->permanent_village) : ""; ?></td>
                        <th>Permanent Word No</th>
                        <td><?php echo (!empty($result[0]->permanent_word_no)) ? filter($result[0]->permanent_word_no) : ""; ?></td>
                        <th>Permanent Mouza</th>
                        <td><?php echo (!empty($result[0]->permanent_mouza)) ? filter($result[0]->permanent_mouza) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Permanent Holding No</th>
                        <td><?php echo (!empty($result[0]->permanent_holding_no)) ? filter($result[0]->permanent_holding_no) : ""; ?></td>
                        <th>Permanent Post Office</th>
                        <td><?php echo (!empty($result[0]->permanent_post_office)) ? filter($result[0]->permanent_post_office) : ""; ?></td>
                        <th>Permanent Post Code</th>
                        <td><?php echo (!empty($result[0]->permanent_post_code)) ? filter($result[0]->permanent_post_code) : ""; ?></td>
                    </tr>
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">Institute Address</h3></th>
                    </tr>
                    <tr>
                        <th>Institute Name</th>
                        <td><?php echo (!empty($result[0]->institute_name)) ? filter($result[0]->institute_name) : ""; ?></td>
                        <th>Institute Division</th>
                        <td><?php echo (!empty($result[0]->institute_division)) ? filter($result[0]->institute_division) : ""; ?></td>
                        <th>Institute District</th>
                        <td><?php echo (!empty($result[0]->institute_district)) ? filter($result[0]->institute_district) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Institute Upazila</th>
                        <td><?php echo (!empty($result[0]->institute_upazila)) ? filter($result[0]->institute_upazila) : ""; ?></td>
                        <th>Institute Pourashava</th>
                        <td><?php echo (!empty($result[0]->institute_pourashava)) ? filter($result[0]->institute_pourashava) : ""; ?></td>
                        <th>Institute City Corporation</th>
                        <td><?php echo (!empty($result[0]->institute_city_corporation)) ? filter($result[0]->institute_city_corporation) : ""; ?></td>
                    </tr>
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">Studying Institute</h3></th>
                    </tr>
                    <tr>
                        <th>Studying Class</th>
                        <td><?php echo (!empty($result[0]->studying_class)) ? filter($result[0]->studying_class) : ""; ?></td>
                        <th>Studying Section</th>
                        <td><?php echo (!empty($result[0]->studying_section)) ? filter($result[0]->studying_section) : ""; ?></td>
                        <th>Studying Shift</th>
                        <td><?php echo (!empty($result[0]->studying_shift)) ? filter($result[0]->studying_shift) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Studying Version</th>
                        <td><?php echo (!empty($result[0]->studying_version)) ? filter($result[0]->studying_version) : ""; ?></td>
                        <th>Studying Group</th>
                        <td><?php echo (!empty($result[0]->studying_group)) ? filter($result[0]->studying_group) : ""; ?></td>
                        <th>Studying Roll</th>
                        <td><?php echo (!empty($result[0]->studying_roll)) ? filter($result[0]->studying_roll) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Studying Registation No</th>
                        <td><?php echo (!empty($result[0]->studying_regi_no)) ? filter($result[0]->studying_regi_no) : ""; ?></td>
                        <th>Studying First Class</th>
                        <td><?php echo (!empty($result[0]->studying_first_class)) ? filter($result[0]->studying_first_class) : ""; ?></td>
                        <th>Studying Admission Date</th>
                        <td><?php echo (!empty($result[0]->studying_admission_date)) ? filter($result[0]->studying_admission_date) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Studying Stipend</th>
                        <td><?php echo (!empty($result[0]->studying_stipend)) ? filter($result[0]->studying_stipend) : ""; ?></td>
                        <th>Studying Scholarship</th>
                        <td><?php echo (!empty($result[0]->studying_scholarship)) ? filter($result[0]->studying_scholarship) : ""; ?></td>
                        <th>Studying Other Scholarship</th>
                        <td><?php echo (!empty($result[0]->studying_other_scholarship)) ? filter($result[0]->studying_other_scholarship) : ""; ?></td>
                    </tr>
                    <tr>
                        <th>Studying Transfer In</th>
                        <td><?php echo (!empty($result[0]->studying_transfer_in)) ? filter($result[0]->studying_transfer_in) : ""; ?></td>
                        <th>Studying Repeater</th>
                        <td><?php echo (!empty($result[0]->studying_repeater)) ? filter($result[0]->studying_repeater) : ""; ?></td>
                        <th></th>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <th colspan="2" style="text-align: center;">
                            <span>
                                <h3 style="margin: inherit;text-decoration: underline;">Student Photo:</h3><br />
                                <?php if(!empty($result[0]->student_photo)) { ?>
                                <img width="150px" src="<?php echo site_url($result[0]->student_photo); ?>" class="img-thumbnail" alt="..."> <br />
                                <?php } else { ?>
                                <h4 style="margin: inherit;"> You Don't Upload Your Photo !</h4>
                                <?php } ?>
                            </span>
                        </th>
                        <th colspan="2" style="text-align: center;">
                            <span>
                                <h3 style="margin: inherit;text-decoration: underline;">Student Sign:</h3><br />
                                <?php if(!empty($result[0]->student_sign)) { ?>
                                <img src="<?php echo site_url($result[0]->student_sign); ?>" class="img-thumbnail" alt="..."> <br />
                                <?php } else { ?>
                                <h4 style="margin: inherit;"> You Don't Upload Your Signature !</h4>
                                <?php } ?>
                                Date: <?php echo $result[0]->student_sign_date;?>
                            </span>
                        </th>
                        <th colspan="2" style="text-align: center;">
                            <span>
                                <h3 style="margin: inherit;text-decoration: underline;">Guardian Sign:</h3><br />
                                <?php if(!empty($result[0]->guardian_sign)) { ?>
                                <img src="<?php echo site_url($result[0]->guardian_sign); ?>" class="img-thumbnail" alt="..."> <br />
                                <?php } else { ?>
                                <h4 style="margin: inherit;"> You Don't Upload Guardian Signature !</h4>
                                <?php } ?>
                                Date: <?php echo $result[0]->guardian_sign_date;?>
                            </span>
                        </th>
                    </tr>
                    
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">Previous Class Test Results</h3></th>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <?php if(!empty($prev_class)) { ?>
                            <table class="table table-bordered" style="margin-bottom: 0;">
                                <tr>
                                    <th style="text-align: center;">Class</th>
                                    <th style="text-align: center;">Roll</th>
                                    <th style="text-align: center;">Institution</th>
                                    <th style="text-align: center;">EIIN</th>
                                    <th style="text-align: center;">Board</th>
                                    <th style="text-align: center;">GPA</th>
                                    <th style="text-align: center;">Exam Year</th>
                                </tr>
                                <?php foreach($prev_class as $key => $value) {?>
                                <tr>
                                    <td><?php echo $value->class; ?></td>
                                    <td style="text-align: center;"><?php echo $value->roll; ?></td>
                                    <td><?php echo $value->institution; ?></td>
                                    <td><?php echo $value->eiin; ?></td>
                                    <td><?php echo $value->board; ?></td>
                                    <td style="text-align: center;"><?php echo $value->gpa; ?></td>
                                    <td style="text-align: center;"><?php echo $value->exam_year; ?></td>
                                </tr>
                                <?php } ?>
                            </table>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">Subjective Results (Annual Examination Results)</h3></th>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <table class="table table-bordered" style="margin-bottom: 0;">
                                <tr>
                                    <th style="text-align: center;">Name Of Class Exam</th>
                                    <th style="text-align: center;">Selected Subject</th>
                                    <th style="text-align: center;">Subject Name</th>
                                    <th style="text-align: center;">Get Number</th>
                                    <th style="text-align: center;">Get Point</th>
                                </tr>
                               <tr>
                                    <td rowspan="14">
                                        <label for="subjective_psc">
                                            <input type="radio" id="subjective_psc" name="subjective" value="psc" <?php if($result[0]->subjective_class == "psc"){echo "checked"; } ?>>
                                            PSC/Equivalent
                                        </label><br>
                                        <label for="subjective_six">
                                            <input type="radio" id="subjective_six" name="subjective" value="six" <?php if($result[0]->subjective_class == "six"){echo "checked"; } ?>>
                                            Six
                                        </label><br>
                                        <label for="subjective_seven">
                                            <input type="radio" id="subjective_seven" name="subjective" value="seven" <?php if($result[0]->subjective_class == "seven"){echo "checked"; } ?>>
                                            Seven
                                        </label><br>
                                        <label for="subjective_jsc">
                                            <input type="radio" id="subjective_jsc" name="subjective" value="jsc" <?php if($result[0]->subjective_class == "jsc"){echo "checked"; } ?>>
                                            JSC/Equivalent
                                        </label><br>
                                        <label for="subjective_nine">
                                            <input type="radio" id="subjective_nine" name="subjective" value="nine" <?php if($result[0]->subjective_class == "nine"){echo "checked"; } ?>>
                                            Nine
                                        </label><br>
                                        <label for="subjective_ssc">
                                            <input type="radio" id="subjective_ssc" name="subjective" value="ssc" <?php if($result[0]->subjective_class == "ssc"){echo "checked"; } ?>>
                                            SSC/Equivalent
                                        </label><br>
                                        <label for="subjective_eleven">
                                            <input type="radio" id="subjective_eleven" name="subjective" value="eleven" <?php if($result[0]->subjective_class == "eleven"){echo "checked"; } ?>>
                                            Eleven
                                        </label>
                                    </td>
                                    <td rowspan="9">
                                        Compulsory Subject
                                    </td>
                                    <td><?php echo (!empty($subjective_result[0]['subject'])) ? $subjective_result[0]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[0]['number'])) ? $subjective_result[0]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[0]['point'])) ? $subjective_result[0]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[1]['subject'])) ? $subjective_result[1]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[1]['number'])) ? $subjective_result[1]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[1]['point'])) ? $subjective_result[1]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[2]['subject'])) ? $subjective_result[2]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[2]['number'])) ? $subjective_result[2]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[2]['point'])) ? $subjective_result[2]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[3]['subject'])) ? $subjective_result[3]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[3]['number'])) ? $subjective_result[3]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[3]['point'])) ? $subjective_result[3]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[4]['subject'])) ? $subjective_result[4]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[4]['number'])) ? $subjective_result[4]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[4]['point'])) ? $subjective_result[4]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[5]['subject'])) ? $subjective_result[5]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[5]['number'])) ? $subjective_result[5]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[5]['point'])) ? $subjective_result[5]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[6]['subject'])) ? $subjective_result[6]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[6]['number'])) ? $subjective_result[6]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[6]['point'])) ? $subjective_result[6]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[7]['subject'])) ? $subjective_result[7]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[7]['number'])) ? $subjective_result[7]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[7]['point'])) ? $subjective_result[7]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[8]['subject'])) ? $subjective_result[8]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[8]['number'])) ? $subjective_result[8]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[8]['point'])) ? $subjective_result[8]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td rowspan="4">
                                        Optional Subject
                                    </td>
                                    <td><?php echo (!empty($subjective_result[9]['subject'])) ? $subjective_result[9]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[9]['number'])) ? $subjective_result[9]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[9]['point'])) ? $subjective_result[9]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[10]['subject'])) ? $subjective_result[10]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[10]['number'])) ? $subjective_result[10]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[10]['point'])) ? $subjective_result[10]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[11]['subject'])) ? $subjective_result[11]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[11]['number'])) ? $subjective_result[11]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[11]['point'])) ? $subjective_result[11]['point'] : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo (!empty($subjective_result[12]['subject'])) ? $subjective_result[12]['subject'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[12]['number'])) ? $subjective_result[12]['number'] : ""; ?></td>
                                    <td style="text-align: center;"><?php echo (!empty($subjective_result[12]['point'])) ? $subjective_result[12]['point'] : ""; ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Co-Curricular Activities</th>
                        <td>
                            <?php
                            if(!empty($result[0]->co_curricular_activities)){ 
                                $co_curricular_activities = json_decode($result[0]->co_curricular_activities,true);
                                if(is_array($co_curricular_activities)){
                                    foreach($co_curricular_activities as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                        <th>Hobby</th>
                        <td>
                            <?php
                            if(!empty($result[0]->hobby)){ 
                                $hobby = json_decode($result[0]->hobby,true);
                                if(is_array($hobby)){
                                    foreach($hobby as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                        <th>Student Category</th>
                        <td><?php echo (!empty($result[0]->student_type)) ? filter($result[0]->student_type) : ""; ?></td>
                    </tr>
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">All Participation</h3></th>
                    </tr>
                    <tr>
                        
                        <th>Literature and Culture</th>
                        <td>
                            <?php
                            if(!empty($result[0]->participate_culture)){ 
                                $participate_culture = json_decode($result[0]->participate_culture,true);
                                if(is_array($participate_culture)){
                                    foreach($participate_culture as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                        <th>Sports</th>
                        <td>
                            <?php
                            if(!empty($result[0]->participate_sports)){ 
                                $participate_sports = json_decode($result[0]->participate_sports,true);
                                if(is_array($participate_sports)){
                                    foreach($participate_sports as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                        <th>Creative and Honest</th>
                        <td>
                            <?php
                            if(!empty($result[0]->participate_creative)){ 
                                $participate_creative = json_decode($result[0]->participate_creative,true);
                                if(is_array($participate_creative)){
                                    foreach($participate_creative as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="6"><h3 style="margin: 0;">All Rewards / Achievement</h3></th>
                    </tr>
                    <tr>
                        
                        <th>Literature and Culture</th>
                        <td>
                            <?php
                            if(!empty($result[0]->achievement_culture)){ 
                                $achievement_culture = json_decode($result[0]->achievement_culture,true);
                                if(is_array($achievement_culture)){
                                    foreach($achievement_culture as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                        <th>Sports</th>
                        <td>
                            <?php
                            if(!empty($result[0]->achievement_sports)){ 
                                $achievement_sports = json_decode($result[0]->achievement_sports,true);
                                if(is_array($achievement_sports)){
                                    foreach($achievement_sports as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                        <th>Creative and Honest</th>
                        <td>
                            <?php
                            if(!empty($result[0]->achievement_creative)){ 
                                $achievement_creative = json_decode($result[0]->achievement_creative,true);
                                if(is_array($achievement_creative)){
                                    foreach($achievement_creative as $key => $value){
                                        echo filter($value).", ";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: center;">
                            <h3 style="margin: inherit;"><strong style="text-decoration: underline;">Class Teacher Sign</strong></h3>
                            <?php if(!empty($result[0]->class_teacher_sign)) { ?>
                            <img src="<?php echo site_url($result[0]->class_teacher_sign); ?>" class="img-thumbnail" alt="...">
                            <strong>Date: </strong><?php echo filter($result[0]->class_teacher_sign_date);?> <br />
                            <strong><?php echo filter($result[0]->class_teacher_name); ?></strong> <br />
                            <strong>NID: <?php echo filter($result[0]->class_teacher_nid); ?></strong> || <strong>Mobile: <?php echo filter($result[0]->class_teacher_mobile); ?></strong>
                            <?php }else { ?>
                            <div style="min-height: 100px;"></div>
                            <?php } ?>
                        </th>
                        <th colspan="3" style="text-align: center;">
                            <h3 style="margin: inherit;"><strong style="text-decoration: underline;">Principal Sign</strong></h3>
                            <?php if(!empty($result[0]->principal_sign)){ ?>
                            <img src="<?php echo site_url($result[0]->principal_sign); ?>" class="img-thumbnail" alt="...">
                            <strong>Date: </strong><?php echo filter($result[0]->principal_sign_date);?> <br />
                            <strong><?php echo filter($result[0]->principal_name); ?></strong> <br />
                            <strong>NID: <?php echo filter($result[0]->principal_nid); ?></strong> || <strong>Mobile: <?php echo filter($result[0]->principal_mobile); ?></strong>
                            <?php }else { ?>
                            <div style="min-height: 100px;"></div>
                            <?php } ?>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
</div>