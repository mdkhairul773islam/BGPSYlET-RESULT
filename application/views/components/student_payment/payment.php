<style>
    .disable{
        display:none;
    }
    .check{
        background: green;
        color: #fff;
    }
    .info-box{
        width: 100%;
        overflow: auto;
    }
    .info-box img{
        width: 125px;
        height: 125px;
        margin-bottom: 15px;
        display: inline-block;
    }
    .info-box div{
        float: left;
        width: 50%;
    }
    .info-box p{
        width: 100%;
        margin: 0;
        line-height: 30px;
        padding-left: 15px;
        padding-right: 15px;
        color: #fff;
        font-weight: bold;
        background: red;
        border: 2px solid #fff;
        float: left;
        cursor:default;
    }
   .info-box p>span{
        float:right;
    }
    .paid{
        background: green !important;
        color: #fff !important;
    }
    
    .check_btn{
        padding:9px 14px;
        background: #999;
        color: #fff;
        margin: 0 -15px;
        transition: all 0.5s ease-in-out;
    }
    .check_btn:hover{
        background: #ddd;
        color: #000;
    }
</style>

<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation; ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1> Accept_payments </h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                    $attr=array(
                        'class'=>'form-horizontal'
                        );
                    echo form_open('',$attr);
                ?>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label"> Student_ID <span class="req">*</span></label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="students_id" id="student_id" placeholder=" Type_Students_ID_Number " required>
                                </div>
                            </div>
                            
                            <input type="hidden" name="guardian_mobile">


                            <div class="form-group">
                                <label class="col-md-5 control-label"> Students_Name <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="student_name" id="student_name" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label"> Class <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="class" id="class" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-5 control-label">শাখা <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="section" id="section" readonly>
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="col-md-5 control-label">Previous_months_payment <span class="req">&nbsp; </span></label>

                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="previous_payment" id="previous_payment" readonly>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-md-5 control-label"> Payment_month_year <span class="req">*</span></label>

                                <div class="input-group date col-md-7" style="display: flex">
                                    <select name="payment_month" class="form-control">
                                        <?php foreach (config_item('months') as $mkey => $month) { ?>
                                        <option <?php if($mkey+1==date('m')){echo 'selected'; } ?> value="<?php echo $mkey+1; ?>"><?php echo $month; ?></option>
                                        <?php } ?>
                                    </select>
                                    <select name="payment_year" class="form-control">
                                        <?php for($i=date('Y')-2; $i<= date('Y')+1; $i++ ) { ?>
                                        <option <?php if($i==date('Y')){echo 'selected'; } ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="col-md-5 control-label"> Payment_Date <span class="req">*</span></label>

                                <div class="input-group date col-md-7" id="datetimepicker1">
                                    <input type="text" class="form-control" value="<?php echo date('Y-m-d');?>" name="payment_date" <?php if($privilege == 'accounts'){echo " readonly";}?> required>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="info-box" style="text-align: center;">
                                    <img class="img-thumbnail" src="" alt="" id="student_img">  
                                 </div>  
                                </div>
                                
                                <div class="col-md-8">
                                    <div style="padding: 2px;">
                                        <select class="form-control" name="" id="history_year">
                                            <option value="">--Select Year--</option>
                                            <?php foreach($years as $key=> $value){?>
                                            <option value="<?php echo $value->payment_year;?>"><?php echo $value->payment_year;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="info-box">
                                        <div>                                       
                                            <?php
                                            $month = config_item("months_num");
                                            for($i=1; $i<=6; $i++) { ?>
                                            <p class="all_month" id="month_<?php echo $i; ?>"><?php echo $month[$i]; ?><span></span></p>
                                            <?php } ?>
                                        </div>
                                        <div>
                                            <?php
                                            for($i=7; $i<=12; $i++) { ?>
                                            <p class="all_month" id="month_<?php echo $i; ?>"><?php echo $month[$i]; ?><span></span></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="duee" class="col-md-5 control-label">বকেয়া <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><input id="duee" type="checkbox" name="" value="" class="payment_check" checked></div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="due" id="pre_due" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="monthly_tution_fee" class="col-md-5 control-label">মাসিক বেতন <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><input id="monthly_tution_fee" type="checkbox" name="item[]" class="payment_check" value="monthly_tution_fee"></div>
                                        <input type="text" class="form-control amount"  <?php if($privilege == 'accounts'){echo "readonly";}?> name="monthly_tution_fee" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group n-r">
                                <label for="transport_bill" class="col-md-5 control-label">পরিবহন বিল<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="transport_bill" type="checkbox" name="item[]"  class="payment_check" value="transport_bill">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="transport_bill" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="generator_chage" class="col-md-5 control-label">জেনারেটর চার্জ <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="generator_chage" type="checkbox" name="item[]" class="payment_check" value="generator_chage">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="generator_chage" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="monthly_exam" class="col-md-5 control-label">মাসিক পরিক্ষা ফি<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="monthly_exam" type="checkbox" name="item[]" value="monthly_exam">
                                        </div>
                                        <input type="text" class="form-control amount" name="monthly_exam" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="semester_anual_exam" class="col-md-5 control-label">সেমিস্টার/বার্ষিক পরীক্ষার ফি: <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="semester_anual_exam" type="checkbox" name="item[]" value="semester_anual_exam">
                                        </div>
                                        <input type="text" class="form-control amount" name="semester_anual_exam" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="addmission" class="col-md-5 control-label">ভর্তি<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="addmission" type="checkbox" name="item[]" class="payment_check" value="addmission">
                                        </div>
                                        <input type="text" class="form-control amount" name="addmission" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="renewal_fee_old" class="col-md-5 control-label">নবায়ন ফি (পুরাতন)<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="renewal_fee_old" type="checkbox" name="item[]"  class="payment_check" value="renewal_fee_old">
                                        </div>
                                        <input type="text" class="form-control amount" name="renewal_fee_old" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                <?php /*
                
                             <div class="form-group n-r">
                                <label for="receipt" class="col-md-5 control-label">রশিদ<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="receipt" type="checkbox" name="item[]"  class="payment_check" value="receipt">
                                        </div>
                                        <input type="text" class="form-control amount" name="receipt" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                             <div class="form-group n-r">
                                <label for="book" class="col-md-5 control-label">বই<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="book" type="checkbox" name="item[]"  class="payment_check" value="book">
                                        </div>
                                        <input type="text" class="form-control amount" name="book" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                             <div class="form-group n-r">
                                <label for="sprots_cultural_fee" class="col-md-5 control-label">ক্রিড়া ও সাংস্কৃতিক ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="sprots_cultural_fee" type="checkbox" name="item[]"  class="payment_check" value="sprots_cultural_fee">
                                        </div>
                                        <input type="text" class="form-control amount" name="sprots_cultural_fee" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                */ ?>
                            <div class="form-group n-r">
                                <label for="arabic_coaching_admit" class="col-md-5 control-label">স্পেশাল আরবির কোচিং এ ভর্তি ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="arabic_coaching_admit" type="checkbox" name="item[]" class="payment_check"  value="arabic_coaching_admit">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="arabic_coaching_admit" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group n-r">
                                <label for="arabic_coaching_tution" class="col-md-5 control-label">স্পেশাল আরবির কোচিং ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="arabic_coaching_tution" type="checkbox" name="item[]" value="arabic_coaching_tution">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="arabic_coaching_tution" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--div class="form-group">
                                <label for="late" class="col-md-5 control-label"><?php //echo caption('Late_Fee'); ?> <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="late" type="checkbox" <?php //if (date('d')>10){ echo "checked";} ?> name="item[]" value="late_fee">
                                        </div>
                                        <input type="text" class="form-control amount" name="late_fee" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="late2" class="col-md-5 control-label">লেইট ফি ২য় দিন থেকে <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="late2" type="checkbox" name="item[]" value="late_fee_2nd">
                                        </div>
                                        <input type="text" class="form-control amount" name="late_fee_2nd" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div-->
                            
                            <!--div class="form-group n-r">
                                <label for="handwritting_admit" class="col-md-5 control-label">হাতের লেখার কোচিং এ ভর্তি ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="handwritting_admit" type="checkbox" name="item[]" value="handwritting_admit">
                                        </div>
                                        <input type="text" class="form-control amount" name="handwritting_admit" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group n-r">
                                <label for="handwritting_tution" class="col-md-5 control-label">হাতের লেখার কোচিং ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="handwritting_tution" type="checkbox" name="item[]" value="handwritting_tution">
                                        </div>
                                        <input type="text" class="form-control amount" name="handwritting_tution" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div-->
                            
                        </div>





                        <div class="col-md-6">
                        

                            <div class="form-group">
                                <label for="dining_bill" class="col-md-5 control-label">ডাইনিং বিল  <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="dining_bill" type="checkbox" name="item[]"  class="payment_check" value="dining_bill">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="dining_bill" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="resedintial_charge" class="col-md-5 control-label">আবাসিক চার্জ<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="resedintial_charge" type="checkbox" name="item[]"  class="payment_check" value="resedintial_charge">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="resedintial_charge" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ac_charge" class="col-md-5 control-label">এসি চার্জ <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="ac_charge" type="checkbox" name="item[]" class="payment_check" value="ac_charge">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="ac_charge" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group n-r">
                                <label for="day_care_admit" class="col-md-5 control-label">ডে-কেয়ার ভর্তি ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="day_care_admit" type="checkbox" name="item[]" value="day_care_admit">
                                        </div>
                                        <input type="text" class="form-control amount" name="day_care_admit" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group n-r">
                                <label for="day_care_class" class="col-md-5 control-label">ডে-কেয়ার ক্লাস ফি: <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="day_care_class" type="checkbox" name="item[]" value="day_care_class">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="day_care_class" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group n-r">
                                <label for="day_care_fee" class="col-md-5 control-label">ডে-কেয়ার ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="day_care_fee" type="checkbox" name="item[]" value="day_care_fee">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="day_care_fee" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <!--div class="form-group n-r">
                                <label for="islamic_cultural_admit" class="col-md-5 control-label">স্পেশাল ইসলামি সংগীত ক্লাস এ ভর্তি ফি:<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="islamic_cultural_admit" type="checkbox" name="item[]" value="islamic_cultural_admit">
                                        </div>
                                        <input type="text" class="form-control amount" name="islamic_cultural_admit" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group n-r">
                                <label for="islamic_class_fee" class="col-md-5 control-label">স্পেশাল ইসলামি সংগীত ক্লাস ফি:  <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="islamic_class_fee" type="checkbox" name="item[]" value="islamic_class_fee">
                                        </div>
                                        <input type="text" class="form-control amount" name="islamic_class_fee" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div-->

                            <div class="form-group n-r">
                                <label for="certification" class="col-md-5 control-label">প্রত্যয়ন পত্র<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="certification" type="checkbox" name="item[]" value="certification">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="certification" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group n-r">
                                <label for="tc" class="col-md-5 control-label">ট্রান্সফার সার্টিফিকেট<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="tc" type="checkbox" name="item[]" value="tc">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="tc" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group n-r">
                                <label for="stetationary" class="col-md-5 control-label">স্টেশনারি  বিক্রয়<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="stetationary" type="checkbox" name="item[]" value="stetationary">
                                        </div>
                                        <input type="text" class="form-control amount" <?php if($privilege == 'accounts'){echo "readonly";}?> name="stetationary" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--div class="form-group n-r">
                                <label for="korjo_adai" class="col-md-5 control-label">কর্জ আদায়<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="korjo_adai" type="checkbox" name="item[]" value="korjo_adai">
                                        </div>
                                        <input type="text" class="form-control amount" name="korjo_adai" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group n-r">
                                <label for="donation" class="col-md-5 control-label">দান<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="donation" type="checkbox" name="item[]" value="donation">
                                        </div>
                                        <input type="text" class="form-control amount" name="donation" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="waz_mahfil" class="col-md-5 control-label">ওয়াজ মাহফিল<span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input id="waz_mahfil" type="checkbox" name="item[]" value="waz_mahfil">
                                        </div>
                                        <input type="text" class="form-control amount" name="waz_mahfil" value="0">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                            </div-->

                        </div>

                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label"> Total <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <input type="number" class="form-control" id="total" name="" value="0" readonly>
                                </div>
                            </div>
                                                       
                            <div class="form-group">
                            
                                <label class="col-md-5 control-label"> বেতন প্রদানে বিলম্ব ফি</label>
                <div class="input-group col-md-7">
                    <div class="input-group-addon">
                        <input id="is_fine" <?php if($privilege=="accounts"){echo "checked";} ?> type="checkbox">
                    </div>
                    <input type="text" class="form-control" <?php if($privilege == 'accounts'){echo "readonly";}?> name="late_fee" value="0">
                    <div class="input-group-addon"></div>
                </div>
                                
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-5 control-label">সর্বমোট <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <input type="number" class="form-control" id="total_with_fine" name="total_with_fine" value="0" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label"> In_Ward <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <textarea name="in_words" class="form-control" id="inword" cols="30" rows="1" readonly></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-5 control-label">আদায়কারীর নাম<span class="req">&nbsp;</span></label>
                                	
                                <div class="col-md-7">
				                    <input type="text" class="form-control"  name="collect_by" value="<?php echo $name; ?>" readonly>
				                    
                                    <!--select name="collect_by" class="form-control" required>
                                        <option value="" selected disabled>&nbsp;</option>
                                       <?php //foreach($collect_by as $key=>$value){ ?>
                                          <option value="<?php //echo $value;?>"><?php echo $value;?></option>
                                       <?php //}  ?>
                                       
                                       
                                    </select-->
                                </div>
                            </div>
                            
                        </div>
                    </div>
		
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label">প্রদান <span class="req">&nbsp;</span></label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" id="paid" name="paid_amount" value="0">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label">বকেয়া <span class="req">&nbsp;</span></label>

                                <div class="col-md-7">
                                    <input type="number" class="form-control" id="curr_due" name="curr_due" value="0" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-group pull-right">
                        <input type="submit" name="payment_submit" value=" Save " class="btn btn-primary">
                    </div>
                <?php echo form_close(); ?>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>

    </div>

</div>
<script type="text/javascript" src="<?php echo base_url("private/js/inword.js");?>"></script>
<script>
    $(document).ready(function(){
    var student_type;
        $("#student_id").on("keyup",function(){

        var student_id=$("#student_id").val();
            //Function for view student Information
             function view_data(){
                //Rendering Basic information
                $.ajax({
                    type:"POST",
                    data:{student_id: student_id},
                    url:"<?php echo base_url('student_payment/payment/ajax_student_info');?>"
                }).success(function(response){
                    if(!response.match("error")){
                        var data=JSON.parse(response);
                        console.log(data);
                        $("#student_name").val(data.en_student_name);
                        $('input[name="guardian_mobile"]').val(data.guardian_mobile);
                        $("#class").val(data.class);
                        $("#section").val(data.section);
                        $("#student_img").attr("src","<?php echo base_url()?>/"+data.students_photo);
                        student_type = data.residential;
                        if(data.residential.match("yes")){
                          $(".n-r").slideUp('fast');
                        }
                        else if(data.residential.match("no")){
                          $(".n-r").slideDown('fast');
                        }
                    }else{
                        console.log("error");
                        $("#student_name").val("");
                        $("#class").val("");
                        $("#student_img").attr("src","");
                    }
                });

                //Rendering Due Information
                $.ajax({
                    type:"POST",
                    data:{student_id: student_id},
                    url:"<?php echo base_url('student_payment/payment/ajax_due_info');?>"
                }).success(function(response){
                    if(!response.match("error")){
                        var data=JSON.parse(response)
                        $("#pre_due").val(data.due);
                    }else{
                        console.log("error Due");
                    }
                });
            }

            //Function for view previous payment date
            $.ajax({
                type: "POST",
                data: {"student_id": student_id},
                url: "<?php echo base_url('student_payment/payment/return_previous_payment'); ?>"
            }).success(function(response){
                if(!response.match("error")){
                    var data = JSON.parse(response);
                    console.log(data);
                    $.each(data.Months,function(key,val){
                    $("#month_"+key).addClass("paid");
                    $("#month_"+key+">span").html(val+" TK");
                    });

                    $("#previous_payment").val(data.Month);
                    data = data.data[0];

                    //previous payment info Start here
                    $('input[name="tution_fee"]').next("div").html(data.tution_fee);
                    $('input[name="late_fee"]').next("div").html(data.late_fee);
                    $('input[name="late_fee_2nd"]').next("div").html(data.late_fee_2nd);
                    $('input[name="addmission"]').next("div").html(data.addmission);
                    $('input[name="renewal_fee_old"]').next("div").html(data.renewal_fee_old);
                    $('input[name="monthly_tution_fee"]').next("div").html(data.monthly_tution_fee);
                    $('input[name="dining_bill"]').next("div").html(data.dining_bill);
                    $('input[name="transport_bill"]').next("div").html(data.transport_bill);
                    $('input[name="receipt"]').next("div").html(data.receipt);
                    $('input[name="book"]').next("div").html(data.book);
                    $('input[name="sprots_cultural_fee"]').next("div").html(data.sprots_cultural_fee);
                    $('input[name="resedintial_charge"]').next("div").html(data.resedintial_charge);
                    $('input[name="generator_chage"]').next("div").html(data.generator_chage);
                    $('input[name="ac_charge"]').next("div").html(data.ac_charge);
                    $('input[name="arabic_coaching_admit"]').next("div").html(data.arabic_coaching_admit);
                    $('input[name="arabic_coaching_tution"]').next("div").html(data.arabic_coaching_tution);
                    $('input[name="handwritting_admit"]').next("div").html(data.handwritting_admit);
                    $('input[name="handwritting_tution"]').next("div").html(data.handwritting_tution);
                    $('input[name="id_card"]').next("div").html(data.id_card);
                    
                    $('input[name="day_care_admit"]').next("div").html(data.day_care_admit);
                    $('input[name="day_care_class"]').next("div").html(data.day_care_class);
                    $('input[name="day_care_fee"]').next("div").html(data.day_care_fee);
                    $('input[name="islamic_cultural_admit"]').next("div").html(data.islamic_cultural_admit);
                    $('input[name="islamic_class_fee"]').next("div").html(data.islamic_class_fee);
                    $('input[name="monthly_exam"]').next("div").html(data.monthly_exam);
                    $('input[name="semester_anual_exam"]').next("div").html(data.semester_anual_exam);
                    $('input[name="certification"]').next("div").html(data.certification);
                    $('input[name="tc"]').next("div").html(data.tc);
                    $('input[name="korjo_adai"]').next("div").html(data.korjo_adai);
                    $('input[name="donation"]').next("div").html(data.donation);
                    $('input[name="waz_mahfil"]').next("div").html(data.waz_mahfil);                    
                   


                    //$('input[name="late_fee"]').next("div").html(data.late_fee);
                    //previous payment info end here
                }else{
                    console.log("error Month");
                    $(".all_month").removeClass("paid");
                    $(".all_month>span").html("");
                }               
              
                
            });
            view_data();
        });
    
        $("#student_id").on("blur",function(){
            //==============================================================
            //view set data Start here======================================
            //==============================================================
            var className=$("#class").val();
            var reg_id = $("#student_id").val();
            var residential = student_type
            //console.log(className);
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('student_payment/payment/ajax_set_amount'); ?>",
                data: {
                    class_name:className,
                    reg_id: reg_id,
                    residential: residential
                }
            }).success(function(response){
                if (response!="Error"){
                    var data=JSON.parse(response);
                    console.log(data);
                    /*showing data*/
                    $('#hidden_id').val(data.id);
                    $('input[name="monthly_tution_fee"]').val(data.tution_fee);
                    //$('input[name="late_fee"]').val(data.late_fee);
                    $('input[name="late_fee_2nd"]').val(data.late_fee_2nd);
                    $('input[name="addmission"]').val(data.addmission);
                    $('input[name="renewal_fee_old"]').val(data.renewal_fee_old);
                    $('input[name="monthly_tution_fee"]').val(data.monthly_tution_fee);
                    $('input[name="dining_bill"]').val(data.dining_bill);
                    $('input[name="transport_bill"]').val(data.transport_bill);
                    $('input[name="receipt"]').val(data.receipt);
                    $('input[name="book"]').val(data.book);
                    $('input[name="sprots_cultural_fee"]').val(data.sprots_cultural_fee);
                    $('input[name="resedintial_charge"]').val(data.resedintial_charge);
                    $('input[name="generator_chage"]').val(data.generator_chage);
                    $('input[name="ac_charge"]').val(data.ac_charge);
                    $('input[name="arabic_coaching_admit"]').val(data.arabic_coaching_admit);
                    $('input[name="arabic_coaching_tution"]').val(data.arabic_coaching_tution);
                    $('input[name="handwritting_admit"]').val(data.handwritting_admit);
                    $('input[name="handwritting_tution"]').val(data.handwritting_tution);
                    $('input[name="id_card"]').val(data.id_card);
                    
                    $('input[name="day_care_admit"]').val(data.day_care_admit);
                    $('input[name="day_care_class"]').val(data.day_care_class);
                    $('input[name="day_care_fee"]').val(data.day_care_fee);
                    $('input[name="islamic_cultural_admit"]').val(data.islamic_cultural_admit);
                    $('input[name="islamic_class_fee"]').val(data.islamic_class_fee);
                    $('input[name="monthly_exam"]').val(data.monthly_exam);
                    $('input[name="semester_anual_exam"]').val(data.semester_anual_exam);
                    $('input[name="certification"]').val(data.certification);
                    $('input[name="tc"]').val(data.tc);
                    $('input[name="korjo_adai"]').val(data.korjo_adai);
                    $('input[name="donation"]').val(data.donation);
                    $('input[name="waz_mahfil"]').val(data.waz_mahfil);                    
                    
                     
                    /*showing data*/


                    $("#submit_btn").attr("name","amount_update");
                    $("#submit_btn").attr("value","Update");
                    $("#submit_btn").removeClass('btn-primary');
                    $("#submit_btn").addClass('btn-success');
                }
                else{
                    $('#hidden_id').val(0);
                    $('input[name="monthly_tution_fee"]').val(0);
                    //$('input[name="late_fee"]').val(0);
                    $('input[name="late_fee_2nd"]').val(0);
                    $('input[name="addmission"]').val(0);
                    $('input[name="renewal_fee_old"]').val(0);
                    $('input[name="monthly_tution_fee"]').val(0);
                    $('input[name="dining_bill"]').val(0);
                    $('input[name="transport_bill"]').val(0);
                    $('input[name="receipt"]').val(0);
                    $('input[name="book"]').val(0);
                    $('input[name="sprots_cultural_fee"]').val(0);
                    $('input[name="resedintial_charge"]').val(0);
                    $('input[name="generator_chage"]').val(0);
                    $('input[name="ac_charge"]').val(0);
                    $('input[name="arabic_coaching_admit"]').val(0);
                    $('input[name="arabic_coaching_tution"]').val(0);
                    $('input[name="handwritting_admit"]').val(0);
                    $('input[name="handwritting_tution"]').val(0);
                    // $('input[name="cap"]').val(0);
                    // $('input[name="base"]').val(0);
                    // $('input[name="tie"]').val(0);
                    $('input[name="day_care_admit"]').val(0);
                    $('input[name="day_care_class"]').val(0);
                    $('input[name="day_care_fee"]').val(0);
                    $('input[name="islamic_cultural_admit"]').val(0);
                    $('input[name="islamic_class_fee"]').val(0);
                    $('input[name="monthly_exam"]').val(0);
                    $('input[name="semester_anual_exam"]').val(0);
                    $('input[name="tc"]').val(0);
                    $('input[name="stetationary"]').val(0);
                    $('input[name="korjo_adai"]').val(0);
                    $('input[name="donation"]').val(0);
                    $('input[name="waz_mahfil"]').val(0);
                    //$('input[name="late_fee"]').val(0);

                    $("#submit_btn").attr("name","amount_insert");
                    $("#submit_btn").attr("value","Save");
                    $("#submit_btn").removeClass('btn-success');
                    $("#submit_btn").addClass('btn-primary');
                }
            });
            //============================================================
            //view set data end here======================================
            //============================================================
        });
        //Summatoin fo all payment
        $("input.amount").on('keyup',sumation);
        $('input[type=checkbox]').on('change',sumation);
        $('select[name="payment_month"]').on('change',sumation);
        $('select[name="payment_year"]').on('change',sumation);
        
            function sumation(){
                var nnn=[];
                $("input.amount").map(function() {
                    if ($(this).prev("div").find('input[type=checkbox]').is(':checked')) {
                        $(this).parents(".input-group").find(".input-group-addon").addClass("check");
                        nnn.push(parseFloat($(this).val()));    
                    }else{
                        $(this).parents(".input-group").find(".input-group-addon").removeClass("check");
                    }
                    
                });
                
                var sum=0;
                for (var i = 0; i < nnn.length; i++) {
                    sum=sum+nnn[i];
                };
                console.log(sum);
                //counting fine start here
                var d = new Date();
                var input_y,input_m;
                input_y = $('select[name="payment_year"]');
                input_m = $('select[name="payment_month"]');
                
                var today_val = (d.getMonth()+1)+d.getFullYear();
                var input_val = parseInt(input_y.val()) + parseInt(input_m.val());
                /*
                console.log(d.getDate());

                var fine = 0;
                */
                 /*        
                if(input_val == today_val && d.getDate()>10){
                    fine = (sum*5)/100;
                }
                else if(input_val < today_val){
                    fine = (sum*5)/100;
                }
                else{
                    fine = 0;
                }
        //console.log(fine);
            */
                if($("#is_fine").is(":checked")==true && d.getDate()> 10){
                    var fine = (sum*5)/100;
                    $('input[name="late_fee"]').val(fine);
                    $('input[name="total_with_fine"]').val(sum + fine);                     
                }else{
                    var fine = 0;
                    $('input[name="late_fee"]').val(fine);
                    $('input[name="total_with_fine"]').val(sum + fine);                     
                }
        
                //counting fine endhere
                //console.log(sum);
                $("#total").val(sum);
                $("#inword").html(inWord(sum));

            }







            /*
            //Late Fee Functional Start here old
            var d = new Date();
            var input_y,input_m;
            input_y = $('select[name="payment_year"]');
            input_m = $('select[name="payment_month"]');

            var today_val = (d.getMonth()+1)+d.getFullYear();
            
            input_y.on('change', function(event) {
                hitting();
            });
            input_m.on('change', function(event) {
                hitting();
            });

            function hitting(){
                var input_val = parseInt(input_y.val())+parseInt(input_m.val());
                if (input_val<today_val) {
                    $("#late").prop({'checked': true});
                }else{
                    $("#late").prop({'checked': false});
                }
            }

            //Late Fee Functional End here old
            */

            //Counting Due Start here
            $("#paid").on('keyup', function() {
                $("#curr_due").val($("#total_with_fine").val()-$(this).val());
            });
            $("#paid").on('change', function() {
                $("#curr_due").val($("#total_with_fine").val()-$(this).val());
            });
            //Counting Due End here
            
            
            //Get Previous Payment By Year Start here
            $("#history_year").on("change",function(){
                $(".all_month").removeClass("paid");
                $(".all_month span").html("");
                
                var year = $(this).val();
                var student_id = $("#student_id").val();
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('student_payment/payment/get_month_payment'); ?>",
                    data: {
                        student_id: student_id,
                        payment_year: year
                    }
                }).success(function(response){
                    if(response!="empty"){
                        var data = JSON.parse(response);                    
                        $.each(data,function(key,val){
                        $("#month_"+key).addClass("paid");
                        $("#month_"+key+">span").html(val+" TK");
                        });
                        
                    }
                });
            });
            //Get Previous Payment By Year End here

    });
    
    
</script>