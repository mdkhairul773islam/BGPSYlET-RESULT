
<div class="col-md-9">
    <div class="row">
        <!-- single notice section -->
		
		<div class="single">

			<h3>All Notice</h3>

			<table>
				<tr>
					<th>SL</th>
					<th>Title</th>
					<th>Date</th>
					<th>Download</th>
					<th>View</th>
				</tr>
			<?php foreach ($all_notice as $key => $notices) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $notices->notice_title;?></td>
					<td><?php echo $notices->notice_date;?></td>
					<td><a href="<?php echo site_url($notices->notice_path);?>" download><i class="fa fa-download"></i> Download</a></td>
					<td><a target="_blank" href="<?php echo site_url('home/notice'); ?>?id=<?php echo $notices->id ?>"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
				</tr>
			<?php } ?>
			</table>
		</div>
		<br/>
    </div>
</div>