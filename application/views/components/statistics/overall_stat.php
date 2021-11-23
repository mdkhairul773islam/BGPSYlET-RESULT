<style>
	.attendance tr th{
		text-align: center;
	}
	.attendance label{
		display: block;
	}
    .reg-publish td{
        padding: 0 !important;
        border:  1px solid #bcb9b9 !important;
    }
    .reg-publish td input[type="text"]{
        border: 1px solid transparent;
    }
    .print-on-style {display:none;}

	@media print{
		.print-on-style {
		    display:block;
		    font-size: 20px;
    		    margin-bottom: 10px;
    		    text-align: center;
		}
		aside{
			display: none !important;
		}
		nav{
			display: none;
		}
		.panel{
			border: 1px solid transparent;
			left: 0px;
			position: absolute;
			top: 0px;
			width: 100%;
		}
		.box-width{
			width: 50%;
		}
		.none{
			display: none;
		}
		.panel-heading{
			display: none;
		}

		.panel-footer, .new-hide-print{
			display: none;
		}
        .hide{
            display: block !important;
        }
        .title{
            font-size:  25px;
        }
	}

</style>
<div class="container-fluid" ng-cloak>
	<div class="row">
		<div class="panel panel-default none">
			<div class="panel-heading">
				<div class="panal-header-title pull-left">
					<h1>Search Exam Statistics</h1>
				</div>
			</div>

			<div class="panel-body">				

				<?php
				$attribute = array("class" => "form-horizontal");
				echo form_open("", $attribute);
				?>

				<div class="form-group">
					<label class="col-md-2 control-label">Exam <span class="req">*</span></label>
					<div class="col-md-5">
						<select name="exam_id" class="form-control" required>
							<option value="" selected> -- Select Exam Name -- </option>
							<?php if($exam != null){ foreach($exam as $row){ ?>
							<option value="<?php echo $row->exam_id; ?>">
								<?php echo $row->title; ?>
							</option>
							<?php }} ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Exam Year <span class="req">*</span></label>
					<div class="col-md-5">
						<select name="year" class="form-control" required >
							<option value="">-- Select Year --</option>
                               <?php foreach ($session_list as $key => $value) { ?>
                               <option value="<?php echo $value->session; ?>"><?php echo $value->session; ?></option>
                               <?php } ?>  
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-2 control-label">Class <span class="req">*</span></label>
					<div class="col-md-5">
						<select name="class" ng-model="class" class="form-control" required >
							<option value="">-- Select Class --</option>
							<?php foreach(config_item('classes') as $key => $value){ ?>
							<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-2 control-label">Year/Session<span class="req">*</span></label>
					
					<!--<div class="col-md-5">
						<select name="session" class="form-control" required >
							<option value="">-- Select Year/Session--</option>
                               <?php foreach ($session_list as $key => $value) { ?>
                               <option value="<?php echo $value->session; ?>"><?php echo $value->session; ?></option>
                               <?php } ?>
						</select>
					</div>-->
					
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
				
				<div class="form-group" ng-if="class=='Six' || class=='Seven' || class=='Eight'">
					<label class="col-md-2 control-label">Section <span class="req"> </span></label>
					<div class="col-md-5">
						<select name="section" class="form-control">
							<option value="">-- Select Section --</option>
							<?php foreach(config_item('section') as $key => $value){ ?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="col-md-7">
					<div class="btn-group pull-right">
						<input type="submit" value="Show" name="show" class="btn btn-primary">
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>

			<div class="panel-footer">&nbsp;</div>
		</div>

	  <?php if($results != NULL){ ?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panal-header-title">
					<h1 class="pull-left">Exam Statistics</h1>
					<a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
				</div>
			</div>
			
			<!--pre><?php /* print_r($results); */ ?></pre-->

			<div class="panel-body">
				<img class="hide" style="margin: 25px 0px; width: 100%;" src="<?php echo site_url('public/banner/banner.jpg') ?>">
				<div class="row">	
				  <div class="col-xs-12 print-on-style">Exam Statistics</div>
				   <?php if($_POST['class'] == "Nine" || $_POST['class'] == "Ten" || $_POST['class'] == "Eleven" || $_POST['class'] == "Twelve") { ?>
				     <div class="col-xs-6">
						<table class="table table-bordered table-hover">
							<tr>
								<th colspan="2" style="font-size: 29px;">Science</th>								
							</tr>
							<tr>   <td>Total Student</td>
							       <td class="num-center"><?php echo $results[0]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total Examinee</td>
								<td class="num-center"><?php echo $results[1]['science']; ?></td>
							</tr>
							<tr>
								<td>Total Passed</td>
								<td class="num-center"><?php echo $results[2]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A+</td>
								<td class="num-center"><?php echo $results[3]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A</td>
								<td class="num-center"><?php echo $results[4]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A-</td>
								<td class="num-center"><?php echo $results[5]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;B</td>
								<td class="num-center"><?php echo $results[6]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;C</td>
								<td class="num-center"><?php echo $results[7]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;D</td>
								<td class="num-center"><?php echo $results[8]['science']; ?></td>
							</tr>
							
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;F</td>
								<td class="num-center"><?php echo $results[9]['science']; ?></td>
							</tr>
						</table>
					</div>
					
					<div class="col-xs-6">
						<table class="table table-bordered table-hover">							
							
							<tr>
								<th colspan="2" style="font-size: 29px;">Humanities</th>								
								
							</tr>
							<tr>   <td>Total Student</td>
							       <td class="num-center"><?php echo $results[0]['humanities']; ?></td>
							</tr>
							
							<tr>
								<td>Total Examinee</td>
								<td class="num-center"><?php echo $results[1]['humanities']; ?></td>
							</tr>
							<tr>
								<td>Total Passed</td>
								<td class="num-center"><?php echo $results[2]['humanities']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A+</td>
								<td class="num-center"><?php echo $results[3]['humanities']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A</td>
								<td class="num-center"><?php echo $results[4]['humanities']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A-</td>
								<td class="num-center"><?php echo $results[5]['humanities']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;B</td>
								<td class="num-center"><?php echo $results[6]['humanities']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;C</td>
								<td class="num-center"><?php echo $results[7]['humanities']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;D</td>
								<td class="num-center"><?php echo $results[8]['humanities']; ?></td>
							</tr>
							
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;F</td>
								<td class="num-center"><?php echo $results[9]['humanities']; ?></td>
							</tr>
						</table>
					</div>
				   <?php }else{ ?> 
				     <div class="col-xs-12">
						<table class="table table-bordered table-hover">
							<tr>
								<th colspan="2" style="font-size: 29px;">Class : <?php echo (!empty($_POST['class']) ? $_POST['class'] : ''); ?>  &nbsp; &nbsp; &nbsp; <?php echo (!empty($_POST['section']) ? $_POST['section'] : '') ?></th>								
								
							</tr>
							<tr>   <td>Total Student</td>
							       <td class="num-center"><?php echo $results[0]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total Examinee</td>
								<td class="num-center"><?php echo $results[1]['science']; ?></td>
							</tr>
							<tr>
								<td>Total Passed</td>
								<td class="num-center"><?php echo $results[2]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A+</td>
								<td class="num-center"><?php echo $results[3]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A</td>
								<td class="num-center"><?php echo $results[4]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;A-</td>
								<td class="num-center"><?php echo $results[5]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;B</td>
								<td class="num-center"><?php echo $results[6]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;C</td>
								<td class="num-center"><?php echo $results[7]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;D</td>
								<td class="num-center"><?php echo $results[8]['science']; ?></td>
							</tr>
							
							<tr>
								<td>Total&nbsp;&nbsp;&nbsp;&nbsp;F</td>
								<td class="num-center"><?php echo $results[9]['science']; ?></td>
							</tr>
						</table>
					</div>
				   <?php } ?>
				</div>
				<div class="pull-right hide" style="width: 200px; margin: 35px 0px 0px; text-align: center; border-top: 1px solid #bfbaba;">
					<strong>Principal</strong>
				</div>
			</div>
			<div class="panel-footer">&nbsp;</div>
		</div>
		<?php } ?> 
	</div>
</div>
