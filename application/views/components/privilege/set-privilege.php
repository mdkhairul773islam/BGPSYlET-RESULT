<style>
    .delete {color: red;}
    .view {color: green;}
    .edit {color: #EC971F;}
    .checkbox-inline,
    .checkbox label,
    .radio label {
        font-weight: bold;
        padding-left: 0;
    }
    .checkbox label:after,
    .radio label:after {
        content: '';
        display: table;
        clear: both;
    }
    .checkbox .cr,
    .radio .cr {
        border: 1px solid #a9a9a9;
        display: inline-block;
        border-radius: .25em;
        position: relative;
        width: 1.3em;
        height: 1.3em;
        float: left;
        margin-right: 5px;
    }
    .radio .cr {border-radius: 50%;}
    .checkbox .cr .cr-icon,
    .radio .cr .cr-icon {
        position: absolute;
        font-size: .8em;
        line-height: 0;
        top: 50%;
        left: 20%;
    }
    .radio .cr .cr-icon {margin-left: 0.04em;}
    .checkbox label input[type="checkbox"],
    .radio label input[type="radio"] {
        display: none;
    }
    .checkbox label input[type="checkbox"] + .cr > .cr-icon,
    .radio label input[type="radio"] + .cr > .cr-icon {
        transform: scale(3) rotateZ(-20deg);
        transition: all .3s ease-in;
        opacity: 0;
    }
    .checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
    .radio label input[type="radio"]:checked + .cr > .cr-icon {
        transform: scale(1) rotateZ(0deg);
        opacity: 1;
    }
    .checkbox label input[type="checkbox"]:disabled + .cr,
    .radio label input[type="radio"]:disabled + .cr {
        opacity: .5;
    }
    #progress{display: none ;}
    .checkbox-inline+.checkbox-inline, .checkbox-inline, 
    .radio-inline+.radio-inline {margin: 2px 15px 2px 0 !important;}
</style>
<div class="container-fluid">
    <div class="row">
	<?php echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title">
                    <h1 class="pull-left">Set Privilege</h1>
                    <img id="progress" class="pull-right" src="<?php echo site_url("private/images/loder.gif"); ?>" alt=""></span>
                </div>
            </div>
            <div class="panel-body">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Privilege  <span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="privilege" id="privilege" class="form-control" required>
                                <option value="">Select Privilege</option>
                                <?php foreach ($privileges as $privilege) { ?>
                                <option value="<?php echo $privilege->privilege; ?>"><?php echo filter($privilege->privilege); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">User Name<span class="req">*</span></label>
                        <div class="col-md-5">
                            <select name="user_id" id="user_id" class="form-control" required> </select>
                        </div>
                        <div class="col-md-12">
                            <hr style="margin-bottom: 0">
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr  class="active">
                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Menu Item</th>
                                <th colspan="3" class="text-center">Navbar Items</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row Start here -->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu" value="dashboard">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Dashboard</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
    
                            <!-- Header Menu start here -->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu" value="header_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Header Menu</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="banner">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Banner
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="slider">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Slider
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="add-new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Notice
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="pages">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Pages
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="add">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Latest News
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="imageGallery">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Image Gallery
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="videoGallery">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Video Gallery
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="header_menu" data-item="action" value="feedback">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Feedback
                                        </label>
                                    </div> 
                                </td>
                            </tr>
                            
    
                            <!-- Speech start here -->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="speech_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Speech</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="speech_menu" data-item="action" value="president_speech">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> President Speech
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="speech_menu" data-item="action" value="gb_member_speech">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Speech of GB Member
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-menu="speech_menu" data-item="action" value="principal_speech">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Principal
                                      </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Student start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu"  value="registration_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Student</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="registration_menu" data-item="action" value="add-new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> New Student
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="registration_menu" data-item="action" value="all">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Student
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="registration_menu" data-item="action" value="up">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Upgrade Student
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="registration_menu" data-item="action" value="add">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Testimonial Generator
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="registration_menu" data-item="action" value="all_testomonial">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All testimonials
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Attendance start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu"  value="attendance_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Attendance</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="attendance_menu" data-item="action" value="add-new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Attendance
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="attendance_menu" data-item="action" value="all-rep">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Class Wise Report
                                        </label>
                                    </div>
                                </td>    
                            </tr>
                            
                            
                            <!--Attendance Fine start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu"  value="attendance_fine">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Attendance Fine</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="attendance_fine" data-item="action" value="add">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Fine
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="attendance_fine" data-item="action" value="all">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Fine
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--All Attendance start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="employee_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>All Attendance</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Payment start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu"  value="payment_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Payment</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="field">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Field of Payment
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="payment_set">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Set Payment Amount
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="setting">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Month Settings
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="receieve_payment">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Recieve Payment
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="class_receieve_payment">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Class Wise Receive
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="payment_due">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Payment Due
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="payment_report">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Payment Report
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="payment_recipt">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Payment Recipt
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="payment_menu" data-item="action" value="payment_field">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Field Report
                                        </label>
                                    </div>
                                </td>
                            </tr>
    
                            
                            <!--Due Payment SMS start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="duesms">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Due Payment SMS</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Subject start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="subject_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Subject</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Exam start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="exam_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Exam</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Marks start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="marks_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Marks</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Result start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="result_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Result</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Exam Statistics start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="statistics">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Exam Statistics</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Tabulation Sheet start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="tabulation">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Tabulation Sheet</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--ID Card start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="ids-menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>ID Card</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Admit Card start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="admit">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Admit Card</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                            
                            
                            <!--Admit Card start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu"  value="committee_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Committee</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="committee_menu" data-item="action" value="add-new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Member
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="committee_menu" data-item="action" value="all">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Show Member
                                        </label>
                                    </div>
                                </td>
                            </tr>                       
                         
                            
                            <!--Employee start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu"  value="employee_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Employee</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="employee_menu" data-item="action" value="add-new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Employee
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="employee_menu" data-item="action" value="all">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Employee
                                        </label>
                                    </div>
                                </td>
                            </tr>
     
                            
                            <!--Salary start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu"  value="salary_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Salary</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="salary_menu" data-item="action" value="salary">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Basic
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="salary_menu" data-item="action" value="incentive">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Incentive
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="salary_menu" data-item="action" value="bonus">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Bonus
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="salary_menu" data-item="action" value="deduction">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Deduction
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="salary_menu" data-item="action" value="payment">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Payment
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="salary_menu" data-item="action" value="all_payment">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Payment
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="salary_menu" data-item="action" value="sheet">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Salary Sheet
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            
                            <!-- Mobile SMS start here -->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu" value="sms_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Mobile SMS</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="sms_menu" data-item="action" value="send-sms">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Send SMS
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="sms_menu" data-item="action" value="custom-sms">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Custom SMS
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="sms_menu" data-item="action" value="sms-report">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> SMS Report
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Income start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu" value="income_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Income</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="income_menu" data-item="action" value="field">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Field of Income
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="income_menu" data-item="action" value="new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> New Income
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="income_menu" data-item="action" value="all">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Income
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Cost start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="cost_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Cost</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="cost_menu" data-item="action" value="field">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Field of Cost
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="cost_menu" data-item="action" value="new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> New Cost
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="cost_menu" data-item="action" value="all">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Cost
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Stock Register start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                        <input type="checkbox" data-item="menu" value="stock_reg_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Stock Register</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="stock_reg_menu" data-item="action" value="field">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Field of Stock Register
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="stock_reg_menu" data-item="action" value="new">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> New Stock Register
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="stock_reg_menu" data-item="action" value="room">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Room No
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="stock_reg_menu" data-item="action" value="all">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Stock Register
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Report start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="report_menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Report</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="report_menu" data-item="action" value="cost">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Cost Report
                                        </label>
                                    </div>
                                    <div class="deshitem checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="report_menu" data-item="action" value="balance">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Balance Sheet
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Setting start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="theme-menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Setting</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>                     
                         
                            
                            <!--Upload & Download start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu"  value="uploadDelete_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Upload & Download</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320">
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="add_new_result">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Result
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="all_result">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All  Result
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="add_new_routine">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Routine
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="all_routine">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Routine
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="add_new_syllabus">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Syllabus
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="all_syllabus">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Syllabus
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="add_new_magazine">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add  Magazine
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="all_magazine">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All  Magazine
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="add_new_leave">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Leave List
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="all_leave">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All  Leave List
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="add_new_content">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Content
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="all_content">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Content
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="add_new_calander">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> Add Academic Calendar
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-menu="uploadDelete_menu" data-item="action" value="all_calander">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> All Academic Calendar
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <!--Set Privilege start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                        <label>
                                            <input type="checkbox" data-item="menu" value="privilege-menu">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span>Set Privilege</span>
                                        </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr> 
                            
                            
                            <!--Data Backup start here-->
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-inline view">
                                      <label>
                                        <input type="checkbox" data-item="menu" value="backup_menu">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        <span>Data Backup</span>
                                      </label>
                                    </div>
                                </th>
                                <td colspan="3" width="320"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        // get all users
        $('select#privilege').on("change",function(){
            var data = [];
            var obj = { 'privilege' : $(this).val() };

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url("ajax/retrieveBy/users"); ?>",
                data : "condition=" + JSON.stringify(obj)
            }).done(function(response){
                var items = $.parseJSON(response);
                data.push('<option value="">Select User</option>');
                $.each(items,function(i,el){
                    data.push('<option value="'+ el.id+'">'+ el.username +'</option>');
                });

                $('select#user_id').html(data);

            });
        });

        $("#check_view").on('change', function(event) {
            if($(this).is(":checked")){
                $('input[type="checkbox"][value="view"]').prop({checked:true});
            }else{
                $('input[type="checkbox"][value="view"]').prop({checked:false});
            }
        });


        $("#check_edit").on('change', function(event) {
            if($(this).is(":checked")){
                $('input[type="checkbox"][value="edit"]').prop({checked:true});
            }else{
                $('input[type="checkbox"][value="edit"]').prop({checked:false});
            }
        });

        $("#check_delete").on('change', function(event) {
            if($(this).is(":checked")){
                $('input[type="checkbox"][value="delete"]').prop({checked:true});
            }else{
                $('input[type="checkbox"][value="delete"]').prop({checked:false});
            }
        });
        //Getting All Menu Name It's Just for use the data
        var input = $('input[type="checkbox"][data-item="menu"]');
        var list = [];
        $.each(input,function(index, el) {
            list.push($(el).val());
        });
        // console.log(list);

        //Set Privilege Data Start
        $('input[type="checkbox"]').on('change', function(event) {
            if($('select[name="privilege"]').val()!="" && $('select[name="user_id"]').val()!=""){
                $("#progress").fadeIn(300);
                //Collecting all data start here
                var access_item = {};

                var input = $('input[type="checkbox"]');

                $.each(input,function(index, el) {
                    if($(el).is(":checked")){
                        //access_item.push($(el).val());
                        if($(el).data("item")=="menu"){
                            //action data collection Start here
                            var ac_el = $('input[data-menu="'+$(el).val()+'"]');
                            var action_data = [];
                            $.each(ac_el,function(ac_i, ac_el) {
                                if($(ac_el).is(":checked")){
                                    action_data.push($(ac_el).val());
                                }
                            });
                            //action data collection End here
                            access_item[$(el).val()] = action_data;
                        }
                    }
                });
                //console.log(access_item);

                var access = JSON.stringify(access_item);
                //console.log(access);
                var privilege_name = $('select[name="privilege"]').val();
                var user_id = $('select[name="user_id"]').val();
                //Collecting All data end here


                //Sending Request Start here
                $.ajax({
                    url: '<?php echo site_url("privilege/privilege/set_privilege_ajax"); ?>',
                    type: 'POST',
                    data: {
                        privilege_name: privilege_name,
                        user_id : user_id ,
                        access : access
                    }
                })
                .done(function(response) {
                    //console.log(response);
                    $("#progress").fadeOut(300);
                });
                //Sending Request End here
            }else{
                alert("Please select a Privilege and User Name.");
                return false
            }
        });
        //Set Privilege Data End

        //Get Privilege Data Start
        $('select[name="user_id"]').on('change', function(event) {
            $('input[type="checkbox"]').prop({checked:false});
            //Sending Request Start here
            var user_id = $(this).val();
            var privilege_name = $('#privilege').val();
            $.ajax({
                url: '<?php echo site_url("privilege/privilege/get_privilege_ajax"); ?>',
                type: 'POST',
                data: {user_id : user_id , privilege_name:privilege_name}
            }).done(function(response) {
                if(response!="error"){
                    var data = $.parseJSON(response);
                    access = $.parseJSON(data.access);

                    //console.log(access);
                    $.each(access,function(access_index,access_val){
                        //console.log(access_index);
                        //data-item="menu" value="theme_ettings"
                        $('input[data-item="menu"][value="'+access_index+'"]').prop({checked: true});
                        $.each(access_val,function(action_in,action_val){
                            $('input[data-item="action"][data-menu="'+access_index+'"][value="'+action_val+'"]').prop({checked: true});
                        });
                        //$('input[name="'+el.module_name+'"][value="'+access_val+'"]').prop({checked: true});
                    });
                }
            });
            //Sending Request End here
        });
        //Get Privilege Data End
    });
</script>
