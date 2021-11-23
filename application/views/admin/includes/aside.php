 <style>
    ul li a span.icon {
        margin-right: 20px;
        float: right;
    }
 </style>
 
<aside id="sidebar-wrapper">
    <div class="sidebar-nav">
        <h3 class="sidebar-brand"><a href="#">Admin <span>Panel</span></a></h3>
    </div>

    <nav>
        <ul class="sidebar-nav">
            <?php if(ck_menu("dashboard")){ ?>
            <li id="dashboard">
                <a href="<?php echo site_url('admin/dashboard'); ?>">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>
            <?php } ?>


            <?php if(ck_menu("header_menu")){ ?>
            <li id="header_menu" >
                <a href="#header" data-toggle="collapse">
                    <i class="fa fa-header"></i> Header
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="header" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('header/banner'); ?>">
                            <i class="fa fa-angle-right"></i> Banner
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('header/slider'); ?>">
                            <i class="fa fa-angle-right"></i> Slider
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('header/notice'); ?>">
                            <i class="fa fa-angle-right"></i> Notice
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('header/pages'); ?>">
                            <i class="fa fa-angle-right"></i> Pages
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('header/latest_news'); ?>">
                            <i class="fa fa-angle-right"></i> Latest News
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('header/imageGallery'); ?>">
                            <i class="fa fa-angle-right"></i> Image Gallery
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('header/videoGallery'); ?>">
                            <i class="fa fa-angle-right"></i> Video Gallery
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('feedback/feedback'); ?>">
                            <i class="fa fa-angle-right"></i> Feedback
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("speech_menu")){ ?>
            <li id="speech_menu">
                <a href="#speech" data-toggle="collapse">
                    <i class="fa fa-comment"></i> Speech
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="speech" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('header/speech/president_speech'); ?>">
                            <i class="fa fa-angle-right"></i> Chairman's Speech
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('header/speech/speech_of_gb_member'); ?>">
                            <i class="fa fa-angle-right"></i> Co-Chairman's Speech
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("registration_menu")){ ?>
            <li id="registration_menu">
                <a href="#registration_" data-toggle="collapse">
                    <i class="fa fa-graduation-cap"></i> Students
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="registration_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('registration/registration/student_registration'); ?>">
                            <i class="fa fa-angle-right"></i> Student Registration
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('registration/registration/all_registration'); ?>">
                            <i class="fa fa-angle-right"></i> All Registration
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('registration/registration'); ?>">
                            <i class="fa fa-angle-right"></i> Add New Student
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('registration/registration/allStudent'); ?>">
                            <i class="fa fa-angle-right"></i> All Students
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admission/admission/upgrade_student'); ?>">
                            <i class="fa fa-angle-right"></i> Upgrade Students
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            
                
            <li id="testimonial_menu">
                <a href="#testimonial" data-toggle="collapse">
                    <i class="fa fa-commenting"></i> Testimonial
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="testimonial" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('testimonial'); ?>">
                            <i class="fa fa-angle-right"></i> New Testimonial 
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('testimonial/allView'); ?>">
                            <i class="fa fa-angle-right"></i> All Testimonials
                        </a>
                    </li>
                </ul>
            </li>
            

            <li id="bank_menu">
                <a href="#bank" data-toggle="collapse">
                    <i class="fa fa-university"></i> Banking
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="bank" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/add_bank'); ?>">
                            <i class="fa fa-angle-right"></i> Add Bank
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo'); ?>">
                            <i class="fa fa-angle-right"></i> Add Account
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/all_account'); ?>">
                            <i class="fa fa-angle-right"></i> All Account
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/transaction'); ?>">
                            <i class="fa fa-angle-right"></i> Add Transaction
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/ledger'); ?>">
                            <i class="fa fa-angle-right"></i> Bank Ledger
                        </a>
                    </li>
                </ul>
            </li>
            

            <?php if(ck_menu("attendance_menu")){ ?>
            <li id="attendance_menu">
                <a href="#attendance" data-toggle="collapse">
                    <i class="fa fa-list"></i> Student Attendance
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="attendance" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('attendance/attendance'); ?>">
                            <i class="fa fa-angle-right"></i> Take Attendance
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('attendance/attendance/class_wise_report'); ?>">
                            <i class="fa fa-angle-right"></i> Class Wise Report
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("attendance_fine")){ ?>
            <li id="attendance_fine">
                <a href="#attendancefine" data-toggle="collapse">
                    <i class="fa fa-list"></i> Attendance Fine
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="attendancefine" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('attendancefine/attendancefine'); ?>">
                            <i class="fa fa-angle-right"></i> Fine
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('attendancefine/attendancefine/allfine'); ?>">
                            <i class="fa fa-angle-right"></i> All Fine
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("e_attendance_menu")){ ?>
            <li id="e_attendance_menu">
                <a href="#employee_att" data-toggle="collapse">
                    <i class="fa fa-list"></i> Attendance Report
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="employee_att" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('employee/attendance'); ?>">
                            <i class="fa fa-angle-right"></i> Employee Attendance
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('employee/attendance/student'); ?>">
                            <i class="fa fa-angle-right"></i> Student Attendance
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("library_menu")){ ?>
            <li id="library_menu">
                <a href="#library" data-toggle="collapse">
                    <i class="fa fa-money"></i> Library
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="library" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('library/library');?>">
                            <i class="fa fa-angle-right"></i> Add Book
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('library/library/all');?>">
                            <i class="fa fa-angle-right"></i> All Book
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("payment_menu")){ ?>
            <li id="payment_menu">
                <a href="#payment" data-toggle="collapse">
                    <i class="fa fa-money"></i> Payment
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="payment" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('payment/payment');?>">
                            <i class="fa fa-angle-right"></i> Field of Payment
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/payment/payment_set'); ?>">
                            <i class="fa fa-angle-right"></i> Set Payment Amount
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/payment/setting'); ?>">
                            <i class="fa fa-angle-right"></i> Month Settings
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/receieve_payment'); ?>">
                            <i class="fa fa-angle-right"></i> Recieve Payment
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/receieve_payment/class_wise_receive'); ?>">
                            <i class="fa fa-angle-right"></i> Class Wise Receive
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/payment_due'); ?>">
                            <i class="fa fa-angle-right"></i> Payment Due
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/payment_report'); ?>">
                            <i class="fa fa-angle-right"></i> Payment Report
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/payment_report/payment_recipt'); ?>">
                            <i class="fa fa-angle-right"></i> Payment Recipt
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('payment/payment_report/field_report'); ?>">
                            <i class="fa fa-angle-right"></i> Field Report
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("duesms")){ ?>
            <li id="duesms">
                <a href="<?php echo site_url('duesms/duesms'); ?>">
                    <i class="fa fa-money"></i> Due Payment SMS
                </a>
            </li>
            <?php } ?>


            <?php if(ck_menu("subject_menu")){ ?>
            <li id="subject_menu">
                <a href="#subject_" data-toggle="collapse">
                    <i class="fa fa-file-text"></i> Subject
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="subject_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('subject/subject/addSubjectName'); ?>">
                            <i class="fa fa-angle-right"></i> Add Subject Name
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('subject/subject'); ?>">
                            <i class="fa fa-angle-right"></i> Add Subject
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('subject/subject/allSubject'); ?>">
                            <i class="fa fa-angle-right"></i> All Subject
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("exam_menu")){ ?>
            <li id="exam_menu">
                <a href="#exam_" data-toggle="collapse">
                    <i class="fa fa-file-text"></i> Exam
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="exam_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('exam/exam/setNewExam'); ?>">
                            <i class="fa fa-angle-right"></i> Exam Name
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('exam/exam'); ?>">
                            <i class="fa fa-angle-right"></i> Add Exam
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('exam/exam/allExam'); ?>">
                            <i class="fa fa-angle-right"></i> All Exam
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("marks_menu")){ ?>
            <li id="marks_menu">
                <a href="#marks_" data-toggle="collapse">
                    <i class="fa fa-file-text"></i> Marks
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="marks_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('marks/marks'); ?>">
                            <i class="fa fa-angle-right"></i> Add Marks
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('marks/marks/all_marks'); ?>">
                            <i class="fa fa-angle-right"></i> All Marks
                        </a>
                    </li>
                    <!--<li>
                        <a href="<?php // echo site_url('marks/updateMarks'); ?>">
                            <i class="fa fa-angle-right"></i> Update Marks
                        </a>
                    </li>-->
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("result_menu")){ ?>
            <li id="result_menu">
                <a href="#result_" data-toggle="collapse">
                    <i class="fa fa-file-text"></i> Result
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="result_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('resultPublish'); ?>">
                            <i class="fa fa-angle-right"></i> PSC Results Publish
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('resultPublish/resultPublishSSC'); ?>">
                            <i class="fa fa-angle-right"></i> SSC Results Publish
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('resultPublish/publish_message'); ?>">
                            <i class="fa fa-angle-right"></i> Publish Message
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("statistics")){ ?>
            <li id="statistics">
                <a href="<?php echo site_url('statistics'); ?>">
                    <i class="fa fa-file-text"></i> Exam Statistics
                </a>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("tabulation_sheet")){ ?>
            <li id="tabulation_sheet">
                <a href="#tabulation" data-toggle="collapse">
                    <i class="fa fa-graduation-cap"></i> Tabulation Sheet
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="tabulation" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('tabulationSheet/primary_education'); ?>">
                            <i class="fa fa-angle-right"></i> Primary Tabulation
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('tabulationSheet/secondary_education'); ?>">
                            <i class="fa fa-angle-right"></i> Secondary Tabulation
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("ids-menu")){ ?>
            <li id="ids-menu">
                <a href="#ids_" data-toggle="collapse">
                    <i class="fa fa-graduation-cap"></i> ID Card
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="ids_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('identity'); ?>">
                            <i class="fa fa-angle-right"></i> ID Card
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('identity/validity'); ?>">
                            <i class="fa fa-angle-right"></i> Student Validity Date
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("admit")){ ?>
            <li id="admit">
                <a href="#admit_" data-toggle="collapse">
                    <i class="fa fa-file-text"></i> Admit Card
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="admit_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('admitCard'); ?>">
                            <i class="fa fa-angle-right"></i> Admit Generate
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admitCard/set_instruction'); ?>">
                            <i class="fa fa-angle-right"></i> Set Instruction
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("committee_menu")){ ?>
            <li id="committee_menu">
                <a href="#committee" data-toggle="collapse">
                    <i class="fa fa-users"></i> Committee
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="committee" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('committee/committee');?>">
                            <i class="fa fa-angle-right"></i> Add Member
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('committee/committee/all_view_member'); ?>">
                            <i class="fa fa-angle-right"></i> Show Member
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>


            <?php if(ck_menu("employee_menu")){ ?>
            <li id="employee_menu">
                <a href="#employee" data-toggle="collapse">
                    <i class="fa fa-male"></i> Employee
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="employee" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('employee/employee');?>">
                            <i class="fa fa-angle-right"></i> Add Employee
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('employee/employee/show_employee'); ?>">
                            <i class="fa fa-angle-right"></i> All Employee
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("salary_menu")){ ?>
            <li id="salary_menu">
                <a href="#salary" data-toggle="collapse">
                    <i class="fa">৳</i> Salary
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="salary" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('salary/salary');?>">
                            <i class="fa fa-angle-right"></i> Basic
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('salary/salary/incentive'); ?>">
                            <i class="fa fa-angle-right"></i> Incentive
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('salary/salary/bonus'); ?>">
                            <i class="fa fa-angle-right"></i> Bonus
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('salary/salary/deduction'); ?>">
                            <i class="fa fa-angle-right"></i> Deduction
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('salary/payment'); ?>">
                            <i class="fa fa-angle-right"></i> Payment
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('salary/payment/all_payment'); ?>">
                            <i class="fa fa-angle-right"></i> All Payment
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('salary/salary/salary_sheet');?>">
                            <i class="fa fa-angle-right"></i> Salary Sheet
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("sms_menu")){ ?>
            <li id="sms_menu">
                <a href="#sms" data-toggle="collapse">
                    <i class="fa fa-envelope-o"></i> Mobile SMS
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="sms" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('sms/sendSms');?>">
                            <i class="fa fa-angle-right"></i> Send SMS
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('sms/sendSms/send_custom_sms'); ?>">
                            <i class="fa fa-angle-right"></i> Custom SMS
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('sms/sendSms/sms_report'); ?>">
                            <i class="fa fa-angle-right"></i> SMS Report
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("income_menu")){ ?>
            <li id="income_menu">
                <a href="#income" data-toggle="collapse">
                    <i class="fa fa-money"></i> Income
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="income" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('income/infoView'); ?>">
                            <i class="fa fa-angle-right"></i> Field of Income
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('income/infoView/addIncome'); ?>" >
                            <i class="fa fa-angle-right"></i> New Income
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('income/infoView/showIncome'); ?>" >
                            <i class="fa fa-angle-right"></i> All Income
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("cost_menu")){ ?>
            <li id="cost_menu">
                <a href="#cost" data-toggle="collapse">
                    <i class="fa fa-money"></i> Cost
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="cost" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('cost/cost'); ?>">
                            <i class="fa fa-angle-right"></i> Field of Cost
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('cost/cost/newcost'); ?>">
                            <i class="fa fa-angle-right"></i> New Cost
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('cost/cost/allcost'); ?>">
                            <i class="fa fa-angle-right"></i> All Cost
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>


            <?php //if(ck_menu("cost_menu")){ ?>
            <li id="stock_reg_menu">
                <a href="#stock_reg" data-toggle="collapse">
                    <i class="fa fa-money"></i> Stock Register
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="stock_reg" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('stock_reg/stock'); ?>">
                            <i class="fa fa-angle-right"></i> Field of Stock Register
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('stock_reg/stock/new_stock_reg'); ?>">
                            <i class="fa fa-angle-right"></i> New Stock Register
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('stock_reg/stock/all_stock_reg'); ?>">
                            <i class="fa fa-angle-right"></i> All Stock Register
                        </a>
                    </li>
                </ul>
            </li>
            <?php //} ?>
            

            <?php if(ck_menu("report_menu")){ ?>
            <li id="report_menu">
                <a href="#report" data-toggle="collapse">
                    <i class="fa fa-money"></i> Report
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="report" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('report/cost_report');?>">
                            <i class="fa fa-angle-right"></i> Cost Report
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('report/balance_report');?>">
                            <i class="fa fa-angle-right"></i> Balance Sheet
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>


            <?php if(ck_menu("theme-menu")){ ?>
            <li id="theme-menu">
                <a href="#theme_" data-toggle="collapse">
                    <i class="fa fa-cogs"></i> Settings
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="theme_" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('theme/theme'); ?>">
                            <i class="fa fa-angle-right"></i> Image
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('theme/theme/contact_info'); ?>">
                            <i class="fa fa-angle-right"></i> Info
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("uploadDelete_menu")){ ?>
            <li id="uploadDelete_menu" >
                <a href="#upload_delete" data-toggle="collapse">
                    <i class="fa fa-cloud-upload"></i> Upload & Download
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="upload_delete" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('upload_delete/resultUpload'); ?>">
                            <i class="fa fa-angle-right"></i> Result
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('upload_delete/routineUpload'); ?>">
                            <i class="fa fa-angle-right"></i> Routine
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('upload_delete/syllabus'); ?>">
                            <i class="fa fa-angle-right"></i> Syllabus
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('upload_delete/magazine'); ?>">
                            <i class="fa fa-angle-right"></i> Magazine
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('upload_delete/leaveList'); ?>">
                            <i class="fa fa-angle-right"></i> Leave List
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('upload_delete/digitalContent'); ?>">
                            <i class="fa fa-angle-right"></i> Digital Content
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('upload_delete/academicCalendar'); ?>">
                            <i class="fa fa-angle-right"></i> Academic Calendar
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>


            <?php if(ck_menu("privilege-menu")){ ?>
            <li id="privilege-menu">
                <a href="<?php echo site_url('privilege/privilege'); ?>">
                    <i class="fa fa-user-plus"></i> Set Privilege
                </a>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("backup_menu")){ ?>
            <li id="backup_menu">
                <a href="#backup_menus" data-toggle="collapse">
                    <i class="fa fa-database"></i> Data Backup
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="backup_menus" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('data_backup'); ?>">
                            <i class="fa fa-angle-right"></i> Export
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('data_backup/import_data'); ?>">
                            <i class="fa fa-angle-right"></i> Import
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            
            <li>&nbsp;</li>
            <li>&nbsp;</li>
        </ul>
    </nav>
</aside>
