<style>
	.teacher_table table tr td:nth-child(2){
		width: 80px;
		height: 80px;
	}
</style>

<div class="col-md-9">
    <div class="row">        
		<div class="single teacher_table">
		
		       <h3>All Teachers</h3>
			 <table>
				<thead>
					<tr>
						<th>SL</th>
						<th>Photo</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Mobile</th>
						<th>Subject</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($teachers as $key => $teacher) {
					$post=str_replace("_"," ",$teacher->employee_designation);
					if (mb_detect_encoding ($post)=="ASCII") {
						$post=ucfirst($post);
					}

					 ?>
				     <tr>
						<td><?php echo $key+1; ?></td>
						<td><img src="<?php echo site_url($teacher->employee_photo);?>" width="80px" height="80px"></td>
						<td><?php echo $teacher->employee_name; ?></td>
						<td><?php echo $post; ?></td>
						<td><?php echo $teacher->employee_mobile; ?></td>
						<td><?php echo ucfirst(str_replace("_"," ",$teacher->employee_subject)); ?></td>
					 </tr>
					<?php } ?>							
				</tbody>
			</table>
		</div>
    </div>
</div>