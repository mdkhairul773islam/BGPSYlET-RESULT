<div class="container-fluid none" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		<?php if(ck_action("attendance_fine","add")){ ?>	
    		<a href="<?php echo site_url('attendancefine/attendancefine'); ?>" class="btn btn-default" id="add">
    			Fine
    		</a>
		<?php } ?>
		<?php if(ck_action("attendance_fine","all")){ ?>	
    		<a href="<?php echo site_url('attendancefine/attendancefine/allfine'); ?>" class="btn btn-default" id="all">
    			All Fine
    		</a>
		<?php } ?>
    </div>
</div>