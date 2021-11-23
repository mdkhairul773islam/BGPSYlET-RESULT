<style>
    @media print{
        aside{
            display: none !important;
        }
        nav{
            display: none;
        }
        .panel{
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .none{
            display: none;
        }
        .panel-heading{
            display: none;
        }
        
        .panel-footer{
            display: none;
        }
        .panel .hide{
            display: block !important;
        }
        .title{
            font-size:  25px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
    <?php //echo "<pre>"; print_r($emp_info); echo "</pre>"; ?>
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
                <div class="panal-header-title">
                    <h1 class="pull-left">Profile View</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body">
               
                <div class="row">

                    <div class="view-profile">
                        <div class="col-xs-2">
                            <figure class="pull-left">
                                <img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
                            </figure>
                        </div>

                        <div class="col-xs-8">
                            <div class="institute">
                                <h2 class="text-center title" style="margin-top: 10; font-weight: bold;">Border Guard Public School and College</h2>
                                <h3 class="text-center" style="margin: 0;">MYMENSINGH</h3>
                            </div>
                        </div>
                                
                        <div class="col-xs-2">
                            <figure class="pull-right">
                                <img class="img-responsive" src="<?php echo site_url($img_url); ?>" style="width: 100px; height: 100px;" alt="Photo not found!" class="img-responsive">
                            </figure>
                        </div>

                    </div>

                </div>

                <hr style="border-bottom: 1px solid #ccc;">

                <div class="row">

                     <h3 class="hide text-center" style="margin: 0 0 20px 0;">Employee Information</h3>
            
                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">ID</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->employee_emp_id; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Full Name</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_name; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Joining Date</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->employee_joining; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Gender</label>
                        <div class="col-xs-6">
                            <p><?php echo ucfirst($emp_info[0]->employee_gender); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Email</label>
                        <div class="col-xs-6">
                            <p><?php echo $email; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Mobile Number</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->employee_mobile; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Present Address</label>
                        <div class="col-xs-6">
                            <p><?php echo ucfirst($emp_info[0]->employee_present_address); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Permanent Address</label>
                        <div class="col-xs-6">
                            <p><?php echo ucfirst($emp_info[0]->employee_permanent_address); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Type</label>
                        <div class="col-xs-6">
                            <p><?php echo ucfirst($emp_info[0]->employee_type); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Designation</label>
                        <div class="col-xs-6">
                            <p><?php echo ucfirst(str_replace("_"," ",$emp_info[0]->employee_designation)); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Subject</label>
                        <div class="col-xs-6">
                            <p>
                                <?php
                                    if ($emp_info[0]->employee_subject!=null or $emp_info[0]->employee_subject!="") {
                                        echo ucfirst($emp_info[0]->employee_subject); 
                                    }
                                    else{
                                        echo "N/A";
                                    }
                                    
                                 ?>
                            </p>
                        </div>
                    </div>
                    <?php if ($emp_info[0]->employee_type=="teacher") { ?>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Username</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->username?></p>
                        </div>
                    </div>

                    <?php } ?>

                    <!--div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Password</label>
                        <div class="col-xs-6">
                            <p>1234</p>
                        </div>
                    </div-->

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Salary</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->employee_salary; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Status</label>
                        <div class="col-xs-6">
                            <p><?php echo $status; ?></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

