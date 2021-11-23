
<div class="container-fluid" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
	<?php if(ck_action("uploadDelete_menu","add_new_result")){ ?>		
		<a href="<?php echo site_url('upload_delete/resultUpload'); ?>" class="btn btn-default" id="add_new_result">
			Add New
		</a>
	<?php } ?>	
		
	<?php if(ck_action("uploadDelete_menu","all_result")){ ?>			
		<a href="<?php echo site_url('upload_delete/resultUpload/all_result_view'); ?>" class="btn btn-default" id="all_result">
			All Result
		</a>
	<?php } ?>	
		
    </div>
</div>