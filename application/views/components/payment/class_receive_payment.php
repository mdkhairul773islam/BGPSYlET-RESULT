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

    .green{
        background-color: green;
        display: block;
        padding: none !important;
        color: #fff;
    }

    .profile{
        border-radius: 80px;
        max-width: 60px;
        width: 100%;
        max-height: 60px;
        height: 100%;
        margin-top: -8px;
    }



</style>
<div class="container-fluid block-hide" ng-controller="classWiseReceiveCtrl" ng-cloak>
    <div class="row">

    <?php echo $this->session->flashdata('confirmation'); ?>

    <!-- horizontal form -->
    <?php
    $attribute = array(
        'name' => '',
        'class' => 'form-horizontal',
        'id' => ''
    );
    echo form_open(site_url('payment/receieve_payment/class_wise_payment_received'), $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <span style="font-size:24px; font-weight:bold;" class="pull-left">Student Information</span>
                </div>
            </div>

            <div class="panel-body no-padding">
                <div class="no-title">&nbsp;</div>

                <!-- left side -->
                <div class="col-md-12">
                    <!-- left side -->
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Class</label>
                            <div class="col-md-7">
                                <select name="class" ng-model="class" ng-change="getStudentPaymentFieldsFn();" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
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
                                <select name="session" ng-model="session" ng-change="getStudentPaymentFieldsFn();" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                    <option value="">Select Session</option>
                                    <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                                    <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="col-md-7" ng-if="class !='Eleven' && class !='Twelve'">
                                <select name="session" ng-model="session" ng-change="getStudentPaymentFieldsFn();" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
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
                                <select name="section" ng-model="section" ng-change="getStudentPaymentFieldsFn();" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
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

                    </div>

                    <!-- right side -->

                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Type</label>
                            <div class="col-md-7">
                                <select name="type" ng-model="type" ng-change="getStudentPaymentFieldsFn();" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
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
                                <select name="year" ng-model="year" ng-change="getStudentPaymentFieldsFn();" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                  <option value="" selected disabled>-- Select Year --</option>
                                  <?php for($i=2020; $i <= date('Y')+1; $i++){ ?>
                                   <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                  <?php } ?>                            
                                 </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-2 control-label">Month</label>
                            <div class="col-md-7">
                                <select name="month" ng-model="month" ng-change="getStudentPaymentFieldsFn();" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" >
                                   <option value="" selected disabled>-- Select Month --</option>
                                    <?php 
                                        foreach(config_item('months') as $key => $value){ ?>
                                        <option value="<?php echo $value; ?>"> <?php echo $value; ?> </option>
                                    <?php } ?>                  
                                 </select> 
                            </div>
                        </div>   
                        
                        
                        <!--div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-7">
                                <div class="btn-group pull-right">
                                    <input class="btn btn-primary" type="submit" name="show" value="Search">
                                </div>
                            </div>
                        </div-->
                    </div>
                    
                    
                    
                    <!--old section-->
                        <!--
                        
                        <div class="col-md-3">
                            <input type="text" name="student_id" ng-model="student_id" ng-change="getStudentInfoFn(); getStudentPaymentsInfoFn();" class="form-control" autocomplete="off" placeholder="Student ID" required>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group date " id="datetimepicker1">
                                <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d');?>" required>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <select name="year" ng-model="year" ng-init="year='<?php echo date('Y'); ?>'" ng-change="getStudentPaymentsInfoFn()" class="form-control" required>
                                <option value="" selected disabled>-- Select Year --</option>
                                <?php
                                for ($i=2016; $i <= date('Y')+2 ; $i++) { ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <select name="month" ng-model="month" ng-change="getStudentPaymentFieldsFn();" class="form-control" required>
                                <option value="" selected disabled>-- Select Month --</option>
                                <?php
                                foreach(config_item('months') as $key => $value){ ?>
                                <option value="<?php echo $value; ?>"> <?php echo $value; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        -->
                        <!--old section end-->
                </div>

                 <div class="col-md-12">&nbsp;</div>


                <!--div class="container-fluid" ng-hide = "active">
                    <div class="col-md-8">
                        <label for="" class="col-md-1">Name</label>
                        <div class="col-md-5">
                            <input type="text" name="student_name" class="form-control" value="{{ studentsInfo[0].name  }}" readonly >
                        </div>

                        <label for="" class="col-md-1">Class</label>
                        <div class="col-md-5">
                            <input type="text" name="class" class="form-control" value="{{ studentsInfo[0].class }}" readonly >
                            <input type="hidden" name="session" class="form-control" value="{{ studentsInfo[0].session }}">
                        </div>

                        <label for="" class="col-md-1">Section</label>
                        <div class="col-md-5">
                            <input type="text" name="section" class="form-control" value="{{ studentsInfo[0].section }}" readonly >
                        </div>

                        <label for="" class="col-md-1">Roll</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" value="{{ studentsInfo[0].roll }}" readonly >
                        </div>

                        <label for="" class="col-md-1">Type</label>
                        <div class="col-md-5">
                            <input type="text" name="type" class="form-control" value="{{ studentsInfo[0].type}}" readonly >
                        </div>

                        <label for="" class="col-md-1">Mobile</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" value="{{ studentsInfo[0].student_mobile }}" readonly >
                            <input type="hidden" class="form-control" name="guardian_mobile" value="{{ studentsInfo[0].guardian_mobile }}" readonly >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <table class="table table-bordered">
                        <div ng-repeat="(key,month) in allMonths">
                            <div class="col-md-4 table-bordered" ng-class="{'green': (paymentMonths[key] == 1)}">
                                 <strong style="display:block;padding: 2px 0px;">{{ month }}</strong>
                            </div>
                        </div>
                        </table>
                    </div>

                </div-->
            </div>



            <div class="col-md-12">&nbsp;</div>


            <div class="panel-body"  ng-repeat="(key,row) in studentsPaymentFields" >
                
                <hr>
                <label><strong>{{ key+1}})</strong> Name: {{ row[0].name }}</label> | <label>Student ID: {{ row[0].student_id }} | Roll: {{ row[0].roll }}</label> 
                <input type="hidden" name="name[]" ng-value="row[0].name">
                <input type="hidden" name="student_id[]" ng-value="row[0].student_id">
                <input type="hidden" name="roll[]" ng-value="row[0].roll">
                <input type="hidden" name="guardian_mobile[]" ng-value="row[0].guardian_mobile">
                <table class="table table-bordered" ng-cloak>
                    <tr>
                        <th width="55" >SL</th>
                        <th>Field of Payment </th>
                        <th width="350px">Amount (TK)</th>

                    </tr>

                    <tr ng-repeat="field in row">
                        <td>{{ $index +1 }}</td>
                        <td>
                           {{ field.field_name | textBeautify}}
                           <input type="hidden" name="field_name[{{key}}][]" value="{{ field.field_name }}">
                        </td>
                        <td>
                          {{ field.amount }}
                          <input type="hidden" name="amount[{{key}}][]"  value="{{ field.amount }}">
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td ><strong class="pull-right">Total</strong></td>
                        <td>{{ getFieldsTotalFn($index) }} TK</td>
                    </tr>
                </table>

            </div>

            <div class="form-group" ng-hide = "active1" >
                <!-- label class="col-md-3 control-label"></label -->
                <div class="col-md-12">
                    <div class="btn-group pull-right" style="margin-right: 15px;">
                        <input class="btn btn-primary" type="submit" name="receive_payment" value="Save">
                    </div>
                </div>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
        <?php echo form_close(); ?>
  </div>
</div>
