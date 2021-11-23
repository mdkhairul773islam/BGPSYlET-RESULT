<style>
	.general .col-md-6{padding-left: 0px !important;}
	form.general{height:auto;min-height:250px;}
</style>
<div class="col-md-9">
    <div class="row single search">  
        <!-- single notice section -->	
	<h3>Search Your Result</h3>
		 
		<?php
			$attr=array('class'=>'clearfix');
			echo form_open('', $attr);
		?>

			<div class="form-group clearfix">
				<label class="control-label col-xs-2">Class</label>
				<div class="col-xs-5">
					<select name="class" class="form-control" required>
					<option value="">-- Select Class --</option>
					<?php
						foreach (config_item('classes') as $key => $value) {?>
							<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
						<?php
						}
					?>
				</select>
				</div>
			</div>

			<div class="form-group clearfix">
				<label class="control-label col-xs-2">Exam</label>
				<div class="col-xs-5">
					<select class="form-control" name="exam" required>
					<option value="">-- Select Exam --</option>
                    <option value="Weekly_Exam">Weekly Exam</option>
                    <option value="Monthly_Exam">Monthly Exam</option>
                    <option value="Model_Test">Model Test</option>
                    <option value="Year_Final">Year Final</option>
				</select>
				</div>
			</div>

			<div class="col-xs-7">
				<input class="pull-right" type="submit" name="result_Query" value="Show" name="submit" />
			</div>
			
		<?php echo form_close(); ?>
		<?php if(isset($result)){ ?>
				<table>
					 <tr>
					    <th>Sl</th>
						<th>Class</th>
						<th>Exam</th>					
						<th>Date</th>
						<th>Result</th>
					</tr>
				<?php  foreach ($result as $key => $result) { ?>
					 <tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $result->result_class;?></td>						
						<td><?php echo str_replace("_", " ",$result->result_exam);?></td>
						<td><?php echo $result->result_date;?></td>						
						<td><a href="<?php echo base_url($result->result_attachment) ;?>" download > Download </a></td>
					</tr>
				<?php }?>
			  </table>
		<?php } ?>
    </div>
</div>