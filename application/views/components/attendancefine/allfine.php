<style>
    @media print{
        aside, nav, .none, .panel-heading, .panel-footer{
            display: none !important;
        }
        .panel{
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .hide{
            display: block !important;
        }
        .block-hide{
            display: none;
        }
    }
    .req {color: #f10; font-weight: bold;}
</style>
<?php echo $this->session->flashdata('confirmation'); ?>
<div class="panel panel-default none">
    <div class="panel-heading">
        <div class="panal-header-title pull-left">
            <h1>Search Fine</h1>
        </div>
    </div>

    <div class="panel-body">
        <!-- horizontal form -->
        <?php $attribute = array( 'class' => 'form-horizontal');
            echo form_open('', $attribute);
        ?>

        <div class="form-group">
            <label for="" class="col-md-2 control-label">Year <span class="req">*</span></label>
            <div class="col-md-5">
                <select name="year" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <?php for($i = 2020; $i <= date('Y')+1; $i++){ ?>
                    <option value="<?php echo $i; ?>"> <?php echo $i; ?></option>
                    <?php }  ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-md-2 control-label">Month <span class="req">*</span></label>
            <div class="col-md-5">
                <select name="month" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <?php foreach (config_item('month_with_number') as $key => $value) { ?>
                    <option value="<?php echo $key; ?>"> <?php echo $value; ?></option>
                    <?php }  ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-md-2 control-label">Class <span class="req">*</span></label>
            <div class="col-md-5">
                <select name="class" ng-model="class" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <?php foreach (config_item('classes') as $value) { ?>
                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="" class="col-md-2 control-label">Session <span class="req">*</span></label>
            
            <div class="col-md-5" ng-if="class =='Eleven' || class =='Twelve'">
                <select name="session" class="form-control" required>
                    <option value="">Select Session</option>
                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                    <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="col-md-5" ng-if="class !='Eleven' && class !='Twelve'">
                <select name="session" class="form-control" required>
                    <option value="">Select Session</option>
                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        
        <div class="form-group">
            <label for="" class="col-md-2 control-label">Section <span class="req">*</span></label>
            <div class="col-md-5">
                <select name="section" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <?php foreach (config_item('section') as $value) { ?>
                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-7">
            <div class="btn-group pull-right">
                <input class="btn btn-primary" type="submit" name="show" value="Show">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <div class="panel-footer">&nbsp;</div>
</div>
<?php if($students != NULL) { ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panal-header-title">
            <h1 class="pull-left">All Fine</h1>
            <a href="#" class="pull-right" style="margin-top: 0px; font-size: 14px;" onclick="window.print()">
                <i class="fa fa-print"></i> Print
            </a>
        </div>
    </div>

    <div class="panel-body">

        <div class="hide" style="margin-bottom: 20px;">
            <img class="img-responsive" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
            <hr style="border-bottom: 1px solid #ccc;">
        </div>

        <table class="table table-bordered">
            <tr>
                <th width="60">SL</th>
                <th>Student ID</th>
                <th>Name</th>
                <th width="120">Photo</th>
                <th>Class</th>
                <th>Section</th>
                <th>Month</th>
                <th>Present</th>
                <th>Absent</th>
                <th width="140">Fine</th>
            </tr>
            <?php
              $present = $absent = $singleFine = $totalFine = 0;
              $rolls = array();
              foreach ($students as $key => $value) {
            ?>
                <tr>
                    <td class="num-center"><?php echo $key+1; ?></td>
                    <td class="num-center"><?php echo $value->student_id;?></td>
                    <td><?php echo filter($value->name); ?></td>
                    <td><img src="<?php echo site_url('public/students/'.$value->photo); ?>" width="50" height="50" alt=""> </td>
                    <td><?php echo filter($value->class); ?></td>
                    <td><?php echo filter($value->section); ?></td>
                    <td><?php $months = config_item('month_with_number'); echo $months[$_POST['month']]; ?>
                    </td>
                    <td class="num-center">
                        <?php
                          foreach($results as $key=>$val){
                              $rolls = json_decode($val->roll,true);
                              if(in_array($value->roll,$rolls)){
                                  $present += 1;
                              }else{
                                  $absent += 1;
                              }
                          }
                          echo $present;
                        ?>
                    </td>
                    <td class="num-center"><?php echo $absent; ?></td>
                    <td class="num-center"><?php echo $singleFine = $absent * (($allFine) ? $allFine[0]->fine : 0.00);  $totalFine += $singleFine; ?></td>
                </tr>
            <?php $present = $absent = 0; } ?>
            <tr>
                <th colspan="9" class="text-right">Total</th>
                <th><?php printf("%.2f",$totalFine); ?></th>
            </tr>
        </table>
    </div>
    <div class="panel-footer">&nbsp;</div>
<?php } ?>
</div>
