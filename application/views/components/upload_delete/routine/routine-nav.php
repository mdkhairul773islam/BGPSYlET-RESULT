
<div class="container-fluid" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		<?php if(ck_action("uploadDelete_menu","add_new_calander")){ ?>
    		<a href="<?php echo site_url('upload_delete/routineUpload'); ?>" class="btn btn-default" id="add_new_routine">
    			Add New
    		</a>
    	<?php } ?>
    	
		<?php if(ck_action("uploadDelete_menu","all_routine")){ ?>		
    		<a href="<?php echo site_url('upload_delete/routineUpload/all_routine_view'); ?>" class="btn btn-default" id="all_routine">
    			All Routine
    		</a>
    	<?php } ?>	
    </div>
</div>