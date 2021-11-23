<style>
	.teacher_table table tr td:nth-child(2){
		width: 80px;
		height: 80px;
	}
	select{
		width: 327px;
		height: 30px;
		border: 1px solid #0092B7 !important;
		margin-bottom: 8px;
	}
	input[type="submit"]{
		width: 80px;
		height: 30px;
		background: #fff;
		color: #0092B7 !important;
		border: 1px solid #0092B7 !important;
	}
	input[type="submit"]:hover{
		background: #0092B7 !important;
		color: #fff !important;
	}
</style>

<div class="col-md-9">
    <div class="row">       
		<div class="single teacher_table">	
				
            <h3>All Students</h3>
			
			<?php echo form_open("");?>
                <select name="session">
                   <option value="">-- Select Session --</option>
                   <?php foreach ($session_list as $key => $value) { ?>
                   <option value="<?php echo $value->session; ?>"><?php echo $value->session; ?></option>
                   <?php } ?>
               </select>
				
				<select name="class" required="required">				   
					<option value="">-- Select Class--</option>
					<?php
						foreach (config_item('classes') as $key => $value) {?>
							<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
						<?php
						}
					?>
				</select>
			<input type="submit" name="viewQuery" value="Show" />
			<?php echo form_close(); ?>
			
			  <table>
				<thead>
					<tr> 
					    <th>Sl</th>
						<th>Roll No</th>
						<th>Photo</th>
						<th>Name</th>
						<th>Session</th>
						<th>Class</th>
						<th>Gaurdian Mobile</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($student_info as $key => $student) { ?>
					 <tr>   
					    <td><?php echo $key+1; ?></td>
						<td><?php echo $student->students_roll; ?></td>
						<td><img src="<?php echo site_url($student->photo);?>" width="80px" height="80px"></td>
						<td><?php echo $student->students_name; ?></td>
						<td><?php echo $student->session; ?></td>
						<td><?php echo $student->class; ?></td>
						<td><?php echo $student->mobile_number; ?></td>
				     </tr>
				<?php } ?>	
				</tbody>
			</table>
	
		</div>
    </div>
</div>