<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Testimonial</title>
            <!-- include css -->
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('public/css/bootstrap.css'); ?>" /> 
        <link href="<?php echo site_url('private/css/printstyle.css'); ?>" rel="stylesheet">
        
        <style>
            *,*::before,*::after{
            	margin: 0;
            	padding: 0;
            	box-sizing:  border-box;
            }
            .print-area{
            	width: 100%;
            	margin-left: auto;
            	margin-right: auto;
            	max-width: 1000px;
            	position: relative;
            }
            .serial-no{
            	position: absolute;
            	top: 130px;
            	font-size: 16px;
            }
            .item-2{
                margin-top: 0px;
            	float: left;
            	font-size: 16px;
            }
            .print-area-content .item-1{
            	float: right;
            	text-align: center;
            	font-size: 16px;
            }
            .print-area-content p{
                text-align: justify;
                font-size: 16px;
                line-height: 1.7;
                font-style: italic;
                font-weight: 0;
            }
            .print-area-content .sign{
            	float: right;
            	border-bottom: 2px solid #000;
            	width: 200px;
            	text-align: center;
            }
            .print-area-content {
                padding: 0 50px;
            }
             @media print{
                .print-area {margin-top:10% !important;}
                .print { display : none; }
                
             }
             
             .border-image {
                width: 100%;
                height: 950px;
                border: 40px solid transparent;
                padding: 15px;
                border-image: url(<?php echo site_url('public/img/border-3.jpg'); ?>) 10% round;
            }
            
        </style>
    </head>
    <body>
        <?php if($student !=null) {?>
        <div class="border-image">
            
        
        <div class="print-area">
            <div class="print-area-content">
            <style media="screen">
            .main-header, .main-header hr {display: none;}
            @media print {
            .main-header {display: block;}
            }
            </style>
            <div class="title-1">
                <!--<img class="img-responsive" src="http://www.bgpscsylhet.edu.bd/public/banner/banner.png" alt="Uploaded banner not found!">-->
                
                <div class="text-center">
                    <h2 class="testomonial"><?php echo config_item('site_name'); ?></h2>
                    <h4 class="testomonial">BGB Sector HQ, Akhalia, Sylhet , Bangladesh. EIN-130407</h4>
                    <img src="http://www.bgpscsylhet.edu.bd/public/theme/logo_418863.png" alt="Image not found!">
                </div>
                <h2 class="testomonial" style="margin: 30px auto; text-align: center; border-bottom: 1px solid #000; width: 215px; background: black; color: #fff;border-radius: 50px;padding: 5px;">Testimonial</h2>
                <a class="print btn btn-primery pull-right print-custom" style="margin-top: -45px;;float: right;color: blue;border: 1px solid blue;padding: 5px 15px;font-size: 12px; cursor: pointer;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                <h5 class="date" style="float: right;font-style: italic;font-weight: 600; margin-top:0; font-size: 16px; line-height: 20px;">Roll: <?php echo (!empty($student[0]->roll) ? $student[0]->roll : '');?> <br/> Reg. No: <?php echo (!empty($student[0]->reg_id) ? $student[0]->reg_id : '');?> <br/> Session: <?php echo (!empty($student[0]->session) ? $student[0]->session : '');?>  <br/> Date: <?php echo date('Y-m-d'); ?> </h5>
            </div>
            <div class="info">
                <h5 class="slno" style="margin: 10px 0;font-style: italic;font-weight: 600; font-size: 16px;">Serial no. <?php $si = date("y"); echo ($si.$serial); ?></h5>
            </div>
            <p style="margin-top: 15%;"> This is to certify that <strong><?php echo strtoupper($student[0]->name); ?></strong> , Son/Daughter of Mr <strong><?php echo strtoupper($student[0]->father_name); ?></strong>, and Mrs- <strong><?php echo strtoupper($student[0]->mother_name); ?></strong>, He/She passed the secondary school certificate from <strong><?php echo $student[0]->group; ?> </strong> group under the board of intermediate and secondary education sylhet held in <strong><?php echo $student[0]->year; ?></strong> and secured GPA(grade point average) <strong><?php echo $student[0]->gpa;?></strong> in scal of 5.00. To the best of my knowladge he/she possesses good character. He/She is not known to have taken part in any activity subversive of the sate or institution discpline during the period of his/her study in the institution. </p></br> <p>
              
            </p>
            <div class="clearfix">
                <div class="item-2" style="margin-left: 8px;font-style: italic;font-weight: 600;">
                    <h4>Compared by ..............</h4>
                </div>
                <div class="item-1" style="margin-right: 8px;">
                    <h4 style="font-size: 18px;font-style: italic;font-weight: 600;">Headmaster <br> <span>
                      <small> Border Guard Public School and College<br/>
                       Sylhet</small>
                    </h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php } else {?>
            <div class="col-md-offset-3 col-md-6 col-xs-12">
                <h3 class="well well-lg text-center text-danger">Record Not Found !</h3>
            </div>
        <?php }?>
    </body>
</html>