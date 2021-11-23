<style>
    ul li a span.icon {
        margin-right: 20px;
        float: right;
    }
</style>
<!-- sidebar -->
<aside id="sidebar-wrapper">
    <div class="sidebar-nav">
        <h3 class="sidebar-brand"><a href="#">Admin <span>Panel</span></a></h3>
    </div>
    
    <nav>
        <ul class="sidebar-nav">
            <?php if(ck_menu("dashboard")){ ?>
            <li id="dashboard">
                <a href="<?php echo site_url('user/dashboard'); ?>">
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
                    <?php if(ck_action("header_menu","banner")){ ?>
                        <li>
                            <a href="<?php echo site_url('header/banner'); ?>">
                                <i class="fa fa-angle-right"></i> Banner
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("header_menu","slider")){ ?>
                        <li>
                            <a href="<?php echo site_url('header/slider'); ?>">
                                <i class="fa fa-angle-right"></i> Slider
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("header_menu","add-new")){ ?>        
                        <li>
                            <a href="<?php echo site_url('header/notice'); ?>">
                                <i class="fa fa-angle-right"></i> Notice
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("header_menu","pages")){ ?>
                        <li>
                            <a href="<?php echo site_url('header/pages'); ?>">
                                <i class="fa fa-angle-right"></i> Pages
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("header_menu","add")){ ?>        
                        <li>
                            <a href="<?php echo site_url('header/latest_news'); ?>">
                                <i class="fa fa-angle-right"></i> Latest News
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("header_menu","imageGallery")){ ?>                            
                        <li>
                            <a href="<?php echo site_url('header/imageGallery'); ?>">
                                <i class="fa fa-angle-right"></i> Image Gallery
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("header_menu","videoGallery")){ ?>
                        <li>
                            <a href="<?php echo site_url('header/videoGallery'); ?>">
                                <i class="fa fa-angle-right"></i> Video Gallery
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("header_menu","feedback")){ ?>
                        <li>
                            <a href="<?php echo site_url('feedback/feedback'); ?>">
                                <i class="fa fa-angle-right"></i> Feedback
                            </a>
                        </li>
                    <?php } ?>
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
                    <?php if(ck_action("speech_menu","president_speech")){ ?>
                        <li>
                            <a href="<?php echo site_url('header/speech/president_speech'); ?>">
                                <i class="fa fa-angle-right"></i> Chairman's Speech
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("speech_menu","gb_member_speech")){ ?>
                        <li>
                            <a href="<?php echo site_url('header/speech/speech_of_gb_member'); ?>">
                                <i class="fa fa-angle-right"></i> Co-Chairman's Speech 
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("speech_menu","principal_speech")){ ?>
                        <li>
                            <a href="<?php echo site_url('header/speech'); ?>">
                                <i class="fa fa-angle-right"></i> Principal
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>


            <?php if(ck_menu("registration_menu")){ ?> 
            <li id="registration_menu">
                <a href="#student" data-toggle="collapse">
                    <i class="fa fa-graduation-cap"></i> Student 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="student" class="sidebar-nav collapse">
                    <?php if(ck_action("registration_menu","student_registration")){ ?>
                    <li>
                        <a href="<?php echo site_url('students/student_registration'); ?>">
                            <i class="fa fa-angle-right"></i> Student Registration
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("registration_menu","all_registration")){ ?>
                    <li>
                        <a href="<?php echo site_url('students/all_registration'); ?>">
                            <i class="fa fa-angle-right"></i> All Registration
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("registration_menu","add-new")){ ?>
                    <li>
                        <a href="<?php echo site_url('students/studentInfo'); ?>">
                            <i class="fa fa-angle-right"></i> New Student
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("registration_menu","all")){ ?>
                    <li>
                        <a href="<?php echo site_url('students/admission_view'); ?>">
                            <i class="fa fa-angle-right"></i> All Student's
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("registration_menu","up")){ ?>
                        <li>
                            <a href="<?php echo site_url('students/upgrade_student'); ?>">
                                <i class="fa fa-angle-right"></i> Upgrade Student
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("registration_menu","add")){ ?>             
                        <li>
                            <a href="<?php echo site_url('testimonial'); ?>">
                                <i class="fa fa-angle-right"></i> Testimonial Generator
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("registration_menu","all_testomonial")){ ?>
                        <li>
                            <a href="<?php echo site_url('testimonial/allView'); ?>">
                                <i class="fa fa-angle-right"></i> All testimonials
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("attendance_menu")){ ?>
            <li id="attendance_menu">
                <a href="#attendance" data-toggle="collapse">
                    <i class="fa fa-check-square-o"></i>
                    Student Attendance 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="attendance" class="sidebar-nav collapse">
                    <?php if(ck_action("attendance_menu","add-new")){ ?>
                        <li>
                            <a href="<?php echo site_url('attendance/attendance'); ?>">
                                <i class="fa fa-angle-right"></i> Add Attendance
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("attendance_menu","all-rep")){ ?>    
                        <li>
                            <a href="<?php echo site_url('attendance/attendance/student_report'); ?>">
                                <i class="fa fa-angle-right"></i> Class Wise Report
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("attendance_fine")){ ?>
            <li id="attendance_fine">
                <a href="#attendancefine" data-toggle="collapse">
                    <i class="fa fa-check-square-o"></i> Attendance Fine
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="attendancefine" class="sidebar-nav collapse">
                    <?php if(ck_action("attendance_fine","add")){ ?>
                        <li>
                            <a href="<?php echo site_url('attendancefine/attendancefine'); ?>">
                                <i class="fa fa-angle-right"></i> Fine
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("attendance_fine","all")){ ?>
                        <li>
                            <a href="<?php echo site_url('attendancefine/attendancefine/allfine'); ?>">
                                <i class="fa fa-angle-right"></i> All Fine
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        
        
            <?php if(ck_menu("e_attendance_menu")){ ?>
            <li id="employee_menu">
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
                    <?php if(ck_action("library_menu","add")){ ?>
                    <li>
                        <a href="<?php echo site_url('library/library');?>">
                            <i class="fa fa-angle-right"></i> Add Book
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("library_menu","all")){ ?>
                    <li>
                        <a href="<?php echo site_url('library/library/all');?>">
                            <i class="fa fa-angle-right"></i> All Book
                        </a>
                    </li>
                    <?php } ?>
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
                    <?php if(ck_action("payment_menu","field")){ ?>    
                        <li>
                            <a href="<?php echo site_url('payment/payment');?>">
                                <i class="fa fa-angle-right"></i> Field of Payment
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","payment_set")){ ?>
                        <li>
                            <a href="<?php echo site_url('payment/payment/payment_set'); ?>">
                                <i class="fa fa-angle-right"></i> Set Payment Amount
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","setting")){ ?>    
                        <li>
                            <a href="<?php echo site_url('payment/payment/setting'); ?>">
                                <i class="fa fa-angle-right"></i> Month Settings
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","receieve_payment")){ ?>
                       <li>
                            <a href="<?php echo site_url('payment/receieve_payment');?>">
                                <i class="fa fa-angle-right"></i> Recieve Payment
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","class_receieve_payment")){ ?>
                        <li>
                            <a href="<?php echo site_url('payment/receieve_payment/class_wise_receive'); ?>">
                                <i class="fa fa-angle-right"></i> Class Wise Receive
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","payment_due")){ ?>
                        <li>
                            <a href="<?php echo site_url('payment/payment_due'); ?>">
                                <i class="fa fa-angle-right"></i> Payment Due
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","payment_report")){ ?>    
                        <li>
                            <a href="<?php echo site_url('payment/payment_report'); ?>">
                                <i class="fa fa-angle-right"></i> Payment Report
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","payment_recipt")){ ?>    
                        <li>
                            <a href="<?php echo site_url('payment/payment_report/payment_recipt'); ?>">
                                <i class="fa fa-angle-right"></i> Payment Recipt
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("payment_menu","payment_field")){ ?>    
                        <li>
                            <a href="<?php echo site_url('payment/payment_report/field_report'); ?>">
                                <i class="fa fa-angle-right"></i> Field Report
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("duesms")){ ?>
            <li id="duesms">
                <a href="<?php echo site_url('duesms/duesms'); ?>">
                    <i class="fa fa-database"></i> Due Payment SMS
                </a>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("subject_menu")){ ?>
            <li id="subject_menu">
                <a href="<?php echo site_url('subject/subject'); ?>">
                    <i class="fa fa-file-text"></i> Subject
                </a>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("exam_menu")){ ?>
            <li id="exam_menu">
                <a href="<?php echo site_url('exam/exam'); ?>">
                    <i class="fa fa-file-text"></i> Exam
                </a>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("marks_menu")){ ?>
            <li id="marks_menu">
                <a href="<?php echo site_url('marks/marks'); ?>">
                    <i class="fa fa-file-text"></i> Marks
                </a>
            </li>                
            <?php } ?>
            
            
            <?php if(ck_menu("result_menu")){ ?>
            <li id="result_menu">
                <a href="<?php echo site_url('resultPublish'); ?>">
                    <i class="fa fa-file-text"></i> Result
                </a>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("statistics")){ ?>
            <li id="statistics">
                <a href="<?php echo site_url('statistics'); ?>">
                    <i class="fa fa-file-text"></i> Exam Statistics
                </a>
             </li>
            <?php } ?>
            
            
            <?php if(ck_menu("tabulation")){ ?>
            <li id="tabulation">
                <a href="<?php echo site_url('tabulationSheet'); ?>">
                    <i class="fa fa-graduation-cap"></i> Tabulation Sheet
                </a>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("ids-menu")){ ?>
            <li id="ids-menu">
                <a href="<?php echo site_url('identity'); ?>">
                    <i class="fa fa-graduation-cap"></i> ID Card
                </a>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("admit")){ ?>
            <li id="admit">
                <a href="<?php echo site_url('admitCard'); ?>">
                    <i class="fa fa-graduation-cap"></i> Admit Card
                </a>
            </li>
            <?php } ?>   


            <?php if(ck_menu("committee_menu")){ ?>
            <li id="committee_menu">
                <a href="#committee" data-toggle="collapse">
                    <i class="fa fa-users"></i> Committee 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="committee" class="sidebar-nav collapse">
                    <?php if(ck_action("committee_menu","add-new")){ ?>
                        <li>
                            <a href="<?php echo site_url('committee/committee');?>">
                                <i class="fa fa-angle-right"></i> Add Member
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("committee_menu","all")){ ?>
                        <li>
                            <a href="<?php echo site_url('committee/committee/all_view_member'); ?>">
                                <i class="fa fa-angle-right"></i> All Member
                            </a>
                        </li>
                    <?php } ?>
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
                    <?php if(ck_action("employee_menu","add-new")){ ?>
                        <li>
                            <a href="<?php echo site_url('employee/employee');?>">
                                <i class="fa fa-angle-right"></i> Add Employee
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("employee_menu","all")){ ?>
                        <li>
                            <a href="<?php echo site_url('employee/employee/show_employee'); ?>">
                                <i class="fa fa-angle-right"></i> View Employee
                            </a>
                        </li>
                    <?php } ?>    
                </ul>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("salary_menu")){ ?>
            <li id="salary_menu">
                <a href="#salary" data-toggle="collapse">
                    <i class="fa fa-money"></i> Salary
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="salary" class="sidebar-nav collapse">
                    <?php if(ck_action("salary_menu","salary")){ ?>
                        <li>
                            <a href="<?php echo site_url('salary/salary'); ?>">
                                <i class="fa fa-angle-right"></i> Basic
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("salary_menu","incentive")){ ?>
                        <li>
                            <a href="<?php echo site_url('salary/salary/incentive'); ?>">
                                <i class="fa fa-angle-right"></i> Incentive
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("salary_menu","bonus")){ ?>    
                        <li>
                            <a href="<?php echo site_url('salary/salary/bonus'); ?>">
                                <i class="fa fa-angle-right"></i> Bonus
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("salary_menu","deduction")){ ?>    
                        <li>
                            <a href="<?php echo site_url('salary/salary/deduction');?>">
                                <i class="fa fa-angle-right"></i> Deduction
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("salary_menu","payment")){ ?>    
                        <li>
                            <a href="<?php echo site_url('salary/payment'); ?>">
                                <i class="fa fa-angle-right"></i> Payment
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("salary_menu","all_payment")){ ?>    
                        <li>
                            <a href="<?php echo site_url('salary/payment/all_payment'); ?>">
                                <i class="fa fa-angle-right"></i> All Payment
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("salary_menu","sheet")){ ?>    
                        <li>
                            <a href="<?php echo site_url('salary/salary/salary_sheet');?>">
                                <i class="fa fa-angle-right"></i> Salary Sheet
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>        
            <?php } ?>
            
                
            <?php if(ck_menu("sms_menu")){ ?>
            <li id="sms_menu">
                <a href="#sms" data-toggle="collapse">
                    <i class="fa fa-envelope-o"></i>
                    Mobile SMS 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="sms" class="sidebar-nav collapse">
                    <?php if(ck_action("sms_menu","send-sms")){ ?>
                        <li>
                            <a href="<?php echo site_url('sms/sendSms');?>">
                                <i class="fa fa-angle-right"></i> Send SMS
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("sms_menu","custom-sms")){ ?>
                        <li>
                            <a href="<?php echo site_url('sms/sendSms/send_custom_sms'); ?>">
                                <i class="fa fa-angle-right"></i> Custom SMS
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("sms_menu","sms-report")){ ?>    
                        <li>
                            <a href="<?php echo site_url('sms/sendSms/sms_report'); ?>">
                                <i class="fa fa-angle-right"></i> SMS Report
                            </a>
                        </li>
                    <?php } ?>
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
                    <?php if(ck_action("income_menu","field")){ ?>
                        <li>
                            <a href="<?php echo site_url('income/infoView'); ?>">
                                <i class="fa fa-angle-right"></i> Field of Income
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("income_menu","new")){ ?>
                        <li>
                            <a href="<?php echo site_url('income/infoView/addIncome'); ?>">
                                <i class="fa fa-angle-right"></i> New Income
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("income_menu","all")){ ?>
                        <li>
                            <a href="<?php echo site_url('income/infoView/showIncome'); ?>">
                                <i class="fa fa-angle-right"></i> All Income
                            </a>
                        </li>
                    <?php } ?>
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
                    <?php if(ck_action("cost_menu","field")){ ?>
                        <li>
                            <a href="<?php echo site_url('cost/cost'); ?>">
                                <i class="fa fa-angle-right"></i> Field of Cost
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("cost_menu","new")){ ?>    
                        <li>
                            <a href="<?php echo site_url('cost/cost/newcost'); ?>">
                                <i class="fa fa-angle-right"></i> New Cost
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("cost_menu","all")){ ?>    
                        <li>
                            <a href="<?php echo site_url('cost/cost/allcost'); ?>">
                                <i class="fa fa-angle-right"></i> All Cost
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("report_menu")){ ?>
            <li id="report_menu">
                <a href="#report_list" data-toggle="collapse">
                    <i class="fa fa-money"></i> Report
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="report_list" class="sidebar-nav collapse">
                    <?php if(ck_action("report_menu","cost")){ ?>
                        <li>
                            <a href="<?php echo site_url('report/cost_report'); ?>">
                                <i class="fa fa-angle-right"></i> Cost Report
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("report_menu","balance")){ ?>    
                        <li>
                            <a href="<?php echo site_url('report/balance_report'); ?>">
                                <i class="fa fa-angle-right"></i> Balance Sheet
                            </a>
                        </li>
                    <?php } ?>    
                </ul>
            </li>
            <?php } ?>


            <?php if(ck_menu("stock_reg_menu")){ ?> 
            <li id="stock_reg_menu">
                <a href="#stock_reg" data-toggle="collapse">
                    <i class="fa fa-money"></i> Stock Regsister
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="stock_reg" class="sidebar-nav collapse">
                    <?php if(ck_action("stock_reg_menu","field")){ ?>
                    <li>
                        <a href="<?php echo site_url('stock_reg/stock'); ?>">
                            <i class="fa fa-angle-right"></i> Field of Stock Register
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("stock_reg_menu","new")){ ?>    
                    <li>
                        <a href="<?php echo site_url('stock_reg/stock/new_stock_reg'); ?>">
                            <i class="fa fa-angle-right"></i> New Stock Register
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("stock_reg_menu","room")){ ?>    
                    <li>
                        <a href="<?php echo site_url('stock_reg/stock/room'); ?>">
                            <i class="fa fa-angle-right"></i> Room No
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(ck_action("stock_reg_menu","all")){ ?>    
                    <li>
                        <a href="<?php echo site_url('stock_reg/stock/all_stock_reg'); ?>">
                            <i class="fa fa-angle-right"></i> New Stock Register
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            

            <?php if(ck_menu("uploadDelete_menu")){ ?>
            <li id="uploadDelete_menu" >
                <a href="#upload_delete" data-toggle="collapse">
                    <i class="fa fa-cloud-upload"></i> 
                    Upload & Download 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="upload_delete" class="sidebar-nav collapse">
                    <?php if(ck_action("uploadDelete_menu","add_new_result")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/resultUpload'); ?>">
                                <i class="fa fa-angle-right"></i> Add Result
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","all_result")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/resultUpload/all_result_view'); ?>">
                                <i class="fa fa-angle-right"></i> All Result
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","add_new_routine")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/routineUpload'); ?>">
                                <i class="fa fa-angle-right"></i> Add Routine
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","all_routine")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/routineUpload/all_routine_view'); ?>">
                                <i class="fa fa-angle-right"></i> All Routine
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","add_new_syllabus")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/syllabus'); ?>">
                                <i class="fa fa-angle-right"></i> Add Syllabus
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","all_syllabus")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/syllabus/all_syllabus_view'); ?>">
                                <i class="fa fa-angle-right"></i> All Syllabus
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","add_new_magazine")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/magazine'); ?>">
                                <i class="fa fa-angle-right"></i> Add Magazine
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","all_magazine")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/magazine/all_magazine_view'); ?>">
                                <i class="fa fa-angle-right"></i> All Magazine
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","add_new_leave")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/leaveList'); ?>">
                                <i class="fa fa-angle-right"></i> Add Leave List
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","all_leave")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/leaveList/all_leaveList_view'); ?>">
                                <i class="fa fa-angle-right"></i> All Leave List
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","add_new_content")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/digitalContent'); ?>">
                                <i class="fa fa-angle-right"></i> Add Content
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","all_content")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/digitalContent/all_digitalContent_view'); ?>">
                                <i class="fa fa-angle-right"></i> All  Content
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","add_new_calander")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/academicCalendar'); ?>">
                                <i class="fa fa-angle-right"></i> Add Academic Calendar
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(ck_action("uploadDelete_menu","all_calander")){ ?>    
                        <li>
                            <a href="<?php echo site_url('upload_delete/academicCalendar/all_academicCalendar_view'); ?>">
                                <i class="fa fa-angle-right"></i> All Academic Calendar
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
            
                
            <?php if(ck_menu("privilege-menu")){ ?>
            <li id="privilege-menu">
                <a href="<?php echo site_url('privilege/privilege'); ?>">
                    <i class="fa fa-database"></i> Set Privilege
                </a>
            </li>
            <?php } ?>
            
            
            <?php if(ck_menu("backup_menu")){ ?>
            <li id="backup_menu">
                <a href="<?php echo site_url('data_backup'); ?>">
                    <i class="fa fa-database"></i> Data Backup
                </a>
            </li>            
            <?php } ?>
        </ul>
    </nav>
</aside>