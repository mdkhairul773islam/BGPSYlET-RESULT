<style>
	.general .col-md-6{padding-left: 0px !important;}
	form.general{height:auto;min-height:250px;}
</style>
<div class="col-md-9">
    <div class="row single search">  
        <!-- single notice section -->	
		
		<h3>Digital Content</h3>
		 
		<?php
			$attr=array('class'=>'clearfix');
			echo form_open('', $attr);
		?>
			<div class="form-group clearfix">
				<label class="control-label col-md-2">Class</label>
				<div class="col-md-5">
					<select name="search[dc_class]" class="form-control">				   
						<option value="">-- Select Class --</option>
							<?php
								foreach (config_item('classes') as $key => $value) {?>
									<option value="<?php echo $key ;?>"><?php echo $value ;?></option>
								<?php
								}
							?>
								
					</select>
				</div>
			</div>

			<div class="form-group clearfix">
				<label class="control-label col-md-2">Group</label>
				<div class="col-md-5">
					<select name="search[dc_group]" class="form-control">				   
						<option value="">-- Select group --</option>
	                    <?php 
	                    	foreach (config_item('group') as $key => $value) {?>
	                    		<option value="<?php echo $key ;?>"><?php echo $value ;?></option>
	                    	<?php
	                    	}
	                    ?>
					</select>
				</div>
			</div>

			<div class="form-group clearfix">
			    <label class="control-label col-md-2">Subject</label>
				<div class="col-md-5">
					<select name="search[dc_subject]" class="form-control" >				   
						<option value="">-- Select Subject --</option>
                    	<?php 
                    		foreach (config_item('subject') as $key => $value) {?>
								<optgroup label="Class <?php echo $key ;?>">
									<?php
										foreach ($value as $skey => $svalue) {?>
											<option value="<?php echo $svalue ;?>"><?php echo $svalue ;?></option>
										<?php
										}
									?>
								</optgroup>
                    		<?php
                    		}
                    	?>
					</select>
				</div>
			</div>

			<div class="col-xs-7">
				<input class="pull-right" type="submit" name="result_Query" value="Show" name="submit" />
			</div>
		    <?php echo form_close(); if($digital_content!=NULL){ ?>
		
			<table>
				 <tr>
				    <th>Sl</th>
				    <th>Teacher</th>
				    <th>Title</th>
					<th>Class</th>
					<th>Group</th>
					<th>Subject</th>
					<th>Date</th>
					<th>Content</th>
				</tr>
				<?php foreach ($digital_content as $key => $d_c) { ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td>
						<?php
                            if($d_c->teacher_id){
                                $teacher = get_result('employee', ['id'=>$d_c->teacher_id]);
                                if($teacher) echo $teacher[0]->employee_name;
                            }
                            else
                                echo "N/A";
                        ?>
						</td>
						<td><?php echo $d_c->dc_title; ?></td>
						<td><?php echo $d_c->dc_class; ?></td>
						<td><?php echo ucfirst($d_c->dc_group); ?></td>
						<td><?php echo ucfirst(str_replace("_"," ",$d_c->dc_subject)); ?></td>
						<td><?php echo $d_c->dc_date; ?></td>
						<td><a href="<?php echo base_url($d_c->dc_attachment); ?>" download > Download </a></td>
					</tr>
				<?php } ?>
			</table>
			<?php } ?>
    </div>
 
</div>