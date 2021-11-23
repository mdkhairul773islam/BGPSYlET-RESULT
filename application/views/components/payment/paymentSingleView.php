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
        .panel-body {height: 96vh;}
    }
    .title {font-family: "Algerian Condensed", Times, serif;}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default ">
            <div class="panel-heading none">
                <div class="panal-header-title">
                    <h1 class="pull-left">Payment Overview <span>(Invoice No : <?php echo $records[0]->invoice_no;?>)</span> </h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <!--pre><?php //print_r($result); ?></pre-->

            <div class="panel-body">
                <!-- Print banner -->
                <style>
                    .only-print, .banner {
                        display: none;
                    }
                    .full-width {
                        width: 100%;
                    }
                    @media print {
                        .only-print {
                            display: block;
                        } 
                        .full-width, .col-lg-4 {
                            width: 33.33333333%;
                            float: left;                            
                        }
                        .name-full-width {
                            width: 100%;
                        }
                        .name-full-width label{
                            margin-bottom: 0px;
                        }
                        .name-full-width br{
                            line-height: 0px;
                        }
                        .half-width {
                            width: 50%;
                        }
                        .border-right {
                            border-right: 1px dotted #ddd;
                        }
                        .col-lg-4 label,
                        .table>tbody>tr>th,
                        .table>tbody>tr>td,
                        .pull-left h4,
                        .print-font,
                        .pull-right h4 {
                            font-size: 80% !important;
                            padding: 0px  !important;
                            line-height: 16px  !important;
                            margin-bottom: 0px  !important;
                            font-weight: normal !important;
                        }
                        .banner {
                            display: block;
                            text-align: center;
                            border-bottom: 1px solid #ddd;
                            position: reletive;
                        }
                        .position {
                            left: -12px;
                            top: 7px;
                            position: absolute;
                            z-index: -2;
                            /*opacity: 0.6;*/
                        }
                        .banner h4, .banner p {
                            margin-bottom: 0;
                        }
                    }
                </style>

                <div class="row" style="font-family:'Times New Roman';">

                    <?php
                    $copy = ["Student Copy","Bank Copy","Office Copy"];
                     for ($i=0; $i <3 ; $i++) {

                      ?>
                    <div class="col-lg-4 full-width border-right <?php echo ($i > 0)? "only-print":""; ?>">
                        <!-- Print banner -->
                        <img class="img-responsive hide" width="100%" src="<?php echo site_url('public/banner/banner.png'); ?>" alt="Uploaded banner not found!">
                        
                        <?php
                            //fetch Student basic info from 'registration' and 'admission' table
                            $where = array('registration.reg_id' => $records[0]->student_id);
                            $joincond ="registration.reg_id = admission.student_id";
                            $studentInfo = $this->action->joinAndRead('registration','admission',$joincond,$where);
                        ?>
                        <div class="row">
                            <!--<pre><?php //print_r($studentInfo); ?></pre>-->
                            <div class="col-xs-4 name-full-width print-font">
                                <label><b>Name : <?php echo filter($studentInfo[0]->name); ?></b></label> <br>
                            </div> 
                            <div class="col-xs-4 half-width print-font">
                                <label>CID : <?php echo $studentInfo[0]->student_id; ?></label> <br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Payslip : <?php echo $records[0]->invoice_no;?></label> <br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>SID : <?php echo $studentInfo[0]->sid; ?></label> <br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Type : <?php echo filter($records[0]->type); ?></label> <br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Date  : <?php echo $records[0]->date; ?></label> <br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Month : <?php echo $records[0]->month; ?></label> <br>
                            </div>
                            <div class="col-xs-4 half-width print-font">
                                <label>Year  : <?php echo $records[0]->year; ?></label> <br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="10">SL</th>
                                        <th>Particulars</th>
                                        <th>Amount</th>
                                    </tr>
                                    <?php
                                        // fetch all payment fields from the 'payment' table
                                        $where = array("invoice_no" => $records[0]->invoice_no);
                                        $paymentFields = $this->retrieve->read('payment',$where);
                                        $total = 0.0;
                                        foreach ($paymentFields as $key => $value) {  ?>
                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $value->field; ?></td>
                                        <td><?php echo $value->amount;$total += $value->amount ?></td>

                                    </tr>
                                    <?php } ?>
                                    
                                    <tr>
                                        <th colspan="2"><strong>In Word : <span id="inword-<?php echo $i; ?>"></span> Taka Only. </strong><span class="pull-right"><strong>Total</strong></span></th>
                                        <th><strong><?php printf("%.2f",$total); ?></strong></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h4 class="text-center print-font">
                                    -------------------------------- <br>
                                    Student Signature
                                    </h4>
                                </div>
                                <div class="pull-right">
                                    <h4 class="text-center print-font">
                                    -------------------------------- <br>
                                    Signature of authority
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo site_url("private/js/inworden.js"); ?>"></script>
<script type="text/javascript" src="<?php echo site_url("private/js/inwordbn.js"); ?>"></script>
<script type="text/javascript">
    <?php for ($i=0; $i <3 ; $i++) { ?>
        $(document).ready(function(){$("#inword-<?php echo $i; ?>").html(inWorden(<?php echo $total; ?>));});
    <?php } ?>
</script>