<style>
    ul li a span.icon{
        margin-right: 20px;
        float: right;
    }
</style>

<!-- Sidebar -->
<aside id="sidebar-wrapper">
    <div class="sidebar-nav">
        <h3 class="sidebar-brand"><a href="#">Admin <span>Panel</span></a></h3>
    </div>
    <nav>
        <ul class="sidebar-nav">
            <li id="dashboard">
                <a href="<?php echo site_url('super/dashboard'); ?>">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>


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
                </ul>
            </li>


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
                    <li>
                        <a href="<?php echo site_url('header/speech'); ?>">
                            <i class="fa fa-angle-right"></i> Principal
                        </a>
                    </li>
                </ul>
            </li>
            
                
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
            
            
            <li id="registration_menu">
                <a href="<?php echo site_url('registration/registration'); ?>">
                    <i class="fa fa-file-text"></i> Registration
                </a>
            </li>
            
            
            <li id="admission_menu">
                <a href="<?php echo site_url('admission/admission'); ?>">
                    <i class="fa fa-file-text"></i> Admission
                </a>
            </li>
            
            
            <li id="subject_menu">
                <a href="<?php echo site_url('subject/subject'); ?>">
                    <i class="fa fa-file-text"></i> Subject
                </a>
            </li>


            <li id="attendance_menu">
                <a href="#attendance" data-toggle="collapse">
                    <i class="fa fa-check-square-o"></i> Student Attendance 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="attendance" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('attendance/attendance'); ?>">
                            <i class="fa fa-angle-right"></i> Take Attendance
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('attendance/attendance/student_report'); ?>">
                            <i class="fa fa-angle-right"></i> Student Report
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('attendance/attendance/class_wise_report'); ?>">
                            <i class="fa fa-angle-right"></i> Class Wise Report
                        </a>
                    </li>
                </ul>
            </li>
            
            
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
            

            <li id="exam_menu">
                <a href="<?php echo site_url('exam/exam'); ?>">
                    <i class="fa fa-file-text"></i> Exam
                </a>
            </li>
            

            <li id="marks_menu">
                <a href="<?php echo site_url('marks/marks'); ?>">
                    <i class="fa fa-file-text"></i> Marks
                </a>
            </li>


            <li id="result_menu">
                <a href="<?php echo site_url('resultPublish'); ?>">
                    <i class="fa fa-file-text"></i> Result
                </a>
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


            <li id="student_menu">
                <a href="#student" data-toggle="collapse">
                    <i class="fa fa-graduation-cap"></i> Student 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="student" class="sidebar-nav collapse">
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


            <li id="admit">
                <a href="<?php echo site_url('admitCard'); ?>">
                    <i class="fa fa-file-text"></i> Admit Card
                </a>
            </li>
            
            
            <li id="certificate">
                <a href="<?php echo site_url('certificate'); ?>">
                    <i class="fa fa-file-text"></i> Certificate Management
                </a>
            </li>
            
            
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


            <li id="payment_menu">
                <a href="#payment" data-toggle="collapse">
                    <i class="fa fa-money"></i> Payment 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="payment" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('student_payment/payment');?>">
                            <i class="fa fa-angle-right"></i> Student's Payment
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('student_payment/payment/paymentHistory'); ?>">
                            <i class="fa fa-angle-right"></i> Payment History
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('student_payment/payment/monthly_payment_history'); ?>">
                            <i class="fa fa-angle-right"></i> Monthly Payment History
                        </a>
                    </li>
                </ul>
            </li>


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
                            <i class="fa fa-angle-right"></i> View Employee
                        </a>
                    </li>
                </ul>
            </li>
            
            
            <li id="bank_menu">
                <a href="#bank" data-toggle="collapse">
                    <i class="fa fa-university"></i> Bank 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="bank" class="sidebar-nav collapse">
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
                        <a href="<?php echo site_url('bank/bankInfo/searchViewTransaction'); ?>">
                            <i class="fa fa-angle-right"></i> Custom Search
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/allTransaction'); ?>">
                            <i class="fa fa-angle-right"></i> All Bank Transaction
                        </a>
                    </li>
                </ul>
            </li>


            <li id="cost_menu">
                <a href="#cost" data-toggle="collapse">
                    <i class="fa fa-money"></i> Cost 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="cost" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('cost/infoView'); ?>">
                            <i class="fa fa-angle-right"></i> Add Cost
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('cost/infoView/showCost'); ?>">
                            <i class="fa fa-angle-right"></i> Show Cost
                        </a>
                    </li>
                </ul>
            </li>


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


            <li id="leave_menu">
                <a href="#leave" data-toggle="collapse">
                    <i class="fa fa-paper-plane"></i> Leave Management 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="leave" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('leave_management/leaveView');?>">
                            <i class="fa fa-angle-right"></i> Assign Leave
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('leave_management/leaveView/show');?>">
                            <i class="fa fa-angle-right"></i> Show Leave
                        </a>
                    </li>
                </ul>
            </li>


            <li id="theme_menu">
                <a href="#theme" data-toggle="collapse">
                    <i class="fa fa-cog"></i> Theme Settings 
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="theme" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('theme/themeSetting');?>">
                            <i class="fa fa-angle-right"></i> Change Logo
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('theme/themeSetting/siteTitle');?>">
                            <i class="fa fa-angle-right"></i> Change Site Name
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('theme/themeSetting/themeColor');?>">
                            <i class="fa fa-angle-right"></i> Change Theme Color
                        </a>
                    </li>
                </ul>
            </li>
            
            
            <li id="backup_menu">
                <a href="<?php echo site_url('data_backup'); ?>">
                    <i class="fa fa-database"></i> Data Backup
                </a>
            </li>


            <li id="">
                <a target="_blank" href="http://ndcm.edu.bd/webmail">
                   <i class="fa fa-envelope-o" aria-hidden="true"></i> Web Mail
                </a>
            </li>
        </ul>
    </nav>
</aside>