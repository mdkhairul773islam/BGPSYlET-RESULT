<style>
@media print{
	aside, nav, .panel-heading, .panel-footer, .none{
		display: none !important;
	}
	.panel{
		border: 1px solid transparent;
		width: 100%;
		left: 0px;
        position: absolute;
        top: 30px;
        width: 100%;
	}
    .hide{
    	display: block !important;
	}
	.panel-body{
    	padding-top: 0;
	}
	.latest-id-cover {
	    width: 202px;
	}
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default none">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>ID Card</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php $attr = array('class' => 'form-horizontal');
                echo form_open('', $attr); ?>
                
                <div class="form-group">
                    <label class="col-md-2 control-label">Class <span class="req">*</span></label>
                    <div class="col-md-5">
                        <select name="search[class]" ng-model="class" class="form-control" required>
                            <option value="">-- Select --</option>
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
                    <label class="col-md-2 control-label">Year/Session<span class="req">*</span></label>
                    
                    <div class="col-md-5" ng-if="class =='Eleven' || class =='Twelve'">
                        <select name="search[session]" class="form-control" required>
                            <option value="">-- Select Year/Session --</option>
                            <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                            <option value="<?php echo $i; ?>-<?php echo $i+1; ?>"><?php echo $i; ?>-<?php echo $i+1; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-md-5" ng-if="class !='Eleven' && class !='Twelve'">
                        <select name="search[session]" class="form-control" required>
                            <option value="">-- Select Year/Session --</option>
                            <?php for($i=date("Y"); $i>=2019; $i--){ ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Section</label>
                    <div class="col-md-5">
                        <select name="search[section]" class="form-control">
                            <option value="">-- Select --</option>
                            <?php
                                foreach(config_item('section') as $key => $value){?>
                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Student ID</label>
                    <div class="col-md-5">
                        <input type="text" name="search[student_id]" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-7">
                        <div class="btn-group pull-right">
                            <input type="submit" value="Show" name="show" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>

        <?php if ($info != NULL)  { ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Show Result</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()">
                        <i class="fa fa-print"></i> Print
                    </a>
                </div>
            </div>

            <div class="panel-body">

                <div class="row">

                <?php foreach ($info as $key => $row) {
                $details = $this->action->read('registration', array('reg_id' => $row->student_id)); ?>
				<div class="col-xs-3 newH">
					<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
					<style>
					body{font-family: 'Roboto', sans-serif;}
					.new-card-cover {
						/*height: 288px;
						width: 220px;*/
						height: 304px;
						width: 207px;
						border: 1px solid #ddd;
						border-radius: 6px;
						overflow: auto;
						margin-bottom: 10px;
						overflow: hidden;
    					position: relative;
					}
					.new-card-aside {
						width: 40px;
						height: 281px;
						/*background: #03a9f4;*/
						/*background-image: url(<?php echo base_url('public/img/id-bg.png'); ?>);*/
						background: #fff;
						border-right: 1px solid #03a9f4;;
						color: #fff;
						text-transform: uppercase;
						font-weight: bold;
						text-align: center;
						display: table-cell;
						vertical-align: middle;
						font-size: 18px;
						border-top-left-radius: 6px;
						border-bottom-left-radius: 6px;
						float: left;
					}
					.new-card-aside-text {
						position: relative;
						top: 20%;
					}
					.new-card-logo {
						margin: 8px auto 0;
						display: block;
						border-radius: 50%;
						width: 50px;
						height: 50px;
					}
					.new-card-name {
						text-transform: uppercase;
						text-align: center;
						font-size: 12px;
						font-weight: bold;
						margin: 0;
					}
					.new-card-main small {
						/*text-align: center;*/
						display: block;
						font-size: 8px;
						padding-left: 50px;
					}
					.new-card-student-img {
						margin: 0px auto 2px;
						display: block;
						border-radius: 6px;
						width: 80px;
						height: 80px;
						border: 1px solid #ddd;
					}
					.new-card-student-name {
						margin: 0;
						font-size: 10px;
						font-weight: bold;
						text-align: center;
					}
					.new-card-main table {
					font-size: 8px;
						margin: 0 auto;
					}
					.new-card-main table tr td:nth-child(1) {
						text-align: right;
					}
					.new-card-main table tr td:nth-child(2) {
						text-align: left;
					}
					@media print {
					.new-card-aside {border-color: #ddd;}
					/*.new-card-aside-text {color: #fff !important;}*/
					.new-card-aside, .new-card-name, .new-card-student-name , .ins-name-normal {font-weight: normal !important;}
					}
					</style>

					<!-- <div class="new-card-cover">
						<div class="new-card-aside">
							<img class="new-card-logo" src="<?php //echo site_url("public/img/id-bg.png"); ?>" style="width: 40px; height: 300px; border-radius: 0; position: absolute; margin-top: 0; border-bottom-left-radius: 6px; border-top-left-radius: 6px;">
							<span class="new-card-aside-text">
								s<br>t<br>u<br>d<br>e<br>n<br>t
							</span>
						</div>

						<div class="new-card-main">
							<img class="new-card-logo" src="<?php //echo site_url("public/logo/logo.png"); ?>">
							<small style="padding-left: 40px; font-size: 10px; font-weight: bold;" class="text-center ins-name-normal">Border Guard Public School and College MYMENSINGH</small>
							<p class="new-card-name">ID Card</p>
							<img class="new-card-student-img" src="<?php //echo ($details) ? site_url('public/students/' . $details[0]->photo) : ""; ?>">
							<p class="new-card-student-name">ID No: <?php //echo $row->student_id ?></p>
							<p class="new-card-student-name"><?php //echo ($details) ? $details[0]->name : ""; ?></p>

							<p style="font-size: 9px; padding-top: 3px; text-align: center;">Class : <?php //echo $row->class?>
							<?php //if(($row->class != 'Nine' || $row->class != 'Ten') && $row->section != null){ ?> <br> Section : <?php //echo $row->section; } ?>
							<?php //if($row->class == 'Nine' || $row->class == 'Ten'){ ?> <br> Group: <?php //echo $row->group; } ?>
							<br>Session : <?php //echo $row->session;?> <br>Roll : <?php //echo $row->roll;?> <br >

							<img style="margin: 0 auto; height: auto; width: 64px;" src="<?php //echo site_url("public/img/hs.jpg"); ?>">
							<small style="padding-left: 40px;" class="text-center">Principal Signature</small>
							<img style="position: absolute; top: 0; left: 0;" src="<?php //echo site_url("public/img/id-bg1.png"); ?>">
							<img style="position: absolute; bottom: 0; left: 0;" src="<?php //echo site_url("public/img/id-bg1.png"); ?>">
							<img style="position: absolute; right: 0; top: 0;" src="<?php //echo site_url("public/img/id-bg2.png"); ?>">
						</div>
					</div> -->

					<style>
						.latest-id-cover {
							border: 2px solid #24a3d5;
							margin-bottom: 10px;
							height: 280px;
                            width: 190px;
						}
						.latest-id-cover img {
							padding: 5px;
							border-bottom: 2px solid #24a3d5;
							width: 100%;
						}
						.latest-id-main {overflow: hidden;}
						.latest-id-sid {
						    width: 19%;
						    float: left;
						    height: 130px;
						    position: relative;
						    border: 1px solid #ccc;
						    margin: 3px;
						}
						.latest-id-sid span {transform: rotate(-90deg);}
						.latest-id-sid-txt {
						    transform: rotate(-90deg);
						    width: 128px;
						    word-wrap: normal;
						    transform-origin: bottom right;
						    text-overflow: initial;
						    overflow: auto;
						    height: 41px;
						    position: absolute;
						    top: -38px;
						    left: -75px;
						    text-align: center;
						}
						.latest-id-img {
							width: 53%;
    						float: left;
						}
						.latest-id-validity {
							/*width: 20%;
    						float: left;*/
    						width: 20%;
						    float: left;
						    height: 130px;
						    position: relative;
						    border: 1px solid #ccc;
						    margin: 3px;
						    right: -4px;
						}
						.latest-id-validity-txt {
							transform: rotate(-90deg);
						    width: 128px;
						    word-wrap: normal;
						    transform-origin: bottom right;
						    text-overflow: initial;
						    overflow: auto;
						    height: 41px;
						    position: absolute;
						    top: -38px;
						    left: -70px;
						    text-align: center;
						    font-size: 11px;
						}
						.latest-id-img img {
							height: 137px;
							border-bottom: none;
						}
						.latest-id-name {
							border: 1px solid #ccc;
						    padding: 8px 5px;
						    text-align: center;
						    text-transform: uppercase;
						    margin: 0 3px;
						    font-size: 13px;
						}
						.latest-id-footer {}
						.latest-id-footer ul {
							overflow: hidden;
							padding: 5px;
							font-size: 12px;
						}
						.latest-id-footer ul li {
							display: inline-block;
						    width: 50%;
						    float: left;
						}
						.latest-id-footer ul li:nth-of-type(1) img {
							width: 23px;
						    float: left;
						    margin-right: 0px;
						    border-bottom: 0;
						    top: -4px;
						    position: relative;
						}
						.latest-id-footer ul li:nth-of-type(2) img {
							width: 80px;
						    border-bottom: 0;
						    padding: 0;
						    float: right;
						    margin-top: 6px;
						}
						.latest-id-footer ul li b {
							font-weight: normal;
							padding-right: 18px;
						}
						.latest-id-footer ul li:nth-of-type(1) {
							position: relative;
    						bottom: -25px;
						}
						.latest-id-footer ul li:nth-of-type(2) {
							text-align: right;
    						overflow: auto;
						}
						.latest-id-footer ul li:nth-of-type(1) i {
							position: absolute;
    						font-style: normal;
    						font-size: 12px;
                            width: 90px;
						}
					</style>
					<div class="latest-id-cover">
						<div class="latest-id-header">
							<img src="<?php  echo base_url('public/img/idcard3.png');?>" class="img-responsive">
						</div>
						<div class="latest-id-main">
							<div class="latest-id-sid">
								<div class="latest-id-sid-txt">SID : <?php echo $row->student_id ?></div>
							</div>
							<div class="latest-id-img">
								<img src="<?php echo ($details) ? site_url('public/students/' . $details[0]->photo) : ""; ?>" class="img-responsive">
							</div>
							<div class="latest-id-validity">
								<div class="latest-id-validity-txt">
									CID : <?php echo $row->sid ;?>
								</div>
							</div>
						</div>
						<div class="latest-id-name">
							<?php echo ($details) ? $details[0]->name : ""; ?>
						</div>
						<div class="latest-id-footer">
							<ul>
								<li>
									<span style="position:absolute; top:-20px; width:130px; left:4px;">Validity: <?php echo $row->validity; ?> </span>
									<img src="<?php echo base_url('public/img/phone.png');?>">
									<i><?php echo ($details) ? $details[0]->guardian_mobile : ""; ?></i>
								</li>
								<li>
									<img src="<?php echo site_url("public/img/hs.jpg"); ?>" class="img-responsive">
									<b>Principal</b>
								</li>
							</ul>
						</div>
					</div>

                </div>

                <?php } ?>
            </div>
        </div>
        <?php } ?>
