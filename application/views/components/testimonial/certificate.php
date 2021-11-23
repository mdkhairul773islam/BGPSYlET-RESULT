<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testimonial</title>
	<!-- include css -->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('public/css/bootstrap.css'); ?>" />
	<!--<link href="<?php // echo site_url('private/css/printstyle.css'); ?>" rel="stylesheet">-->
	<style>
		*,*::before,*::after{margin: 0;padding: 0;box-sizing:  border-box;}
		.print-area{width: 100%;margin-left: auto;margin-right: auto;max-width: 1000px;position: relative;}
		.serial-no{position: absolute;top: 130px;font-size: 16px;}
		.item-2{margin-top: 0px;float: left;font-size: 16px;}
		.print-area-content .item-1{float: right;text-align: center;font-size: 16px;}
		.print-area-content p{text-align: justify;font-size: 16px;line-height: 1.7;font-style: italic;font-weight: 0;}
		.print-area-content .sign{float: right;border-bottom: 2px solid #000;width: 200px;text-align: center;}
		.print-area-content {padding: 0 50px;}
		.info{display: flex;justify-content: space-between;align-items: flex-end;margin-top: -96px;}
		.date table tr td{padding: 2px;}
		.print {position: fixed;top: 70px;right: 70px;background: #3bbd81;color: #fff;}
		.site-logo{min-height: 70px;}
		#testomonila_bg{
			margin: 7px auto;
			text-align: center;
			border-bottom: 1px solid #000;
			width: 215px;
			color: #fff!important;
			border-radius: 50px;
			padding: 5px;
			background: #000080!important;
		}
		@media print{
			.print-area {margin-top:2% !important;}
			.print { display : none; }
			.main-header {display: block;}
		}
		.border-image {
			width: 100%;
			height: 700px;
			border: 40px solid transparent;
			border-image: url(<?php echo site_url('public/img/border-3.jpg'); ?>) 10% round;
		}
		.water_mark {position: absolute;top: 41%;left: 37%;width: 280px;}
		.water_mark img {filter: grayscale(100%);opacity: 0.1;width: 100%;}
	</style>
</head>
<body>
    <?php
        $theme_data = $this->action->read('theme');
        $logo = json_decode($theme_data[0]->header_logo,true);
    ?>
	<a class="print btn btn-primery" onclick="window.print()">
		<i class="fa fa-print"></i> Print
	</a>
	<figure class="water_mark">
		<img class="img-responsive" src="<?php echo site_url($logo['logo']);?>" alt="Image not found!">
	</figure>
	<?php if($student !=null) {?>
	<div class="border-image">
		<div class="print-area">
			<div class="print-area-content">
				<style media="screen">
    				.main-header, .main-header hr {display: none;}
    				.testomonia-bg{background: #000080; color: #fff !important;}
				</style>
				<div class="title-1">
					<div class="text-center">
						<h2 class="testomonial" style="font-size: 36px;">
						<?php echo config_item('site_name'); ?>, Sylhet
						</h2>
						<h4 class="testomonial" style="font-size: 18px;text-align: center;">
							BGB Sector HQ, Akhalia, Sylhet , Bangladesh. EIIN-130407
						</h4>
						<div class="site-logo">
							<img width="100px" src="<?php echo site_url($logo['logo']);?>"
								alt="Image not found!">
						</div>
					</div>
					<h3 class="testomonia-bg" id="testomonila_bg">Testimonial</h3>
				</div>
				<div class="info">
					<h5 class="slno" style="margin: 10px 0;font-style: italic;font-weight: 600; font-size: 16px;">
						Serial no. <?php $si = date("y"); echo ($si.$serial); ?>
					</h5>
					
					<h5 class="date">
					<table>
						<tr>
							<td>Roll No</td>
							<td>
							    &nbsp;: 
							    <strong>
								    <?php echo (!empty($student[0]->roll) ? $student[0]->roll : '');?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>Reg No</td>
							<td>
							    &nbsp;: 
							    <strong>
								    <?php echo (!empty($student[0]->reg_id) ? $student[0]->reg_id : '');?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>Session</td>
							<td>
							    &nbsp;: 
							    <strong>
								    <?php echo (!empty($student[0]->session) ? $student[0]->session : '');?>
								</strong>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Date</td>
							<td>
							    &nbsp;: 
							    <strong>
							        <?php echo date('d-m-Y'); ?>
							    </strong>
							</td>
						</tr>
					</table>
					</h5>
				</div>
				<p style="margin-top: 4%; margin-bottom: 6%;">
					This is to certify that 
					<strong><?php echo strtoupper($student[0]->name); ?></strong> ,
					 Son/Daughter of Mr 
					 <strong><?php echo strtoupper($student[0]->father_name); ?></strong>,
					  and Mrs- <strong><?php echo strtoupper($student[0]->mother_name); ?></strong>,
					   He/She passed the Higher Secondary School Certificate Examination from 
					   <strong><?php echo $student[0]->group; ?> </strong>
					    group under the Board of Intermediate and Secondary Education Sylhet held in 
					    <strong><?php echo $student[0]->year; ?></strong>
					     and secured GPA(Grade Point Average) 
					     <strong><?php echo $student[0]->gpa;?></strong>
					      in scale of 5.00.
					<br>
					To the best of my knowledge he/she possesses good character. 
					He/She is not known to have taken part in any activity subversive of the state or 
					institution discipline during the period of his/her study in the institution.
				</p></br>
				<div class="clearfix">
					<div class="item-2" style="
						margin-left: 8px;font-style: italic;font-weight: 600;margin-top:24px;">
						<h4>Compared by ..............</h4>
						<h4>Date: </h4>
					</div>
					<div class="item-1" style="margin-right: 8px;">
						<h4 style="
							font-size: 18px;font-style: italic;font-weight: 600;margin-top: 30px;">
							Head Of The Institute <br> <span></span>
							<small> Border Guard Public School and College<br/> Sylhet</small>
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