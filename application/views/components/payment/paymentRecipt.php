<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />
<style>
    @media print{
        aside, nav, .none, .panel-heading, .panel-footer { display: none !important; }
        .panel {
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .hide{display: block !important;}
        /*.panel-body {height: 96vh;}*/
        .block-hide{display: none;}
        
        .table>tbody>tr>td, 
        .table>tbody>tr>th,
        .table>thead>tr>td, 
        .table>thead>tr>th {
            font-weight: normal !important;
            padding: 0 6px !important;
            font-size: 10px !important;
        }
        .print_notice {
            margin-bottom: 5px !important;
            line-height: 13px;
            font-size: 9px;
        }
    }
    .title {font-family: "Algerian Condensed", Times, serif;}
</style>

<div class="container-fluid block-hide">
    <div class="row">
    <?php echo $this->session->flashdata('confirmation'); ?>

    <!-- horizontal form -->
    <?php
    $attribute = array(
        'name' => '',
        'class' => 'form-horizontal',
        'id' => ''
    );
    echo form_open('', $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Search By</h1>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>

                <div class="col-md-12">
                    <!-- left side -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Class</label>
                            <div class="col-md-7">
                                <select name="search[class]" ng-model="class" class="form-control selectpicker" data-show-subtext="true" data-live-search="true">
                                  <option value="" selected disabled>-- Select Class --</option>
                                  <?php
                                      foreach(config_item('classes') as $key => $value){?>
                                          <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                      <?php
                                      }
                                  ?>                             
                                 </select> 
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Session</label>
                            
                            <div class="col-md-7" ng-if="class =='Eleven' || class =='Twelve'">
                                <select name="search[session]" class="form-control">
                                    <option value="">Select Session</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="col-md-7" ng-if="class !='Eleven' && class !='Twelve'">
                                <select name="search[session]" ng-model="session" class="form-control">
                                    <option value="">Select Session</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Section</label>
                            <div class="col-md-7">
                                <select name="search[section]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Section--</option>
                                  <?php
                                      foreach(config_item('section') as $key => $value){?>
                                          <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                      <?php
                                      }
                                  ?>                            
                                 </select> 
                            </div>
                        </div>

                        
                        
                        <!--div class="form-group">
                            <label for="" class="col-md-2">Status</label>
                            <div class="col-md-7">
                                <select name="search[status]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                    <option value="" selected disabled>-- Select Status --</option>
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approve</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">ID</label>
                            <div class="col-md-7">
                                <input type="text" name="search[student_id]"  class="form-control" placeholder="Type Student ID">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2">Invoice No</label>
                            <div class="col-md-7">
                                <input type="text" name="search[invoice_no]" class="form-control" placeholder="Type Invoice No">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="col-md-2">Guardian Mobile</label>
                            <div class="col-md-7">
                                <input type="text" name="search[guardian_mobile]" class="form-control" placeholder="Type Guardian Mobile No">
                            </div>
                        </div-->
                    </div>

                    <!-- right side -->

                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Type</label>
                            <div class="col-md-7">
                                <select name="search[type]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Type--</option>
                                 <?php foreach (config_item('type') as $key => $value) { ?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                 <?php } ?>
                                 </select> 
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Year</label>
                            <div class="col-md-7">
                                <select name="search[year]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Year --</option>
                                  <?php for($i=2020; $i<=date('Y')+1; $i++){ ?>
                                   <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                  <?php } ?>                         
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Month</label>
                            <div class="col-md-7">
                                <select name="search[month]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                   <option value="" selected disabled>-- Select Month --</option>
                                    <?php 
                                        foreach(config_item('months') as $key => $value){ ?>
                                        <option value="<?php echo $value; ?>"> <?php echo $value; ?> </option>
                                    <?php } ?>                  
                                 </select> 
                            </div>
                        </div>   
                        
                        <!--div class="form-group">
                            <label class="col-md-2 control-label">Form</label>
                            <div class="input-group date col-md-7" id="datetimepickerFrom">
                                <input type="text" name="date[from]" placeholder="From" class="form-control" >
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>   

                        <div class="form-group">
                            <label class="col-md-2 control-label">To</label>
                            <div class="input-group date col-md-7" id="datetimepickerTo">
                                <input type="text" name="date[to]" placeholder="To" class="form-control" >
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div-->
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-7">
                                <div class="btn-group pull-right">
                                    <input class="btn btn-primary" type="submit" name="show" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>

<!--<pre><?php //print_r($records); ?></pre> -->

<?php if($records != null){ ?>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default ">
            <div class="panel-heading none">
                <div class="panal-header-title">
                    <h1 class="pull-left">Payment Overview <span></span> </h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>
            <div class="panel-body">
                <!-- Print banner -->
                <style>
                    .only-print, .banner {display: none;}
                    .full-width {width: 100%;}
                    @media print {
                        .w-80 {
                            display: block;
                            width: 80%;
                            float: left;
                        }
                        .set-print-height {
                            height: 100vh;
                        }
                        .only-print {display: block;} 
                        .full-width, .col-lg-4 {
                            width: 33.33333333%;
                            float: left;                            
                        }
                        .name-full-width {width: 100%;}
                        .half-width {
                            height:20px;
                            width: 50%;
                        }
                        .border-right {border-right: 1px dotted #ddd;}
                        .col-lg-4 label,
                        .pull-left h4,
                        .pull-right h4 {
                            font-weight: normal !important;
                            font-size: 12px !important;
                        }
                        .banner {
                            border-bottom: 1px solid #ddd;
                            text-align: center;
                            position: reletive;
                            display: block;
                        }
                        .position {
                            position: absolute;
                            left: -12px;
                            top: 7px;
                            z-index: -2;
                        }
                        .banner h4, .banner p {
                            margin-bottom: 0;
                        }
                        .banner p:nth-child(4) {
                            margin-bottom: 10px;
                        }
                        .margin-top-print {
                            margin-top: 10px;
                        }
                    }
                </style>
                
                <?php foreach($records as $sl=>$record){
                //Read payment Info
                $where = array('invoice_no' => $record->invoice_no );
                $info = $this->retrieve->read('payment',$where);
                ?>

                <div class="row set-print-height" style="font-family:'Times New Roman';">

                    <?php
                    $copy = ["Student Copy","Bank Copy","Office Copy"];
                     for ($i=0; $i <3 ; $i++) {

                      ?>
                    <div class="col-lg-4 full-width border-right <?php echo ($i > 0)? "only-print":""; ?>">
                        
                        <div class="row banner">
                            <!--<div class="col-xs-3 position">
                                <img src="<?php echo base_url('public/img/watermark.png');?>" class="img-responsive" style="margin-top: -8px;">
                                
                            </div>-->
                            <div class=" col-xs-12" style="">
                                <small><strong><?php echo $copy[$i];?></strong></small>
                                <img src="<?php echo base_url($banner[0]->path);?>" >
                                
                            </div>
                            
                        </div>
                        <p style="font-size: 9px; padding-top:5px;" class="text-center hide" >বেতন আদায়ের রশিদ</p>
                        <?php
                            //fetch Student basic info from 'registration' and 'admission' table
                            $where = array('registration.reg_id' => $info[0]->student_id);
                            $joincond ="registration.reg_id = admission.student_id";
                            $studentInfo = $this->action->joinAndRead('registration','admission',$joincond,$where);
                            //$studentInfo = $this->action->joinAndReadOrderBy('registration','admission',$joincond,$where,$by="roll",$type='asc');
                        ?>
                        <div class="row margin-top-print">
                            <div class="col-xs-4 name-full-width print-font">
                                <label style="padding:0px;"><b>Name : <?php echo ($studentInfo) ? filter($studentInfo[0]->name) : "N/A"; ?></b></label><br>
                            </div> 
                            <div class="col-xs-4 half-width print-font">
                                <label>SID : <?php echo ($studentInfo) ? $studentInfo[0]->student_id : "N/A"; ?></label><br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Invoice No : <?php echo $record->invoice_no;?></label><br>
                            </div>
                            
                            <!-- div class="col-xs-4 half-width print-font">
                                <label>Class: <?php echo $studentInfo[0]->class; ?></label><br>
                            </div> 
                            <div class="col-xs-4 half-width print-font">
                                <label>Section : <?php echo $studentInfo[0]->section; ?></label><br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Roll : <?php echo $studentInfo[0]->roll; ?></label><br>
                            </div -->
                            <!--<div class="col-xs-4 half-width print-font">
                                <label>SID : <?php echo ($studentInfo) ? $studentInfo[0]->sid : "N/A"; ?></label><br>
                            </div>-->
                            <div class="col-xs-4 half-width print-font">
                                <label>Type : <?php echo filter($records[0]->type); ?></label><br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Date  : <?php echo $records[0]->date; ?></label><br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Month : <?php echo $records[0]->month; ?></label><br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Year  : <?php echo $records[0]->year; ?></label><br>
                            </div>
                            <!--<div class="col-xs-4 half-width print-font">
                                <label>Roll  : <?php echo ($studentInfo) ? $studentInfo[0]->roll : "N/A"; ?></label><br>
                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>SL</th>
                                        <th>Particulars</th>
                                        <th>Amount</th>
                                    </tr>
                                    <?php
                                        // fetch all payment fields from the 'payment' table
                                        $where = array("invoice_no" => $info[0]->invoice_no);
                                        $paymentFields = $this->retrieve->read('payment',$where);
                                        $total = 0.0;
                                        foreach ($paymentFields as $key => $value) {  ?>
                                    <tr>
                                        <td style="width: 50px;"><?php echo $key+1; ?></td>
                                        <td><?php echo $value->field; ?></td>
                                        <td><?php echo $value->amount;$total += $value->amount ?></td>

                                    </tr>
                                    <?php } ?>
                                    
                                    <tr>
                                        <th colspan="2">
                                            <strong class="w-80">In Word : <span id="inword-<?php echo $sl."-".$i; ?>"></span> Taka Only. </strong>
                                            <span class="pull-right"><strong>Total</strong></span>
                                        </th>
                                        <th><strong><?php printf("%.2f",$total); ?></strong></th>
                                    </tr>
                                </table>
                                <p class="hide print_notice">
                                    *প্রতি মাসের ৫-২০ তারিখের মধ্যে চলতি মাসের বেতন পরিশোধ করতে হবে।বেতন আদায়ের দিন ব্যাংক বন্ধ থাকলে পরিবর্তী কার্যদিবসে বেতন আদায় করা হবে।<br>
                                    *পূর্ববর্তী মাসের বেতন পরবর্তী মাসে দিতে চাইলে ৫০/= টাকা জরিমানা দিতে হবে।<br>
                                    *পর পর তিন মাস বেতন পরিশোধে ব্যর্থ হলে হাজিরা খাতা থেকে শিক্ষার্থীর নাম কাটা যাবে এবং পরবর্তীতে ৩০০ টাকা জরিমানা প্রদানপূর্বক অধ্যক্ষের অনুমতি সাপেক্ষে হাজিরা খাতায় নাম অর্ন্তভুক্ত করা হতে পারে।<br>
                                </p>
                            </div>
                        </div>
                        <div class="row hide">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <!--<h4 style="margin-top: 25px;" class="text-center print-font">-->
                                    <!---------------------------------- <br>-->
                                    <!--Student Signature-->
                                    <!--</h4>-->
                                </div>
                                <div class="pull-right">
                                    <h4 style="margin-top: 25px;" class="text-center print-font">
                                    ---------------------------- <br>
                                    আদায়কারীর স্বাক্ষর
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <script type="text/javascript">
                    <?php for ($i=0; $i <3 ; $i++) { ?>
                    $(document).ready(function(){$("#inword-<?php echo $sl."-".$i; ?>").html(inWorden(<?php echo $total; ?>));});
                    <?php } ?>
                </script>
                <!--end foreach curly brace-->
                <?php } ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo site_url("private/js/inworden.js"); ?>"></script>
<script type="text/javascript" src="<?php echo site_url("private/js/inwordbn.js"); ?>"></script>
<script>
     $('#datetimepickerFrom').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
    $('#datetimepickerTo').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    });
</script>


<!--end if curly brace-->
<?php } ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>