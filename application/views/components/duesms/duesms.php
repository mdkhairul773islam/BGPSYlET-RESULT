<style>

    .table-bordered>tbody>tr>td {
        line-height: 100% !important;
    }
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
    p span .sms{
        border: 1px solid transparent;
        width: 40px;
    }
    .req {color: #f10; font-weight: bold;}
</style>
<?php echo $this->session->flashdata('confirmation'); ?>
<div class="panel panel-default none">
    <div class="panel-heading">
        <div class="panal-header-title pull-left">
            <h1>Search By</h1>
        </div>
    </div>

    <div class="panel-body">
        <!-- horizontal form -->
        <?php $attribute = array( 'name' => '', 'class' => 'form-horizontal', 'id' => '' );
            echo form_open('', $attribute);
        ?>
        
        <div class="form-group">
            <label for="" class="col-md-2 control-label">Class<span class="req"> *</span></label>
            <div class="col-md-5">
                <select name="search[class]" ng-model="class" class="form-control" required >
                    <option value="" selected disabled>--Select class--</option>
                    <?php foreach (config_item('classes') as $value) { ?>
                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label">Year/Session <span class="req">*</span></label>
            
            <div class="col-md-5" ng-if="class =='Eleven' || class =='Twelve'">
                <select name="search[session]" class="form-control" required>
                    <option value="">--Select Session--</option>
                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                    <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="col-md-5" ng-if="class !='Eleven' && class !='Twelve'">
                <select name="search[session]" class="form-control" required>
                    <option value="">--Select Session--</option>
                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label">Section<span class="req"> *</span></label>
            <div class="col-md-5">
                <select name="search[section]"  class="form-control" required>
                    <option value="">-- Select Section--</option>
                    <?php foreach(config_item('section') as $key => $value){ ?>
                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="" class="col-md-2 control-label">Payment Year <span class="req">*</span></label>
            <div class="col-md-5">
                <select name="search[year]" class="form-control" required>
                    <option value="" selected disabled>-- Select Year --</option>
                    <?php
                    for ($i=2016; $i <= date('Y')+2 ; $i++) { ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
       <div class="form-group">
            <label class="col-md-2 control-label">Student ID </label>
            <div class="col-md-5">
                <input type="text" name="search[student_id]" ng-model="reg_id" class="form-control" placeholder="Student ID">
            </div>
        </div>
     
        <div class="col-md-7">
            <div class="btn-group pull-right">
                <input class="btn btn-primary" type="submit" name="find" value="Search">
            </div>    
        </div>
        <?php echo form_close(); ?>
    </div>
    <div class="panel-footer">&nbsp;</div>
</div>

<?php if ($result !=null) { ?>

<div class="panel panel-default" ng-controller="CustomSMSCtrl">
    <div class="panel-heading">
        <div class="panal-header-title pull-left">
            <h1>Result</h1>
        </div>
    </div>

    <div class="panel-body">

        <!-- Print banner -->
        <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
        
        
        <!--<pre><?php //print_r($payment); ?></pre>-->
                
        <!-- horizontal form -->
        <?php $attribute = array( 'name' => '', 'class' => 'form-horizontal', 'id' => '' );
            echo form_open('', $attribute);
        ?>
        <table class="table table-bordered">
            <tr>
                <th class="num-center">SL</th>
                <th class="num-center">ID</th>
                <th>Name</th>
                <th width="80">Photo</th>
                <th>Class</th>
                <th>Section</th>
                <th width="400">Due Months</th>
                <th>Year</th>
                <th class="num-center" width="120">Gurdian Mobile</th>
            </tr>
            
            <?php 
              $counter = 0;
              foreach ($result as $key => $value) { $counter++;
              
              $paymentMonths = $futureMonths = array();
              $months = array('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');
              
              for($i = date('m')+1; $i<=12;$i++){
                  $futureMonths[] = date('F', mktime(0, 0, 0, $i, 12));
              }
              
              $where = array(
                  "year"       => $_POST['search']['year'],
                  "student_id" => $value->student_id,
                  "status"     => "approved",
                  "trash"      => 0
                );
                
              $paymentInfo = $this->action->readGroupBy("payment","month",$where);
              
              
              if($paymentInfo != NULL){
                  foreach($paymentInfo as $sl=>$val){
                      $paymentMonths[$sl] = $val->month;
                  }
                  $months = array_diff($months,$paymentMonths);
              }else{
                  $months = $months;
              }
              
            $months = array_diff($months,$futureMonths);
              
            if(count($months) > 0){
            ?>
            
            <tr>
                <td class="num-center"><?php echo $counter; ?></td>
                <td class="num-center"><?php echo $value->student_id; ?></td>
                <td><?php echo filter($value->name); ?></td>
                <td><img class="img-responsive" src="<?php echo site_url('public/students/'.$value->photo); ?>" ></td>
                <td><?php echo $value->class; ?></td>
                <td><?php echo $value->section; ?></td>
                <td style="display: block; width: 400px !important; word-break: break-all; white-space: inherit; padding: 34px 10px;">
                    
                    <b><?php echo join(",&nbsp;", $months); ?><b>
                    
                </td>
                <td><?php echo $_POST['search']['year']; ?></td>
                <td class="num-center">
                    <input type="hidden" name="mobile[]" value="<?php echo $value->guardian_mobile; ?>" class="form-control" readonly>
                    <?php echo $value->guardian_mobile; ?>
                </td>
            </tr>
            <?php  } } ?>
            
        </table>

        <div class="form-group">
            <div class="col-md-offset-1 col-md-10">
                <textarea name="message" class="form-control" placeholder="Type Your Message. Maximum Characters Length 1080" cols="30" rows="4" ng-model="msgContant" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-11">
                <p class="text-right">
                    <span> <strong>Total characters</strong> 
                    <input name="total_characters" class="sms" type="text" ng-model="totalChar" readonly>
                    </span>
                    &nbsp;  
                    <span><strong>Message size</strong> 
                        <input class="sms" name="total_messages" type="text" ng-model="msgSize" readonly>
                    </span>
                </p>
            </div>
        </div>

        <div class="col-md-11 no-padding">
            <div class="btn-group pull-right">
                <input class="btn btn-primary" type="submit" name="send" value="Send">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>


    <div class="panel-footer">&nbsp;</div>
    <?php } ?>
</div>