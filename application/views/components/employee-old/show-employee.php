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
    }
</style>

<div class="container-fluid">
    <div class="row">
    <?php //echo "<pre>"; print_r($info); echo "</pre>"; ?>
    <?php echo $confirmation; ?>
        <div class="panel panel-default none">

            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>View Employee</h1>
                </div>
            </div>

            <div class="panel-body">

                <!--blockquote class="form-head">

                    <h4>View All Employee</h4>

                    <ol style="font-size: 14px;">
                        <li>1 . If you want to update <mark>employee</mark> then use the fields</li>
                        <li>2 . At last click on the <mark>Update</mark> button</li>
                    </ol>

                </blockquote>

                <hr-->

                <?php
                $attr=array("class"=>"form-horizontal");
                echo form_open("",$attr);?>
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
                   
                    <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" name="type_query" value="Show" class="btn btn-primary">
                    </div>
                    </div>
                    
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title ">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <h3 class="text-center hide">All Employee</h3>

            <div class="panel-body">
                
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Designation</th>
                        <th>Mobile Number</th>
                        <th>Status</th>
                        <th class="none">Action</th>
                    </tr>
                <?php foreach ($info as $key => $emp_info) {
                    $img_url=$emp_name=$mobile=$status=null;
                    if ($emp_info->employee_type=="teacher"){
                        $img_url=$emp_info->image;
                        $emp_name=$emp_info->name;
                    }
                    elseif($emp_info->employee_type=="staff"){
                        $img_url=$emp_info->employee_photo;
                        $emp_name=$emp_info->employee_name;
                    }
                    if ($emp_info->employee_status==1) {
                        $status="Available";
                    }
                    elseif ($emp_info->employee_status==0) {
                        $status="Not Available";
                    }

                 ?>
                    <tr>
                        <td> <?php echo $key+1; ?> </td>
                        <td> <?php echo $emp_info->employee_joining?> </td>
                        <td> <img src="<?php echo base_url($img_url); ?>" width="50px" height="50px" alt=""></td>
                        <td> <?php echo $emp_name;?> </td>
                        <td> <?php echo ucfirst($emp_info->employee_type);?> </td>
                        <td> <?php echo ucfirst(str_replace("_"," ",$emp_info->employee_designation));?></td>
                        <td> <?php echo $emp_info->employee_mobile?> </td>
                        <td> <?php echo $status;?> </td>
                        <td class="none" style="width: 216px;">
                            <a class="btn btn-primary" href="<?php echo site_url('employee/employee/profile');?>?mobile=<?php echo $emp_info->employee_mobile; ?>">View</a>
                            <a class="btn btn-warning" href="<?php echo site_url('employee/employee/edit_employee') ;?>?mobile=<?php echo $emp_info->employee_mobile; ?>">Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" href="?delete_token=<?php echo $emp_info->employee_mobile; ?>&img_url=<?php echo $img_url; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </table>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

