
<div class="container-fluid" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		
		<?php if(ck_action("uploadDelete_menu","add_new_calander")){ ?>
    		<a href="<?php echo site_url('upload_delete/academicCalendar'); ?>" class="btn btn-default" id="add_new_calander">
    			Add New Calendar
    		</a>
		<?php } ?>
		
		<?php if(ck_action("uploadDelete_menu","all_calander")){ ?>	
    		<a href="<?php echo site_url('upload_delete/academicCalendar/all_academicCalendar_view'); ?>" class="btn btn-default" id="all_calander">
    			All Academic Calendar
    		</a>
		<?php } ?>
		
    </div>
</div>