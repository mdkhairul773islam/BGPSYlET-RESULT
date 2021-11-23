
<div class="container-fluid" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		
		<?php if(ck_action("uploadDelete_menu","add_new_leave")){ ?>
    		<a href="<?php echo site_url('upload_delete/leaveList'); ?>" class="btn btn-default" id="add_new_leave">
    			Add New
    		</a>
    	<?php } ?>
    	
		<?php if(ck_action("uploadDelete_menu","all_leave")){ ?>	
    		<a href="<?php echo site_url('upload_delete/leaveList/all_leaveList_view'); ?>" class="btn btn-default" id="all_leave">
    			All Leave List
    		</a>
    	<?php } ?>	
    </div>
</div>