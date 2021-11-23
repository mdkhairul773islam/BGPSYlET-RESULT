<style>
    .student_img {
        justify-content: flex-end;
        text-align: right;
        display: flex;
        margin-top: 5px;
    }
    .student_img img {width: 50px;}
	@media print{
		aside, nav, .panel-heading, .panel-footer, .none, .nicescroll-rails {display: none !important;}
		.panel{
			border: 1px solid transparent;
			left: 0px;
			position: absolute;
			top: 0px;
			width: 100%;
		}
        .hide {display: block !important;}
	}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Student's Information</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body">
                <img class="img-responsive" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                <hr style="border-bottom: 1px solid #ccc;">

                <h3 class="hide text-center" style="margin: 0 0 20px 0;">Student's Information</h3>
				<div class="table-responsive">
				    <table class="table table-bordered">
					   <tr>
					       <th style="width: 200px;">Student ID</th>
					       <td colspan="3"><?= $student[0]->student_id; ?></td>
					   </tr>
					   <tr>
					       <th>Name of Student (in English)</th>
					       <td><?= $student[0]->name; ?></td>
					       <th style="width: 200px;">Name of Student (বাংলায়)</th>
					       <td><?= $student[0]->name_bn; ?></td>
					   </tr>
					   <tr>
					       <th>Father's Name</th>
					       <td><?= $student[0]->father_name; ?></td>
					       <th>Father's Profession</th>
					       <td><?= $student[0]->father_profession; ?></td>
					   </tr>
					   <tr>
					       <th>Father's Workplace</th>
					       <td><?= $student[0]->father_workplace;?></td>
					       <th>Father's Mobile Number</th>
					       <td><?= $student[0]->guardian_mobile;?></td>
					   </tr>
					   <tr>
					       <th>Father's Annual Income</th>
					       <td><?= $student[0]->father_annual_income;?></td>
					       <th>Mother's Name</th>
					       <td><?= $student[0]->mother_name;?></td>
					   </tr>
					   <tr>
					       <th>Mother's Profession</th>
					       <td><?= $student[0]->mother_profession;?></td>
					       <th>Mother Workplace</th>
					       <td><?= $student[0]->mother_workplace;?></td>
					   </tr>
					   <tr>
					       <th>Mother's Mobile Number</th>
					       <td><?= $student[0]->mother_mobile; ?></td>
					       <th>Mother's Annual Income</th>
					       <td><?= $student[0]->mother_annual_income;?></td>
					   </tr>
					   <tr>
					       <th>Date of Birth</th>
					       <td><?= $student[0]->birth_date; ?></td>
					       <th>Class</th>
					       <td><?= $student[0]->class;?></td>
					   </tr>
					   <tr>
					       <th>Roll</th>
					       <td><?= $student[0]->roll;?></td>
					       <th>Section</th>
					       <td><?= $student[0]->section;?></td>
					   </tr>
					   <tr>
					       <th>Year/Session</th>
					       <td><?= $student[0]->session;?></td>
					       <th>Group</th>
					       <td><?= $student[0]->group;?></td>
					   </tr>
					   <tr>
					       <th>Present Address</th>
					       <th><?= $student[0]->present_address; ?></th>
					       <th>Permanent Address</th>
					       <th><?= $student[0]->permanent_address;?></th>
					   </tr>
					   <tr>
					       <th>Name of the previous educational institution</th>
					       <td><?= $student[0]->previous_educational_institution;?></td>
   					       <th>Name and address of local guardian (With phone number)</th>
					       <th><?= $student[0]->local_guardian; ?></th>
					   </tr>
					   <tr>
					       <th>Personal No</th>
					       <td><?= $student[0]->personal_no;?></td>
					       <th>Designation</th>
					       <td><?= $student[0]->bgb_designation;?></td>
					   </tr> 
					   <tr>
					       <th>Last Unit</th>
					       <td><?= $student[0]->last_unit;?></td>
					       <th>Type</th>
					       <td><?= $student[0]->type;?></td>
					   </tr>
					</table>
				</div>
		        <div class="student_img">
			        <img class="img-responsive" src="<?php echo site_url('/public/students/'.$student[0]->photo); ?>">
		        </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
