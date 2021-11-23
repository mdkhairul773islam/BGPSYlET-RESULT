<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />
<style>
    @media print{
        aside, nav, .none, .panel-heading, .panel-footer { display: none !important;}
        .panel {
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .hide {display: block !important;}
        .title {font-size: 25px;}
    }
</style>
<div class="container-fluid" ng-controller="attendanceCtrl" ng-cloak>
    <div class="row">
    <?php echo $confirmation; ?>
    <?php echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default none">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">
                        <span class="pull-left" id="sort_show" title="Rearrange">
                            <i class="fa fa-th-list fa-2x" aria-hidden="true"></i>
                        </span>
                        &nbsp;&nbsp;All Attendance
                    </h1>
                    
                    <div class="pull-right">
                        <div class="btn btn-success" data-toggle="modal" data-target="#myModal">Import File</div>
                        <div id="demoFile" class="btn btn-default" onclick="downloadFile()">Download Demo File</div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="input-group date">
                                    <input type="text" name="search[from]" class="form-control" placeholder="Date From">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="input-group date">
                                    <input type="text" name="search[to]" class="form-control" placeholder="Date To">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="search[department]" class="form-control selectpicker" data-live-search="true">
                                    <option value="">Select Department</option>
                                    <?php foreach($department as $value){ ?>
                                    <option value="<?php echo $value->department; ?>"><?php echo $value->department; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="search[ac_id]" class="form-control selectpicker" data-live-search="true">
                                    <option value="">Select AC ID</option>
                                    <?php foreach($names as $value){ ?>
                                    <option value="<?php echo $value->ac_id; ?>"><?php echo $value->name; ?>- (<?php echo $value->ac_id; ?>)</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="search[type]" class="form-control selectpicker" data-live-search="true">
                                    <option value="" selected disabled>Type</option>
                                    <option value="late">Late</option>
                                    <option value="early">Early</option>
                                    <option value="absent">Absent</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="submit" name="show" value="Show" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

        <?php if(!empty($info)){ ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title ">
                    <span class="pull-left" id="sort_show" title="Rearrange">
                        <i class="fa fa-th-list fa-2x" aria-hidden="true"></i>
                    </span>
                    <h1 class="pull-left">&nbsp;&nbsp;All Attendance List</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i> Print
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <!-- Print banner -->
                <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                
                <form action="" method="POST">
                    <div class="table-responsive">
                       <table class="table table-bordered">
                           <tr>
                               <th>#</th>
                               <th>Date</th>
                               <?php if(!empty($_POST["search"]["department"]) && ($_POST["search"]["department"] == 'Teachers')){ ?>
                               
                               <th>EMP ID</th>
                               
                               <?php } ?>
                               <th>AC ID</th>
                               <th>Name</th>
                               <th>On Duty</th>
                               <th>Off Duty</th>
                               <th>Clock In</th>
                               <th>Clock Out</th>
                               <th>Late</th>
                               <th>Early</th>
                               <th>Absent</th>
                               <th>Work Time</th>
                               <th>Department</th>
                               <th>N Days</th>
                               <th>Holiday</th>
                               <th>Att. Time</th>
                           </tr>
                           <?php foreach($info as $key => $value){ ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value->date; ?></td>
                                <?php if(!empty($_POST["search"]["department"]) && ($_POST["search"]["department"] == 'Teachers')){ ?>
                                <td><?php echo $value->emp_id; ?></td>
                                <?php } ?>
                                <td>
                                    <?=$value->ac_id?>
                                    <input type="hidden" name="ac_id[]" value="<?=$value->ac_id?>"> 
                                    <input type="hidden" name="type" value="<?=$value->department?>"> 
                                </td>
                                <td><?php echo $value->name; ?></td>
                                <td><?php echo $value->on_duty; ?></td>
                                <td><?php echo $value->off_duty; ?></td>
                                <td><?php echo $value->clock_in; ?></td>
                                <td><?php echo $value->clock_out; ?></td>
                                <td><?php echo $value->late; ?></td>
                                <td><?php echo $value->early; ?></td>
                                <td><?php echo $value->absent; ?></td>
                                <td><?php echo $value->work_time; ?></td>
                                <td><?php echo $value->department; ?></td>
                                <td><?php echo $value->ndays; ?></td>
                                <td><?php echo $value->holiday; ?></td>
                                <td><?php echo $value->att_time; ?></td>
                            </tr>
                           <?php } ?>
                        </table>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Message</label>
                        <textarea name="msg" class="form-control" rows="8" placeholder="Write Your Message"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Send" name="send" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Import File</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('employee/attendance/importEmployeeData', ['class' => 'form-horizontal']); ?>
        
        <div class="form-group">
            <label class="control-label col-md-2">Import <span class="req">*</span></label>
            <div class="col-md-8">
                <input type="file" name="file" class="form-control" required>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-md-10 text-right">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </div>
        </div>
        
        <?php echo form_close(); ?>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script>
    $('.date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    
    function downloadFile (){
        window.location.href = "<?php echo site_url('private/employee-attendance.csv');?>";
    }
</script>