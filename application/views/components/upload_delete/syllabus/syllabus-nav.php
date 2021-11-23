
<div class="container-fluid" <?php echo $subMenu; ?> style="margin-bottom: 10px;">
    <div class="row">	
		<?php if(ck_action("uploadDelete_menu","add_new_syllabus")){ ?>
    		<a href="<?php echo site_url('upload_delete/syllabus'); ?>" class="btn btn-default" id="add_new_syllabus">
    			Add New
    		</a>
		<?php } ?>
		<?php if(ck_action("uploadDelete_menu","all_syllabus")){ ?>	
    		<a href="<?php echo site_url('upload_delete/syllabus/all_syllabus_view'); ?>" class="btn btn-default" id="all_syllabus">
    			All Syllabus
    		</a>
		<?php } ?>
    </div>
</div>